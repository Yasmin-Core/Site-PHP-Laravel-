<?php
namespace App\Helpers\DataBuilders;

class UsersDataBuilder {
    private $v = [
        ['name' => 'Ana', 'email' => 'ana@gmail.com', 'password' => 'jkdjksjdjlk'],
        ['name' => 'Marcello', 'email' => 'marcello@gmail.com', 'password' => '5266ff'],
        ['name' => 'Matheus', 'email' => 'matheus@gmail.com', 'password' => 'juncm123'],
        ['name' => 'Yasmin', 'email' => 'yasmin@gmail.com', 'password' => 'jukml159'],
        ['name' => 'Michele', 'email' => 'michele@gmail.com', 'password' => 'kmj236'],
    ];
    public function getData(){
        return $this->v;
    }
    //registrando somente uma pessoa
    public function getRow(){
        $v = ['name' => 'Taina', 'email' => 'taina@gmail.com', 
                'password' => 'juncm253'];
        return $v;
    }
}