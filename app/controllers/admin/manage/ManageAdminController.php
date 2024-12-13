<?php 
class ManageAdminController {

    public function manageAdminPage()
	{
		$userService = UserService::getInstance();
		$adminService = AdminService::getInstance();

		$currentPage = PaginationUtil::paginationHandler();
		
		$users = $userService->getManyUser(['role' => 'admin']);
		$admins = $adminService->getAllAdmin($currentPage);
		$adminCount = $adminService->count();
		
		$prevPage = PaginationUtil::getPrevPage($currentPage);
		$pageCount = PaginationUtil::getPageCount($adminCount);
		$nextPage = PaginationUtil::getNextPage($admins, $currentPage);

		for ($i = 0; $i < count($users); $i++) {
			for ($j = 0; $j < count($admins); $j++) {
				if ($users[$i]->getIdUser() == $admins[$j]->getIdUser()) {
					$users[$i]->setRoleDetail($admins[$j]);
				}
			}
		}

		$data = [
			'users' => $users,
			'flash' => Flasher::flash(),
			'newAdminEndpoint' => App::get('root_uri') . '/admin/manage/admin/new',
			'updateAdminEndpoint' => App::get('root_uri') . '/admin/manage/admin/update',
			'deleteAdminEndpoint' => App::get('root_uri') . '/admin/manage/admin/delete',
			'usersCount' => $adminCount,
			'prevPage' => $prevPage,
			'currentPage' => $currentPage,
			'pageCount' => $pageCount,
			'nextPage' => $nextPage
		];

		return Helper::view('admin/manage/admin', array_merge($data, ['title' => 'Manage Admin']));;
	}
    public function addNewAdmin()
	{
		if (
			isset($_POST['username']) && $_POST['username'] != '' &&
			isset($_POST['first-name']) && $_POST['first-name'] != '' &&
			isset($_POST['last-name']) && $_POST['last-name'] != '' &&
			isset($_POST['email']) && $_POST['email'] != '' &&
			isset($_POST['title']) && $_POST['title'] != '' &&
			isset($_POST['phone-number']) && $_POST['phone-number'] != '' &&
			isset($_POST['address']) && $_POST['address'] != '' &&
			isset($_POST['password']) && $_POST['password'] != ''
		) {
			$userService = UserService::getInstance();
			$adminService = AdminService::getInstance();

			// get input
			$username = $_POST['username'];
			$firstName = $_POST['first-name'];
			$lastName = $_POST['last-name'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$phoneNumber = $_POST['phone-number'];
			$role = 'admin';

			$isUserExists = $userService->getSingleUser(['username' => $username]);

            if($isUserExists) {
                Flasher::setFlash("danger", "Username already exist!");
                return Helper::redirect('/admin/manage/admin');
            }

			$rawPassword = $_POST['password'];
			$salt = Helper::generateRandomHex(16);
			$password = $userService->hashPassword($salt, $rawPassword);

			$newUserId = $userService->addNewUser($username, $firstName, $lastName, $email, $address, $phoneNumber, $role, $salt, $password);

			$title = $_POST['title'];

			$adminService->addNewAdmin($newUserId, $title);

			Flasher::setFlash("success", "User successfully added!");
		} else {
			Flasher::setFlash("danger", "All fields must be filled");
		}

		return Helper::redirect('/admin/manage/admin');
	}

	public function updateAdmin() {
		if (
			isset($_POST['id_user']) && $_POST['id_user'] != '' &&
			isset($_POST['username']) && $_POST['username'] != '' &&
			isset($_POST['first-name']) && $_POST['first-name'] != '' &&
			isset($_POST['last-name']) && $_POST['last-name'] != '' &&
			isset($_POST['email']) && $_POST['email'] != '' &&
			isset($_POST['title']) && $_POST['title'] != '' &&
			isset($_POST['phone-number']) && $_POST['phone-number'] != '' &&
			isset($_POST['address']) && $_POST['address'] != ''
		) {
			$userService = UserService::getInstance();
			$adminService = AdminService::getInstance();

			// get input
			$idUser = $_POST['id_user'];
			$username = $_POST['username'];
			$firstName = $_POST['first-name'];
			$lastName = $_POST['last-name'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$phoneNumber = $_POST['phone-number'];
			$role = 'admin';

			$tempUser = $userService->getSingleUser(['username' => $username]);
			$isUserExists = $tempUser != null && $tempUser->getIdUser() != $idUser;

            if($isUserExists) {
                Flasher::setFlash("danger", "Username already exist!");
                return Helper::redirect('/admin/manage/admin');
            }

			if (isset($_POST['password']) && $_POST['password'] != '') {
				$rawPassword = $_POST['password'];
				$salt = Helper::generateRandomHex(16);
				$password = $userService->hashPassword($salt, $rawPassword);

				$userService->updateUser($username, $firstName, $lastName, $email, $address, $phoneNumber, $role, $salt, $password, ['id_user' => $idUser]);
			} else {
				$userService->updateUser($username, $firstName, $lastName, $email, $address, $phoneNumber, $role, '', '', ['id_user' => $idUser]);
			}
			
			$title = $_POST['title'];

			$adminService->updateAdminProfile($title, ['id_user' => $idUser]);

			Flasher::setFlash("success", "Admin successfully updated!");
		} else {
			Flasher::setFlash("danger", "All fields must be filled");
		}

		return Helper::redirect('/admin/manage/admin');
	}   

	public function deleteAdmin() {
		if (isset($_POST['id_user']) && $_POST['id_user'] != '') {
			// Defining Services
			$userService = UserService::getInstance();

			// Take inputs from request
			$idUser = $_POST['id_user'];

			// Add new code of conduct
			$userService->deleteUser($idUser);

			Flasher::setFlash('success', 'Admin has been deleted successfully!');
		} else {
			Flasher::setFlash('danger', 'Please fill all the fields!');
		}
		
		Helper::redirect('/admin/manage/admin');
	}
}