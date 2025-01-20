<h1>dashboard</h1>

<!-- dashboard.php -->
<h1>Welcome to the Admin Dashboard, <?= $_SESSION['admin_username']; ?>!</h1>
<p>You are successfully logged in.</p>

<!-- Display any success or error messages -->
<?php if (isset($_SESSION['success'])): ?>
    <div class="alert alert-success">
        <?= $_SESSION['success']; ?>
    </div>
    <?php unset($_SESSION['success']); ?>
<?php endif; ?>

<!-- Add additional dashboard content here -->
