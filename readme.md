Handy XAMPP replacer, using docker containers for php,  apache, mysql, phpMyAdmin

**Installation steps**

@windows

1. [Install Docker Desktop on Windows](https://docs.docker.com/desktop/windows/install/)

   - Please pay attention to system requirements.
   - Probably you will need to enable the [WSL 2 feature on Windows](https://docs.docker.com/desktop/windows/install/#install-docker-desktop-on-windows)
   - Make sure docker is up and running after the installation is complete


2. [Download the project](https://github.com/cvipenta/xampp/archive/refs/heads/master.zip) or clone `git clone https://github.com/cvipenta/xampp.git .` it on your local machine.
   

3. Open terminal and change directory to the current folder eg: `cd C:\...\code-xampp`

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

4. To start the containers run `make docker-up`. Check the containers' status with `docker ps` 


5. Access web container with `make ssh-web`


Update the configurations upon your needs!