- download or run the following command:
``` gh repo clone alphasky-org/alphasky-cms ```
- create a new database for the project

- Then run the following command in your terminal:
``` composer install ```
#### 1-  Use website to install the project:
```  php artisan cms:publish:assets ```

- then run the following command to start the development server during installation:
``` php artisan serve --no-reload ```

> **Note:** The web installer updates the `.env` file after you submit the database connection details. The default `php artisan serve` command watches this file and restarts the development server when it changes, which interrupts the installation request and may leave the database only partially migrated. The `--no-reload` option prevents that restart while the installer is running. After the installation is complete, you can stop the server and use `php artisan serve` normally.

- follow the instructions in the website 

#### 2- Use command line to install the project:
``` php artisan cms:install ```
- follow the instructions in the terminal 
- ``` php artisan serve ``` to start the development server
open .env and update the following line:
``` 
DB_DATABASE="your_database_name"
DB_USERNAME="your_database_username"
DB_PASSWORD="your_database_password" 
```


## AlphaSky developer connection

This repository is a standalone CMS client. Its shared CMS runtime is installed from `alphasky-org/alphasky-monorepo` by the Composer bootstrap script. Run `php artisan key:generate` after creating `.env`; each installation needs its own key.

Set `APP_URL` to the exact site URL. Set `SERVER_ALPHASKY_URL=https://alphasky.org` for the hosted AlphaSky service. For the local pair, use `APP_URL=https://cms.test` and `SERVER_ALPHASKY_URL=https://alphasky.test`. Run `php artisan config:clear` after changing these settings.

Enable Copilot using `enable_ai_copilot=true` and set `copilot_user_id` to the intended administrator ID. Register the site's domain in the selected AlphaSky server and obtain an active, unexpired site token with credit. The local server and hosted service have separate accounts, domain registrations and credit.

The current client uses site-token activation. Enter the token in Copilot's activation screen, or configure `ALPHASKY_SITE_TOKEN` privately on the server. The token is bound to the site's domain and owner. A server-managed token is used by the backend and is not rendered into browser storage.

Copilot sends requests to AlphaSky, stores central conversations, charges token usage and receives generated module packages for local installation. Review and confirm interactive questions while the request is active. An unanswered question currently times out after 60 seconds.

Direct AlphaSky account sign-in and wallet top-up inside this CMS dashboard are not implemented by the current token-activation screen. Funding and token issuance must use the AlphaSky service's supported account process. Do not use an administrator login as an API credential.

## Dependency baseline

The validated baseline is PHP 8.4 with Laravel 12.73.0 and AlphaSky monorepo 1.11.0. Install the committed dependency lock with `composer install`, then publish CMS assets. Laravel 13 requires coordinated compatibility upgrades to AlphaSky assets/dev-tool, DataTables and Debugbar before changing the framework constraint.
