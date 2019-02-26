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
        
        if (! empty($this->config->text)) {
            $this->content->text = $this->config->text;
        }

        return $this->content;
    }
    
    public function specialization() {
        if (isset($this->config)) {
            if(empty($this->config->title)) {
                $this->title = get_string('defaulttitle', 'block_todolist');
            } else {
                $this->title = $this->config->title;
            }
            
            if(empty($this->config->text)) {
                $this->config->text = get_string('defaulttext', 'block_todolist');
            }

            $allowHTML = get_config('todolist', 'Allow_HTML');
        }
    }

    public function instance_allow_multiple() {
        return true;
    }

    function has_config() {
        return true;
    }
    
    public function instance_config_save($data, $nolongerused = false) {
        if (get_config('todolist', 'Allow_HTML') == '1') {
            $data->text = strip_tags($data->text);
        }
        
        return parent::instance_config_save($data, $nolongerused);
    }
    
    public function html_attributes() {
        $attributes = parent::html_attributes(); // Get default values
        $attributes['class'] .= ' block_'.$this->name(); // Append our class to class attribute
        return $attributes;
    }

    public function applicable_formats() {
        return array(
            'site-index' => true,
        );
    }
    
    


}