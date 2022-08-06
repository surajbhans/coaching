<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\{Authcontroller,Homecontroller,Admincontroller,studentcontroller,CoursesController};

Route::match(["get","post"],"/auth/login",[AUTHcontroller::class,"login"])->name('login');
Route::match(["get","post"],"/auth/signup",[AUTHcontroller::class,"signup"])->name('signup');

Route::get("/logout",[Authcontroller::class,"logout"])->name('logout');
Route::get('/',[Homecontroller::class,"index"])->name("home");

Route::prefix("admin")->group(function(){
    Route::resource('course', CoursesController::class);

Route::controller(Admincontroller::class)->group(function(){
Route::get("admin/index","dashboard")->name("admin.index");
Route::get("admin/manage/users","manageuser")->name("admin.manage.user");
Route::get("admin/manage/student","managestudent")->name("admin.manage.student");
});
});

   Route::middleware(['auth'])->group(function () {
    Route::resource("student",StudentController::class);
});




