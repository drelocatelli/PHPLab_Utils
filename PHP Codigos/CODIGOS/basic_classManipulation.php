<?php

class biscoito{

  private $name;

  public function __construct($names){
    $this->name = $names;
  }

  public function getName(){
      return $this->name;
  }

}

$biscoito = new biscoito(["Biscoito de sal", "Biscoito de côco", "Bauduco", "Borracha"]);
echo implode($biscoito->getName(), ", ");
