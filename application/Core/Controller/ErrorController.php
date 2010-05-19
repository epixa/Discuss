<?php
/**
 * Epixa - Discuss
 */

namespace Core\Controller;

/**
 * Default controller
 *
 * @category   Module
 * @package    Core
 * @subpackage Controller
 * @copyright  2010 epixa.com - Court Ewing
 */
class ErrorController extends \Zend_Controller_Action
{
    /**
     * Handle all application level exceptions
     */
    public function errorAction()
    {
        $error = $this->_getParam('error_handler', null);
        if (null !== $error) {
            var_dump($error->exception);
        }
        
        die('<p>Core\Controller\ErrorController::errorAction()</p>');
    }
}