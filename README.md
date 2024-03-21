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
Implementato fortify completo, registrazione, autenticazione, logout, verificaq della mail e reset della password.



    B. DDL COMPLETO
        creare tabelle
        creare relazioni
        impaginare
    C. DB:SEED
        popolare il db
    D. GRAFICA GUEST livewire
    E. AZIONI ADMIN crud(?)
    F. CONTATTACI







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