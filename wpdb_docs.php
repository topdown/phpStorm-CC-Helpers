<?php 
/* Use an autoloader on include to load this but do not instance it 
 * OPTION ONE (autoloaded or included)
 * Name the class like this
 * class wpdb_docs extends wpdb {}
 *
 * /** @var $tag wpdb_docs */
 * $tag_urls = get_tag_link($tag->term_id);
 *
 * OPTION TWO and probably the best
 * Alternatively you can just have it class wpdb {} and put it in the project root and phpStorm will find it
 * This way it does not need to be autoloaded or inlcuded
 *
 * /** @var $tag wpdb */
 * $tag_urls = get_tag_link($tag->term_id);
 *
 */

/**
 * @property wpdb  $ID
 * @property wpdb  $post_author
 * @property wpdb  $post_date
 * @property wpdb  $post_date_gmt
 * @property wpdb  $post_content
 * @property wpdb  $post_title
 * @property wpdb  $post_excerpt
 * @property wpdb  $post_status
 * @property wpdb  $comment_status
 * @property wpdb  $ping_status
 * @property wpdb  $post_password
 * @property wpdb  $post_name
 * @property wpdb  $to_ping
 * @property wpdb  $pinged
 * @property wpdb  $post_modified
 * @property wpdb  $post_modified_gmt
 * @property wpdb  $post_content_filtered
 * @property wpdb  $post_parent
 * @property wpdb  $guid
 * @property wpdb  $menu_order
 * @property wpdb  $post_type
 * @property wpdb  $post_mime_type
 * @property wpdb  $comment_count
 * @property wpdb  $filter
 * @property wpdb  $term_id
 * @property wpdb  $name
 *
 */
class wpdb {}
