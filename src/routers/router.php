<?php
$router->map('GET', '/', 'CarController#index', 'index');
$router->map('GET', '/car', 'CarController#index', 'car_index');
$router->map('POST', '/car', 'CarController#create', 'car_create');
$router->map('GET', '/car/[a:matricula]', 'CarController#show', 'car_show');

$router->map('GET', '/client', 'ClientController#index', 'client_index');
$router->map('GET', '/client/[i:id]', 'ClientController#show', 'client_show');
$router->map('GET', '/client/[i:id]/car', 'CarController#showCarClient', 'car_client_show');