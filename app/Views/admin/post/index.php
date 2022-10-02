<?= $this->extend('admin/layout/default') ?>

<?= $this->section('title') ?>
    管理画面
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<main>
    <section>
        <h1 class="h3">お知らせ一覧</h1>
        <div class="text-end mb-3">
            <a href="<?= url_to('admin.post.add') ?>" class="btn btn-primary btn-sm">新規作成</a>
        </div>
<?php if ($message = $session->getFlashdata('message')): ?>
        <div class="alert alert-info">
            <?= $message; ?>
        </div>
<?php endif; ?>

<?php if ($error = $session->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= $error; ?>
        </div>
<?php endif; ?>


<?php if (count($items)): ?>
        <section>
<?= $this->include('admin/post/list') ?>
        </section>
        <div class="text-center">
<?= $pager->links() ?>
        </div>
<?php else: ?>
        <div class="alert alert-info">
            お知らせはありません。
        </div>
<?php endif; ?>

    </section>
</main>
<?= $this->endSection() ?>
