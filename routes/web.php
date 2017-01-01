<?php
use App\User;
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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Theme routes
#Home
Route::get('/', 'PagesController@index');
#about
Route::get('/about', 'PagesController@about');
#search
Route::get('/search', 'PagesController@search');
#contact
Route::get('/contact', 'PagesController@contact');
#byalpha
Route::get('/byalpha', 'PagesController@byAlpha');
# byArea
Route::get('/byarea', 'PagesController@byArea');
# byCategory
Route::get('/bycategory', 'PagesController@byCategory');

Route::get('/flash', function (){
    return redirect()->to('/')->with('message', 'Hello I am there');
});

Route::get('/debug', 'PagesController@debug');

Route::post('/search', 'PagesController@search');

Route::post('/subscribe', function (\Illuminate\Http\Request $request){
    define('SUBSCRIBE', 3);
    $subsribeUser = new User();
    $subsribeUser->name = "Subsciber";
    $subsribeUser->email = $request->email;
    $subsribeUser->password = Crypt::encrypt('Pakistan');
    $subsribeUser->remember_token = $request->_token;
    $subsribeUser->timestamps;
    $subsribeUser->role_id = SUBSCRIBE;
    $subsribeUser->save();
    return redirect()->back()->with('message', "You have successfully subscribe Our Alerts.");
})->name('subscribe');


Route::post('/sendmail', function (\Illuminate\Http\Request $request, \Illuminate\Mail\Mailer $mailer) {
    $mailer
        ->to($request->input('mail'))
        ->send(new \App\Mail\MyMail($request->input('title'), $request->input('phone'), $request->input('bodyMessage')));
    return redirect()->back()->with('message', 'send email.');
})->name('sendmail');