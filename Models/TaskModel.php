<?php
namespace MVC\Models;

use MVC\Core\Model;

    class TaskModel extends Model
    {
        protected $title;
        protected $description;
        protected $id;
        protected $updated_at;
        protected $created_at;

        //get ,set ID
        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            return $this->id = $id;
        }
        
        //get ,set Title
        public function getTitle()
        {
            return $this->title;
        }

        public function setTitle($title)
        {
            return $this->title = $title;
        }

        //get ,set Description
        public function getDescription()
        {
            return $this->description;
        }

        public function setDescription($description)
        {
            return $this->description = $description;
        }

        //get ,set create_at
        public function getCreate()
        {
            return $this->created_at;
        }

        public function setCreate($created_at)
        {
            return $this->created_at = $created_at;
        }

        //get ,set Update_at
        public function getUpdate()
        {
            return $this->updated_at;
        }

        public function setUpdate($updated_at)
        {
            return $this->updated_at = $updated_at;
        }
        
    }

?>