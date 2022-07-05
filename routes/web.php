<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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
});
Route::get('/registration',[userController::class,'registration']);
Route::get('/contractor_dashboard',[userController::class,'contractorDashboard']);
Route::get('/agency_dashboard',[userController::class,'agencyDashboard']);
Route::get('/order-placed',[userController::class,'orderPlaced']);
Route::get('/agency-demand-view',[userController::class,'agencyDemandView']);
Route::get('/contr-profile',[userController::class,'contrProfile']);
Route::get('/contr_profile_list',[userController::class,'contProfileList']);
Route::get('/agencies-profile',[userController::class,'agenciesProfile']);

Route::get('/agency_profile_list',[userController::class,'agencyProfileList']);

Route::get('/order-place',[userController::class,'orderPlace']);
Route::get('/orders-history',[userController::class,'ordersHistory']);
Route::get('/add-interviewer',[userController::class,'addInterviewer']);
Route::get('/list-interviewer',[userController::class,'listInterviewer']);
Route::get('/agency-profile',[userController::class,'agencyProfile']);
Route::get('/manage-orders',[userController::class,'manageOrders']);
Route::get('/orders-history-agency',[userController::class,'ordersHistoryAgency']);
Route::get('/candidate-submission',[userController::class,'candidateSubmission']);
Route::get('/all-candidates-agency',[userController::class,'allCandidatesAgency']);
Route::get('/selected-candidates',[userController::class,'selectedCandidates']);
Route::get('/selected-candidate-submission',[userController::class,'selectedCandidateSubmission']);
Route::get('/interviewer-dashboard',[userController::class,'interviewerDashboard']);
Route::get('/interviewer-profile',[userController::class,'interviewerProfile']);
Route::get('/schedule-candidates',[userController::class,'scheduleCandidates']);
Route::get('/schedule-submission',[userController::class,'scheduleSubmission']);
Route::get('/selection-form',[userController::class,'selectionForm']);
Route::get('/test-form',[userController::class,'testForm']);
Route::get('/candidate_list',[userController::class,'candidateList']);








