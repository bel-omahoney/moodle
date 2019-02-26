<?php

$settings->add(new admin_setting_heading(
    'headerconfig',
    get_string('headerconfig', 'block_todolist'),
    get_string('descconfig', 'block_todolist')
));

$settings->add(new admin_setting_configcheckbox(
    'todolist/Allow_HTML',
    get_string('labelallowhtml', 'block_todolist'),
    get_string('descallowhtml', 'block_todolist'),
    '0'
));