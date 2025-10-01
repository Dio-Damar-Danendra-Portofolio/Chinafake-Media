<?php 
     require "inc/tautan.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php include "inc/head.php"; ?>
<body>
     <?php include "inc/header.php"; ?>
     <main>
     <div class="kontainer" style="display: flex; flex-direction: column; align-items: center;">
          <h1><?php echo $title; ?></h1>
                    <div style="display: flex; flex-wrap: wrap; justify-content: start; gap: 10px;">
               <?php 
                    $prefiks = "Image_";
                    $alternatif = "Image not Available";
                    $format = ".jpg";
                    $limit = 30 * 0.5;
                    for ($i=1; $i <= $limit; $i++) { ?>
               <div class="gambar">
                    <img src="img/<?php echo $prefiks . $i . $format; ?>" alt="<?php echo $alternatif; ?>">
               </div>
               <?php } ?>
          </div>
               </div>
     <script src="css_js/script.js"></script>
     </main>
     <?php include "inc/footer.php"; ?>
</body>
</html>