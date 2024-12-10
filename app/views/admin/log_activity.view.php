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
    <main class="col-auto relative">
      <div class="row justify-end px-auto">
        <div class="col-lg-10 col px-5 py-4" title="main">

          <div class="row py-2 my-4 gap-4">
            <h1 class="text-2xl font-bold mb-4">Log Activity</h1>

            <!-- Start Notif -->
            <div class="row table-responsive overflow-x-auto">
              <table class="table-auto w-full text-sm text-left">
                <thead class="bg-gray-100">
                  <tr>
                    <th scope="col" class="px-4 py-2 text-gray-600">ID</th>
                    <th scope="col" class="px-4 py-2 text-gray-600">Method</th>
                    <th scope="col" class="px-4 py-2 text-gray-600">Activity</th>
                    <th scope="col" class="px-4 py-2 text-gray-600">Created At</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  /**
                   * @var LogActivityModel[] $logActivities
                   */
                  if (is_array($logActivities) || is_object($logActivities)) {
                    foreach ($logActivities as $logActivity) { ?>
                      <tr class="border-t">
                        <td class="px-4 py-2"><?= $logActivity->getIdLog() ?></td>
                        <td class="px-4 py-2"><?= $logActivity->getMethod() ?></td>
                        <td class="px-4 py-2"><?= $logActivity->getActivity() ?></td>
                        <td class="px-4 py-2"><?= $logActivity->getCreatedAt() ?></td>
                      </tr>
                  <?php
                    }
                  } else {
                    echo "<tr><td colspan='4' class='px-4 py-2 text-center'>Data log tidak tersedia atau tidak valid.</td></tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- End Notif -->
          </div>

          <?php Helper::importView('partials/pagination_control.view.php', [
            'prevPage' => $prevPage,
            'currentPage' => $currentPage,
            'pageCount' => $pageCount,
            'nextPage' => $nextPage
          ]); ?>
        </div>
      </div>
    </main>
  </div>
</div>