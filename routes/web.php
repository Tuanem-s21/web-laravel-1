<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ConnectController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\VoucherController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
    // return view('auth/login');
});

Route::get('/download', function(\Illuminate\Http\Request $request) {
    $basepath = storage_path('app');
    $filename = realpath($basepath.'/'.$request->get('filename'));
    if ($filename !== false && substr($filename, 0, strlen($basepath)) == $basepath)
      return response()->download($filename);
  
    App::abort(404);
});

Route::get('login', [CustomAuthController::class,'login'])->middleware('alreadyLogedIn')->name('login');
Route::get('/register', [CustomAuthController::class,'register'])->middleware('alreadyLogedIn');
Route::post('/register-user', [CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user', [CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard', [CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', [CustomAuthController::class,'logout']);

Route::get('/forgot', [CustomAuthController::class,'forgot'])->middleware('alreadyLogedIn');



Route::prefix('admin')->name('admin.')->group(function () {
    // user
    Route::prefix('user')->controller(UserController::class)->name('user.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}','update')->name('update');
        Route::get('remove/{id}', 'remove')->name('remove');
    });

    // booking
    Route::prefix('booking')->controller(BookingController::class)->name('booking.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}','update')->name('update');
        Route::get('remove/{id}', 'remove')->name('remove');
    });

    // client
    Route::prefix('client')->controller(ClientController::class)->name('client.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}','update')->name('update');
        Route::get('remove/{id}', 'remove')->name('remove');
    });

    // category
    Route::prefix('category')->controller(CategoryController::class)->name('category.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}','update')->name('update');
        Route::get('remove/{id}', 'remove')->name('remove');
    });

    // history
    Route::prefix('history')->controller(HistoryController::class)->name('history.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}','update')->name('update');
        Route::get('remove/{id}', 'remove')->name('remove');
    });

    // service
    Route::prefix('service')->controller(ServiceController::class)->name('service.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}','update')->name('update');
        Route::get('remove/{id}', 'remove')->name('remove');
    });

    // staff
    Route::prefix('staff')->controller(StaffController::class)->name('staff.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}','update')->name('update');
        Route::get('remove/{id}', 'remove')->name('remove');
    });

    // voucher
    Route::prefix('voucher')->controller(VoucherController::class)->name('voucher.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}','update')->name('update');
        Route::get('remove/{id}', 'remove')->name('remove');
    });
    
    // connect
    Route::prefix('connect')->controller(ConnectController::class)->name('connect.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}','update')->name('update');
        Route::get('remove/{id}', 'remove')->name('remove');
    });
});

















// dashboard start
// Route::get('/dashboard1', function () {
//     return view('admin/dashboard/dashboard_1');
// });
Route::get('/dashboard2', function () {
    return view('admin/dashboard/dashboard_2');
});
Route::get('/dashboard3', function () {
    return view('admin/dashboard/dashboard_3');
});
// dashboard end

// widgets
Route::get('/widgets', function () {
    return view('admin/pages/widgets');
});

// gallery
Route::get('/gallery', function () {
    return view('admin/pages/gallery');
});

// calendar
Route::get('/calendar', function () {
    return view('admin/pages/calendar');
});

// charts start
Route::get('/chartjs', function () {
    return view('admin/pages/charts/chartjs');
});
Route::get('/flot', function () {
    return view('admin/pages/charts/flot');
});
Route::get('/inline', function () {
    return view('admin/pages/charts/inline');
});
// charts end


// form start
Route::get('/advanced', function () {
    return view('admin/pages/forms/advanced');
});
Route::get('/editors', function () {
    return view('admin/pages/forms/editors');
});
Route::get('/general', function () {
    return view('admin/pages/forms/general');
});
Route::get('/validation', function () {
    return view('admin/pages/forms/validation');
});
// form end


// table start
Route::get('/data', function () {
    return view('admin/pages/tables/data');
});
Route::get('/jsgrid', function () {
    return view('admin/pages/tables/jsgrid');
});
Route::get('/simple', function () {
    return view('admin/pages/tables/simple');
});
// table end


// mailbox start
Route::get('/compose', function () {
    return view('admin/pages/mailbox/compose');
});
Route::get('/mailbox', function () {
    return view('admin/pages/mailbox/mailbox');
});
Route::get('/read-mail', function () {
    return view('admin/pages/mailbox/read-mail');
});
// mailbox end