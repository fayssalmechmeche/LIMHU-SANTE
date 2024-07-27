# Limhu-Santé

## Description

Limhu-Santé est un projet web développé avec le framework Symfony. Ce projet vise à appliquer toutes les bonnes pratiques de SEO (Search Engine Optimization) afin d'optimiser sa visibilité et d'obtenir les meilleures places dans les résultats de recherche Google.

Résultat sur le mot clé "limhu" : 

![image](https://github.com/user-attachments/assets/fcf82262-a98b-4669-8dc0-31f63a2fa8f0)


## Fonctionnalités

- **Optimisation des métadonnées** : Insertion dynamique des balises méta (title, description, keywords) pour chaque page.
- **URLs conviviales** : Utilisation de routes SEO-friendly pour une meilleure indexation.
- **Contenu structuré** : Utilisation de schémas de données structurées pour aider les moteurs de recherche à comprendre le contenu.
- **Performance optimisée** : Améliorations de la vitesse de chargement des pages.
- **Mobile-friendly** : Conception responsive pour une expérience utilisateur optimale sur tous les appareils.
- **Fichiers sitemap et robots** : Génération automatique des fichiers sitemap.xml et robots.txt pour une indexation efficace.

## Prérequis

- PHP >= 8.1
- Composer
- Symfony CLI
- MySQL ou tout autre SGBD compatible avec Doctrine

## Installation

1. **Cloner le dépôt**

    ```bash
    git clone https://github.com/votre-utilisateur/limhu-sante.git
    cd limhu-sante
    ```

2. **Installer les dépendances**

    ```bash
    composer install
    ```

3. **Configurer la base de données**

    Modifier le fichier `.env` pour définir les paramètres de connexion à votre base de données :

    ```bash
    DATABASE_URL="mysql://username:password@127.0.0.1:3306/limhu_sante?serverVersion=5.7"
    ```

4. **Créer la base de données et exécuter les migrations**

    ```bash
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate
    ```

5. **Lancer le serveur de développement**

    ```bash
    symfony server:start
    ```

    Le projet sera accessible à l'adresse `http://127.0.0.1:8000`.

## Bonnes pratiques SEO appliquées

### Métadonnées

- Utilisation des balises `<title>` et `<meta name="description">` spécifiques pour chaque page.
- Insertion des balises Open Graph et Twitter Card pour une meilleure présentation sur les réseaux sociaux.

### URLs conviviales

- Utilisation de routes lisibles et descriptives.
- Suppression des identifiants inutiles dans les URLs.

### Contenu structuré

- Optimisation des images
- Structure HYML respectant les bonnes pratiques

### Mobile-friendly

- Conception responsive avec du CSS
- Tests réguliers avec Google Mobile-Friendly Test.

### Sitemap et robots

- Génération automatique d'un fichier `sitemap.xml` à jour.
- Configuration d'un fichier `robots.txt` pour guider les moteurs de recherche.

## Contribuer

Les contributions sont les bienvenues ! Veuillez ouvrir une issue pour discuter de ce que vous souhaitez changer ou ajouter.

## Licence

Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.
