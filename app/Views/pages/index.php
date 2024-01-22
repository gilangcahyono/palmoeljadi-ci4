<?= $this->extend('layouts/pages') ?>

<?= $this->section('content') ?>

<section id="carousel" class="carousel slide shadow-lg" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/random?family" class="d-block w-100 object-fit-cover">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/random?study" class="d-block w-100 object-fit-cover">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/random?harmony" class="d-block w-100 object-fit-cover">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</section>

<section id="about">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-sm-4">
        <h2 class="text-center">Tentang Kami</h2>
        <hr class="border-2">
      </div>
    </div>
    <div class="row justify-content-around">
      <div class="col-sm-5 align-self-center">
        <img class="rounded-end-pill object-fit-cover w-100" src="https://source.unsplash.com/random?about" alt="About" height="250px">
      </div>
      <div class="col-sm-5 align-self-center mt-3">
        <h3>Panti Asuhan Laksamana Moeljadi</h3>
        <p style="text-indent: 50px; text-align: justify;">Panti Asuhan Laksamana Moeljadi merupakan salah satu wadah kegiatan sosial di bawah pembinaan Yayasan Sosial Bhumyamca (Yasbhum), yang merupakan Yayasan Sosial yang didirkan oleh TNI Angkatan Laut. Panti Asuhan Laksamana Moeljadi yang berdomisili di Juanda - Sidoarjo.</p>
        <a class="btn btn-outline-success rounded-pill px-4" href="/history">Baca Selengkapnya...</a>
      </div>
    </div>
  </div>
</section>

<section id="news" style="background-color: #c1f9ff;">
  <div class="container py-4">
    <div class="row justify-content-center">
      <div class="col-sm-5">
        <h2 class="text-center">Berita & Kegiatan Terbaru</h2>
        <hr class="border-2">
      </div>
    </div>
    <div class="row justify-content-center">
      <?php foreach ($posts as $post) : ?>
        <div class="col-sm-4 my-2">
          <div class="card mx-auto overflow-hidden shadow-lg curso h-100" style="width: 18rem;">
            <img src="<?= $post['thumbnail'] ?>" class="card-img-top" alt="<?= $post['title'] ?>">
            <div class="card-body">
              <h5 class="card-title excerpt"><a class="text-decoration-none text-dark" href="<?= base_url('posts/') . url_title($post['title'], '-', true) ?>" data-bs-toggle="tooltip" data-bs-title="<?= $post['title'] ?>"><?= $post['title'] ?></a></h5>
              <p class="card-text">
                <small class="text-body-secondary"><?= $post['created_at'] ?></small>
              </p>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    <div class="row justify-content-center my-4">
      <div class="col-sm text-center mx-5">
        <a href="<?= base_url('posts') ?>" class="btn bg-primary text-white btn-lg rounded-pill px-5 btn-read-more">
          BERITA & KEGIATAN LAINNYA
        </a>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>