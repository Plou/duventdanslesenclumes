<?php
    function honey_pot( $atts, $content = null ) {
        extract(shortcode_atts(array(
            'link' => '',
            'title' => '',
            'media' => '',
        ), $atts));

        $out = Timber::compile('honey_pot.twig', array(
            'link' => $link,
            'title' => $title,
            'media' => new TimberImage($media),
        ));
        return $out;
    }
    add_shortcode('honey-pot', 'honey_pot');
