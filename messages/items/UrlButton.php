<?php

class UrlButton implements ButtonInterface {

    public $action = 'url';
    public $label;
    public $url;

    /**
     * 
     * @param string $label
     */
    public function label($label) {
        $this->label = $label;
        return $this;
    }

    /**
     * 
     * @param string $url
     */
    public function url($url) {
        $this->url = $url;
        return $this;
    }
}
