<?php
/**
 * This is the BODY header include template.
 *
 * For a quick explanation of b2evo 2.0 skins, please start here:
 * {@link http://manual.b2evolution.net/Skins_2.0}
 *
 * This is meant to be included in a page template.
 *
 * @package evoskins
 * @subpackage pixel
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );


// ---------------------------- SITE HEADER INCLUDED HERE ----------------------------
// If site headers are enabled, they will be included here:
siteskin_include( '_site_body_header.inc.php' );
// ------------------------------- END OF SITE HEADER --------------------------------
?>

<div class="background-wrapper-picture">
<div id="wrapper">

<div id="header">
	
		<?php
			// ------------------------- "Header" CONTAINER EMBEDDED HERE --------------------------
			// Display container and contents:
			widget_container( 'header', array(
					// The following params will be used as defaults for widgets included in this container:
					'container_display_if_empty' => false, // If no widget, don't display container at all
					'container_start' => '<div id="logo" class="evo_container $wico_class$">',
					'container_end'   => '</div>',
					'block_start' => '<div class="evo_widget $wi_class$">',
					'block_end' => '</div>',
					'block_title_start' => '<h1>',
					'block_title_end' => '</h1>',
				) );
			// ----------------------------- END OF "Header" CONTAINER -----------------------------
		?>

		<?php
			// ------------------------- "Page Top" CONTAINER EMBEDDED HERE --------------------------
			// Display container and contents:
			widget_container( 'page_top', array(
					// The following params will be used as defaults for widgets included in this container:
					'container_display_if_empty' => false, // If no widget, don't display container at all
					'container_start' => '<div id="pagetop" class="evo_container $wico_class$">',
					'container_end'   => '</div>',
					'block_start' => '<div class="evo_widget $wi_class$">',
					'block_end' => '</div>',
					'block_display_title' => false,
					'list_start' => '<ul>',
					'list_end' => '</ul>',
					'item_start' => '<li>',
					'item_end' => '</li>',
				) );
			// ----------------------------- END OF "Page Top" CONTAINER -----------------------------
		?>

</div> <!-- end of id="header" -->

<div id="catnav">
	<div id="topfeed">
		<a href="<?php $Blog->disp( 'atom_url', 'raw' ) ?>"><img src="rsc/img/feed-trans.png" alt="Blog Name" width="65" height="24" /></a>

	</div> <!-- end of id="topfeed" -->

		<?php
			// ------------------------- "Menu" CONTAINER EMBEDDED HERE --------------------------
			// Display container and contents:
			widget_container( 'menu', array(
					// The following params will be used as defaults for widgets included in this container:
					'container_display_if_empty' => false, // If no widget, don't display container at all
					'container_start' => '<ul id="nav" class="evo_container $wico_class$">',
					'container_end'   => '</ul>',
					'block_start' => '',
					'block_end' => '',
					'block_display_title' => false,
					'list_start' => '',
					'list_end' => '',
					'item_start' => '<li class="evo_widget $wi_class$">',
					'item_end' => '</li>',
					'item_selected_start' => '<li class="selected evo_widget $wi_class$">',
					'item_selected_end'   => '</li>',
				) );
			// ----------------------------- END OF "Menu" CONTAINER -----------------------------
		?>

</div> <!-- end of id="catnav" -->

<div class="cleared"></div>