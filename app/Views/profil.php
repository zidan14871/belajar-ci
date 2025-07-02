<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <h2>Profil Pengguna</h2>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><strong>Username:</strong> <?= esc($username) ?></li>
        <li class="list-group-item"><strong>Role:</strong> <?= esc($role) ?></li>
        <li class="list-group-item"><strong>Email:</strong> <?= esc($email) ?></li>
        <li class="list-group-item"><strong>Waktu Login:</strong> <?= date('Y-m-d H:i:s') ?></li>
        <li class="list-group-item"><strong>Status Login:</strong> <?= esc($status) ?></li>
    </ul>
</div>

<?= $this->endSection() ?>


