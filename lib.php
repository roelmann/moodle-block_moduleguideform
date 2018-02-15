<?php
function block_modguideform_images() {
    return array(html_writer::tag('img', '', array('alt' => get_string('red', 'block_modguideform'), 'src' => "pix/dog1.jpg")),
                html_writer::tag('img', '', array('alt' => get_string('blue', 'block_modguideform'), 'src' => "pix/dog2.jpg")),
                html_writer::tag('img', '', array('alt' => get_string('green', 'block_modguideform'), 'src' => "pix/dog3.jpg")));
}

function block_modguideform_print_page($modguideform, $return = false) {
    global $OUTPUT, $COURSE;
    $display = $OUTPUT->heading($modguideform->modulecode);
    $display .= 'To edit the content below, make sure editing is turned on for the module, then click the cog icon in the Module Guide Content Form block on your module management page.<br>';
    $display .= '<p><br></p>';
    $display .= $OUTPUT->box_start();

    $display .= '<h4>Module Introduction</h4>';
    $display .= clean_text($modguideform->modintro);
    $display .= '<p><br></p>';
    $display .= '<h4>Module Additional Information</h4>';
    $display .= clean_text($modguideform->modaddinfo);
    $display .= '<p><br></p>';
    $display .= '<h4>Module Resources</h4>';
    $display .= clean_text($modguideform->modreslist);

    $display .= $OUTPUT->box_end();

    if($return) {
        return $display;
    } else {
        echo $display;
    }
}