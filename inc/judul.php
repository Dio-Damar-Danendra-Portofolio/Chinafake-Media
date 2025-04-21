<?php 
    $page = basename($_SERVER['PHP_SELF']);

    $title = "Chinafake Media";
    
    switch ($page) {
        case 'index.php':
            $title = "Chinafake Media";
            break;

        case 'image_gallery.php':
            $title = "Chinafake Image Gallery";
        break;

        case 'video_gallery.php':
            $title = "Chinafake Video Gallery";
        break;

        case 'audio_full.php':
            $title = "Chinafake Full, Original & HD Audios";
        break;

        case 'send_email.php':
            $title = "Send an E-mail";
        break;
        
        default:
            $title = ucfirst($page);
            break;
    }

?>
    <title><?= $title; ?></title>