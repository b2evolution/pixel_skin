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

<div id="morefoot">

		<?php
			// ------------------------- "Sidebar-h 1" CONTAINER EMBEDDED HERE --------------------------
			// Display container contents:
			widget_container( 'sidebar_h_1', array(
					// The following params will be used as defaults for widgets included in this container:
					'container_display_if_empty' => false, // If no widget, don't display container at all
					'container_start' => '<div class="col1"><ul class="evo_container $wico_class$">',
					'container_end'   => '</ul></div>',
					// This will enclose each widget in a block:
					'block_start' => '<li class="evo_widget $wi_class$">',
					'block_end' => '</li>',
					// This will enclose the title of each widget:
					'block_title_start' => '<h3>',
					'block_title_end' => '</h3>',
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
					'notes_end' => '</div> <!-- end of class="notes -->',
				) );
			// ----------------------------- END OF "Sidebar-h 1" CONTAINER -----------------------------
		?>

		<?php
			// ------------------------- "Sidebar-h 2" CONTAINER EMBEDDED HERE --------------------------
			// Display container contents:
			widget_container( 'sidebar_h_2', array(
					// The following params will be used as defaults for widgets included in this container:
					'container_display_if_empty' => false, // If no widget, don't display container at all
					'container_start' => '<div class="col2"><ul class="evo_container $wico_class$">',
					'container_end'   => '</ul></div>',
					// This will enclose each widget in a block:
					'block_start' => '<li class="evo_widget $wi_class$">',
					'block_end' => '</li>',
					// This will enclose the title of each widget:
					'block_title_start' => '<h3>',
					'block_title_end' => '</h3>',
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
			// ----------------------------- END OF "Sidebar-h 2" CONTAINER -----------------------------
		?>

		<?php
			// ------------------------- "Sidebar-h 3" CONTAINER EMBEDDED HERE --------------------------
			// Display container contents:
			widget_container( 'sidebar_h_3', array(
					// The following params will be used as defaults for widgets included in this container:
					'container_display_if_empty' => false, // If no widget, don't display container at all
					'container_start' => '<div class="col3"><ul class="evo_container $wico_class$">',
					'container_end'   => '</ul></div>',
					// This will enclose each widget in a block:
					'block_start' => '<li class="evo_widget $wi_class$">',
					'block_end' => '</li>',
					// This will enclose the title of each widget:
					'block_title_start' => '<h3>',
					'block_title_end' => '</h3>',
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
			// ----------------------------- END OF "Sidebar-h 3" CONTAINER -----------------------------
		?>

	<div class="cleared"></div>
</div> <!-- end of id="morefoot" -->