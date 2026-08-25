- download or run the following command:
``` gh repo clone alphasky-org/cms-alphasky ```
- create a new database for the project

- Then run the following command in your terminal:
``` composer install ```
#### 1-  Use website to install the project:
```  php artisan cms:publish:assets ```

- then run the following command to start the development server:
``` php artisan serve ```

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
