<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h1>Profile</h1>
<p class="sub">Demo user information</p>

<div class="card">
    <?php if (empty($user)): ?>
        <p class="empty">No user record found.</p>
    <?php else: ?>
        <dl>
            <dt>User ID</dt><dd><?= esc($user['id']) ?></dd>
            <dt>Username</dt><dd><?= esc($user['username']) ?></dd>
            <dt>Full Name</dt><dd><?= esc($user['full_name']) ?></dd>
            <dt>Email</dt><dd><?= esc($user['email']) ?></dd>
            <dt>Member Since</dt><dd><?= esc(date('F d, Y', strtotime($user['created_at']))) ?></dd>
        </dl>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>
