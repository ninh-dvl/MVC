<?php

namespace MVC\Core;

use MVC\Config\Database;


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
           
            
        }

        public function delete($id)
        {
            $sql = "DELETE FROM $this->table WHERE id=$id";
            $req = Database::getBdd()->prepare($sql);
            return  $req->execute();

        }

        public function getAll()
        {
            $sql = "SELECT * FROM $this->table";
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetchAll();
        }
    }
?>