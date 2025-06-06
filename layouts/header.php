<html>
<html lang="en">

<head>
   <title>DelishDrop</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

   <!-- Owl Carousel CSS -->
   <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
   <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

   <!-- jQuery (required by Owl Carousel) -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <!-- Owl Carousel JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


   <link rel="stylesheet" href="./assets/css/style.css">
   <script src="./assets/js/script.js"></script>
   
</head>

<body>

<?php include 'helpers/mainHelper.php'; ?>

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <ul class="navbar-nav mr-auto">
         <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>">Home</a></li>
         <li class="nav-item"><a class="nav-link" href="<?php echo site_url('menu.php'); ?>">Menu</a></li>
         <li class="nav-item"><a class="nav-link" href="<?php echo site_url('features.php'); ?>">Features</a></li>
         <li class="nav-item"><a class="nav-link" href="<?php echo site_url('about.php'); ?>">About</a></li>
         <li class="nav-item"><a class="nav-link" href="<?php echo site_url('blog.php'); ?>">Blog</a></li>
      </ul>
   </nav>
