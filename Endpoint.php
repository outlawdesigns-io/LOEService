<?php

require_once __DIR__ . '/Api/Api.php';
require_once __DIR__ . '/LOEServer/Factory.php';

class EndPoint extends API{

    const ACCOUNTS = 'http://api.outlawdesigns.io:9661/';
    const GETERR = 'Can only GET this endpoint';
    const POSTERR = 'Can only POST this endpoint';
    const REQERR = 'Malformed Request.';
    protected static $_authErrors = array(
      "headers"=>"Missing required headers.",
      "noToken"=>"Access Denied. No Token Present.",
      "badToken"=>"Access Denied. Invalid Token"
    );

    public function __construct($request,$origin)
    {
        parent::__construct($request);
        if(isset($this->headers['request_token']) && ! isset($this->headers['password'])){
          throw new \Exception(self::$_authErrors['headers']);
        }elseif(!isset($this->headers['auth_token']) && !isset($this->headers['request_token'])){
          throw new \Exception(self::$_authErrors['noToken']);
        }elseif(!$this->_verifyToken() && !isset($this->headers['request_token'])){
          throw new \Exception(self::$_authErrors['badToken']);
        }
    }
    private function _verifyToken(){
      $ch = curl_init();
      curl_setopt($ch,CURLOPT_URL,self::ACCOUNTS . "verify/");
      curl_setopt($ch,CURLOPT_HTTPHEADER,array('auth_token: ' . $this->headers['auth_token']));
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
      $output = json_decode(curl_exec($ch));
      curl_close($ch);
      if(isset($output->error)){
        return false;
      }
      $this->user = $output;
      return true;
    }
    private function _authenticate(){
      $headers = array('request_token: ' . $this->headers['request_token'],'password: ' . $this->headers['password']);
      $ch = curl_init();
      curl_setopt($ch,CURLOPT_URL,self::ACCOUNTS . "authenticate/");
      curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
      $output = json_decode(curl_exec($ch));
      curl_close($ch);
      if(isset($output->error)){
        throw new \Exception($output->error);
      }
      $this->headers['auth_token'] = $output->token;
      $this->_verifyToken();
      return $output;
    }
    protected function example(){
        return array("endPoint"=>$this->endpoint,"verb"=>$this->verb,"args"=>$this->args,"request"=>$this->request);
    }
    protected function authenticate(){
      return $this->_authenticate();
    }
    protected function verify(){
      if(!$this->_verifyToken()){
        throw new \Exception('Token Rejected');
      }
      return $this->headers['auth_token'];
    }
    protected function movie(){
        $data = null;
        if(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'POST'){ //create
            $processor = \LOE\LoeFactory::createProcessor('movies',$this->request);
            $data = $processor->movie;
        }elseif(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'GET'){ //get all
            $data = \LOE\Movie::getAll();
        }elseif(!isset($this->verb) &&(int)$this->args[0] && $this->method == 'GET'){ //get a movie by id
            $data = \LOE\LoeFactory::create('movies',$this->args[0]);
        }elseif((int)$this->args[0] && $this->method == 'PUT'){ //update by id
            $data = \LOE\LoeFactory::create('movies',$this->args[0]);
            $data->setFields($this->request)->update();
        }elseif(isset($this->verb)){
            $data = $this->_parseVerb();
        }else{
            throw new \Exception('Malformed Request');
        }
        return $data;
    }
    protected function tv(){
        $data = null;
        if(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'POST'){
            $processor = \LOE\LoeFactory::createProcessor('tv',$this->request);
            $data = $processor->episode;
        }elseif(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'GET'){
            $data = \LOE\Episode::getAll();
        }elseif(!isset($this->verb) && (int)$this->args[0] && $this->method == 'GET'){
            $data = \LOE\LoeFactory::create('tv',$this->args[0]);
        }elseif((int)$this->args[0] && $this->method == 'PUT'){
            $data = \LOE\LoeFactory::create('tv',$this->args[0]);
            $data->setFields($this->request)->update();
        }elseif(isset($this->verb)){
            $data = $this->_parseVerb();
        }else{
            throw new \Exception('Malformed Request');
        }
        return $data;
    }
    protected function music(){
        $data = null;
        if(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'POST'){
            $processor = \LOE\LoeFactory::createProcessor('music',$this->request);
            $data = $processor->song;
        }elseif(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'GET'){
            $data = \LOE\Song::getAll();
        }elseif(!isset($this->verb) && (int)$this->args[0] && $this->method == 'GET'){
            $data = \LOE\LoeFactory::create('music',$this->args[0]);
        }elseif((int)$this->args[0] && $this->method == 'PUT'){
            $data = \LOE\LoeFactory::create('music',$this->args[0]);
            $data->setFields($this->request)->update();
        }elseif(isset($this->verb)){
            $data = $this->_parseVerb();
        }else{
            throw new \Exception('Malformed Request');
        }
        return $data;
    }
    protected function doc(){
        $data = null;
        if(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'POST'){
            $processor = \LOE\LoeFactory::createProcessor('docs',$this->request);
            $data = $processor->doc;
        }elseif(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'GET'){
            $data = \LOE\Doc::getAll();
        }elseif(!isset($this->verb) && (int)$this->args[0] && $this->method == 'GET'){
            $data = \LOE\LoeFactory::create('docs',$this->args[0]);
        }elseif((int)$this->args[0] && $this->method == 'PUT'){
            $data = \LOE\LoeFactory::create('docs',$this->args[0]);
            $data->setFields($this->request)->update();
        }elseif(isset($this->verb)){
            $data = $this->_parseVerb();
        }else{
            throw new \Exception('Malformed Request');
        }
        return $data;
    }
    protected function anime(){
        $data = null;
        if(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'POST'){
            $processor = \LOE\LoeFactory::createProcessor('anime',$this->request);
            $data = $processor->doc;
        }elseif(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'GET'){
            $data = \LOE\Anime::getAll();
        }elseif(!isset($this->verb) && (int)$this->args[0] && $this->method == 'GET'){
            $data = \LOE\LoeFactory::create('anime',$this->args[0]);
        }elseif((int)$this->args[0] && $this->method == 'PUT'){
            $data = \LOE\LoeFactory::create('anime',$this->args[0]);
            $data->setFields($this->request)->update();
        }elseif(isset($this->verb)){
            $data = $this->_parseVerb();
        }else{
            throw new \Exception('Malformed Request');
        }
        return $data;
    }
    protected function holdingbay(){
        $data = null;
        switch($this->verb){
            case 'movies':
                $scanner = new \LOE\MovieScanner();
                $data = $scanner->movies;
                break;
            case 'tv':
                $scanner = new \LOE\TvScanner();
                $data = $scanner->shows;
                break;
            case 'music':
                $scanner = new \LOE\MusicScanner();
                $data = $scanner->artists;
                break;
            case 'anime':
                break;
            case 'docs':
                break;
            default:
                throw new \Exception('Malformed Request');
        }
        return $data;
    }
    private function _parseVerb(){
        $data = null;
        $key = $this->endpoint;
        if($key == 'movie'){
            $key = 'movies';
        }elseif($key == 'doc'){
            $key = 'docs';
        }
        if(strtolower($this->verb) == 'search'){
            try{
                $data = \LOE\LoeFactory::search($key,$this->args[0],$this->args[1]);
            }catch(\Exception $e){
                $data = 'Malformed Search';
            }
        }elseif(strtolower($this->verb) == 'browse'){
            try{
                $data = \LOE\LoeFactory::browse($key,$this->args[0]);
            }catch(Exception $e){
                $data = 'Malformed Request';
            }
        }elseif(strtolower($this->verb) == 'recent'){
            try{
                $data = \LOE\LoeFactory::recent($key,$this->args[0]);
            }catch(\Exception $e){
                $data = 'Malformed Request';
            }
        }else{
            throw new \Exception('UnSupported Verb');
        }
        return $data;
    }
}
