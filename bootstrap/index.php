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
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand"><img id="logo" src="http://i.ytimg.com/vi/p1Pt7t2UEPc/maxresdefault.jpg" alt="some_text"></a>
      </div>
      <!-- Collection of nav links, forms, and other content for toggling -->
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="#submit">Submit</a></li>
          <li><a href="#about">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <form role="search" class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" placeholder="email@example.com" class="form-control">
            </div>
          </form>
          <li><a href="#">Subscribe</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <div class="container">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#video" data-toggle="tab"><span class="glyphicon glyphicon-film"></span> Film</a></li>
      <li><a href="#music" data-toggle="tab"><span class="glyphicon glyphicon-music"></span> Music</a></li>
    </ul>
  </div>

  <div class="tab-content">
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
  </div>
<script type="text/javascript">
  // Once the video is ready
  _V_("showcase_video").ready(function(){

    var myPlayer = this;    // Store the video object
    var aspectRatio = 9/16; // Make up an aspect ratio

    function resizeVideoJS(){
      // Get the parent element's actual width
      var width = document.getElementById(myPlayer.id).parentElement.offsetWidth;
      // Set width to fill parent element, Set height
      myPlayer.width(width).height( width * aspectRatio );
    }

    resizeVideoJS(); // Initialize the function
    window.onresize = resizeVideoJS; // Call the function on resize
  });
</script>
</body>
</html>