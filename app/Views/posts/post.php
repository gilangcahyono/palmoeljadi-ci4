<?= $this->extend('layouts/pages') ?>

<?= $this->section('content') ?>

<div class="container my-3">

  <div class="row justify-content-center mb-3">
    <div class="col-sm-10">
      <h1><?= $post['title'] ?></h1>
      <div class="card-text mb-3">
        <small class="text-body-secondary"><?= $post['created_at'] ?></small>
      </div>
      <img src="<?= $post['thumbnail'] ?>" class="card-img-top" alt="<?= $post['title'] ?>">
    </div>
  </div>

  <div class="row justify-content-center mb-3">
    <div class="col-sm-10">
      <?= $post['body'] ?>
    </div>
  </div>

  <div class="row justify-content-center mb-4">
    <div class="col-sm-10">
      <div class="row">
        <?php $i = 1 ?>
        <?php foreach (json_decode($post['images'], true) as $image) : ?>
          <div class="col-sm-2 text-center mb-2">
            <figure class="m-auto overflow-hidden rounded" style="height: 150px;">
              <img src="<?= $image ?>" class="gambar-post img-fluid object-fit-cover w-100 h-100 mb-1" alt="Image" style="cursor: zoom-in;" data-bs-toggle="modal" data-bs-target="#gambarPostModal" id="gambarPost<?= $i++ ?>">
            </figure>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <div class="row <?= $prev_post === null ? 'justify-content-end' : '' ?>">
    <?php if ($prev_post !== null) : ?>
      <div class="col-sm-6">
        <a href="<?= base_url('posts/' . url_title($prev_post->title, '-', true)) ?>" class="d-flex justify-content-center align-items-center gap-2 text-decoration-none text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left text-primary" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
          </svg>
          <div>
            <h6 class="mb-0 fw-semibold">PREVIOUS</h6>
            <p><?= $prev_post->title ?></p>
          </div>
        </a>
      </div>
    <?php endif; ?>

    <?php if ($next_post !== null) : ?>
      <div class="col-sm-6">
        <a href="<?= base_url('posts/' . url_title($next_post->title, '-', true)) ?>" class="d-flex justify-content-center align-items-center gap-2 flex-row-reverse text-decoration-none text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right text-primary" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
          </svg>
          <div class="text-end">
            <h6 class="mb-0 fw-semibold">NEXT</h6>
            <p><?= $next_post->title ?></p>
          </div>
        </a>
      </div>
    <?php endif; ?>

  </div>

  <!-- Modal -->
  <div class="modal fade" id="gambarPostModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <button id="closeModal" type="button" class="position-absolute z-3 p-2 rounded-circle bg-transparent" data-bs-dismiss="modal" aria-label="Close" style="top: 10px; left: 10px;">
          ❌
        </button>
        <div class="modal-body p-0 bg-black">
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <?php $i = 1 ?>
              <?php foreach (json_decode($post['images'], true) as $image) : ?>
                <div class="carousel-item">
                  <img src="<?= $image ?>" class="d-block w-100 object-fit-contain" alt="Image" style="height: 100vh;" id="gambarPost<?= $i++ ?>">
                </div>
              <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<script>
  const closeModal = document.getElementById('closeModal');
  closeModal.addEventListener('click', () => {
    const carouselItemActive = document.querySelector('.carousel-item.active');
    carouselItemActive.classList.remove('active');
  });
</script>

<?= $this->endSection() ?>