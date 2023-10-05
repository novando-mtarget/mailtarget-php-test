# mailtarget PHP Test

# Requirement
- Composer
- PHP 8.1

## How to install
- Run `composer install`
- Duplicate `.env.example`, rename it as `.env`
- Fill the value of `.env` line 3 wiht random string
- Fill the value of `.env` line 31-38 with your mailtarget SMTP configuration 
- Add or replace your mail on `routes/web.php` line 28 
- Comment/uncomment `app/config/mail.php` line 57&58 to enable and disable TLS
- Run `php artisan serve`
- Open `{domain}/send` on browser