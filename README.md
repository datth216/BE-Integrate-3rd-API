The goal is to write a simple app using the 3rd party API. In this assignment, we choose the Scalapay API and the docs can be found here: https://developers.scalapay.com/docs

## About this project

Technology used in Backend: Laravel (At least from `PHP` version `7.4` and above)

Technology used in Frontend: Reactjs

## How to run the application

1. Clone this project and put it in folder `C:\xampp\htdocs` (use XAMPP)
2. Open the project in IDE and install all packages using the command line: `npm install` or `npm i`
3. Rename `.env.example` to `.env`
4. Run `composer install`
5. Run `php artisan key:generate`
7. Run project: `php artisan serve`
6. (If you get routing errors at this step, run `php artisan route:cache`. If not, skip it)
8. Go to link `127.0.0.1:8000/orders`

## Note: 
1. Run Backend Project at the same time with Frontend Project (FE-Integrate-3rd-API)
2. Repo Frontend Project: https://github.com/datth216/FE-Integrate-3rd-API
