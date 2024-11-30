    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\NewsController;
    use App\Http\Controllers\IndustryController;
    use App\Http\Controllers\ChiefDesignerController;
    use App\Http\Controllers\AirplaneController;
    use App\Http\Controllers\ContactController;
    use App\Http\Controllers\HistoryController;
    use App\Http\Controllers\SocialLinkController;

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
    Route::get('/airplanes', [AirplaneController::class, 'index'])->name('airplanes.index');
    Route::get('/contact', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/histories', [HistoryController::class, 'index'])->name('histories.index');
    Route::get('/social-links', [SocialLinkController::class, 'showSocialLinks']);

    require __DIR__ . '/auth.php';
