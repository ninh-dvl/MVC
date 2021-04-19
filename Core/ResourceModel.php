<?php

namespace MVC\Core;

use MVC\Config\Database;
use PDO;


    class ResourceModel implements ResourceModelInterface
    {
        private $table;
        private $id;
        private $model;

        /**
         * @param string $table the table in database
         * @param int|null $id the id field
         * @param object $model the model mapping to table in database
         */
        public function _init($table,$id,$model)
        {
            $this->table = $table;
            $this->id = $id;
            $this->model = $model;
        }

        public function save($model)
        {
            //Add
           $arr = $model->getProperties();
           $placeholder = [];
           $listUpdate = [];
           $keys = [];
         
            if($model->getId() === null){
                foreach($arr as $key => $value)
                {
                    //Get data and pass it into $keys[] and $placeholder[]
                    $keys[] = $key;
                    array_push($placeholder,":".$key);
                }
                $strPlaceholder = implode(",",$placeholder);
                $strKey = implode(",",$keys);
                $sql = "INSERT INTO $this->table ({$strKey}) VALUES ({$strPlaceholder})";
                $req = Database::getBdd()->prepare($sql);
                return $req->execute($arr);

            }else{
               //Update
                foreach($arr as $key => $value)
                {
                    array_push($listUpdate, $key ."= :". $key);
                    // array_push($listUpdate, $key ."=". "'$value'"); 
                }
                $strPlaceholder = implode(", ",$listUpdate);
               
                $sql = "UPDATE $this->table SET {$strPlaceholder} WHERE id = :id";
                $req = Database::getBdd()->prepare($sql);
                return $req->execute($arr);
            }
            
        }

        public function delete($id)
        {
            $sql = "DELETE FROM $this->table WHERE id = $id";
            $req = Database::getBdd()->prepare($sql);
            return  $req->execute();

        }

        public function getAll($model)
        {
            $properties = implode(',',array_keys($model->getProperties()));
            $sql = "SELECT  {$properties} FROM {$this->table}";
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_OBJ);
        }

        public function get($id)
        {
            $sql = "SELECT * FROM $this->table WHERE id=$id";
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetch(PDO::FETCH_OBJ);
        }
    }
?>