<?php 
$base_url= 'http://localhost/lcrud/public/';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple CRUD</title>
    <!-- USING LOCAL LIBRARI -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo $base_url ?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $base_url ?>js/bootstrap.min.js"></script>

    <!-- USING CDN -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
</head>
<body>
<nav class="navbar navbar-default">
<div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="#">Home</a>
    <a class="navbar-brand" href="/lcrud/public"> | Welcome To Application (Laravel 5.2 CRUD)</a>
    </div>
</div>
</nav>
<div class="container">
    @yield('content')
</div>
<div>
<center> Copyright &copy; 2019. All rights reserved | Developed Parth Shah </center>
</div>
</body>
</html>
