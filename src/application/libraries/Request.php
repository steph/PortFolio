<?php 

/**
 * Objet Request
 * Représente l'entrée de l'application (la requête HTTP
 * qui va déclencher l'exécution de l'application)
 * 
 * @category IPLIB
 * @author Formateur
 * @version 0.0.1
 *
 */
class Request
{
    /**
     * @var string
     */
    private $url;
    /**
     * @var string
     */
    private $method;
    
    /**
     * @var string
     */
    private $route;
    /**
     * @var array
     */
    private $params = array();
    
    function __construct()
    {
        $this->url = ltrim($_SERVER['REQUEST_URI'], '/');
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->params = $_REQUEST;
    }
	/**
     * @return the $url
     */
    public function getUrl()
    {
        return $this->url;
    }

	/**
     * @return the $method
     */
    public function getMethod()
    {
        return $this->method;
    }

	/**
     * @return the $params
     */
    public function getParams()
    {
        return $this->params;
    }

	/**
     * @param multitype: $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }
	/**
     * @return the $route
     */
    public function getRoute()
    {
        return $this->route;
    }

	/**
     * @param string $route
     */
    public function setRoute($route)
    {
        $this->route = $route;
    }

}