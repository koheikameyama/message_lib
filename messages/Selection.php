<?php

class Selection implements MessageContent{

    public $contentType = 'selection';
    public $altText;
    public $selections;

    /**
     * 
     * @param string $altText
     */
    public function __construct($altText) {
        $this->altText = $altText;
    }

    /**
     * selectionの各カラムをセット
     * 
     * @param SelectionColumn $selection_column
     * @return $this
     */
    public function setSelectionColumn(SelectionColumn $selection_column) {
        $this->selections[] = $selection_column;
        return $this;
    }
}
