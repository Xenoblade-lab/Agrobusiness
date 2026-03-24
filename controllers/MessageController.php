<?php
namespace Controllers;

class MessageController extends Controller {
    public function index(): void {
        $this->view('citoyen/networking');
    }
}
