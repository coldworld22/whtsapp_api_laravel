# WhatsApp API Laravel

This repository contains a Laravel project for integrating with the WhatsApp Business API.

## Getting Started

1. Ensure you have PHP, Composer, and Node.js installed.
2. Copy the `.env.example` file to `.env` and adjust the configuration for your environment.
3. Install PHP dependencies:
   ```bash
   composer install
   ```
4. Install frontend dependencies and compile assets:
   ```bash
   npm install
   npm run dev
   ```
5. Generate the application key:
   ```bash
   php artisan key:generate
   ```
6. Run database migrations:
   ```bash
   php artisan migrate
   ```

## Troubleshooting

### Composer SSL certificate error on Windows

When running `composer install` on Windows environments (for example when using WAMP or XAMPP) you may encounter an error similar to:

```
You are running Composer with SSL/TLS protection disabled.
curl error 60 while downloading https://api.github.com/...: SSL certificate problem: unable to get local issuer certificate
```

This occurs when PHP's cURL extension cannot find a valid Certificate Authority (CA) bundle. To resolve it without disabling HTTPS protection:

1. Download the latest `cacert.pem` bundle from the official cURL website: <https://curl.se/ca/cacert.pem>.
2. Save the file somewhere permanent, for example `C:\wamp64\bin\php\php8.x.x\extras\ssl\cacert.pem` (create the `ssl` folder if it does not exist).
3. Edit your `php.ini` file (the one used by the CLI). Ensure the following directives point to the downloaded file, then restart your terminal:
   ```ini
   openssl.cafile = "C:\\wamp64\\bin\\php\\php8.x.x\\extras\\ssl\\cacert.pem"
   curl.cainfo = "C:\\wamp64\\bin\\php\\php8.x.x\\extras\\ssl\\cacert.pem"
   ```
4. Clear Composer's cache and retry the installation:
   ```bash
   composer clear-cache
   composer install
   ```

With the CA file properly configured, Composer should be able to download dependencies securely without SSL errors.

## Additional Resources

- [Composer documentation](https://getcomposer.org/doc/)
- [Laravel documentation](https://laravel.com/docs)

