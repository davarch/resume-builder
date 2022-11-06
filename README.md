# Arch Portfolio

## Sail Alias

`alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'`

`alias a='sail artisan'`

## Install and Run
`composer install`

`cp .env.example .env`

`php artisan key:generate`

`sail up -d`

`sail yarn && sail yarn build`

## Run dev

`sail up -d`
`sail yarn dev`
