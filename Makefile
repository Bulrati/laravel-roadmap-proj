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