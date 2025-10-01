<?php   
    require "inc/tautan.php";
    $audio = ["Fishes Fishes"];
?>
<!DOCTYPE html>
<html lang="en">
<?php include "inc/head.php"; ?>
<body>
    <?php include "inc/header.php"; ?>
    <main>
    <div class="kontainer">
        <h1>Welcome to the Chinafake Media Gallery!</h1>
        <p>This is the Homepage of Chinafake Media Gallery. You can see the examples, full HD Audios &amp; demonstration videos of Chinafakes. Click on the<br>
            image below to read the web manual.
        </p>
    <?php foreach ($audio as $aud) { ?>
        <div class="gambar" style="padding: 3px;">
            <img id="manual" src="link/<?php echo $aud . " toy.jpg" ?>" title="Click here to read the web manual" onclick="web_manual()">
        </div>
    </div>
    <?php } ?>
    </main>
    <?php include "inc/footer.php"; ?>
</body>
</html>