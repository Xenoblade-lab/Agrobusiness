CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    telephone VARCHAR(50),
    role ENUM('admin','entreprise','apprenant') DEFAULT 'apprenant',
    statut ENUM('actif','inactif') DEFAULT 'actif',
    date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE entreprises (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    nom_entreprise VARCHAR(150),
    secteur VARCHAR(100),
    description TEXT,
    adresse VARCHAR(255),
    province VARCHAR(100),
    email_contact VARCHAR(150),
    telephone_contact VARCHAR(50),
    logo VARCHAR(255),
    site_web VARCHAR(255),
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE produits_services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    entreprise_id INT,
    type ENUM('produit', 'service'),
    nom VARCHAR(150),
    description TEXT,
    prix DECIMAL(10,2),
    image VARCHAR(255),
    date_ajout DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (entreprise_id) REFERENCES entreprises(id) ON DELETE CASCADE
);


CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    expediteur_id INT,
    destinataire_id INT,
    contenu TEXT,
    date_message DATETIME DEFAULT CURRENT_TIMESTAMP,
    lu BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (expediteur_id) REFERENCES users(id),
    FOREIGN KEY (destinataire_id) REFERENCES users(id)
);


CREATE TABLE formations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(200),
    categorie VARCHAR(100),
    description TEXT,
    niveau ENUM('debutant','intermediaire','avance'),
    duree VARCHAR(50),
    image VARCHAR(255),
    date_ajout DATETIME DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE cours (
    id INT AUTO_INCREMENT PRIMARY KEY,
    formation_id INT,
    titre VARCHAR(200),
    contenu TEXT,
    video_url VARCHAR(255),
    ordre INT,
    FOREIGN KEY (formation_id) REFERENCES formations(id) ON DELETE CASCADE
);


CREATE TABLE apprenants_formations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    formation_id INT,
    progression INT DEFAULT 0,
    date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (formation_id) REFERENCES formations(id)
);


CREATE TABLE actualites (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(200),
    contenu TEXT,
    image VARCHAR(255),
    auteur_id INT,
    date_pub DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (auteur_id) REFERENCES users(id)
);


CREATE TABLE opportunites (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(200),
    categorie VARCHAR(100),
    description TEXT,
    deadline DATE,
    lien_postulation VARCHAR(255),
    date_pub DATETIME DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE forums (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(200),
    categorie VARCHAR(100),
    description TEXT,
    user_id INT,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);


CREATE TABLE forums_reponses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    forum_id INT,
    user_id INT,
    contenu TEXT,
    date_reponse DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (forum_id) REFERENCES forums(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id)
);


CREATE TABLE admin_logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    admin_id INT,
    action VARCHAR(255),
    date_action DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (admin_id) REFERENCES users(id)
);

-- Enhancements for Annuaire des Entreprises Agricoles

-- Add columns to entreprises table
ALTER TABLE entreprises ADD COLUMN taille ENUM('PME', 'cooperative', 'startup', 'grande_entreprise') DEFAULT 'PME';
ALTER TABLE entreprises ADD COLUMN region VARCHAR(100);
ALTER TABLE entreprises ADD COLUMN localisation VARCHAR(255);
ALTER TABLE entreprises ADD COLUMN visite_count INT DEFAULT 0;
ALTER TABLE entreprises ADD COLUMN actif BOOLEAN DEFAULT TRUE;
ALTER TABLE entreprises ADD COLUMN date_modification DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;

-- Table for enterprise images (gallery)
CREATE TABLE IF NOT EXISTS entreprise_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    entreprise_id INT NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    description VARCHAR(255),
    ordre INT DEFAULT 0,
    FOREIGN KEY (entreprise_id) REFERENCES entreprises(id) ON DELETE CASCADE
);

-- Table for enterprise videos (optional)
CREATE TABLE IF NOT EXISTS entreprise_videos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    entreprise_id INT NOT NULL,
    video_url VARCHAR(500),
    titre VARCHAR(255),
    description TEXT,
    FOREIGN KEY (entreprise_id) REFERENCES entreprises(id) ON DELETE CASCADE
);

-- Table for enterprise contacts (additional contacts)
CREATE TABLE IF NOT EXISTS entreprise_contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    entreprise_id INT NOT NULL,
    nom VARCHAR(255),
    poste VARCHAR(100),
    telephone VARCHAR(20),
    email VARCHAR(255),
    FOREIGN KEY (entreprise_id) REFERENCES entreprises(id) ON DELETE CASCADE
);

-- Insert sample data for testing
INSERT INTO entreprises (user_id, nom_entreprise, secteur, taille, region, province, localisation, description, email_contact, telephone_contact, logo, site_web) VALUES
(2, 'AgriCoop RDC', 'production', 'cooperative', 'Centre', 'Kasaï', 'Kananga', 'Coopérative agricole spécialisée dans la production de café et cacao', 'contact@agricoop-rdc.com', '+243 81 234 5678', '/Agrobusiness/image/1.JPG', 'https://agricoop-rdc.com'),
(3, 'Elevage Moderne', 'elevage', 'PME', 'Est', 'Nord-Kivu', 'Goma', 'Entreprise d\'élevage de volailles et bovins', 'info@elevage-moderne.com', '+243 82 345 6789', '/Agrobusiness/image/2.PNG', NULL),
(4, 'TransformAgro', 'transformation', 'startup', 'Ouest', 'Kinshasa', 'Kinshasa', 'Transformation de produits agricoles locaux', 'hello@transformagro.com', '+243 83 456 7890', '/Agrobusiness/image/3.jpg', 'https://transformagro.com'),
(5, 'DistriFarm', 'distribution', 'grande_entreprise', 'Centre', 'Lualaba', 'Kolwezi', 'Distribution de produits agricoles à travers la RDC', 'contact@distri-farm.com', '+243 84 567 8901', '/Agrobusiness/image/4.jpg', 'https://distri-farm.com');

INSERT INTO produits_services (entreprise_id, type, nom, description, prix, image) VALUES
(1, 'produit', 'Café Arabica', 'Café de qualité supérieure cultivé en altitude', 15.50, '/Agrobusiness/image/5.jpg'),
(1, 'produit', 'Cacao Fermenté', 'Cacao fermenté naturellement', 8.00, '/Agrobusiness/image/6.jpg'),
(2, 'produit', 'Poulets de Chair', 'Poulets élevés en liberté', 25.00, '/Agrobusiness/image/7.jpg'),
(2, 'produit', 'Bœuf Local', 'Viande bovine de qualité', 45.00, '/Agrobusiness/image/8.jpg'),
(3, 'produit', 'Huile de Palme', 'Huile extraite localement', 12.00, '/Agrobusiness/image/9.jpg'),
(4, 'produit', 'Riz Blanc', 'Riz de qualité distribué partout', 5.50, '/Agrobusiness/image/10.jpg');

INSERT INTO entreprise_images (entreprise_id, image_path, description, ordre) VALUES
(1, '/Agrobusiness/image/11.jpg', 'Plantation de café', 1),
(1, '/Agrobusiness/image/12.jpg', 'Récolte de cacao', 2),
(2, '/Agrobusiness/image/13.jpg', 'Élevage de volailles', 1),
(3, '/Agrobusiness/image/14.jpg', 'Unité de transformation', 1),
(4, '/Agrobusiness/image/17.jpg', 'Entrepôt de distribution', 1);
