<?php
/**
 * This is the sidebar include template.
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
?>

<div id="sidebar_right">
	<?php
		// ------------------------- "Sidebar 2" CONTAINER EMBEDDED HERE --------------------------
		// Display container contents:
		widget_container( 'sidebar_2', array(
				// The following params will be used as defaults for widgets included in this container:
				'container_display_if_empty' => false, // If no widget, don't display container at all
				'container_start' => '<ul class="evo_container $wico_class$">',
				'container_end'   => '</ul>',
				// This will enclose each widget in a block:
				'block_start' => '<li class="evo_widget $wi_class$ sidebarbox">',
				'block_end' => '</li>',
				// This will enclose the title of each widget:
				'block_title_start' => '<h2>',
				'block_title_end' => '</h2>',
				// If a widget displays a list, this will enclose that list:
				'list_start' => '<ul>',
				'list_end' => '</ul>',
				// This will enclose each item in a list:
				'item_start' => '<li>',
				'item_end' => '</li>',
				// This will enclose sub-lists in a list:
				'group_start' => '<ul>',
				'group_end' => '</ul>',
				// This will enclose (foot)notes:
				'notes_start' => '<div class="notes">',
				'notes_end' => '</div> <!-- end of class="notes" -->',
			) );
		// ----------------------------- END OF "Sidebar 2" CONTAINER -----------------------------
	?>

	<?php
		// Please help us promote b2evolution and leave this logo on your blog:
		powered_by( array(
				'block_start' => '<div class="powered_by">',
				'block_end'   => '</div> <!-- end of class="powered_by" -->',
				// Check /rsc/img/ for other possible images -- Don't forget to change or remove width & height too
				'img_url'     => '$rsc$img/powered-by-b2evolution-120t.gif',
				'img_width'   => 120,
				'img_height'  => 32,
			) );
	?>

</div> <!-- end of id="sidebar_right" -->