<?= $this->extend('layouts/pages') ?>

<?= $this->section('content') ?>

<div class="container my-3">

  <div class="row justify-content-center">
    <div class="col-sm-10">
      <h1>Kontak & Lokasi</h1>
      <hr class="border-2">
    </div>
  </div>

  <div class="row justify-content-center shadow-sm overflow-hidden">
    <div class="col-sm-6 p-">
      <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.724054873975!2d112.76292707379838!3d-7.384789072691449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e50059f56feb%3A0x1f5a5de1442dd52e!2sPanti%20Asuhan%20Laksamana%20Moeljadi%20(JUANDA)!5e0!3m2!1sen!2sid!4v1701534635070!5m2!1sen!2sid" width="100" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-sm-4 bg-warning rounded-end p-4">
      <h6 class="opacity-50">INFO</h6>
      <br>
      <ul class="list-unstyled">
        <li>
          <b>Lokasi</b>
          <ul>
            <li>
              <i class="bi bi-geo-alt"></i> Jl. Brantas No. 3 Komplek TNI AL Juanda - Sidoarjo
            </li>
          </ul>
        </li>
        <br>
        <li>
          <b>Kontak</b>
          <ul>
            <li><i class="bi bi-telephone"></i> 031-5944748</li>
            <li><i class="bi bi-envelope-at"></i> pansuh.laks.moeljadi@gmail.com</li>
          </ul>
        </li>
      </ul>
    </div>
  </div>

</div>

<?= $this->endSection() ?>