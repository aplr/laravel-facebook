<?php 

namespace Aplr\LaravelFacebook;

use Facebook\Facebook;
use Illuminate\Support\Facades\Facade as BaseFacade;

class Facade extends BaseFacade {
    
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