<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opportunités - Agrobusiness Summit</title>
    <script>
      (function(){
        try {
          var t = localStorage.getItem('theme') || 'light';
          document.documentElement.setAttribute('data-theme', t);
        } catch(e) {}
      })();
    </script>
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
                    <a href="annuaire.php" class="nav-link">Annuaire</a>
                    <a href="formations.php" class="nav-link">Formations</a>
                    <a href="actualites.php" class="nav-link active">Opportunités</a>
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
                <h1 class="section-title">Opportunités d'Affaires</h1>
                <p class="section-subtitle">Découvrez les dernières opportunités d'affaires, appels d'offres et partenariats dans le secteur agricole congolais</p>

                <div class="search-section">
                    <div class="search-bar">
                        <input type="text" id="searchInput" placeholder="Rechercher une opportunité...">
                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                    <div class="filters">
                        <select id="categoryFilter">
                            <option value="">Toutes les catégories</option>
                            <option value="appel-offre">Appels d'offres</option>
                            <option value="partenariat">Partenariats</option>
                            <option value="investissement">Investissements</option>
                            <option value="emploi">Emploi</option>
                        </select>
                        <select id="sectorFilter">
                            <option value="">Tous les secteurs</option>
                            <option value="agriculture">Agriculture</option>
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
                    </div>
                </div>

                <div class="actualites-grid" id="actualitesGrid">
                    <!-- Les opportunités seront chargées dynamiquement -->
                </div>

                <div class="pagination">
                    <button class="btn btn-outline" id="prevBtn" disabled>Précédent</button>
                    <span id="pageInfo">Page 1 sur 1</span>
                    <button class="btn btn-outline" id="nextBtn" disabled>Suivant</button>
                </div>
            </div>
        </section>

        <section class="section stats-section">
            <div class="container">
                <h2 class="section-title">Impact de nos opportunités</h2>
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number" id="opportunites-count">100+</div>
                        <div class="stat-label">Opportunités publiées</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" id="partenaires-count">500+</div>
                        <div class="stat-label">Entreprises partenaires</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" id="succes-count">85%</div>
                        <div class="stat-label">Taux de succès</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" id="investissements-count">50M+</div>
                        <div class="stat-label">FC investis</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2 class="section-title">Témoignages de réussite</h2>
                <div class="actualites-testimonials">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"Grâce à une opportunité trouvée sur la plateforme, j'ai pu établir un partenariat fructueux qui a doublé mon chiffre d'affaires."</p>
                            <div class="testimonial-author">
                                <img src="/placeholder.svg?height=60&width=60" alt="Pierre Nkosi" class="author-avatar">
                                <div class="author-info">
                                    <strong>Pierre Nkosi</strong>
                                    <span>Entrepreneur agricole, Nord-Kivu</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"La plateforme m'a permis de trouver des investisseurs pour développer mon projet d'élevage à grande échelle."</p>
                            <div class="testimonial-author">
                                <img src="/placeholder.svg?height=60&width=60" alt="Sophie Lumbu" class="author-avatar">
                                <div class="author-info">
                                    <strong>Sophie Lumbu</strong>
                                    <span>Éleveuse, Kasaï Oriental</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="actualites-cta">
                    <h2>Prêt à saisir une opportunité ?</h2>
                    <p>Publiez vos opportunités ou trouvez le partenaire idéal pour développer votre activité agricole.</p>
                    <div class="cta-buttons">
                        <button class="btn btn-primary" id="publierBtn">Publier une opportunité</button>
                        <button class="btn btn-outline" id="explorerBtn">Explorer plus</button>
                    </div>
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
                        <li><a href="annuaire.php">Annuaire</a></li>
                        <li><a href="formations.php">Formations</a></li>
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
        // Charger les données des opportunités
        fetch('/Agrobusiness/data/actualites.json')
            .then(response => response.json())
            .then(data => {
                displayActualites(data.actualites || []);
            })
            .catch(() => {
                displayActualites([]);
            });

        function displayActualites(actualites) {
            const grid = document.getElementById('actualitesGrid');
            grid.innerHTML = '';

            if (actualites.length === 0) {
                grid.innerHTML = '<p class="no-results">Aucune opportunité disponible pour le moment.</p>';
                return;
            }

            actualites.forEach(actualite => {
                const card = document.createElement('div');
                card.className = 'actualite-card';
                card.innerHTML = `
                    <div class="actualite-header">
                        <div class="actualite-category">${actualite.categorie}</div>
                        <div class="actualite-date">${actualite.date_publication}</div>
                    </div>
                    <div class="actualite-content">
                        <h3>${actualite.titre}</h3>
                        <p class="actualite-description">${actualite.description}</p>
                        <div class="actualite-meta">
                            <span><i class="fas fa-map-marker-alt"></i> ${actualite.localisation}</span>
                            <span><i class="fas fa-building"></i> ${actualite.organisateur}</span>
                            <span><i class="fas fa-clock"></i> ${actualite.delai}</span>
                        </div>
                        <div class="actualite-budget">
                            <strong>${actualite.budget || 'N/A'}</strong>
                            <span class="actualite-secteur">${actualite.secteur}</span>
                        </div>
                    </div>
                    <div class="actualite-actions">
                        <button class="btn btn-outline">Voir détails</button>
                        <button class="btn btn-primary">Postuler</button>
                    </div>
                `;
                grid.appendChild(card);
            });
        }

        // Fonctionnalité de recherche et filtres
        document.getElementById('searchInput').addEventListener('input', filterActualites);
        document.getElementById('categoryFilter').addEventListener('change', filterActualites);
        document.getElementById('sectorFilter').addEventListener('change', filterActualites);
        document.getElementById('provinceFilter').addEventListener('change', filterActualites);

        function filterActualites() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const categoryFilter = document.getElementById('categoryFilter').value;
            const sectorFilter = document.getElementById('sectorFilter').value;
            const provinceFilter = document.getElementById('provinceFilter').value;

            fetch('/Agrobusiness/data/actualites.json')
                .then(response => response.json())
                .then(data => {
                    let filtered = data.actualites || [];

                    if (searchTerm) {
                        filtered = filtered.filter(a =>
                            a.titre.toLowerCase().includes(searchTerm) ||
                            a.description.toLowerCase().includes(searchTerm)
                        );
                    }

                    if (categoryFilter) {
                        filtered = filtered.filter(a => a.categorie.toLowerCase().includes(categoryFilter));
                    }

                    if (sectorFilter) {
                        filtered = filtered.filter(a => a.secteur.toLowerCase().includes(sectorFilter));
                    }

                    if (provinceFilter) {
                        filtered = filtered.filter(a => a.localisation.toLowerCase().includes(provinceFilter));
                    }

                    displayActualites(filtered);
                })
                .catch(error => {
                    console.error('Erreur lors du chargement des opportunités:', error);
                    displayActualites([]);
                });
        }

        // Actions des boutons CTA
        document.getElementById('publierBtn').addEventListener('click', () => {
            alert('Fonctionnalité de publication à implémenter');
        });

        document.getElementById('explorerBtn').addEventListener('click', () => {
            alert('Fonctionnalité d\'exploration à implémenter');
        });
    </script>
</body>
</html>
