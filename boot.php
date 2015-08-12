<?php

namespace extensions\users;
use \frameworks\adapt as adapt;

/* Prevent direct access */
defined('ADAPT_STARTED') or die;

$adapt = $GLOBALS['adapt'];

$adapt->dom->head->add(new adapt\html_link(array('type' => 'text/css', 'rel' => 'stylesheet', 'href' => '/adapt/extensions/videojs/static/video-js.min.css')));
$adapt->dom->head->add(new html_script(array('type' => 'text/javascript', 'src' => '/adapt/extensions/videojs/static/video.js')));
$adapt->dom->head->add(
    new html_script("videojs.options.flash.swf = \"/adapt/extensions/videojs/static/video-js.swf\";", array('type' => 'text/javascript'))
);





?>