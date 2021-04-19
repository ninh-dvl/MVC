<?php
namespace MVC\Controllers;

use MVC\Models\StudensRespository;
use MVC\Models\StudentsModel;
use MVC\Core\Controller;

class StudentsController extends Controller{
    function index()
    {
        $tasks = new StudensRespository();
        $d['students'] = $tasks->getAll();
        var_dump($d);
        
    }
}
?>