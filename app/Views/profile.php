<?= view('templates/header', ['title' => $title]) ?>

<h2>User Profile</h2>

<?php if ($user): ?>
    <div class="profile-row"><strong>Username:</strong> <?= esc($user['username']) ?></div>
    <div class="profile-row"><strong>Full name:</strong> <?= esc($user['full_name']) ?></div>
    <div class="profile-row"><strong>Email:</strong> <?= esc($user['email']) ?></div>
    <div class="profile-row"><strong>Member since:</strong> <?= esc($user['created_at']) ?></div>
<?php else: ?>
    <p>No user profile was found.</p>
<?php endif; ?>

<?= view('templates/footer') ?>
