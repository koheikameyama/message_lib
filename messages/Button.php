<?php

class Button implements MessageContent{
    public $contentType = 'button';
    public $text;
    public $buttons;
    
    /**
     * 
     * @param string $text
     */
    public function __construct($text){
        $this->text = $text;
    }


    /**
     *
     * @param ButtonInterface  $button
     */
    public function setButtonItem(ButtonInterface $buttonItem){
    	$this->buttons[] = $buttonItem;
    	return $this;
    }
}