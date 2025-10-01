<?php 
     require "inc/tautan.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<?php include "inc/head.php"; ?>
<body>
     <script src="css_js/audio.js" defer></script>
     <?php include "inc/header.php"; ?>
     <main>
     <div class="kontainer" style="display: flex; flex-direction: column; align-items: center;">
          <h1><?php echo $title; ?></h1>
     </div>
     <div class="kontainer" style="display: flex; flex-direction: column; align-items: center;">
          
                    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; margin-bottom: 20px;">
               <div class="obyek">
                    <button type="button" onclick="play_pause_audio()" id="play_pause">Play Audio</button>
               </div>
               <div class="obyek">
                    <button type="button" id="stop" onclick="stop_audio()">Stop Audio</button>
               </div>
               <div class="obyek">
                    <button type="button" id="mute" onclick="mute_audio()">Mute Audio</button>
               </div>
          </div>

                    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 10px;">
               <?php 
                    $judul_audio = ["Abracadabra", "Axel F", "Butterfly", "Fishes Fishes", "Gangnam Style", "Godzilla 1984 Roar", "Kiss (When The Sun Don't Shine)", "Primetime-Sexcrime", "Sha La Long", "Sister Sister", "Tarzan & Jane", "The Lonely Goatherd"];
                    $format = ".jpg";
                    $alternatif = "Image not Available";
                    foreach ($judul_audio as $audio) { 
                    ?>
                         <div class="gambar">
                              <img src="audio_full/img/<?php echo $audio . $format; ?>" alt="<?php echo $alternatif; ?>" title="The example of a toy that played <?php echo $audio; ?>" id="<?php echo $audio; ?>" onclick="playAudio(id)">
                         </div>
                    <?php } ?>
          </div>
     </div>
     <audio controls autoplay style="visibility: hidden">
          <source src="" type="">
     </audio>
     </main>
     <?php include "inc/footer.php"; ?>
</body>
</html>