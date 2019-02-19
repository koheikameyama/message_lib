<?php

class Message {

    private $contents;

    /**
     * 
     * @param MessageContent $message_content
     * @return $this
     */
    public function set(MessageContent $message_content) {
        $this->contents[] = $message_content;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function get() {
        //オブジェクト配列のarrayキャスト及び、空要素の削除
        $tmp = json_decode(json_encode(get_object_vars($this)), true);
        $replyMessage = $this->adjust($tmp);
        
        if (count($replyMessage['contents']) === 1) {
            $content = $replyMessage['contents'][0];
            $keys = array_keys($content);
            $keys[array_search('contentType', $keys)] = 'type';
            return array_combine($keys, $content);
        }

        return $replyMessage;
    }
    
    private function adjust(Array $array){
        $adjust_array = array();
        foreach($array as $key => $value){
            if(empty($value)){
                continue;
            }
            if(is_array ($value)){
                $adjust_array[$key] = $this->adjust($value);
                continue;
            }
            $adjust_array[$key] = $value;
        }
        return $adjust_array;
    }

}