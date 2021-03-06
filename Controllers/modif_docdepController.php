<?php
require_once('Views/View.php');

class modif_docdepController
{
    private $_view;
    private $_manager;

    public function __construct($url)
    {
        if(isset($url) && $url && count($url) > 1)
        {
            throw new Exception('Page introuvable');
        }
        else
        {
            $this->docdep();
        }
    }

    private function docdep()
    {
        $this->_manager = new Doctor_DepartementManager;
        $docdep = $this->_manager->update();
        $doc = $this->_manager->getDoc();
        $dep = $this->_manager->getDep();

        $this->_view = new View('modif_docdep');
        $this->_view->generate(array('doctor_departement' => $docdep, 'doctor' => $doc, 'departement' => $dep));
    }
}
?>