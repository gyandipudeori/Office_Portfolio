<?php

use App\Livewire\Home;
use App\Livewire\ShowBlog;
use App\Livewire\ShowHome;
use App\Livewire\ShowPage;
use App\Livewire\BlogDetail;
use App\Livewire\ShowTeamPage;
use App\Livewire\ShowContactPage;
use App\Livewire\ShowServicePage;
use App\Livewire\ShowServiceDetails;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',ShowHome::class)->name('home');
Route::get('/service/{id}', [ServiceController::class, 'show'])->name('service.details');
Route::get('/services',ShowServicePage::class)->name('servicesPage');
Route::get('/service/{id}',ShowServiceDetails::class)->name('servicePage');
Route::get('/team',ShowTeamPage::class)->name('teamPage');
Route::get('/blog',ShowBlog::class)->name('blog');
Route::get('/blog{id}',BlogDetail::class)->name('blogDetails');
Route::get('/page{id}',ShowPage::class)->name('page');
Route::get('/contact',ShowContactPage::class)->name('contact');
