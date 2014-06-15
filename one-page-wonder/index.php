<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Anders Akesson">
    <meta name="author" content="">
    <title>Airbox - Lightweight, airy jQuery lightbox</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS for the 'One Page Wonder' Template -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
    <link href="airbox/src/airbox.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Airbox 0.1.0</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#about">About</a></li>
            <li><a href="#competition">Competition</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="../../">Andyweb home</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
    <div class="header-image">
      <div class="headline">
        <div class="container">
          <h1>Airbox 0.1.0</h1>
          <h2>Lightweight, airy jQuery lightbox</h2>
        </div>
      </div>
    </div><!-- /header-image -->
    <div id="about">
    <div class="container">
      <!-- START THE FEATURETTES -->
      <hr class="featurette-divider">
      <div class="featurette" id="about">
        <a href="airbox/src/img/flowers.jpg" data-airbox="image"><img class="featurette-image img-circle img-responsive pull-right" src="airbox/src/img/flowers.jpg"></a>
        <h2 class="featurette-heading">Simplicity <span class="text-muted">Is Beautiful</span></h2>
        <p class="lead">Airbox is a simple, easy to use lightbox that can be used on any type of image that you can possibly want to use on the web. Click the images on this site to see the effects of Airbox. You can easily customize Airbox to suit your project needs. Download Airbox on <a href="https://github.com/AndyAkesson/Airbox">Github</a>.</p>
      </div>
      <br>
      <div class="ab-page">
        <a href="airbox/src/img/landscape_7.jpg" data-airbox="image"><img src="airbox/src/img/landscape_7.jpg" width="90%"></a>
      <br>
      </div>
      <div id="competition">
        <hr class="featurette-divider">
        <div class="featurette">
          <h2 class="featurette-heading">The Competition <span class="text-muted">Is Plentiful</span></h2>
          <img class="featurette-image img-responsive" src="img/jquerylightbox_Google_Search.png"></a>
          <p class="lead">So, maybe Airbox might not have all the functionality that you are looking for for your project. Don't 
          worry, there are endless opportunities out there when it comes to lightbox plugins. On any given occasion, a <a href="https://www.google.se/search?q=jquery+lightbox&ie=utf-8&oe=utf-8&rls=org.mozilla:en-US:official&client=firefox-a&gws_rd=cr&ei=_oawUrnXIcjE4gSomoBw">Google search</a> might generate over 3 million hits. Here we list some of the best ones
          that we can definitely recommend.</p>
          <h3><span class="text-muted">Fancybox</span></h3>
          <p><a href="http://fancyapps.com/fancybox/">Fancybox</a> is one of the most used, further developed and extended lighbox plugins out there right now, perhaps to a great extent because of its favorable position as number one on the Google hit list. 
          Fancybox is used for displaying images, html content and multi-media and creates a Mac-style lightbox that floats overtop of a web page. It can display images, HTML elements, SWF movies, Iframes and Ajax requests and is highly customizable through settings and CSS. It also has zooming functionality. It is currently on it's second version and can be downloaded at <a href="http://fancyapps.com/fancybox/">this</a> location.</p>
          <h3><span class="text-muted">Shadowbox</span></h3>
          <p><a href="http://www.shadowbox-js.com/index.html">Shadowbox</a> calls itself a web based media-viewer and that is exactly what it is. It can handle pretty much any type of media file that you'll want to use it on. It's written entirely in JavaScript and CSS and is highly customizable. Shadowbox is free from frameworks which makes it flexible and usable on a universal scale. There is a licensed developer version but there is no need to pay if your intentions are only to use Shadowbox in your project and not alter its functionality. Shadowbox is currently on its 3rd version and can be downloaded at <a href="http://www.shadowbox-js.com/download.html">this</a> location.</p>
          <h3><span class="text-muted">Magnific Popup</span></h3>
          <p><a href="http://dimsemenov.com/plugins/magnific-popup/">Magnific Popup</a> is responsive and very lightweight considering its functionality. It can be used on single images but also as an image gallery or for videos or Google Maps media. The content you put in is resized using CSS media queries and it also has support for Retina displays. Magnific Popup is yet to reach its 1.0 version but you can download version 0.9.9 on <a href="https://github.com/dimsemenov/Magnific-Popup">Github</a>.</p>
          <h3><span class="text-muted">Colorbox</span></h3>
          <p><a href="http://www.jacklmoore.com/colorbox/">Colorbox</a> is another lightweight lightbox that still  holds loads of
          functionality. Much like the other lightboxes listed here it supports all types of images and can be used on all modern browsers. It preloads images when grouped together and the appearance is handled through CSS so it is naturally high performance. Colorbox prouds itself on being used on over 600 000 websites, has extensive documentation and can be downloaded off of Github at <a href="http://www.jacklmoore.com/colorbox/">this</a> location.</p>
          <h3><span class="text-muted">WOWSlider</span></h3>
          <p><a href="http://wowslider.com/">WOWSlider</a> is a professional tool for displaying images on the web. Even though the name indicates a slider its functionality is diverse enough that it can easliy be used as tool for displaying single images as well as galleries. It has numerous visual effects, lots of templates and different types of plugins, depending on what type of platform you're using. It has different ranges of prices depending on what you want to use it for but it can be used for free for non profits. Download version 4.8 at <a href="http://wowslider.com/wowslider-free-setup.zip">this</a> location.</p>
        </div>
      </div>
      <!-- /END THE FEATURETTES -->
      <hr class="featurette-divider">
      <!-- FOOTER -->
      <footer>
        <div id="contact">
          <a href="https://twitter.com/AndyAkesson"><img class="" src="icons/Twitter.png" width="5%"></a>
          <a href="http://www.linkedin.com/pub/anders-%C3%A5kesson/26/512/a02"><img class="" src="icons/Linkedin.png" width="5%"></a>
          <a href="mailto:andy_akesson@me.com"><img class="" src="icons/mail.png" width="5%"></a>
          <p>Copyright &copy; Anders Akesson <script>var date = new Date();var n = date.getFullYear();document.write(n);</script></p>
          <p><a href="airbox/out/">Airbox Documentation</a></p>
        </div>
      </footer>
      <!-- /END OF FOOTER -->
    </div><!-- /container -->
    </div><!--/about -->
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="airbox/src/airbox.min.js"></script>
  </body>
</html>