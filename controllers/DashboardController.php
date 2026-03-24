<?php
namespace Controllers;

class DashboardController extends Controller {
    public function index(): void {
        // Assume user role is stored in session, e.g., $_SESSION['user_role']
        // For now, default to 'apprenant' if not set
        $role = $_SESSION['user_role'] ?? 'apprenant';

        switch ($role) {
            case 'admin':
                $this->view('admin/dashboard');
                break;
            case 'entreprise':
                $this->view('entreprise/dashboard');
                break;
            case 'apprenant':
            default:
                $this->view('apprenant/dashboard');
                break;
        }
    }
}
