<?php

class block_todolist extends block_base {

    public function init() {
        $this->title = get_string('todolist', 'block_todolist');
    }

    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = "This is the content of my TODOLIST block!";
        $this->content->footer = "Footer here...!";

        return $this->content;
    }
}