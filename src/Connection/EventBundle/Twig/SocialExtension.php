<?php

namespace Connection\EventBundle\Twig;

class SocialExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('pinterest', array($this, 'pinterestShareButton')),
        );
    }

    public function pinterestShareButton($url, $img)
    {
        return "<a href='//www.pinterest.com/pin/create/button/?url={$url}&media={$img}&description=ConnectionRu Event' data-pin-do='buttonPin' data-pin-config='none'><img src='//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png' /></a>";
    }

    public function getName()
    {
        return 'social_extension';
    }
}