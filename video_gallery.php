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
            $prefiks = "Video_";
            $format = ".mp4";
            $limit = (30 / 15) ** 2;
            for ($i=1; $i <= $limit; $i++) { ?>
            <div class="video">
            <video controls>
                <source src="vid/<?php echo $prefiks . $i . $format; ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <?php } ?>
        </div>
    </div>
    <script src="css_js/script.js"></script>
    </main>
    <?php include "inc/footer.php"; ?>
</body>
</html>