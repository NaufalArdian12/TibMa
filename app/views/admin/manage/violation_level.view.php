<?php ?>
<div class="wrapper">

  <!-- Start Sidebar -->
  <?php Helper::importView('partials/sidebar.view.php');
  ?>
  <!-- End Sidebar -->
  <div class="page-content">
    <!-- Topbar Start -->
    <?php Helper::importView('partials/topbar.view.php');
    ?>
    <!-- Topbar End -->

    <main class="flex-1">
      <!-- Page Title Start -->
      <div class="sm:flex">
        <?= $flash ?>
        <div class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 ">
          <div class="flex pl-0 mt-3 space-x-1 sm:pl-2 sm:mt-0">
            <h1>Manage Violation Level</h1>
          </div>
        </div>
        <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
          <button type="button" data-modal-toggle="add-user-modal" class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 sm:w-auto">
            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
            </svg>
            Add user
          </button>
        </div>
      </div>
      <!-- Page Title End -->
      <div class="flex flex-col">
        <div class="overflow-x-auto">
          <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden shadow">
              <table class="min-w-full divide-y divide-gray-200 table-fixed ">
                <thead class="bg-gray-100 ">
                  <tr>

                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                      No
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                      Level
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                      Name
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                      Weight
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 ">
                  <?php foreach ($violationLevels as $violation) : ?>
                    <tr class="hover:bg-gray-100">

                      <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs "><?= $violation->getLevel(); ?></td>
                      <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs "><?= $violation->getLevel(); ?></td>
                      <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap "><?= $violation->getName(); ?></td>
                      <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap "><?= $violation->getWeight(); ?></td>
                      <td class="p-4 space-x-2 whitespace-nowrap" id="action_wrapper">
                        <button type="button" data-modal-toggle="edit-<?= $violation->getIdViolationLevel(); ?>-modal" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300">
                          <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                          </svg>
                          Edit user
                        </button>

                        <div class="fixed left-0 right-0 z-50 items-center justify-center overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full hidden" id="edit-<?= $violation->getIdViolationLevel(); ?>-modal" aria-hidden="true">
                          <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                              <!-- Modal header -->
                              <div class="flex items-start justify-between p-5 border-b rounded-t">
                                <h3 class="text-xl font-semibold ">
                                  Edit user
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="edit-<?= $violation->getIdViolationLevel(); ?>-modal" fdprocessedid="qln61">
                                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                  </svg>
                                </button>
                              </div>
                              <!-- Modal body -->
                              <div class="p-6 space-y-6">
                                <form action="<?= $updateViolationLevelEndpoint ?>" method="POST" id="edit-<?= $violation->getidViolationLevel(); ?>-form">
                                  <input type="hidden" class="form-control" id="id_violation_level" name="id_violation_level" value="<?= $violation->getIdViolationLevel(); ?>">
                                  <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                      <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900">Level</label>
                                      <input type="text" name="first-name" id="first-name" value="<?= $violation->getLevel(); ?>" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5" placeholder="Bonnie" required="">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                      <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                                      <input type="text" name="last-name" id="last-name" value="<?= $violation->getName(); ?>" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5  " placeholder="Green" required="">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                      <label for="Weight" class="block mb-2 text-sm font-medium text-gray-900">Weight</label>
                                      <input type="Weight" name="Weight" id="Weight" value="<?= $violation->getWeight(); ?>" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5  " placeholder="example@company.com" required="">
                                    </div>
                                  </div>
                                </form>
                              </div>
                              <!-- Modal footer -->
                              <div class="items-center p-6 border-t border-gray-200 rounded-b">
                                <button onclick="$('#edit-<?= $violation->getIdViolationLevel(); ?>-form').submit();" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit" fdprocessedid="29okev">Save all</button>
                              </div>

                            </div>
                          </div>
                        </div>
                        <button type="button" data-modal-toggle="delete-<?= $violation->getidViolationLevel(); ?>-modal" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 ">
                          <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                          </svg>
                          Delete user
                        </button>

                        <!-- Modal delete -->
                        <div class="fixed left-0 right-0 z-50 items-center justify-center overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full hidden" id="delete-<?= $violation->getIdViolationLevel(); ?>-modal" aria-hidden="true">
                          <div class="relative w-full h-full max-w-md px-4 md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                              <!-- Modal header -->
                              <div class="flex justify-end p-2">
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="delete-<?= $violation->getIdViolationLevel(); ?>-modal" fdprocessedid="si7trt">
                                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                  </svg>
                                </button>
                              </div>
                              <!-- Modal body -->
                              <div class="p-6 pt-0 text-center">
                                <svg class="w-16 h-16 mx-auto text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <h3 class="mt-5 mb-6 text-lg text-gray-500">Are you sure you want to delete <?= $violation->getName(); ?></h3>
                                <form action="<?= $deleteViolationLevelEndpoint ?>" method="POST">
                                  <input type="hidden" name="id_violation_level" value="<?= $violation->getIdViolationLevel(); ?>">
                                  <button type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2">
                                    Yes, I'm sure
                                  </button>
                                  <button type="button" class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-purple-300 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center" data-modal-toggle="delete-<?= $violation->getIdViolationLevel(); ?>-modal">
                                    No, cancel
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
          </div>
        </div>
      </div>
      <!-- Modal Add User -->
      <div class="fixed left-0 right-0 z-50 items-center justify-center overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full hidden" id="add-user-modal" aria-modal="true" role="dialog">
        <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-5 border-b rounded-t ">
              <h3 class="text-xl font-semibold">
                Add new user
              </h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="add-user-modal">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
              </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
              <form action="<?= $addViolationLevelEndpoint ?>" method="post" id="add-user-form">
                <div class="grid grid-cols-6 gap-6">
                  <div class="col-span-6 sm:col-span-3">
                    <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900">Level</label>
                    <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5  " placeholder="Bonnie" required="">
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                    <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5  " placeholder="Green" required="">
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="Weight" class="block mb-2 text-sm font-medium text-gray-900">Weight</label>
                    <input type="Weight" name="Weight" id="Weight" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5  " placeholder="example@company.com" required="">
                  </div>
                </div>
              </form>
            </div>
            <!-- Modal footer -->
            <div class="items-center p-6 border-t border-gray-200 rounded-b ">
              <button class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center " type="submit" onclick="$('#add-user-form').submit();">Add user</button>
            </div>

          </div>
        </div>
      </div>
      <!-- Modal End -->
    </main>

  </div>

</div>
<script>
  function deleteModal() {
    const template = /*template*/ `
  
    `
    $('#action_wrapper').append(template)
    $('#delete-user-modal').show()
    const myModalEl = document.getElementById('delete-user-modal')
    myModalEl.addEventListener('hidden', event => {
      $('#delete-user-modal').remove();
    })

  }
</script>

<script src="https://flowbite-admin-dashboard.vercel.app//app.bundle.js"></script>