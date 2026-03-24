<?php
namespace Controllers;

class ApprenantController extends Controller {
    public function index(): void {
        $this->view('views/apprenant/dashboard');
    }
}
