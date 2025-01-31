# public_api
public api to retrieve basic information
To begin intall laravel and php
create a new application using
-composer create-project --prefer-dist laravel/laravel project-name
-cd project
create a controller using
-php artisan make:controller your-controller-name
install the api route
-php artisan install:api
define your routes in the routes/api file
implement the controller
if your version of laravel is below 7x install the cors package and configure
push to git and deploy using any platform of your choice.

#End Point
http://127.0.0.1:8000/api/info

#Response
200 ok
json 
{
'email':'your email',
'current-datetime':'2025-01-30T12:00:00Z',
'github_url':'your url'
}
#https://hng.tech/hire/php-developers
