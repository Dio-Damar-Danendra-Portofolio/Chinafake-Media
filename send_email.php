<?php   
    require "inc/tautan.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php include "inc/head.php"; ?>
<body>
    <?php include "inc/header.php"; ?>
    <main>
    <h1><?php echo $title; ?></h1>
        <form action="" method="post">
            <div class="kontainer">
                <div class="obyek">
                    <label for="full_name" class="label">Full Name: </label><span class="required_asterisk" style="color: red;">*</span><br/>
                    <input type="text" name="full_name" id="full_name" required><br/><br/>
                </div>
                <div class="obyek">
                    <label for="email" class="label">E-mail Address: </label><span class="required_asterisk" style="color: red;">*</span><br/>
                    <input class="user-input" type="email" name="email" id="email" required><br/><br/>
                </div>
                <div class="obyek">
                    <label for="subject" class="label">E-mail Subject: </label><span class="required_asterisk" style="color: red;">*</span><br/>
                    <input class="user-input" type="text" name="subject" id="subject" required><br/><br/>
                </div>
                <div class="obyek">
                    <label for="message" class="label">Message: </label><span class="required_asterisk" style="color: red;">*</span><br/>
                    <textarea class="user-input" name="message" id="message" required cols="30" rows="10"></textarea>    
                    <br/><br/>
                </div>
            </div>
        <div class="kontainer">
            <div class="obyek">
            <button type="submit"></button>
            </div>
        </div>
    </form>
    <script src="css_js/script.js"></script>
    </main>
    <?php include "inc/footer.php"; ?>
</body>
</html>