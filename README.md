# Welcome to your business helper
- create component layout (navbar)
- composer install
- npm i bootstrap
    - @vite applied to layout
    - resources/css e resources/js
- fill in the database credentials in the .env file
- update the users table that is gonna be created with the first migration
- create first route to '/' alias 'home'


* AUTENTICAZIONE
V  1) installare fortify:
    - documentazioe laraverl Fortify > Authentication
    - prima di fare la migration, aggiornare la tabella users con le colonne ulteriori che serviranno
V  2) implementare registrazione
    - documentazione laravel Fortify > Registration
    - app>config>fortify> 
        'home' => '/',
    - creare vista di registrazione
V   3) implementare login
    - documentazione laravel Fortify > Login
    - creare vista login
V   - creare form logout
    4) sistemare rotte nel layout e in web.php con middleware
    5) implementare verifica email
    6) implementare reset password



* DDL COMPLETO
* DB:SEED
* GRAFICA GUEST livewire
* AZIONI ADMIN crud(?)