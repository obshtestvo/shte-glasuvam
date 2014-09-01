<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ще Гласувам</title>

  <link href="<?php echo URL; ?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo URL; ?>bower_components/bootstrap/dist/css/sticky-footer.css" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
  <script src="<?php echo URL; ?>bower_components/d3/d3.min.js" charset="utf-8"></script>

</head>
<body>
  <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '501861616625542',
          xfbml      : true,
          version    : 'v2.0'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
    
<div id="wrap">
  <div class="container" style="width: 810px;">
      <div class="header" style="height: 200px; padding-top: 10px;">
       
       <span class="pull-left col-xs-4 text-justify">
       Текста ще те мотивира да гласуваш и част от него ще гласи- „Натисни бутона „Ще гласувам“, за да кажеш на твоите приятели, че ще гласуваш на парламентарните избори на 5 октомри 2014. 
       </span>
       <span class="pull-left col-xs-4 text-center">
       <a href="<?php echo URL; ?>"><img src="<?php echo URL; ?>images/willvote.png " alt="Ще гласувам"></a>
       <button class="btn btn-success btn-large btn-block">Ще Гласувам</button>
       </span>

       <span class="pull-right col-xs-4">
        <div style="width: 200px; height: 200px; border: 1px solid gray;">

        <script type="text/javascript">
        FB.getLoginStatus(function(response) {
          if (response.status === 'connected') {
            console.log('Logged in.');
          }
          else {
            FB.login();
          }
        });
        </script>
          <iframe src="//www.facebook.com/plugins/facepile.php?app_id=501861616625542&amp;href=https%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;action&amp;width=200&amp;height=200&amp;max_rows=4&amp;colorscheme=light&amp;size=large&amp;show_count=false&amp;appId=501861616625542" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:200px;" allowTransparency="true"></iframe>
        </div>
          
       </span>
          

</div><br /><br />

<div class="btn-group btn-group-justified">
  <div class="btn-group">
    <a href="<?php echo URL; ?>" type="button" class="btn btn-default">Начало</a>
  </div>
  <div class="btn-group">
    <a href="<?php echo URL; ?>why/" type="button" class="btn btn-default">Защо / Как</a>
  </div>
  <div class="btn-group">
    <a href="<?php echo URL; ?>campaign/" type="button" class="btn btn-default">Включи се в кампанията</a>
  </div>
</div>

