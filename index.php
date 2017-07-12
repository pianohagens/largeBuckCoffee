<?php
//conditionals1.php
/*echo date("l");*/

//http://php.net/manual/en/function.date.php

$date =  date('l');
$greeting = '';
$color = '';
$image = '';


if($date == 'Monday')
{
	$image = 'coffee8.jpg';
    $color = '#CC0066';
    $greeting = 'Lucky on your';
    $todayquote  = 'Our Pumpkin Spice Latte tastes great on Monday!';

}
elseif($date == 'Tuesday')
{
    $image = 'coffee2.png';
    $color = '#3300FF';
    $greeting = 'Lovely in your';
    $todayquote = 'Our Pumpkin Spice Latte tastes great on Tuesday!'; 
 
}
elseif($date == 'Wednesday')
{
  $image = 'coffee5.jpg';
    $color = '#FFFF00';
    $greeting = 'Thankful in your';
    $todayquote = 'Our Pumpkin Spice Latte tastes great on Wednesday!';
    
}
elseif($date == 'Thursday')
{
     $image = 'coffee4.gif';
    $color = '#96c223';
   $greeting = 'Excellent on your';
    $todayquote = 'Our Pumpkin Spice Latte tastes great on Thursday!';
    
}
elseif($date == 'Friday')
{
     $image = 'coffee3.jpg';
    $color = '9900FF';
    $greeting = 'Fast on your';
     $todayquote = 'Our Pumpkin Spice Latte tastes great on Friday!';
    
}
elseif($date == 'Saturday')
{
     $image = 'coffee6.jpg';
    $color = '#663300';
    $greeting = 'Relax on your';
    $todayquote = 'Our Pumpkin Spice Latte tastes great on Saturday!';


}
elseif($date == 'Sunday')
{
    $image = 'coffee1.jpg';
    $color = '#003300';
    $greeting = 'Happy for your';
    $todayquote = 'Our Pumpkin Spice Latte tastes great on Sunday!';
}

?>
<!DOCTYPE html>
<!-- http://edison.seattlecentral.edu/~xhuang20/itc240/a3dailygrind/largebucks-coffee-10072015/index.php -->
<html>
<head>
    <meta charset="utf-8" />
    <title>LargeBuck Coffee</title>
    <meta name="robots" content="noindex,nofollow" />
	<!-- below is a google font, go to https://www.google.com/fonts to get yours! -->
	<link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
	<link id="mainStylesheet" rel="stylesheet" href="css/default.css" />
    <style type="text/css">
	
        html {background-color:<?=$color?>;/* pumpkin - overwrites default */}
        
        .feature {color:#FF7518; /* daily feature color - pumpkin! */}
        
		.masthead{
			font-family: 'Holtwood One SC', serif; /* required for google font */
			font-size:3em;
		}
	
		#logo{
			float:right;
			display:inline-block;
			padding:2px;
			max-width:100px; /* actual size of image */
			width:20%; /* approximate size taken on screen in maximum view */
		}
	
		#coffee {
			float:left;
			display:inline-block;
			padding:20px;
			max-width:300px; /* best if actual size of image */
			width:33%; /* approximate size taken on screen in maximum view */
		}

        h3.slogan{
           font-style:italic; /* make the slogan italics */ 
        }
    </style>
   
    <!--[if ltIE9]>
       <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
