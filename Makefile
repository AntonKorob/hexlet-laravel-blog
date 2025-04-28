start:
	php artisan serve

make setup bootstrap:
	composer require laravel/ui --dev
	php artisan ui bootstrap --auth
	npm install bootstrap-icons --save-dev
	npm install
	npm run build