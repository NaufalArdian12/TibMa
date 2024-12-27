<?php

/**
 * @var UserModel $user
 */
$user = Session::getInstance()->get('user');
$isMahasiswa = $user->getRole() == 'mahasiswa';

/**
 * @var ReportModel $report
 * @var UserModel $mahasiswaUser 
 * @var UserModel $dosenUser 
 * @var UserModel|null $adminUser 
 * @var CodeOfConductModel $codeOfConduct
 */
?>

<!-- this template for dashboard view -->
<div class="wrapper">

    <!-- Start Sidebar -->
    <?php Helper::importView('partials/sidebar.view.php'); ?>
    <!-- End Sidebar -->
    <div class="page-content">
        <!-- Topbar Start -->
        <?php Helper::importView('partials/topbar.view.php'); ?>
        <!-- End Sidebar -->

        <main class="flex-1 relative">
            <div class="flex px-auto">
                <div class="lg:w-10/12 px-5 w-full" title="main">
                    <div class="flex flex-col mb-4">
                        <?= $flash ?>
                        <h1 class="text-2xl font-semibold">Report Detail</h1>
                    </div>
                    <div class="flex">
                        <div class="w-full">
                            <!-- start content -->
                            <div class="flex space-x-4">
                                <div class="w-auto">
                                    <img src="<?= GenericUtil::optionalImageRedaction($report->getDosenImageUrl(), $isMahasiswa) ?>" class="rounded-full w-16 h-16" alt="">
                                </div>
                                <div class="flex-1">
                                    <div class="space-y-2">
                                        <div class="flex items-center space-x-2">
                                            <h6 class="font-semibold">
                                                <?= GenericUtil::optionalTextRedaction($report->getDosenFirstName() . " " . $report->getDosenLastName(), $isMahasiswa) ?>
                                                <span class="bg-green-500 text-white text-sm px-2 py-1 rounded">#<?= $report->getIdReport() ?></span>
                                            </h6>
                                            <p class="text-sm">
                                                Submitted a Report on <?= GenericUtil::dateToHumanReadable($report->getReportDate()) ?>
                                            </p>
                                        </div>
                                        <hr>
                                        <div class="space-y-2">
                                            <div class="flex items-center">
                                                <div class="w-1/4 font-semibold">Judul</div>
                                                <div class="w-3/4">: <?= $report->getTitle() ?></div>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="w-1/4 font-semibold">NIM</div>
                                                <div class="w-3/4">: <?= $report->getNimMahasiswa() ?></div>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="w-1/4 font-semibold">Mahasiswa</div>
                                                <div class="w-3/4">: <?= $report->getMahasiswaFirstName() . " " . $report->getMahasiswaLastName() ?></div>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="w-1/4 font-semibold">Pelanggaran</div>
                                                <div class="w-3/4">: <?= $report->getCodeOfConductName() ?></div>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="w-1/4 font-semibold">Deskripsi</div>
                                                <div class="w-3/4">: <?= $report->getCodeOfConductDescription() ?></div>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="w-1/4 font-semibold">Lokasi</div>
                                                <div class="w-3/4">: <?= $report->getLocation() ?></div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h6 class="font-semibold">Detail Pelanggaran</h6>
                                        <p><?= $report->getContent() ?></p>
                                        <img class="max-h-72 w-auto" src="<?= $report->getImageUrl() ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- End content -->

                            <!-- start comment -->
                            <?php
                            /**
                             * @var ReportCommentModel[] $reportComments
                             */
                            foreach ($reportComments as $comment) :
                            ?>
                                <div class="flex my-3" id="<?= $comment->getIdReportComment() ?>">
                                    <div class="w-auto">
                                        <img src="<?= GenericUtil::optionalImageRedaction($comment->getAuthorImageUrl(), $isMahasiswa) ?>" class="rounded-full w-12 h-12" alt="">
                                    </div>
                                    <div class="flex-1 ml-4">
                                        <div class="space-y-2">
                                            <div class="flex items-center space-x-2">
                                                <h6 class="font-semibold">
                                                    <?= GenericUtil::optionalTextRedaction($comment->getAuthorUsername(), $isMahasiswa) ?>
                                                </h6>
                                                <p class="text-sm"><?= GenericUtil::dateToHumanReadable($comment->getCreatedAt()) ?></p>
                                            </div>
                                            <hr>
                                            <div class="space-y-2">
                                                <p><?= $comment->getContent() ?></p>
                                                <img class="max-h-48 w-auto" src="<?= $comment->getImageUrl() ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <!-- End comment -->

                            <?php
                            /**
                             * @var UserModel $currentUser 
                             */
                            $currentUser  = Session::getInstance()->get('user');

                            if ($report->isParticipant($currentUser) && !$report->isAlreadyClosed() && $currentUser->getRole() != 'mahasiswa') :
                            ?>
                                <div class="flex mt-3">
                                    <div class="w-auto">
                                        <img src="<?= $currentUser->getImageUrl() ?>" class="rounded-full w-12 h-12 border-2 border-white" alt="">
                                    </div>
                                    <div class="flex-1 ml-4">
                                        <h6 class="font-semibold"><?= $currentUser->getUsername() ?></h6>
                                        <form method="post" action="<?= $addNewReportCommentEndpoint ?>" enctype="multipart/form-data">
                                            <div class="img-comment-preview hidden">
                                                <img src="" alt="" width="100px">
                                            </div>
                                            <div class="mb-3" title="flashComment">
                                                <textarea class="form-control w-full p-2 border border-gray-300 rounded-md" name="content" rows="3" placeholder="Write Your Message"></textarea>
                                            </div>

                                            <div class="mb-3 flex justify-end">
                                                <label for="upload" class="btn btn-primary text-white px-4 py-2"><i class="bi bi-cloud-arrow-up"></i></label>
                                                <input class="opacity-0" id="upload" type="file" name="attachment_picture" hidden>
                                                <button type="submit" class="btn btn-primary text-white px-4 py-2" onclick="checkComment(event, $(this))"><i class="bi bi-send"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </div>
                        <div class="w-1/4">
                            <!-- for admin -->
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center gap-4">
                                    <img src="<?= GenericUtil::optionalImageRedaction($report->getDosenImageUrl(), $isMahasiswa) ?>" class="border-2 border-white rounded-full w-12 h-12" alt="">
                                    <h6 class="font-semibold"><?= GenericUtil::optionalTextRedaction($report->getDosenFirstName() . " " . $report->getDosenLastName(), $isMahasiswa) ?></h6>
                                </div>

                                <div class="space-y-3">
                                    <p class="text-sm">participant</p>
                                    <div class="flex space-x-3">
                                        <img src="<?= GenericUtil::optionalImageRedaction($report->getDosenImageUrl(), $isMahasiswa) ?>" class="border-2 border-white rounded-full w-8 h-8" alt="">
                                        <img src="<?= GenericUtil::optionalImageRedaction($report->getAdminImageUrl() ?? '', $isMahasiswa) ?>" class="border-2 border-white rounded-full w-8 h-8" alt="">
                                        <img src="<?= $report->getMahasiswaImageUrl() ?? '' ?>" class="border-2 border-white rounded-full w-8 h-8" alt="">
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <div class="font-semibold">Report id</div>
                                        <div>#<?= $report->getIdReport() ?></div>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <div class="font-semibold">Managed by</div>
                                        <div><?= GenericUtil::optionalTextRedaction($report->getAdminUsername() ?? 'No One Yet', $isMahasiswa) ?></div>
                                    </div>
                                </div>
                                <div class="border-t pt-4">
                                    <form action="<?= $updateReportDetailEndpoint ?>" method="post" id="updateReportDetailForm">
                                        <div class="mb-4">
                                            <label class="block text-sm font-semibold" for="status">Status</label>
                                            <select class="form-select w-full" id="status" name="status">
                                                <?php foreach (ReportModel::getStatusChoices() as $status) : ?>
                                                    <option value="<?= $status ?>" <?= $status == $report->getStatus() ? "selected" : "" ?>><?= $status ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-sm font-semibold" for="code_of_conduct">Code of Conduct</label>
                                            <select class="form-select w-full" id="code_of_conduct" name="id_code_of_conduct">
                                                <?php foreach ($codeOfConducts as $codeOfConduct) : ?>
                                                    <option value="<?= $codeOfConduct->getIdCodeOfConduct() ?>" <?= $codeOfConduct->getIdCodeOfConduct() == $report->getIdCodeOfConduct() ? "selected" : "" ?>><?= $codeOfConduct->getName() ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <hr>
                                        <div class="flex justify-end mt-4">
                                            <?php if ($currentUser->isAdmin()) : ?>
                                                <button type="button" class="btn btn-secondary" onclick="checkVal($(this), $('#status').val())" data-bs-toggle="modal" data-bs-target="#modalConfirmation">
                                                    Save
                                                </button>
                                            <?php endif; ?>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<div id="modal-container"></div>

