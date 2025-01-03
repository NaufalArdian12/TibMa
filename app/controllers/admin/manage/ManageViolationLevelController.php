<?php
class ManageViolationLevelController
{
	public function manageViolationLevelPage()
	{

		$currentPage = PaginationUtil::paginationHandler();

		$violationLevelService = ViolationLevelService::getInstance();

		$violationLevels = $violationLevelService->getAllViolationLevel($currentPage) ?? [];
		$violationLevelsCount = $violationLevelService->count();

		$prevPage = PaginationUtil::getPrevPage($currentPage);
		$pageCount = PaginationUtil::getPageCount($violationLevelsCount);
		$nextPage = PaginationUtil::getNextPage($violationLevels, $currentPage);

		$data = [
			'flash' => Flasher::flash(),
			'violationLevels' => $violationLevels,
			'violationLevelsCount' => $violationLevelsCount,
			'violationLevelEndpoint' => App::get('root_uri') . '/admin/manage/violation-level',
			'addViolationLevelEndpoint' => App::get('root_uri') . '/admin/manage/violation-level/new',
			'updateViolationLevelEndpoint' => App::get('root_uri') . '/admin/manage/violation-level/update',
			'deleteViolationLevelEndpoint' => App::get('root_uri') . '/admin/manage/violation-level/delete',
			'prevPage' => $prevPage,
			'currentPage' => $currentPage,
			'pageCount' => $pageCount,
			'nextPage' => $nextPage
		];

		return Helper::view('admin/manage/violation_level', array_merge($data, ['title' => 'Manage Violation Level']));;
	}

	public function addViolationLevel()
	{
		if (
			isset($_POST['level']) && $_POST['level'] != '' &&
			isset($_POST['name']) && $_POST['name'] != '' &&
			isset($_POST['weight']) && $_POST['weight'] != ''
		) {
			$violationLevelService = ViolationLevelService::getInstance();

			$level = $_POST['level'];
			$name = $_POST['name'];
			$weight = $_POST['weight'];

			$violationLevelService->addNewViolationLevel($level, $name, $weight);

			Flasher::setFlash('Violation level has been added successfully!', 'success');
		} else {
			Flasher::setFlash('Please fill all the fields!', 'danger');
		}

		Helper::redirect('/admin/manage/violation-level');
	}

	public function updateViolationLevel()
	{
		if (
			isset($_POST['id_violation_level']) && $_POST['id_violation_level'] != '' &&
			isset($_POST['level']) && $_POST['level'] != '' &&
			isset($_POST['name']) && $_POST['name'] != '' &&
			isset($_POST['weight']) && $_POST['weight'] != ''
		) {
			$violationLevelService = ViolationLevelService::getInstance();

			$idViolationLevel = $_POST['id_violation_level'];
			$level = $_POST['level'];
			$name = $_POST['name'];
			$weight = $_POST['weight'];

			$violationLevelService->updateViolationLevel($level, $name, $weight, ['id_violation_level' => $idViolationLevel]);

			Flasher::setFlash('success', 'Violation level has been updated successfully!');
		} else {
			Flasher::setFlash('danger', 'Please fill all the fields!');
		}

		Helper::redirect('/admin/manage/violation-level');
	}

	public function deleteViolationLevel()
	{
		if (isset($_POST['id_violation_level']) && $_POST['id_violation_level'] != '') {
			$violationLevelService = ViolationLevelService::getInstance();

			$idViolationLevel = $_POST['id_violation_level'];

			$violationLevelService->deleteViolationLevel(['id_violation_level' => $idViolationLevel]);

			Flasher::setFlash('success', 'Violation level has been deleted successfully!');
		} else {
			Flasher::setFlash('danger', 'Please fill all the fields!');
		}

		Helper::redirect('/admin/manage/violation-level');
	}
}
