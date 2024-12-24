<div class="wrapper">
  <!-- Start Sidebar -->
  <?php Helper::importView('partials/sidebar.view.php'); ?>
  <!-- End Sidebar -->

  <div class="page-content">
    <!-- Topbar Start -->
    <?php Helper::importView('partials/topbar.view.php'); ?>
    <!-- Topbar End -->

    <main class="flex-1 bg-gray-50">
      <!-- Page Title Start -->
      <div class="flex items-center justify-between p-6 mb-2 bg-white border-b">
        <div class="flex items-center gap-3">
          <h1 class="text-2xl font-semibold text-gray-900">Report Violation</h1>
        </div>
      </div>
      <!-- Page Title End -->

      <!-- Form Content -->
      <div class="p-6">
        <div class="max-w-7xl mx-auto bg-white rounded-xl shadow-sm">
          <form action="<?= $addNewReportEndpoint ?>" method="POST" enctype="multipart/form-data" class="p-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
              <!-- Left Section - Form Fields -->
              <div class="lg:col-span-2 space-y-6">
                <div>
                  <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul Pelanggaran</label>
                  <input type="text"
                    class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    id="title"
                    name="title"
                    placeholder="Masukkan Judul Pelanggaran">
                </div>

                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1" for="mahasiswa_list">Mahasiswa</label>
                  <input type="text"
                    class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    list="mahasiswa_list"
                    placeholder="Masukkan NIM atau Nama Mahasiswa"
                    name="nim_mahasiswa">
                  <datalist id="mahasiswa_list">
                    <?php foreach ($users as $user) :
                      $mahasiswa = $user->getRoleDetail(); ?>
                      <option value="<?= $mahasiswa->getNim() ?>"
                        label="<?= $mahasiswa->getNim() ?> - <?= $user->getFirstName() ?> <?= $user->getLastName() ?>">
                      <?php endforeach; ?>
                  </datalist>
                </div>

                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1" for="code_of_conducts">Pelanggaran</label>
                  <input type="text"
                    class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    list="code_of_conducts"
                    placeholder="Masukkan Tata Tertib yang Dilanggar"
                    name="id_code_of_conduct">
                  <datalist id="code_of_conducts">
                    <?php foreach ($codeOfConducts as $codeOfConduct) :
                      $violationLevel = $codeOfConduct->getViolationLevel(); ?>
                      <option value="<?= $codeOfConduct->getIdCodeOfConduct() ?>"
                        label="<?= $codeOfConduct->getName() ?> - <?= $violationLevel->getName() ?> - <?= GenericUtil::intToRoman($violationLevel->getLevel()) ?>">
                      <?php endforeach; ?>
                  </datalist>
                </div>

                <div>
                  <label for="Location" class="block text-sm font-medium text-gray-700 mb-1">Lokasi Pelanggaran</label>
                  <input type="text"
                    class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    id="Location"
                    placeholder="Masukkan Lokasi Pelanggaran"
                    name="location">
                </div>

                <div>
                  <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Pelanggaran</label>
                  <textarea class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    id="deskripsi"
                    rows="4"
                    placeholder="Masukkan Deskripsi Pelanggaran"
                    name="content"></textarea>
                </div>
              </div>

              <!-- Right Section - Image Upload -->
              <div class="lg:col-span-1">
                <div class="space-y-4">
                  <label class="block text-sm font-medium text-gray-700">Lampiran Pelanggaran</label>
                  <div class="drop-area mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-blue-500">
                    <div class="space-y-1 text-center">
                      <div class="img-view flex flex-col items-center justify-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                          <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="mt-1 text-sm text-gray-600">
                          <label for="formFile" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                            <span>Upload a file</span>
                            <input id="formFile" name="evidence_picture" type="file" class="sr-only">
                          </label>
                          or drag and drop
                        </p>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Footer Section -->
            <div class="mt-6 space-y-4">
              <p class="text-sm text-gray-500">
                Catatan: Dalam upaya menjaga kenyamanan dan keamanan Anda sebagai pelapor, kami akan menjaga kerahasiaan data pribadi Anda.
                Setiap laporan yang Anda sampaikan sangatlah berharga bagi kami, demi terwujudnya JTI yang lebih baik.
              </p>
              <div class="flex justify-end">
                <button type="submit"
                  class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                  Submit Report
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </main>

    <script>
      const dropArea = document.querySelector(".drop-area");
      const inputFile = document.querySelector("input[type=file]");
      const imgView = document.querySelector(".img-view");

      function uploadImg() {
        let imgLink = URL.createObjectURL(inputFile.files[0]);
        imgView.innerHTML = `<img src="${imgLink}" class="max-h-48 rounded-lg object-cover" />`;
      }

      inputFile.addEventListener('change', uploadImg);

      ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false);
      });

      function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
      }

      dropArea.addEventListener('drop', (e) => {
        inputFile.files = e.dataTransfer.files;
        uploadImg();
      });
    </script>
  </div>
</div>