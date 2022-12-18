<?


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\VerifyEmailController;




 Route::middleware('guest')->group(function () {
    Route::controller(RegisterController::class)->group(function () {
        Route::get('register', 'showRegistrationForm')->name('register');
        Route::post('register', 'registerUser')->name('register');
    });
    Route::controller(LoginController::class)->group(function () {
        Route::get('login', 'showLoginForm')->name('login');
        Route::post('login', 'loginUser')->name('login');
    });

});
Route::post('logout', [LogoutController::class, 'index'])
->middleware('auth')
->name('logout');
