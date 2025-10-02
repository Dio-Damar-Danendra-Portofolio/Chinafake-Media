<?php   
    class Tautan{
        public $judul_laman; 

        public $judul;
        public $sasaran;
        public $teks;
        public $onclick;
        public $id;




        public function __construct($judul_laman, $teks, $sasaran, $onclick, $id, $judul){
            $this->judul_laman = $judul_laman;
            $this->sasaran = $sasaran;
            $this->teks = $teks;
            $this->onclick = $onclick;
            $this->id = $id;
            $this->judul = $judul;
        }

        public function show_link() {
            return "<div class=\"obyek\">
                        <a href=\"{$this->judul_laman}\" target=\"{$this->sasaran}\" onclick=\"{$this->onclick}\" id=\"{$this->id}\" title=\"{$this->judul}\">{$this->teks}</a>
                    </div>";
        }
    }

    $home = new Tautan("index.php", "Homepage", "_self", "", "index", "Chinafake Media Gallery Homepage");
    $img = new Tautan("image_gallery.php", "Image Gallery", "_self", "", "img", "See the Chinafake image gallery");
    $video = new Tautan("video_gallery.php", "Video Gallery", "_self", "", "vid", "See the Chinafake video gallery");
    $audio_full = new Tautan("audio_full.php", "Full HD Audio", "_self", "", "aud", "Hear the Chinafake full HD audios");
    $wiki = new Tautan("https://chinafake.fandom.com", "Chinafake Wiki", "_blank", "confirmation(id)", "chinafake.fandom.com", "Visit the chinafake.fandom.com site");
    $laixing = new Tautan("http://laixing.com/En/Index", "LaiXing.com", "_blank", "confirmation(id)", "laixing.com", "Visit the laixing.com site");
    $htoys = new Tautan("http://htoys.com/", "HToys.com", "_blank", "confirmation(id)", "htoys.com", "Visit the htoys.com site");

    $laman = array($home, $img, $video, $audio_full, $wiki, $laixing, $htoys);
    //  merupakan link eksternal

    ?>