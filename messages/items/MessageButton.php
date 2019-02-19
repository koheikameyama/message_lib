<?php

class MessageButton implements ButtonInterface
{

    public $action = 'message';
    public $label;
    public $text;

    /**
     *
     * @param string $label
     * @return $this
     */
    public function label($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     *
     * @param string $data
     * @return $this
     */
    public function text($text)
    {
        $this->text = $text;
        return $this;
    }
}
