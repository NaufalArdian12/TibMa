<div class="wrapper">

  <!-- Start Sidebar -->
  <aside id="app-menu"
    class="hs-overlay fixed inset-y-0 start-0 z-60 hidden w-sidenav min-w-sidenav bg-white border-e border-default-200 overflow-y-auto -translate-x-full transform transition-all duration-300 hs-overlay-open:translate-x-0 lg:bottom-0 lg:end-auto lg:z-30 lg:block lg:translate-x-0 rtl:translate-x-full rtl:hs-overlay-open:translate-x-0 rtl:lg:translate-x-0 print:hidden [--body-scroll:true] [--overlay-backdrop:true] lg:[--overlay-backdrop:false]">

    <!-- Sidenav Logo -->
    <div class="sticky top-0 flex h-topbar items-center justify-center px-6 border-b border-default-200 .bg-primary/5">
      <a href="index.html">
        <img src="<?= App::get("public_uri"); ?>/img/tibma logo.png" alt="logo" class="flex h-10">
      </a>
    </div>

    <div class="p-4" data-simplebar>
      <ul class="admin-menu hs-accordion-group flex w-full flex-col gap-1.5">
        <li class="menu-item">
          <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5 <?php echo (strpos($_SERVER['REQUEST_URI'], '/dashboard') !== false) ? 'active' : ''; ?>"
            href="<?php echo App::get('root_uri') ?>/admin/dashboard">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
            Dashboard
          </a>
        </li>


        <li class="menu-item">
          <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5 <?php echo (strpos($_SERVER['REQUEST_URI'], '/report') !== false) ? 'active' : ''; ?>"
            href="<?php echo App::get('root_uri'); ?>/admin/report">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
            </svg>
            Reports
          </a>
        </li>

        <li class="menu-item">
          <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5 hs-accordion-active:bg-default-900/5 <?= (strpos($_SERVER['REQUEST_URI'], '/notification') !== false) ? 'active' : ''; ?>"
            href="<?php echo App::get('root_uri'); ?>/admin/notification">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
            </svg>
            <span class="menu-text"> Notifications </span>
          </a>
        </li>

        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)"
            class="hs-accordion-toggle group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5 hs-accordion-active:bg-primary/10 hs-accordion-active:text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
            </svg>
            <span class="menu-text"> Manage </span>
            <span
              class="i-tabler-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></span>
          </a>

          <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 space-y-2">
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5 <?= (strpos($_SERVER['REQUEST_URI'], '/manage/dosen') !== false) ? 'active' : ''; ?>"
                  href="<?php echo App::get('root_uri'); ?>/admin/manage/dosen">
                  <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                  Dosen
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5 <?= (strpos($_SERVER['REQUEST_URI'], '/manage/mahasiswa') !== false) ? 'active' : ''; ?>"
                  href="<?php echo App::get('root_uri'); ?>/admin/manage/mahasiswa">
                  <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                  Mahasiswa
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5 <?= (strpos($_SERVER['REQUEST_URI'], '/manage/admin') !== false) ? 'active' : ''; ?>"
                  href="<?php echo App::get('root_uri'); ?>/admin/manage/admin">
                  <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                  Admin
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5 <?= (strpos($_SERVER['REQUEST_URI'], '/manage/violation-level') !== false) ? 'active' : ''; ?>"
                  href="<?php echo App::get('root_uri'); ?>/admin/manage/violation-level">
                  <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                  Violation level
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5 <?= (strpos($_SERVER['REQUEST_URI'], '/manage/code-of-counduct') !== false) ? 'active' : ''; ?>"
                  href="<?php echo App::get('root_uri'); ?>/admin/manage/code-of-counduct">
                  <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                  Code of counduct
                </a>
              </li>
          </div>
        </li>

        <li class="menu-item">
          <a href="maps-vector.html"
            class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
            </svg>
            <span class="menu-text"> Log Activity </span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <!-- End Sidebar -->

  <!-- Start Page Content here -->
  <div class="page-content">

    <!-- Topbar Start -->
    <header class="app-header h-topbar flex bg-white border-b border-default-200">
      <div class="container flex ">
        <!-- Topbar Brand Logo -->
        <a href="index.html" class="md:hidden flex">
          <img src="<?= App::get("public_uri"); ?>/img/logo-sm.png" class="h-6" alt="Small logo">
        </a>

        <!-- Sidenav Menu Toggle Button -->
        <button id="button-toggle-menu" class="text-default-500 hover:text-default-600 p-2 rounded-full cursor-pointer"
          data-hs-overlay="#app-menu" aria-label="Toggle navigation">
          <i class="i-tabler-menu-2 text-2xl"></i>
        </button>

        <!-- Topbar Search -->
        <div class="md:flex hidden items-center relative">
          <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <i class="i-ph-magnifying-glass text-base"></i>
          </div>
          <input type="search"
            class="form-input px-10 rounded-lg  bg-gray-500/10 border-transparent focus:border-transparent w-80"
            placeholder="Search...">
          <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-3">
            <i class="i-ph-microphone text-base hover:text-black"></i>
          </button>
        </div>

        <div class="flex items-center gap-x-4 ms-auto">
          <!-- Fullscreen Toggle Button -->
          <div class="md:flex hidden">
            <button data-toggle="fullscreen" type="button" class="p-2">
              <span class="sr-only">Fullscreen Mode</span>
              <span class="flex items-center justify-center size-6">
                <i class="i-tabler-maximize text-2xl flex group-[-fullscreen]:hidden"></i>
                <i class="i-tabler-minimize text-2xl hidden group-[-fullscreen]:flex"></i>
              </span>
            </button>
          </div>

          <!-- Profile Dropdown Button -->
          <div class="relative z-10">
            <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
              <button type="button" class="hs-dropdown-toggle">
                <img src="<?= App::get("public_uri"); ?>/img/users/nopal.png" alt="user-image" class="rounded-full h-10">
              </button>
              <div
                class="hs-dropdown-menu duration mt-2 min-w-48 rounded-lg border border-default-200 bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100 hidden">
                <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100"
                  href="#">
                  Profile
                </a>
                <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100"
                  href="#">
                  Feed
                </a>
                <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100"
                  href="#">
                  Analytics
                </a>
                <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100"
                  href="#">
                  Settings
                </a>
                <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100"
                  href="#">
                  Support
                </a>
                <hr class="my-2">
                <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100"
                  href="<?= App::get("root_uri"); ?>/auth/logout">
                  Log Out
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Topbar End -->

    <main class="relative">
      <div>
        <div>
          <div class="py-2 my-4 gap-4">
            <div class="flex items-center md:justify-between flex-wrap gap-2">
              <div class="md:flex hidden items-center gap-3 text-sm font-semibold">
                <a href="#" class="text-sm font-medium text-default-700" aria-current="page">Notification</a>
              </div>
            </div>
            <!-- Start Notif -->
            <?php if (empty($newReportComments)): ?>
              <div class="xl:w-10/12 w-full">
                <div class="flex pt-4 bg-gray-100 rounded-lg">
                  <div class="w-full">
                    <h5 class="text-left">No new notification</h5>
                  </div>
                </div>
              </div>
            <?php endif; ?>

            <?php
            /**
             * @var ReportCommentModel[] $newReportComments
             */
            foreach ($newReportComments as $comment): ?>
              <div class="xl:w-10/12 w-full" id="<?= $comment->getIdReportComment() ?>">
                <div class="flex flex-col p-3 bg-gray-100 rounded-lg">
                  <div class="w-full">
                    <h5 class="text-lg font-medium">
                      <span class="bg-green-500 text-white px-2 py-1 rounded-full">
                        #<?= $comment->getIdReportComment() ?>
                      </span>
                      <?= $comment->getAuthorFirstName() ?> Commented On Report #<?= $comment->getIdReport() ?>
                    </h5>
                  </div>
                  <div class="w-full"></div>
                  <p class="text-sm text-gray-700 truncate">
                    <?= $comment->getContent() ?> <a target="_blank" href="<?= $comment->getReferenceUrl() ?>" class="text-blue-500">Show</a>
                  </p>
                </div>
              </div>
            <?php endforeach; ?>
            <!-- End Notif -->
          </div>
        </div>
      </div>
    </main>
  </div>
</div>