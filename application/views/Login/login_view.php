<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>HR System</title>
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/login.css">

</head>

<body>
  <hgroup>
      <h1>HR System</h1>
      <h3>Please login into your account</h3>
  </hgroup>

<form>
  <div class="group">
    <input type="text" value="">
    <label>Name</label>
  </div>

  <div class="group">
    <input type="password" value="">
    <label>Password</label>
  </div>

  <button type="button" class="button buttonBlue">Login
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>

<footer><a href="http://www.polymer-project.org/" target="_blank"><img src="https://www.polymer-project.org/images/logos/p-logo.svg"></a>
  <p>&copy; Mohammad Satria 2018</p>
</footer>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="<?php echo base_url() ?>assets/js/index.js"></script>
</body>

</html>
