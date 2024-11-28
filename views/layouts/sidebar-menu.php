<?php
use app\components\widgets\SidebarMenu;

?>
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<?= SidebarMenu::widget([
    'items' => [
        [
            'label' => 'Dashboard',
            'icon' => 'bi bi-grid',
            'url' => 'site/index', // Sesuaikan dengan rute Anda
        ],
        [
            'label' => 'Components',
            'icon' => 'bi bi-menu-button-wide',
            'id' => 'components',
            'items' => [
                ['label' => 'Alerts', 'url' => 'components/alerts'],
                ['label' => 'Accordion', 'url' => 'components/accordion'],
            ],
        ],
        [
            'heading' => true,
            'label' => 'Pages',
        ],
        [
            'label' => 'Forms',
            'icon' => 'bi bi-journal-text',
            'id' => 'forms',
            'items' => [
                ['label' => 'Form Elements', 'url' => 'forms/elements'],
                ['label' => 'Form Layouts', 'url' => 'forms/layouts'],
            ],
        ],
    ],
]); ?>

</aside><!-- End Sidebar-->