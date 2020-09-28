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
    return view('welcome');
})->name('welcome');

Route::get('about-us', 'FrontController@aboutUs')->name('about');
Route::get('expected-project-outputs', 'FrontController@expectedProjest')->name('expectedProjects');
Route::get('contact-us', 'FrontController@contactUs')->name('contact');
Route::get('research-activities', 'FrontController@research')->name('research');
Route::get('capacity-building-activities', 'FrontController@capacityBuilding')->name('capacityBuilding');
Route::get('acado-prenuership', 'FrontController@acado')->name('acado');
Route::get('curriculum', 'FrontController@curriculum')->name('curriculum');
Route::get('our-gallery', 'FrontController@openGallery')->name('openGallery');
Route::post('submit-paper', 'SymposiumController@submit')->name('submitAbstract');
Route::get('symposium', 'FrontController@symposium')->name('symposium');
Route::get('symposium/day_one', 'SymposiumController@dayone')->name('symposium.dayone');
Route::get('symposium/day_two', 'SymposiumController@daytwo')->name('symposium.daytwo');
Route::get('symposium/day_three', 'SymposiumController@daythree')->name('symposium.daythree');
Route::get('symposium/poster', 'SymposiumController@poster')->name('symposium.poster');
Route::get('academic-immersion', 'AcademicImmersionController@index')->name('immersion');
Route::get('conference', 'FrontController@conference_1st')->name('conference_1st');
Route::get('Product-pitching', 'FrontController@pitching')->name('pitching');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

//Admin;
//Admin Gallery 
Route::get('admin/gallery', 'GalleryController@index')->name('gallery');
Route::get('admin/gallery/add_picture', 'GalleryController@create')->name('gallery.add');
Route::post('admin/gallery/add_picture', 'GalleryController@store')->name('admin.store.gallery');
Route::get('/admin/gallery/edit/{gallery}', 'GalleryController@edit');
Route::post('/admin/gallery/update/{gallery}', 'GalleryController@update')->name('admin.gallery.edit');
Route::get('/admin/gallery/delete/{gallery}', 'GalleryController@destroy');

//Admin Event
Route::get('admin/event', 'EventController@index')->name('event');
Route::get('admin/event/add', 'EventController@create')->name('event.add');
Route::get('/admin/event/{event}', 'EventController@show');
Route::get('admin/image_add', 'EventController@create_event_image')->name('event.add.picture');
Route::post('admin/add_picture', 'EventController@eventImageStore')->name('event.store.picture');