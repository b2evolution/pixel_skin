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


		// ------------------------- "Sidebar-w-1" CONTAINER EMBEDDED HERE --------------------------
		// Display container contents:
		widget_container( 'sidebar_w_1', array(
				// The following params will be used as defaults for widgets included in this container:
				'container_display_if_empty' => false, // If no widget, don't display container at all
				'container_start' => '<div id="sidebar_full"><ul class="evo_container $wico_class$">',
				'container_end'   => '</ul></div>',
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
		// ----------------------------- END OF "Sidebar-w-1" CONTAINER -----------------------------
?>