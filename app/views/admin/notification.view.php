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

    <main class="relative">
      <div>
        <div>
          <div class="py-2 my-4 gap-4">
            <div class="flex items-center md:justify-between flex-wrap gap-2">
              <div class="md:flex hidden items-center gap-3 text-sm font-semibold">
                <a href="#" class="text-sm font-medium text-default-700" aria-current="page">Notification</a>
              </div>
            </div>
            <!-- Start Notif -->
            <?php if (empty($newReportComments)): ?>
              <div class="xl:w-10/12 w-full">
                <div class="flex pt-4 bg-gray-100 rounded-lg">
                  <div class="w-full">
                    <h5 class="text-left">No new notification</h5>
                  </div>
                </div>
              </div>
            <?php endif; ?>

            <?php
            /**
             * @var ReportCommentModel[] $newReportComments
             */
            foreach ($newReportComments as $comment): ?>
              <div class="xl:w-10/12 w-full" id="<?= $comment->getIdReportComment() ?>">
                <div class="flex flex-col p-3 bg-gray-100 rounded-lg">
                  <div class="w-full">
                    <h5 class="text-lg font-medium">
                      <span class="bg-green-500 text-white px-2 py-1 rounded-full">
                        #<?= $comment->getIdReportComment() ?>
                      </span>
                      <?= $comment->getAuthorFirstName() ?> Commented On Report #<?= $comment->getIdReport() ?>
                    </h5>
                  </div>
                  <div class="w-full"></div>
                  <p class="text-sm text-gray-700 truncate">
                    <?= $comment->getContent() ?> <a target="_blank" href="<?= $comment->getReferenceUrl() ?>" class="text-blue-500">Show</a>
                  </p>
                </div>
              </div>
            <?php endforeach; ?>
            <!-- End Notif -->
          </div>
        </div>
      </div>
    </main>
  </div>
</div>