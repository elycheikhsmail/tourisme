<?php
require('header.php')
  ?>

<body>

  <!-- menu -->
  <?php include('parts/menu.php') ?>
  <!-- contenue -->
  <?php
 include('parts/thumbnail.php') 
  
  ?>
    <div class="main">
    <?php
    the_content() ?>
    <?php
    include('parts/contact.php')
      ?>
  </div>
  <!-- footer -->
  <?php
  include('parts/footer-big-menu.php');
  include('parts/footer-short-menu.php');
  include('parts/footer.php')
    ?>

  <?php wp_footer() ?>
</body>

</html>