<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link href="<?php echo base_url('css/styles.css') ?>" rel="stylesheet" />
        

        
        <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet">        
        <!-- Animate CSS -->
        


        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/all.min.css">


  
  <!-- Custom CSS -->
  <style>
    .grid-box {
      position: relative;
      display: flex;
      align-items: center;
      padding: 2rem;
      background-color: #f8f9fa;
      overflow: hidden;
    }
    
    .grid-box .content {
      width: 50%;
      padding: 0 2rem;
    }
    
    .grid-box .image {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      width: 50%;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      transition: transform 0.3s ease-out;
    }
    
    .grid-box:hover .image {
      transform: scale(1.1);
    }
    
    .grid-box .image:before {
      content: "\f03e";
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 3rem;
      color: #fff;
      opacity: 0.7;
      transition: opacity 0.3s ease-out;
    }
    
    .grid-box:hover .image:before {
      opacity: 1;
    }
  </style>
  
    