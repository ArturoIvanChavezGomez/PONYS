<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\StudentController;
use App\Http\Controllers\Teacher\SubjectController;
use App\Http\Controllers\Teacher\GroupController;

Route::resource('users', StudentController::class)->names('teacher.users');

Route::resource('subjects', SubjectController::class)->names('teacher.subjects');

Route::resource('groups', GroupController::class)->names('teacher.groups');