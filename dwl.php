<!doctype html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>js-dos api</title>
    <style type="text/css">
      .dosbox-container { width: 640px; height: 400px; }
      .dosbox-container > .dosbox-overlay { background: url(http://ift.tt/1lV0aYI); }
      .dosbox-start { font-size: 35px !important; }
    </style>
  </head>
  <body>
    <div id="dosbox"></div>
    <br/>
    <button onclick="dosbox.requestFullScreen();">Make fullscreen</button>
    
    <script type="text/javascript" src="http://ift.tt/1lruKbY"></script>
    <script type="text/javascript">
      var dosbox = new Dosbox({
        id: "dosbox",
        onload: function (dosbox) {
          dosbox.run("http://ift.tt/1lV0dE5", "./CAT.EXE");
        },
        onrun: function (dosbox, app) {
          console.log("App '" + app + "' is runned");
        }
      });
    </script>
  </body>
</html>
