<!-- ====== header ====== -->


<header x-data="{navbarOpen: false}" class="absolute sticky left-0 top-0 z-50 bg-white/90 w-full backdrop-blur">
    <div class="mx-auto h-[90px] max-w-7xl px-8 md:px-6">
        <div class="relative flex h-full items-center justify-between border-b border-slate-500/10">
            <!-- logo -->
            <div class="w-[15rem] max-w-full">
                <a href="<?= BASE_URL;?>">
                    <img src="<?= BASE_URL;?>/img/tibma logo.png" alt="logo" class="w-full">
                </a>
            </div>

            <!-- menu -->
            <div class="flex w-full items-center justify-between">
                <nav x-transition :class="!navbarOpen && 'hidden'" id="navbarCollapse" class="absolute right-0 top-[90px] w-full max-w-[350px] rounded-lg border border-purple-200 bg-white py-5 px-6 shadow-lg shadow-purple-400/5 transition-all lg:static lg:block lg:max-w-full lg:border-none lg:shadow-none lg:bg-transparent lg:px-0 lg:py-0">
                    <ul class="flex flex-col justify-center gap-8 lg:flex-row">
                        <li>
                            <a href="#" id="navbarToggler" class="text-lg font-medium text-slate-700 duration-200 hover:text-purple-600 lg:text-base">Home</a>
                        </li>
                        <li>
                            <a href="#" id="navbarToggler" class="text-lg font-medium text-slate-700 duration-200 hover:text-purple-600 lg:text-base">Rules</a>
                        </li>
                        <li>
                            <a href="#about" id="navbarToggler" class="text-lg font-medium text-slate-700 duration-200 hover:text-purple-600 lg:text-base">About</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- menu btn -->
            <div class="flex">
                <a href="<?= BASE_URL;?>/login" class="mr-10 hidden rounded-md bg-purple-500 px-8 py-2.5 font-semibold text-white shadow-md shadow-purple-500/20 duration-200 hover:bg-purple-600 sm:block lg:mr-0">Login</a>

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

                <button class="w-full rounded-md bg-purple-500 px-8 py-2.5 font-semibold text-white shadow-md shadow-purple-500/20 hover:bg-purple-600 duration-200 sm:w-auto">Login</button>

                <button class="mt-4 box-border w-full rounded-md border border-purple-500/20 px-8 py-2.5 font-semibold text-purple-500 shadow-md shadow-purple-500/10 duration-200 sm:ml-4 sm:mt-0 sm:w-auto hover:bg-purple-500 hover:text-white">Rules</button>
            </div>

            <div class="hidden px-4 lg:block lg:w-1/12"></div>

            <div class="w-full px-4 lg:w-6/12 delay-[300ms] duration-[600ms] taos:translate-x-[200px] taos:opacity-0" data-taos-offset="400">
                <div class="lg:ml-auto lg:text-right">
                    <div class="relative z-10 inline-block pt-11 lg:pt-0">
                        <img src="<?= BASE_URL;?>/img/hero.png" alt="hero section img" class="max-w-full lg:ml-auto">
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
        <div class="mb-5 sm:mb-10">
            <span class="font-medium text-purple-500">Our Features</span>
            <h1 class="text-2xl font-bold text-slate-700 sm:text-3xl">Provide Our Features</h1>
        </div>
        <!-- features img -->
        <div class="md:flex md:justify-between md:gap-6 xl:gap-10">
            <div class="mb-5 max-h-[600px] overflow-hidden rounded-lg md:mb-0 md:w-5/12">
                <img src="<?= BASE_URL;?>/img/features/features.png" alt="features img" class="h-full scale-125 sm:w-full sm:object-cover">
            </div>
            <div class="md:w-7/12">
                <div class="mb-16 flex flex-col">
                    <p class="mb-3 text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint explicabo perferendis voluptatibus sunt enim officiis.</p>

                    <p class="mb-10 text-slate-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint laudantium, cum, quaerat nulla possimus magni odio ullam ratione vitae id fuga aliquam sed molestiae? Voluptas.</p>

                    <button class="w-full rounded-md bg-purple-500 px-8 py-2.5 font-semibold text-white shadow-md shadow-purple-500/20 hover:bg-purple-600 duration-200 md:w-max">Get Started</button>
                </div>

                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="flex flex-col items-center justify-center rounded-xl bg-white px-4 py-8 shadow-lg">
                        <img class="mb-3 w-16" src="<?= BASE_URL;?>/img/features/icon (1).png" alt="">
                        <h3 class="text-lg font-bold text-slate-600">Web Design</h3>
                        <a href="#" class="text-sm text-purple-500">Learn more</a>
                    </div>
                    <div class="flex flex-col items-center justify-center rounded-xl bg-white px-4 py-8 shadow-lg">
                        <img class="mb-3 w-16" src="<?= BASE_URL;?>/img/features/icon (2).png" alt="">
                        <h3 class="text-lg font-bold text-slate-600">Automation</h3>
                        <a href="#" class="text-sm text-purple-500">Learn more</a>
                    </div>
                    <div class="flex flex-col items-center justify-center rounded-xl bg-white px-4 py-8 shadow-lg">
                        <img class="mb-3 w-16" src="<?= BASE_URL;?>/img/features/icon (3).png" alt="">
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
                <p class="text-slate-500 mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere corporis delectus commodi suscipit dolores? Laudantium natus consectetur maiores architecto iste?</p>
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
                <img src="<?= BASE_URL;?>/img/about1.png" alt="about img" class="max-h-[500px] md:max-h-max">
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


