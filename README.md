# PHPStan Example

## Usage

### Setup

```bash
# Launch docker container
docker compose up -d
```

### Analyze PHPStan

```bash
# Set to memcached
docker compose exec php vendor/bin/phpstan analyse app
```

### Run PHP Scripts

```bash
# Set to memcached
docker compose exec php php /var/www/html/app/commands/cache.php "set" "key_huga" "fuga_value"

# Get from memcached
docker compose exec php php /var/www/html/app/commands/cache.php "get" "key_huga"
```
