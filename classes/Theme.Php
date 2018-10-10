<?php

class Theme extends Base
{
    private $supportThumnails;
    private $supportCustomHeader;
    private $supportCustomLogo;
    private $supportCustomBackground;
    private $supportAutomaticFeedLinks;
    private $supportHtml5;
    private $supportTitleTag;
    private $customizeSelectiveRefreshWidgets;


    function __construct()
    {
        $this->supportThumbnails = $this->supportThumbnails();
    }

    function getPart($part)
    {
        get_template_part($part);
    }

    function footer()
    {
        get_footer();
    }

    function header()
    {
        get_header();
    }

    function supportThumbnails($boolean, $options = [])
    {
        if ($boolean) {
            //Add theme support
        } else {
            //remove theme support
        }
    }


}