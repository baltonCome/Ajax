<?php

namespace Src\Entity;

use \PDO;
use \WilliamCosta\DatabaseManager\Database;

class Car{

    public $id;
    public $brand;
    public $model;

    public function save(){

        $this->id = (new Database ('car'))->insert([
            'brand' => $this->brand,
            'model' => $this->model
        ]);
        return true;
    }

    public static function getCarById($id){
        return self::getCar('id ='.$id)->fetchObject(self::class);
    }

    public static function getCar($where =  null, $order = null, $limit = null, $fields = '*'){
        return (new Database('car'))->select($where, $order, $limit, $fields);
    }

    public static function getCars($where =  null, $order = null, $limit = null, $fields = '*'){
        return (new Database('car'))->select($where, $order, $limit, $fields)->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public function edit(){

        return (new Database('car'))->update('id ='.$this->id, [
            'brand'=>$this->brand,
            'model'=>$this->model
        ]);
    }

    public function remove(){
        return (new Database('car'))->delete('id = '.$this->id);
    }
}