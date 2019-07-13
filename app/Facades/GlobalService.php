<?php 
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class GlobalService extends Facade  {
    protected static function getFacadeAccessor()
    {
        return 'global-services';
    }
}