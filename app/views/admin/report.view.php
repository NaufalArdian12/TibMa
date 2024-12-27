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

    <!-- Main Content -->
    <main class="relative left-0 min-h-screen w-full">
      <div class="flex justify-end lg:px-8">
        <div class="w-full py-4">
          <!-- Header -->
          <div class="mb-4">
            <h1 class="text-2xl font-bold">Reports</h1>
          </div>

          <!-- Filter Dropdown -->
          <div class="flex justify-end mt-4 mb-4">
            <button id="filterDropdown" data-dropdown-toggle="dropdown" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">
              <svg class="w-4 h-4 mr-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
              </svg>
              Filter
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
              <ul class="py-2 text-sm text-gray-700" aria-labelledby="filterDropdown">
                <li>
                  <a href="<?= App::get('root_uri') . '/admin/report' ?>" class="block px-4 py-2 hover:bg-gray-100">All</a>
                </li>
                <?php foreach (ReportModel::getStatusChoices() as $status) : ?>
                  <li>
                    <a href="<?= App::get('root_uri') . '/admin/report?status=' . $status ?>" class="block px-4 py-2 hover:bg-gray-100"><?= $status ?></a>
                  </li>
                <?php endforeach; ?>
                <li>
                  <a href="<?= App::get('root_uri') . '/admin/report?managed_by_me=1' ?>" class="block px-4 py-2 hover:bg-gray-100">Managed By Me</a>
                </li>
              </ul>
            </div>
          </div>

          <!-- Table -->
          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                  <th scope="col" class="px-6 py-3">Title</th>
                  <th scope="col" class="px-6 py-3">Subject</th>
                  <th scope="col" class="px-6 py-3">Reported By</th>
                  <th scope="col" class="px-6 py-3">Status</th>
                  <th scope="col" class="px-6 py-3">Create Date</th>
                  <th scope="col" class="px-6 py-3">Confirmed By</th>
                  <th scope="col" class="px-6 py-3">Details</th>
                </tr>
              </thead>
              <tbody>
                <?php
                /**
                 * @var ReportModel $report
                 */
                foreach ($reports as $report) : ?>
                  <tr class="bg-white border-b hover:bg-gray-50">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      <?= $report->getTitle() ?>
                    </th>
                    <td class="px-6 py-4">
                      <?= $report->getMahasiswaUsername() ?>
                    </td>
                    <td class="px-6 py-4">
                      <?= $report->getDosenUsername() ?>
                    </td>
                    <td class="px-6 py-4">
                      <?= $report->getStatus() ?>
                    </td>
                    <td class="px-6 py-4">
                      <?= $report->getReportDate() ?>
                    </td>
                    <td class="px-6 py-4">
                      <?= $report->getAdminUsername() ?? "No one yet" ?>
                    </td>
                    <td class="px-6 py-4">
                      <a href="<?= App::get('root_uri') . '/report/detail/' . $report->getIdReport() ?>" class="font-medium text-blue-600 hover:underline">Show Details</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>