<?php
/**
 * Epixa Library
 */

namespace Epixa;

/**
 * Extension of Zend_Application that determines config path by environment
 *
 * @category  Epixa
 * @package   Model
 * @copyright 2010 epixa.com - Court Ewing
 * @license   http://github.com/epixa/Discuss/blob/master/LICENSE New BSD
 * @author    Court Ewing (court@epixa.com)
 */
class Application extends \Zend_Application
{
    /**
     * Constructor
     *
     * Initialize application. Potentially initializes include_paths, PHP
     * settings, and bootstrap class.
     *
     * @param  string                   $environment
     * @param  string|array|Zend_Config $options String path to configuration file, or array/Zend_Config of configuration options
     * @throws Zend_Application_Exception When invalid options are provided
     * @return void
     */
    public function __construct($environment, $options = null)
    {
        $options = array('config' => APPLICATION_ROOT . '/config/settings/' . APPLICATION_ENV . '.php');
        parent::__construct($environment, $options);
    }
}