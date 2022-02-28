<?php
$url = isset($_GET['url']) ? htmlspecialchars($_GET['url']) : null;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
     <meta charset="UTF-8">
<body>
  <style>
        html,body{
            margin:0;padding:0;width:100%;height:100%;
        }
    </style>
<div id="player" style="width:100%;height:100%;"></div>
<script src="https://content.jwplatform.com/libraries/219E3gkh.js"></script>
<script>
jwplayer("player").setup({
  playlist: [{
    "sources": <?php require 'mediafire.php';?>
  }],
  allowfullscreen: true,
  width: '100%',
});
</script>
</body>
</html>
