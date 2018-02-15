<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.4/css/materialize.min.css">


	<style>
		
		body {
  background:#1565c0;
}
.body{
  margin-top:160px;
  position:relative;
}

.ricordo{
  margin-top:-32px;
  margin-bottom:16px;
}

#top{
  position:fixed;
  width:100%;
  top:0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
  z-index:300;
}

.oo{
  margin-top: 68px;
}

.lighten{
  font-weight:200;
}

.date{
  margin:0px;
}

hr{
  border:none;
  height:1px;
  background:#eee;
}
	</style>

	<title>Tugas Basis Data</title>
</head>
<body>


		<div id="top" class="row blue darken-3">
			  <div class="overlay blue">
			      <h1 class="white-text col offset-m3 m5 s11 lighten" >/Testimoni</h1>
			    <div class="col m1 s1 oo">
					     <a href="<?php echo base_url()?>login" class=""><i style="color:white">Login</i></a></br>
				<a href="<?php echo base_url()?>home/del" class=""><i style="color:white">Clear All</i></a>
		
			    </div>
			  </div>
			</div>
			<div class="body row">

				
			  <div class=" ricordo col s12 m6 offset-m3">
			        <div class="card-panel white z-depth-1">
			      

					<?php foreach($b as $bd): ?>
			          <h5><b><?php echo $bd->title; ?></b></h5></br>
			      
			          <span>
			            
							<?php echo $bd->view; ?>		

			            </span>
			      


			            </br></br>
			            <hr>

			        <?php endforeach?>
			        
			  </div>
			  		</div>
			  
			</div>

	
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.4/js/materialize.min.js"></script>
</html>