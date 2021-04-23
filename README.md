## Preparation
git clone https://github.com/WahidinAji/Rest-Api-Sanctum.git Simple-Rest_Api
##
cd Simple-Rest_Api
##
composer install
##
cp .env.example .env
##
setup databases on .env
##
php artisan migrate
##
##
## Dokumentasi by Postman
## Register User
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/WahidinAji/Rest-Api-Sanctum/blob/master/public/docs_api/Auth%20User/1%20Register%20user.PNG" width="800"></a></p>

## Register User Need Confirm Password (is null)
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/WahidinAji/Rest-Api-Sanctum/blob/master/public/docs_api/Auth%20User/2%20Register%20user%20need%20password%20confirm%20-1.PNG" width="800"></a></p>

## Register User Need Confirm Password (is doesn't matched)
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/WahidinAji/Rest-Api-Sanctum/blob/master/public/docs_api/Auth%20User/2%20Register%20user%20need%20password%20confirm%20-2.PNG" width="800"></a></p>

## Register User Success and got a token
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/WahidinAji/Rest-Api-Sanctum/blob/master/public/docs_api/Auth%20User/3%20Register%20user%20success.PNG" width="800"></a></p>

## Logout can be success if the token is match
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/WahidinAji/Rest-Api-Sanctum/blob/master/public/docs_api/Auth%20User/4%20Logout%20with%20token.PNG" width="800"></a></p>

## Logout cann't be success if without token
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/WahidinAji/Rest-Api-Sanctum/blob/master/public/docs_api/Auth%20User/4%20Logout%20without%20token.PNG" width="800"></a></p>

## Login User Success
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/WahidinAji/Rest-Api-Sanctum/blob/master/public/docs_api/Auth%20User/5%20Login%20user%20successfully%20and%20then%20generated%20token%20for%20session%20login-2.PNG" width="800"></a></p>

## Login User failed if password is wrong
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/WahidinAji/Rest-Api-Sanctum/blob/master/public/docs_api/Auth%20User/5%20Login%20user%20but%20the%20password%20is%20wrong%20-1.PNG" width="800"></a></p>

## view all products
![alt text](https://github.com/WahidinAji/Rest-Api-Sanctum/blob/master/public/docs_api/Index.PNG)
##

## Store data without token
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/WahidinAji/Rest-Api-Sanctum/blob/master/public/docs_api/With%20Token%20Sanctum/1%20store%20data%20before.PNG" width="800"></a></p>

## Store data with token
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/WahidinAji/Rest-Api-Sanctum/blob/master/public/docs_api/With%20Token%20Sanctum/2%20store%20data%20after.PNG" width="800"></a></p>

## Show data by id without token
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/WahidinAji/Rest-Api-Sanctum/blob/master/public/docs_api/show_by_id-with-protected-sanctum.PNG" width="800"></a></p>

## Delete data but id is nothing in database
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/WahidinAji/Rest-Api-Sanctum/blob/master/public/docs_api/With%20Token%20Sanctum/3%20delete%20data%20but%20the%20id%20is%20nothing%20in%20databases%20-2.PNG" width="800"></a></p>

## Delete data with token
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/WahidinAji/Rest-Api-Sanctum/blob/master/public/docs_api/With%20Token%20Sanctum/3%20delete%20data%20successfully%20-3.PNG" width="800"></a></p>

## Notes, don't forget to Accept : Application/json
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/WahidinAji/Rest-Api-Sanctum/blob/master/public/docs_api/if%20the%20message%20if%20like%20that%2C%20check%20the%20headers.%20is%20there%20already%20accept-appication_json%20or%20not.PNG" width="800"></a></p>

<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="800"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
