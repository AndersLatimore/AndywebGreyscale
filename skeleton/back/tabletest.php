<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	
	<title>Table with Persistent Headers</title>
	
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	  <!--Standard bootstrap CSS
   ================================================== -->
	<link href="../../css/bootstrap.css" rel="stylesheet">
	<link href="../../css/style.css" rel="stylesheet">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="../stylesheets/base.css">
	<link rel="stylesheet" href="../stylesheets/skeleton.css">
	<link rel="stylesheet" href="../stylesheets/layout.css">
	

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="../../favicon.ico">
	<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">
	
	<style>
    .floatingHeader {
      position: fixed;
      top: 0;
      visibility: hidden;
    }
	</style>
	
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
<div class="block1 p_bottom_zero">
  <div class="container_12"> 
    <!--==============================header=================================-->
    <header class="homepage">
      <h1><a class="logo" href="#"><span class="underline">Anders Åkesson</a></h1>
      <br>
      <br>
      <nav>
        <ul class="sf-menu">
          <li><a href="http://andyweb.info">Home</a></li>
          <li><a href="javascript:">Projects</a>
            <ul>
              <li><a href="../baseline.0.5.3/example/index.php">Baseline</a></li>
              <!--<li><a href="phpmvc/fuelphp-1.5.3/public/">FuelPHP</a></li>-->
              <li><a href="../skeleton/index.php">Skeleton</a></li>
              <li><a href="../codester/index.php">Codester</a></li>
              <li class="current"><a href="#">Wee</a></li>
            </ul>
          </li>
          <li> <a href="javascript:">Scroll</a>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#personal">Personal Info</a></li>
              <li><a href="#bottom">Contact</a></li>
            </ul>
          </li>
          <li><a href="#bottom">Contact</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </header>
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
    
	</div>

<script type="text/javascript">
	(function(){ var bsa = document.createElement('script'); bsa.type = 'text/javascript'; bsa.async = true; bsa.src = '//s3.buysellads.com/ac/bsa.js'; (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa); })();
</script>

<script type="text/javascript">
	var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-68528-29']); _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga); })();
</script>
</body>

</html>