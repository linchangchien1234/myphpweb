<?php 
	session_start();
	if (isset($_SESSION['rootname']) || isset($_SESSION['rootpass'])) {
		//$name = $_SESSION['name'];
		
		$rootName = $_SESSION['rootname'];
		$rootPass = $_SESSION['rootpass'];
		$text = 1;
	}else{
		$rootName = "Guset";
		$text = 0;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">

     <!-- JS引入 -->
    <script src="js/jquery-3.4.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
   
	<script>
	jQuery(document).ready(function($) {
		aa = $(".navMenuAll #mobileNav .navMenu12 #lognA");
		bb = $(".navMenuAll #mobileNav .navMenu12 #lognB");
		var state = <?php echo $text; ?>;
		if(state == 0){
			aa.css({
			 	//visibility: 'visible'
			 	display:'block'
			});
			bb.css({
				//visibility: 'hidden'
				display:'none'
			});
		}else{
			aa.css({
			 	//visibility: 'hidden'
			 	display:'none'
			});
			bb.css({
				//visibility: 'visible'
				display:'block'
			});
		}
		delcheck = $("#rootDel form input[name=delcheck]");
		delcheck.on('click', function() {
			if($(this).prop("checked") == true){
				//$.post('delbox.php', {delchecked: $(this).val();});				
				$.post('delbox.php',{
		            delchecked: $(this).val()
		        }, function(txt){
		            $('#rootDel form input[name="chk"]').html(txt);
		        });
		        /*$.post('delbox.php',{
		            delchecked: $(this).val()
		        });*/
				
            }
            else if($(this).prop("checked") == false){
                alert("Checkbox is unchecked.");
            }
		});
	});
	</script>
    <style>
    	
    </style>
</head>

<body>
	<div class="bodySet" id="bodySet">		
		
		<!-- navbar 導覽區-->
		<header>
				<div class="container-fluid">
					<nav class="navbar navbar-default navMenuAll">
						<div class="navbar-header">
							<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobileNav">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							<a href="index.php" class="navbar-brand navMenuLogo">
									<span>
										Dinosaur
									</span>
							</a>
						</div>
						<div class="collapse navbar-collapse " id="mobileNav">
							<ul class="nav navbar-nav navMenu11">
								<li>
									<a href="index.php">About</a>
								</li>
								<li>
									<a href="wetalk.php">WeTalk</a>
								</li>
								<li>
									<a href="datashare2.php">Datashare</a>
								</li>
							</ul>

							<ul class="nav navbar-nav navbar-right navMenu12">
								<li>
									<p>Hello <?php echo $rootName; ?></p>
								</li>
								<li id="lognA" class="lognLi">
									<a href="lognin.php" class="lognIn">LognIn</a>
								</li>
								<li id="lognB" class="lognLi">
									<a href="lognout.php?lognout" class="lognOut">LognOut</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</header>
		<!-- navbar 導覽區 end-->