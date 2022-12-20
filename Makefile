NAME = inception

all: ${NAME}

${NAME}:
	docker-compose -f srcs/docker-compose.yml up -d --build

down:
	docker-compose -f srcs/docker-compose.yml down

clean:
	docker-compose -f srcs/docker-compose.yml down; \
	docker system prune -fa; \
	docker volume rm srcs_db; \
	docker volume rm srcs_wd; \
	sudo rm -rf /home/alpascal/data/wp/*; \
	sudo rm -rf /home/alpascal/data/db/*; 

re:
	clean all
