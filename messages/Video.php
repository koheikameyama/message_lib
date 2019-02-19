<?php

class Video implements MessageContent{
    public $contentType = 'video';
    public $imageUrl;
    public $videoUrl;
    
    /**
     * 
     * @param string $videoUrl
     */
    public function __construct($videoUrl){
        $this->videoUrl = $videoUrl;
    }

    /**
     *
     * @param string $imageUrl
     */
    public function imageUrl($imageUrl){
    	$this->imageUrl = $imageUrl;
		return $this;
    }
}
