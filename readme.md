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
