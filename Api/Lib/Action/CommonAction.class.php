<?php
class CommonAction extends Action{
    public function gbk_to_utf8($raw_data)
    {
        if (!is_array($raw_data)) {
            return iconv("gbk", "utf-8", $raw_data);
        }

        $out_data = array();
        foreach ($raw_data as $key => $sub_raw_data) {
            $out_data[$this->gbk_to_utf8($key)] = $this->gbk_to_utf8($sub_raw_data);
        }

        return $out_data;
    }

    public function utf8_to_gbk($raw_data)
    {
        if (!is_array($raw_data)) {
            return iconv("utf-8", "gbk", $raw_data);
        }

        $out_data = array();
        foreach ($raw_data as $key => $sub_raw_data) {
            $out_data[$this->utf8_to_gbk($key)] = $this->utf8_to_gbk($sub_raw_data);
        }

        return $out_data;
    }

    public function json_return($rst, $convert=false){
        if ($convert) {
            $rst = json_encode($this->gbk_to_utf8($rst));
        }
        echo json_encode($rst);
        exit;
    }

    public function ajaxError($message){
        $data['state']="-1";
        $data['message']=$message;
        $this->json_return($data);
    }
    public function ajaxSuccess($message){
        $data['state']="1";
        $data['message']=$message;
        $this->json_return($data);
    }
    function testEmoji($str){
        $text = json_encode($str); //暴露出unicode
        return preg_match("/(\\\u[ed][0-9a-f]{3})/i",$text);
    }
}