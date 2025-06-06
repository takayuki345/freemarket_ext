init:
	docker compose up -d --build
	docker compose exec php composer install
	docker compose exec php cp .env.example .env
	docker compose exec php php artisan key:generate
	docker compose exec php php artisan config:clear
	docker compose exec php cp -r public/copy_data/item_images/ storage/app/public/
	docker compose exec php cp -r public/copy_data/profile_images/ storage/app/public/
	docker compose exec php php artisan storage:link
	sleep 3
	docker compose exec php php artisan migrate --seed
