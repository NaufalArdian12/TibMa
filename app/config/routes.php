<?php

return [
  'login' => ['controller' => 'AuthController', 'method' => 'index'],
  'register' => ['controller' => 'AuthController', 'method' => 'register'],
  'authenticate' => ['controller' => 'AuthController', 'method' => 'authenticate'],
  'logout' => ['controller' => 'AuthController', 'method' => 'logout'],
  'dashboard' => ['controller' => 'DashboardController', 'method' => 'index'],
];

