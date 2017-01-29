<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous">
</script>

  <script src="demo/jquery.js"></script>
  <script src="demo/jquery.easteregg.js"></script>
    <script>
      $(function () {
        $(document).easteregg({
          sequence : [38, 38, 40, 40] //kappar för att aktivera
        , callback : function () {
            window.location.replace('demo/hangman.php');
          }
        });
      });
    </script>