PHPFPM_CONTAINER=road-phpfpm

start:
	@docker-compose up -d

stop:
	@docker-compose down

restart:
	@make stop
	@make start

ssh:
	@docker exec -it $(PHPFPM_CONTAINER) sh

build:
	@docker-compose up -d --build

exec:
	@docker exec -it $(PHPFPM_CONTAINER) $$cmd

seed:
	@make exec cmd="php artisan db:seed"

migrate:
	@make exec cmd="php artisan migrate"

fresh:
	@make exec cmd="php artisan migrate:fresh"
