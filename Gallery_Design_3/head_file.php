<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <title>性感的仙女</title>
      <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <link rel="stylesheet" href="Design/style1.css">
      <link rel="stylesheet" href="Design/mobile_nav.css">
      <link rel="shortcut icon" href="Images/icon.ico">
      <meta name="theme-color" content="#880000">
      <style>
      @media screen and (max-width: 700px)
      {
            #content {
              padding: 1px;
            }

            .sticky {
              position: fixed;
              top: 0;
              width: 100%;
            }

            .sticky + #content {
              padding-top: 80px;
            }
        }
		.displaying_img
		{
			  background: url('Images/loader.gif') center no-repeat;
		}
      </style>
      <?php include 'analytics_code.php'; ?>
  </head>

  <body>
<div class="container"><!--Outermost container start-->

  <div id="main_header" class="ch_lang">
    性感的仙女
  </div>
  <div id="main_header" class="en_lang">
    Shringarin Siren
  </div>

<!--Mobile Side nav start-->
<div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<?php include 'side_nav_mob.php'; ?>

</div>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
<!--Mobile Side nav end-->
<!--Desktop Side nav start-->
<div class="side_fixed_nav" style="">
  <?php include 'side_nav_fixed.php'; ?>
</div>
<!--Desktop Side nav End-->
<script>

function English()
{
  var t=document.getElementsByClassName('ch_lang');
  var i=0;
  for(i=0;i<t.length;i++)
  {
    t[i].style.display="none";
  }

 t=document.getElementsByClassName('en_lang');
  for(i=0;i<t.length;i++)
  {
    t[i].style.display="block";
  }

    document.getElementById('English_a').style.display="none";
    document.getElementById('Chinese_a').style.display="block";
    document.getElementById('English_b').style.display="none";
    document.getElementById('Chinese_b').style.display="block";

}

function Chinese()
{
  var t=document.getElementsByClassName('ch_lang');
  var i=0;
  for(i=0;i<t.length;i++)
  {
    t[i].style.display="block";
  }

 t=document.getElementsByClassName('en_lang');
  for(i=0;i<t.length;i++)
  {
    t[i].style.display="none";
  }

    document.getElementById('English_a').style.display="block";
    document.getElementById('Chinese_a').style.display="none";
    document.getElementById('English_b').style.display="block";
    document.getElementById('Chinese_b').style.display="none";

}
</script>

<!--mobile nav bar start-->
  <div id="navd" style="">
  <div onclick="openNav()">
  &#9776;
  </div>
  <div class="lan" id="English_a" onclick="English()" style="display: block">English</div>
  <div class="lan" id="Chinese_a" onclick="Chinese()" style="display: none">繁體中文</div>
  </div>
  <!--mobile nav bar end-->
