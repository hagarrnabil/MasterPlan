Deploying a Laravel project using Docker containers:
1.	Download Docker Desktop from here:
https://www.docker.com/products/docker-desktop/
2.	Install Docker Compose from here:
https://docs.docker.com/compose/install/
3.	Install WSL2 (Linux Kernel Update Package) from here:
https://learn.microsoft.com/en-us/windows/wsl/install-manual#step-4---download-the-linux-kernel-update-package
4.	Install Ubuntu on your desktop from the previous link.
5.	Go to Docker Desktop, Settings, Resources, WSL Integration and make sure that they look like this.
 
6.	Then we’ll follow a tutorial guiding us on how to make containers for our Laravel project, this is the link for the tutorial:
https://www.digitalocean.com/community/tutorials/how-to-install-and-set-up-laravel-with-docker-compose-on-ubuntu-22-04#step-3-setting-up-the-application-s-dockerfile
7.	But in order to follow this tutorial, we’ll need to upload our project on Github. So do this first.
8.	We’ll be interacting with the project through the Ubuntu terminal after getting it from our github repository by a simple Curl command and unzipping it.
9.	We’ll first set up our application’s environment file where we set the database connection and the application URL depending on the environment where the application is running. Laravel has an example .env file that we will copy and alter to make our own .env file.
10.	We’ll change the DB_HOST from “127.0.0.1” to the database service we will create in our Docker environment which will be named “db” and we’ll also change the DB_DATABASE, DB_USERNAME and DB_PASSWORD to the values we want which match with our project name.
11.	We’ll now start working on our Dockerfile which will build a custom image for the application container. We define the base image we’re using, install PHP extensions and composer, new system user is set up using the “user” and “uid” args. The “uid” arg makes sure that any change happens in the terminal happens also in the ide. 
12.	Then we set up the Docker-Compose files for nginx and mysql. We start with nginx, we set the port we’ll listen on which will be 80 and use index.php as default index page and will use the application service on port 9000 to process *.php files.
13.	Now for mysql, we need to share a database dump that will be imported when the container is initialized. We set a few cities and see the number of buildings in them.
14.	Now we’ll create the docker-compose.yml file that contains all the services combined. It”ll look like this:
![image](https://github.com/hagarrnabil/masterplan/assets/61394563/802cdbdf-fc61-45c3-b40b-1810ce2aa9f1)![image](https://github.com/hagarrnabil/masterplan/assets/61394563/df856dcd-947f-4466-872c-714cf532d96f)
15.	Now we’ll start running the application using the docker compose commands:
•	docker-compose build app (build the app container)
•	docker-compose up -d (run in background mode)
•	docker-compose ps (show status about active services)
•	docker-compose exec app rm -rf vendor composer.lock (install app dependencies)
•	docker-compose exec app composer install (install app dependencies)
•	docker-compose exec app php artisan key:generate (generate a unique app key)
16.	Go to the IDE, connect to the local host with the credentials you specified in the .env file:
USER and PASSWORD and check your connection.
17.	Go to the Ubuntu terminal, cd into your project directory, write this command to go into the application container “docker exec -it masterplan-app bash”.
18.	Then write these commands to migrate the databases back to your project
•	php artisan migrate:fresh
•	php artisan migrate:fresh –seed
•	php artisan serve
19.	Go back to the IDE and insert your SQL statements that you previously did and execute them.
20.	Go to the local host you set and you’ll your project up and running.
http://localhost:8000/


