<?php 

namespace App\GlobalServices;

trait Routes {
  public function routesUri() {
    return collect(\Route::getRoutes())->filter(function($route){
      return ($route->methods[0] === 'GET') && ($route->action['namespace'] === "App\Http\Controllers\Dashboard");
    })
    ->map(function($route){
      return $route->uri;
    });
  }
}