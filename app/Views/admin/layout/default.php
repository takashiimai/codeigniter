<!DOCTYPE html>
<html lang="ja">
<head>
<?= $this->include('admin/parts/head') ?>
</head>
<body>
    <div class="container-fluid">
    <div class="row">
        <div class="col-12">
<?= $this->include('admin/parts/header') ?>
<?= $this->renderSection('content') ?>
<?= $this->include('admin/parts/footer') ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
</body>
</html>
