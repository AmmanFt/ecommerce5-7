<?php
?><!DOCTYPE html>
<html>
<style>
    body {
     background-image: url("<?php echo base_url('gambar/b3.jpg')?>");
     background-color: #cccccc;
    }
    input[type=text],[type=password]{
        width:100%;
        padding:6px 6px;
        margin: 10px 0;
        color: #f2f2f2;
      }
      a:link {
      color: #1f9fc2;
      text-decoration: none;
    }
    a:visited {
      color: #1f9fc2;
    }
    a:hover {
      color: #024d61;
    }
    a:active {
      color: #024d61;
    }
  </style>
  <title>Login - Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap.min.js')?>"></script> 
</head>
<body>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/> 
  <div class="login">
    <h2><center><font size="5" color="#f2f2f2">Login <b>Admin</b></font></h2></center>
    <br>
    <form action="<?php echo base_url('Admin/login/aksi_login'); ?>" method="post" onSubmit="return validasi()">
      <div>
        <label class="text-white">Username:</label>
        <input type="username" class="form-control" placeholder="username.." name="username">
      </div>
      <div>
        <label class="text-white">Password:</label>
          <input type="password" class="form-control" placeholder="password.." name="password">
      </div>
      <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember" class="text-white">
                Remember Me
              </label>
            </div>     
      <div>
        <br>
          <button type="submit" class="btn btn-primary btn-block" value="login">Sign In</button><br>
      </div>
      <div>
        <font color="#f2f2f2">Belum Memiliki Akun?</font><a href="<?php echo base_url('Admin/register')?>">&nbsp;Daftar</div> 
    </form>
    </div>
  </div>
</body>
 
<script type="text/javascript">
  function validasi() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;   
    if (username != "" && password!="") {
      return true;
    }else{
      alert('Username Atau Password Tidak Boleh Kosong !');
      return false;
    }
  }
 
</script>
</html>