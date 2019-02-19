<?php

class QuickReply implements MessageContent
{

    public $contentType = 'quickReply';
    public $text;
    public $quickReplies;

    /**
     *
     * @param string $altText
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * selectionの各カラムをセット
     *
     * @param SelectionColumn $selection_column
     * @return $this
     */
    public function setQuickReplyItem(ButtonInterface $quickReplyItem)
    {
        $this->quickReplies[] = $quickReplyItem;
        return $this;
    }
}
