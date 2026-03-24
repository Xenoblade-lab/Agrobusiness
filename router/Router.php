<?php
class Router {
    private array $routes = [
        'GET' => [],
        'POST' => [],
        'PUT' => [],
        'DELETE' => [],
    ];

    public function get(string $path, string $action): void { $this->add('GET', $path, $action); }
    public function post(string $path, string $action): void { $this->add('POST', $path, $action); }
    public function put(string $path, string $action): void { $this->add('PUT', $path, $action); }
    public function delete(string $path, string $action): void { $this->add('DELETE', $path, $action); }

    private function add(string $method, string $path, string $action): void {
        $path = '/' . trim($path, '/');
        $this->routes[$method][$path] = $action;
    }

    private function normalizePath(string $uri): string {
        $uri = parse_url($uri, PHP_URL_PATH) ?: '/';
        $scriptDir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');
        if ($scriptDir && $scriptDir !== '/') {
            if ($scriptDir !== '' && strpos($uri, $scriptDir) === 0) {
                $uri = substr($uri, strlen($scriptDir));
            }
        }
        $uri = '/' . trim($uri, '/');
        return $uri === '//' ? '/' : $uri;
    }

    public function dispatch(): void {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $path = $this->normalizePath($_SERVER['REQUEST_URI'] ?? '/');

        $action = $this->routes[$method][$path] ?? null;
        if (!$action) {
            http_response_code(404);
            echo 'Route non trouvée: ' . htmlspecialchars($path);
            return;
        }

        [$controllerClass, $methodName] = explode('@', $action, 2);
        if (!class_exists($controllerClass)) {
            http_response_code(500);
            echo 'Contrôleur introuvable: ' . htmlspecialchars($controllerClass);
            return;
        }
        $controller = new $controllerClass();
        if (!method_exists($controller, $methodName)) {
            http_response_code(500);
            echo 'Méthode introuvable: ' . htmlspecialchars($methodName);
            return;
        }
        $controller->{$methodName}();
    }
}
