
# Установка

1. `git clone https://github.com/tag322/ecom-test.git`\
`cd back; composer install`\
`cd front; npm install` 

### Окружение

2. создайте в файлы `.env` в директориях `/back` и `/front`
3. скопирйте содержимое из `.env.example` в директориях `/front и /back` и вставьте в новые файлы соответственно 
4. запустите `cd back; php artisan key:generate`
5. заполните чувстительные данные в `.env` файлах

# Запуск

`docker compose up`

### или

`cd back; php artisan serve`\
`cd front; npm run serve`

###### и опционально под разный функционал
`cd back; php artisan queue:work`\
`cd back; php artisan reverb:start`\
`cd back; php artisan schedule:work`
