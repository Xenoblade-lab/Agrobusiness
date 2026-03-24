# TODO List for Creating "À propos" and "Contact" Pages

- [x] Update navigation in index.php to include "À propos" and "Contact" links
- [x] Create apropos.php with sections: Vision, Mission, Objectifs, Équipe / Historique
- [ ] Create contact.php with Formulaire de message and Email / téléphone

Fonctionnalités à implémenter
Dashboard apprenant
[ ] Afficher les actualités agricoles
[ ] Afficher les opportunités d'emploi
[ ] Afficher les formations disponibles
[ ] Afficher les produits et services des entreprises
[ ] Afficher l'annuaire des entreprises
[ ] Afficher les forums de discussion
[ ] Afficher les messages reçus
[ ] Afficher le profil utilisateur
Pages apprenant
[ ] Page d'accueil (index.php)
[ ] Page formations (formations.php)
[ ] Page formation détaillée (formation_plus.php)
[ ] Page produits (produits.php)
[ ] Page annuaire (annuaire.php)
[ ] Page networking (networking.php)
[ ] Page à propos (apropos.php)
[ ] Page paysages (paysage.php)
[ ] Page paysage détaillé (paysage_plus.php)
Fonctionnalités transversales
[ ] Système d'authentification
[ ] Gestion du profil utilisateur
[ ] Messagerie interne
[ ] Participation aux forums
[ ] Inscription aux formations
[ ] Recherche et filtrage
[ ] Notifications
Structure des fichiers
Views
views/apprenant/index.php
views/apprenant/formations.php
views/apprenant/formation_plus.php
views/apprenant/produits.php
views/apprenant/annuaire.php
views/apprenant/networking.php
views/apprenant/apropos.php
views/apprenant/paysage.php
views/apprenant/paysage_plus.php
Controllers
controllers/DashboardController.php (pour le dashboard)
controllers/FormationController.php
controllers/ProduitServiceController.php
controllers/AnnuaireController.php
controllers/MessageController.php
Routes
routes/get.php (pour les routes GET)
Priorités
Implémenter le dashboard citoyen
Implémenter les pages principales
Implémenter les fonctionnalités transversales <environment_details>



1. STRUCTURE MVC + LISTE DES VUES NÉCESSAIRES
🎯 A. Pages communes (6 pages)

Ces pages sont visibles par tout le monde (avant connexion) :

home.php

login.php

register.php

register_entreprise.php (si une entreprise s’inscrit séparément)

register_apprenant.php

mot_de_passe_oublie.php

🎯 B. Espace Admin (10 pages)

Le rôle admin gère les utilisateurs, entreprises, apprenants, etc.

admin/dashboard.php

admin/liste_users.php

admin/detail_user.php

admin/ajouter_user.php

admin/modifier_user.php

admin/liste_entreprises.php

admin/detail_entreprise.php

admin/liste_apprenants.php

admin/detail_apprenant.php

admin/statistiques.php

🎯 C. Espace Entreprise (7 pages)

Une entreprise peut créer des offres, consulter les candidatures, modifier son profil.

entreprise/dashboard.php

entreprise/profil.php

entreprise/modifier_profil.php

entreprise/liste_offres.php

entreprise/ajouter_offre.php

entreprise/modifier_offre.php

entreprise/candidatures.php

🎯 D. Espace Apprenant (6 pages)

L’apprenant peut consulter les offres, postuler et voir son profil.

apprenant/dashboard.php

apprenant/profil.php

apprenant/modifier_profil.php

apprenant/liste_offres.php

apprenant/detail_offre.php

apprenant/mes_candidatures.php

🎯 E. Pages pour les offres et candidatures (5 pages)

offres/liste_offres.php (page publique + apprenant)

offres/detail_offre.php

offres/postuler.php

candidatures/liste.php (pour l’entreprise)

candidatures/detail.php

📌 TOTAL DES VUES

👉 34 pages (views) au total
(selon ta segmentation actuelle)

Tu peux réduire si tu veux (ex : fusionner profil/modifier_profil).

✅ 2. COMBIEN DE CONTROLLERS EN MVC ?

Tu vas utiliser un controller par module :

✔ Controllers nécessaires
1. AuthController

login

register

logout

mot de passe oublié

2. AdminController

gérer utilisateurs

gérer apprenants

gérer entreprises

statistiques

3. EntrepriseController

gérer profil

gérer offres

voir candidatures

4. ApprenantController

gérer profil

voir offres

postuler

gérer candidatures

5. OffreController

liste

détails

créer/modifier/supprimer

6. CandidatureController

dépôt

validation

consultation

📘 TOTAL DES CONTROLLERS : 6