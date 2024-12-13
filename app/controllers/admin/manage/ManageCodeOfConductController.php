<?php
class ManageCodeOfConductController {
    public function manageCodeOfConductPage()
	{

		$currentPage = PaginationUtil::paginationHandler();

        // Defining services
		$violationLevelService = ViolationLevelService::getInstance();
        $codeOfConductService = CodeOfConductService::getInstance();

        // Get all violation levels
		/**
		 * @var ViolationLevelModel[] $violationLevels
		 */
		$violationLevels = $violationLevelService->getAllViolationLevel() ?? [];
		$violationLevelsCount = $violationLevelService->count();

        // Get all code of conducts
        $codeOfConducts = $codeOfConductService->getAllCodeOfConduct($currentPage) ?? [];
		$codeOfConductsCount = $codeOfConductService->count();

		$prevPage = PaginationUtil::getPrevPage($currentPage);
		$pageCount = PaginationUtil::getPageCount($codeOfConductsCount);
		$nextPage = PaginationUtil::getNextPage($codeOfConducts, $currentPage);

		$countPerLevel = [];

		foreach ($violationLevels as $violationLevel) {
			$countPerLevel[$violationLevel->getLevel()] = $codeOfConductService->count(['id_violation_level' => $violationLevel->getIdViolationLevel()]);
		}

        for ($i = 0; $i < count($codeOfConducts); $i++) {
            for ($j = 0; $j < count($violationLevels); $j++) {
                if ($codeOfConducts[$i]->getIdViolationLevel() == $violationLevels[$j]->getIdViolationLevel()) {
                    $codeOfConducts[$i]->setViolationLevel($violationLevels[$j]);
                }
            }
        }

		$data = [
			'flash' => Flasher::flash(),
            'violationLevels' => $violationLevels,
            'violationLevelsCount' => $violationLevelsCount,
			'codeOfConducts' => $codeOfConducts,
			'codeOfConductCount' => $codeOfConductsCount,
			'manageCodeOfConductEndpoint' => App::get('root_uri') . '/admin/manage/code-of-conduct',
			'addCodeOfConductEndpoint' => App::get('root_uri') . '/admin/manage/code-of-conduct/new',
			'updateCodeOfConductEndpoint' => App::get('root_uri') . '/admin/manage/code-of-conduct/update',
			'deleteCodeOfConductEndpoint' => App::get('root_uri') . '/admin/manage/code-of-conduct/delete',
			'prevPage' => $prevPage,
			'currentPage' => $currentPage,
			'pageCount' => $pageCount,
			'nextPage' => $nextPage,
			'countPerLevel' => $countPerLevel
		];

		return Helper::view('admin/manage/code_of_conduct', array_merge($data, ['title' => 'Manage Code of Conduct']));;
	}

    public function addCodeOfConduct() {
        if (
			isset($_POST['name']) && $_POST['name'] != '' &&
			isset($_POST['id_violation_level']) && $_POST['id_violation_level'] != '' &&
			isset($_POST['description']) && $_POST['description'] != ''
		) {
			// Defining Services
			$codeOfConductService = CodeOfConductService::getInstance();

			// Take inputs from request
			$name = $_POST['name'];
			$idViolationLevel = $_POST['id_violation_level'];
			$description = $_POST['description'];

			// Add new code of conduct
			$codeOfConductService->addNewCodeOfConduct($name, $description, $idViolationLevel);

			Flasher::setFlash('success', 'Code of Conduct has been added successfully!');
		} else {
			Flasher::setFlash('danger', 'Please fill all the fields!');
		}
		
		Helper::redirect('/admin/manage/code-of-conduct');
    }

	public function updateCodeOfConduct() {
		if (
			isset($_POST['id_code_of_conduct']) && $_POST['id_code_of_conduct'] != '' &&
			isset($_POST['name']) && $_POST['name'] != '' &&
			isset($_POST['id_violation_level']) && $_POST['id_violation_level'] != '' &&
			isset($_POST['description']) && $_POST['description'] != ''
		) {
			// Defining Services
			$codeOfConductService = CodeOfConductService::getInstance();

			// Take inputs from request
			$idCodeOfConduct = $_POST['id_code_of_conduct'];
			$name = $_POST['name'];
			$idViolationLevel = $_POST['id_violation_level'];
			$description = $_POST['description'];

			// Add new code of conduct
			$codeOfConductService->updateCodeOfConduct($name, $description, $idViolationLevel, ['id_code_of_conduct' => $idCodeOfConduct]);

			Flasher::setFlash('success', 'Code of Conduct has been added successfully!');
		} else {
			Flasher::setFlash('danger', 'Please fill all the fields!');
		}
		
		Helper::redirect('/admin/manage/code-of-conduct');
	}

	public function deleteCodeOfConduct() {
		if (isset($_POST['id_code_of_conduct']) && $_POST['id_code_of_conduct'] != '') {
			// Defining Services
			$codeOfConductService = CodeOfConductService::getInstance();

			// Take inputs from request
			$idCodeOfConduct = $_POST['id_code_of_conduct'];

			// Add new code of conduct
			$codeOfConductService->deleteCodeOfConduct($idCodeOfConduct);

			Flasher::setFlash('success', 'Code of Conduct has been deleted successfully!');
		} else {
			Flasher::setFlash('danger', 'Please fill all the fields!');
		}
		
		Helper::redirect('/admin/manage/code-of-conduct');
	}
}