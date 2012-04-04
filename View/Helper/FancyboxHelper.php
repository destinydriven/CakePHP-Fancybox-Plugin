<?php
/**
 *
 * Helper for FancyBox (FancyApps) using the jQuery library.
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2012, destinydriven (Kurn La Montagne)
 * 
 * Author email: d3stinydriv3n@gmail.com
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 * 
 * FancyApps (FancyBox) url: http://fancyapps.com/fancybox/
 *
 */
App::uses('AppHelper', 'View/Helper');

class FancyboxHelper extends AppHelper {
	
	/**
	 * Other helpers used by FancyBoxHelper
	 *
	 * @var array
	 */
	public $helpers = array( 'Html', 'Js' );
	
	/**
	 * Name of class selector for elements you wish to open with the fancybox
	 *
	 * @var string
	 */
	public $class = ''; 	
	
	/**
	 * Constructor.
	 * 
	 * @param View
	 * @param $options array
	 */
	public function __construct(View $View, $options = array()){
	  parent::__construct($View, $options);
	  //$options = array('className' => 'fancybox.image','class' => 'fancybox', 'title'=>'My Title', 'rel'=>'gallery1');	  
	}
	
	/**
	 * Set properties - className(fancybox.ajax, fancybox.inline, fancybox.image, fancybox.iframe), rel, title, class 
	 *
	 * @param array $options
	 */
	public function setProperties($options = array())
	{
		if(isset($options['class']))
		{
			$this->class = $options['class'];
		}
		$this->options = $options;
	}
	
	public function setPreviewContent($preview = null)
	{
		$this->options['previewContent'] = $preview;
	}
	
	public function setMainContent($content = null)
	{
		$this->options['mainContent'] = $content;
	}
	
	protected function reset()
	{
		$this->options = array();
	}
	
	public function output()
	{
		extract($this->options);

		if(isset($title))
		{
			$title = 'title="'.$title.'"';
		}		
		/* fancyBox will try to guess content type from href attribute but you can specify it directly
		   by adding className (fancybox.image, fancybox.inline, fancybox.iframe, fancybox.ajax ) 
		   in $options array 
		*/
		if(isset($className) && !empty($className))
		{
			$this->class.= ' '.$className;
		}
		if(isset($rel))
		{
			$rel = 'rel='.$rel;
		}		
		if(!isset($mainContent)){
		  if($className == 'fancybox.ajax' && isset($ajaxUrl))
			{
				$ajaxUrl = $this->Html->url($ajaxUrl);
				$href = $ajaxUrl;
				$output = '<a class="'.$this->class.'" href="'.$href.'" '.$title.'>'.$previewContent.'</a>';		
			}
			 return $output;		
		}
		elseif($mainContent != null){  // single element passed as content
		
			if(is_array($mainContent)){  // multiple elements passed as content	
			$output = array();
			foreach ($mainContent as $key => $content) {
	            $title = 'title='.$key;
				$href = $content;
				$output[] = '<a class="'.$this->class.'"'.$rel.' href="'.$href.'" '.$title.'>'.$key.'</a>';
			}
			if($className == 'fancybox.inline')
			{
				$href = ' #inline1';			
				$output[] = '<div id="inline1" style="display:none;">'.$mainContent.'</div>';
			}
				// this part is really messy, I know			
				foreach ($output as $out) {
					echo $out.'<br/>';
			    }
				$this->reset();
				return;			
			}				
			if( isset($className) && !empty($className) ){
				if( $className == 'fancybox.inline')
				{	           
					$href= ' #inline1';					
				}
				if( $className == 'fancybox.image' || $className == 'fancybox.iframe')
				{
		            $href =  $mainContent;	           				
				}						
			}			
				$output = '<a class="'.$this->class.'"'.$rel.' href="'.$href.'" '.$title.'>'.$previewContent.'</a>';	
		
				$output.= '<div id="inline1" style="width:500px;display: none;">'.$mainContent.'</div>';
				$this->reset();	
	 			return $output;
		}

	}
	
	function beforeRender($viewFile)
	{
		$this->Html->css( array(
					 'Fancybox.jquery.fancybox.css', 
					 'Fancybox.helpers/jquery.fancybox-buttons.css',
					 'Fancybox.helpers/jquery.fancybox-thumbs.css'
					), null, array('inline' => FALSE )
				);		
				
		$this->Html->script( array(
					   'Fancybox.jquery.fancybox.pack.js',
					   'Fancybox.jquery.fancybox-buttons.js',
					   'Fancybox.jquery.fancybox-thumbs.js',
					   'Fancybox.jquery.fancybox.pack.js',
					   'Fancybox.jquery.mousewheel-3.0.6.pack', 
					   'Fancybox.invoke.fancybox'
					  ), 
					 array(  'inline' => FALSE )
				    );
		
    }
}
?>