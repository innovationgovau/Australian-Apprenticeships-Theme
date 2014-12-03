<?php
/**
 * @file
 * Template for the Australian Apprenticeships Left Sidebar layout.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>
<div class="content-wrapper">
	<div class="left-sidebar off-canvas-nav">
		<a class="off-canvas-button" href="#sidebar">Menu</a>
		<?php print $content['left-sidebar']; ?>
	</div>
	<div class="right-column">
		<?php print $content['right-column']; ?>
	</div>
</div>