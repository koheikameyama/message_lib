<?php

class Text implements MessageContent{
    public $contentType = 'text';
    public $text;
    
    /**
     * 
     * @param string $text
     */
    public function __construct($text){
        $this->text = $text;
    }
}
