<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Formateur - Agrobusiness Summit</title>
  <link rel="stylesheet" href="styles/globals.css" />
  <link rel="stylesheet" href="styles/formateur.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <aside class="sidebar" id="sidebar">
    <div class="logo">
      <img src="image/logo.jpg" alt="Agrobusiness Logo" style="max-width: 160px; display: block; margin: 0 auto 20px auto;" />
    </div>
    <nav>
      <a href="#" class="active"><i class="fas fa-chart-line"></i>Dashboard</a>
      <a href="formations.php"><i class="fas fa-book"></i>Formations</a>
      <a href="#"><i class="fas fa-box-open"></i>Produits</a>
      <a href="#"><i class="fas fa-envelope"></i>Messages</a>
      <a href="#"><i class="fas fa-cog"></i>Paramètres</a>
    </nav>
  </aside>
  <div class="main-container">
    <header class="topbar">
      <button id="menuToggle" class="menu-toggle" aria-label="Toggle menu"><i class="fas fa-bars"></i></button>
      <div class="title">Dashboard Formateur</div>
      <div></div> <!-- Placeholder for right side toolbar if needed -->
    </header>
    <main class="content">
      <div class="charts-grid">
        <div class="chart-box">
          <h3>Nombre d’inscriptions aux formations</h3>
          <canvas id="chartInscriptions"></canvas>
        </div>
        <div class="chart-box">
          <h3>Progression moyenne des apprenants</h3>
          <canvas id="chartProgression"></canvas>
        </div>
        <div class="chart-box">
          <h3>Ventes de produits</h3>
          <canvas id="chartVentes"></canvas>
        </div>
        <div class="chart-box">
          <h3>Messages reçus</h3>
          <canvas id="chartMessages"></canvas>
        </div>
      </div>
    </main>
    <nav class="bottom-nav" id="bottomNav">
      <a href="#" class="active" aria-label="Dashboard"><i class="fas fa-chart-line"></i><span>Dashboard</span></a>
      <a href="#" aria-label="Formations"><i class="fas fa-book"></i><span>Formations</span></a>
      <a href="#" aria-label="Produits"><i class="fas fa-box-open"></i><span>Produits</span></a>
      <a href="#" aria-label="Messages"><i class="fas fa-envelope"></i><span>Messages</span></a>
      <a href="#" aria-label="Paramètres"><i class="fas fa-cog"></i><span>Paramètres</span></a>
    </nav>
  </div>

  <script>
    // Sidebar menu toggle for mobile
    const sidebar = document.getElementById('sidebar');
    const menuToggle = document.getElementById('menuToggle');
    menuToggle.addEventListener('click', () => {
      sidebar.classList.toggle('active');
    });

    // Sample data for charts
    const chartInscriptionsData = {
      labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil'],
      datasets: [{
        label: 'Inscriptions',
        data: [120, 150, 180, 200, 170, 220, 250],
        backgroundColor: 'rgba(46, 125, 50, 0.7)',
        borderColor: 'rgba(46, 125, 50, 1)',
        borderWidth: 1,
        fill: true,
        tension: 0.4,
      }]
    };

    const chartProgressionData = {
      labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil'],
      datasets: [{
        label: 'Progression %',
        data: [60, 65, 70, 75, 85, 90, 95],
        backgroundColor: 'rgba(76, 175, 80, 0.7)',
        borderColor: 'rgba(76, 175, 80, 1)',
        borderWidth: 1,
        fill: false,
        tension: 0.4,
      }]
    };

    const chartVentesData = {
      labels: ['Produit 1', 'Produit 2', 'Produit 3', 'Produit 4'],
      datasets: [{
        label: 'Ventes',
        data: [300, 250, 200, 150],
        backgroundColor: [
          'rgba(46, 125, 50, 0.7)',
          'rgba(76, 175, 80, 0.7)',
          'rgba(129, 199, 132, 0.7)',
          'rgba(165, 214, 167, 0.7)'
        ],
        borderWidth: 1,
      }]
    };

    const chartMessagesData = {
      labels: ['Non lus', 'Répondu', 'En attente'],
      datasets: [{
        label: 'Messages',
        data: [20, 40, 10],
        backgroundColor: [
          'rgba(229, 57, 53, 0.7)',
          'rgba(46, 125, 50, 0.7)',
          'rgba(251, 192, 45, 0.7)'
        ],
        borderWidth: 1,
      }]
    };

    // Chart Configurations
    const configInscriptions = {
      type: 'line',
      data: chartInscriptionsData,
      options: {
        responsive: true,
        scales: {
          y: { beginAtZero: true }
        }
      },
    };
    const configProgression = {
      type: 'line',
      data: chartProgressionData,
      options: {
        responsive: true,
        scales: {
          y: { beginAtZero: true, max: 100 }
        }
      },
    };
    const configVentes = {
      type: 'bar',
      data: chartVentesData,
      options: {
        responsive: true,
        scales: {
          y: { beginAtZero: true }
        },
        plugins: {
          legend: { display: false }
        }
      }
    };
    const configMessages = {
      type: 'doughnut',
      data: chartMessagesData,
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'bottom',
            labels: { boxWidth: 15, padding: 15 }
          }
        }
      }
    };

    // Initialize charts
    window.addEventListener('load', () => {
      const ctxInscriptions = document.getElementById('chartInscriptions').getContext('2d');
      new Chart(ctxInscriptions, configInscriptions);
      const ctxProgression = document.getElementById('chartProgression').getContext('2d');
      new Chart(ctxProgression, configProgression);
      const ctxVentes = document.getElementById('chartVentes').getContext('2d');
      new Chart(ctxVentes, configVentes);
      const ctxMessages = document.getElementById('chartMessages').getContext('2d');
      new Chart(ctxMessages, configMessages);
    });
  </script>
</body>
</html>
