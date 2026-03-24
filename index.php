<?php
session_start();
// Chargement de la configuration (PDO)
require_once __DIR__ . '/config/config.php';
if (isset($pdo)) { $GLOBALS['pdo'] = $pdo; }

//namespace Controllers;

abstract class Controller {
    protected $pdo;

    public function __construct() {
        if (isset($GLOBALS['pdo'])) {
            $this->pdo = $GLOBALS['pdo'];
        }
    }

    protected function view(string $viewPath, array $data = []): void {
        foreach ($data as $key => $value) {
            ${$key} = $value;
        }
        $file = __DIR__ . '/../Agrobusiness/' . $viewPath . '.php';
        if (!file_exists($file)) {
            $file = __DIR__ . '/' . $viewPath . '.php';
        }
        if (file_exists($file)) {
            include $file;
        } else {
            http_response_code(404);
            echo 'Vue introuvable: ' . htmlspecialchars($viewPath);
        }
    }
}

namespace {
    require_once __DIR__ . '/router/Router.php';

    require_once __DIR__ . '/controllers/DashboardController.php';
    require_once __DIR__ . '/controllers/AnnuaireController.php';
    require_once __DIR__ . '/controllers/FormationController.php';
    require_once __DIR__ . '/controllers/EntrepriseController.php';
    require_once __DIR__ . '/controllers/ProduitServiceController.php';

    $router = new Router();
    require_once __DIR__ . '/routes/get.php';

    $router->dispatch();
}
