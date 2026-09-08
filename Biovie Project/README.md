# Biovie Coiffure & Soins

Projet web développé dans le cadre du cours 420-5H6-MO.  
Application de gestion de rendez-vous pour salon de coiffure et boutique en ligne de produits capillaires.

## Auteurs
* **Yassin Ibrahim**


---

## Prérequis & Environnement
* **AMPPS** (Apache + PHP 8.x + MySQL)
* Navigateur Web récent (Chrome, Firefox, Edge)

---

## Configuration et Installation dans AMPPS

### 1. Configuration d'Apache (`httpd.conf`)
Pour lier AMPPS à votre projet GitHub, modifiez les directives suivantes dans le fichier de configuration Apache (`httpd.conf`) :

```apache
# Directives principales
DocumentRoot "C:/Github/420-5H6-MO-Yassin-Ibrahim/Biovie Project"
<Directory "C:/Github/420-5H6-MO-Yassin-Ibrahim/Biovie Project">
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>

# Configuration du VirtualHost (en bas de fichier)
<VirtualHost 127.0.0.1:80>
    <Directory "C:/Github/420-5H6-MO-Yassin-Ibrahim/Biovie Project">
        Options FollowSymLinks Indexes
        AllowOverride All
        Require all granted
    </Directory>
    ServerName localhost
    ServerAlias localhost 127.0.0.1
    DocumentRoot "C:/Github/420-5H6-MO-Yassin-Ibrahim/Biovie Project"
    ErrorLog "{$path}/apache/logs/error.log"
    CustomLog "{$path}/apache/logs/access.log" combined
</VirtualHost>
