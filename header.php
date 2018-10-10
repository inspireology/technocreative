<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>inspireology</title>
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/style.css" type="text/css" media="screen" charset="utf-8" />
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/plugins/insert_code/highlight.js/styles/railscasts.css"/>
        <script rel="script/javascript" src="<?= get_template_directory_uri() ?>/plugins/insert_code/highlight.js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
    </head>
    <body>
        <div id="page-header">
            <div class="column">
                <a href="<?= bloginfo('home') ?>">
                    <img src="<?= bloginfo('template_url') ?>/images/header_logo.png" class="header_logo">
                    <img src="<?= bloginfo('template_url') ?>/images/header_logo_glow.png" class="header_logo header_logo_glow">
                </a>
                <ul id="header-links">
                    <li><a href="https://github.com/inspireology">Code</a></li> |
                    <li><a href="<?= bloginfo('home') ?>/topics/design">Design</a></li> |
                    <li><a href="<?= bloginfo('home') ?>/topics/interfaces">Interfaces</a></li> |
                    <li><a href="<?= bloginfo('home') ?>/topics/cgi">CGI</a></li> |
                    <!-- <li><a href="https://dribbble.com/inspireology">Dribbble</a></li> -->
                    <li><a href="#">About</a></li>
                </ul>
            </div>
        </div>