<!-- ====== FAQ ====== -->

<section class="py-16">
    <div class="mx-auto max-w-7xl px-8 md:px-6">
        <!-- heading text -->
        <div class="mb-5 sm:mb-10">
            <span class="font-medium text-purple-500">Our FAQ</span>
            <h1 class="text-2xl font-bold text-slate-700 sm:text-3xl">Frequently Asked Questions</h1>
        </div>
        <!-- wrapper -->
        <div class="md:flex md:justify-between md:gap-6">
            <div class="mb-8 flex justify-center md:mb-0 md:w-5/12">
                <img src="<?= BASE_URL;?>/img/faq1.png" alt="faq <?= BASE_URL;?>/img" class="max-h-[500px] md:max-h-max">
            </div>

            <div class="md:w-6/12">
                <div class="" x-data="{selected:1}">
                    <ul>
                        <li class="relative mb-5">
                            <button type="button" class="w-full rounded-lg bg-purple-50 px-8 py-6 text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                                <div class="flex items-center justify-between">
                                    <h4 class="font-medium text-slate-600">Lorem ipsum dolor sit, amet consectetur?</h4>
                                    <ion-icon name="chevron-down-circle-outline" class="w-8 text-lg text-purple-500"></ion-icon>
                                </div>
                            </button>

                            <div class="relative max-h-0 overflow-hidden rounded-b-lg bg-purple-50/30 transition-all duration-500" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                <div class="p-6">
                                    <p class="text-slate-500">ipsum! Assumenda, dolorem nihil. Commodi, qui? Officiis provident, cumque perspiciatis magni commodi rem nihil,</p>
                                </div>
                            </div>
                        </li>

                        <li class="relative mb-5">
                            <button type="button" class="w-full rounded-lg bg-purple-50 px-8 py-6 text-left" @click="selected !== 2 ? selected = 2 : selected = null">
                                <div class="flex items-center justify-between">
                                    <h4 class="font-medium text-slate-600">Lorem ipsum dolor sit, amet consectetur?</h4>
                                    <ion-icon name="chevron-down-circle-outline" class="w-8 text-lg text-purple-500"></ion-icon>
                                </div>
                            </button>

                            <div class="relative max-h-0 overflow-hidden rounded-b-lg bg-purple-50/30 transition-all duration-500" x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                <div class="p-6">
                                    <p class="text-slate-500">ipsum! Assumenda, dolorem nihil. Commodi, qui? Officiis provident, cumque perspiciatis magni commodi rem nihil,</p>
                                </div>
                            </div>
                        </li>

                        <li class="relative mb-5">
                            <button type="button" class="w-full rounded-lg bg-purple-50 px-8 py-6 text-left" @click="selected !== 3 ? selected = 3 : selected = null">
                                <div class="flex items-center justify-between">
                                    <h4 class="font-medium text-slate-600">Lorem ipsum dolor sit, amet consectetur?</h4>
                                    <ion-icon name="chevron-down-circle-outline" class="w-8 text-lg text-purple-500"></ion-icon>
                                </div>
                            </button>

                            <div class="relative max-h-0 overflow-hidden rounded-b-lg bg-purple-50/30 transition-all duration-500" x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                <div class="p-6">
                                    <p class="text-slate-500">ipsum! Assumenda, dolorem nihil. Commodi, qui? Officiis provident, cumque perspiciatis magni commodi rem nihil,</p>
                                </div>
                            </div>
                        </li>

                        <li class="relative mb-5">
                            <button type="button" class="w-full rounded-lg bg-purple-50 px-8 py-6 text-left" @click="selected !== 4 ? selected = 4 : selected = null">
                                <div class="flex items-center justify-between">
                                    <h4 class="font-medium text-slate-600">Lorem ipsum dolor sit, amet consectetur?</h4>
                                    <ion-icon name="chevron-down-circle-outline" class="w-8 text-lg text-purple-500"></ion-icon>
                                </div>
                            </button>

                            <div class="relative max-h-0 overflow-hidden rounded-b-lg bg-purple-50/30 transition-all duration-500" x-ref="container4" x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                                <div class="p-6">
                                    <p class="text-slate-500">ipsum! Assumenda, dolorem nihil. Commodi, qui? Officiis provident, cumque perspiciatis magni commodi rem nihil,</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====== END FAQ ====== -->


