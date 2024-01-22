<?= $this->extend('layouts/pages') ?>

<?= $this->section('content') ?>

<div class="container my-3">
  <div class="row justify-content-center">
    <div class="col-sm-10 justify-content-center">
      <h1>Struktur Organisasi</h1>
      <hr class="border-2">
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-sm-10 text-center w-100">
      <img class="w-100 h-100" src="/assets/img/bagan.png" alt="Struktur Organisasi">
    </div>
  </div>
</div>

<?= $this->endSection() ?>