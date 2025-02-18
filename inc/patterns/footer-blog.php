<?php
/**
 * Blog footer
 */
return array(
	'title'      => __( 'Blog footer', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-footers' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem"}}},"layout":{"wideSize":"1000px"}} -->
					<div class="wp-block-group alignfull" style="padding-top:8rem;padding-bottom:8rem"><!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>' . esc_html__( 'ABOUT US', 'twentytwentytwo' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>' . esc_html__( 'We are a rogue collective of bird watchers. We’ve been known to sneak through fences, climb perimeter walls, and generally trespass in order to observe the rarest of birds.', 'twentytwentytwo' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>' . esc_html__( 'LATEST POSTS', 'twentytwentytwo' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:latest-posts /--></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>' . esc_html__( 'CATEGORIES', 'twentytwentytwo' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:categories /--></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:site-title /-->

					<!-- wp:paragraph {"align":"right"} -->
					<p class="has-text-align-right">' . esc_html__( 'Proudly powered by ', 'twentytwentyone' ) . '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">WordPress</a></p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
