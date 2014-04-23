<?php

/**
 * Shortcode handlers for rendering components from the ZURN Foundation 4 CSS framework.
 * 
 * @package foundationshortcodes
 */

class FoundationShortcode {
	
	/**
	*
	* $attributes      => array(type, closeable)
	* $enclosedContent => null
	* $parser          => ShortcodeParser instance
	* $tagName         => 'alert-box'
	*
	*/
	
	public static function AlertBoxShortcodeHandler($attributes, $enclosedContent, $parser, $tagName) {
		return '<div data-alert class="alert-box">' . $enclosedContent . '<a href="#" class="close">&times;</a></div>';
	}
	
	public static function PanelShortcodeHandler($attributes, $enclosedContent, $parser, $tagName) {
		return '<div class="panel">' . $enclosedContent . '</div>';
	}
	
	public static function FlexVideoShortcodeHandler($attributes, $enclosedContent, $parser, $tagName) {
		return '<div class="flex-video"><iframe width="420" height="315" src="http://www.youtube.com/embed/0_EW8aNgKlA" frameborder="0" allowfullscreen></iframe></div>';
	}
	
	// TODO
	
	// button
	
	// label
	
	// small segemnt header
	
	// blockquote
	
	// vcard
	
	// tooltip
	
	// visibility
	
}