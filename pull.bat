@echo off
cd \wamp64\www\conocimiento.z-system.com.ar
git reset --hard
git checkout master
git pull origin
call composer dumpautoload
php artisan migrate
php artisan config:cache
