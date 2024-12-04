<!-- ====== header ====== -->


<header x-data="{navbarOpen: false}" class="absolute sticky left-0 top-0 z-50 bg-white/90 w-full backdrop-blur">
    <div class="mx-auto h-[90px] max-w-7xl px-8 md:px-6">
        <div class="relative flex h-full items-center justify-between border-b border-slate-500/10">
            <!-- logo -->
            <div class="w-[15rem] max-w-full">
                <a href="">
                    <img src="<?= App::get("public_uri") ?>/img/tibma logo.png" alt="logo" class="w-full">
                </a>
            </div>

            <!-- menu -->
            <div class="flex w-full items-center justify-between">
                <nav x-transition :class="!navbarOpen && 'hidden'" id="navbarCollapse" class="absolute right-0 top-[90px] w-full max-w-[350px] rounded-lg border border-purple-200 bg-white py-5 px-6 shadow-lg shadow-purple-400/5 transition-all lg:static lg:block lg:max-w-full lg:border-none lg:shadow-none lg:bg-transparent lg:px-0 lg:py-0">
                    <ul class="flex flex-col justify-center gap-8 lg:flex-row">
                        <li>
                            <a href="/" id="navbarToggler" class="text-lg font-medium text-slate-700 duration-200 hover:text-purple-600 lg:text-base">Home</a>
                        </li>
                        <li>
                            <a href="/" id="navbarToggler" class="text-lg font-medium text-slate-700 duration-200 hover:text-purple-600 lg:text-base">Rules</a>
                        </li>
                        <li>
                            <a href="#about" id="navbarToggler" class="text-lg font-medium text-slate-700 duration-200 hover:text-purple-600 lg:text-base">About</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- menu btn -->
            <div class="flex">
                <a href="<?= App::get("root_uri") ?>/auth/login" class="mr-10 hidden rounded-md bg-purple-500 px-8 py-2.5 font-semibold text-white shadow-md shadow-purple-500/20 duration-200 hover:bg-purple-600 sm:block lg:mr-0">Login</a>

                <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'" id="navbarToggler" class="block lg:hidden">
                    <ion-icon name="menu-outline" class="text-4xl text-purple-500"></ion-icon>
                </button>
            </div>
        </div>
    </div>
</header>
<!-- ====== END header ====== -->


<!-- ====== hero ====== -->

<section class="relative bg-white py-16 lg:pt-[110px]">
    <div class="mx-auto max-w-7xl px-8 md:px-6">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-5/12 delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="400">
                <h1 class="text-slate-800 mb-3 text-4xl font-bold leading-snug sm:text-[42px] lg:text-[40px] xl:text-[42px]">Harmonious Campus Environment Starts <br>with <span class="text-purple-600">TibMa</span></h1>
                <p class="text-slate-500 mb-8 max-w-[480px] text-base">Rules are a shared commitment to create a campus that is conducive to all. With TibMa, students can access campus rules anytime and anywhere, strengthening a culture of discipline that moves everyone forward.
                </p>

                <a href="<?= App::get("root_uri") ?>/auth/login" class="w-full rounded-md bg-purple-500 px-8 py-2.5 font-semibold text-white shadow-md shadow-purple-500/20 hover:bg-purple-600 duration-200 sm:w-auto">
                    Login
                </a>

                <button class="mt-4 box-border w-full rounded-md border border-purple-500/20 px-8 py-2.5 font-semibold text-purple-500 shadow-md shadow-purple-500/10 duration-200 sm:ml-4 sm:mt-0 sm:w-auto hover:bg-purple-500 hover:text-white">Rules</button>
            </div>

            <div class="hidden px-4 lg:block lg:w-1/12"></div>

            <div class="w-full px-4 lg:w-6/12 delay-[300ms] duration-[600ms] taos:translate-x-[200px] taos:opacity-0" data-taos-offset="400">
                <div class="lg:ml-auto lg:text-right">
                    <div class="relative z-10 inline-block pt-11 lg:pt-0">
                        <img src="<?= App::get("public_uri") ?>/img/hero.png" alt="hero section img" class="max-w-full lg:ml-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== END hero ====== -->


<!-- ====== features ====== -->


