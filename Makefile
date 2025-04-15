init:
	docker compose up -d --build
	docker compose exec php composer install
	cp .env.example .env
	docker compose exec php php artisan key:generate
	docker compose exec php php artisan migrate --seed
	docker compose exec php php artisan storage:link
	cp public/copy_data/* storage/app/public/