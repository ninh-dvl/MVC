<?php
namespace MVC\Models;

use MVC\Core\Model;

    class TaskModel extends Model
    {
        protected $title;
        protected $description;
        protected $id;
        protected $update_at;
        protected $create_at;

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            return $this->id = $id;
        }
        
        public function getTitle()
        {
            return $this->title;
        }

        public function setTitle($title)
        {
            return $this->title = $title;
        }

        public function getDescription()
        {
            return $this->description;
        }

        public function setDescription($description)
        {
            return $this->description = $description;
        }

        public function getCreate()
        {
            return $this->create_at;
        }

        public function setCreate($create_at)
        {
            return $this->create_at = $create_at;
        }

        public function getUpdate()
        {
            return $this->update_at;
        }

        public function setUpdate($update_at)
        {
            return $this->update_at = $update_at;
        }
        
    }

?>