<?php
require_once 'C:\xampp\htdocs\system_concessionaria\Public\Rh\app\model\controleRh.php';

class controleRhController {
    private $controleRhModel;

    public function __construct($pdo) {

        $this->controleRhModel = new controleRhModel($pdo);
    }
 
    public function listarControleRhs() {
        return $this->controleRhModel->listarControleRhs();
    }

    public function deletarControleRh($id) {
        $this->controleRhModel->deletarControleRh($id);
    }    
}