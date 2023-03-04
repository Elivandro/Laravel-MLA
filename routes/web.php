<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    EmployeeAddressController,
    EmployeeController,
    PlanController,
    ProfileController,
    SignatureController
};
use App\Http\Middleware\{
    TrustProxies,
    VerifyCsrfToken
};

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', [SignatureController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/signature/inserir',[SignatureController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('signature.create');

Route::post('/signature',[SignatureController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('signature.store');

Route::resource('/plano', PlanController::class)
    ->withoutMiddleware([
        TrustProxies::class,
        VerifyCsrfToken::class
    ])
    ->parameters([
        'plano' => 'plan:code'
]);

Route::resource('funcionario', EmployeeController::class)
    ->parameters([
        'funcionario' => 'employee'
    ]);

Route::get('/userland', fn() => 'Olá userland')
    ->middleware('checkToken:simple-token');

Route::resource('funcionario.endereco', EmployeeAddressController::class)
    ->parameters([
        'funcionario' => 'employee',
        'endereco' => 'address'
    ])->only(['index', 'destroy']);