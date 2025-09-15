<?php

use App\Models\Customer;
use function Pest\Livewire\livewire;
use App\Filament\Resources\Customers\Pages\ListCustomers;


it('can sort customers by name', function () {
    $customers = Customer::factory()->createMany([
        ['name' => 'kand. Emma Groen B'],
        ['name' => 'Lily Zum Vörde Sive Vörding'],
        ['name' => 'Lily Güler AD'],
    ]);

    livewire(ListCustomers::class)
        ->assertCanSeeTableRecords($customers)
        ->sortTable('name')
        ->assertCanSeeTableRecords($customers->sortBy('name'), inOrder: true)
        ->sortTable('name', 'desc')
        ->assertCanSeeTableRecords($customers->sortByDesc('name'), inOrder: true);
});
