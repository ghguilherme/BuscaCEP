CONTAINER := php
SHELL     := env RUNNING_ENVIRONMENT=$(RUNNING_ENVIRONMENT) $(SHELL)

RUNNING_ENVIRONMENT ?= dev

composer:
	docker-compose run --rm -w /var/www/html/ $(CONTAINER) composer install

up:
	docker-compose up --build

test:
	docker-compose run --rm -w /var/www/html/ $(CONTAINER) php ./vendor/bin/phpunit