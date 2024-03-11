<?php
use App\Http\Controllers\FuncionarioController;

use App\Http\Controllers\ClienteController;

use App\Http\Controllers\QuartoController;

use App\Http\Controllers\ReservaController;

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

Route::get('/', [ClienteController::class, 'showHome'])->name('home');

Route::get('/cadastro-cliente', [ClienteController::class, 'showFormularioCadastroCliente'])->name('show-formulario-cadastro');
Route::post('/cadastro-cliente', [ClienteController::class, 'cadCliente'])->name('envia-banco-cliente');
Route::get('/gerenciar-cliente',[ClienteController::class,'gerenciarCliente'])->name('gerenciar-cliente');

Route::get('/cadastro-funcionario', [FuncionarioController::class, 'showFormularioCadastroFuncionario'])->name('show-formulario-cadastro-funcionario');
Route::post('/cadastro-funcionario', [FuncionarioController::class, 'cadFuncionario'])->name('envia-banco-funcionario');
Route::get('/gerenciar-funcionario',[FuncionarioController::class,'gerenciarFuncionario'])->name('gerenciar-funcionario');

Route::get('/cadastro-quarto', [QuartoController::class, 'showFormularioCadastroQuarto'])->name('show-formulario-cadastro-quarto');
Route::post('/cadastro-quarto', [QuartoController::class, 'cadQuarto'])->name('envia-banco-quarto');
Route::get('/gerenciar-quarto',[QuartoController::class,'gerenciarQuarto'])->name('gerenciar-quarto');

Route::get('/cadastro-reserva', [ReservaController::class, 'showformularioCadastroReserva'] );
Route::post('/cadastro-reserva',[ReservaController::class,'cadReserva'])->name('envio-banco-reserva');
Route::get('/gerenciar-reserva',[ReservaController::class,'gerenciarReserva'])->name('gerenciar-reserva');