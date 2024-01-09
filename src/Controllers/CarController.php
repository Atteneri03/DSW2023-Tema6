<?php
namespace Daw2\Dsw2023Tema6\Controllers;

class CarController {
  
  public function index() {
    // echo "Esto es index de CarController";
    global $blade;
    //Tratamiento de los datos
    echo $blade->view()->make('car.index',["name" => "Pepe"])->render();

  }

  public function show($params) {
    $matricula = $params["matricula"];
    //echo "Esto es show de CarController: mostrando el coche con el id: $matricula";
    global $blade;
    $name = "Pepe";
    //echo $blade->view()->make("carshow",["matricula" => $matricula , "name" => $name]) -> render();
    echo $blade->view()->make("car.show",compact("matricula" , "name")) -> render();
    

  }

  public function showCarClient($params) {
    $id = $params['id'];
    echo "Muestra todos los coches del cliente $id";
  }
}