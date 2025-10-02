<header>
        <div class="kontainer_navigasi">
                <a href="index.php" style="text-decoration: none; color: white;"><h2>Chinafake Media Gallery</h2></a>
        </div>
        <div class="kontainer_navigasi">
            <?php foreach ($laman as $link) { 
                    echo $link->show_link();
            } ?>
        </div>
</header>