<?php
class MahasiswaService extends DBService
{

    public function __construct()
    {
        parent::__construct('tb_mahasiswa');
    }

    public static function getInstance(): self
    {
        return parent::getInstance();
    }

    public function getAllMahasiswa(int $page = 0): array
    {
        $rawMahasiswas = $this->getDB()->findAll($this->getTable(), 'nim', 'ASC', $page);
        $mahasiswas = [];
        
        if ($rawMahasiswas) {
            foreach ($rawMahasiswas as $rawMahasiswa) {
                $mahasiswas[] = MahasiswaModel::fromStdClass($rawMahasiswa);
            }
        }

        return $mahasiswas;
    }
    public function getSingleMahasiswa($where): MahasiswaModel|null
    {
        $rawMahasiswa = $this->getSingle($where);
        if ($rawMahasiswa) {
            $mahasiswa = MahasiswaModel::fromStdClass($rawMahasiswa);
            return $mahasiswa;
        }

        return null;
    }

    public function getTotalMahasiswaPoints($nimMahasiswa): int
    {
        $totalPoints = $this->getDB()->execute("SELECT total_points FROM view_total_mahasiswa_point WHERE nim_mahasiswa = :nim_mahasiswa", [
            'nim_mahasiswa' => $nimMahasiswa
        ]);

        return $totalPoints['total_points'] ?? 0;
    }

    public function addNewMahasiswa(int $nim, int $idUser, string $prodi): string
    {
        return $this->getDB()->insert($this->getTable(), [
            'nim' => $nim,
            'id_user' => $idUser,
            'prodi' => $prodi
        ]);
    }

    public function updateMahasiswaProfile($nim, $prodi, $where = [])
    {
        $this->getDB()->update($this->getTable(), [
            'nim' => $nim,
            'prodi' => $prodi,
        ], $where);
    }

    public function getMahasiswaNotificationCount(MahasiswaModel $mahasiswaModel)
    {
        // Defining Services
        $mahasiswaViolationService = MahasiswaViolationService::getInstance();
        $mahasiswaViolations = $mahasiswaViolationService->getManyMahasiswaViolation(['nim_mahasiswa' => $mahasiswaModel->getNim(), 'is_new' => 1]);

        return count($mahasiswaViolations) ?? 0;
    }

    public function getDosenNotification(DosenModel $dosenRole)
    {
        $reportCommentService = ReportCommentService::getInstance();
        $reportCommentView = $reportCommentService->getView();
        $sql = "SELECT * FROM $reportCommentView WHERE id_report IN (SELECT id_report from tb_report WHERE nidn_dosen = :nidn_dosen) AND is_new = 1 AND id_user != :id_user";

        $rawReportComments = $this->getDB()->execute($sql, [
            'nidn_dosen' => $dosenRole->getNidn(),
            'id_user' => $dosenRole->getIdUser(),
        ]);

        $reportComments = [];

        if ($rawReportComments) {
            foreach ($rawReportComments as $rawReportComment) {
                $reportComments[] = ReportCommentModel::fromStdClass($rawReportComment);
            }
        }

        return $reportComments;
    }

    public function getDosenNotificationCount(DosenModel $dosenRole)
    {
        $sql = "SELECT COUNT(*) as count FROM tb_report_comment WHERE id_report IN (SELECT id_report from tb_report WHERE nidn_dosen = :nidn_dosen) AND is_new = 1 AND id_user != :id_user";

        $rawReportComments = $this->getDB()->execute($sql, [
            'nidn_dosen' => $dosenRole->getNidn(),
            'id_user' => $dosenRole->getIdUser(),
        ]);

        if ($rawReportComments) {
            return $rawReportComments[0]->count;
        }

        return 0;
    }
}