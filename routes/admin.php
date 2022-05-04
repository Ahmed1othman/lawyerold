<?php

use App\Http\Controllers\Admin\AdviceOrderController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\CustomController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\featuresController;
use App\Http\Controllers\Admin\FrontSectionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\NavBarController;
use App\Http\Controllers\Admin\newsController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PageSectionController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SubscriptionController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

require __DIR__ . '/auth.php';

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::get('/admin', [HomeController::class, 'index'])->name('admin');

    ###################### Start Routes orders  ######################
    Route::get('/slider-option', [HomeController::class, 'showsliderOption'])->name('slider-option');
    Route::get('/update-slider-option', [HomeController::class, 'updatesliderOption'])->name('update-slider-option');
    Route::post('/save-slider-option', [HomeController::class, 'savesliderOption'])->name('save-slider-option');
    ###################### Start Routes orders  ######################
    Route::resource('orders',OrderController::class);
    Route::get('archive/orders', [OrderController::class,'deleted'])->name('orders-archived');
    ###################### End Routes orders  ######################

    ###################### Start Routes orders  ######################
    Route::resource('advice-orders',AdviceOrderController::class);
    Route::get('archive/advice-orders', [AdviceOrderController::class,'deleted'])->name('advice-orders-archived');
    ###################### End Routes orders  ######################

    ###################### Start Routes orders  ######################
    Route::resource('contact-us',ContactUsController::class);
    Route::get('archive/contact-us', [ContactUsController::class,'deleted'])->name('contact-us-archived');
    ###################### End Routes orders  ######################

    Route::resource('custom-page', CustomController::class);

    ###################### Start Routes resource Services ######################
    Route::resource('Services', ServiceController::class);
    Route::get('deleted-at', [ServiceController::class,'deleted'])->name('services-deleted');
    ###################### End Routes resource Services ######################


    ###################### Start Routes Restore  ######################

    Route::post('restor-Services/{id}', [ServiceController::class,'restor'])->name('restor-service');
    Route::post('restor-orders/{id}', [OrderController::class,'restor'])->name('restor-order');
    Route::post('restor-advice-orders/{id}', [AdviceOrderController::class,'restor'])->name('restor-advice-order');
    Route::post('restor-contact-us/{id}', [ContactUsController::class,'restor'])->name('restor-contact-us');
    Route::post('restor-features/{id}', [ClientController::class,'restor'])->name('restor-features');
    Route::post('restor-projects/{id}', [ProjectsController::class,'restor'])->name('restor-projects');
    Route::post('restor-employees/{id}', [EmployeeController::class,'restor'])->name('restor-employees');
    Route::post('restor-news/{id}', [newsController::class,'restor'])->name('restor-news');

    ###################### End Routes Restore ######################

    ###################### Start Routes resource slider ######################
    Route::resource('sliders', SliderController::class);
    ###################### End Routes resource slider ######################

    ###################### Start Routes resource NAvBar ######################
    Route::resource('navbar',NavBarController::class);
    ###################### End Routes resource NavBar ######################

    ###################### Start Routes resource NAvBar ######################
    Route::resource('info',InfoController::class);
    ###################### End Routes resource NavBar ######################

    ###################### Start Routes resource NAvBar ######################
    Route::resource('front-sections',FrontSectionController::class);
    ###################### End Routes resource NavBar ######################

    ####################### Start Routes resource features ######################
    Route::resource('features', featuresController::class);
    Route::get('deleted-feature', [featuresController::class,'deletedFeature'])->name('client-deleted');
    ###################### End Routes resource features ######################

    ####################### Start Routes resource clients ######################
    Route::resource('clients', ClientController::class);
    Route::get('deleted-clients', [ClientController::class,'deletedClient'])->name('feature-deleted');
    ###################### End Routes resource features ######################

    ####################### Start Routes resource projects ######################
    Route::resource('projects', ProjectsController::class);
    Route::get('deleted-project', [ProjectsController::class,'deletedProject'])->name('project-deleted');
    ###################### End Routes resource projects ######################

    ####################### Start Routes resource employees ######################
    Route::resource('employees', EmployeeController::class);
    Route::get('deleted-employee', [EmployeeController::class,'deletedEmployee'])->name('employee-deleted');
    ###################### End Routes resource employees ######################

    ####################### Start Routes page-sections ######################
    Route::resource('page-sections', PageSectionController::class)->except('index','show');
    Route::get('deleted-section', [PageSectionController::class,'deletedSection'])->name('section-deleted');
    Route::get('page-section/{page}', [PageSectionController::class,'getPageSections'])->name('page-sections-get');
    Route::get('page-section/create/{page}', [PageSectionController::class,'createPageSection'])->name('create-page-section');
    ###################### End Routes resource projects ######################

    ####################### Start Routes resource news ######################
    Route::resource('news', newsController::class);
    Route::get('deleted-news', [newsController::class,'deletedNews'])->name('news-deleted');
    ###################### End Routes resource news ######################

    ####################### Start Routes resource news ######################
    Route::resource('subscription', SubscriptionController::class);
    ###################### End Routes resource news ######################

});
