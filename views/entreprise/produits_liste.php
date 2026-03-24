<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mes Produits - Agrobusiness</title>
  <link rel="stylesheet" href="styles/globals.css">
  <link rel="stylesheet" href="styles/entreprise.css">
  <script>
    (function(){ try{var t=localStorage.getItem('theme'); if(t){document.documentElement.setAttribute('data-theme',t);} }catch(e){} })();
  </script>
</head>
<body>
  <header>
    <div class="header-wrap">
      <h1>Mes Produits</h1>
      <nav class="topnav">
        <a href="/dashboard">Accueil</a>
        <a href="produits_ajouter.php">Ajouter un produit</a>
        <a href="/entreprise/messages">Messages</a>
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
      <section class="card panel">
        <div class="panel-header">
          <h3 class="panel-title">Liste des produits</h3>
          <button id="btnShowAdd" class="btn btn-primary">Ajouter un produit</button>
        </div>
        <div class="panel-body">
          <div id="addFormContainer" class="card" style="display:none;margin-bottom:16px;">
            <div class="card-body" id="addFormInner"></div>
          </div>
          <table>
            <thead>
              <tr>
                <th>Titre</th>
                <th>Image</th>
                <th>Catégorie</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Stock</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($products)) : foreach ($products as $p) : ?>
                <tr>
                  <td><?php echo htmlspecialchars($p['titre'] ?? ($p['nom'] ?? '')); ?></td>
                  <td>
                    <?php if (!empty($p['image'])): ?>
                      <img src="<?php echo htmlspecialchars($p['image']); ?>" alt="<?php echo htmlspecialchars($p['titre'] ?? ''); ?>" style="width:56px;height:56px;object-fit:cover;border-radius:8px;">
                    <?php else: ?>
                      <span style="color:#6b7280;">—</span>
                    <?php endif; ?>
                  </td>
                  <td><?php echo htmlspecialchars($p['categorie'] ?? ''); ?></td>
                  <td><?php echo htmlspecialchars($p['description'] ?? ''); ?></td>
                  <td><?php echo htmlspecialchars($p['prix'] ?? ''); ?></td>
                  <td><?php echo htmlspecialchars($p['stock'] ?? ''); ?></td>
                </tr>
              <?php endforeach; else: ?>
                <tr><td colspan="6" style="text-align:center;color:#6b7280;">Aucun produit pour le moment</td></tr>
              <?php endif; ?>
            </tbody>
            </table>
          </div>
        </div>
      </section>
    </main>
  </div>

  <script>
    // Charge et affiche le formulaire d'ajout sans quitter la page
    (function(){
      const btn = document.getElementById('btnShowAdd');
      const container = document.getElementById('addFormContainer');
      const inner = document.getElementById('addFormInner');
      let loaded = false;

      async function loadForm() {
        if (loaded) { container.style.display = container.style.display === 'none' ? '' : 'none'; return; }
        try {
          const res = await fetch('produits_ajouter.php', { credentials: 'same-origin' });
          const html = await res.text();
          const doc = new DOMParser().parseFromString(html, 'text/html');
          const form = doc.querySelector('form');
          if (!form) { inner.innerHTML = '<p style="color:#dc2626;">Formulaire introuvable.</p>'; container.style.display=''; return; }
          inner.innerHTML = '';
          inner.appendChild(form);
          // Adapter l'action si nécessaire
          if (!form.getAttribute('action') || form.getAttribute('action') === '#') {
            form.setAttribute('action', window.location.href);
          }
          // Ajoute un bouton pour masquer
          const closeBtn = document.createElement('button');
          closeBtn.type = 'button';
          closeBtn.className = 'btn btn-outline';
          closeBtn.textContent = 'Fermer';
          closeBtn.style.marginLeft = '8px';
          form.querySelector('.form-actions')?.appendChild(closeBtn);
          closeBtn.addEventListener('click', ()=>{ container.style.display = 'none'; });

          container.style.display = '';
          loaded = true;
        } catch (e) {
          inner.innerHTML = '<p style="color:#dc2626;">Erreur lors du chargement du formulaire.</p>';
          container.style.display='';
        }
      }

      btn?.addEventListener('click', loadForm);
    })();
  </script>
</body>
</html>