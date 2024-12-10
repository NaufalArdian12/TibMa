<?php
$pagesToShow = 2;

$firstPage = max(1, $currentPage - $pagesToShow);
$lastPage = min($pageCount, $currentPage + $pagesToShow);

$currentPath = explode('?', $_SERVER['REQUEST_URI'])[0];
?>

<nav aria-label="pagination" class="flex justify-end">
    <ul class="pagination flex items-center space-x-2">
        <?php if ($currentPage > 1): ?>
            <li class="page-item">
                <a class="page-link px-4 py-2 border rounded-md hover:bg-gray-100" href="<?= $currentPath ?>?page=1">
                    <<< /a>
            </li>
        <?php endif; ?>

        <li class="page-item <?= $prevPage == null ? 'disabled' : '' ?>">
            <a id="prev_button" class="page-link px-4 py-2 border rounded-md <?= $prevPage == null ? 'bg-gray-200 text-gray-400 cursor-not-allowed' : 'hover:bg-gray-100' ?>" href="<?= $currentPath ?>?page=<?= $prevPage ?>">Prev</a>
        </li>

        <?php for ($i = $firstPage; $i <= $lastPage; $i++): ?>
            <li class="page-item <?= $i == $currentPage ? 'active' : '' ?>">
                <a class="page-link px-4 py-2 border rounded-md <?= $i == $currentPage ? 'bg-blue-500 text-white' : 'hover:bg-gray-100' ?>" href="<?= $currentPath ?>?page=<?= $i ?>">
                    <?= $i ?>
                </a>
            </li>
        <?php endfor; ?>

        <li class="page-item <?= $nextPage == null ? 'disabled' : '' ?>">
            <a id="next_button" class="page-link px-4 py-2 border rounded-md <?= $nextPage == null ? 'bg-gray-200 text-gray-400 cursor-not-allowed' : 'hover:bg-gray-100' ?>" href="<?= $currentPath ?>?page=<?= $nextPage ?>">Next</a>
        </li>

        <?php if ($currentPage < $pageCount): ?>
            <li class="page-item">
                <a class="page-link px-4 py-2 border rounded-md hover:bg-gray-100" href="<?= $currentPath ?>?page=<?= $pageCount ?>">>></a>
            </li>
        <?php endif; ?>
    </ul>
</nav>