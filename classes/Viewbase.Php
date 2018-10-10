<?php
abstract class ViewBase extends Base
{
    function capture($postFunction)
    {
        ob_start();
        $output = $postFunction();
        ob_get_clean();
        return $output;
    }
}