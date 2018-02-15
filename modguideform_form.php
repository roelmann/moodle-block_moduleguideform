<?php
require_once("{$CFG->libdir}/formslib.php");
require_once($CFG->dirroot.'/blocks/modguideform/lib.php');

class modguideform_form extends moodleform {

    function definition() {

        $mform =& $this->_form;
        $mform->addElement('header','displayinfo', get_string('textfields', 'block_modguideform'));

        // add page title element.
        $mform->addElement('text', 'modulecode', get_string('modulecode', 'block_modguideform'));
        $mform->setType('modulecode', PARAM_RAW);
        $mform->addRule('modulecode', null, 'required', null, 'client');

        // add display text fields
        $mform->addElement('htmleditor', 'modintro', get_string('modintro', 'block_modguideform'));
        $mform->setType('modintro', PARAM_RAW);
        $mform->addRule('modintro', null, 'required', null, 'client');

        $mform->addElement('htmleditor', 'modaddinfo', get_string('modaddinfo', 'block_modguideform'));
        $mform->setType('modaddinfo', PARAM_RAW);
//        $mform->addRule('modaddinfo', null, 'required', null, 'client');

        $mform->addElement('htmleditor', 'modreslist', get_string('modreslist', 'block_modguideform'));
        $mform->setType('modreslist', PARAM_RAW);
//        $mform->addRule('modreslist', null, 'required', null, 'client');

        // hidden elements
        $mform->addElement('hidden', 'blockid');
        $mform->addElement('hidden', 'courseid');
        $mform->addElement('hidden','id','0');

        $this->add_action_buttons();
    }
}