"<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Agrobusiness</title>
    <link rel="stylesheet" href="/Agrobusiness/public/admin/styles/globals.css">
</head>
<body>
    <header>*
        <h1>Dashboard Administrateur</h1>
        <nav>
            <a href="/dashboard">Accueil</a>
            <a href="/admin/users">Gérer Utilisateurs</a>
            <a href="/admin/enterprises">Gérer Entreprises</a>
            <a href="/admin/formations">Gérer Formations</a>
            <a href="/admin/logs">Logs</a>
            <a href="/logout">Déconnexion</a>
        </nav>
    </header>

    <main>
        <section id="stats">
            <h2>Statistiques Globales</h2>
            <div class="stat-card">
                <h3>Utilisateurs</h3>
                <p><?php echo $userCount ?? 0; ?></p>
            </div>
            <div class="stat-card">
                <h3>Entreprises</h3>
                <p><?php echo $enterpriseCount ?? 0; ?></p>
            </div>
            <div class="stat-card">
                <h3>Formations</h3>
                <p><?php echo $formationCount ?? 0; ?></p>
            </div>
        </section>

        <section id="recent-activity">
            <h2>Activité Récente</h2>
            <ul>
                <?php foreach ($logs ?? [] as $log): ?>
                    <li><?php echo htmlspecialchars($log['action']); ?> - <?php echo $log['date_action']; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section id="management">
            <h2>Gestion</h2>
            <a href="/admin/add-news">Ajouter Actualité</a>
            <a href="/admin/add-opportunity">Ajouter Opportunité</a>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Agrobusiness RDC</p>
    </footer>
</body>
</html>
