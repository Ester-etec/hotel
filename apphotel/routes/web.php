<?php
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ClienteController::class, 'showHome'])->name('home');

//Cliente
Route::get('/cadastro-cliente', [ClienteController::class, 'showFormularioCadastroCliente'])->name('show-formulario-cadastro');
Route::post('/cadastro-cliente', [ClienteController::class, 'cadCliente'])->name('envia-banco-cliente');
Route::get('/gerenciar-cliente',[ClienteController::class,'gerenciarCliente'])->name('gerenciar-cliente');
Route::get('/mostrar-cliente/{id}',[ClienteController::class,'mostrarGerenciarClienteId'])->name('mostrar-cliente');
Route::put('/alterar-cliente/{id}',[ClienteController::class,'alterarClienteBanco'])->name('alterar-cliente');
Route::delete('/apaga-cliente/{id}',[ClienteController::class,'destroy'])->name('apagar-cliente');



//funcionario
Route::get('/cadastro-funcionario', [FuncionarioController::class, 'showformularioCadastroFuncionario'] );
Route::post('/cadastro-funcionario',[FuncionarioController::class,'cadFuncionario'])->name('envia-banco-funcionario');
Route::get('/gerenciar-funcionario',[FuncionarioController::class,'gerenciarFuncionario'])->name('gerenciar-funcionario');
Route::get('/mostrar-funcionario/{id}',[FuncionarioController::class,'mostrarGerenciarFuncionarioId'])->name('mostrar-funcionario');
Route::get('/alterar-funcionario/{id}',[FuncionarioController::class,'alterarFuncionarioBanco'])->name('alterar-funcionario');
Route::delete('/apagar-funcionario/{id}',[FuncionarioController::class,'apagarFuncionario'])->name('apagar-funcionario');


//quarto
Route::get('/cadastro-quarto', [QuartoController::class, 'showformularioCadastroQuarto'] );
Route::post('/cadastro-quarto',[QuartoController::class,'cadQuarto'])->name('envio-banco-quarto');
Route::get('/gerenciar-quarto',[QuartoController::class,'gerenciarQuarto'])->name('gerenciar-quarto');
Route::get('/mostrar-quarto/{id}',[QuartoController::class,'mostrarGerenciarQuartoId'])->name('mostrar-quarto');
Route::get('/alterar-quarto/{id}',[QuartoController::class,'alterarQuarto'])->name('alterar-quarto');
Route::delete('/apagar-quarto/{id}',[QuartoController::class,'apagarQuarto'])->name('apagar-quarto');


//reserva
Route::get('/cadastro-reserva', [ReservaController::class, 'showformularioCadastroReserva'] );
Route::post('/cadastro-reserva',[ReservaController::class,'cadReserva'])->name('envio-banco-reserva');
Route::get('/gerenciar-reserva',[ReservaController::class,'gerenciarReserva'])->name('gerenciar-reserva');