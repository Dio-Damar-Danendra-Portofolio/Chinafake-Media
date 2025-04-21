<?php   
    require "inc/tautan.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php include "inc/head.php"; ?>
<body>
    <?php include "inc/header.php"; ?>
    <main>
    <div class="kontainer">
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
    <script src="css_js/script.js"></script>
    </main>
    <?php include "inc/footer.php"; ?>
</body>
</html>