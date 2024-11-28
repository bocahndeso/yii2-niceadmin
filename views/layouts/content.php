<?php
    use app\widgets\Alert;
    use yii\bootstrap5\Breadcrumbs;

?>
<main id="main" class="main">

    <div class="pagetitle">
    <h1><?= $this->title ?></h1>
    <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </section>
</main>