<?= $this->extend('layouts/pages') ?>

<?= $this->section('content') ?>

<div class="container my-3">

  <div class="row justify-content-center">
    <div class="col-sm-6">
      <h1 class="text-center">Semua Berita & Kegiatan</h1>
      <hr class="border-2">
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-sm">
      <div class="card mb-3 overflow-hidden">
        <img src="<?= $posts[0]['thumbnail'] ?>" class="card-img-top mb-3 object-fit-cover" alt="Berita" height="500px">
        <div class="card-body text-center">
          <h5 class="card-title"><a href="<?= base_url('posts/' . url_title($posts[0]['title'], '-', true)) ?>" class="text-decoration-none"><?= $posts[0]['title'] ?></a></h5>
          <p class="card-text"><small class="text-body-secondary"><?= $posts[0]['created_at'] ?></small></p>
          <p class="card-text excerpt"><?= $posts[0]['excerpt'] ?></p>
          <a href="<?= base_url('posts/' . url_title($posts[0]['title'], '-', true)) ?>" class="btn btn-primary">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <?php for ($i = 1; $i < count($posts); $i++) : ?>
      <div class="col-sm-6">
        <div class="card mb-3 mx-auto overflow-hidden shadow-lg" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="<?= $posts[$i]['thumbnail'] ?>" class="img-fluid h-100 rounded-start object-fit-cover" alt="Berita">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title card-title-all-post"><a href="<?= base_url('posts/') . url_title($posts[$i]['title'], '-', true) ?>" class="text-decoration-none" data-bs-toggle="tooltip" data-bs-title="<?= $posts[$i]['title'] ?>"><?= $posts[$i]['title'] ?></a></h5>
                <p class="card-text excerpt"><?= $posts[$i]['excerpt'] ?></p>
                <p class="card-text"><small class="text-body-secondary"><?= $posts[$i]['created_at'] ?></small></p>
                <a href="<?= base_url('posts/') .  url_title($posts[$i]['title'], '-', true) ?>" class="btn btn-primary">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endfor; ?>

    <!-- <div class="col-sm-6">
      <div class="card mb-3 mx-auto overflow-hidden shadow-lg" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://source.unsplash.com/300x400?news" class="img-fluid rounded-start object-fit-cover" alt="Berita">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><a href="/posts/sdfbksdf-sdfsdf" class="text-decoration-none">Card title</a></h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
              <a href="/posts/berikan-aku-uang" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card mb-3 mx-auto overflow-hidden shadow-lg" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://source.unsplash.com/300x400?news" class="img-fluid rounded-start object-fit-cover" alt="Berita">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><a href="/posts/sdfbksdf-sdfsdf" class="text-decoration-none">Card title</a></h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
              <a href="/posts/berikan-aku-uang" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card mb-3 mx-auto overflow-hidden shadow-lg" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://source.unsplash.com/300x400?news" class="img-fluid rounded-start object-fit-cover" alt="Berita">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><a href="/posts/sdfbksdf-sdfsdf" class="text-decoration-none">Card title</a></h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
              <a href="/post/berikan-aku-uang" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>

  <div class="row">
    <div class="col-sm d-flex justify-content-end">
      <?= $pager->links('posts', 'posts_pagination') ?>
    </div>
  </div>

</div>

<?= $this->endSection() ?>