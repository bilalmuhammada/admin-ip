<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'login']);
Route::post('/generate-password-email', [AuthController::class, 'generateForgotPasswordEmail']);
Route::post('/reset-password', [AuthController::class, 'storeNewPassword']);
Route::post('users/upload-file', [UserController::class, 'uploadFile']);
Route::post('edit-profile', [AuthController::class, 'editProfileBackend']);

Route::middleware('auth_check')->group(function () {
    Route::post('/get-states-by-country', [UserController::class, 'getStatesByCountry']);
    Route::post('/get-cities-by-state', [UserController::class, 'getCitiesByState']);
    Route::post('/get-cities-by-country', [UserController::class, 'getCitiesByCountry']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/update-password', [AuthController::class, 'updatePassword']);

    Route::post('/dashboard', [\App\Http\Controllers\DashboardController::class, 'dashboard']);
    Route::get('get-chart-data', [\App\Http\Controllers\DashboardController::class, 'getChartData']);
    Route::prefix('/admins/')->group(function () {
        Route::post('/list', [AdminController::class, 'all']);
        Route::post('/change-status', [AdminController::class, 'changeStatus']);
        Route::post('/store', [AdminController::class, 'store']);
        Route::post('/edit/{role_id}', [AdminController::class, 'edit']);
        Route::post('/update', [AdminController::class, 'update']);
        Route::post('/delete/{role_id}', [AdminController::class, 'delete']);
    });

    Route::prefix('/users')->group(function () {
        Route::post('/', [UserController::class, 'all']);
        Route::post('/change-status', [UserController::class, 'changeStatus']);
        Route::post('/store', [UserController::class, 'store']);
        Route::post('/{id}/show', [UserController::class, 'show']);
        Route::post('/update', [UserController::class, 'update']);
        Route::post('{id}/delete', [UserController::class, 'delete']);
        Route::post('reviews', [UserController::class, 'reviews']);
        Route::post('{id}/delete-review', [UserController::class, 'deleteReview']);
        Route::post('transactions', [UserController::class, 'transactions']);
        Route::post('{id}/delete-transaction', [UserController::class, 'deleteTransaction']);
    });

    Route::prefix('categories/')->group(function () {
        Route::post('/list', [CategoryController::class, 'all']);
        Route::post('/change-status', [CategoryController::class, 'changeStatus']);
        Route::post('/store', [CategoryController::class, 'store']);
        Route::post('/edit/{category_id}', [CategoryController::class, 'edit']);
        Route::post('/update', [CategoryController::class, 'update']);
        Route::post('/delete/{category_id}', [CategoryController::class, 'delete']);
        Route::post('/upload-file', [CategoryController::class, 'uploadFile']);
    });
});
