<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>aset/css/admin.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>aset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>aset/css/font-awesome.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<title>Menu Utama</title>
</head>
<body>


	<div class="header">
    <a id="menu-action"> 
      <i class="fa fa-bars"></i>
    </a>
    <div class="logo">
    Dasboard, Halo <?php echo $this->session->userdata("user") ;?> | EMAIL : <?php echo $this->session->userdata("m") ;?>
    </div>
</div>

<div class="sidebar">
  <ul>
    <li><a href="<?php echo base_url();?>login/logout"><i class="fa fa-user"></i><span>Keluar, <?php echo $this->session->userdata("user") ;?></span></a></li>
</div>	
</body>
</html>