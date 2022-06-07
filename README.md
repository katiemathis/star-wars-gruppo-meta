
Per visualizzare il progetto in locale:


1. Cloniamo la repo esistente da GitHub
2. Composer install
3. Npm install
4. Copia il file .env (cp .env.example .env da riga di comando)
5. Crea un nuovo DB in phpmyadmin
6. Configura il file .env per DB
7. Rigeneriamo la nostra App Key ( php artisan key:generate )
8. Cancelliamo la cache delle impostazioni ( php artisan config:clear )
9. Lanciamo le migrazioni ( php artisan migrate )
10. Lanciamo i seeder (php artisan db:seed)
11. Creiamo il link da storage alla cartella public php artisan storage:link



Tecnologie utilizzate --

Vue.js
VueRouter
PHP Laravel
Bootstrap (css)