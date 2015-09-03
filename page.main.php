<?php
/**
 * This is the main/default page template.
 *
 * For a quick explanation of b2evo 2.0 skins, please start here:
 * {@link http://manual.b2evolution.net/Skins_2.0}
 *
 * The main page template is used to display the blog when no specific page template is available
 * to handle the request (based on $disp).
 *
 * @package evoskins
 * @subpackage pixel
 *
 * @version $Id: page.main.php,v 1.6 2008/04/15 21:53:31 fplanque Exp $
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );

if( version_compare( $app_version, '3.0' ) < 0 )
{ // Older skins (versions 2.x and above) should work on newer b2evo versions, but newer skins may not work on older b2evo versions.
	die( 'This skin is designed for b2evolution 3.0 and above. Please <a href="http://b2evolution.net/downloads/index.html">upgrade your b2evolution</a>.' );
}

// This is the main template; it may be used to display very different things.
// Do inits depending on current $disp:
skin_init( $disp );


// -------------------------- HTML HEADER INCLUDED HERE --------------------------
skin_include( '_html_header.inc.php', array() );
// -------------------------------- END OF HEADER --------------------------------


// ------------------------- BODY HEADER INCLUDED HERE --------------------------
skin_include( '_body_header.inc.php' );
// Note: You can customize the default BODY header by copying the generic
// /skins/_body_footer.inc.php file into the current skin folder.
// ------------------------------- END OF HEADER --------------------------------
?>

<div id="main">

	<div id="contentwrapper">

	<div id="content">

	<?php
		// ------------------------- MESSAGES GENERATED FROM ACTIONS -------------------------
		messages( array(
			'block_start' => '<div class="action_messages">',
			'block_end'   => '</div> <!-- end of class="action_messages" -->',
		) );
		// --------------------------------- END OF MESSAGES ---------------------------------
	?>


	<?php
		// Display message if no post:
		display_if_empty();

		while( $Item = & mainlist_get_item() )
		{	// For each blog post, do everything below up to the closing curly brace "}"
		?>
		<div id="<?php $Item->anchor_id() ?>" class="post post<?php $Item->status_raw() ?>" lang="<?php $Item->lang() ?>">

			<?php
				$Item->locale_temp_switch(); // Temporarily switch to post locale (useful for multilingual blogs)
			?>

			<h2 class="topTitle"><?php $Item->title(); ?></h2>

			<p class="postinfo">
			<?php
			      	$Item->author( array(
						'before'       => T_('by').' ',
						'after'        => ' ',
					) );
				$Item->issue_time( array(
						'before'      => /* TRANS: date */ T_('on '),
						'after'       => '',
						'time_format' => 'M.d, Y'.',',
					) );
				$Item->categories( array(
						'before'          => ''.T_('under '),
						'after'           => ' ',
						'include_main'    => true,
						'include_other'   => true,
						'include_external'=> true,
						'link_categories' => true,
					) );
				$Item->edit_link( array( // Link to backoffice for editing
						'before'    => ' | ',
						'after'     => '',
					) );
			?>
			</p>

			<?php
				// ---------------------- POST CONTENT INCLUDED HERE ----------------------
				skin_include( '_item_content.inc.php', array(
						'image_size'	=>	'fit-400x320',
					) );
				// Note: You can customize the default item feedback by copying the generic
				// /skins/_item_feedback.inc.php file into the current skin folder.
				// -------------------------- END OF POST CONTENT -------------------------
			?>

			<span class="topComments">
			<?php
				// Link to comments, trackbacks, etc.:
				$Item->feedback_link( array(
						'type' => 'feedbacks',
						'link_before' => '',
						'link_after' => '',
						'link_text_zero' => '#',
						'link_text_one' => '#',
						'link_text_more' => '#',
						'link_title' => '#',
						'use_popup' => false,
					) );
			?>
			</span>

			<?php
				// List all tags attached to this post:
				$Item->tags( array(
						'before' =>         '<span class="posttags">'.T_('<em>:</em>').'',
						'after' =>          '</span>',
						'separator' =>      ', ',
					) );
			?>
			<div class="cleared"></div>
		</div> <!-- end of id="item_" -->

		<div id="comments">
		<?php
			// ------------------ FEEDBACK (COMMENTS/TRACKBACKS) INCLUDED HERE ------------------
			skin_include( '_item_feedback.inc.php', array(
					'before_section_title' => '<h3 id="commentstitle">',
					'after_section_title'  => '</h3>',
					'form_title_start' => '<h3 class="comment_form_title">',
					'form_title_end'  => '</h3>',
				) );
			// Note: You can customize the default item feedback by copying the generic
			// /skins/_item_feedback.inc.php file into the current skin folder.
			// ---------------------- END OF FEEDBACK (COMMENTS/TRACKBACKS) ---------------------
		?>
		</div> <!-- end of id="comments" -->

		<?php
			locale_restore_previous();	// Restore previous locale (Blog locale)
		}
	?>

	<?php
		// ------------------- PREV/NEXT POST LINKS (SINGLE POST MODE) -------------------
		item_prevnext_links( array(
				'block_start'	=> '<div id="nextprevious">',
				'prev_start'		=> '<div class="floatleft">',
				'prev_end'		=> '</div> <!-- end of class="floatleft" -->',
				'next_start'		=> '<div class="floatright">',
				'next_end'		=> '</div> <!-- end of class="floatright" -->',
				'block_end' => '<div class="cleared"></div></div> <!-- end of id="nextprevious" -->',
			) );
		// ------------------------- END OF PREV/NEXT POST LINKS -------------------------
	?>

	</div> <!-- end of id="content" -->
	</div> <!-- end of id="contentwrapper" -->


<?php
// ------------------------- SIDEBAR INCLUDED HERE --------------------------
skin_include( '_sidebar_right.inc.php' );
// Note: You can customize the default BODY footer by copying the
// _body_footer.inc.php file into the current skin folder.
// ----------------------------- END OF SIDEBAR -----------------------------
?>

	<div class="cleared"></div>
</div> <!-- end of id="main" -->

<?php
// ------------------------- SIDEBAR INCLUDED HERE --------------------------
skin_include( '_sidebar_bottom.inc.php' );
// Note: You can customize the default BODY footer by copying the
// _body_footer.inc.php file into the current skin folder.
// ----------------------------- END OF SIDEBAR -----------------------------
?>


<?php
// ------------------------- BODY FOOTER INCLUDED HERE --------------------------
skin_include( '_body_footer.inc.php' );
// Note: You can customize the default BODY footer by copying the
// _body_footer.inc.php file into the current skin folder.
// ------------------------------- END OF FOOTER --------------------------------
?>


<?php
// ------------------------- HTML FOOTER INCLUDED HERE --------------------------
skin_include( '_html_footer.inc.php' );
// Note: You can customize the default HTML footer by copying the
// _html_footer.inc.php file into the current skin folder.
// ------------------------------- END OF FOOTER --------------------------------
?>