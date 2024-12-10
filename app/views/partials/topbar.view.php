<?php
/**
 *   @var UserModel $user
 */
$user = Session::getInstance()->get('user');
?>

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
            <img src="<?= $user->getImageUrl() ?>" alt="user-image" class="rounded-full h-10 w-10">
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