<!-- ====== Portfolio ====== -->

<section class="py-16">
    <div class="mx-auto max-w-7xl px-8 md:px-6">
        <!-- heading text -->
        <div class="mb-10 text-center">
            <span class="font-medium text-purple-500">Our Portfolio</span>
            <h1 class="text-2xl font-bold text-slate-700 sm:text-3xl">Our Recent Works</h1>
            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur deleniti sit dolor numquam non. Et.</p>
        </div>
        <!-- wrapper -->
        <div class="flex flex-col gap-5">
            <!-- col-1 -->
            <div class="grid gap-5 sm:grid-cols-2 md:grid-cols-4">
                <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52">
                    <img src="<?= BASE_URL;?>/img/portfolio/p-1.png" alt="portfolio img" class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">
                    <div class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                        <p class="text-sm font-semibold text-white">Type Your portfolio details <span class="text-xs text-slate-300 block">12 August 2025</span></p>
                        <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-purple-500"></ion-icon>
                    </div>
                </div>
                <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52">
                    <img src="<?= BASE_URL;?>/img/portfolio/p-2.png" alt="portfolio img" class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">
                    <div class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                        <p class="text-sm font-semibold text-white">Type Your portfolio details <span class="text-xs text-slate-300 block">12 August 2025</span></p>
                        <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-purple-500"></ion-icon>
                    </div>
                </div>
                <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52 sm:col-span-2">
                    <img src="<?= BASE_URL;?>/img/portfolio/p-3.png" alt="portfolio img" class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">
                    <div class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                        <p class="text-sm font-semibold text-white">Type Your portfolio details <span class="text-xs text-slate-300 block">12 August 2025</span></p>
                        <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-purple-500"></ion-icon>
                    </div>
                </div>
            </div>
            <!-- end col-1 -->

            <!-- col-2 -->
            <div class="grid gap-5 sm:grid-cols-2 md:grid-cols-3">
                <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52 md:col-span-2">
                    <img src="<?= BASE_URL;?>/img/portfolio/p-4.png" alt="portfolio img" class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">
                    <div class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                        <p class="text-sm font-semibold text-white">Type Your portfolio details <span class="text-xs text-slate-300 block">12 August 2025</span></p>
                        <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-purple-500"></ion-icon>
                    </div>
                </div>
                <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52">
                    <img src="<?= BASE_URL;?>/img/portfolio/p-5.png" alt="portfolio img" class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">
                    <div class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                        <p class="text-sm font-semibold text-white">Type Your portfolio details <span class="text-xs text-slate-300 block">12 August 2025</span></p>
                        <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-purple-500"></ion-icon>
                    </div>
                </div>
            </div>
            <!-- end col-2 -->

            <!-- col-3 -->
            <div class="grid gap-5 sm:grid-cols-2 md:grid-cols-4">
                <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52">
                    <img src="<?= BASE_URL;?>/img/portfolio/p-6.png" alt="portfolio img" class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">
                    <div class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                        <p class="text-sm font-semibold text-white">Type Your portfolio details <span class="text-xs text-slate-300 block">12 August 2025</span></p>
                        <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-purple-500"></ion-icon>
                    </div>
                </div>
                <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52">
                    <img src="<?= BASE_URL;?>/img/portfolio/p-7.png" alt="portfolio img" class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">
                    <div class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                        <p class="text-sm font-semibold text-white">Type Your portfolio details <span class="text-xs text-slate-300 block">12 August 2025</span></p>
                        <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-purple-500"></ion-icon>
                    </div>
                </div>
                <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52 sm:col-span-2">
                    <img src="<?= BASE_URL;?>/img/portfolio/p-8.png" alt="portfolio img" class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">
                    <div class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                        <p class="text-sm font-semibold text-white">Type Your portfolio details <span class="text-xs text-slate-300 block">12 August 2025</span></p>
                        <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-purple-500"></ion-icon>
                    </div>
                </div>
            </div>
            <!-- end col-3 -->
        </div>
    </div>
