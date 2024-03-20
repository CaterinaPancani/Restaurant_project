# Welcome to your business helper
- create component layout (navbar)
- composer install
- npm i bootstrap
    - @vite applied to layout
    - resources/css e resources/js
- fill in the database credentials in the .env file
- update the users table that is gonna be created with the first migration
- create first route to '/' alias 'home'


    A. AUTENTICAZIONE
    1) installare fortify:
    - documentazioe laraverl Fortify > Authentication
    - prima di fare la migration, aggiornare la tabella users con le colonne ulteriori che serviranno
    2) implementare registrazione
    - documentazione laravel Fortify > Registration
    - app>config>fortify> 
        'home' => '/',
    - creare vista di registrazione
    3) implementare login
    - documentazione laravel Fortify > Login
    - creare vista login
     - creare form logout
    4) sistemare rotte nel layout e in web.php con middleware
    5) implementare verifica email
    6) implementare reset password



    B. DDL COMPLETO
    C. DB:SEED
    D. GRAFICA GUEST livewire
    E. AZIONI ADMIN crud(?)


APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:UvgUZTXqpoXxnVI22w0lOdKica+k2oWaHtROzPlTfi8=
APP_DEBUG=true
APP_TIMEZONE=UTC
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=restaurant
DB_USERNAME=root
DB_PASSWORD=pappagalli1234

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME='pancani.caterina@gmail.com'
MAIL_PASSWORD='uvdq uifi dydr dcql'
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="pancani.caterina@gmail.com"
MAIL_FROM_NAME="${APP_NAME}"