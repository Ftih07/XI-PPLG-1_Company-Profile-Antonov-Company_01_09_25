    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\NewsController;
    use App\Http\Controllers\IndustryController;
    use App\Http\Controllers\ChiefDesignerController;


    Route::view('/', 'index');

    Route::view('dashboard', 'dashboard')
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->middleware(['auth'])
        ->name('profile');


        Route::get('/', function () {
            return view('index');
        });

    Route::get('/', [HomeController::class, 'index'])->name('index');

    Route::get('/news', [NewsController::class, 'index'])->name('news.index');

    Route::get('/industries', [IndustryController::class, 'index'])->name('industries.index');

    Route::get('/chief-designers', [ChiefDesignerController::class, 'index'])->name('chief-designers.index');

    require __DIR__.'/auth.php';
