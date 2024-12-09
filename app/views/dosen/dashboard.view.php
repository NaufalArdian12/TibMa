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
            <ul class="dosen-menu hs-accordion-group flex w-full flex-col gap-1.5">
                <li class="menu-item">
                    <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5 <?php echo (strpos($_SERVER['REQUEST_URI'], '/dashboard') !== false) ? 'active' : ''; ?>"
                        href="<?php echo App::get('root_uri') ?>/dosen/dashboard">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        Dashboard
                    </a>
                </li>


                <li class="menu-item">
                    <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                        href="<?php echo App::get('root_uri'); ?>/dosen/report">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                        </svg>
                        Reports
                    </a>
                </li>

                <li class="menu-item">
                    <a href="starter-page.html"
                        class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5 hs-accordion-active:bg-default-900/5">
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
                                <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                    href="ui-accordion.html">
                                    <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                    Dosen
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                    href="ui-alerts.html">
                                    <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                    Mahasiswa
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                    href="ui-avatars.html">
                                    <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                    dosen
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

                <li class="menu-item hs-accordion">
                    <a href="javascript:void(0)"
                        class="hs-accordion-toggle group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5 hs-accordion-active:bg-primary/10 hs-accordion-active:text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <span class="menu-text"> Profile </span>
                        <span
                            class="i-tabler-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></span>
                    </a>

                    <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                        <ul class="mt-2 space-y-2">
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                    href="ui-accordion.html">
                                    <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                    Log Out
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                    href="ui-alerts.html">
                                    <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                    Edit
                                </a>
                            </li>
                    </div>
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
                    <div class="relative">
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

        <main class="flex-1">
            <!-- Page Title Start -->
            <div class="flex items-center md:justify-between flex-wrap gap-2 mb-6">
                <div class="md:flex hidden items-center gap-3 text-sm font-semibold">
                    <a href="#" class="text-sm font-medium text-default-700" aria-current="page">Dashboard</a>
                </div>
            </div>
            <!-- Page Title End -->

            <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-6 mb-6">
                <div class="card group overflow-hidden transition-all duration-500 hover:shadow-lg hover:-translate-y-0.5">
                    <div class="card-body">
                        <div class="flex items- justify-between">
                            <div>
                                <p class="text-base mb-1">Total Order</p>
                                <h4 class="text-xl">2415</h4>
                            </div>

                            <div
                                class="rounded-lg flex justify-center items-center size-16 bg-success/10 text-success">
                                <i
                                    class="material-symbols-rounded text-4xl transition-all group-hover:fill-1">shopping_bag</i>
                            </div>
                        </div>
                    </div>
                    <div id="total-order"></div>
                </div>

                <div class="card group overflow-hidden transition-all duration-500 hover:shadow-lg hover:-translate-y-0.5">
                    <div class="card-body">
                        <div class="flex items- justify-between">
                            <div>
                                <p class="text-base mb-1">Total Sale</p>
                                <h4 class="text-xl">$78.5K</h4>
                            </div>

                            <div
                                class="rounded-lg flex justify-center items-center size-16 bg-primary/10 text-primary">
                                <i
                                    class="material-symbols-rounded text-4xl transition-all group-hover:fill-1">payments</i>
                            </div>
                        </div>
                    </div>
                    <div id="total-sale"></div>
                </div>

                <div class="card group overflow-hidden transition-all duration-500 hover:shadow-lg hover:-translate-y-0.5">
                    <div class="card-body">
                        <div class="flex items- justify-between">
                            <div>
                                <p class="text-base mb-1">Total Visits</p>
                                <h4 class="text-xl">145.2K</h4>
                            </div>

                            <div class="rounded-lg flex justify-center items-center size-16 bg-info/10 text-info">
                                <i
                                    class="material-symbols-rounded text-4xl transition-all group-hover:fill-1">visibility</i>
                            </div>
                        </div>
                    </div>
                    <div id="total-visits"></div>
                </div>
            </div>

            <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-6 mb-6">
                <div class="card">
                    <div class="card-header flex justify-between items-center">
                        <h4 class="card-title">Last Month Sales</h4>
                        <a class="btn btn-sm bg-light !text-sm text-gray-800 ">Export</a>
                    </div>

                    <div class="card-body">
                        <div id="month-sales-chart" class="apex-charts"></div>
                    </div>

                    <div class="border-t border-default-200 border-dashed card-body">
                        <div class="flex items-center justify-center gap-3">
                            <div class="flex items-center gap-1">
                                <div class="size-3 rounded-full bg-primary"></div>
                                <p class="text-sm text-default-700">Online</p>
                            </div>

                            <div class="flex items-center gap-1">
                                <div class="size-3 rounded-full bg-danger"></div>
                                <p class="text-sm text-default-700">Offlne</p>
                            </div>

                            <div class="flex items-center gap-1">
                                <div class="size-3 rounded-full bg-info"></div>
                                <p class="text-sm text-default-700">Retail</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="xl:col-span-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-base">Revenue</h5>
                        </div>
                        <div class="card-body">
                            <div id="revenue-chart" class="apex-charts"></div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="grid xl:grid-cols-2 gap-6">

                <div class="card overflow-hidden">
                    <div class="card-header flex justify-between items-center">
                        <h4 class="card-title">Recent Buyers</h4>
                        <a href="#!" class="btn btn-sm bg-light !text-sm text-gray-800 ">Export</a>
                    </div>

                    <div class="overflow-x-auto custom-scroll">
                        <div class="min-w-full inline-block align-middle whitespace-nowrap">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                    <thead class="bg-light/40 border-b border-gray-200">
                                        <tr>
                                            <th class="px-6 py-3 text-start">Product</th>
                                            <th class="px-6 py-3 text-start">Customers</th>
                                            <th class="px-6 py-3 text-start">Categories</th>
                                            <th class="px-6 py-3 text-start">Popularity</th>
                                            <th class="px-6 py-3 text-start">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b border-gray-200">
                                            <td class="px-6 py-3">iPhone X</td>
                                            <td class="px-6 py-3">Tiffany W. Yang</td>
                                            <td class="px-6 py-3">
                                                <span
                                                    class="px-2 py-1 bg-success/10 text-success text-xs rounded">Mobile</span>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div
                                                    class="flex w-full h-1.5 bg-light rounded-full overflow-hidden">
                                                    <div class="progress-bar progress-bar-striped bg-success"
                                                        role="progressbar" aria-valuenow="85" aria-valuemin="20"
                                                        aria-valuemax="100" style="width:85%"></div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-3">$ 1200.00</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="px-6 py-3">iPad</td>
                                            <td class="px-6 py-3">Dale P. Warman</td>
                                            <td class="px-6 py-3">
                                                <span
                                                    class="px-2 py-1 bg-success/10 text-success text-xs rounded">Tablet</span>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div
                                                    class="flex w-full h-1.5 bg-light rounded-full overflow-hidden">
                                                    <div class="progress-bar progress-bar-striped bg-success"
                                                        role="progressbar" aria-valuenow="72" aria-valuemin="20"
                                                        aria-valuemax="100" style="width:72%"></div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-3">$ 1190.00</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="px-6 py-3">OnePlus</td>
                                            <td class="px-6 py-3">Garth J. Terry</td>
                                            <td class="px-6 py-3">
                                                <span
                                                    class="px-2 py-1 bg-success/10 text-success text-xs rounded">Electronics</span>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div
                                                    class="flex w-full h-1.5 bg-light rounded-full overflow-hidden">
                                                    <div class="progress-bar progress-bar-striped bg-success"
                                                        role="progressbar" aria-valuenow="43" aria-valuemin="20"
                                                        aria-valuemax="100" style="width:43%"></div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-3">$ 999.00</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="px-6 py-3">ZenPad</td>
                                            <td class="px-6 py-3">Marilyn D. Bailey</td>
                                            <td class="px-6 py-3">
                                                <span
                                                    class="px-2 py-1 bg-success/10 text-success text-xs rounded">Cosmetics</span>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div
                                                    class="flex w-full h-1.5 bg-light rounded-full overflow-hidden">
                                                    <div class="progress-bar progress-bar-striped bg-success"
                                                        role="progressbar" aria-valuenow="37" aria-valuemin="20"
                                                        aria-valuemax="100" style="width:37%"></div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-3">$ 1150.00</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="px-6 py-3">Pixel 2</td>
                                            <td class="px-6 py-3">Denise R. Vaughan</td>
                                            <td class="px-6 py-3">
                                                <span
                                                    class="px-2 py-1 bg-success/10 text-success text-xs rounded">Appliences</span>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div
                                                    class="flex w-full h-1.5 bg-light rounded-full overflow-hidden">
                                                    <div class="progress-bar progress-bar-striped bg-success"
                                                        role="progressbar" aria-valuenow="82" aria-valuemin="20"
                                                        aria-valuemax="100" style="width:82%"></div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-3">$ 1180.00</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-3">Pixel 2</td>
                                            <td class="px-6 py-3">Jeffery R. Wilson</td>
                                            <td class="px-6 py-3">
                                                <span
                                                    class="px-2 py-1 bg-success/10 text-success text-xs rounded">Mobile</span>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div
                                                    class="flex w-full h-1.5 bg-light rounded-full overflow-hidden">
                                                    <div class="progress-bar progress-bar-striped bg-success"
                                                        role="progressbar" aria-valuenow="36" aria-valuemin="20"
                                                        aria-valuemax="100" style="width:36%"></div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-3">$ 1180.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-->

                <div class="card overflow-hidden">
                    <div class="card-header flex justify-between items-center">
                        <h4 class="card-title">Account Transactions</h4>
                        <a href="#!" class="btn btn-sm bg-light !text-sm text-gray-800 ">Export</a>
                    </div>

                    <div class="overflow-x-auto">
                        <div class="min-w-full inline-block align-middle whitespace-nowrap">
                            <div class="overflow-hidden">
                                <table class="min-w-full text-sm">
                                    <tbody>
                                        <tr class="border-b border-gray-200">
                                            <td class="px-6 py-3">
                                                <div class="font-medium">4257 **** **** 7852</div>
                                                <div class="text-xs">11 April 2023</div>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div class="font-medium">$79.49</div>
                                                <div class="text-xs">Amount</div>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div class="font-medium">Visa</div>
                                                <div class="text-xs">Card</div>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div class="font-medium">Helen Warren</div>
                                                <div class="text-xs">Pay</div>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="px-6 py-3">
                                                <div class="font-medium">4427 **** **** 4568</div>
                                                <div class="text-xs">28 Jan 2023</div>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div class="font-medium">$1254.00</div>
                                                <div class="text-xs">Amount</div>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div class="font-medium">Visa</div>
                                                <div class="text-xs">Card</div>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div class="font-medium">Kayla Lambie</div>
                                                <div class="text-xs">Pay</div>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="px-6 py-3">
                                                <div class="font-medium">4265 **** **** 0025</div>
                                                <div class="text-xs">08 Dec 2022</div>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div class="font-medium">$784.25</div>
                                                <div class="text-xs">Amount</div>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div class="font-medium">Master</div>
                                                <div class="text-xs">Card</div>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div class="font-medium">Hugo Lavarack</div>
                                                <div class="text-xs">Pay</div>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="px-6 py-3">
                                                <div class="font-medium">7845 **** **** 5214</div>
                                                <div class="text-xs">03 Dec 2022</div>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div class="font-medium">$485.24</div>
                                                <div class="text-xs">Amount</div>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div class="font-medium">Stripe</div>
                                                <div class="text-xs">Card</div>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div class="font-medium">Amber Scurry</div>
                                                <div class="text-xs">Pay</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-3">
                                                <div class="font-medium">4257 **** **** 7852</div>
                                                <div class="text-xs">12 Nov 2022</div>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div class="font-medium">$8964.04</div>
                                                <div class="text-xs">Amount</div>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div class="font-medium">Maestro</div>
                                                <div class="text-xs">Card</div>
                                            </td>
                                            <td class="px-6 py-3">
                                                <div class="font-medium">Caitlyn Gibney</div>
                                                <div class="text-xs">Pay</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-->
            </div>
        </main>

    </div>
    <!-- End Page content -->

</div>

<!-- Plugin Js (Mandatory in All Pages) -->
<script src="<?= App::get("public_uri"); ?>/libs/jquery/jquery.min.js"></script>
<script src="<?= App::get("public_uri"); ?>/libs/preline/preline.js"></script>
<script src="<?= App::get("public_uri"); ?>/libs/simplebar/simplebar.min.js"></script>
<script src="<?= App::get("public_uri"); ?>/libs/iconify-icon/iconify-icon.min.js"></script>
<script src="<?= App::get("public_uri"); ?>/libs/node-waves/waves.min.js"></script>

<!-- App Js (Mandatory in All Pages) -->
<script src="<?= App::get("public_uri"); ?>/js/app.js"></script>

<!-- Apexcharts js -->
<script src="<?= App::get("public_uri"); ?>/libs/apexcharts/apexcharts.min.js"></script>

<!-- Vector Map Js -->
<script src="<?= App::get("public_uri"); ?>/libs/jsvectormap/js/jsvectormap.min.js"></script>

<!-- Dashboard Project Page js -->
<script src="<?= App::get("public_uri"); ?>/js/pages/dashboard.js"></script>