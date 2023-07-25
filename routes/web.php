<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\TrainingController;
use App\Http\Controllers\Frontend\IndustrialAttachmentController;
use App\Http\Controllers\Frontend\JobPlacementController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\CourseDetailsController;
use App\Http\Controllers\Frontend\RoutingAndSwitching;
use App\Http\Controllers\Frontend\HardwareAndNetworking;
use App\Http\Controllers\Frontend\NetworkSecurity;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/training', [TrainingController::class, 'index']);
Route::get('/industrial-attachment', [IndustrialAttachmentController::class, 'index']);
Route::get('/job-placement', [JobPlacementController::class, 'index']);
Route::get('/service', [ServicesController::class, 'index']);
Route::get('/course-details', [CourseDetailsController::class, 'index']);
Route::get('/routing-and-switching', [RoutingAndSwitching::class, 'index']);
Route::get('/hardware-and-networking', [HardwareAndNetworking::class, 'index']);
Route::get('/network-security', [NetworkSecurity::class, 'index']);

Route::get('/system-administration', function(){
    return view('frontend.system-administration');
});
Route::get('/web-development', function(){
    return view('frontend.web-development');
});
Route::get('/software-development', function(){
    return view('frontend.software-development');
});
Route::get('/cloud-visualization', function(){
    return view('frontend.cloud-visualization');
});
Route::get('/computer-and-telecommunication', function(){
    return view('frontend.computer-and-telecommunication');
});
Route::get('/civil-and-architecture', function(){
    return view('frontend.civil-and-architecture');
});

Route::get('/electrical', function(){
    return view('frontend.electrical');
});
Route::get('/electronics', function(){
    return view('frontend.electronics');
});
Route::get('/mechanical', function(){
    return view('frontend.mechanical');
});
Route::get('/power', function(){
    return view('frontend.power');
});


