<?php
/**
 * @file
 * Template for Australian Apprenticeships home page.
 *
 * This template provides a grid based layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *	 - $content['top_left']: Content in the top left box (4 columns).
 *	 - $content['top_right']: Content in the top right box (8 columns).
 *	 - $content['bottom_left']: Content in the bottom left box (4 columns).
 *	 - $content['bottom_center']: Content in the bottom center box (4 columns).
 *	 - $content['bottom_right']: Content in the bottom right box (4 columns).
 */
?>
<div class="l-home-wrapper" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <div class="top-left"><?php print $content['top_left']; ?></div>
    <div class="top-right"><?php print $content['top_right']; ?></div>
    <div class="bottom-left"><?php print $content['bottom_left']; ?></div>
    <div class="bottom-center"><?php print $content['bottom_center']; ?></div>
    <div class="bottom-right"><?php print $content['bottom_right']; ?></div>
</div>