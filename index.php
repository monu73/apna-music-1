<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="manifest" href="other/manifest.json">
<meta property="og:image" content="https://articles-images.sftcdn.net/wp-content/uploads/sites/3/2017/09/youtube-to-mp3-1024x576-1024x576.jpg"/>
<!-- BOTTOM CSS FILE IS INCLUDED FOR HEADER OF THIS SITE -->
 <?php include 'design/css/ytheader.css'; ?>
<!-- BOTTOM CSS FILE IS FOR LOGIN PAGE CSS -->
 <?php include 'design/css/login.css'; ?>
<!-- BOTTOM CSS FILE INCLUDE CSS FOR MORE DROP BOX 3 DOTS BUTTON -->
<?php include 'design/css/moredrop.css'; ?>
<!-- BOTTOM CSS FILE INCLUDE COMMON CSS FOR THE PAGE WRITTEN EXCLUSIVELY -->
<?php include 'design/css/common.css'; ?>
</head>
<body>
<?php include 'design/html/ytheader.html'; ?>
</br><hr>
<div class="row"></div>
<div class="ajaxload"><div class="ajax" style=""><div key="spinner" class="spinner"></div></div></div><div class="musicplayer"><audio controls></audio></div><div class="newmusicload"><div key="spinner" class="newMusicLoadSpinner spinner"></div><div class="loadmsg"></div></div>

<div class="moredrop"><div class="menu-container"><div class="menu-content"><!--<div><div><button class="menu-item-button">Not interested</button></div></div>--><div><div><button class="menu-item-button">Play Next</button></div></div><div><button class="menu-item-button">Cancel</button></div></div><c3-overlay><button class="overlay-button" aria-label="close"></button></c3-overlay></div></div>



<script>ids = ['aUs1yzZMbMQ', 'wsxUywlCbiA', 'CYtt269jzlw', 'hQqHFJdSq0M', '8rbEAhsHQFw', 'GcwkeRKxcKY', 'hjWf8A0YNSE', 'dZ0fwJojhrs', 'Ukt4NjjRG8U', 'YuXLN23ZGQo', 'RCgbE6eS-DU', 'K99NOOka914', 'JFcgOboQZ08', 'FsnYzwQm3gM', 'qfdShSZZxlg', 'LOF1mYzxK_Q', 'yIIGQB6EMAM', 'WYk2RdpCUYk', 'BrhsR-Mz8UE', 'f1qz8vn3XbY', 'KU3JLQmlU8U', 'r6gWOthiCk4', 'k4vZaRIwCtU', 'PRXIG7ZWnG8', 'N2-HsIYd0Go'];</script>
 </body>
<script src="design/js/newtest.js"></script>
<script src="design/js/notification.js"></script>
<script>
  if ('serviceWorker' in navigator) {
    console.log("Will the service worker register?");
    navigator.serviceWorker.register('other/service-worker.js')
      .then(function(reg){
        console.log("Yes, it did.");
      }).catch(function(err) {
        console.log("No it didn't. This happened: ", err)
      });
  }
</script>
</html>


