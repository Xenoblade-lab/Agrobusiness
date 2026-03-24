# TODO: Réorganisation MVC pour Agrobusiness

## Étape 1: Créer la structure de dossiers MVC
- [ ] Créer le dossier `models/` à la racine du projet
- [ ] Créer le dossier `views/` à la racine du projet
- [ ] Créer le dossier `public/` pour les assets (scripts, styles, images)
- [ ] Créer des sous-dossiers dans `views/` : `citoyen/`, `entreprise/`, `admin/`, `apprenant/`

## Étape 2: Déplacer et organiser les vues
- [ ] Déplacer tous les fichiers PHP de `citoyen/` vers `views/citoyen/`
- [ ] Déplacer tous les fichiers PHP de `entreprise/` vers `views/entreprise/`
- [ ] Déplacer tous les fichiers PHP de `admin/` vers `views/admin/`
- [ ] Déplacer tous les fichiers PHP de `apprenant/` vers `views/apprenant/`
- [ ] Déplacer `actualites.php` de la racine vers `views/`

## Étape 3: Organiser les assets
- [ ] Déplacer `citoyen/scripts/` et `citoyen/styles/` vers `public/citoyen/`
- [ ] Déplacer `entreprise/scripts/` et `entreprise/styles/` vers `public/entreprise/`
- [ ] Déplacer `admin/scripts/` et `admin/styles/` vers `public/admin/`
- [ ] Déplacer `apprenant/scripts/` et `apprenant/styles/` vers `public/apprenant/`
- [ ] Déplacer `image/` vers `public/images/`

## Étape 4: Créer et organiser les modèles
- [ ] Créer `models/DataModel.php` comme classe de base pour les modèles
- [ ] Créer des modèles spécifiques : `UserModel.php`, `EventModel.php`, etc., basés sur les contrôleurs existants
- [ ] Mettre à jour les chemins dans les contrôleurs pour pointer vers `../models/`

## Étape 5: Mettre à jour les contrôleurs
- [ ] Modifier `Controller.php` pour utiliser le bon chemin vers `views/`
- [ ] Mettre à jour les namespaces et chemins dans tous les contrôleurs
- [ ] Assurer que les contrôleurs étendent la classe de base correctement

## Étape 6: Mettre à jour le routeur et les routes
- [ ] Implémenter la logique MVC dans `Router.php`
- [ ] Mettre à jour `routes/get.php`, `routes/post.php`, etc., pour utiliser les contrôleurs MVC
- [ ] Configurer les routes pour mapper vers les contrôleurs et méthodes appropriés

## Étape 7: Mettre à jour le point d'entrée
- [ ] Modifier `index.php` pour initialiser le routeur MVC
- [ ] Inclure la configuration de la base de données dans le routeur

## Étape 8: Nettoyer et tester
- [ ] Supprimer les anciens dossiers vides (`citoyen/`, `entreprise/`, etc.)
- [ ] Tester les routes principales pour s'assurer que tout fonctionne
- [ ] Mettre à jour les liens dans les vues pour pointer vers les nouveaux chemins d'assets


Agrobusiness/
├── config/
│   └── config.php
├── controllers/
│   ├── Controller.php
│   ├── UserController.php
│   ├── BookingController.php
│   ├── BudgetController.php
│   ├── DataController.php
│   ├── EventController.php
│   └── ...
├── models/
│   ├── DataModel.php
│   ├── UserModel.php
│   └── ...
├── views/
│   ├── citoyen/
│   │   ├── index.php
│   │   ├── formations.php
│   │   ├── annuaire.php
│   │   └── ...
│   ├── entreprise/
│   ├── admin/
│   └── apprenant/
├── public/
│   ├── citoyen/
│   │   ├── scripts/
│   │   └── styles/
│   ├── entreprise/
│   ├── admin/
│   ├── apprenant/
│   └── images/
├── router/
│   └── Router.php
├── routes/
│   ├── get.php
│   ├── post.php
│   ├── put.php
│   └── delete.php
├── data/
│   └── agro.sql
└── index.php
