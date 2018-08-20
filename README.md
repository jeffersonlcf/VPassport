# Volunteer Passport

## Dev Install / Setup 

### Clone repo

`` git clone https://github.com/jeffersonlcf/VPassport.git ``

### Add php dependecies
``composer install``

### Add Javascript dependencies
`` npm install ``

### Create/setup enviroment config
Create .env in the root directory, use env file as template

### Setup DB ###
create a db, add settings to .env file

### Migrate and seed ###
`` php artisan migrate --seed ``
If there is a need to flush data and redo migrations:
`` php artisan migrate:fresh --seed ``

### Generateb app key ###
`` php artisan key:generate ``

### Add Stripe API keys to env ###
This covers the payments
`` STRIPE_SECRET= ``    
`` STRIPE_PUBLISHABLE_KEY= ``

### Build and Watch ###
Running this will consume the current thread
`` npm run dev ``
