<?php
namespace MVC\Models;

use MVC\Core\Model;

    class StudentsModel extends Model
    {
        protected $name;
        protected $year;
        protected $id;

      //get ,set ID
      public function getId()
      {
          return $this->id;
      }

      public function setId($id)
      {
          return $this->id = $id;
      }

      public function getName()
      {
          return $this->name;
      }

      public function setName($name)
      {
          return $this->name = $name;
      }

      public function getYear()
      {
          return $this->year ;
      }

      public function setYear($year)
      {
          return $this->year = $year;
      }
    }

?>