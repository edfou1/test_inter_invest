# Test_App

## Premier lancement

 - docker-compose up -d
 - docker exec -ti test_app bash
 - composer install
 - symfony console doctrine:migrations:migrate
 - symfony console doctrine:fixtures:load

## Application

 - localhost:8090/
