<?php

/**
 * Register Alert Box Shortcode
 */
ShortcodeParser::get('default')->register('alertbox', array('FoundationShortcode', 'AlertBoxShortcodeHandler'));

/**
 * Register Panel Shortcode
 */
ShortcodeParser::get('default')->register('panel', array('FoundationShortcode', 'PanelShortcodeHandler'));

/**
 * Register Flex Video Shortcode
 */
ShortcodeParser::get('default')->register('flexvideo', array('FoundationShortcode', 'FlexVideoShortcodeHandler'));