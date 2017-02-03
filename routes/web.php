<?php
use App\User;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use App\Mail\SubscribeMail;
use App\Mail\QueryMail;
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

Route::post('/search', 'PagesController@search')->name('search');

Route::post('/subscribe', function (Request $request, Mailer $mailer){
    define('SUBSCRIBE', 3);
    $subsribeUser = new User();
    $subsribeUser->name = "Subsciber";
    $subsribeUser->email = $request->email;
    $subsribeUser->password = Crypt::encrypt('Pakistan');
    $subsribeUser->remember_token = $request->_token;
    $subsribeUser->timestamps;
    $subsribeUser->role_id = SUBSCRIBE;
    $subsribeUser->save();
    //return redirect()->to('/#success-alert')->with('message', "You have successfully subscribe Our Alerts.");
    // Send mail
    $mailer
        ->to($request->input('email'))
        ->send(new SubscribeMail($request->email));
    return redirect()->to('/#success-alert')->with('message', "You have successfully subscribe Our Alerts.");
})->name('subscribe');


Route::post('/sendmail', function (Request $request, Mailer $mailer) {
    $mailer
        ->to($request->input('mail'))
        ->send(new QueryMail($request->input('title'), $request->input('phone'), $request->input('bodyMessage')));
    return redirect()->to('contact#success-alert')->with('message', 'send email.');
})->name('sendmail');


Route::get('/api/getsubscribe/list', 'ApiController@getSubscribersList');
Route::get('/api/getsubscribe/list/filter/{id}', 'ApiController@getSubscribersListFilter');

Route::get('/location', function (){
    return view('pages.location');
});


Route::get('/indexlocation', 'PagesController@indexWithLocation');