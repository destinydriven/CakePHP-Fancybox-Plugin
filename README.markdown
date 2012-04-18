-----------------------------------------
WHAT IS THE CAKEPHP 2.* FANCYBOX PLUGIN?
-----------------------------------------

The CakePHP 2.* Fancybox Plugin allows you to easily integrate
the jQuery based Fancybox plugin with your CakePHP 
application for a nice and elegant way to add zooming functionality
for images, html content and multi-media on your webpages.

The plugin brings the following mixed licensed software (see
LICENCE) together to create a simple and sleek experience:

-CakePHP 2.0 or greater (http://cakephp.org)
 Required by this plugin

-Fancybox Plugin (http://www.fancyapps.com/fancybox/)
 The jQuery based Fancybox ( Creative Commons Attribution-NonCommercial 3.0 license )

-jQuery (http://jquery.com)
 Required by Fancybox


----
WHY?
----

I used Thickbox on a previous cakephp project and realised that the 
Thickbox plugin is no longer being mantained. While working on a new
CakePHP project, I discovered FancyBox2 which is a completely
rewritten version with new features and updated graphics.
From that project I decided to modify an existing Thickbox Helper
from http://www.gigapromoters.com/blog/2009/02/11/thickbox-helper-for-cakephp/
and turn it into a plugin because there didn't appear to be a clean CakePHP
Fancybox plugin out there.

In it's current form this plugin is very basic and I am looking to expand its
functionality to cover the full range of features offered by Fancybox


-------------------------
THE INSTALLATION PROCESS
-------------------------

NOTE: These instructions assume you already have a working copy
of CakePHP 2.* with a database connection on your web server (db connection optional really).

You can read up on CakePHP installation and DB config here:
http://book.cakephp.org/#!/view/913/Development AND
http://book.cakephp.org/#!/view/922/Database-Configuration


INSTALLED IN 5 SIMPLE STEPS

1. Download or fork the CakePHP FancyBox Plugin at:
   https://github.com/destinydriven/CakePHP-Fancybox-Plugin

2. Create the folder 'Fancybox' in your 'app/Plugin' directory 
   and copy the Controller, View, and webroot folders into it.

3. Download jQuery (jquery-1.7.2.min.js) and upload to your 'app/webroot/js' directory 
   and load in your app/View/Loyouts/default.ctp using:
	echo $this->Html->script('jquery-1.7.2.min');   
   Or you can include it from the Google AJAX Libraries content delivery network using:   
	echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');   
   This fulfills the jQuery requirement since the plugin does not load jquery for you.
   
4. In your Cake installation, edit 'app/Config/bootstrap.php' and add the line 'CakePlugin::load('Fancybox');' 
   at the bottom.

5. Navigate to your http://yoursite.com/fancybox to view the examples


THAT'S IT!

---------------------------------------
HOW TO USE FANCYBOX PLUGIN IN YOUR APP
---------------------------------------

1. To use it, just include the plugin's helper in your controller:

	class MyController extends AppController {
		public $helpers = array('Html','Js', 'Fancybox.Fancybox');	
	} 

2. For inline content, in your selected view you can do:

	$src1 = '<h3>Sample Inline Content</h3>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor
			facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare.
			Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at
			blandit mi eleifend aliquam. Nunc enim ipsum, vehicula non pretium varius, cursus ac tortor.
			Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor
			in. Phasellus dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus 
			sem, id aliquam diam varius ac. Maecenas nisl nunc, molestie vitae eleifend vel, iaculis 
			sed magna. Aenean tempus lacus vitae orci posuere porttitor eget non felis. Donec lectus 
			elit, aliquam nec eleifend sit amet, vestibulum sed nunc.
		</p>';
		
	$this->Fancybox->setProperties( array( 
		 'class' => 'fancybox1',
		 'className' => 'fancybox.inline',
		 'title'=>'Inline Content',
		 'rel' => 'gallery1'
		 )
	);
	
	$this->Fancybox->setPreviewContent('Click for Inline Content');
	
	$this->Fancybox->setMainContent($src1); // the content which will be shown in Fancybox
	
	echo $this->Fancybox->output();  
		  
3. For ajax content, in your selected view you can do:

	$this->Fancybox->setProperties( array( 
		 'class' => 'fancybox2',
		 'className' => 'fancybox.ajax',
		 'title'=>'Ajax Content',
		 'rel' => 'gallery1', 
	     	 'ajaxUrl'=>'/files/ajax.txt'
	     )
	);
	$this->Fancybox->setPreviewContent('Click to view Ajax Content'); 
	
	$this->Fancybox->setMainContent($src2); 
	
	echo $this->Fancybox->output();
  
4. For single image, in your selected view you can do:

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

5. For image gallery, in your selected view you can do:

	// create an associative array of image titles and their paths eg. array('title' => 'http//path_to_image/image.png');  
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
		 'rel' => 'gallery1' 
	     )
	);
	
	$this->Fancybox->setPreviewContent('Click to View Gallery'); 
	
	$this->Fancybox->setMainContent($src4); 
	
	echo $this->Fancybox->output();
		  
6. For flash (swf) content, in your selected view you can do:

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
	
	echo $this->Fancybox->output();  

7. For Youtube content, in your selected view you can do:

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
	
	echo $this->Fancybox->output();  

8. For Vimeo content, in your selected view you can do:
 
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
	
	echo $this->Fancybox->output();
  
		  
9. For Dailymotion content, in your selected view you can do:

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
	
	echo $this->Fancybox->output();  

10. For GoogleMaps content, in your selected view you can do:

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
	
    echo $this->Fancybox->output(); 

Lastly take a look at webroot/js/invoke.fancybox.js to see how to structure your jquery calls depending on your desired
options. Feel free to edit this file but be careful to enure that your 'class' matches what you pass to the plugin in the view.

		  
	