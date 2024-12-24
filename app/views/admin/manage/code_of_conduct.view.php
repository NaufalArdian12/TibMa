<div class="wrapper">
  <!-- Start Sidebar -->
  <?php Helper::importView('partials/sidebar.view.php'); ?>
  <!-- End Sidebar -->

  <div class="page-content">
    <!-- Topbar Start -->
    <?php Helper::importView('partials/topbar.view.php'); ?>
    <!-- Topbar End -->

    <main class="flex-1 p-6">
      <!-- Page Title & Action Button -->
      <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-semibold text-gray-900">Code of Conduct Management</h1>
        <button data-modal-target="addCodeModal" data-modal-toggle="addCodeModal"
          class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 flex items-center gap-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
          </svg>
          Add New Code
        </button>
      </div>

      <!-- Table Section -->
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3">ID</th>
              <th scope="col" class="px-6 py-3">Violation Level</th>
              <th scope="col" class="px-6 py-3">Name</th>
              <th scope="col" class="px-6 py-3">Description</th>
              <th scope="col" class="px-6 py-3">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($codeOfConducts as $code) : ?>
              <tr class="hover:bg-gray-100">
                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap">
                  <?= $code->getIdCodeOfConduct() ?>
                </td>
                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap">
                  Level <?= $code->getViolationLevel()->getLevel() ?>
                  <span class="text-sm text-gray-500">
                    (<?= $code->getViolationLevel()->getName() ?>)
                  </span>
                </td>
                <td class="p-4 text-base font-medium text-gray-900">
                  <?= $code->getName() ?>
                </td>
                <td class="p-4 text-base text-gray-500 max-w-md truncate">
                  <?= $code->getDescription() ?>
                </td>
                <td class="p-4 space-x-2 whitespace-nowrap">
                  <button type="button"
                    data-modal-toggle="edit-<?= $code->getIdCodeOfConduct() ?>-modal"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                    </svg>
                    Edit
                  </button>

                  <!-- Edit Modal -->
                  <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
                    id="edit-<?= $code->getIdCodeOfConduct() ?>-modal">
                    <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
                      <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal Header -->
                        <div class="flex items-start justify-between p-5 border-b rounded-t">
                          <h3 class="text-xl font-semibold">Edit Code of Conduct</h3>
                          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                            data-modal-toggle="edit-<?= $code->getIdCodeOfConduct() ?>-modal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" />
                            </svg>
                          </button>
                        </div>

                        <!-- Modal Body -->
                        <div class="p-6 space-y-6">
                          <form action="<?= $updateCodeEndpoint ?>" method="POST"
                            id="edit-<?= $code->getIdCodeOfConduct() ?>-form">
                            <input type="hidden" name="id_code_of_conduct" value="<?= $code->getIdCodeOfConduct() ?>">

                            <div class="grid gap-6">
                              <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900">
                                  Violation Level
                                </label>
                                <select name="id_violation_level"
                                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5">
                                  <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <option value="<?= $i ?>" <?= $code->getViolationLevel()->getLevel() == $i ? 'selected' : '' ?>>
                                      Level <?= $i ?>
                                    </option>
                                  <?php endfor; ?>
                                </select>
                              </div>
                              <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                                <input type="text" name="name" value="<?= $code->getName() ?>"
                                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5" required>
                              </div>
                              <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                                <textarea name="description" rows="4"
                                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5" required><?= $code->getDescription() ?></textarea>
                              </div>
                            </div>
                          </form>
                        </div>

                        <!-- Modal Footer -->
                        <div class="flex items-center justify-end p-6 space-x-2 border-t">
                          <button type="submit" form="edit-<?= $code->getIdCodeOfConduct() ?>-form"
                            class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Save Changes
                          </button>
                          <button type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5"
                            data-modal-toggle="edit-<?= $code->getIdCodeOfConduct() ?>-modal">
                            Cancel
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Delete Button -->
                  <button type="button"
                    data-modal-toggle="delete-<?= $code->getIdCodeOfConduct() ?>-modal"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" />
                    </svg>
                    Delete
                  </button>

                  <!-- Delete Modal -->
                  <div id="delete-<?= $code->getIdCodeOfConduct() ?>-modal" tabindex="-1" class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full">
                    <div class="relative w-full h-full max-w-md px-4 md:h-auto">
                      <div class="relative bg-white rounded-lg shadow">
                        <div class="p-6 text-center">
                          <svg class="w-16 h-16 mx-auto text-red-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                          <h3 class="mb-5 text-lg font-normal text-gray-500">
                            Are you sure you want to delete this code of conduct?
                          </h3>
                          <form action="<?= $deleteCodeEndpoint ?>" method="POST" class="inline-flex justify-center">
                            <input type="hidden" name="id_code_of_conduct" value="<?= $code->getIdCodeOfConduct() ?>">
                            <button type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2">
                              Yes, delete it
                            </button>
                            <button type="button" data-modal-toggle="delete-<?= $code->getIdCodeOfConduct() ?>-modal"
                              class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5">
                              Cancel
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <!-- Add Modal -->
      <div id="addCodeModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
          <div class="relative bg-white rounded-lg shadow">
            <div class="flex items-center justify-between p-4 border-b rounded-t">
              <h3 class="text-xl font-semibold text-gray-900">Add New Code of Conduct</h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="addCodeModal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
              </button>
            </div>
            <form action="<?= $addCodeEndpoint ?>" method="POST">
              <div class="p-6 space-y-6">
                <div>
                  <label class="block mb-2 text-sm font-medium text-gray-900">Violation Level</label>
                  <select name="id_violation_level" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5">
                    <option value="1">Level 1</option>
                    <option value="2">Level 2</option>
                    <option value="3">Level 3</option>
                    <option value="4">Level 4</option>
                    <option value="5">Level 5</option>
                  </select>
                </div>
                <div>
                  <label class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                  <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5" required>
                </div>
                <div>
                  <label class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                  <textarea name="description" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5" required></textarea>
                </div>
              </div>
              <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                <button type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save</button>
                <button type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-purple-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10" data-modal-hide="addCodeModal">Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Edit & Delete Modals (Generated for each item) -->
      <?php foreach ($codeOfConducts as $code): ?>
        <!-- Edit Modal -->
        <div id="editCodeModal<?= $code->id_code_of_conduct ?>" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <!-- Similar structure to Add Modal but with pre-filled values -->
        </div>

        <!-- Delete Modal -->
        <div id="deleteCodeModal<?= $code->id_code_of_conduct ?>" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
              <div class="p-6 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500">Are you sure you want to delete this code of conduct?</h3>
                <form action="<?= $deleteCodeEndpoint ?>" method="POST" class="inline-flex">
                  <input type="hidden" name="id" value="<?= $code->id_code_of_conduct ?>">
                  <button type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Yes, I'm sure
                  </button>
                  <button type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10" data-modal-hide="deleteCodeModal<?= $code->id_code_of_conduct ?>">
                    No, cancel
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </main>
  </div>
</div>