<script>
    function checkVal(element) {
        const val = $('#inputGroupSelect01').val();
        if (val == 'Invalid' || val == 'Valid') {
            showConfirmationModal(element, val);
        } else {
            element.parents('form').submit();
        }
    }

    function showConfirmationModal(element, status) {
        const modal = `
    <div id="modalConfirmation" tabindex="-1" aria-hidden="true" 
         class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow">
          <div class="p-6 text-center">
            <i class="bi bi-patch-question text-blue-600 text-8xl"></i>
            <h4 class="mb-5 text-lg font-normal text-gray-500">
              Changing status to ${status} will close the report. Are you sure?
            </h4>
            <button type="button" id="save"
                    class="text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
              Save
            </button>
            <button type="button" data-modal-hide="modalConfirmation"
                    class="text-gray-500 bg-white hover:bg-gray-100 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5">
              Cancel
            </button>
          </div>
        </div>
      </div>
    </div>`;

        $('#modal-container').html(modal);

        const modalElement = document.getElementById('modalConfirmation');
        const modalInstance = new Flowbite.Modal(modalElement);
        modalInstance.show();

        $('#save').click(() => {
            element.parents('form').submit();
            modalInstance.hide();
        });

        modalElement.addEventListener('hidden.bs.modal', () => {
            $('#modalConfirmation').remove();
        });
    }

    function checkComment(event, element) {
        event.preventDefault();
        const comment = element.parent().siblings().find('textarea').val();
        if (!comment) {
            $("div[role=alert]").remove();
            const flash = `
      <div class="p-4 mb-4 text-yellow-800 rounded-lg bg-yellow-50" role="alert">
        <div class="font-medium">Warning!</div>
        <div>Please fill in the comment before sending.</div>
      </div>`;
            $('div[title=flashComment]').before(flash);
        } else {
            element.parents('form').submit();
        }
    }

    function initImagePreview() {
        const input = document.getElementById('upload');
        const preview = document.querySelector('.img-comment-preview');
        const imgPreview = preview.querySelector('img');

        input.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                preview.classList.remove('hidden');
                reader.addEventListener('load', () => {
                    imgPreview.src = reader.result;
                });
                reader.readAsDataURL(file);
            } else {
                imgPreview.src = '';
                preview.classList.add('hidden');
            }
        });
    }

    initImagePreview();
</script>