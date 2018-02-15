<html>
<?php

?>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>aset/css/login.css">
</head>
	<body>
	<?php
		if (isset($logout_message)) {
			echo "<script>alert('";
			echo $logout_message;
			echo "');</script>";
		}
	?>
	<?php
		if (isset($message_display)) {
			echo "<script>alert('";
			echo $message_display;
			echo "');</script>";
		}
	?>
	
						
			<div class="login">

					<?php
						if (isset($error_message)) {
						echo "<script>alert('";						
						echo $error_message;
						echo "');</script>";
						}	
																		
						?>

			  <div class="login-triangle"></div>
			  
			  <h2 class="login-header">LOGIN</h2>
				
					<?php echo form_open('login/user_login_process',array(
						
						'class' => 'login-container'
					
					)); ?>
			 <?php
                echo "<p class='info'>".validation_errors()."</p>";	
			?>
				<p><input type="text" name="username" id="name" placeholder="Masukan Username" autofocus></p>
				<p><input type="password" name="password" id="password" placeholder="Masukan Pasword"></p>
				<p><input type="submit" value="Log in"></p>

				<a href="<?php echo site_url()?>login/register ">Tambah User Baru | </a><a href="<?php echo site_url()?>">Home</a>
					<?php echo form_close(); ?>
			</div>


	</body>
</html>
