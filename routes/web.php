<?php


//namespace App\Http\Controllers\Auth;
//use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\KardexController;
use App\Http\Controllers\NuevoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Auth::routes();

//Route::get('/', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/', 'LoginController@login')->name('home')->middleware('auth');
Route::get('logout', 'LoginController@login')->name('home')->middleware('auth');

Route::get('menu',function(){
    return view('auth.menu');
});
Route::get('portada',function(){
    return view('auth.portada');
});

Route::get('kardex','KardexController@kardex');

Route::get('reporte',function(){
    return view('auth.reporte');
});

Route::get('ajuste',function(){
    return view('auth.ajuste');
});

Route::get('salidaUsg',function(){
    return view('auth.salidasUSG');
});

Route::get('descargas',function(){
    return view('auth.unidadDescargada');
});

Route::get('totalProducto',function(){
    return view('auth.totalProducto');
});


Route::get('inventario',function(){
    return view('auth.inventario');
});

Route::get('compras',function(){
    return view('auth.compras');
});

Route::get('nuevo','NuevoController@nuevo');
Route::post('nuevo','NuevoController@store');

Route::get('solicitudPedido',function(){
    return view('auth.solicitudPedido');
});

Route::get('solicitudJefe',function(){
    return view('auth.solicitudJefe');
});

Route::get('entradaProductos',function(){
    return view('auth.entradaProductos');
});

Route::group(['middleware' => 'auth'], function () {

    Route::resources([
        'users' => 'UserController',
        'providers' => 'ProviderController',
        'inventory/products' => 'ProductController',
        'clients' => 'ClientController',
        'inventory/categories' => 'ProductCategoryController',
        'transactions/transfer' => 'TransferController',
        'methods' => 'MethodController',
    ]);
    
    Route::resource('transactions', 'TransactionController')->except(['create', 'show']);
    Route::get('transactions/stats/{year?}/{month?}/{day?}', ['as' => 'transactions.stats', 'uses' => 'TransactionController@stats']);
    Route::get('transactions/{type}', ['as' => 'transactions.type', 'uses' => 'TransactionController@type']);
    Route::get('transactions/{type}/create', ['as' => 'transactions.create', 'uses' => 'TransactionController@create']);
    Route::get('transactions/{transaction}/edit', ['as' => 'transactions.edit', 'uses' => 'TransactionController@edit']);

    Route::get('inventory/stats/{year?}/{month?}/{day?}', ['as' => 'inventory.stats', 'uses' => 'InventoryController@stats']);
    Route::resource('inventory/receipts', 'ReceiptController')->except(['edit', 'update']);
    Route::get('inventory/receipts/{receipt}/finalize', ['as' => 'receipts.finalize', 'uses' => 'ReceiptController@finalize']);
    Route::get('inventory/receipts/{receipt}/product/add', ['as' => 'receipts.product.add', 'uses' => 'ReceiptController@addproduct']);
    Route::get('inventory/receipts/{receipt}/product/{receivedproduct}/edit', ['as' => 'receipts.product.edit', 'uses' => 'ReceiptController@editproduct']);
    Route::post('inventory/receipts/{receipt}/product', ['as' => 'receipts.product.store', 'uses' => 'ReceiptController@storeproduct']);
    Route::match(['put', 'patch'], 'inventory/receipts/{receipt}/product/{receivedproduct}', ['as' => 'receipts.product.update', 'uses' => 'ReceiptController@updateproduct']);
    Route::delete('inventory/receipts/{receipt}/product/{receivedproduct}', ['as' => 'receipts.product.destroy', 'uses' => 'ReceiptController@destroyproduct']);

    Route::resource('sales', 'SaleController')->except(['edit', 'update']);
    Route::get('sales/{sale}/finalize', ['as' => 'sales.finalize', 'uses' => 'SaleController@finalize']);
    Route::get('sales/{sale}/product/add', ['as' => 'sales.product.add', 'uses' => 'SaleController@addproduct']);
    Route::get('sales/{sale}/product/{soldproduct}/edit', ['as' => 'sales.product.edit', 'uses' => 'SaleController@editproduct']);
    Route::post('sales/{sale}/product', ['as' => 'sales.product.store', 'uses' => 'SaleController@storeproduct']);
    Route::match(['put', 'patch'], 'sales/{sale}/product/{soldproduct}', ['as' => 'sales.product.update', 'uses' => 'SaleController@updateproduct']);
    Route::delete('sales/{sale}/product/{soldproduct}', ['as' => 'sales.product.destroy', 'uses' => 'SaleController@destroyproduct']);

    Route::get('clients/{client}/transactions/add', ['as' => 'clients.transactions.add', 'uses' => 'ClientController@addtransaction']);

    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::match(['put', 'patch'], 'profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::match(['put', 'patch'], 'profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
    Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
    Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
    Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
});
