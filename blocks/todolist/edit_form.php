<?php

class block_todolist_edit_form extends block_edit_form {
    
    protected function specific_definition($mform) {
        
        // Section header title
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));
        
        // A sample string variable with a default value
        $mform->addElement('text', 'config_text', get_string('blockstring', 'block_todolist'));
        $mform->setDefault('config_text', 'default_value');
        $mform->setType('config_text', PARAM_RAW);
        
        $mform->addElement('text', 'config_title', get_string('blocktitle', 'block_todolist'));
        $mform->setDefault('config_title', 'default_value');
        $mform->setType('config_title', PARAM_TEXT);
        
    }
}