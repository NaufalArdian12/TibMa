<?php

/**
 * @var UserModel $user
 */
$user = Session::getInstance()->get('user');
$role = $user->getRole();

$newReportCommentCount = 0;
$newViolationCount = 0;

// Menentukan root_uri berdasarkan role
switch ($role) {
  case 'dosen':
    $rootUri = App::get('root_uri') . '/dosen';
    break;
  case 'admin':
    $rootUri = App::get('root_uri') . '/admin';
    break;
  case 'mahasiswa':
    $rootUri = App::get('root_uri') . '/mahasiswa';
    break;
  default:
    $rootUri = App::get('root_uri'); // fallback
    break;
}

switch ($role) {
  case 'dosen':
    $dosenRole = $user->getRoleDetail();
    assert($dosenRole instanceof DosenModel);
    $dosenService = DosenService::getInstance();
    $newReportCommentCount = $dosenService->getDosenNotificationCount($dosenRole);
    break;
  case 'admin':
    $adminRole = $user->getRoleDetail();
    assert($adminRole instanceof AdminModel);
    $adminService = AdminService::getInstance();
    $newReportCommentCount = $adminService->getAdminNotificationCount($adminRole);
    break;
  case 'mahasiswa':
    $mahasiswaRole = $user->getRoleDetail();
    assert($mahasiswaRole instanceof MahasiswaModel);
    $mahasiswaService = MahasiswaService::getInstance();
    $newViolationCount = $mahasiswaService->getMahasiswaNotificationCount($mahasiswaRole);
    break;
}

?>

<!-- Start Sidebar -->
<aside id="app-menu" class="hs-overlay fixed inset-y-0 start-0 z-60 hidden w-sidenav min-w-sidenav bg-white border-e border-default-200 overflow-y-auto -translate-x-full transform transition-all duration-300 hs-overlay-open:translate-x-0 lg:bottom-0 lg:end-auto lg:z-30 lg:block lg:translate-x-0 rtl:translate-x-full rtl:hs-overlay-open:translate-x-0 rtl:lg:translate-x-0 print:hidden [--body-scroll:true] [--overlay-backdrop:true] lg:[--overlay-backdrop:false]">

  <!-- Sidenav Logo -->
  <div class="sticky top-0 flex h-topbar items-center justify-center px-6 border-b border-default-200 .bg-primary/5">
    <a href="index.html">
      <img src="<?= App::get("public_uri"); ?>/img/tibma logo.png" alt="logo" class="flex h-10">
    </a>
  </div>

  <div class="p-4" data-simplebar>
    <ul class="admin-menu hs-accordion-group flex w-full flex-col gap-1.5">
      <li class="menu-item">
        <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5 <?= (strpos($_SERVER['REQUEST_URI'], '/dashboard') !== false) ? 'active' : ''; ?>"
          href="<?= $rootUri ?>/dashboard">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
          </svg>
          Dashboard
        </a>
      </li>

      <?php if ($role === 'dosen' || $role === 'admin'): ?>
        <li class="menu-item">
          <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5 <?= (strpos($_SERVER['REQUEST_URI'], '/report') !== false) ? 'active' : ''; ?>"
            href="<?= $rootUri ?>/report">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
            </svg>
            Reports
          </a>
        </li>
      <?php endif; ?>

      <li class="menu-item">
        <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5 hs-accordion-active:bg-default-900/5 <?= (strpos($_SERVER['REQUEST_URI'], '/notification') !== false) ? 'active' : ''; ?>"
          href="<?= $rootUri ?>/notification">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
          </svg>
          <span class="menu-text"> Notifications </span>
        </a>
      </li>

      <?php if ($role === 'admin'): ?>
        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)"
            class="hs-accordion-toggle group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5 hs-accordion-active:bg-primary/10 hs-accordion-active:text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
            </svg>
            <span class="menu-text"> Manage </span>
            <span class="i-tabler-chevron-right ms-auto text-sm transition -all hs-accordion-active:rotate-90"></span>
          </a>

          <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 space-y-2">
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5 <?= (strpos($_SERVER['REQUEST_URI'], '/manage/dosen') !== false) ? 'active' : ''; ?>"
                  href="<?= $rootUri ?>/manage/dosen">
                  <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                  Dosen
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5 <?= (strpos($_SERVER['REQUEST_URI'], '/manage/mahasiswa') !== false) ? 'active' : ''; ?>"
                  href="<?= $rootUri ?>/manage/mahasiswa">
                  <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                  Mahasiswa
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5 <?= (strpos($_SERVER['REQUEST_URI'], '/manage/admin') !== false) ? 'active' : ''; ?>"
                  href="<?= $rootUri ?>/manage/admin">
                  <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                  Admin
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5 <?= (strpos($_SERVER['REQUEST_URI'], '/manage/violation-level') !== false) ? 'active' : ''; ?>"
                  href="<?= $rootUri ?>/manage/violation-level">
                  <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                  Violation level
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5 <?= (strpos($_SERVER['REQUEST_URI'], '/manage/code-of-conduct') !== false) ? 'active' : ''; ?>"
                  href="<?= $rootUri ?>/manage/code-of-conduct">
                  <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                  Code of conduct
                </a>
              </li>
            </ul>
          </div>
        </li>
      <?php endif; ?>
    </ul>
  </div>
</aside>
<!-- End Sidebar -->