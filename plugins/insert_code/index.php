<?php

add_action('init', 'insert_code_buttons');
function insert_code_buttons()
{
    add_filter("mce_external_plugins", "insert_code_add_buttons");
    add_filter("mce_buttons", "insert_code_register_buttons");
}

function insert_code_add_buttons($plug_array)
{
    $plugin_array['insert_code'] = get_template_directory_uri(). '/plugins/insert_code/insert_code.js';
    return $plugin_array;
}

function insert_code_register_buttons($buttons)
{
    array_push($buttons, 'addCodeBlock', 'setCodeLanguage' );
    return $buttons;
}

//https://wordpress.stackexchange.com/questions/29675/add-quicktag-buttons-to-the-html-editor
add_action('admin_print_footer_scripts','eg_quicktags');
function eg_quicktags() {
    //TODO Add drop down to select the correct language
    //TODO Try to include higlight JS in to the editor page for visual preview
    ?>
    <script type="text/javascript" charset="utf-8">
        //buttonA = edButtons.length;
        //edButtons[edButtons.length] = new edButton('ed_paragraph','p','<p>','</p><br />','p');
        buttonB = edButtons.length;
        edButtons[edButtons.length] = new edButton('ed_pre','</>','\n<pre lang="php">\n<span>Insert Code Title</span>\n<code>\nInsert Code Here \n</code>\n</pre>\n','','r');

        jQuery(document).ready(function($){
            //jQuery("#ed_toolbar").append('<input type="button" value="p" id="ed_paragraph" class="ed_button" onclick="edInsertTag(edCanvas, buttonA);" title="p" />');
            jQuery("#ed_toolbar").append('<input type="button" value="pre" id="ed_pre" class="ed_button" onclick="edInsertTag(edCanvas, buttonB);" title="pre" />');
        });
    </script>
    <?php
}