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

    public function pinterestShareButton($url, $img, $description = "ConnectionRu Event")
    {
        $img    = urlencode(!empty($img) ? $img : "http://farm8.staticflickr.com/7027/6851755809_df5b2051c9_z.jpg");
        $url    = urlencode($url);
        $desc   = urlencode($description);
        $link   = "<a href='//www.pinterest.com/pin/create/button/?url={$url}&media={$img}&description={$desc}' data-pin-do='buttonPin' data-pin-config='beside'><img src='//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png' /></a>";
        return $link;
    }

    public function getName()
    {
        return 'social_extension';
    }
}