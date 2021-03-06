<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://unpkg.com/ionicons@4.2.4/dist/css/ionicons.min.css" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/ionicons.css">
	<title>BEM FILKOM UB</title>
	<style type="text/css">
		footer{
			background-color: #64BADC;
		}
		.footer-section {
		    background: #CCFFFF;
		    padding: 50px 0px;
		    color: #022d41;
		}

		.footer-section p {
		    font-size: 14px;
		}

		.footer-section a {
		    color: #194555;
		}

		.fa {
		  padding: 20px;
		  font-size: 30px;
		  width: 50px;
		  text-align: center;
		  text-decoration: none;
		  margin: 5px 2px;
		}

		.fa:hover {
		    opacity: 0.7;
		}

		.social-icon {
	        list-style: none;
	        padding-left: 0;
	        margin: 0;
	        text-align: center;
	    }
		
	    
	    .social-icon:before,
	    .social-icon:after {
	        content: " ";
	        display: table;
	    }
	    
	    .social-icon:after {
	        clear: both;
	    }
	    .social-icon li {
	        display: inline-block;
	        margin: 0px 4px;
	    }
	    
	    .social-icon li a:hover {
	        box-shadow: 0px 8px 15px 0px rgba(90, 91, 95, 0.33);
	    }
	    
	    .social-icon li a .fa {
	        line-height: inherit;
	    }

		.boutbem{
			background-image: url(image/bem-full.JPG);
			background-size: cover;
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
		}
		
		.gap{
			margin-top : 5%;
		}

		.gap-2{
			margin-top : 23%;
		}

		.gap-title{
			margin-top : 2%;
		}

		.gap-heading{
			margin-top : 7%;
		}

		.gap-apps{
			margin-top : 5%;
			margin-bottom : 8%;
			margin-left : auto;
			margin-right : auto;
		}

		.gap-kontak{
			margin-top : 5%;
			margin-bottom : 2%;
		}

		.filter-img{
			background: rgb(0, 0, 0, 0.5);
			width: 100%;
		}
		
		.bg-putih{
			background: white;
			padding: 2%;
		}

		.bg-lemb{
			background-image: url(image/bg-lembaga.jpg);
			background-size: cover;
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
		}

		.bg-blue{
			background-color: #2C7995;
		}

		.text-white{
			color: white;
		}

		.icon{
			font-size: 470%;
			display: block;
			color: #3498db;
			margin-bottom: 30px;
			margin-left : 0px;
			transition: color 0.3s, transform 1s;
		}
		
		.card {
			width: 100%;
			background-color: white;
			opacity :1;
			padding: 20px;
			margin-top: 20px;
		}
		.fakeimg {
			width: 100%;
			padding: 20px;
		}
		.img-post {
			width: 50%;
		}

		.port-logo{
			width: 100px;
			height: auto;
		}



	</style>
</head>
<body>
	
	<nav class="navbar navbar-expand-lg fixed-top">
	<div class="col-md-9">
	  <div class="navbar-header">	
		  <a class="navbar-brand" href="."><img src="image/bem-datar.png" style="width: 15%"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
	  </div>
	 </div>
	 <div class="col-md-3">
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="?page=profile">PROFILE <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="?page=informasi">INFORMASI</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="?page=apps">BEM APPS</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="?page=kontak">KONTAK</a>
	      </li>
	    </ul>
	  </div>
	</div>
	</nav>
	<!-- Your code Here -->
	<?php
	error_reporting(0);
	// echo $_SERVER['REQUEST_URI'];
	$page = $_GET['page'];

	switch($page){
		case "profile" :
			include_once "profile.html";
			break;
		case "informasi" :
			include_once "informasi.html";
			break;
		case "apps" :
			include_once "apps.html";
			break;
		case "kontak" :
			include_once "kontak.html";
			break;
		default :
			include_once "home.html";

	}
	?>
    
    <!-- Place your code here-->
    <footer class="footer-section">
       <!--Footer Links-->
          <div class="container text-center text-md-left">
	 <!--First column-->
	 		<div class="row h-100">
	 			<div class="col-md-6">
                      <h6 class="text-uppercase mb-4 font-weight-bold">BEM FILKOM UB</h6>
                      <p>Sekretariat Gedung D1.11</p>
					  <p>Fakultas Ilmu Komputer</p>
                  </div>
                  <!--/.First column-->
				   <!--Second column-->
                  <!--/.Third column-->
				   <!--Fourth column-->
                  <div class="col-md-6">
                     <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                     <ul class="social-icon" id="contact">
		                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
		                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
		                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
		                <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
		            </ul>
		            
                  </div>
	 		</div>
	 		<div class="row h-100">
				 <div class="col-md-12"><center>© Copyright 2018 BEM FILKOM</center></div>
	 		</div>
                  

    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	AOS.init({
		duration: 1200
	});
</script>
</html>