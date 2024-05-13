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
Implementato fortify completo, registrazione, autenticazione, logout, verificaq della mail e reset della password. Aggiustati graficamente gli alert di successo di ogni passaggio richiesto



    B. DDL COMPLETO
Create 5 migrations delle 5 tabelle fondamentali e le loro relazioni in foreignKeys. Popolato il db precocemente per necessità di visualizzare elenchi per debug (sarà re implementata la factory a seguito dell'impostazione delle relazioni).
Nelle diocane di routes, quando si richiama una funzione con parametri entranti, nell'uri devo aggiungere le graffe per ingresso parametro. PORCODIO
Create relazioni 1tomany e manytomany
Impaginata vista piatti con link ordini associati
Creato livewire per Food(index) + delete


    DAFARE:
    creare dashboard con lista piatti, ogni card un button per dettaglio piatto.
    ogni card del piatto avrà le azioni, visibili (e protette da middleware) solo dall'admin.
    
    
    
    Mentre per l'utente sarà visibile solo la card e il button per il dettaglio
    validation della tab pivot per ripetizione coppia valori
    

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