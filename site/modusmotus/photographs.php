<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Modus Motus - photographs</title>
	<link rel="shortcut icon" href="http://www.boutiquevizique.com/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="css/MM_style.css" type="text/css" media="screen" />
	<script src="js/global.js" type="text/javascript"></script>
	<script src="js/audio-player.js" type="text/javascript"></script>
	<script src="js/swfobject.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		// preload all images found in stylesheet
		$.preloadCssImages();
		});
	</script>
</head>

<body style="background: url(images/bg_photo/rotator.php) center top repeat;">

<!-- opens navigation on top -->
<div id="header">    
	<ul class="topnav">
		<li><a href="index.php">installation</a></li>
		<li> | </li>
		<li><a href="performance.php">performance</a></li>
		<li> | </li>
		<li class="topnavselected">photographs</li>
<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		<li><a href="http://boutiquevizique.com">boutique vizique</a></li>
	</ul>
</div><!-- close navigation on top -->



<div id="uberbox"><!-- opens frame (uberbox) -->

	<div id="page">

		<div id="head">
			<img src="images/ModusMotus.png" width="500px" height="90px" border="0px" alt="Modus Motus txt-logo"/><img src="images/photographs.png" width="313px" height="56px" border="0px" alt="photographs txt-logo" />
		</div>		<!-- closes title header -->

		

		<div id="slider">

			<div class="scroll">

				<div class="scrollContainer">

					<div class="panel" id="photographs">
						<div id="flashcontent">AutoViewer requires JavaScript and the Flash Player. 
							<a href="http://www.macromedia.com/go/getflashplayer/">Get Flash here.</a></div>
						<script type="text/javascript">
							var fo = new SWFObject("gallery/autoviewer.swf", "autoviewer", "688", "400", "6", "#000000");				
							//Optional Configuration
							fo.addVariable("langOpenImage", "Open Image in New Window");
							fo.addVariable("langAbout", "About");	
							fo.addVariable("xmlURL", "gallery/photographs.xml");					
							fo.write("flashcontent");		
						</script>
					</div><!-- close panel -->
					
					<div class="panel" id="brief">

								<p>This is a series of photographs that, at first glance, look like computer generated images, but they are not. A SLR camera, mounted on the ceiling, captured the trail of a pendulum in motion over a period of 15 to 30 seconds. The high quality of the photographs shows us details of every single line giving it a sense of computer based graphics. In a way we 'imitated' mathematically computed images. A pastiche maybe. You could also say they are painted with light. 
</p>
								<p>Only close observation of the photographs allows to reveal its true nature. Some images show small traces of the actual Modus Motus installation in selectively illuminated parts. The tear drop shaped bob at the bottom of the pendulum can be seen in a few of the photographs and thus hinting at the applied technique.</p>
								<p><strong>For sale!</strong> &nbsp;&nbsp;All these photographs are produced in a limited series and are being sold separately or as a series.<br />
Format 100cm x 66cm - mounted on Dibond (lightweight, durable and rigid aluminum composite material)<br />
Please contact us for more information.</p>

					</div><!-- close panel -->


					<div class="panel" id="exhibitions">
						<table>
						<tr>
							<td>
								<a href="http://dharts.be/"><img src="images/dhlogo.jpg" width="200px" height="100px" border="0" alt="destelheide dworp" title="dharts.be" class="midden"/></a>
								<p>21/10/2008 - 28/02/2009 <br />Dharts / Destelheide, Dworp<br /><a href="http://www.adj.be/destelheide/dharts/import/pdf/DH%20krant%2011P4-5.pdf">Moving Moves</a> exhibition</p>
							</td>
						</tr>
						</table>		
					</div><!-- close panel -->
			
				</div><!-- close scroll container -->
						
			</div><!-- close scroll -->

		<div id="right">
		<ul>
			<li class="navigation"><a href="#photographs">Photographs</a></li>
			<li class="navigation"><a href="#brief"><span>Brief</span></a></li>
			<li class="navigation"><a href="#exhibitions">Exhibitions</a></li>
			
			<li>&nbsp;</li><!-- linebreak -->
			<li class="geennavigation">News <a href="http://www.boutiquevizique.com/modusmotus/feed/MM_news.xml" type="application/rss+xml"><img src="images/feed-icon.png" width="15px" height="14px" alt="feed" border="0" /></a>
				<p  class="geennavigationp">				
					<?php
					include("universal-reader.php");
					Universal_Reader("feed/MM_news.xml");
					echo Universal_Display();
					?>
				</p></li>



		</ul>
		</div><!-- close right -->
		
		
	</div><!-- close slider -->

</div><!-- close page	 -->

</div><!-- close frame (uberbox) -->

</body>
</html>