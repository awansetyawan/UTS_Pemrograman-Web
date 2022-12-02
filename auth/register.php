<?php

session_start();
include("../core/functions.php");

if(isset($_SESSION['status'])) {
  if($_SESSION['role'] == 'admin') {
    header("Location:../admin/dashboard");
  } else {
    header("Location:../user/dashboard");
  }
}

if(isset($_POST['username'])) {
  $user = query("SELECT * FROM pengguna WHERE username='{$_POST['username']}'");
  if(!empty($user)) {
    header("Location:./register.php?denied=true");
  }
  $user_id = store("pengguna", [
    "username" => $_POST['username'],
    "password" => password_hash($_POST['password'], PASSWORD_DEFAULT),
    "role" => 2
  ]);
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['id'] = $user_id;
  $_SESSION['role'] = 'user';
  $_SESSION['status'] = "login";
  header("Location:../user/dashboard");
}
?>
<?php  require_once('../layouts/auth/header.php') ?>
<div class="row justify-content-center form-bg-image">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
            <div class="text-center text-md-center mb-4 mt-md-0">
              <h2>Galeri Gitar</h2>
              <h5>Register</h5>
            </div>
            <?php if(isset($_GET['denied'])): ?>
            <div class="alert alert-error">
              <span>Username sudah ada!</span>
            </div>
            <?php endif; ?>
            <form action="" class="mt-4" method="POST">
                <!-- Form -->
                <div class="form-group mb-4">
                    <label for="username">Username</label>
                    <div class="input-group">
                        <input type="text" name="username" class="form-control" placeholder="Username" id="username" autofocus required>
                    </div>  
                </div>
                <!-- End of Form -->
                <div class="form-group">
                    <!-- Form -->
                    <div class="form-group mb-4">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" placeholder="Password" class="form-control" id="password" required>
                        </div>  
                    </div>
                    <!-- End of Form -->
                    <div class="d-flex justify-content-between align-items-top mb-4">
                      <div><a href="./login.php" class="small text-right">Sudah punya akun? Login!</a></div>
                    </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-gray-800">Masuk</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php  require_once('../layouts/auth/footer.php') ?>
