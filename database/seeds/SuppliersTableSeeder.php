<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Supplier;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suppliers = json_decode(file_get_contents(database_path().'/suppliers.json'), True);

        # Initiate a new timestamp we can use for created_at/updated_at fields
        $timestamp = Carbon::now()->subDays(count($suppliers));

        foreach($suppliers as $supplierId => $supplier) {

            $timestampForThisSupplier = $timestamp->addDay()->toDateTimeString();
            Supplier::insert([
                'created_at' => $timestampForThisSupplier,
                'updated_at' => $timestampForThisSupplier,
                'name' => $supplier['name'],
                'industry' => $supplier['industry'],
                'address' => $supplier['address'],
                'country' => $supplier['country'],
            ]);
        }
    }
}
