CONTAINER := php
SHELL     := env RUNNING_ENVIRONMENT=$(RUNNING_ENVIRONMENT) $(SHELL)

RUNNING_ENVIRONMENT ?= dev

composer:
	docker-compose run --rm $(CONTAINER) composer install -d ./../../

up:
	docker-compose up --build