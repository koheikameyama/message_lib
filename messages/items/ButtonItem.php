<?php

class ButtonItem {

    const URL = 'url';
    const POSTBACK = 'postback';
    const MESSAGE = 'message';

    /**
     * 
     * @param string $action
     * @return \PostbackButton|\UrlButton
     */
    public function action($action) {
        if ($action === self::URL) {
            return new UrlButton();
        }
        if ($action === self::POSTBACK) {
            return new PostbackButton();
        }
        if($action === self::MESSAGE){
            return new MessageButton();
        }
    }

}
