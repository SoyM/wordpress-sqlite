#!/bin/sh
docker pull soym/wordpress-sqlite
docker run -p 80:80 soym/wordpress-sqlite