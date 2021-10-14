# Test technique
BOUKELA Mohamed

### Pré-requis
* PHP 7.4
* Composer

Vous vouvez vérifier les pré-requis avec la commande suivante:

``bash
symfony check:requirements
``
### demarrer le projet
php bin/console doctrine:database:create
php bin/console make:migration
php bin/console doctrine:migrations:migrate
### generer des fausses données 

php bin/console doctrine:fixtures:load

