<?php
/***
* Plugin Name: Simple Bible Verse via Shortcode
* Plugin URI: http://DannyCarlton.com/sbvs
* Description: Embed Bible verses in your posts!
* Version: 1.1
* Author: Danny Carlton
* Author URI: http://DannyCarlton.com
* Developer: Danny Carlton
* Text Domain: simple-bible-verse-via-shortcode
***/

	add_shortcode('verse', 'verseShortcode');
	function verseShortcode($atts)
		{
		global $wp_filesystem;
	 	$atts = shortcode_atts(array(
	 		'reference' => '',
			'ref'				=> 'John 3:16',
			'link'			=> 'false',
			'container'	=> 'p'
		 	), $atts);
		extract($atts);
		if(!$reference){$reference=$ref;}
		$reference=urlencode($reference);
		$url= "https://phpbible.org/search/json_plain.php?keyword=$reference";
#		echo "$url<br>";
		$data=wp_remote_get($url);
#		echo "<pre>";
#		print_r($data);
#		echo "</pre>";
		$dataVerse = json_decode($data['body'],true);
		extract($dataVerse);
		if($link=='true')
			{
			$reference="<a href=\"$short_url\" target=\"_blank\">$reference</a>";
			}
		if($container!='false' or $container!='0')
			{
			$data = "<$container>&ldquo;$passage&rdquo;&mdash;$reference</$container>";				
			}
		else
			{
			$data = "&ldquo;$passage&rdquo;&mdash;$reference";					
			}
		
		return $data;
		}