</head>
<body>
	<header>
	    <img src="images/coffee7.jpg" alt="You drink our coffee, we make large bucks!" class="flexible" id="logo" />
		<h1 style="color:<?=$color?>" class="masthead">LargeBuck Coffee Shop</h1>
        <h2 style="color:<?=$color?>"><?=$greeting?> <?=$date?></h2>
        
		<nav>
			<ul>
				<li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
			</ul>
		</nav>
	</header>
    <main>
        
		 <header><h3 style="color:<?=$color?>"><?=$todayquote?></h3></header>
        <p>
    		 <img src="images/<?=$image?>" alt="Our Pumpkin" id="coffee" />
            <strong class="feature"><?=$date?>'s Coffee Special is Pumpkin Spice Latte</strong>, which makes us wish it was always Fall, as this is one of our top sellers!</p>
        <p><span class="feature">Pumpkin Spice is </span> Gluten-free selfies normcore chillwave. Listicle 90's chambray, seitan cold-pressed try-hard Etsy authentic flexitarian vinyl. Meditation bespoke freegan, single-origin coffee cred seitan 90's gentrify brunch Williamsburg squid cold-pressed. Brooklyn readymade Tumblr wayfarers ethical.</p>
        <p><span class="feature">Enjoy Pumpkin Spice with our </span> Polaroid iPhone plaid, Pitchfork Shoreditch paleo. Hashtag keytar chia scenester Pinterest, semiotics tousled food truck. YOLO scenester deep v, taxidermy paleo quinoa McSweeney's Carles VHS mustache Williamsburg gluten-free readymade cold-pressed. Truffaut Thundercats Schlitz, listicle organic Brooklyn paleo squid asymmetrical readymade migas gluten-free Austin.</p>
		 <p>
		 <b>At LargeBuck$ we aspire to: </b>Aesthetic gentrify YOLO McSweeney's typewriter single-origin coffee. Slow-carb hella listicle lomo, Helvetica single-origin coffee butcher stumptown. Chambray try-hard church-key mumblecore, tote bag PBR cardigan. Retro Austin Brooklyn, blog Intelligentsia gentrify jean shorts sartorial bicycle rights gastropub. Aesthetic wayfarers Pitchfork, tattooed Carles quinoa meh leggings distillery pork belly banjo. Umami cred lumbersexual skateboard, pork belly Tumblr vegan letterpress. Fixie bicycle rights butcher chillwave, gluten-free health goth Echo Park locavore whatever.

		 </p>
		<p>
		Gluten-free selfies normcore chillwave. Listicle 1000's chambray, seitan cold-pressed try-hard Etsy authentic flexitarian vinyl. Meditation bespoke freegan, single-origin coffee cred seitan 90's gentrify brunch Williamsburg squid cold-pressed. Brooklyn readymade Tumblr wayfarers ethical. Biodiesel VHS Godard High Life, tousled Banksy craft beer. Mlkshk direct trade locavore, mumblecore keytar artisan hashtag fap. Cred cronut Brooklyn, locavore art party small batch PBR semiotics ennui kitsch taxidermy mlkshk stumptown.
		</p>
		<p>
		Polaroid iPhone plaid, Pitchfork Shoreditch paleo. Hashtag keytar chia scenester Pinterest, semiotics tousled food truck. YOLO scenester deep v, taxidermy paleo quinoa McSweeney's Carles VHS mustache Williamsburg gluten-free readymade cold-pressed. Truffaut Thundercats Schlitz, listicle organic Brooklyn paleo squid asymmetrical readymade migas gluten-free Austin. Etsy Wes Anderson 8-bit retro, polaroid synth paleo banh mi before they sold out Vice. Bushwick fap Intelligentsia, whatever Etsy High Life Kickstarter migas retro Banksy YOLO Carles yr raw denim. Gluten-free fixie taxidermy pop-up, actually Kickstarter flannel put a bird on it master cleanse. <h2 style="color:<?=$color?>">You have a wonderful <?=$date?></h2>
		</p>
		<p>
		Text provided by <a href="http://hipsum.co/" target="_blank">Hipster Ipsum</a>
		</p>
     </main>
    <footer>
      <small>&copy; 2014-2015, All Rights Reserved ~
      <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
      <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
      </small>
    </footer>
    <!-- END Footer -->
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<script type="text/javascript">
	$("document").ready(function(){
		$('.seasons a').click(function(e){//find all a tags inside class of seasons
            e.preventDefault();//stop default submission
			var season = $(this).attr("href");//contents of href attribute of this element
			var stylesheet = $('#mainStylesheet');
			season = season.toLowerCase();
			switch(season)
			{
				case 'spring':
				$('#logo').attr("src","images/spring.gif");
				$('#wear').attr("src","images/spring-wear.jpg");
				$('main header h3').html("Get a jump on Spring wear!");
				break;
				
				case 'summer':
				$('#logo').attr("src","images/summer.gif");
				$('#wear').attr("src","images/summer-wear.jpg");
				$('main header h3').html("Make Summer a hummer!");
				break;
				
				case 'fall':
				$('#logo').attr("src","images/fall.gif");
				$('#wear').attr("src","images/fall-wear.jpg");
				$('main header h3').html("Fall into Fall!");
				break;
				
				case 'winter':
				$('#logo').attr("src","images/winter.gif");
				$('#wear').attr("src","images/winter-wear.jpg");
				$('main header h3').html("Keep warm this Winter!");
				break;
				
				default:
				$('#logo').attr("src","images/four-seasons.gif");
				$('#wear').attr("src","images/300x400.png");
				$('main header h3').html("Outfitter for all seasons!");
				
			}
			
			var season = "css/" + season + ".css";
			$(stylesheet).attr("href",season);
			//alert(season);
		});
	});
    </script>
	
</body>
</html>
