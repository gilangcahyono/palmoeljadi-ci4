<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('content') ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1 ?>
    <?php foreach ($posts as $post) : ?>
      <tr>
        <th scope="row"><?= $no++ ?></th>
        <td><?php echo $post['title'] ?></td>
        <td>
          <a href="/dashboard/posts/edit/<?= $post['id'] ?>" class="btn btn-warning">Edit</a>
          <form action="/dashboard/posts/delete/<?= $post['id'] ?>" method="post" class="d-inline">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
          </form>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

<?= $this->endSection() ?>