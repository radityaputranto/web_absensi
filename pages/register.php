<!DOCTYPE html>
<html>
<head>
  <title>Login Absensi</title>

  <link rel="stylesheet" type="text/css" href="../css/vendor.css">
  <!-- <link rel="stylesheet" type="text/css" href="../css/flat-admin.css"> -->
  <link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>


<body>
 <div class="app app-default">

<div class="app-container app-login">
  <div class="flex-center">
    <div class="app-header"></div>
    <div class="app-body">

      <div class="loader-container text-center">
          <div class="icon">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
              </div>
            </div>
          <div class="title">Logging in...</div>
      </div>

      <div class="app-block">

      <!-- bagian kiri -->
        <div class="app-right-section">
          <center><img src=" ../assets/logo.png" width="30" height="30" alt=""></center>
          <div class="app-brand">Absensi Meeber </div>
          <div class="app-info">
            
            <ul class="list">
              <li>
                <div class="icon">
                  <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                </div>
                <div class="title">Data <b>Up to Date</b></div>
              </li>
              <li>
                <div class="icon">
                  <i class="fa fa-cubes" aria-hidden="true"></i>
                </div>
                <div class="title">Mudah <b>Digunakan</b></div>
              </li>
              <li>
                <div class="icon">
                  <i class="fa fa-lock" aria-hidden="true"></i>
                </div>
                <div class="title">Data <b>Terjamin</b></div>
              </li>
            </ul>
          </div>
        </div>
        <!-- akhir bagian kriri -->


        <div class="app-form">
          <div class="form-suggestion">
            Buat akun anda
          </div>

            <!-- alert bila salah -->
            

          <form action="" method="POST">

               <div class="form-group">
               <div class="input-group">
                <span class="input-group-addon" id="basic-addon2">
                  <i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="text" name="nama" class="form-control" placeholder="Username">
              </div>
              </div>

              <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="fa fa-envelope" aria-hidden="true"></i></span>
                <input type="email" name="email"  class="form-control" placeholder="Email" >
              </div>
              </div>
             
              <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">
                  <i class="fa fa-key" aria-hidden="true"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password" >
              </div>
              </div>

              <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon4">
                  <i class="fa fa-check" aria-hidden="true"></i></span>
                <input type="password" name="conPassword" class="form-control" placeholder="Confirm Password" >
              </div>
              </div>


              <div class="text-center">
                  <button type="submit" class="btn btn-success btn-submit" >Daftar</button>
              </div>
              <input type="hidden" name="_form" value="on">
          </form>


          <div class="form-line">
            <div class="title">OR</div>
          </div>
          <div class="form-footer">
            <button type="button" class="btn btn-default btn-sm btn-social __facebook">
              <div class="info">
                <i class="icon fa fa-facebook-official" aria-hidden="true"></i>
                <span class="title">Register w/ Facebook</span>
              </div>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="app-footer">
    </div>
  </div>
</div>

  </div>
  
  <script type="text/javascript" src="../js/vendor.js"></script>
  <script type="text/javascript" src="../js/app.js"></script>



</body>