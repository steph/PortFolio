<?php 
/**
 * Objet Dispatcher
 * 
 * Cet objet déclenche, à partir d'un objet Request "routé", 
 * l'exécution de la couche MVC correspondante.
 * Il peuple ensuite l'objet Response avec le résultat généré
 * (headers éventuels, body)
 * 
 * @category IPLIB
 * @author Formateur
 * @version 0.0.1
 *
 */
class Dispatcher
{
    /**
     * @var Request
     */
    private $request;
    /**
     * @var Response
     */
    private $response;
    
    /**
     * Constructeur
     * @param Request $request
     * @param Response $response
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }
    
    /**
     * Dispatch
     * Détermine, à partir de la route contenue dans la Request, le nom
     * du controller à exécuter, puis exécute ce controller
     */
    public function dispatch()
    {
        $controllerName = ucfirst($this->request->getRoute()) . 'Controller';
        $controllerFile = $controllerName . '.php';
        
        require_once CONTROLLER_PATH . DS . $controllerFile;
        // Instanciation dynamique du controller
        $controller = new $controllerName($this->request, $this->response);
        $controller->action();
    }
}