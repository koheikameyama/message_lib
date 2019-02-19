<?php

class Image implements MessageContent{
	public $contentType = 'image';
	public $imageUrl;

	/**
	 *
	 * @param string  $imageUrl
	 */
	public function __construct($imageUrl){
		$this->imageUrl = $imageUrl;
	}
}