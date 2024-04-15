<?php

add_theme_support('menus');

function get_img ($var) {
                $doc = new DOMDocument('1.0', 'UTF-8');
                $doc->loadHTML('<?xml encoding="utf-8">'.$var);
                $xml=simplexml_import_dom($doc);
                $images=$xml->xpath('//img'); # пераменная, якая захоўвае пуць да малюнку
                return $images;
}



?>
