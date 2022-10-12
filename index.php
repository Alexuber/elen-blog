 <?php
    require($_SERVER['DOCUMENT_ROOT'] . '/config/db.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
    ?>

 <div id="colorlib-page">
     <?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/sidebar.php'); ?>

     <div id="colorlib-main">

         <?php
            require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages/home.php');
            require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
            ?>

     </div><!-- END COLORLIB-MAIN -->
 </div><!-- END COLORLIB-PAGE -->


 <?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/scripts.php'); ?>