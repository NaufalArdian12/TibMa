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
      <div class="flex items-center md:justify-between flex-wrap gap-2 mb-6">
        <div class="md:flex hidden items-center gap-3 text-sm font-semibold">
          <a href="#" class="text-sm font-medium text-default-700" aria-current="page">Admin Dashboard</a>
        </div>
      </div>
      <!-- Page Title End -->

      <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-6 mb-6">
        <div class="card group overflow-hidden transition-all duration-500 hover:shadow-lg hover:-translate-y-0.5">
          <div class="card-body">
            <div class="flex items- justify-between">
              <div>
                <p class="text-base mb-1">Total Violation</p>
                <h4 class="text-xl">69</h4>
              </div>

              <div
                class="rounded-lg flex justify-center items-center size-16 bg-success/10 text-success">
                <i
                  class="material-symbols-rounded text-4xl transition-all group-hover:fill-1">shopping_bag</i>
              </div>
            </div>
          </div>
          <div id="total-order"></div>
        </div>

        <div class="card group overflow-hidden transition-all duration-500 hover:shadow-lg hover:-translate-y-0.5">
          <div class="card-body">
            <div class="flex items- justify-between">
              <div>
                <p class="text-base mb-1">Total Report</p>
                <h4 class="text-xl">68</h4>
              </div>

              <div
                class="rounded-lg flex justify-center items-center size-16 bg-primary/10 text-primary">
                <i
                  class="material-symbols-rounded text-4xl transition-all group-hover:fill-1">payments</i>
              </div>
            </div>
          </div>
          <div id="total-sale"></div>
        </div>

        <div class="card group overflow-hidden transition-all duration-500 hover:shadow-lg hover:-translate-y-0.5">
          <div class="card-body">
            <div class="flex items- justify-between">
              <div>
                <p class="text-base mb-1">Total Activity</p>
                <h4 class="text-xl">99</h4>
              </div>

              <div class="rounded-lg flex justify-center items-center size-16 bg-info/10 text-info">
                <i
                  class="material-symbols-rounded text-4xl transition-all group-hover:fill-1">visibility</i>
              </div>
            </div>
          </div>
          <div id="total-visits"></div>
        </div>
      </div>
    </main>
  </div>
</div>