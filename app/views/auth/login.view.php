<section class="bg-gray-50 min-h-screen flex items-center justify-center duration-[1000ms] taos:opacity-0">
  <!-- login container -->
  <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
    <!-- form -->
    <div class="md:w-1/2 px-8 md:px-16">
      <h2 class="font-bold text-2xl text-gray-800">Login</h2>
      <p class="text-sm mt-4 text-gray-500">If you are already a member, easily log in</p>

      <form action="<?= App::get("root_uri"); ?>/auth/login" method="post" class="flex flex-col gap-4">
        <input class="p-2 text-base mt-8 rounded-md border" type="text" name="username" placeholder="Username">
        <div class="relative">
          <input class="p-2 rounded-md border w-full" type="password" name="password" placeholder="Password">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
          </svg>
        </div>
        <button type="submit" class="w-full rounded-md bg-purple-500 px-8 py-2.5 font-semibold text-white shadow-md shadow-purple-500/20 hover:bg-purple-600 duration-200 sm:w-auto">Login</button>
      </form>

      <div class="text-purple-600 mt-5 text-xs py-4 text-[#002D74]">
        <a href="#">Forgot your password?</a>
      </div>

    </div>

    <!-- image -->
    <div class="md:block hidden w-1/2">
      <img class="rounded-2xl" src="<?= App::get("public_uri");?>/img/abstract-shape.png">
    </div>
  </div>
</section>