<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<style>
        .well
        {
            background: rgba(0,0,0,0.7);
            border: none;
    
        }
        .wellfix
        {
            background: rgba(0,0,0,0.7);
            border: none;
            height: 150px;
        }
		body
		{
			background-image: url('images/home_gallary/16.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
            background-size: cover;
		}
		p
		{
			font-size: 13px;
		}
        .pro_pic
        {
            border-radius: 50%;
            height: 50px;
            width: 50px;
            margin-bottom: 15px;
            margin-right: 15px;
        }
		
        </style>
</head>
<body>
   <?php
   include 'admin/header.php';
   ?>
    <div class="heading">
        <h3>images</h3>
        <p><a href="index.php">home</a> <span> / Images</span></p>
    </div>
    <section class="products">
 <div class="box-container">
   <div class="col-md-12 well">
<img src="images/home_gallary/1.jpg"style="width:98%; height:350px;">
</div>
<div class="col-md-12 well">
<img src="images/home_gallary/2.jpg"style="width:98%; height:350px;">
</div>    
<div class="col-md-12 well">
<img src="images/home_gallary/3.jpg"style="width:98%; height:350px;">
</div>
<div class="col-md-12 well">
<img src="images/home_gallary/4.jpg"style="width:98%; height:350px;">
</div>
<div class="col-md-12 well">  
 <img src="images/home_gallary/5.jpg"style="width:98%; height:350px;">
</div>
<div class="col-md-12 well">
 <img src="images/home_gallary/6.jpg"style="width:98%; height:350px;">
</div>
<div class="col-md-12 well">
 <img src="images/home_gallary/7.jpg"style="width:98%; height:350px;">
</div>
<div class="col-md-12 well">
 <img src="images/home_gallary/8.jpg"style="width:98%; height:350px;">
</div>
<div class="col-md-12 well">
 <img src="images/home_gallary/9.jpg"style="width:98%; height:350px;">
</div>
<div class="col-md-12 well">
 <img src="images/home_gallary/13.jpg"style="width:98%; height:350px;">
</div>
<div class="col-md-12 well">
 <img src="images/home_gallary/11.jpg"style="width:98%; height:350px;">
</div>
<div class="col-md-12 well">
 <img src="images/home_gallary/12.jpg"style="width:98%; height:350px;">
</div>

</div>
 </section>
            
    
 <?php
 include 'admin/footer.php';
 ?>     
 <script src="js/script.js"></script>                     
</body>
</html>