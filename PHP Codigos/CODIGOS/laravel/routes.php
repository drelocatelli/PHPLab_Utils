Route::resource('prestador', PrestadorController::class);
Route::resource('cliente', PrestadorController::class);

Route::group(['prefix' => 'prestador'], function(){
    $controller = PrestadorController::class;
    Route::get('/', [$controller, 'loguin']);
    Route::get('/dashboard', [$controller, 'dashboard']);
    Route::get('/cadastrar', [$controller, 'register']);
});

Route::group(['prefix' => 'cliente'], function(){
    $controller = ClienteController::class;
    Route::get('/', [$controller, 'loguin']);
    Route::get('/dashboard', [$controller, 'dashboard']);
});


Route::get('/generateToken', function(){
    function generateToken(){
        $token = rand(100,500);
        $token = md5($token);
        $token = substr($token, 23);
            
        return $token;
    }
    return generateToken();
});
