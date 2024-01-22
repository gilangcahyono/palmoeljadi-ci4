<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Panti Asuhan Laksamana Moeljadi</title>
  <link rel="shortcut icon" href="<?= base_url('assets/img/logo.png') ?>" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center gap-2" href="<?= base_url() ?>">
        <img src="<?= base_url('assets/img/logo.png') ?>" alt="Palmoeljadi" width="40" height="40">
        <span class="fs-3 fw-semibold">Panti Asuhan Laksamana Moeljadi</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn btn-primary" aria-current="page" href="#">
              <i class="bi bi-box-arrow-right"></i>
              <span>Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-2">
        <ul class="list-group rounded-0">
          <li class="list-group-item border-0 <?= str_contains(uri_string(), 'dashboard') ? 'active' : '' ?>">
            <a href="<?= base_url('dashboard') ?>" class="text-decoration-none text-black fs-5">Dashboard</a>
          </li>
          <li class="list-group-item border-0 <?= str_contains(uri_string(), 'posts') ? 'active' : '' ?>">
            <a href="<?= base_url('dashboard/posts') ?>" class="text-decoration-none text-black fs-5">Postingan</a>
          </li>
        </ul>
      </div>
      <div class="col-9">
        <?= $this->renderSection('content') ?>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>