# Docker LAMP

## Features
- PHP 7.x
- MariaDB
- Easily swap `webdevops/php-apache` with `webdevops/php-nginx`

## Requirements
- [Docker for Mac](https://www.docker.com/docker-mac)

## Setup
1. Clone repo to machine
2. Run `docker-compose up -d` in directory
3. Go to http://localhost

## Database Info
- **Server**: `0.0.0.0`
- **Port**: `8889`
- **Username**: `admin`
- **Password**: `test`
- **Database Name**: `database`

**Note**: When connecting to the database in your application the `host` should be set to `data`
