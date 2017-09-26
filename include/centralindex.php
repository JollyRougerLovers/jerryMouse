<?php

class central_index {

    private $out = array();
    private $curl;
    private $api_key="";
    /**
     * 
     * @param string $request
     * @param string $test
     * @return none
     */
    function __construct($request, $test) {
        header("Content-Type: application/json;charset=utf-8");
        $param = [];
        if (!isset($request['q']))
            return $this->error('10');
        if ($request['q'] == "location") {
            if (!isset($request['tag']))
                return $this->error('20');
            $query = $request['q'];
            $param['tag'] = $request['tag'];
        } elseif ($request['q'] == "category") {
            if (!isset($request['tag']))
                return $this->error('30');
            $query = $request['q'];            
            $param['tag'] = $request['tag'];
        } elseif ($request['q'] == "search") {
            if (!isset($request['location']) ||
                !isset($request['category']))
                return $this->error('40');
            $query = $request['q'];            
            $param['location'] = $request['location'];
            $param['category'] = $request['category'];            
        } elseif ($request['q'] == "phone") {
            if (!isset($request['id']))
                return $this->error('50');
            $query = $request['q'];            
            $param['id'] = $request['id'];
        }else{
            $this->error('60');
        }
        if ($test == 1) {
            $this->test_get($query, $param);
        } else {
            $this->get($query, $param);
        }
    }
    /**
     * 
     * @global type $test_search_result
     * @global type $test_autocomplate_location
     * @global type $test_autocomplete_category
     * @global type $test_entity
     * @param type $query
     * @param type $param
     */
    private function test_get($query, $param) {
        global $test_search_result, $test_autocomplate_location, $test_autocomplete_category, $test_entity;      
        switch ($query) {
            case "location":
                $this->autocomplete_location(json_decode($test_autocomplate_location, true));
                break;
            case "category":
                $this->autocomplete_category(json_decode($test_autocomplete_category, true));
                break;
            case "search":
                $this->search_result(json_decode(stripslashes($test_search_result), true));
                break;
            case "phone":
                $this->get_phone($param);
                break;
        }
    }
    /**
     * 
     * @param type $query
     * @param type $param
     */
    private function get($query, $param) {
        $this->curl = curl_init();
        curl_setopt_array($this->curl, array(
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_USERAGENT => 'Mozilla/5.0 (Linux; Android 6.0; HTC One M9 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.98 Mobile Safari/537.36'
        ));
        switch ($query) {
            case "location":
                curl_setopt($this->curl, CURLOPT_URL, 'https://api.centralindex.com/v1/autocomplete/location?country=ie&str='. $param['tag']. '&api_key='.$this->api_key);
                $this->autocomplete_location(json_decode(curl_exec($this->curl), true));
                break;
            case "category":
                curl_setopt($this->curl, CURLOPT_URL, 'https://api.centralindex.com/v1/autocomplete/category?country=ie&str='. $param['tag']. '&api_key='.$this->api_key);                
                $this->autocomplete_category(json_decode(curl_exec($this->curl), true));
                break;
            case "search":
                curl_setopt($this->curl, CURLOPT_URL, 'https://api.centralindex.com/v1/entity/search/what/bylocation?country=ie&what='. $param['category']. '&where='. $param['location']. '&api_key='.$this->api_key);
                $this->search_result(json_decode(curl_exec($this->curl), true));
                break;
            case "phone":
                $this->get_phone($param);
                break;
            curl_close($this->curl);
        }        
    }
    /**
     * 
     * @param type $incoming
     * @return type
     */
    private function autocomplete_location($incoming) {
        if ((!isset($incoming['data'])) || (!isset($incoming['data']["suggestions"])))
            return $this->error('100');
        $this->out = [];
        $this->out['command'] = 'location';
        $this->out['data'] = [];
        foreach ($incoming['data']["suggestions"] as &$val) {
            if (isset($val['name']))
                array_push($this->out['data'], $val['name']);
        }
    }
    /**
     * 
     * @param type $incoming
     * @return type
     */
    private function autocomplete_category($incoming) {
        if ((!isset($incoming['data'])) || (!isset($incoming['data']["suggestions"])))
            return $this->error('200');
        $this->out = [];
        $this->out['command'] = 'category';
        $this->out['data'] = [];
        foreach ($incoming['data']["suggestions"] as &$val) {
            if (isset($val['name']))
                array_push($this->out['data'], $val['name']);
        }
    }
    /**
     * 
     * @param type $incoming
     * @return type
     */
    private function search_result($incoming) {
        if ((!isset($incoming['data'])) || (!isset($incoming['data']["rows"])))
            return $this->error('300');
        $this->out = [];
        $this->out['command'] = 'search';
        $this->out['data'] = [];
        foreach ($incoming['data']["rows"] as &$val) {
            if ((isset($val['name'])) &&
                    (isset($val["name"]["name"])) &&
                    (isset($val["_id"])) &&                    
                    (isset($val["postal_address"])) &&
                    (isset($val["postal_address"]['address1']))) {
                $out = [];
                $out['id'] = $val["_id"];
                $out['name'] = $val["name"]["name"];
                $out['address'] = $val["postal_address"]['address1'];
                if (isset($val["postal_address"]['address2']) && ($val["postal_address"]['address2']!=""))
                    $out['address'] .= ", ". $val["postal_address"]['address2'];
                if (isset($val["postal_address"]['address3']) && ($val["postal_address"]['address3']!=""))
                    $out['address'] .= ", ". $val["postal_address"]['address3'];
                array_push($this->out['data'], $out);
            }
        }
    }
    /**
     * 
     * @param type $param
     */
    private function get_phone($param) {
        $this->out = [];
        $this->out['command'] = 'phone';
        $this->out['data'] = "087 964 4194";
        $this->out['id']=$param['id'];
    }
    /**
     * 
     * @param type $message
     */
    private function error($message) {
        $this->out = [];
        $this->out['command'] = 'error';
        $this->out['message'] = $message;
    }

    function __destruct() {
        echo json_encode($this->out);
    }

}