<section class="pb-16">
    <div class="mx-auto max-w-7xl px-8 md:px-6 delay-[300ms] duration-[600ms] taos:translate-y-[200px] taos:opacity-0" data-taos-offset="300"">
        <!-- heading text -->
        <div class=" mb-5 sm:mb-10">
        <span class="font-medium text-purple-500">Our Features</span>
        <h1 class="text-2xl font-bold text-slate-700 sm:text-3xl">Provide Our Features</h1>
    </div>
    <!-- features img -->
    <div class="md:flex md:justify-between md:gap-6 xl:gap-10">
        <div class="mb-5 max-h-[600px] overflow-hidden rounded-lg md:mb-0 md:w-5/12">
            <img src="<?= App::get("public_uri") ?>/img/features/features.png" alt="features img" class="h-full scale-125 sm:w-full sm:object-cover">
        </div>
        <div class="md:w-7/12">
            <div class="mb-16 flex flex-col">
                <p class="mb-3 text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint explicabo perferendis voluptatibus sunt enim officiis.</p>

                <p class="mb-10 text-slate-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint laudantium, cum, quaerat nulla possimus magni odio ullam ratione vitae id fuga aliquam sed molestiae? Voluptas.</p>

                <button class="w-full rounded-md bg-purple-500 px-8 py-2.5 font-semibold text-white shadow-md shadow-purple-500/20 hover:bg-purple-600 duration-200 md:w-max">Get Started</button>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="flex flex-col items-center justify-center rounded-xl bg-white px-4 py-8 shadow-lg">
                    <img class="mb-3 w-16" src="<?= App::get("public_uri") ?>/img/features/icon (1).png" alt="">
                    <h3 class="text-lg font-bold text-slate-600">Web Design</h3>
                    <a href="#" class="text-sm text-purple-500">Learn more</a>
                </div>
                <div class="flex flex-col items-center justify-center rounded-xl bg-white px-4 py-8 shadow-lg">
                    <img class="mb-3 w-16" src="<?= App::get("public_uri") ?>/img/features/icon (2).png" alt="">
                    <h3 class="text-lg font-bold text-slate-600">Automation</h3>
                    <a href="#" class="text-sm text-purple-500">Learn more</a>
                </div>
                <div class="flex flex-col items-center justify-center rounded-xl bg-white px-4 py-8 shadow-lg">
                    <img class="mb-3 w-16" src="<?= App::get("public_uri") ?>/img/features/icon (3).png" alt="">
                    <h3 class="text-lg font-bold text-slate-600">Infographics</h3>
                    <a href="#" class="text-sm text-purple-500">Learn more</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- ====== END features ====== -->


<!-- ====== about ====== -->

<section id="about" class="py-16 delay-[500ms] duration-[1000ms] taos:opacity-0">
    <div class="mx-auto max-w-7xl px-8 md:px-6">
        <div class="md:flex md:justify-between md:gap-6">
            <div class="md:w-6/12">
                <!-- heading text -->
                <div class="mb-5 sm:mb-10">
                    <span class="font-medium text-purple-500">About Us</span>
                    <h1 class="text-2xl font-bold text-slate-700 sm:text-3xl">Creative Marketing agency</h1>
                </div>
                <p class="text-slate-500 mb-6">Here is About</p>
                <ul>
                    <li class="mb-6 flex items-center">
                        <div class="flex h-[35px] w-[35px] min-w-[35px] items-center justify-center rounded-full bg-purple-500 text-white">
                            <ion-icon name="briefcase-outline"></ion-icon>
                        </div>
                        <p class="ml-4 max-w-md font-medium text-slate-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </li>
                    <li class="mb-6 flex items-center">
                        <div class="flex h-[35px] w-[35px] min-w-[35px] items-center justify-center rounded-full bg-purple-500 text-white">
                            <ion-icon name="cube-outline"></ion-icon>
                        </div>
                        <p class="ml-4 max-w-md font-medium text-slate-600">Omnis unde nam quia harum voluptatum itaque iste nostrum amet vero.</p>
                    </li>
                    <li class="mb-6 flex items-center">
                        <div class="flex h-[35px] w-[35px] min-w-[35px] items-center justify-center rounded-full bg-purple-500 text-white">
                            <ion-icon name="mail-unread-outline"></ion-icon>
                        </div>
                        <p class="ml-4 max-w-md font-medium text-slate-600">Id quos et quidem perspiciatis similique! Rerum, natus temporibus.</p>
                    </li>
                </ul>
                <button class="w-full rounded-md bg-purple-500 px-8 py-2.5 font-semibold text-white shadow-md shadow-purple-500/20 hover:bg-purple-600 duration-200 md:w-max">Get Started</button>
            </div>

            <!-- about img -->
            <div class="mt-8 flex justify-center md:mt-0 md:w-5/12">
                <img src="<?= App::get("public_uri") ?>/img/about1.png" alt="about img" class="max-h-[500px] md:max-h-max">
            </div>

        </div>
    </div>
</section>

<!-- ====== END about ====== -->


