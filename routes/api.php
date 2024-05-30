<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Subject;
use Illuminate\Http\Response;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/get-subjects', function(){

    return Subject::all();

});

Route::delete('/delete-subject/{subjectId}', function($subjectId){

    try{
        Subject::find($subjectId)->delete();

        return response()->json(['success' => true, 'message' => 'Subject deleted successfully!'], Response::HTTP_OK);
    }
    catch(\Exception $e)
    {
        throw $e;
    }

});

Route::middleware(['auth:sanctum'])->group(function(){
    //to do
});
