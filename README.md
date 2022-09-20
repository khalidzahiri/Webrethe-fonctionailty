# Laravel Docker

---

## Les commandes pour faire fonctionner ce docker-compose

> **_Optionnel : Créez un répertoire pgsql_**
>
> **_Si les ports 80, et 5432 sont busy sur vos machines, au choix vous pouvez bindez d'autres ports dans les fichiers `docker-compose`, ou stopper les services de votre hôte._**
>
> **_Si on change les ports dans le docker compose, ne pas oublier de re compiler l'image_**

### Pour le développement

On build les images :

- `docker compose build apachephp`
- `docker compose build pgsql`
- `docker compose build artisan`
- `docker compose build composer`

On exécute le conteneur `apachephp`:

- `docker compose up apachephp`

le service `apachephp` dépend du service pgsql, ce service sera builder et démarrera avant `apachephp`.

On a accès au site sur <http://localhost>. A ce stade, on devrait avoir une page 403 apache.

### Création du projet laravel

Créer un projet laravel avec composer :

`docker compose run --rm --user $(id -u):$(id -g) composer create-project laravel/laravel .`

> Sur linux et windows WSL, le flag `--user $(id -u):$(id -g)` est nécessaire pour obtenir les permissions de fichiers correctes, sur mac il semble que ce ne soit pas nécessaire. Il faut quand même rester vigilant, parfois le user et group des fichiers est root et le fichier n'a pas le flag -w. Il faudra donc rectifier le tir avec ces commandes : `sudo chown USER:GROUP /chemin/fichier && chmod o+w /chemin/fichier`

Cette commande créera un projet laravel dans le répertoire `src`.

**ou **

`git clone <URL> src`

Cette commande clonera un projet dans le répertoire `src`.

---

A ce stade on a une nouvelle erreur, il manque le flag `w` au fichier `storage/logs/laravel.log` :

`chmod o+w src/storage/logs/laravel.log`

Enfin si on rencontre une erreur pour écrire dans le fichier de session :

`chmod -R o+w src/storage/framework/`

Modifiez les variables dans le fichier `.env` :

```env
DB_CONNECTION=pgsql
DB_HOST=pgsql
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=secret
```

#### Exemples de commandes

Créer un fichier avec artisan :

`dpcker compose run --rm --user $(id -u):$(id -g) artisan make:model Post -mc`, cette commande créée un Model Post avec une migration et un contrôleur.

La création d'alias dans `~/.bashrc` est recommandée.

```bash
alias artisan='docker compose run --rm --user $(id -u):$(id -g) artisan'
alias docomposer='docker compose run --rm --user $(id -u):$(id -g) composer'
alias donpm='docker compose run --rm npm'
```

Ensuite on se sert de ces commandes dans le répertoire ou se situe les fichiers `docker-compose`:

```bash
docomposer require stripe/stripe-php
docomposer require --dev phpunit/phpunit
artisan make:model Article
```

### Front-End

Dans le répertoire des fichiers `docker-compose`, tapez ces commandes :

```bash
donpm install
donpm run watch
```

Dans le fichier `src/welcome.blade.php`, Ajoutez ces lignes aux endroits adéquats:

```html
<link rel="stylesheet" href="{{ asset('css/app.css') }}" />

<script src="{{ asset('js/app.js') }}"></script>
```

Vous pouvez maintenant codé dans les fichiers `resources/js/app.js` et `resources/css/app.css` ils seront recompilées à chaque modification.

### La BDD

Si vous voulez vous servir d'adminer pour gérer la BDD :

`docker compose run --rm -p 8080:8080 adminer`

Sélectionner Système => PostgreSQL et Serveur => pgsql ou le nom de votre conteneur qui fait tourner postgres, entrez les infos de connexion et c'est tout.

### Tinker

La commande pour laravel tinker :

`docker compose run --rm artisan tinker`

Ou si vous avez fait un alias :

`artisan tinker`

Ensuite c'est pareil, c'est toujours tinker :

```php
User::create([
    'name' => 'John',
    'email' => 'john@oclock.io',
    'password' => Hash::make('password')
]);
```
