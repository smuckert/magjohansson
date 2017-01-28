<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>jQuery Easter Egg</title>

    <style>
      body {
        font-family: sans-serif;
      }

      kbd {
        background: #fafafa;
        border-color: #ccc #ccc #fff;
        -webkit-border-radius: 4px;
           -moz-border-radius: 4px;
            -ms-border-radius: 4px;
             -o-border-radius: 4px;
                border-radius: 4px;
        border-style: solid solid none;
        border-width: 1px 1px medium;
        -webkit-box-shadow: 0 2px 0 rgba(0,0,0,0.25),0 0 0 1px #fff inset;
           -moz-box-shadow: 0 2px 0 rgba(0,0,0,0.25),0 0 0 1px #fff inset;
            -ms-box-shadow: 0 2px 0 rgba(0,0,0,0.25),0 0 0 1px #fff inset;
             -o-box-shadow: 0 2px 0 rgba(0,0,0,0.25),0 0 0 1px #fff inset;
                box-shadow: 0 2px 0 rgba(0,0,0,0.25),0 0 0 1px #fff inset;
        color: #444;
        display: inline-block;
        font-family: inherit;
        margin: 0 0 5px 0;
        padding: 2px 6px;
        white-space: nowrap;
      }
    </style>
  </head>
  <body>
    <p>
      Try pressing this key sequence:
    </p>
    <p>
      <kbd>↑</kbd><kbd>↑</kbd><kbd>↓</kbd><kbd>↓</kbd>
    </p>

    <script src="../vendor/jquery-1.9.1/jquery.js"></script>
    <script src="../jquery.easteregg.js"></script>
    <script>
      $(function () {
        $(document).easteregg({
          sequence : [38, 38, 40, 40]
        , callback : function () {
            window.location.replace('hangman.php');
          }
        });
      });
    </script>
  </body>
</html>
