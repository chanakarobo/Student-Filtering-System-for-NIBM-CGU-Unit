<?php
use Illuminate\Http\Request;
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



Route::get('login', function () {
    return view('login');
});


Route::post('/saveTask','Taskcontroller@store');

Route::post('/addgpa','Taskcontroller@addgpa');

Route::post('/savecomp','Taskcontroller@compstore');

Route::post('/savebatch','Taskcontroller@savebatch');

Route::post('/savebranch','Taskcontroller@savebranch');

Route::get('updatetask/{id}','Taskcontroller@updatetaskview');

Route::post('updatetasks','Taskcontroller@updatetask');

Route::get('deletetask/{id}','Taskcontroller@deletetask');

Route::post('/savedep','Taskcontroller@savedep');

Route::get('studentgpa/{index}/{email}/{mobile}','Taskcontroller@setcontrol');

Route::post('/viewdata','Taskcontroller@showmid');

Route::get('/addmidmrk/{index}/{mobil}/{mail}/{gpa}','Taskcontroller@addmidmrk');

Route::post('/savemid','Taskcontroller@savemid');

Route::get('/addfinal/{index}/{mobil}/{mail}/{gpa}/{midmark}','Taskcontroller@addfinal');

Route::post('/savefinal','Taskcontroller@savefinal');

Auth::routes();

Route::get('/home', 'Taskcontroller@index');

Route::get('/dashboard', function (Request $request) {
    $depval=DB::table('departments')->where('dpt_code',$request->depno)->count();
    return view('dashboard')->with('dep',$depval);;
});

Route::get('gpa', function () {
    return view('gpa');
});

Route::get('student', function () {
    return view('student');
});

Route::get('company', function () {
    $comp=App\Comp::all();

    return view('company')->with('comps',$comp);
});

Route::get('department', function () {
    return view('department');
});

Route::get('midviva', function () {
    $mid=App\succeses::all();
    return view('midviva')->with('mids',$mid);
});

Route::get('finalviva', function () {
    $fin=App\midtable::all();
    return view('finalviva')->with('fins',$fin);
});

Route::get('filter', function () {
    $data=App\student::all();
    $department=App\department::all();
    
    $course=App\course::all();

    $batch=App\batch::all();
    
    return view('filter')->with('tasks',$data)->with('depatment',$department)->with('course', $course)->with('batch', $batch);
});

