# PHP OPP
1. Install docker
2. Configure .env associated with docker-compose.yml  ( Ports , Ip's, volumes etc)
3. In root folder the project :
3.1 Commands for create and up containers:
```
docker-compose build
```
```
docker-compose up 
```

4. First get container name:
```
docker ps
docker exec -it <name_container or id> bash
```

5. Run composer
```
composer install
```

6. Run unit test
```
composer test
```

7. Validate object data and calculated areas
```
composer execute
```