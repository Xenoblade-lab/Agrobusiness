<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajouter un produit - Agrobusiness</title>
  <link rel="stylesheet" href="styles/globals.css">
  <link rel="stylesheet" href="styles/entreprise.css">
  <script>
    (function(){ try{var t=localStorage.getItem('theme'); if(t){document.documentElement.setAttribute('data-theme',t);} }catch(e){} })();
  </script>
  <style>
    .form-grid { display:grid; grid-template-columns: 1fr 1fr; gap:20px; }
    .form-row { display:flex; flex-direction:column; gap:8px; }
    .form-row label { font-weight:600; color: #4CAF50; }
    .form-actions { display:flex; gap:12px; margin-top:20px; justify-content: flex-end; }
    input[type="text"], input[type="number"], select, textarea, input[type="file"] {
      padding: 12px 14px; border: 2px solid #e0e0e0; border-radius: 8px;
      background: var(--card-bg); color: var(--text-color); transition: border-color 0.3s;
    }
    input[type="text"]:focus, input[type="number"]:focus, select:focus, textarea:focus {
      border-color: #4CAF50; outline: none;
    }
    textarea { min-height: 140px; resize: vertical; }
    .form-section { margin-bottom: 30px; }
    .form-section h3 { color: #4CAF50; margin-bottom: 15px; }
  </style>
</head>
<body>
  <header>
    <div class="header-wrap">
      <h1>Ajouter un produit</h1>
      <nav class="topnav">
        <a href="produits_liste.php">Voir ses produits</a>
        <a href="/dashboard">Accueil</a>
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
          <h3 class="panel-title">Nouveau produit</h3>
        </div>
        <div class="panel-body">
          <form method="POST" action="#" enctype="multipart/form-data">
            <div class="form-grid">
              <div class="form-row">
                <label for="titre">Titre</label>
                <input type="text" id="titre" name="titre" placeholder="Ex: Mangues biologiques" required>
              </div>
              <div class="form-row">
                <label for="categorie">Catégorie</label>
                <select id="categorie" name="categorie" required>
                  <option value="">Sélectionner...</option>
                  <option value="Fruits">Fruits</option>
                  <option value="Légumes">Légumes</option>
                  <option value="Céréales">Céréales</option>
                  <option value="Autres">Autres</option>
                </select>
              </div>
              <div class="form-row" style="grid-column: 1 / -1;">
                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="Décrivez votre produit..." required></textarea>
              </div>
              <div class="form-row">
                <label for="prix">Prix</label>
                <input type="text" id="prix" name="prix" placeholder="Ex: 3.50 USD/kg" required>
              </div>
              <div class="form-row">
                <label for="stock">Stock (optionnel)</label>
                <input type="number" id="stock" name="stock" placeholder="Quantité en stock">
              </div>
              <div class="form-row" style="grid-column: 1 / -1;">
                <label for="image">Image</label>
                <input type="file" id="image" name="image" accept="image/*">
              </div>
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-primary">Enregistrer</button>
              <a href="produits_liste.php" class="btn btn-outline">Annuler</a>
              <button type="button" id="prefillBtn" class="btn btn-outline">Remplir immédiatement</button>
            </div>
          </form>
        </div>
      </section>
    </main>
  </div>

  <script>
    // Bouton "Remplir immédiatement" pour pré-remplir les champs avec des exemples
    document.getElementById('prefillBtn')?.addEventListener('click', () => {
      const $ = (sel) => document.querySelector(sel);
      $('#titre').value = 'Tomates cerises bio';
      $('#categorie').value = 'Légumes';
      $('#description').value = "Tomates cerises cultivées sans pesticides, goût sucré.\nBarquettes de 250g et 500g disponibles.";
      $('#prix').value = '2.80 USD/barquette';
      $('#stock').value = 120;
      // input file ne peut pas être rempli en JS pour sécurité
    });
  </script>
</body>
</html>