<!-- <div class="mb-3 row">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username">
    </div>
    <br><br>
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>
  <button type="submit">Register</button>
</div> -->


<!-- admin/register.php -->
<h2><?= $data['title']; ?></h2>

<!-- Registration Form -->
<form action="<?= BASEURL; ?>/admin/register" method="POST">
    <div class="mb-3">
        <label for="username" class="form-label">Username:</label>
        <input type="text" name="username" id="username" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
</form>


