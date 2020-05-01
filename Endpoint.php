<?php

require_once __DIR__ . '/Libs/Api/Api.php';
require_once __DIR__ . '/Libs/LOEServer/Factory.php';

class EndPoint extends API{

    const ACCOUNTS = 'https://api.outlawdesigns.io:9661/';
    const RANDWORDS = 'https://api.outlawdesigns.io:9600/';
    const GETERR = 'Can only GET this endpoint';
    const POSTERR = 'Can only POST this endpoint';
    const REQERR = 'Malformed Request.';
    protected $user;
    protected static $_authErrors = array(
      "headers"=>"Missing required headers.",
      "noToken"=>"Access Denied. No Token Present.",
      "badToken"=>"Access Denied. Invalid Token.",
      "badMethod"=>"Unsupported Request Method"
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
            $processor = \LOE\Factory::createHoldingBayProcessor($this->endpoint,$this->request);
            $data = $processor->movie;
        }elseif(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'GET'){ //get all
            $data = \LOE\Movie\Movie::getAll();
        }elseif(!isset($this->verb) &&(int)$this->args[0] && $this->method == 'GET'){ //get a movie by id
            $data = \LOE\Factory::createModel($this->endpoint,$this->args[0]);
        }elseif((int)$this->args[0] && $this->method == 'PUT'){ //update by id
            $data = \LOE\Factory::createModel($this->endpoint,$this->args[0]);
            $data->setFields($this->request)->update();
        }elseif(isset($this->verb)){
            $data = $this->_parseVerb();
        }else{
            throw new \Exception(self::REQERR);
        }
        return $data;
    }
    protected function episode(){
        $data = null;
        if(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'POST'){
            $processor = \LOE\Factory::createHoldingBayProcessor($this->endpoint,$this->request);
            $data = $processor->episode;
        }elseif(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'GET'){
            $data = \LOE\Tv\Episode::getAll();
        }elseif(!isset($this->verb) && (int)$this->args[0] && $this->method == 'GET'){
            $data = \LOE\Factory::createModel($this->endpoint,$this->args[0]);
        }elseif((int)$this->args[0] && $this->method == 'PUT'){
            $data = \LOE\Factory::createModel($this->endpoint,$this->args[0]);
            $data->setFields($this->request)->update();
        }elseif(isset($this->verb)){
            $data = $this->_parseVerb();
        }else{
            throw new \Exception(self::REQERR);
        }
        return $data;
    }
    protected function song(){
        $data = null;
        if(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'POST'){
            $processor = \LOE\Factory::createHoldingBayProcessor($this->endpoint,$this->request);
            $data = $processor->song;
        }elseif(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'GET'){
            $data = \LOE\Music\Song::getAll();
        }elseif(!isset($this->verb) && (int)$this->args[0] && $this->method == 'GET'){
            $data = \LOE\Factory::createModel($this->endpoint,$this->args[0]);
        }elseif((int)$this->args[0] && $this->method == 'PUT'){
            $data = \LOE\Factory::createModel($this->endpoint,$this->args[0]);
            $data->setFields($this->request)->update();
        }elseif(isset($this->verb)){
            $data = $this->_parseVerb();
        }else{
            throw new \Exception(self::REQERR);
        }
        return $data;
    }
    protected function doc(){
        $data = null;
        if(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'POST'){
            $processor = \LOE\Factory::createHoldingBayProcessor($this->endpoint,$this->request);
            $data = $processor->doc;
        }elseif(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'GET'){
            $data = \LOE\Doc\Doc::getAll();
        }elseif(!isset($this->verb) && (int)$this->args[0] && $this->method == 'GET'){
            $data = \LOE\Factory::createModel($this->endpoint,$this->args[0]);
        }elseif((int)$this->args[0] && $this->method == 'PUT'){
            $data = \LOE\Factory::createModel($this->endpoint,$this->args[0]);
            $data->setFields($this->request)->update();
        }elseif(isset($this->verb)){
            $data = $this->_parseVerb();
        }else{
            throw new \Exception(self::REQERR);
        }
        return $data;
    }
    protected function anime(){
        $data = null;
        if(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'POST'){
            $processor = \LOE\Factory::createHoldingBayProcessor($this->endpoint,$this->request);
            $data = $processor->doc;
        }elseif(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'GET'){
            $data = \LOE\Anime\Anime::getAll();
        }elseif(!isset($this->verb) && (int)$this->args[0] && $this->method == 'GET'){
            $data = \LOE\Factory::createModel($this->endpoint,$this->args[0]);
        }elseif((int)$this->args[0] && $this->method == 'PUT'){
            $data = \LOE\Factory::createModel($this->endpoint,$this->args[0]);
            $data->setFields($this->request)->update();
        }elseif(isset($this->verb)){
            $data = $this->_parseVerb();
        }else{
            throw new \Exception(self::REQERR);
        }
        return $data;
    }
    protected function share(){
      $data = null;
      if(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'POST'){
        $data = \LOE\Factory::createShare($this->request->userId,$this->request->modelId,$this->request->objectId);
        $data->create();
      }elseif(!isset($this->verb) && !isset($this->args[0]) && $this->method == 'GET'){
        $data = \LOE\Share::getAll();
      }elseif(isset($this->verb)){
        $secret = \LOE\Share::getSecret($this->verb);
        $data = \LOE\Share::decodeToken($this->verb,$secret);
      }
      return $data;
    }
    protected function playedsong(){
      $data = null;
      if($this->method != 'GET'){
        throw new \Exception(self::$_authErrors['badMethod']);
      }elseif(!isset($this->verb) && !isset($this->args[0])){
        $data = \LOE\Music\Played::getAll();
      }elseif(!isset($this->verb) && (int)$this->args[0]){
        $data = \LOE\Factory::createModel(ucwords($this->endpoint),$this->args[0]);
      }elseif(isset($this->verb)){
        $data = $this->_parseVerb();
      }else{
        throw new \Exception(self::REQERR);
      }
      return $data;
    }
    protected function holdingbay(){
        $data = null;
        switch($this->verb){
            case 'movies':
                $scanner = \LOE\Factory::createHoldingBayScanner(\LOE\Factory::getModel('Movie'));
                $data = $scanner->movies;
                break;
            case 'tv':
                $scanner = \LOE\Factory::createHoldingBayScanner(\LOE\Factory::getModel('Episode'));
                $data = $scanner->shows;
                break;
            case 'music':
                \LOE\Factory::createHoldingBayCleaner('song');
                $scanner = \LOE\Factory::createHoldingBayScanner(\LOE\Factory::getModel('Song'));
                $data = $scanner->artists;
                $data['images'] = $scanner->possibleCovers;
                break;
            case 'anime':
                break;
            case 'docs':
                break;
            default:
                throw new \Exception(self::REQERR);
        }
        return $data;
    }
    private function _parseVerb(){
        $data = null;
        $key = ucwords($this->endpoint);
        if(strtolower($this->verb) == 'search'){
           $data = \LOE\Factory::search($key,$this->args[0],$this->args[1]);
        }elseif(strtolower($this->verb) == 'browse'){
           $data = \LOE\Factory::browse($key,$this->args[0]);
        }elseif(strtolower($this->verb) == 'recent'){
            $data = \LOE\Factory::recent($key,$this->args[0]);
        }elseif(strtolower($this->verb) == 'scan'){
            $data = $this->_createScanner();
        }elseif(strtolower($this->verb) == 'count'){
            $data = \LOE\Factory::count($key);
        }elseif(strtolower($this->verb) == 'group'){
            $data = \LOE\Factory::countOf($key,$this->args[0]);
        }elseif(strtolower($this->verb) == 'rate'){
            $data = $this->_parseRating();
        }elseif(strtolower($this->verb) == 'list'){
            $data = $this->_parsePlayList();
        }elseif(strtolower($this->verb) == 'random'){
            $data = $this->_getRandomList();
        }else{
            throw new \Exception('UnSupported Verb');
        }
        return $data;
    }
    private function _createScanner(){
        $key = ucwords($this->endpoint);
        if(!isset($this->args[1])){
          $msgTo = null;
          $authToken = null;
        }else{
          $msgTo = $this->args[1];
          $authToken = $this->user->auth_token;
        }
        if(strtolower($this->args[0]) == 'db'){
          $obj = \LOE\Factory::createDbScanner($key,$msgTo,$authToken);
        }elseif(strtolower($this->args[0] == 'fs')){
          $obj = \LOE\Factory::createFsScanner($key,$msgTo,$authToken);
        }else{
          throw new \Exception(self::REQERR);
        }
        return $obj->missing;
    }
    private function _parseRating(){
      $data = null;
      switch($this->method){
        case 'GET':
          $data = $this->_getRating();
        break;
        case 'POST':
          $data = $this->_createRating();
        break;
        default:
          throw new \Exception(self::$_authErrors['badMethod']);
      }
      return $data;
    }
    private function _createRating(){
      $key = ucwords($this->endpoint);
      $obj = \LOE\Factory::createModel($key . 'Rating');
      $idKey = strtolower($this->endpoint) . 'Id';
      $obj->$idKey = $this->args[0];
      $obj->userId = $this->user->UID;
      $obj->setFields($this->request)->create();
      return $obj;
    }
    private function _getRating(){
      $data = null;
      $objName = ucwords($this->endpoint) . 'Rating';
      if(!isset($this->args[0])){
        $data = $objName::getAll($this->user->UID);
      }else{
        $data = \LOE\Factory::createModel($objName,$this->args[0]);
      }
      return $data;
    }
    private function _parsePlayList(){
      $data = null;
      switch($this->method){
        case 'GET':
          $data = $this->_getPlayList();
        break;
        case 'PUT':
          $data = $this->_updatePlayList();
        break;
        case 'POST':
          $data = $this->_savePlayList();
        break;
        default:
          throw new \Exception(self::$_authErrors['badMethod']);
      }
      return $data;
    }
    private function _savePlayList(){
      $key = ucwords($this->endpoint);
      $obj = \LOE\Factory::createModel($key . 'PlayList');
      $obj->UserId = $this->user->UID;
      if(empty($this->request->Label) || is_null($this->request->Label) || !isset($this->request->Label)){
        $this->request->Label = $this->_getRandomWord() . "_" . $this->_getRandomWord();
      }
      $obj->setFields($this->request)->create();
      return $obj;
    }
    private function _updatePlayList(){
      $key = ucwords($this->endpoint);
      $obj = \LOE\Factory::createModel($key . 'PlayList');
      $obj->setFields($this->request)->update();
      return $obj;
    }
    private function _getPlayList(){
      $data = null;
      $objName = ucwords($this->endpoint) . 'PlayList';
      if(!isset($this->args[0])){
        $data = $objName::getAll($this->user->UID);
      }else{
        $data = \LOE\Factory::createModel($objName,$this->args[0]);
      }
      return $data;
    }
    private function _getRandomList(){
      $key = ucwords($this->endpoint);
      $subKey = strtolower($key) . 's';
      $obj = \LOE\Factory::createRandomPlayList($key,$this->args[0],$this->args[1]);
      return $obj->$subKey;
    }
    private function _getRandomWord(){
      return file_get_contents(self::RANDWORDS);
    }
}
