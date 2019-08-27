<?php
class User {

    protected $name ="User";

    public function showUser(){
        $this->result();
    }

    protected function result(){
        echo  $this->name;
    }

}

$user= new User();
$user->showUser();