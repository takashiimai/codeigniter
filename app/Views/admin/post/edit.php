<?= $this->extend('admin/layout/default') ?>

<?= $this->section('title') ?>
    管理画面
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<main>
    <section>
        <h1 class="h3">編集</h1>

            <form method="post" action="<?= url_to('admin.post.update') ?>" enctype="multipart/form-data">

<?= $this->include('admin/post/form'); ?>

            </form>
    </section>
</main>
<?= $this->endSection() ?>
