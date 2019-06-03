## About G.T.MusicBooking

This is a website for artists managers. It is based on Laravel 5.8 framework.

## Installation via composer

1. Go to your local project directory

2. Paste this in the terminal:  
```git clone https://github.com/nevenov/gtmusikkbooking.git```

3. Then in the terminal run ```composer install``` and this will download vendor folder;

4. Run ```php artisan key:generate``` - this will generate new key for the application

5. Go to your database manager and create a database with user rights.

6. Copy or rename .env.example file in the root of application to .end

7. Open .env file and replace the constants:
DB_DATABASE=homestead  
DB_USERNAME=homestead  
DB_PASSWORD=secret  
with your database, user and password.

8. Go to the terminal(git bash) again and run:  
```php artisan migrate -seed```  
This will create database tables and will seed with initial user:  
Username: test@email.com  
Password: secret  

9. Go to your domain.com/admin, log in and start using this app. 



## Contributing

Thank you for considering contributing to that app.

## License

The G.T.MusicBooking is open-source software licensed under the [GNU General Public License v3.0](https://opensource.org/licenses/GPL-3.0).
