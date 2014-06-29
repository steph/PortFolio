<?php 

/**
 * Objet View
 * 
 * Permet d'afficher le résultat d'une exécution MVC
 * 
 * @Category IPLIB
 * @author Formateur
 *@version 0.0.1
 *
 */
class View
{
    /**
     * @var string
     */
    private $file;
    
    /**
     * @var string
     */
    private $headTitle;
    
    /**
     * @var string
     */
    private $headDescription;
    /**
     * @var string
     */
    private $route;
    
    public function __construct($route)
    {
        $this->file = VIEW_PATH . DS . $route . '.phtml';
        $this->route = $route;
    }
    /**
     * Fonction qui permet d'afficher class="active" ou active sur le code du lien actif
     * @param string $linkRoute Route correspondant au lien
     * @param boolean retourne class="active" ou juste active
     * @return string Chaine vide si lien inactif, class="active" si lien actif
     */
    public function isLinkActive($linkRoute, $printClass = true)
    {
        if ($this->route == $linkRoute) {
            if ($printClass) {
                return 'class="active"';
            } else {
                return ' active';
            }
        } else {
            return '';
        }
    }
    
    public function render()
    {
        ob_start();
        require $this->file;
        return ob_get_clean();
    }
	/**
     * @return the $title
     */
    public function getTitle()
    {
        return $this->headTitle;
    }

	/**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->headTitle = $title;
    }
	/**
     * @return the $headDescription
     */
    public function getDescription()
    {
        return $this->headDescription;
    }

	/**
     * @param string $headDescription
     */
    public function setDescription($headDescription)
    {
        $this->headDescription = $headDescription;
    }
    



}