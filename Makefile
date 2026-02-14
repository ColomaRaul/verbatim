.PHONY: up stop restart build shell logs test

up:
	docker compose up -d

stop:
	docker compose stop

restart:
	docker compose restart

build:
	docker compose build

shell:
	docker compose exec php sh

logs:
	docker compose logs -f

test:
	docker compose exec php bin/phpunit
