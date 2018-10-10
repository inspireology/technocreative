<?php

class Paths extends ViewBase {
    private $themes;
    private $image;
    private $style;
    private $script;
    private $components;

    public function getTheme(){
        return get_template_directory_uri();
    }

    public function getImage(){

        return get_template_directory_uri()."/images/";
    }

    public function getStyle(){
        return get_template_directory_uri()."/styles/";
    }

    public function getScript(){
        return get_template_directory_uri()."/scripts/";
    }

    public function getComponents(){
        return get_template_directory_uri()."/components/";
    }

    public function getVideo(){
        return get_template_directory_uri()."/components/";
    }

    public function getAudio(){
        return get_template_directory_uri()."/components/";
    }
}