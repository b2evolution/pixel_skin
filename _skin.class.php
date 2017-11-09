<?php
/**
 * This file implements a class derived of the generic Skin class in order to provide custom code for
 * the skin in this folder.
 *
 * This file is part of the b2evolution project - {@link http://b2evolution.net/}
 *
 * @package skins
 * @subpackage pixel
 *
 * @version $Id: _skin.class.php,v 1.3 2009/05/24 21:14:38 fplanque Exp $
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );

/**
 * Specific code for this skin.
 *
 * ATTENTION: if you make a new skin you have to change the class name below accordingly
 */
class pixel_Skin extends Skin
{
	var $version = '7.1.1';

	/**
	* Get default name for the skin.
	* Note: the admin can customize it.
	*/
	function get_default_name()
	{
		return 'Pixel Skin';
	}


	/**
	 * Get default type for the skin.
	 */
	function get_default_type()
	{
		return 'rwd';
	}


	/**
	 * What evoSkins API does has this skin been designed with?
	 *
	 * This determines where we get the fallback templates from (skins_fallback_v*)
	 * (allows to use new markup in new b2evolution versions)
	 */
	function get_api_version()
	{
		return 6;
	}


	/**
	 * Get supported collection kinds.
	 *
	 * This should be overloaded in skins.
	 *
	 * For each kind the answer could be:
	 * - 'yes' : this skin does support that collection kind (the result will be was is expected)
	 * - 'partial' : this skin is not a primary choice for this collection kind (but still produces an output that makes sense)
	 * - 'maybe' : this skin has not been tested with this collection kind
	 * - 'no' : this skin does not support that collection kind (the result would not be what is expected)
	 * There may be more possible answers in the future...
	 */
	public function get_supported_coll_kinds()
	{
		$supported_kinds = array(
				'main' => 'partial',
				'std' => 'yes',		// Blog
				'photo' => 'no',
				'forum' => 'no',
				'manual' => 'no',
				'group' => 'maybe',  // Tracker
				// Any kind that is not listed should be considered as "maybe" supported
			);

		return $supported_kinds;
	}


	/**
	 * Get the container codes of the skin main containers
	 *
	 * This should NOT be protected. It should be used INSTEAD of file parsing.
	 * File parsing should only be used if this function is not defined
	 *
	 * @return array
	 */
	function get_declared_containers()
	{
		// Note: second param below is the ORDER
		return array(
				'page_top'                  => array( NT_('Page Top'), 2 ),
				'header'                    => array( NT_('Header'), 10 ),
				'menu'                      => array( NT_('Menu'), 15 ),
				'front_page_main_area'      => array( NT_('Front Page Main Area'), 40 ),
				'item_single_header'        => array( NT_('Item Single Header'), 50 ),
				'item_single'               => array( NT_('Item Single'), 51 ),
				'item_page'                 => array( NT_('Item Page'), 55 ),
				'contact_page_main_area'    => array( NT_('Contact Page Main Area'), 60 ),
				'sidebar'                   => array( NT_('Sidebar'), 80 ),
				'sidebar_2'                 => array( NT_('Sidebar 2'), 90 ),
				'sidebar_w_1'               => array( NT_('Sidebar-w-1'), 91 ),
				'sidebar_h_1'               => array( NT_('Sidebar-h 1'), 92 ),
				'sidebar_h_2'               => array( NT_('Sidebar-h 2'), 93 ),
				'sidebar_h_3'               => array( NT_('Sidebar-h 3'), 94 ),
				'user_profile_left'         => array( NT_('User Profile - Left'), 110 ),
				'user_profile_right'        => array( NT_('User Profile - Right'), 120 ),
				'404_page'                  => array( NT_('404 Page'), 130 ),
			);
	}


	/**
	* Get definitions for editable params
	*
	* @see Plugin::GetDefaultSettings()
	* @param local params like 'for_editing' => true
	*/
	function get_param_definitions( $params )
	{
		$r = array_merge( array(
			'colorbox' => array(
				'label' => T_('Colorbox Image Zoom'),
				'note' => T_('Check to enable javascript zooming on images (using the colorbox script)'),
				'defaultvalue' => 1,
				'type' => 'checkbox',
			),
			'gender_colored' => array(
				'label' => T_('Display gender'),
				'note' => T_('Use colored usernames to differentiate men & women.'),
				'defaultvalue' => 0,
				'type' => 'checkbox',
			),
			'bubbletip' => array(
				'label' => T_('Username bubble tips'),
				'note' => T_('Check to enable bubble tips on usernames'),
				'defaultvalue' => 0,
				'type' => 'checkbox',
			),
			'html5_support'	=>	array(
				'label'		=>	T_('HTML5'),
				'defaultvalue'	=>	'1',
				'note'		=>	'activate HTML5 support across all browsers (as of 08/08/2009)',
				'type'		=>	'checkbox'
			),
		), parent::get_param_definitions( $params ) );
		return $r;
	}

	/**
	* Get ready for displaying the skin.
	*
	* This may register some CSS or JS...
	*/
	function display_init()
	{
		// Request some common features that the parent function (Skin::display_init()) knows how to provide:
		parent::display_init( array(
				'jquery',                  // Load jQuery
				'font_awesome',            // Load Font Awesome (and use its icons as a priority over the Bootstrap glyphicons)
				'bootstrap',               // Load Bootstrap (without 'bootstrap_theme_css')
				'bootstrap_evo_css',       // Load the b2evo_base styles for Bootstrap (instead of the old b2evo_base styles)
				'bootstrap_messages',      // Initialize $Messages Class to use Bootstrap styles
				'style_css',               // Load the style.css file of the current skin
				'colorbox',                // Load Colorbox (a lightweight Lightbox alternative + customizations for b2evo)
				'bootstrap_init_tooltips', // Inline JS to init Bootstrap tooltips (E.g. on comment form for allowed file extensions)
				'disp_auto',               // Automatically include additional CSS and/or JS required by certain disps (replace with 'disp_off' to disable this)
			) );

		// Add CSS:
		require_css( 'rsc/css/item.css', 'relative' );
		require_css( 'rsc/css/style.css', 'relative' );

		// Add custom CSS:
		$custom_css	=	'';
		$html5support	=	'';

		if( $this->get_setting('html5_support') == '1' )
		{	// HTML5 Support
			$html5support .= '
	<!--[if IE]>
		<script src="rsc/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="rsc/css/html5.css" type="text/css" />
			';
		}

		$custom_css = ''.$html5support."\n";
		add_headline( $custom_css );

		// Colorbox (a lightweight Lightbox alternative) allows to zoom on images and do slideshows with groups of images:
		if( $this->get_setting("colorbox") )
		{
			require_js_helper( 'colorbox', 'blog' );
		}
	}
}
?>