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
      <h3>contact us</h3>
      <p><a href="index.php">home</a> <span> / contact</span></p>
   </div>
  
   <section class="contact">
      <div class="row">
         <div class="image">
            <img src="images/home_gallary/14.jpg" alt="">
         </div>
         <form action="mailto:rishusrivastava0000@gmail.com" method="post">
            <div class="col-md-12 well" >
            <h3>tell us something!</h3>
            <input type="text" name="name" maxlength="50" class="box" placeholder="enter your name" required>
            <input type="number" name="number" min="0" max="9999999999" class="box" placeholder="enter your number" required maxlength="10">
            <input type="email" name="email" maxlength="50" class="box" placeholder="enter your email" required>
            <textarea name="msg" class="box" required placeholder="enter your message" maxlength="500" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" name="send" class="btn">
         </form>
      </div>
      </section>
            
   
<?php
include 'admin/footer.php';
?>   
<script src="js/script.js"></script>
</body>
</html>