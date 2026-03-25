<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annuaire - Agrobusiness Summit</title>
    <link rel="stylesheet" href="styles/globals.css">
    <link rel="stylesheet" href="styles/components.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">
                <div class="nav-brand">
                    <img src="image/logo.jpg" alt="Agrobusiness Summit" class="logo">
                    <span class="brand-text">Agrobusiness Summit</span>
                </div>
                <div class="nav-links" id="navLinks">
                    <a href="index.php" class="nav-link">Accueil</a>
                    <a href="annuaire.php" class="nav-link active">Annuaire</a>
                    <a href="formations.php" class="nav-link">Formations</a>
                    <a href="actualites.php" class="nav-link">Opportunités</a>
                    <a href="networking.php" class="nav-link">Networking</a>
                    <a href="inscription.php" class="nav-link">Inscription</a>
                </div>
                <button class="theme-toggle" id="themeToggle" title="Basculer le thème">
                    <i class="fas fa-moon"></i>
                </button>
                <button class="nav-toggle" id="navToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </nav>

    <main>
        <section class="section">
            <div class="container">
                <h1 class="section-title">Annuaire des Entreprises</h1>
                <p class="section-subtitle">Découvrez les entreprises agricoles de la République Démocratique du Congo</p>

                <div class="search-section">
                    <div class="search-bar">
                        <input type="text" id="searchInput" placeholder="Rechercher une entreprise...">
                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                <div class="filters">
                        <select id="sectorFilter">
                            <option value="">Tous les secteurs</option>
                            <option value="production">Production</option>
                            <option value="elevage">Élevage</option>
                            <option value="transformation">Transformation</option>
                            <option value="distribution">Distribution</option>
                        </select>
                        <select id="provinceFilter">
                            <option value="">Toutes les provinces</option>
                            <option value="Kinshasa">Kinshasa</option>
                            <option value="Kongo Central">Kongo Central</option>
                            <option value="Kwango">Kwango</option>
                            <option value="Kwilu">Kwilu</option>
                            <option value="Mai-Ndombe">Mai-Ndombe</option>
                            <option value="Kasaï">Kasaï</option>
                            <option value="Kasaï Central">Kasaï Central</option>
                            <option value="Kasaï Oriental">Kasaï Oriental</option>
                            <option value="Lomami">Lomami</option>
                            <option value="Sankuru">Sankuru</option>
                            <option value="Maniema">Maniema</option>
                            <option value="Sud-Kivu">Sud-Kivu</option>
                            <option value="Nord-Kivu">Nord-Kivu</option>
                            <option value="Ituri">Ituri</option>
                            <option value="Haut-Uele">Haut-Uele</option>
                            <option value="Tshopo">Tshopo</option>
                            <option value="Bas-Uele">Bas-Uele</option>
                            <option value="Nord-Ubangi">Nord-Ubangi</option>
                            <option value="Mongala">Mongala</option>
                            <option value="Sud-Ubangi">Sud-Ubangi</option>
                            <option value="Équateur">Équateur</option>
                            <option value="Tshuapa">Tshuapa</option>
                            <option value="Tanganyika">Tanganyika</option>
                            <option value="Haut-Lomami">Haut-Lomami</option>
                            <option value="Lualaba">Lualaba</option>
                            <option value="Haut-Katanga">Haut-Katanga</option>
                        </select>
                        <select id="sizeFilter">
                            <option value="">Toutes les tailles</option>
                            <option value="PME">PME</option>
                            <option value="cooperative">Coopérative</option>
                            <option value="startup">Startup</option>
                            <option value="grande_entreprise">Grande Entreprise</option>
                        </select>
                        <input type="text" id="keywordFilter" placeholder="Mots-clés...">
                    </div>
                </div>

                <div class="annuaire-grid" id="annuaireGrid">
                    <!-- Les entreprises seront chargées dynamiquement -->
                </div>

                <div class="pagination">
                    <button class="btn btn-outline" id="prevBtn" disabled>Précédent</button>
                    <span id="pageInfo">Page 1 sur 1</span>
                    <button class="btn btn-outline" id="nextBtn" disabled>Suivant</button>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Agrobusiness Summit</h4>
                    <p>Plateforme de référence pour l'agrobusiness en RDC</p>
                </div>
                <div class="footer-section">
                    <h4>Liens Rapides</h4>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="formations.php">Formations</a></li>
                        <li><a href="actualites.php">Actualités</a></li>
                        <li><a href="networking.php">Networking</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact</h4>
                    <p>Email: contact@agrobusiness-rdc.com</p>
                    <p>Tél: +243 XX XXX XXX</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Agrobusiness Summit. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script src="scripts/main.js"></script>
    <script>
        // Charger les données de l'annuaire
        fetch('/Agrobusiness/data/annuaire.json')
            .then(response => response.json())
            .then(data => {
                displayAnnuaire(data.annuaire || []);
            })
            .catch(() => {
                displayAnnuaire([]);
            });

        function displayAnnuaire(entreprises) {
            const grid = document.getElementById('annuaireGrid');
            grid.innerHTML = '';

            if (entreprises.length === 0) {
                grid.innerHTML = '<p class="no-results">Aucune entreprise trouvée.</p>';
                return;
            }

            entreprises.forEach(entreprise => {
                const card = document.createElement('div');
                card.className = 'entreprise-card';
                card.innerHTML = `
                    <div class="entreprise-header">
                        <img src="${entreprise.logo || '/placeholder.svg?height=60&width=60'}" alt="${entreprise.nom}" class="entreprise-logo">
                        <div class="entreprise-info">
                            <h3>${entreprise.nom}</h3>
                            <p class="entreprise-secteur">${entreprise.secteur}</p>
                        </div>
                    </div>
                    <div class="entreprise-details">
                        <p><i class="fas fa-map-marker-alt"></i> ${entreprise.localisation}</p>
                        <p><i class="fas fa-phone"></i> ${entreprise.telephone}</p>
                        <p><i class="fas fa-envelope"></i> ${entreprise.email}</p>
                        <p class="entreprise-description">${entreprise.description}</p>
                    </div>
                    <div class="entreprise-actions">
                        <button class="btn btn-outline btn-sm">Voir détails</button>
                        <button class="btn btn-primary btn-sm">Contacter</button>
                    </div>
                `;
                grid.appendChild(card);
            });
        }

        // Fonctionnalité de recherche
        document.getElementById('searchInput').addEventListener('input', filterEntreprises);
        document.getElementById('sectorFilter').addEventListener('change', filterEntreprises);
        document.getElementById('provinceFilter').addEventListener('change', filterEntreprises);

        function filterEntreprises() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const sectorFilter = document.getElementById('sectorFilter').value;
            const provinceFilter = document.getElementById('provinceFilter').value;
            const sizeFilter = document.getElementById('sizeFilter').value;
            const keywordFilter = document.getElementById('keywordFilter').value.toLowerCase();

            fetch('/Agrobusiness/api/get_entreprises.php')
                .then(response => response.json())
                .then(data => {
                    let filtered = data.entreprises || [];

                    if (searchTerm) {
                        filtered = filtered.filter(e =>
                            e.nom_entreprise.toLowerCase().includes(searchTerm) ||
                            e.description.toLowerCase().includes(searchTerm)
                        );
                    }

                    if (sectorFilter) {
                        filtered = filtered.filter(e => e.secteur.toLowerCase().includes(sectorFilter));
                    }

                    if (provinceFilter) {
                        filtered = filtered.filter(e => e.province.toLowerCase().includes(provinceFilter));
                    }

                    if (sizeFilter) {
                        filtered = filtered.filter(e => e.taille === sizeFilter);
                    }

                    if (keywordFilter) {
                        filtered = filtered.filter(e =>
                            e.nom_entreprise.toLowerCase().includes(keywordFilter) ||
                            e.description.toLowerCase().includes(keywordFilter) ||
                            e.secteur.toLowerCase().includes(keywordFilter)
                        );
                    }

                    displayAnnuaire(filtered);
                })
                .catch(error => {
                    console.error('Erreur lors du chargement des entreprises:', error);
                    displayAnnuaire([]);
                });
        }
    </script>
</body>
</html>
