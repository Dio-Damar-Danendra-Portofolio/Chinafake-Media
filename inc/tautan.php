<?php   
    class Tautan{
        public $judul_laman;
        public $sasaran;
        public $teks;
        public $onclick;
        public $id;




        public function __construct($judul_laman, $teks, $sasaran, $onclick, $id){
            $this->judul_laman = $judul_laman;
            $this->sasaran = $sasaran;
            $this->teks = $teks;
            $this->onclick = $onclick;
            $this->id = $id;

        }

        public function show_link() {
            return "<div class=\"obyek\">
                        <a href=\"{$this->judul_laman}\" target=\"{$this->sasaran}\" onclick=\"{$this->onclick}\" id=\"{$this->id}\">{$this->teks}</a>
                    </div>";
        }
    }

    $home = new Tautan("index.php", "Home", "_self", "", "index");
    $img = new Tautan("image_gallery.php", "Image Gallery", "_self", "", "img");
    $video = new Tautan("video_gallery.php", "Video Gallery", "_self", "", "vid");
    $audio_full = new Tautan("audio_full.php", "Full HD Audio", "_self", "", "aud");
    $wiki = new Tautan("https://chinafake.fandom.com", "Chinafake Wiki", "_blank", "confirmation(id)", "chinafake.fandom.com");
    $laixing = new Tautan("http://laixing.com/En/Index", "LaiXing.com", "_blank", "confirmation(id)", "laixing.com");
    $htoys = new Tautan("http://htoys.com/", "HToys.com", "_blank", "confirmation(id)", "htoys.com");
    $send_email = new Tautan("send_email.php", "Send E-mail", "_self", "", "email");


    $laman = array($home, $img, $video, $audio_full, $wiki, $laixing, $htoys, $send_email);

    ?>