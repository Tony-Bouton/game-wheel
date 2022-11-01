<?php




class Game {

    public  $nom ;
    public $rules;


    public function __construct($nom,$rules) {
        $this->nom = $nom ;
        $this->rules = $rules ; 
    }

}