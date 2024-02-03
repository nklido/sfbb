
## Sfbb (Superfast Broadband) availability tool

I created this tool to help me relocate to Athens and find an area that
supports a fiber connection. Growing up in a place with 2mbps speed, I just had to make sure 😂

By scraping Data from [sfbb](https://sfbb.gr/) and [Cosmote](https://www.cosmote.gr/hub/)



### pre requisites
* Composer
* PHP 7|8 
* MySQL Server
* Apache

### Installation

To install the project you first need to copy the example .env file and
add your `GOOGLE_MAPS_API_KEY`



```cmd
    cp .env.example .env
```

Set you database host, username and password and make sure you create
a database with name `sfbb`. 

```cmd
DB_DATABASE=sfbb
DB_USERNAME=<your-db-username>
DB_PASSWORD=<your-db-password>
```

To get started run 

```cmd
php artisan migrate:fresh --seed
```

### Testing

You can run the tests by running

```cmd
PS C:\xampp\htdocs\sfbb> vendor/bin/phpunit
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

......                                                              6 / 6 (100%)

Time: 00:04.028, Memory: 96.00 MB

OK (6 tests, 16 assertions)

```

