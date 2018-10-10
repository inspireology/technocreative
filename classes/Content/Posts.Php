<?php

//A collection of posts
class Posts extends ViewBase
{

    private $all; //think of another name for this
    private $titleParameters = [];
    private $commentsPopupUrlParametes = [];
    private $functionParameters = [];

    function __construct($customParameters = [])
    {
        $parameters = [

        ];

        //assign properties ie $parameters the_title_attribute() would be ;
        //$parameters['titleAttribute']['parameterName' => 'echo=0']
        //
        //have an array of defaultvalues for the arguments
        //

        $this->functionParameters = $parameters;

    }

    function getAll()
    {
        $posts = $this->getPosts();
        $this->reset();
        return $posts;
    }

    function getPosts()
    {
        if (have_posts()) {
            while (have_posts()) {
                //TODO: parameters should be properties of a post not of posts
                //TODO: Look at any Patterns I can use.
                $title = $this->capture(get_title());
                $titleAttribute = '';
                $category = '';
                $url = '';
                $urlTiny = '';
                $urlPermanent = '';
                $class = '';
                $content = '';
                $id = '';
                $summary = '';
                $commentsPopupUrl = '';
                $timeString = $this->capture(get_the_time());
                $author = '';

                $this->posts[] = new Post(
                    $title
                );
            }
        }


        return $this->all;
    }

    function reset()
    {
        //reset the posts loop
    }
}