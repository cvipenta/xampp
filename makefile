ssh-web:
	docker exec -it practica_web /bin/bash

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down

docker-up-rebuild:
	docker-compose up --build --force-recreate -d
