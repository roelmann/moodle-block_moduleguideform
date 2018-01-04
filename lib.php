<?php
function block_modguideform_images() {
    return array(html_writer::tag('img', '', array('alt' => get_string('red', 'block_modguideform'), 'src' => "pix/dog1.jpg")),
                html_writer::tag('img', '', array('alt' => get_string('blue', 'block_modguideform'), 'src' => "pix/dog2.jpg")),
                html_writer::tag('img', '', array('alt' => get_string('green', 'block_modguideform'), 'src' => "pix/dog3.jpg")));
}

function block_modguideform_print_page($modguideform, $return = false) {
    global $OUTPUT, $COURSE;
    $display = $OUTPUT->heading($modguideform->modulecode);
    $display .= $OUTPUT->box_start();

    $display .= clean_text($modguideform->modintro);
    $display .= clean_text($modguideform->modaddinfo);
    $display .= clean_text($modguideform->modreslist);

    $display .= $OUTPUT->box_end();

    if($return) {
        return $display;
    } else {
        echo $display;
    }
}