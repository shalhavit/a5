<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Store;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stores = json_decode(file_get_contents(database_path().'/stores.json'), True);

        $timestamp = Carbon::now()->subDays(count($stores));

        foreach($stores as $storeId => $store) {

            $timestampForThisStore = $timestamp->addDay()->toDateTimeString();

            Store::insert([
                'code'       => $store['code'],
                'address'    => $store['address'],
                'country'    => $store['country'],
                'created_at' => $timestampForThisStore,
                'updated_at' => $timestampForThisStore,
            ]);
        }
    }
}
