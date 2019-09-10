<section class="painel">
   <?php include('./includes/header.php'); 
   ?>
   <div class="container">
      <div class="row">
      <?php EmailAPI::Usuario($_SESSION['usuario']); ?>
      </div>
   </div>
</section>
<?php include('./includes/footer.php'); ?>