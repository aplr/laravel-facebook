<?php 

namespace Aplr\LaravelFacebook;

use Facebook\Facebook;
use Illuminate\Support\Facades\Facade as Facade;

class Facebook extends Facade {
    
    /**
     * Get the registered component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Facebook::class;
    }
    
}