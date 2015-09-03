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

	<div class="col1">
		<ul>
		<?php
			// ------------------------- "Sidebar" CONTAINER EMBEDDED HERE --------------------------
			// Display container contents:
			skin_container( NT_('Sidebar-h 1'), array(
					// The following (optional) params will be used as defaults for widgets included in this container:
					// This will enclose each widget in a block:
					'block_start' => '<li class="$wi_class$">',
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
			// ----------------------------- END OF "Sidebar" CONTAINER -----------------------------
		?>
		</ul>
	</div> <!-- end of class="col1" -->

	<div class="col2">
		<ul>
		<?php
			// ------------------------- "Sidebar" CONTAINER EMBEDDED HERE --------------------------
			// Display container contents:
			skin_container( NT_('Sidebar-h 2'), array(
					// The following (optional) params will be used as defaults for widgets included in this container:
					// This will enclose each widget in a block:
					'block_start' => '<li class="$wi_class$">',
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
			// ----------------------------- END OF "Sidebar" CONTAINER -----------------------------
		?>
		</ul>
	</div> <!-- end of class="col2" -->

	<div class="col3">
		<ul>
		<?php
			// ------------------------- "Sidebar" CONTAINER EMBEDDED HERE --------------------------
			// Display container contents:
			skin_container( NT_('Sidebar-h 3'), array(
					// The following (optional) params will be used as defaults for widgets included in this container:
					// This will enclose each widget in a block:
					'block_start' => '<li class="$wi_class$">',
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
			// ----------------------------- END OF "Sidebar" CONTAINER -----------------------------
		?>
		</ul>
	</div> <!-- end of class="col3" -->

	<div class="cleared"></div>
</div> <!-- end of id="morefoot" -->