<div id='inline-example'>
	<h2> Example #1 Inline Content</h2> 
<?php


  $src1 = '<h3>Sample Inline Content</h3>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor
			facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. 
			Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at
			blandit mi eleifend aliquam. Nunc enim ipsum, vehicula non pretium varius, cursus ac tortor.
			Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor in.
			Phasellus dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus sem, id
			aliquam diam varius ac. Maecenas nisl nunc, molestie vitae eleifend vel, iaculis sed magna. 
			Aenean tempus lacus vitae orci posuere porttitor eget non felis. Donec lectus elit, aliquam
			nec eleifend sit amet, vestibulum sed nunc.
		</p>';
  
  $this->Fancybox->setProperties( array( 
  			  		 'class' => 'fancybox1',
  			  		 'className' => 'fancybox.inline',
  			  		 'title'=>'Inline Content',
  			  		 'rel' => 'gallery1'
  					)
								);
  $this->Fancybox->setPreviewContent('Click for Inline Content'); // the link which will trigger fancybox on click
  $this->Fancybox->setMainContent($src1); // the content which will be shown in Fancybox
  echo $this->Fancybox->output();		

?>
</div>
<div id="ajax-example">
	<h2>Example #2 Ajax Content </h2> 
<?php	  
  $this->Fancybox->setProperties( array( 
  			  		 'class' => 'fancybox2',
  			  		 'className' => 'fancybox.ajax',
  			  		 'title'=>'Ajax Content',
  				         'ajaxUrl'=>'/fancybox/files/ajax.txt'
  				       )
				);
  $this->Fancybox->setPreviewContent('Click to Ajax Content'); 
  echo $this->Fancybox->output();
?>
</div>

<div id="single-image">
	<h2>Example #3 Single Image </h2> 
<?php
  $src3 = 'http://farm7.staticflickr.com/6099/6359411189_0ffbb4719f_b.jpg';
  		  
  $this->Fancybox->setProperties( array( 
  			  		 'class' => 'fancybox3',
  			  		 'className' => 'fancybox.image',
  			  		 'title'=>'Single Image',
  			  		 'rel' => 'gallery1'
  				       )
				);
  $this->Fancybox->setPreviewContent('Click to View Image'); 
  $this->Fancybox->setMainContent($src3); 
  echo $this->Fancybox->output();		

?>
</div>

<div id="gallery">
	<h2>Example #4 Image  Gallery</h2> 
	
<?php

  $src4 = array(
	   	'ImageOne'   => 'http://farm7.staticflickr.com/6106/6370118965_74be1a1422_b.jpg',
		'ImageTwo'   => 'http://farm7.staticflickr.com/6091/6364162335_43a8b9bed1_b.jpg',
		'ImageThree' => 'http://farm7.staticflickr.com/6032/6370797521_74a61aec56_b.jpg',
		'ImageFour'  => 'http://farm7.staticflickr.com/6099/6359411189_0ffbb4719f_b.jpg'
	       ); 
  		  
  $this->Fancybox->setProperties( array( 
  			  		 'class' => 'fancybox4',
  			  		 'className' => 'fancybox.image',
  			  		 'title'=>'Awesomeness',
  			  		 'rel' => 'gallery1', 
  				       )
				);
  $this->Fancybox->setPreviewContent('Click to View Gallery');
  $this->Fancybox->setMainContent($src4);
  echo($this->Fancybox->output());		

?>
</div>

<div id="flash">
	<h2>Example #5 SWF (Flash) </h2> 
	
<?php
  $src5 = 'http://www.adobe.com/jp/events/cs3_web_edition_tour/swfs/perform.swf';
 
  $this->Fancybox->setProperties( array( 
  			  		 'class' => 'fancybox5',
  			  		 'className' => 'fancybox.iframe',
  			  		 'title'=>'SWF Example',
  			  		 'rel' => 'gallery1'
  				       )
				);
  $this->Fancybox->setPreviewContent('Click to View SWF'); 
  $this->Fancybox->setMainContent($src5);
  echo($this->Fancybox->output());		

?>
</div>

<div id="youtube">
	<h2>Example #6 Youtube (iframe) </h2> 
	
<?php
  $src6 = 'http://www.youtube.com/embed/opj24KnzrWo';
 
  $this->Fancybox->setProperties( array( 
  			  		 'class' => 'fancybox6',
  			  		 'className' => 'fancybox.iframe',
  			  		 'title'=>'Youtube Example in iframe',
  			  		 'rel' => 'media-gallery'
  				       )
				);
  $this->Fancybox->setPreviewContent('Click to view Youtube Video');
  $this->Fancybox->setMainContent($src6); 
  echo($this->Fancybox->output());	

?>
<p>
   N.B. For youtube links, if you are not using the embed URL you may get  Error: Refused to display document
   because display forbidden by X-Frame-Options 
</p> 
</div>
<div id="vimeo">
	<h2>Example #7 Vimeo (iframe) </h2> 
	
<?php
  $src7 = 'http://player.vimeo.com/video/25634903?hd=1&autoplay=1&show_title=1&show_byline=1&show_portrait=0&color=&fullscreen=1';
 
  $this->Fancybox->setProperties( array( 
  			  		 'class' => 'fancybox7',
  			  		 'className' => 'fancybox.iframe',
  			  		 'title'=>'Vimeo Example in iframe',
  			  		 'rel' => 'media-gallery'
  				       )
				);
  $this->Fancybox->setPreviewContent('Click to view Vimeo Video'); 
  $this->Fancybox->setMainContent($src7); 
  echo($this->Fancybox->output());	

?>
</div>
<div id="dailymotion">
	<h2>Example #8 Dailymotion (iframe) </h2> 
	
<?php
  $src8 = 'http://www.dailymotion.com/embed/video/xoeylt_electric-guest-this-head-i-hold_music';
 
  $this->Fancybox->setProperties( array( 
  			  		 'class' => 'fancybox8',
  			  		 'className' => 'fancybox.iframe',
  			  		 'title'=>'Dailymotion Example in iframe',
  			  		 'rel' => 'media-gallery'
  				       )
				);
  $this->Fancybox->setPreviewContent('Click to view Dailymotion Video'); 
  $this->Fancybox->setMainContent($src8); 
  echo($this->Fancybox->output());	

?>
</div>
<div id="googlemaps">
	<h2>Example #9 GoogleMaps (iframe) </h2> 
	
<?php
  $src9 = 'http://maps.google.com/?output=embed&f=q&source=s_q&hl=en&geocode=&q=London+Eye,+County+Hall,+Westminster+Bridge+Road,+London,+United+Kingdom&hl=lv&ll=51.504155,-0.117749&spn=0.00571,0.016512&sll=56.879635,24.603189&sspn=10.280244,33.815918&vpsrc=6&hq=London+Eye&radius=15000&t=h&z=17';
 
  $this->Fancybox->setProperties( array( 
  			  		 'class' => 'fancybox9',
  			  		 'className' => 'fancybox.iframe',
  			  		 'title'=>'GoogleMaps Example in iframe',
  			  		 'rel' => 'media-gallery'
  				       )
				);
  $this->Fancybox->setPreviewContent('Click to view GoogleMap'); 
  $this->Fancybox->setMainContent($src9); 
  echo($this->Fancybox->output());	

?>
</div>
