# Makefile for Laravel project

.PHONY: install start stop dev test

install:

# Install PHP dependencies
	composer install

# Run migrations
	php artisan migrate

# Run Vite
	npm install

# Create .env file and generate app key
	cp .env.example .env
	php artisan key:generate

start-be:
    # Start server
	php artisan serve

start-fe:
    # Start vite 
	npm run dev

test:
    # Run tests
	php artisan test
