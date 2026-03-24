<?php
namespace Controllers;

class ProduitServiceController extends Controller {
    public function index(): void {
        $this->view('citoyen/produits');
    }
}
