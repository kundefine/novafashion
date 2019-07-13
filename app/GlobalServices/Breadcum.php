<?php 
namespace App\GlobalServices;
trait Breadcum {
  
  public function getBreadcum() {
    $uri = explode('/', \Request::path());

    $breadcum['home'] = '/';
    for($i = 0; $i < count($uri); $i++) {
      if($uri[$i] === "") {
        
      } else {
        $title = $uri[$i];
        $link = '';
        for($j = 0; $j <= $i; $j++) {
            $link .= $uri[$j] . '/';
        }
        $breadcum[$title] = '/' . $link; 
      }
      
    }
    return $breadcum;
    
  }



}