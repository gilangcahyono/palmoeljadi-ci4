<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?> - Panti Asuhan Laksamana Moeljadi</title>
  <link rel="shortcut icon" href="<?= base_url('assets/img/logo.png') ?>" type="image/x-icon">
  <!-- <link rel="stylesheet" href="/assets/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
  <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>



  <?= $this->include('partials/navbar') ?>

  <!-- <a class="btn btn-success whatsapp position-fixed z-3" href="https://wa.me/6281234567890" target="_blank"><i class="bi bi-whatsapp"></i></a> -->

  <a class="btn btn-secondary scroll-to-top position-fixed z-3 box" href="#"><i class="bi bi-arrow-up"></i></a>

  <?= $this->renderSection('content') ?>

  <?= $this->include('partials/footer')
  ?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <!-- <script src="/assets/js/bootstrap.bundle.min.js"></script> -->
  <script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>

</html>