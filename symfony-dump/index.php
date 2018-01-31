<?php

require('vendor/autoload.php'); //because this is not a Laravel project and Laravel does this behind the scenes.


class Tasks
{
    protected $tasks;

    public function __construct($tasks)
    {
        $this->tasks = $tasks;
    }
}

class Task
{
    public $description;

    public function __construct($description)
    {
        $this->description = $description;
    }
}

$tasks = new Tasks([
    new Task('Go to store'),
    new Task('Clean the house'),
    new Task('Wash the car')
]);


// var_dump($tasks);
dump($tasks);