# What is WordPress-sqlite
WordPress.Use Sqlite ~~mysql~~, Docker. 

## Installation
``` 
curl -sSL https://raw.githubusercontent.com/SoyM/wordpress-sqlite/master/install_docker.sh | sh
curl -sSL https://raw.githubusercontent.com/SoyM/wordpress-sqlite/master/deploy.sh | sh
``` 

If you had already installed docker
``` 
docker pull soym/wordpress-sqlite
docker run -p 80:80 soym/wordpress-sqlite
``` 

## docker image
https://hub.docker.com/r/soym/wordpress-sqlite/

## License
