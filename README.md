# WordPress-Sqlite

Docker & WordPress & Sqlite ~~mysql~~

## Usage

* install docker

then run
``` 
docker pull soym/wordpress-sqlite
docker run -p 80:80 soym/wordpress-sqlite
``` 

then visit http://[server_addr]:80 to see your wordpress

## docker image

https://hub.docker.com/r/soym/wordpress-sqlite/

## Install Docker quickly

Run
``` 
curl -sSL https://raw.githubusercontent.com/SoyM/wordpress-sqlite/master/install_docker.sh | sh
curl -sSL https://raw.githubusercontent.com/SoyM/wordpress-sqlite/master/deploy.sh | sh
``` 
