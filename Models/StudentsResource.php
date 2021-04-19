<?php
namespace MVC\Models;

use MVC\Models\StudentsModel;
use MVC\Core\ResourceModel;

    class StudentsResource extends ResourceModel
    {
        public function __construct()
        {
            $student = new StudentsModel();
            parent::_init('students','id',$student);
        }
    } 
?>