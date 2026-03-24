<?php
namespace Controllers;

class AnnuaireController extends Controller {
    public function index(): void {
        $this->view('citoyen/annuaire');
    }
}
