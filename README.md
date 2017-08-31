# Joglo Semar Plartform

Bus ticketing system API base platform.
Build in PHP with Slim Framework.

# API Documentation
For complete API documentation plase click [here]()
```sh
#development
BASE_URL : "http://localhost/";
```

# Setup The Docker for localhost or development environtment

Make sure you had install docker and docker compose [See show to install docker and docker compose](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-16-04)

For initial setup you need to run :

```sh
   $ sudo docker-compose up
```

After initial setup and then you should run :

```sh
   $ sudo docker-compose start
```

# SSH access
Open SSH docker container
```sh
    $ docker-compose exec php bash
```
# Setup The Application Component
Update the composer
```sh
    $ curl https://getcomposer.org/download/1.4.3/composer.phar > composer.phar
    $ php composer.phar update
    $ exit
```
# Login to database via terminal
```sh
    $ docker-compose exec db bash
```

# Create Database
login with the password is "apple"
```sh
    $ mysql -u root -p
```

create database

```sql
mysql> create database strawberry;
```


