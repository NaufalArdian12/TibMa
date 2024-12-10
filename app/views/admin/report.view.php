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
    <main class="flex-1 h-screen overflow-auto">
      <div class="relative overflow-x-auto">
        <div class="flex items-center md:justify-between flex-wrap gap-2 mb-6">
          <div class="md:flex hidden items-center gap-3 text-sm font-semibold">
            <a href="#" class="text-sm font-medium text-default-700" aria-current="page">Report</a>
          </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 table-auto">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3">
                Title
              </th>
              <th scope="col" class="px-6 py-3">
                Subject
              </th>
              <th scope="col" class="px-6 py-3">
                Reported
              </th>
              <th scope="col" class="px-6 py-3">
                Status
              </th>
              <th scope="col" class="px-6 py-3">
                Create date
              </th>
              <th scope="col" class="px-6 py-3">
                Confirmed by
              </th>
              <th scope="col" class="px-6 py-3">
                Details
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($reports as $report) : ?>
              <tr class="bg-white border-b">
                <td class="px-6 py-3""><?= $report->getTitle() ?></td>
                                <td class=" px-6 py-3""><?= $report->getMahasiswaUsername() ?></td>
                <td class="px-6 py-3""><?= $report->getDosenUsername() ?></td>
                                <td class=" px-6 py-3""><?= $report->getStatus() ?></td>
                <td class="px-6 py-3""><?= $report->getReportDate() ?></td>
                                <td class=" px-6 py-3""><?= $report->getAdminUsername() ?? "No one yet" ?></td>
                <td class="px-6 py-3"">
                                    <a href=" <?= App::get('root_uri') . '/report/detail/' . $report->getIdReport() ?>" class="text-purple-600 hover:underline">Show Details</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>