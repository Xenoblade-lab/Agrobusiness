<?php
namespace Controllers;

class FormationController extends Controller {
    public function index(): void {
        $this->view('citoyen/formations');
    }
}
