<?php


namespace Core;
use Models;

class Controller {

    public function model($model) {
        
        $class = "Models\\" . $model;

        return new $class();
    }

}
