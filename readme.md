# LO07 - Projet nounou

Projet réalisé dans le cadre du l'UE LO07 à l'UTT.


## Installation du projet

* Clonez le git : `git clone https://github.com/louisVHZ/LO07Project.git`.

* Créez une base de données puis insérez le fichier de création des tables `SQL/creation.sql`.

* Installez Composer : https://getcomposer.org/download/

* Ouvrez un terminal dans le dossier racine du projet `dev-develop/` et tapez la commande `composer update`.

* Installez WAMP/LAMP/MAMP puis ajoutez un "Virtual Host" qui pointe sur `dev-develop/public/`.


## Configuration du projet

* Editez le fichier `dev-develop/.env` avec vos paramètres
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nounou
DB_USERNAME=root
DB_PASSWORD=secret
```

* Accédez au projet en allant sur le "Vitual Host" qui vous avez créé précédemment.


## Laravel

* Les routes se situent dans le fichier `dev-develop/routes/web.php`

* Les controleurs se situent dans le dossier `dev-develop/app/Http/Controllers/`

* Les modèles se situent dans le dossier `dev-develop/app/`

* Les vues se situent dans le dossier `dev-develop/resources/views/`


___

**Author :** Louis VAUCHEZ & Kévin LEMAIRE
