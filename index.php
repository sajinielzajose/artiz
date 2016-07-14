<?php get_header(); ?>
  <body>
  <div id="page">
    <div id="leftsider">
		<div id="topcontent">
			<?php $header_image = get_header_image(); 
				if ( empty( $header_image ) ) :
					$header_image = get_template_directory_uri()."/img/logo.jpeg"; 
				endif;

			?>
				<h1 id="logo" style="background:url(<?php echo esc_url( $header_image ); ?>) no-repeat;	" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
    					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					</a>
				
				</h1>
				<div id="nav">
        <ul>



         
		 <li id="africanart"><a href="#second" title="African Art"><span></span>african art</a></li>
          <li id="flowers"><a href="#third" title="Flowers"><span></span>flowers</a></li>
			<li id="landscapes"><a href="#fourth" title="Landscapes"><span></span>landscapes</a></li>
          <li id="portraits"><a href="#fifth" title="Portraits"><span></span>portraits</a></li>
          

          <li id="about"><a href="#sixth" title="Pastel"><span></span>pastel</a></li>
			<li id="contact"><a href="#seventh" title="Contact"><span></span>contact</a></li>
			
        </ul>
				</div>
		</div>
		<div class="contentarea">
		<ul id="featwork">
        	<li><a href="#fifth" title="Portrat Art"><span></span><img src="<?php echo get_template_directory_uri(); ?>/img/art1.jpg" width="236" height="346" /></a></li>
           	<li><a href="#" title="Flower Art"><span></span><img src="<?php echo get_template_directory_uri(); ?>/img/art2.jpg" width="335" height="346" /></a></li>
			<li><a href="#sixth" title="African Art"><span></span><img src="<?php echo get_template_directory_uri(); ?>/img/art3.jpg" width="236" height="346" /></a></li>
        </ul>
		
      	</div>
		<div id="quote">
		  <h3> &quot; Vibrant Art for your home, office and entertainment area &quot; </h3>
      	</div>
    </div>
	<div id="arrows">
     	<ul>
			<li id="left"><a href="javascript://" title="go left">go left</a></li>
			<li id="right"><a href="javascript://" title="go right">go right</a></li>
		</ul>	
    </div>
	<hr/>
	 <div class="par alt" id="second">
        <div class="africanarea">
		<h2 id="africantitle"><a href="#"><span></span></a></h2>

		<ul id="africanart">
        	<li><img src="<?php echo get_template_directory_uri(); ?>/img/african1.jpg" width="144" height="248"/></li>
           	<li><img src="<?php echo get_template_directory_uri(); ?>/img/african2.jpg" width="185" height="235" /></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/african3.jpg" width="144" height="248" /></li>
			<li><h4 id="plaqueafrican">CLH001</h4></li>
			<li><h4 id="plaqueafrican">CLH002</h4></li>
			<li><h4 id="plaqueafrican">CLH003</h4></li></ul>
		<ul id="africanartbottom">	
		  <li><img src="<?php echo get_template_directory_uri(); ?>/img/african4.jpg" width="290" height="176" /></li>
           	<li><img src="<?php echo get_template_directory_uri(); ?>/img/african5.jpg" width="290" height="176" /></li>
			<li><h4 id="plaqueafrican2">CLH004</h4></li>
			<li><h4 id="plaqueafrican2">CLH005</h4></li>
		</ul>
			
		</div>
        </div>
      <div class="par" id="third">
        <div class="collectionarea">
		<h2 id="flowertitle"><a href="#"><span></span></a></h2>
		
		<ul id="flowerart">
        	<li><img src="<?php echo get_template_directory_uri(); ?>/img/flower3.jpg" width="217" height="225" /></li>
           	<li><img src="<?php echo get_template_directory_uri(); ?>/img/flower2.jpg" width="217" height="225" /></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/flower1.jpg" width="217" height="225" /></li>
			<li><h4 id="plaque">CLH006</h4></li>
			<li><h4 id="plaque">CLH007</h4></li>
			<li><h4 id="plaque">CLH008</h4></li>	
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/flower4.jpg" width="217" height="225" /></li>
           	<li><img src="<?php echo get_template_directory_uri(); ?>/img/flower5.jpg" width="217" height="225" /></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/flower6.jpg" width="217" height="225" /></li>
			<li><h4 id="plaque2">CLH009</h4></li>
			<li><h4 id="plaque2">CLH010</h4></li>
			<li><h4 id="plaque2">CLH011</h4></li>
        </ul>
		</div>
        
      </div>
      <div class="par alt" id="fourth">
        <div class="collectionarea">
		<h2 id="landscapetitle"><a href="#"><span></span></a></h2>

		<ul id="landscapeart">
        	<li><img src="<?php echo get_template_directory_uri(); ?>/img/landscape1.jpg" width="188" height="238" /></li>
           	<li><img src="<?php echo get_template_directory_uri(); ?>/img/landscape6.jpg" width="261" height="225" /></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/landscape2.jpg" width="188" height="238" /></li>
			<li><h4 id="plaquelandscape">CLH012</h4></li>
			<li><h4 id="plaquelandscape">CLH013</h4></li>
			<li><h4 id="plaquelandscape">CLH014</h4></li>	
		</ul>
		<ul id="landscapeartbottom">
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/landscape5.jpg" width="261" height="225" /></li>
           	<li><img src="<?php echo get_template_directory_uri(); ?>/img/landscape4.jpg" width="217" height="225" /></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/landscape3.jpg" width="186" height="236" /></li>
			<li><h4 id="plaquelandscape2">CLH015</h4></li>
			<li><h4 id="plaquelandscape2">CLH016</h4></li>
			<li><h4 id="plaquelandscape2">CLH017</h4></li>
        </ul>
		</div>
        
      </div>
	 <div class="par alt" id="fifth">
        <div class="portraitarea">
		<h2 id="portraittitle"><a href="#"><span></span></a></h2>

		<ul id="portraitart">
        	<li><img src="<?php echo get_template_directory_uri(); ?>/img/portrait1.jpg" width="182" height="235" /></li>
           	<li><img src="<?php echo get_template_directory_uri(); ?>/img/portrait2.jpg" width="182" height="235" /></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/portrait3.jpg" width="182" height="235" /></li>
			<li><h4 id="plaqueportrait">CLH018</h4></li>
			<li><h4 id="plaqueportrait">CLH019</h4></li>
			<li><h4 id="plaqueportrait">CLH020</h4></li>	
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/portrait4.jpg" width="182" height="235" /></li>
           	<li><img src="<?php echo get_template_directory_uri(); ?>/img/portrait5.jpg" width="182" height="235" /></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/portrait6.jpg" width="182" height="235" /></li>
			<li><h4 id="plaqueportrait2">CLH021</h4></li>
			<li><h4 id="plaqueportrait2">CLH022</h4></li>
			<li><h4 id="plaqueportrait2">CLH022</h4></li>	
			
        </ul>
		</div>
        
      </div>
      
     
      <hr/>
      <div class="par alt" id="sixth">
        <div class="collectionarea">
		<h2 id="pasteltitle"><a href="#"><span></span></a></h2>

		<ul id="pastelart">
        	<li><img src="<?php echo get_template_directory_uri(); ?>/img/pastel1.jpg" width="188" height="238" /></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/pastel2.jpg" width="188" height="238" /></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/pastel3.jpg" width="188" height="238" /></li>
			<li><h4 id="plaqueportrait">CLH023</h4></li>
			<li><h4 id="plaqueportrait">CLH024</h4></li>
			<li><h4 id="plaqueportrait">CLH025</h4></li>	
		</ul>
		<ul id="pastelartbottom">
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/pastel4.jpg" width="290" height="225" /></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/pastel5.jpg" width="290" height="225" /></li>
			<li><h4 id="plaquepastel2">CLH026</h4></li>
			<li><h4 id="plaquepastel">CLH027</h4></li>
        </ul>
		</div>
	</div>

	<hr/>
	<div class="par alt" id="seventh">
      <div class="collectionarea">
		<h2 id="contacttitle"><a href="#"><span></span></a></h2>
		<div id="contact">
