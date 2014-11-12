<?php
/*
Plugin Name: Poll Everywhere oEmbed Provider
Plugin URI: https://github.com/samargulies/polleverywhere-oembed
Description: Adds support for embedding Poll Everywhere polls within WordPress
Version: 1.0
Author: gluten
*/

// Poll Everywhere (http://www.polleverywhere.com/)
// 
// URL scheme: http://www.polleverywhere.com/polls/*
// URL scheme: http://www.polleverywhere.com/multiple_choice_polls/*
// URL scheme: http://www.polleverywhere.com/free_text_polls/*
// API endpoint: http://www.polleverywhere.com/services/oembed/
// Example: http://polleverywhere.com/services/oembed?url=http://www.polleverywhere.com/multiple_choice_polls/LTIwNzM1NTczNTE&format=xml

wp_oembed_add_provider( '#https?://www.polleverywhere.com/(polls|multiple_choice_polls|free_text_polls)/.*#i', 'http://www.polleverywhere.com/services/oembed/', true );