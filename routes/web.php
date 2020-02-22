<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view("home");
});

// Route Courses
Route::get("/course-saya", "Courses@index")->name("course");
Route::get("/course-saya/create", "Courses@create")->name("course.create");
Route::post("/course-saya/create", "Courses@store");


// Route Article
Route::get("/article", "Articles@index")->name("article");
// create article
Route::get("/create-article", "Articles@create")->name("article.create");
Route::post("/create-article", "Articles@store");
// show article
Route::get("/article/{article}", "Articles@show")->name("article.show");
// edit & update article
Route::get("/article/edit/{article}", "Articles@edit")->name("article.edit");
Route::post("/article/update/{article}", "Articles@update")->name("article.update");



Route::get("/about", "About@index")->name("about");

Route::get("/contact", "Contact@index")->name("contact");
