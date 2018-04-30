<?php

/**
 * Todo Application
 *
 *
 *  Todo, Comment, User
 */

class Task
{

    public $description;
    protected $completed = false;

    public function __construct($description)
    {

        $this->description = $description;
    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function complete()
    {
        $this->completed = true;
    }

}

$tasks = [
    new Task('Go to the store'),
    new Task('Finish the screencast'),
    new Task('Clean the room'),
];


$tasks[0]->complete();

require 'index.view.php';