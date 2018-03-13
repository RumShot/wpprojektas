<!DOCTYPE html>
<html lang = "en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Switch</title>
  <link rel="stylesheet" href="/assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php wp_head(); ?>
</head>
<body>
  <header>
   <div class="header-container">
     <nav>
        <div class="ul" id="navbar">
          <a href="javascript:java.js;"  class="icon" onclick="myFunction()">&#9776;</a>
          <a href=" <?php home_url(); ?> " id="home">Home</a>
          <a href="#whatwedo?" id="whatwedo">What we do?</a>
          <a href="#testimonial" id="testimonial">Testimonial</a>
          <a href="#contactus" id="contactus">Contact us</a>
        </div>
        <div class="logo">
         <img src="<?php the_field('logo',104) ?>" alt="Switch">
       </div>
        <div class="inputbar">
          <i class="fa fa-search"></i>
          <input type="text" name="search" placeholder="Search..">
        </div>
     </nav>
     <div class="background">
        <div class="background-text">
          <h1><?php the_field('title', 104) ?></h1>
        </div>
        <div class="background-button">
          <button class="button1">WORK WITH US</button><br>
        </div>
        <div class="background-button2">
          <button class="button2" onclick="scrollWin(0, 50)" href="scrdown">
            scroll down  <i class="fa fa-arrow-down"></i></button>
        </div>
      </div>
      </div>
  </header>
