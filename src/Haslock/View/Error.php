<?php
namespace Akoriq\Haslock\View;
/**
 * Default Error view controller
 *
 * Basically this controller will load up default view for different kind of error
 */

use \Exception;

class Error extends Base {    
    public function displayAction($ex=null) {
        if($ex) {
            echo $ex->getFile();
        }
    }
}