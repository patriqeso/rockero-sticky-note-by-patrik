<p align="center"><a href="https://laravel.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="relative" width="60" height="60" viewBox="0 0 60 60">
    <defs>
        <linearGradient id="a" x1="19.2" x2="44.41" y1="30.6" y2="30.6" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#f0c837"></stop>
            <stop offset=".13" stop-color="#c09632"></stop>
            <stop offset=".67" stop-color="#f6e05b"></stop>
            <stop offset=".76" stop-color="#eee07f"></stop>
            <stop offset="1" stop-color="#b8a629"></stop>
        </linearGradient>
        <linearGradient id="b" x1="0" x2="60" y1="30" y2="30" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#f0c837"></stop>
            <stop offset=".13" stop-color="#c09632"></stop>
            <stop offset=".67" stop-color="#f6e05b"></stop>
            <stop offset=".76" stop-color="#eee07f"></stop>
            <stop offset="1" stop-color="#b8a629"></stop>
        </linearGradient>
    </defs>
    <path fill="url(#a)" d="M42.287 32.098c1.075-1.628 1.615-3.572 1.615-5.831 0-2.198-.504-4.099-1.518-5.702C41.377 19 39.932 17.735 38 16.88c-1.85-.88-4.072-1.28-6.622-1.28H19.2l3.126 4.711h8.797c2.38 0 4.189.514 5.421 1.542 1.233 1.027 1.852 2.5 1.852 4.414 0 1.912-.613 3.392-1.852 4.438-1.232 1.04-3.041 1.567-5.42 1.567H19.2l3.126 4.587h9.046c.504 0 .88-.013 1.135-.044l6.01 8.785H44.4l-6.757-9.856c2.016-.798 3.564-2.018 4.644-3.646z"></path>
    <path fill="url(#b)" d="M30 3.4c7.35 0 14 2.974 18.806 7.788A26.498 26.498 0 0 1 56.594 30c0 7.35-2.974 14-7.788 18.806A26.483 26.483 0 0 1 30 56.594c-7.35 0-14-2.974-18.806-7.788A26.483 26.483 0 0 1 3.406 30c-.006-7.35 2.968-14 7.788-18.812A26.483 26.483 0 0 1 30 3.4zM0 30c0 16.57 13.43 30 30 30s30-13.43 30-30S46.57 0 30 0 0 13.43 0 30z"></path>
</svg></a></p>

# About This project

Simple application created for [Rockero s.r.o.](https://rockero.cz/) as part of an interview

## Project setup

1. Option using Makefile.
```
make install
make start-be
make start-fe
```
```Press Ctrl+C to if you want to stop the server```

2. Use directly artisan.
```
composer install
php artisan migrate
php artisan serve
npm run dev
```