<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Entreprise - Agrobusiness</title>
    <link rel="stylesheet" href="styles/globals.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="styles/entreprise.css">
  <script>
    (function(){
      try {
        var t = localStorage.getItem('theme');
        if (t) { document.documentElement.setAttribute('data-theme', t); }
      } catch(e) {}
    })();
  </script>
</head>
<body>
    <header>
      <div class="header-wrap">
        <h1>Dashboard Entreprise</h1>
        <nav class="topnav">
          <a href="/dashboard">Accueil</a>
          <a href="/entreprise/messages">Messages</a>
          <a href="/logout">Déconnexion</a>
        </nav>
      </div>
    </header>

    <div class="layout">
      <aside class="sidebar">
        <div class="brand">
          <img src="image/logo.jpg" alt="Agrobusiness" class="brand-logo">
          <span class="brand-title">Agrobusiness</span>
        </div>
        <nav class="sidenav">
          <a href="/dashboard" class="nav-item">Tableau de bord</a>
          <a href="/entreprise/profile" class="nav-item">Mon Profil</a>
          <a href="produits_liste.php" class="nav-item">Voir ses produits</a>
          <a href="produits_ajouter.php" class="nav-item">Ajouter un produit</a>
          <a href="/entreprise/messages" class="nav-item">Messages</a>
        </nav>
      </aside>
      <main class="container main-content">
      <!-- KPIs -->
      <section class="kpi-grid">
        <div class="card">
          <div class="card-body kpi">
            <span class="label">Produits</span>
            <span class="value"><?php echo count($products ?? []); ?></span>
            <span class="sub">Total publiés</span>
          </div>
        </div>
        <div class="card">
          <div class="card-body kpi">
            <span class="label">Messages</span>
            <span class="value"><?php echo $messageCount ?? 0; ?></span>
            <span class="sub">Sur les 30 derniers jours</span>
          </div>
        </div>
        <div class="card">
          <div class="card-body kpi">
            <span class="label">Visites</span>
            <span class="value"><?php echo $enterprise['visite_count'] ?? 0; ?></span>
            <span class="sub">Vue du profil</span>
          </div>
        </div>
        <div class="card">
          <div class="card-body kpi">
            <span class="label">Taux de réponse</span>
            <span class="value"><?php echo ($responseRate ?? 0) . '%'; ?></span>
            <span class="sub">Estimé</span>
          </div>
        </div>
      </section>

      <!-- Charts -->
      <section class="charts-grid">
        <div class="card chart-card">
          <div class="card-body">
            <h3>Ventes Mensuelles</h3>
            <canvas id="salesChart" height="160"></canvas>
          </div>
        </div>
        <div class="card chart-card">
          <div class="card-body">
            <h3>Répartition des Produits</h3>
            <canvas id="productsChart" height="160"></canvas>
          </div>
        </div>
        <div class="card chart-card">
          <div class="card-body">
            <h3>Engagement Utilisateur</h3>
            <canvas id="engagementChart" height="160"></canvas>
          </div>
        </div>
      </section>

      <!-- Dernières demandes -->
      <section class="card panel">
        <div class="panel-header">
          <h3 class="panel-title">Dernières demandes reçues</h3>
        </div>
        <div class="panel-body">
          <table>
            <thead>
              <tr>
                <th>Client</th>
                <th>Objet</th>
                <th>Date</th>
                <th>Statut</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($latestRequests)) : foreach ($latestRequests as $r) : ?>
                <tr>
                  <td><?php echo htmlspecialchars($r['client'] ?? ''); ?></td>
                  <td><?php echo htmlspecialchars($r['description'] ?? ''); ?></td>
                  <td><?php echo htmlspecialchars($r['date'] ?? ''); ?></td>
                  <?php $st = strtolower($r['statut'] ?? 'en attente');
                        $cls = ($st==='acceptee'||$st==='acceptée'||$st==='valide') ? 'success' : (($st==='en attente') ? 'warning' : 'danger'); ?>
                  <td><span class="status <?php echo $cls; ?>"><?php echo htmlspecialchars($r['statut'] ?? 'En attente'); ?></span></td>
                </tr>
              <?php endforeach; else: ?>
                <tr><td colspan="4" style="text-align:center;color:#6b7280;">Aucune demande récente</td></tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </section>
    </main>
    </div>

    <script>
      // Helpers couleurs depuis CSS variables
      function getVar(name) {
        return getComputedStyle(document.documentElement).getPropertyValue(name).trim();
      }
      function hexToRgba(hex, alpha = 1) {
        const h = hex.replace('#', '');
        const bigint = parseInt(h.length === 3 ? h.split('').map(ch => ch + ch).join('') : h, 16);
        const r = (bigint >> 16) & 255;
        const g = (bigint >> 8) & 255;
        const b = bigint & 255;
        return `rgba(${r}, ${g}, ${b}, ${alpha})`;
      }

      const PRIMARY = getVar('--primary-green') || '#0f4001';
      const SECONDARY = getVar('--secondary-green') || '#317302';
      const ACCENT_ORANGE = getVar('--accent-orange') || '#c0f20c';
      const ACCENT_BLUE = getVar('--accent-blue') || '#7a8792ff';
      const TEXT_COLOR = getVar('--text-color') || '#212121';
      const GRID_COLOR = getVar('--border-color') || '#E0E0E0';

      // Graphique 1: Ventes Mensuelles (Bar Chart)
      const salesCtx = document.getElementById('salesChart').getContext('2d');
      new Chart(salesCtx, {
        type: 'bar',
        data: {
          labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun'],
          datasets: [{
            label: 'Ventes ($)',
            data: [1200, 1900, 3000, 5000, 2000, 3000],
            backgroundColor: hexToRgba(PRIMARY, 0.2),
            borderColor: PRIMARY,
            borderWidth: 2,
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: { labels: { color: TEXT_COLOR } },
            tooltip: { enabled: true }
          },
          scales: {
            x: {
              ticks: { color: TEXT_COLOR },
              grid: { color: hexToRgba(GRID_COLOR, 0.4) }
            },
            y: {
              beginAtZero: true,
              ticks: { color: TEXT_COLOR },
              grid: { color: hexToRgba(GRID_COLOR, 0.4) }
            }
          }
        }
      });

      // Graphique 2: Répartition des Produits (Pie Chart)
      const productsCtx = document.getElementById('productsChart').getContext('2d');
      new Chart(productsCtx, {
        type: 'pie',
        data: {
          labels: ['Fruits', 'Légumes', 'Céréales', 'Autres'],
          datasets: [{
            data: [30, 25, 20, 25],
            backgroundColor: [
              hexToRgba(PRIMARY, 0.85),
              hexToRgba(SECONDARY, 0.85),
              hexToRgba(ACCENT_ORANGE, 0.85),
              hexToRgba(ACCENT_BLUE, 0.85)
            ],
            borderColor: [PRIMARY, SECONDARY, ACCENT_ORANGE, ACCENT_BLUE],
            borderWidth: 2
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: { labels: { color: TEXT_COLOR } }
          }
        }
      });

      // Graphique 3: Engagement Utilisateur (Line Chart)
      const engagementCtx = document.getElementById('engagementChart').getContext('2d');
      new Chart(engagementCtx, {
        type: 'line',
        data: {
          labels: ['Sem 1', 'Sem 2', 'Sem 3', 'Sem 4'],
          datasets: [{
            label: 'Visites',
            data: [65, 59, 80, 81],
            fill: false,
            borderColor: ACCENT_BLUE,
            backgroundColor: hexToRgba(ACCENT_BLUE, 0.2),
            pointBackgroundColor: PRIMARY,
            pointBorderColor: '#fff',
            tension: 0.25,
            borderWidth: 2
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: { labels: { color: TEXT_COLOR } }
          },
          scales: {
            x: {
              ticks: { color: TEXT_COLOR },
              grid: { color: hexToRgba(GRID_COLOR, 0.4) }
            },
            y: {
              beginAtZero: true,
              ticks: { color: TEXT_COLOR },
              grid: { color: hexToRgba(GRID_COLOR, 0.4) }
            }
          }
        }
      });

      // Réagit au changement de thème (si data-theme change dynamiquement)
      window.addEventListener('storage', () => location.reload());
    </script>
</body>
</html>
