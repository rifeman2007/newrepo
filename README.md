## Installation

```bash
# Download composer
curl -s https://getcomposer.org/installer | php

# Install project dependencies
php composer.phar install
```

Edit the database configuration in `app/settings.php` to match your settings.

Now set your server's document root to the `public/` directory.

The end.

## Database Migration and Seeding

To migrate and seed your database:
```bash
# Migrate then seed
php novice migrate --seed
```

## Built-in Web Server

To run the web server:
```bash
php -S localhost:8888 -t public public/index.php
```
