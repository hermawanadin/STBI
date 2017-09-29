<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>STBI</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="?menu=upload">Sistem Temu Kembali Informasi</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="?menu=upload">Upload UUD</a></li>
            <li><a href="?menu=hitungbobot">Hitung Bobot</a></li>
            <li><a href="?menu=kelompok">Kelompok</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	
	
	<?php
	@$get = $_REQUEST['menu'];
	if(!$get){
		include'upload.php';
	}else{
		include $get.'.php';
	}
	?>
	
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h4>Kelompok</h4>
					<p>
						- Sayogo Wibowo (14.01.53.0025)<br/>
						- Hermawan Adi N (14.01.53.0005)<br/>
						- Rieza Ichlas (14.01.53.0031)
											</p>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4">
					<h4>Links</h4>
					<p>
						<a href="#">Github</a><br/>
						<a href="#">Youtube</a><br/>
						<a href="#">Blog</a>
					</p>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4">
					<h4>Tentang</h4>
					<p>Website ini guna untuk menyelesaikan tugas kuliah dari makul Sistem Temu kembali informasi.</p>
				</div><!-- /col-lg-4 -->
			
			</div>
		
		</div>
	</div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
