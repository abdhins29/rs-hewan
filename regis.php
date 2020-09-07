
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>RS Hewan Sumbar - Register</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-7" style="margin: auto;">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
              </div>
              <form class="user" method="post" action="">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="nm_user" placeholder="Nama Anda" required="">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="username" placeholder="Username Anda Maksimal 20 Karakter" required="">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="alamat" placeholder="Alamat Anda" required="">
                </div>
                <div class="form-group">
                  <select name="gender" class="form-control" required="">
                    <option value="--Silahkan Pilih--">--Silahkan Pilih--</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="nohp" placeholder="Nomor HP/Telp Anda (0812xxxxxxxx)" required="">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password Anda Maksimal 20 Karakter" required="">
                    <input type="hidden" class="form-control form-control-user" name="level" value="user" readonly="">
                  </div>
                </div>
                <button type="submit" name="daftar" class="btn btn-primary btn-user btn-block">
                  Daftar
                </button>
                <button type="reset" name="reset" class="btn btn-danger btn-user btn-block">
                  Reset
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="login.php">Sudah Punya Akun? Silahkan Login!</a>
              </div>
              <hr>
              <div class="text-center">
                <a class="small" href="index.php">Kembali Kehalaman Utama</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <?php 
    include ('config/koneksi.php');
    if (isset($_POST['daftar'])) {
      $nm_user    = $_POST['nm_user'];
      $username   = $_POST['username'];
      $alamat     = $_POST['alamat'];
      $gender     = $_POST['gender'];
      $nohp       = $_POST['nohp'];
      $password   = $_POST['password'];
      $level      = $_POST['level'];

      $save = mysqli_query($konek,"INSERT INTO tbl_user VALUES('','$nm_user','$username','$alamat','$gender','$nohp','$password','$level')");
      echo mysqli_error($konek);

      if($save) {
      echo "<script language=javascript>
          window.alert('Berhasil Mendaftar!');
          window.location='index.php';
          </script>";
      }else{
        echo "<script language=javascript>
          window.alert('Gagal Mendaftar!');
          window.location='regis.php';
          </script>";
      }
    }
  ?>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>