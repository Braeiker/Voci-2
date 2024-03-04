# Voci Media API

Questo progetto consiste in un sistema di API RESTful per gestire una libreria di risorse multimediali per Voci, un media brand dedicato a dare voce alle donne.

## Requisiti

- PHP
- Composer
- Laravel
- MySQL

## Installazione

1. Clona il repository:

   ```bash
   git clone <url-del-tuo-repository.git>
Vai nella directory del progetto:

bash
Copy code
cd voci-media-api
Installa le dipendenze:

bash
Copy code
composer install
Copia il file di configurazione .env:

bash
Copy code
cp .env.example .env
E modifica le variabili d'ambiente secondo le tue esigenze, in particolare le impostazioni del database.

Genera la chiave dell'applicazione:

bash
Copy code
php artisan key:generate
Esegui le migrazioni del database:

bash
Copy code
php artisan migrate
Assicurati di eseguire il file migrations.sql nel tuo database per creare la struttura necessaria.

API Endpoints
Tipologie di Media
GET /api/media-types: Restituisce tutte le tipologie di media disponibili.
POST /api/media-types: Crea una nuova tipologia di media.
PUT /api/media-types/{id}: Modifica una tipologia di media esistente.
DELETE /api/media-types/{id}: Cancella una tipologia di media.
Autrici
GET /api/authors: Restituisce tutte le autrici disponibili.
POST /api/authors: Crea una nuova autrice.
PUT /api/authors/{id}: Modifica un'autrice esistente.
DELETE /api/authors/{id}: Cancella un'autrice.
Contenuti Multimediali
GET /api/media-content: Restituisce tutti i contenuti multimediali disponibili.
POST /api/media-content: Crea un nuovo contenuto multimediale.
PUT /api/media-content/{id}: Modifica un contenuto multimediale esistente.
DELETE /api/media-content/{id}: Cancella un contenuto multimediale.
Filtri
GET /api/media-content/filter: Restituisce i contenuti multimediali filtrati per autrice e nome del contenuto.
Contributi
Se desideri contribuire, segui questi passaggi:

Forka il repository
Crea un nuovo branch (git checkout -b feature/nuova-funzionalita)
Fai commit delle tue modifiche (git commit -m 'Aggiunta nuova funzionalità')
Fai push del branch (git push origin feature/nuova-funzionalita)
Apri una Pull Request
