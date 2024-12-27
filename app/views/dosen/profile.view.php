<div class="wrapper">
  <!-- Start Sidebar -->
  <?php Helper::importView('partials/sidebar.view.php'); ?>
  <!-- End Sidebar -->

  <div class="page-content">
    <!-- Topbar Start -->
    <?php Helper::importView('partials/topbar.view.php'); ?>
    <!-- Topbar End -->

    <!-- Main Content -->
    <main class="flex-1 relative">
      <!-- Flash Message -->
      <div class="w-full lg:w-4/5 lg:ml-auto px-4">
        <?= $flash ?>
      </div>

      <!-- Profile Section -->
      <div class="w-full lg:ml-auto p-6">
        <div class="space-y-6">
          <h1 class="text-2xl font-bold text-gray-900">Profile</h1>

          <form action="<?= $updateProfileEndpoint ?>" method="POST" enctype="multipart/form-data" id="updateProfileForm">
            <div class="flex flex-wrap gap-6">
              <!-- Profile Image Section -->
              <!-- Profile Image Section -->
              <div class="w-48 flex flex-col items-center space-y-3">
                <div class="relative w-48 h-64 group cursor-pointer">
                  <img
                    src="<?= $imageUrl ?>"
                    alt="Profile picture"
                    id="img_profile_image"
                    class="w-full h-full object-cover rounded-lg border border-gray-200">
                  <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity duration-200 rounded-lg flex items-center justify-center">
                    <span class="text-white text-sm">Click to change</span>
                  </div>
                </div>
                <div class="relative">
                  <label
                    for="input_profile_image"
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50">
                    Change Picture
                  </label>
                  <input
                    type="file"
                    name="profile_image"
                    id="input_profile_image"
                    class="sr-only"
                    accept="image/*">
                </div>
              </div>

              <!-- Form Fields -->
              <div class="flex-1 space-y-4">
                <!-- Username -->
                <div>
                  <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                  <input
                    type="text"
                    name="username"
                    id="username"
                    value="<?= $username ?>"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 bg-gray-100"
                    disabled
                    readonly>
                </div>

                <!-- NIDN -->
                <div>
                  <label for="identity" class="block text-sm font-medium text-gray-700">NIDN</label>
                  <input
                    type="text"
                    name="nidn"
                    id="identity"
                    value="<?= $nidn ?>"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 bg-gray-100"
                    disabled
                    readonly>
                </div>

                <!-- First Name -->
                <div>
                  <label for="firstname" class="block text-sm font-medium text-gray-700">Firstname</label>
                  <input
                    type="text"
                    name="firstname"
                    id="firstname"
                    value="<?= $firstName ?>"
                    placeholder="Enter your first name"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500">
                </div>

                <!-- Last Name -->
                <div>
                  <label for="lastname" class="block text-sm font-medium text-gray-700">Lastname</label>
                  <input
                    type="text"
                    name="lastname"
                    id="lastname"
                    value="<?= $lastName ?>"
                    placeholder="Enter your last name"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500">
                </div>

                <!-- Title -->
                <div>
                  <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                  <input
                    type="text"
                    name="title"
                    id="title"
                    value="<?= $dosenTitle ?>"
                    placeholder="Enter your title"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500">
                </div>

                <!-- Email -->
                <div>
                  <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    value="<?= $email ?>"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 bg-gray-100"
                    disabled
                    readonly>
                </div>

                <!-- Address -->
                <div>
                  <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                  <input
                    type="text"
                    name="address"
                    id="address"
                    value="<?= $address ?>"
                    placeholder="Enter your address"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500">
                </div>

                <!-- Phone Number -->
                <div>
                  <label for="noTelp" class="block text-sm font-medium text-gray-700">Phone Number</label>
                  <input
                    type="number"
                    name="number"
                    id="noTelp"
                    value="<?= $phoneNumber ?>"
                    placeholder="Enter your phone number"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500">
                </div>

                <!-- Save Button -->
                <div class="flex justify-end">
                  <button
                    type="submit"
                    class="px-4 py-2 text-sm font-medium text-white bg-purple-600 rounded-lg hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                    Save Changes
                  </button>
                </div>
              </div>
            </div>
          </form>

          <!-- Change Password Section -->
          <div class="mt-12 space-y-6">
            <h1 class="text-2xl font-bold text-gray-900">Change Password</h1>

            <form action="<?= $updatePasswordEndpoint ?>" method="post" id="updatePasswordForm" class="max-w-2xl">
              <div class="space-y-4">
                <!-- Current Password -->
                <div class="flex flex-col lg:flex-row lg:items-center gap-2">
                  <label for="currentPassword" class="lg:w-1/3 text-sm font-medium text-gray-700">Current Password</label>
                  <input
                    type="password"
                    name="current_password"
                    id="currentPassword"
                    placeholder="Enter your current password"
                    class="flex-1 rounded-lg border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500">
                </div>

                <!-- New Password -->
                <div class="flex flex-col lg:flex-row lg:items-center gap-2">
                  <label for="newPassword" class="lg:w-1/3 text-sm font-medium text-gray-700">New Password</label>
                  <input
                    type="password"
                    name="new_password"
                    id="newPassword"
                    placeholder="Enter your new password"
                    class="flex-1 rounded-lg border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500">
                </div>

                <!-- Confirm Password -->
                <div class="flex flex-col lg:flex-row lg:items-center gap-2">
                  <label for="confirmPassword" class="lg:w-1/3 text-sm font-medium text-gray-700">Confirm Password</label>
                  <input
                    type="password"
                    name="confirm_password"
                    id="confirmPassword"
                    placeholder="Confirm your new password"
                    class="flex-1 rounded-lg border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500">
                </div>

                <!-- Update Password Button -->
                <div class="flex justify-end mt-6">
                  <button
                    type="submit"
                    id="buttonUpdatePassword"
                    class="px-4 py-2 text-sm font-medium text-white bg-purple-600 rounded-lg hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                    Update Password
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>

<!-- Scripts -->
<script src="<?= App::get("root_uri") . "/public/js/script.js" ?>"></script>
<script src="<?= App::get("root_uri") . "/public/js/script_password.js" ?>"></script>
<script src="<?= App::get("root_uri") . "/public/js/img_preview.js" ?>"></script>