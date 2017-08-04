# Docker LAMP

## Features
- PHP 7.x
- MariaDB
- Easily swap `webdevops/php-apache` with `webdevops/php-nginx`

## Requirements
- [Docker for Mac](https://www.docker.com/docker-mac)
- Node v7.8.0
- Yarn

## Setup
1. Clone repo to machine and go into directory
2. Run `yarn go`
3. Go to http://localhost

## Database Info
- **Server**: `0.0.0.0`
- **Port**: `8889`
- **Username**: `admin`
- **Password**: `test`
- **Database Name**: `database`

**Note**: When connecting to the database in your application the `host` should be set to `data`
