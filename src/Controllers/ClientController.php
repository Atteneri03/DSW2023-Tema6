<?php
namespace Daw2\Dsw2023Tema6\Controllers;

class ClientController {
  private $router;

  public function __construct($router)
  {
    $this->router=$router;  
  }  

  public function index() {
    // echo "Esto es index de ClientController";
    global $blade;
    //Tratamiento de los datos
    echo $blade->view()->make("client.index", ["name" => "Pepe"])->render();
  }

  public function show($params) {
    $id = $params['id'];
    echo "<p>Mostrando el cliente con el id: $id</p>";
    $url = $this->router->generate('car_client_show', ['id' => $id]);
    echo "<p><a href=\"$url\">Muestra los coches del usuario</a></p>";
  }
}