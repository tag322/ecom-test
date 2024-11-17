spa test 

# Installation

1. `git clone https://github.com/tag322/ecom-test.git`\
`cd back; composer install`\
`cd front; npm install` 

### Enviroment vars

2. create new `.env` in both `/back` and `/front` directories
3. copy contents of `.env.example`'s that also in `/front and /back` and paste this to new files respectively
4. execute `cd back; php artisan key:generate`
5. fill in blank sensitive enviroment variables, there's a lot of them, unfortunately. Not all of them necessary for the basic functionality of app.

# How to run

`docker compose up`

### Or

`cd back; php artisan serve`\
`cd front; npm run serve`
###### and optional
`cd back; php artisan queue:work`\
`cd back; php artisan reverb:start`\
`cd back; php artisan schedule:work`