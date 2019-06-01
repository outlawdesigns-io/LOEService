<?php

require_once '/var/www/html/libs/api.php';
require_once '/var/www/html/libs/LOE/factory.php';

class EndPoint extends API{

    public function __construct($request,$origin)
    {
        parent::__construct($request);
    }

    protected function example(){
        return array("endPoint"=>$this->endpoint,"verb"=>$this->verb,"args"=>$this->args,"request"=>$this->request);
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