</section>
<!-- ====== END Portfolio ====== -->


<!-- ====== Blog ====== -->

<section class="py-16">
    <div class="mx-auto max-w-7xl px-8 md:px-6">
        <!-- heading text -->
        <div class="mb-5 sm:mb-10">
            <span class="font-medium text-purple-500">Our Blog</span>
            <h1 class="text-2xl font-bold text-slate-700 sm:text-3xl">From Our Latest Blog</h1>
        </div>
        <!-- wrapper -->
        <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:gap-10">
            <!-- single-blog -->
            <div class="w-full duration-200 hover:scale-95">
                <div class="max-h-52 w-full overflow-hidden rounded-t-xl">
                    <img src="<?= BASE_URL;?>/img/blog/blog-1.png" alt="blog img" class="w-full">
                </div>
                <div class="rounded-b-xl px-5 pb-5 pt-3 shadow-md shadow-purple-500/10">
                    <div class="">
                        <a href="#" class="mr-2 rounded-md bg-purple-50 px-3 py-1 text-sm text-slate-600">Services</a>
                        <a href="#" class="block pt-4 font-medium capitalize text-slate-800 hover:text-purple-500">Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit.</a>
                    </div>
                    <hr class="my-4 border-slate-100">
                    <div class="flex">
                        <img src="<?= BASE_URL;?>/img/blog/user-1.png" alt="user img" class="mr-3 h-10 w-10 rounded-full object-cover">
                        <p class="text-sm font-semibold capitalize text-slate-600">Zahidul Hossain <span class="block text-xs text-slate-400">web designer</span></p>
                    </div>
                </div>
            </div>

            <!-- single-blog -->
            <div class="w-full duration-200 hover:scale-95">
                <div class="max-h-52 w-full overflow-hidden rounded-t-xl">
                    <img src="<?= BASE_URL;?>/img/blog/blog-2.png" alt="blog img" class="w-full">
                </div>
                <div class="rounded-b-xl px-5 pb-5 pt-3 shadow-md shadow-purple-500/10">
                    <div class="">
                        <a href="#" class="mr-2 rounded-md bg-purple-50 px-3 py-1 text-sm text-slate-600">Services</a>
                        <a href="#" class="mr-2 rounded-md bg-purple-50 px-3 py-1 text-sm text-slate-600">Design</a>
                        <a href="#" class="block pt-4 font-medium capitalize text-slate-800 hover:text-purple-500">Dolore Placeat Ullam Architecto Deleniti Maxime Laborum</a>
                    </div>
                    <hr class="my-4 border-slate-100">
                    <div class="flex">
                        <img src="<?= BASE_URL;?>/img/blog/user-2.png" alt="user img" class="mr-3 h-10 w-10 rounded-full object-cover">
                        <p class="text-sm font-semibold capitalize text-slate-600">Zahidul Hossain <span class="block text-xs text-slate-400">web designer</span></p>
                    </div>
                </div>
            </div>

            <!-- single-blog -->
            <div class="w-full duration-200 hover:scale-95">
                <div class="max-h-52 w-full overflow-hidden rounded-t-xl">
                    <img src="<?= BASE_URL;?>/img/blog/blog-3.png" alt="blog img" class="w-full">
                </div>
                <div class="rounded-b-xl px-5 pb-5 pt-3 shadow-md shadow-purple-500/10">
                    <div class="">
                        <a href="#" class="mr-2 rounded-md bg-purple-50 px-3 py-1 text-sm text-slate-600">Website</a>
                        <a href="#" class="block pt-4 font-medium capitalize text-slate-800 hover:text-purple-500">Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit.</a>
                    </div>
                    <hr class="my-4 border-slate-100">
                    <div class="flex">
                        <img src="<?= BASE_URL;?>/img/blog/user-3.png" alt="user img" class="mr-3 h-10 w-10 rounded-full object-cover">
                        <p class="text-sm font-semibold capitalize text-slate-600">Zahidul Hossain <span class="block text-xs text-slate-400">web designer</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====== END Blog ====== -->

<!-- ====== Contact ====== -->