<table width="400px" border="0" align="left" cellpadding="3" cellspacing="3">
<tbody>
      <tr>
        <td width="329" align="left" valign="top"><p>&nbsp;</p>
          <p>&nbsp;</p>
 
      <tr>
        <td width="329" align="left" valign="top"> <p class="about">As an artist I enjoy painting with oils in bright vibrant colours giving my work a modern, and slightly pop art feel. My work tends to focus mainly on subjects that are pleasing to the eye. I enjoy painting works that I feel will enhance the atmosphere, bring colour and excitement to a room or space.</p>
           <p class="about">From childhood I have had a love for art and I continue to paint today. I have sold a number of works to corporate companies and individuals alike. </p>
           <p class="about">I have had the chance to travel extensively over the years having been in the travel industry and I am inspired by my travels and often use those images in my work. My influences come from what I see and experience.</p>
           <p class="about">I fully enjoy having the variety of themes to paint , from portraits to landscapes and I feel my style remains recognizable even though the themes in my works are so different.</p>


          
          <p class="aboutsmall">Designed by Sajini Jose</a></p></td>
        </tr>
      
</tbody>
</table></div>

        
    </div>
	</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27860397-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  </body>

<!-- Mirrored from www.clholloway.co.za/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jul 2016 05:09:55 GMT -->
</html>
