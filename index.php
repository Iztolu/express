<?php
    require_once 'core/init.php';
    include 'includes/head.php';
    include 'includes/navigation.php';

?>

<div class="view" style="background-image: url('images/bs.jpg'); background-repeat: no-repeat; background-size: cover;">

    <video class="video-intro" poster="images/bus.jpg" playsinline autoplay muted loop>
      <source src="videos/animation-intro.mp4" type="video/mp4">
    </video>
    <audio src="videos/H.mp3" autoplay loop></audio>
    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
    
    <!-- Content -->
      <div class="text-center white-text mx-5 wow fadeIn">

        <h1 class="display-1 mb-4">
          <strong>Coming Soon!</strong>
        </h1>

        <!-- Time Counter -->
        <!-- <p id="time-counter" class="display-4 border border-light my-4"></p> -->
        <p id="time-counter" class="display-4 my-4"></p>


        <h4 class="mb-4">
          <strong>We're working hard to finish the development of this site. </strong>
        </h4>

        <h4 class="mb-4 d-none d-md-block">
          <!-- <strong><h1><?= date('d-m-Y h:i:s A'); ?></h1></strong>
          <strong><h1><?= date('h:i A'); ?></h1></strong> -->
          <strong><h1><?= $asd = date("M d, Y h:i A"); strtotime($asd); ?></h1></strong>
          <i class="fas fa-graduation-cap ml-2"></i>
        </h4>
      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

</div>


<?php include 'includes/footer.php';
