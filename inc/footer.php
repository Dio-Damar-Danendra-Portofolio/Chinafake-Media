<script>
    function web_manual() {
            window.alert("Click on one of the images to see the toy\'s appearance or hear the toy\'s full audio in HD, original pitch and speed.");
            window.alert("Play one of the videos to see the toy\'s functionality.");   
            window.alert("The external links are opened in a new tab.");   
        }
        let id;

        function confirmation(id){
            const popup = window.confirm("The external link: " + id + " will be opened");
            if (popup == true) {
                window.alert("You will see more Chinafake toys on " + id);
            } else {
                document.location = "";
            }
        }
</script>
<footer>
        <div class="kontainer_footer">
            <div class="obyek_footer">
                <h2 style="color: white;">Chinafake Community</h2>
            </div>
        </div>
</footer>