<?php

class PostbackButton implements ButtonInterface {

    public $action = 'postback';
    public $label;
    public $data;

    /**
     * 
     * @param string $label
     * @return $this
     */
    public function label($label) {
        $this->label = $label;
        return $this;
    }

    /**
     * 
     * @param string $data
     * @return $this
     */
    public function data($data) {
        $this->data = $data;
        return $this;
    }
}
