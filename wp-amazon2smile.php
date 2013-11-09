<?php
/*
Plugin Name: Amazon2Smile
Plugin URI: http://thomasloughlin.com/amazon-smile-amazons-affiliate-program/
Version: 1.0.0
Author: Thomas Loughlin
Author URI: http://thomasloughlin.com/
Description: WordPress Plugin that changes Amazon Affiliate links to Smile Amazon Affiliate Links.
*/

function process_content ($content)
{
    
    $pattern = '/http:\/\/(smile)(\.amazon\.com\/[\S]*[\'|"])/i' ;
    $content =
        preg_replace (
            $pattern,
            'http://smile2${2}',
            $content
        );

return $content;

}

add_filter ('the_content',       'process_content');
add_filter ('the_excerpt',       'process_content');
add_filter ('the_content_rss',   'process_content');
add_filter ('the_excerpt_rss',   'process_content');


?>
