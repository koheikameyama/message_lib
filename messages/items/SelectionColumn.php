<?php

class SelectionColumn {

    public $imageUrl = null;
    public $title;
    public $text;
    public $buttons;

    /**
     * 
     * @param string $title
     * @return $this
     */
    public function title($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * 
     * @param string $text
     * @return $this
     */
    public function text($text) {
        $this->text = $text;
        return $this;
    }

    /**
     * 
     * @param string $imageUrl
     * @return $this
     */
    public function imageUrl($imageUrl) {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * 
     * @param ButtonInterface $buttonItem
     * @return $this
     */
    public function setButtonItem(ButtonInterface $buttonItem) {
        $this->buttons[] = $buttonItem;
        return $this;
    }
}
