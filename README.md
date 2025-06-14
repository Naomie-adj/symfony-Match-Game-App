# Application Matches - Symfony

Application Symfony pour gérer et afficher les matchs de football avec un système de formatage automatique des scores.

## 📋 Prérequis

- PHP 8.1 ou supérieur
- Composer
- MySQL
- WampServer

## 🚀 Installation

### 1. Cloner le projet
```bash
git clone [https://github.com/Naomie-adj/symfony-Match-Game-App.git]
cd matches-app
```

### 2. Installer les dépendances
```bash
composer install
```

### 3. Configuration de la base de données

#### Créer le fichier .env
```bash
cp .env .env.local
```

#### Modifier la configuration de la base de données dans .env
```env
DATABASE_URL="mysql://root:root@127.0.0.1:3306/matches_db?serverVersion=8.0"
```

### 4. Créer la base de données
```bash
php bin/console doctrine:database:create
```

### 5. Exécuter les migrations
```bash
php bin/console doctrine:migrations:migrate
```

### 6. Charger les données de test
```bash
php bin/console doctrine:fixtures:load
```

## 🏃‍♂️ Lancer l'application

### Serveur de développement Symfony

### avec PHP 
```bash
php -S 127.0.0.1:8000 -t public
```

## 🎯 Fonctionnalités

### Interface
- Affichage chronologique des matchs
- Interface claire et responsive
- Système de mise à jour des scoresr


## 📊 Base de données

### Structure de la table `game`
- `id` : Identifiant unique (auto-incrémenté)
- `team1` : Nom de la première équipe
- `team2` : Nom de la deuxième équipe  
- `score` : Score du match (format automatique : `(2-1)`)
- `played_at` : Date et heure du match

### Exemple de données

Le fichier src/DataFixtures/GameFixtures.php insère automatiquement une dizaine de matchs fictifs avec des scores et des dates aléatoires



