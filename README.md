# Dockerisation

Basé sur [Gist clandestine8](https://gist.github.com/clandestine8/48eb01d49a5ef919b0632aa07e41c860) et utilisation de [ce Dockerfile](https://cours.brosseau.ovh/tp/ops/deployer-laravel-docker.html)

# Développement

- Monter l'environnement de développement
```
docker compose -f compose-dev.yaml up --build
=======

- Monter l'environnement de développement
```
docker compose up --build --force-recreate
>>>>>>> 818ffbe (Add login/register)
```

- Créer la base de données `boisdelouest` sur le [PHPMyAdmin](localhost:8001)

<<<<<<< HEAD
=======
- Installer Breeze
```
docker exec -it bramm-laravel-1 ./artisan breeze:install
```

>>>>>>> 818ffbe (Add login/register)
- Faire les migrations
```
docker exec -it bramm-laravel-1 ./artisan migrate --force
```

- Seed la base de données
```
docker exec -it bramm-laravel-1 ./artisan db:seed
```
<<<<<<< HEAD

# Production

- Monter l'environnement de production
```
docker compose -f compose.yaml up --build
```
