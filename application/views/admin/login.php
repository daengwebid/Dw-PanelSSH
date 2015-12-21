<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?> | <?php echo $record['nama_perusahaan']; ?></title>    
    <link rel="stylesheet" href="<?php echo base_url('assets/login/css/style.css'); ?>"> 

    <script src="<?php echo base_url('assets/login/notif/js/modernizr.custom.80028.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/login/notif/css/style.css'); ?>">

    <style>
    #note {
        position: absolute;
        z-index: 6001;
        top: 0;
        left: 0;
        right: 0;
        background: #fde073;
        text-align: center;
        line-height: 2.5;
        overflow: hidden; 
        -webkit-box-shadow: 0 0 5px black;
        -moz-box-shadow:    0 0 5px black;
        box-shadow:         0 0 5px black;
    }
    .cssanimations.csstransforms #note {
        -webkit-transform: translateY(-50px);
        -webkit-animation: slideDown 2.5s 1.0s 1 ease forwards;
        -moz-transform:    translateY(-50px);
        -moz-animation:    slideDown 2.5s 1.0s 1 ease forwards;
    }

    #close {
      position: absolute;
      right: 10px;
      top: 9px;
      text-indent: -9999px;
      background: url(images/close.png);
      height: 16px;
      width: 16px;
      cursor: pointer;
    }
    .cssanimations.csstransforms #close {
      display: none;
    }
    
    @-webkit-keyframes slideDown {
        0%, 100% { -webkit-transform: translateY(-50px); }
        10%, 90% { -webkit-transform: translateY(0px); }
    }
    @-moz-keyframes slideDown {
        0%, 100% { -moz-transform: translateY(-50px); }
        10%, 90% { -moz-transform: translateY(0px); }
    }
	</style>
	
  </head>

  <body>
    <div class="wrapper">
	<div class="container">
		<h1>Panel Admin</h1>
		<?php 
		echo form_open("admin/login");
		?>
			<input type="text" name="username" placeholder="Username" required />
			<input type="password" name="password" placeholder="Password" required />
			<button type="submit" name="submit">Login</button>
      <p> &nbsp; </p>
      <p>Powered By <a href="http://makassarnetwork.info/">MakassarNetwork</a></p>
		<?php
		echo form_close();

		if ($this->session->flashdata('pesan') <> '') {
		?>

		<div id="note">
        <?php echo $this->session->flashdata('pesan'); ?> <a id="close">[close]</a>
        </div>

		<?php 
	    }
	    ?>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
	</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="<?php echo base_url('assets/login/js/index.js'); ?>"></script>

    <script>
   close = document.getElementById("close");
   close.addEventListener('click', function() {
     note = document.getElementById("note");
     note.style.display = 'none';
   }, false);
  </script>
 
  </body>
</html>