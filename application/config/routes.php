<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'Login_ctrl';
$route['check'] = 'Login_ctrl/check';
$route['logout'] = 'Login_ctrl/logout';

// Categroy
$route['category'] = 'Category_ctrl';
$route['category/create'] = 'Category_ctrl/create';
$route['category/store'] = 'Category_ctrl/store';
$route['category/detail/:num'] ='Category_ctrl/detail';
$route['category/delete/:num'] = 'Category_ctrl/delete';
$route['category/edit/:num'] = 'Category_ctrl/edit';
$route['category/update'] = 'Category_ctrl/update';

// Ingredients
$route['ingredient'] = 'Ingredient_ctrl';
$route['ingredient/create'] = 'Ingredient_ctrl/create';
$route['ingredient/store'] = 'Ingredient_ctrl/store';


// Country
$route['country'] = 'Country_ctrl';
$route['country/create'] = 'Country_ctrl/create';
$route['country/store'] = 'Country_ctrl/store';


// Meals
$route['meal'] = 'Meal_ctrl';
$route['meal/create'] = 'Meal_ctrl/create';
$route['meal/store'] = 'Meal_ctrl/store';


// Recipe
$route['recipe'] = 'Recipe_ctrl';
$route['recipe_category/:num'] = 'Recipe_ctrl/list';
$route['recipe_details/:num'] = 'Recipe_ctrl/detail';


//$userRatingResult
$route['ratings'] = 'Rating_ctrl';
$route['update_rating'] = 'Rating_ctrl/updateRating';
