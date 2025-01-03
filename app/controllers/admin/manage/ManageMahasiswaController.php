<?php 
class ManageMahasiswaController {

    public function manageMahasiswaPage()
	{

		$currentPage = PaginationUtil::paginationHandler();

		$userService = UserService::getInstance();
		$mahasiswaService = MahasiswaService::getInstance();

		$users = $userService->getManyUser(['role' => 'mahasiswa']);
		$mahasiswas = $mahasiswaService->getAllMahasiswa($currentPage);
		$mahasiswaCount = $mahasiswaService->count();
		
		$prevPage = PaginationUtil::getPrevPage($currentPage);
		$pageCount = PaginationUtil::getPageCount($mahasiswaCount);
		$nextPage = PaginationUtil::getNextPage($mahasiswas, $currentPage);
		
		
		for ($i = 0; $i < count($users); $i++) {
			for ($j = 0; $j < count($mahasiswas); $j++) {
				if ($users[$i]->getIdUser() == $mahasiswas[$j]->getIdUser()) {
					$users[$i]->setRoleDetail($mahasiswas[$j]);
				}
			}
		}	

		$data = [
			'users' => $users,
			'flash' => Flasher::flash(),
			'newMahasiswaEndpoint' => App::get('root_uri') . '/admin/manage/mahasiswa/new',
			'updateMahasiswaEndpoint' => App::get('root_uri') . '/admin/manage/mahasiswa/update',
			'deleteMahasiswaEndpoint' => App::get('root_uri') . '/admin/manage/mahasiswa/delete',
			'usersCount' => $mahasiswaCount,
			'prevPage' => $prevPage,
			'currentPage' => $currentPage,
			'pageCount' => $pageCount,
			'nextPage' => $nextPage
		];

		return Helper::view('admin/manage/mahasiswa', array_merge($data, ['title' => 'Manage Mahasiswa']));
	}
    public function addNewMahasiswa()
	{
		if (
			isset($_POST['username']) && $_POST['username'] != '' &&
			isset($_POST['nim']) && $_POST['nim'] != '' &&
			isset($_POST['first-name']) && $_POST['first-name'] != '' &&
			isset($_POST['last-name']) && $_POST['last-name'] != '' &&
			isset($_POST['prodi']) && $_POST['prodi'] != '' &&
			isset($_POST['email']) && $_POST['email'] != '' &&
			isset($_POST['phone-number']) && $_POST['phone-number'] != '' &&
			isset($_POST['address']) && $_POST['address'] != '' &&
			isset($_POST['password']) && $_POST['password'] != ''
		) {
			$userService = UserService::getInstance();
			$mahasiswaService = MahasiswaService::getInstance();

			// get input
			$username = $_POST['username'];
			$nim = $_POST['nim'];
			$firstName = $_POST['first-name'];
			$lastName = $_POST['last-name'];
			$prodi = $_POST['prodi'];
			$email = $_POST['email'];
			$phoneNumber = $_POST['phone-number'];
			$address = $_POST['address'];
			$role = 'mahasiswa';

            $isUserExists = $userService->getSingleUser(['username' => $username]);

            if($isUserExists) {
                Flasher::setFlash("danger", "Username already exist!");
                return Helper::redirect('/admin/manage/mahasiswa');
            }

			$isMahasiswaExists = $mahasiswaService->getSingleMahasiswa(['nim' => $nim]);

			if($isMahasiswaExists) {
				Flasher::setFlash("danger", "NIM already exist!");
				return Helper::redirect('/admin/manage/mahasiswa');
			}

			$rawPassword = $_POST['password'];
			$salt = Helper::generateRandomHex(16);
			$password = $userService->hashPassword($salt, $rawPassword);

			$newUserId = $userService->addNewUser($username, $firstName, $lastName, $email, $address, $phoneNumber, $role, $salt, $password);

			$prodi = $_POST['prodi'];

			$mahasiswaService->addNewMahasiswa($nim, $newUserId, $prodi);

			Flasher::setFlash("success", "Mahasiswa successfully added!");
		} else {
			Flasher::setFlash("danger", "All fields must be filled");
		}

		return Helper::redirect('/admin/manage/mahasiswa');
	}

	public function updateMahasiswa() {
		if (
			isset($_POST['id_user']) && $_POST['id_user'] != '' &&
			isset($_POST['username']) && $_POST['username'] != '' &&
			isset($_POST['nim']) && $_POST['nim'] != '' &&
			isset($_POST['first-name']) && $_POST['first-name'] != '' &&
			isset($_POST['last-name']) && $_POST['last-name'] != '' &&
			isset($_POST['prodi']) && $_POST['prodi'] != '' &&
			isset($_POST['email']) && $_POST['email'] != '' &&
			isset($_POST['phone-number']) && $_POST['phone-number'] != '' &&
			isset($_POST['address']) && $_POST['address'] != ''
		) {
			$userService = UserService::getInstance();
			$mahasiswaService = MahasiswaService::getInstance();

			// get input
			$idUser = $_POST['id_user'];
			$username = $_POST['username'];
			$nim = $_POST['nim'];
			$firstName = $_POST['first-name'];
			$lastName = $_POST['last-name'];
			$prodi = $_POST['prodi'];
			$email = $_POST['email'];
			$phoneNumber = $_POST['phone-number'];
			$address = $_POST['address'];
			$role = 'mahasiswa';

            $tempUser = $userService->getSingleUser(['username' => $username]);
			$isUserExists = $tempUser != null && $tempUser->getIdUser() != $idUser;

            if($isUserExists) {
                Flasher::setFlash("danger", "Username already exist!");
                return Helper::redirect('/admin/manage/mahasiswa');
            }

			$tempMahasiswa = $mahasiswaService->getSingleMahasiswa(['nim' => $nim]);
			$isMahasiswaExists = $tempMahasiswa != null && $tempMahasiswa->getIdUser() != $idUser;

			if($isMahasiswaExists) {
				Flasher::setFlash("danger", "NIM already exist!");
				return Helper::redirect('/admin/manage/mahasiswa');
			}

			if (isset($_POST['password']) && $_POST['password'] != '') {
				$rawPassword = $_POST['password'];
				$salt = Helper::generateRandomHex(16);
				$password = $userService->hashPassword($salt, $rawPassword);

				$userService->updateUser($username, $firstName, $lastName, $email, $address, $phoneNumber, $role, $salt, $password, ['id_user' => $idUser]);
			} else {
				$userService->updateUser($username, $firstName, $lastName, $email, $address, $phoneNumber, $role, '', '', ['id_user' => $idUser]);
			}

			$prodi = $_POST['prodi'];

			$mahasiswaService->updateMahasiswaProfile($nim, $prodi, ['id_user' => $idUser]);

			Flasher::setFlash("success", "Mahasiswa successfully updated!");
		} else {
			Flasher::setFlash("danger", "All fields must be filled");
		}

		return Helper::redirect('/admin/manage/mahasiswa');
	}

	public function deleteMahasiswa() {
		if (isset($_POST['id_user']) && $_POST['id_user'] != '') {
			// Defining Services
			$userService = UserService::getInstance();

			// Take inputs from request
			$idUser = $_POST['id_user'];

			// Add new code of conduct
			$userService->deleteUser($idUser);

			Flasher::setFlash('success', 'Mahasiswa has been deleted successfully!');
		} else {
			Flasher::setFlash('danger', 'Please fill all the fields!');
		}
		
		Helper::redirect('/admin/manage/mahasiswa');
	}
}