<?php
/**
 * Logo and Navigation Header
 */
return array(
	'title'      => __( 'Logo and Navigation Header', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"8rem","top":"max(1.25rem, 5vw)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide" style="padding-top:max(1.25rem, 5vw);padding-bottom:8rem"><!-- wp:site-logo {"width":64} /-->

					<!-- wp:navigation {"itemsJustification":"right","isResponsive":true} -->
					<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
					<!-- /wp:navigation --></div>
					<!-- /wp:group -->',
);
