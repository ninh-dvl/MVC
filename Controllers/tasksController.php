<?php
namespace MVC\Controllers;

use MVC\Models\TaskRepository;
use MVC\Models\TaskModel;
use MVC\Core\Controller;

class TasksController extends Controller
{
    function index()
    {
       
        $tasks = new TaskRepository();
        $d['tasks'] = $tasks->getAll();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["title"]))
        {
            $taskSave = new TaskRepository();
            $tasks = new TaskModel();
            $tasks->setTitle($_POST["title"]);
            $tasks->setDescription($_POST["description"]);
            $tasks->setCreate(date("Y-m-d H:i:s"));
            if ($taskSave->add($tasks))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
       
        $taskEdit = new TaskRepository();
       
        $d["task"] = $taskEdit->get($id);

        if (isset($_POST["title"]))
        {
            $tasks = new TaskModel();
            $tasks->setId($id);
            $tasks->setTitle($_POST["title"]);
            $tasks->setDescription($_POST["description"]);
            $tasks->setUpdate(date("Y-m-d H:i:s"));
            $tasks->setCreate($tasks->setCreate($id));
            if ($taskEdit->edit($tasks))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        $task = new TaskRepository();
        if ($task->delete($id))
        {
            header("Location: " . WEBROOT . "tasks/index");
        }
    }
}
?>