<!-- ====== service ====== -->
<section class="py-16">
    <div class="mx-auto max-w-7xl px-8 md:px-6">
        <!-- heading text -->
        <div class="mb-10 text-center">
            <span class="font-medium text-purple-500">Our Services</span>
            <h1 class="text-2xl font-bold text-slate-700 sm:text-3xl">Provide Awesome Services</h1>
            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur deleniti sit dolor numquam non. Et.</p>
        </div>

        //service main

        <!-- box wrapper -->
        <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 xl:gap-8">
            <div class="group flex cursor-pointer flex-col items-center rounded-xl border border-purple-500/10 bg-white px-5 py-8 shadow-lg shadow-purple-300/10 duration-200 hover:bg-purple-500">
                <ion-icon name="bar-chart-outline" class="text-[55px] text-purple-500 duration-200 group-hover:text-white"></ion-icon>
                <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">Crafted for Startups</h4>
                <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-purple-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe accusamus nihil veritatis ad. Odit, veritatis!</p>
            </div>

            <div class="group flex cursor-pointer flex-col items-center rounded-xl border border-purple-500/10 bg-white px-5 py-8 shadow-lg shadow-purple-300/10 duration-200 hover:bg-purple-500">
                <ion-icon name="extension-puzzle-outline" class="text-[55px] text-purple-500 duration-200 group-hover:text-white"></ion-icon>
                <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">Fully Customizable</h4>
                <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-purple-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe accusamus nihil veritatis ad. Odit, veritatis!</p>
            </div>

            <div class="group flex cursor-pointer flex-col items-center rounded-xl border border-purple-500/10 bg-white px-5 py-8 shadow-lg shadow-purple-300/10 duration-200 hover:bg-purple-500">
                <ion-icon name="speedometer-outline" class="text-[55px] text-purple-500 duration-200 group-hover:text-white"></ion-icon>
                <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">Speed Optimized</h4>
                <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-purple-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe accusamus nihil veritatis ad. Odit, veritatis!</p>
            </div>

            <div class="group flex cursor-pointer flex-col items-center rounded-xl border border-purple-500/10 bg-white px-5 py-8 shadow-lg shadow-purple-300/10 duration-200 hover:bg-purple-500">
                <ion-icon name="diamond-outline" class="text-[55px] text-purple-500 duration-200 group-hover:text-white"></ion-icon>
                <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">High-quality Design</h4>
                <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-purple-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe accusamus nihil veritatis ad. Odit, veritatis!</p>
            </div>

            <div class="group flex cursor-pointer flex-col items-center rounded-xl border border-purple-500/10 bg-white px-5 py-8 shadow-lg shadow-purple-300/10 duration-200 hover:bg-purple-500">
                <ion-icon name="file-tray-full-outline" class="text-[55px] text-purple-500 duration-200 group-hover:text-white"></ion-icon>
                <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">All Essential Sections</h4>
                <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-purple-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe accusamus nihil veritatis ad. Odit, veritatis!</p>
            </div>

            <div class="group flex cursor-pointer flex-col items-center rounded-xl border border-purple-500/10 bg-white px-5 py-8 shadow-lg shadow-purple-300/10 duration-200 hover:bg-purple-500">
                <ion-icon name="cloud-download-outline" class="text-[55px] text-purple-500 duration-200 group-hover:text-white"></ion-icon>
                <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">Regular Updates</h4>
                <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-purple-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe accusamus nihil veritatis ad. Odit, veritatis!</p>
            </div>
        </div>
    </div>
</section>

<!-- ====== END service ====== -->

<!-- ====== footer ====== -->

<footer class="bg-slate-50/80 pt-16">
    <div class="mx-auto max-w-7xl px-8 md:px-6">

        <!-- footer top -->
        <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6">
            <div class="md:max-w-md lg:col-span-2">
                <img src="<?= App::get("public_uri") ?>/img/tibma logo.png" alt="footer logo" class="w-36">
                <div class="mt-4 lg:max-w-sm">
                    <p class="text-sm text-slate-500">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    <p class="text-sm text-slate-500 mt-2">Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
            </div>

            <div class="grid row-gap-8 grid-cols-2 gap-5 md:grid-cols-4 lg:col-span-4">
                <div class="">
                    <!-- head -->
                    <p class="font-semibold text-slate-700">Category</p>
                    <ul class="mt-2 space-y-2">
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">News</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">World</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Games</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">References</a></li>
                    </ul>
                </div>

                <div class="">
                    <!-- head -->
                    <p class="font-semibold text-slate-700">Business</p>
                    <ul class="mt-2 space-y-2">
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Web</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">eCommerce</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Business</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Entertainment</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Portfolio</a></li>
                    </ul>
                </div>

                <div class="">
                    <!-- head -->
                    <p class="font-semibold text-slate-700">Apples</p>
                    <ul class="mt-2 space-y-2">
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Media</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Brochure</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Nonprofit</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Educational</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Projects</a></li>
                    </ul>
                </div>

                <div class="">
                    <!-- head -->
                    <p class="font-semibold text-slate-700">Cherry</p>
                    <ul class="mt-2 space-y-2">
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Infopreneur</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Personal</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Wiki</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Forum</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End footer top -->

        <!-- footer bottom -->
        <div class="flex flex-col justify-between border-t py-8 sm:flex-row">
            <p class="text-sm text-slate-500">© Copyright 2022 <a href="#" class="text-slate-700 hover:text-purple-500"> ZED.zahidul</a> All rights reserved.</p>
            <div class="mt-4 flex items-center space-x-4 sm:mt-0">
                <a href="#">
                    <ion-icon name="logo-facebook" class="text-2xl text-slate-500 hover:text-purple-500 duration-300"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon name="logo-twitter" class="text-2xl text-slate-500 hover:text-purple-500 duration-300"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon name="logo-youtube" class="text-2xl text-slate-500 hover:text-purple-500 duration-300"></ion-icon>
                </a>
            </div>
        </div>
        <!-- End footer bottom -->

    </div>
</footer>

<!-- ====== END footer ====== -->

<!-- opo ae wes -->