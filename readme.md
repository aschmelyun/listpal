<p align="center"><img src="https://listpal.co/assets/images/listpal-logo.svg"></p>

## About

ListPal is a web app that lets you create easily shareable to-do lists that automatically stay in sync and display updates in real time. It's currently powered by:

- [Laravel](https://laravel.com)
- [Vue](https://vuejs.org/)
- [laravel-websockets](https://github.com/beyondcode/laravel-websockets)

This repo is currently what powers the main app at [listpal.co](https://listpal.co). You can also choose to clone this repository and run on your own server by following the steps below.

## Prerequisites

This app is currently powered by Laravel 5.8, and as such follows [their requirements](https://laravel.com/docs/5.8#server-requirements) for proper installation. Your server will need to meet the following conditions:

- PHP >= 7.1.3
- BCMath PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

In addition to the above, if you'll be modifying any styles or JavaScript, you will need to have both Node.js and NPM installed (preferably with their latest up-to-date versions).

## Installation

After cloning this repo to your desired location, complete the following steps:

- Run `composer install`.
- Run `npm install`.
- Copy `.env.example` to `.env` and add in your database and app name details.
- Run `php artisan migrate` to add in the database structure.
- Run `php artisan websockets:serve` to start the laravel-websockets server.
- Visit the website!

## Compiling Assets

If you make any modifications to the styles, images, or JavaScript in the `/assets/` directory, you'll need to recompile them through Laravel's [Mix](https://laravel.com/docs/5.8/mix#installation) webpack wrapper. From the root directory, simply run either:
- `npm run dev` for fast compilation during local development
- `npm run production` to minify and transpile assets for production deployment

## Contributing

ListPal is still very much in active development, and as such bugs and feature requests might be pretty common. If you'd like to contribute to the app's development, please feel free to open a pull request resolving an issue or adding in a requested feature!

## Contact Info

If you have any questions or concerns, you can reach out directly via [Twitter](https://twitter.com/listpalco) or through [email](mailto:listpalco@gmail.com).

## License

ListPal is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
