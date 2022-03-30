Handy XAMPP replacer, using docker containers for php,  apache, mysql, phpMyAdmin

**Installation steps**

@windows

1. [Install Docker Desktop on Windows](https://docs.docker.com/desktop/windows/install/)

   - Please pay attention to system requirements.
   - Probably you will need to enable the [WSL 2 feature on Windows](https://docs.docker.com/desktop/windows/install/#install-docker-desktop-on-windows)
   - Make sure docker is up and running after the installation is complete


2. [Download the project](https://github.com/cvipenta/xampp/archive/refs/heads/master.zip) or clone `git clone https://github.com/cvipenta/xampp.git .` it on your local machine.

3. Unzip the archive downloaded, rename and move the folder as you wish.

4. Open terminal and navigate from terminal to your newly created folder eg: `cd C:\ ... \code-xampp`  

the folder structure will be:
````     
   |-- docker
   |   |-- Dockerfile
   |    -- dump
   |       -- practica.sql
   |-- docker-compose.yml
   |-- index.php
   |-- makefile
   |-- readme.md
   |-- src
````

If you have make available on your computer run the commands as described bellow.
(Optional) https://www.technewstoday.com/install-and-use-make-in-windows/

5. To start the containers run `make docker-up`. Check the containers' status with `docker ps` 

6. Access web container with `make ssh-web`


Otherwise, you can use the commands present in makefile as follows:

**start all containers**  
`docker-compose up -d`

**stop all containers**  
`docker-compose down`

**access web container**  
`docker exec -it practica_web bash`

**recreate containers after configuration changes**  
`docker-compose up --build --force-recreate -d`


Update the configurations upon your needs!