<section class="relative overflow-hidden py-16">
    <img src="<?= BASE_URL;?>/img/effect.png" alt="effect" class="absolute bottom-[-400px] -z-10 w-full opacity-[0.2]">
    <div class="mx-auto max-w-7xl px-8 md:px-6">
        <div class="-mx-4 flex flex-wrap lg:justify-between">

            <!-- left info-->
            <div class="w-full px-4 md:w-1/2 xl:w-6/12">
                <div class="mb-12 max-w-[570px] lg:mb-0">
                    <span class="font-medium text-purple-500">Contact Us</span>
                    <h1 class="mb-3 text-2xl font-bold text-slate-700 sm:text-3xl">GET IN TOUCH WITH US</h1>
                    <p class="text-slate-500 mb-8">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere inventore illo porro molestiae maxime magni natus illum commodi! Modi, quisquam?</p>


                    <!-- address -->
                    <div class="mb-8 flex w-full max-w-[420px] items-center rounded-lg bg-white p-4 shadow-md shadow-purple-500/10">
                        <div class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-purple-500 bg-opacity-5 text-purple-500 sm:h-[70px] sm:max-w-[70px]">
                            <ion-icon name="location-outline" class="text-3xl"></ion-icon>
                        </div>
                        <div class="w-full">
                            <h4 class="mb-1 text-xl font-bold text-slate-700">Our Location</h4>
                            <p class="text-base text-slate-400
                            ">4236 Woodland Terrace. Sacramento. California</p>
                        </div>
                    </div>
                    <!-- phone -->
                    <div class="mb-8 flex w-full max-w-[420px] items-center rounded-lg bg-white p-4 shadow-md shadow-purple-500/10">
                        <div class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-purple-500 bg-opacity-5 text-purple-500 sm:h-[70px] sm:max-w-[70px]">
                            <ion-icon name="call-outline" class="text-3xl"></ion-icon>
                        </div>
                        <div class="w-full">
                            <h4 class="mb-1 text-xl font-bold text-slate-700">Phone Number</h4>
                            <p class="text-base text-slate-400
                            ">(+62)01 234 567 8912</p>
                        </div>
                    </div>
                    <!-- mail -->
                    <div class="mb-8 flex w-full max-w-[420px] items-center rounded-lg bg-white p-4 shadow-md shadow-purple-500/10">
                        <div class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-purple-500 bg-opacity-5 text-purple-500 sm:h-[70px] sm:max-w-[70px]">
                            <ion-icon name="mail-outline" class="text-3xl"></ion-icon>
                        </div>
                        <div class="w-full">
                            <h4 class="mb-1 text-xl font-bold text-slate-700">Email Address</h4>
                            <p class="text-base text-slate-400
                            ">company@gmail.com</p>
                        </div>
                    </div>


                </div>
            </div>

            <!-- right contact-->
            <div class="w-full px-4 md:w-1/2 xl:w-5/12">
                <div class="relative rounded-lg bg-white p-8 shadow-lg shadow-purple-500/10 sm:p-12">
                    <form action="">
                        <div class="mb-6">
                            <input type="text" placeholder="Your Name" class="w-full rounded-lg border border-purple-500/20 px-4 py-3 text-slate-500 focus:border-purple-500 focus:outline-none">
                        </div>
                        <div class="mb-6">
                            <input type="email" placeholder="Your Email" class="w-full rounded-lg border border-purple-500/20 px-4 py-3 text-slate-500 focus:border-purple-500 focus:outline-none">
                        </div>
                        <div class="mb-6">
                            <input type="password" placeholder="Your Passsword" class="w-full rounded-lg border border-purple-500/20 px-4 py-3 text-slate-500 focus:border-purple-500 focus:outline-none">
                        </div>
                        <div class="mb-6">
                            <textarea name="message" rows="6" class="resize-none w-full rounded-lg border border-purple-500/20 px-4 py-3 text-slate-500 focus:border-purple-500 focus:outline-none"></textarea>
                        </div>
                        <div class="">
                            <button type="submit" class="w-full rounded border border-purple-300 bg-purple-500 p-3 text-white transition-all hover:bg-opacity-90">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</section>


<!-- ====== END Contact ====== -->

<!-- ====== footer ====== -->

<footer class="bg-slate-50/80 pt-16">
    <div class="mx-auto max-w-7xl px-8 md:px-6">

        <!-- footer top -->
        <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6">
            <div class="md:max-w-md lg:col-span-2">
                <img src="<?= BASE_URL;?>/img/tibma logo.png" alt="footer logo" class="w-36">
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