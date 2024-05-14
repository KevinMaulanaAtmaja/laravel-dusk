php artisan dusk --filter=HomePageTest  
php artisan dusk --filter=CheckAuthTest  
php artisan dusk --filter=CheckFormTest  
php artisan dusk --filter=CheckCrudTest  

# installation guide
# php artisan dusk:install
# create =>  .env.dusk.local
# APP_URL =>  http://127.0.0.1:8001

# run serve with diff port
# php artisan serve --port=8001 --env=dusk.local
# php artisan migrate:fresh --seed

# command to run
# ./nameFile.sh
# ./runDusk.sh
