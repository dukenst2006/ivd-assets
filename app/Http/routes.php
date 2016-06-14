<?php
Route::group(['prefix' => 'api/v1', 'middleware' => 'auth:api'], function() {
  Route::get('test', function() {
    return response()->json(['foo' => 'bar']);
  });
  Route::get('user', function() {
    $users = App\User::all();
    return $users->toJson();
  });
});

Route::group(['middleware' => ['web']], function () {
  Route::auth();

  Route::get('/', 'HomeController@index');
  Route::get('home', 'HomeController@index');
  Route::get('dashboard', 'HomeController@index');

  Route::get('locations', 'LocationsController@index');
  Route::get('locations/{location}/edit', 'LocationsController@edit');
  Route::patch('locations/{location}/update', 'LocationsController@update');
  Route::post('locations', 'LocationsController@store');

  Route::get('asset-types', 'AssetTypesController@index');
  Route::get('asset-types/create', 'AssetTypesController@create');
  Route::get('asset-types/{asset_type}/edit', 'AssetTypesController@edit');
  Route::patch('asset-types/{asset_type}/update', 'AssetTypesController@update');
  Route::post('asset-types', 'AssetTypesController@store');

  Route::get('divisions', 'DivisionsController@index');
  Route::get('divisions/create', 'DivisionsController@create');
  Route::get('divisions/{division}/edit', 'DivisionsController@edit');
  Route::patch('divisions/{division}/update', 'DivisionsController@update');
  Route::post('divisions', 'DivisionsController@store');

  Route::get('manufacturers', 'ManufacturersController@index');
  Route::get('manufacturers/create', 'ManufacturersController@create');
  Route::get('manufacturers/{manufacturer}/edit', 'ManufacturersController@edit');
  Route::patch('manufacturers/{manufacturer}/update', 'ManufacturersController@update');
  Route::post('manufacturers', 'ManufacturersController@store');

  Route::get('pcspecs', 'PcspecsController@index');
  Route::get('pcspecs/create', 'PcspecsController@create');
  Route::get('pcspecs/{pcspec}/edit', 'PcspecsController@edit');
  Route::patch('pcspecs/{pcspec}/update', 'PcspecsController@update');
  Route::post('pcspecs', 'PcspecsController@store');

  Route::get('statuses', 'StatusesController@index');
  Route::get('statuses/{status}/edit', 'StatusesController@edit');
  Route::patch('statuses/{status}/update', 'StatusesController@update');
  Route::post('statuses', 'StatusesController@store');

  Route::get('suppliers', 'SuppliersController@index');
  Route::get('suppliers/create', 'SuppliersController@create');
  Route::get('suppliers/{supplier}/edit', 'SuppliersController@edit');
  Route::patch('suppliers/{supplier}/update', 'SuppliersController@update');
  Route::post('suppliers', 'SuppliersController@store');

  Route::get('models', 'AssetModelsController@index');
  Route::get('models/create', 'AssetModelsController@create');
  Route::get('models/{asset_model}/edit', 'AssetModelsController@edit');
  Route::patch('models/{asset_model}/update', 'AssetModelsController@update');
  Route::post('models', 'AssetModelsController@store');

  Route::get('assets', 'AssetsController@index');
  Route::get('assets/create', 'AssetsController@create');
  Route::get('assets/{asset}/edit', 'AssetsController@edit');
  Route::patch('assets/{asset}/update', 'AssetsController@update');
  Route::post('assets', 'AssetsController@store');

  Route::get('movements/{asset}/history', 'MovementsController@show');
  Route::get('assets/{asset}/move', 'MovementsController@create');
  Route::post('assets/{asset}/store', 'MovementsController@store');

  Route::get('invoices', 'InvoicesController@index');
  Route::get('invoices/create', 'InvoicesController@create');
  Route::get('invoices/{invoice}', 'InvoicesController@show');
  Route::get('invoices/{invoice}/edit', 'InvoicesController@edit');
  Route::patch('invoices/{invoice}/update', 'InvoicesController@update');
  Route::post('invoices', 'InvoicesController@store');

  Route::get('budgets', 'BudgetsController@index');
  Route::get('budgets/create', 'BudgetsController@create');
  Route::get('budgets/{budget}', 'BudgetsController@show');
  Route::get('budgets/{budget}/edit', 'BudgetsController@edit');
  Route::patch('budgets/{budget}/update', 'BudgetsController@update');
  Route::post('budgets', 'BudgetsController@store');

  Route::get('tickets', 'TicketsController@index');
  Route::get('tickets/create', 'TicketsController@create');
  Route::get('tickets/{ticket}', 'TicketsController@show');
  Route::get('tickets/{ticket}/edit', 'TicketsController@edit');
  Route::patch('tickets/{ticket}/update', 'TicketsController@update');
  Route::post('tickets', 'TicketsController@store');
  Route::post('tickets/{ticket}', 'TicketsEntriesController@store');

  Route::get('admin', 'PagesController@getTicketConfig');

  Route::get('admin/ticket-statuses', 'TicketsStatusesController@index');
  Route::get('admin/ticket-statuses/create', 'TicketsStatusesController@create');
  Route::get('admin/ticket-statuses/{ticketsStatus}/edit', 'TicketsStatusesController@edit');
  Route::patch('admin/ticket-statuses/{ticketsStatus}/update', 'TicketsStatusesController@update');
  Route::post('admin/ticket-statuses', 'TicketsStatusesController@store');

  Route::get('admin/ticket-priorities', 'TicketsPrioritiesController@index');
  Route::get('admin/ticket-priorities/create', 'TicketsPrioritiesController@create');
  Route::get('admin/ticket-priorities/{ticketsPriority}/edit', 'TicketsPrioritiesController@edit');
  Route::patch('admin/ticket-priorities/{ticketsPriority}/update', 'TicketsPrioritiesController@update');
  Route::post('admin/ticket-priorities', 'TicketsPrioritiesController@store');

  Route::get('admin/ticket-types', 'TicketsTypesController@index');
  Route::get('admin/ticket-types/create', 'TicketsTypesController@create');
  Route::get('admin/ticket-types/{ticketsType}/edit', 'TicketsTypesController@edit');
  Route::patch('admin/ticket-types/{ticketsType}/update', 'TicketsTypesController@update');
  Route::post('admin/ticket-types', 'TicketsTypesController@store');

  Route::get('admin/ticket-canned-fields', 'TicketsCannedFieldsController@index');
  Route::get('admin/ticket-canned-fields/create', 'TicketsCannedFieldsController@create');
  Route::get('admin/ticket-canned-fields/{ticketsCannedField}/edit', 'TicketsCannedFieldsController@edit');
  Route::patch('admin/ticket-canned-fields/{ticketsCannedField}/update', 'TicketsCannedFieldsController@update');
  Route::post('admin/ticket-canned-fields', 'TicketsCannedFieldsController@store');

  Route::post('canned', 'TicketsCannedFieldsController@canned');

  Route::get('admin/storeroom', 'StoreroomsController@index');
  Route::patch('admin/storeroom/update', 'StoreroomsController@update');
});
