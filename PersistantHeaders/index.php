<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	
	<title>Anders Åkesson | Web | PHP | HTML | CSS | C++ | Java | Table with Persistent Headers</title>
	
	<link rel="stylesheet" href="css/style.css">
	
   <!-- Le styles -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
        background-color: #E0E0E0;
      }
    </style>
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

	
	<style>
    .floatingHeader {
      position: fixed;
      top: 35px;
      visibility: hidden;
    }
	</style>
	
	    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../apple-touch-icon-57x57-precomposed.png">
    <link rel="shortcut icon" href="../favicon.ico">
	
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>
    function UpdateTableHeaders() {
       $(".persist-area").each(function() {
       
           var el             = $(this),
               offset         = el.offset(),
               scrollTop      = $(window).scrollTop(),
               floatingHeader = $(".floatingHeader", this)
           
           if ((scrollTop > offset.top) && (scrollTop < offset.top + el.height())) {
               floatingHeader.css({
                "visibility": "visible"
               });
           } else {
               floatingHeader.css({
                "visibility": "hidden"
               });      
           };
       });
    }
    
    // DOM Ready      
    $(function() {
    
       var clonedHeaderRow;
    
       $(".persist-area").each(function() {
           clonedHeaderRow = $(".persist-header", this);
           clonedHeaderRow
             .before(clonedHeaderRow.clone())
             .css("width", clonedHeaderRow.width())
             .addClass("floatingHeader");
             
       });
       
       $(window)
        .scroll(UpdateTableHeaders)
        .trigger("scroll");
       
    });
  </script>
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="http://andyweb.info">Anders Åkesson</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="http://andyweb.info/">Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Projects <b class="caret"></b></a>
             <ul class="dropdown-menu">
              <li><a href="../baseline.0.5.3/example/index.php">Baseline Installation</a></li>
              <li><a href="../skeleton/index.php">Skeleton Installation</a></li>
              <li><a href="../Wee/index.php">Wee Installation</a></li
             </ul>
           </li>
        </ul>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

	<div id="page-wrap">

		<h1>Persistent Headers</h1>
		
		<p>Scroll down and watch the table headers stay with the table when they normally would be scrolled off the screen.</p>
		
    <table class="persist-area">
        <thead>
          <tr class="persist-header">
             <th>Column One Header</th>
             <th>Column Two Header</th>
          </tr>
        </thead>
        <tbody>
          <tr>
             <td>table1 data1</td>
             <td>table1 data1</td>
          </tr>
          <tr>
             <td>table1 data2</td>
             <td>table1 data2</td>
          </tr>
          <tr>
             <td>table1 data3</td>
             <td>table1 data3</td>
          </tr>
          <tr>
             <td>table1 data4</td>
             <td>table1 data4</td>
          </tr>
          <tr>
             <td>table1 data5</td>
             <td>table1 data5</td>
          </tr>
          <tr>
             <td>table1 data6</td>
             <td>table1 data6</td>
          </tr>
          <tr>
             <td>table1 data7</td>
             <td>table1 data7</td>
          </tr>
          <tr>
             <td>table1 data8</td>
             <td>table1 data8</td>
          </tr>
          <tr>
             <td>table1 data9</td>
             <td>table1 data9</td>
          </tr>
          <tr>
             <td>table1 data10</td>
             <td>table1 data10</td>
          </tr>
        </tbody>
      </table>
              
      <section class="some-other-area persist-area">
      
        <h2 class="persist-header">Some Other Area</h2>
      
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
      
      </section>
      
      <section class="some-other-area persist-area">
      
        <h2 class="persist-header">Some Other Area</h2>
      
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
      
      </section>
    
	
	<footer>
        <p>&copy; Anders Åkesson, Blekinge Institute of Technology 2013</p>
        <ul class="list-social pull-right">
         <li><a class="icon-3" target="blank" href="https://twitter.com/AndyAkesson"></a></li>
         <li><a class="icon-4" target="blank" href="https://plus.google.com/u/0/112440894892020215266/posts"></a></li>
        </ul>
         <p>Tools: 
    <a href="http://validator.w3.org/check/referer">html5</a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">css3</a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css21">css21</a>
    <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">unicorn</a>
    <a href="http://validator.w3.org/checklink?uri=http://andyweb.info/phpmvc/about.php">links</a>
    <a href="http://validator.w3.org/i18n-checker/check?uri=http://andyweb.info/phpmvc/about.php">i18n</a>
    <!-- <a href="link?">http-header</a> -->
    <a href="http://csslint.net/">css-lint</a>
    <a href="http://jslint.com/">js-lint</a>
    <a href="http://jsperf.com/">js-perf</a>
    <a href="http://www.workwithcolor.com/hsl-color-schemer-01.htm">colors</a>
    <a href="http://dbwebb.se/style">style</a>
    </p>
    
    	<p>Docs:
    <a href="http://www.w3.org/2009/cheatsheet">cheatsheet</a>
    <a href="http://dev.w3.org/html5/spec/spec.html">html5</a>
    <a href="http://www.w3schools.com/cssref/default.asp">css</a>
    <a href="http://php.net/manual/en/index.php">php</a>
    <a href="http://www.sqlite.org/lang.html">sqlite</a>
    <a href="http://www.blueprintcss.org/">blueprint</a>
    </p>
    <p>Todays date is <? date_default_timezone_set("Europe/Stockholm"); print(Date("l F d, Y, H:i")); ?></p>
    <a href="#" class="button">Go to top</a>

      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/bootstrap-transition.js"></script>
    <script src="../js/bootstrap-alert.js"></script>
    <script src="../js/bootstrap-modal.js"></script>
    <script src="../js/bootstrap-dropdown.js"></script>
    <script src="../js/bootstrap-scrollspy.js"></script>
    <script src="../js/bootstrap-tab.js"></script>
    <script src="../js/bootstrap-tooltip.js"></script>
    <script src="../js/bootstrap-popover.js"></script>
    <script src="../js/bootstrap-button.js"></script>
    <script src="../js/bootstrap-collapse.js"></script>
    <script src="../js/bootstrap-carousel.js"></script>
    <script src="../js/bootstrap-typeahead.js"></script>
    <script src="../js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="../prettify/prettify.js"></script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>

    <script src="../js/bootstrap.min.js"></script>

    <script src="../js/main.js"></script>
    
    	<!--Share this script-->
	<script type="text/javascript">stLight.options({publisher: "17451387-dbad-4fb0-8ea0-e3505965eccf", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
	<script>
	var options={ "publisher": "17451387-dbad-4fb0-8ea0-e3505965eccf", "position": "right", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["twitter", "linkedin", "googleplus", "pinterest", "email", "sharethis"]}};
	var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
	</script>
	
</body>

</html>