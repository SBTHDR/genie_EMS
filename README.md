# genie_EMS


## About Repository

genie_EMS - An Employee Management System System built with Laravel 9. 


## Tech 

- Laravel 9
- Tailwind CSS 3

## Features

- Multi authentication with owner middleware.
- Owner Authorization.
- Employees Report.
- Sort report by Date.
- Login, Register using Breeze auth.
- Disable registration for Breeze.
- Owner Seeder


## Installation

- `git clone https://github.com/SBTHDR/genie_EMS.git`
- `cd genie_EMS/`
- `composer install`
- `cp .env.example .env`
- Run `php artisan key:generate`
- Update `.env` and set your database credentials
- `php artisan migrate`
- `php artisan db:seed`
- `npm install`
- `npm run dev`
- `php artisan serve`


## License

[MIT license](https://opensource.org/licenses/MIT).