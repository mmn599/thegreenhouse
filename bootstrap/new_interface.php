<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Bars and Tone</title>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <!-- Video.js CDN -->
  <link href="//vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
  <script src="//vjs.zencdn.net/4.12/video.js"></script>


  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="index.css">


</head>
<body>
  <div class="header">
    <h1>BARS & TONE</h1>
    <img id="logo" src="bars.png" alt="some_text">
    <br>
    <div class="subheader">
      <h2>FILM</h2>
      <h2>MUSIC</h2>
      <h2>SUBMIT</h2>
      <h2>SUBSCRIBE</h2>
    </div>
  </div>
  <br>

  <div id="video" class="tab-pane fade in active">
    <div id="showcase">
      <video id="showcase_video" class="video-js vjs-default-skin" controls preload="auto" poster="http://video-js.zencoder.com/oceans-clip.png" data-setup='{"example_option":true}'>
        <source src="http://video-js.zencoder.com/oceans-clip.mp4" type='video/mp4'/>
        <source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
        <source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
        <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
      </video>
    </div>
  </div>
  <div id="music" class="tab-pane fade">
    <h3>Music</h3>
    <p>Some content in menu 1.</p>
  </div>
</body>
</html>