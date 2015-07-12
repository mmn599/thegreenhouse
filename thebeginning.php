<!doctype html>
<html lang='en-US'>
    <head>
          
          <title> The Starving Artist </title>
          
          <!-- Video.js CDN -->
          <link href="//vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
          <script src="//vjs.zencdn.net/4.12/video.js"></script>

          <!-- JQuery CDN from Google-->
          <link rel="JQstylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" media="all" /> 
          <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.min.js" type="text/javascript"></script>
          <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>

          <!-- Parse CDN -->
          <script src="//www.parsecdn.com/js/parse-1.4.2.min.js"></script>

          <!-- JS -->
          <script src="thebeginning.js"></script>

          <!-- CSS -->
          <link rel="stylesheet" type="text/css" href="thebeginning.css">


    </head>
    <body>
      
        <h1>The Starving Artist Showcase</h1>

        <hr>

        <h2>Dolphin Overwhelming</h2>

        <div id="showcase">

          <video id="showcase_video" class="video-js vjs-default-skin"
              controls preload="auto" width="640" height="264"
              poster="http://video-js.zencoder.com/oceans-clip.png"
              data-setup='{"example_option":true}'>
              <source src="http://video-js.zencoder.com/oceans-clip.mp4" type='video/mp4' />
              <source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
              <source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
              <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
          </video>

          <p id="showcase_description">This video comes to us from Jenkins McDoogleBerry. In his own words, it is a 'short film about dolphins taking over the world'. Watch it, join in on the dicussion, and be sure to tune in next week for Basil McBitchface's documentary on snails!</p>

          <form id="showcase_join" method="post" action="emailsignup.php">
             E-mail: <input type="text" name="email">
             <input type="submit" name="submit" value="Join"> 
          </form>
        </div>

        <button type="button" id="btn_contact_us">Submit your art!</button>

        <!--Contact Form -->
        <div id="contactdiv">
          <form class="form" action="#" id="contact">
            <img src="images/button_cancel.png" class="img" id="cancel"/>
            <h3>Contact Form</h3>
            <hr/><br/>
            <label>Name: <span>*</span></label>
            <br/>
            <input type="text" id="name" placeholder="Name"/><br/>
            <br/>
            <label>Email: <span>*</span></label>
            <br/>
            <input type="text" id="email" placeholder="Email"/><br/>
            <br/>
            <label>Contact No: <span>*</span></label>
            <br/>
            <input type="text" id="contactno" placeholder="10 digit Mobile no."/><br/>
            <br/>
            <label>Message:</label>
            <br/>
            <textarea id="message" placeholder="Message......."></textarea><br/>
            <br/>
            <input type="button" id="send" value="Send"/>
            <input type="button" id="cancel" value="Cancel"/>
            <br/>
          </form>
        </div>

    </body>
</html>
