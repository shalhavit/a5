<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Store;

class ProductStoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            'MLB745492667' => ['Prince', 'Ramblewood', 'Theatre', 'Arch', 'Central', 'Beacon', 'Addison', 'Arnold', 'Sunnyslope'],
            'MLB715368636' => ['Prince', 'Ramblewood', 'Theatre', 'Arch', 'Central', 'Beacon', 'Addison', 'Arnold', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB766610032' => ['Prince', 'Ramblewood', 'Theatre', 'Arch', 'Central', 'Beacon', 'Addison', 'Sunnyslope', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB730692107' => ['Prince', 'Ramblewood', 'Theatre', 'Arch', 'Central', 'Beacon', 'Arnold', 'Sunnyslope', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB779807469' => ['Prince', 'Ramblewood', 'Theatre', 'Arch', 'Central', 'Addison', 'Arnold', 'Sunnyslope', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB692639517' => ['Prince', 'Ramblewood', 'Theatre', 'Arch', 'Beacon', 'Addison', 'Arnold', 'Sunnyslope', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB693789740' => ['Prince', 'Ramblewood', 'Theatre', 'Central', 'Beacon', 'Addison', 'Arnold', 'Sunnyslope', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB729467275' => ['Prince', 'Ramblewood', 'Arch', 'Central', 'Beacon', 'Addison', 'Arnold', 'Sunnyslope', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB702240801' => ['Prince', 'Theatre', 'Arch', 'Central', 'Beacon', 'Addison', 'Arnold', 'Sunnyslope', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB683514949' => ['Ramblewood', 'Theatre', 'Arch', 'Central', 'Beacon', 'Addison', 'Arnold', 'Sunnyslope', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB682162059' => ['Prince', 'Theatre', 'Arch', 'Central', 'Beacon', 'Addison', 'Arnold', 'Sunnyslope', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB706657627' => ['Prince', 'Ramblewood', 'Arch', 'Central', 'Beacon', 'Addison', 'Arnold', 'Sunnyslope', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB744358565' => ['Prince', 'Ramblewood', 'Theatre', 'Central', 'Beacon', 'Addison', 'Arnold', 'Sunnyslope', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB695553122' => ['Prince', 'Ramblewood', 'Theatre', 'Arch', 'Beacon', 'Addison', 'Arnold', 'Sunnyslope', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB761872754' => ['Prince', 'Ramblewood', 'Theatre', 'Arch', 'Central', 'Addison', 'Arnold', 'Sunnyslope', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB753759929' => ['Prince', 'Ramblewood', 'Theatre', 'Arch', 'Central', 'Beacon', 'Arnold', 'Sunnyslope', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB730391628' => ['Prince', 'Ramblewood', 'Theatre', 'Arch', 'Central', 'Beacon', 'Addison', 'Sunnyslope', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB760674765' => ['Prince', 'Ramblewood', 'Theatre', 'Arch', 'Central', 'Beacon', 'Addison', 'Arnold', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB753535111' => ['Prince', 'Ramblewood', 'Theatre', 'Arch', 'Central', 'Beacon', 'Addison', 'Arnold', 'Sunnyslope', 'Tailwater', 'Thatcher'],
            'MLB729218311' => ['Prince', 'Ramblewood', 'Theatre', 'Arch', 'Central', 'Beacon', 'Addison', 'Arnold', 'Sunnyslope', 'Canal', 'Thatcher'],
            'MLB729712312' => ['Theatre', 'Arch', 'Central', 'Beacon', 'Addison', 'Arnold', 'Sunnyslope', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB795270644' => ['Prince', 'Ramblewood', 'Central', 'Beacon', 'Addison', 'Arnold', 'Sunnyslope', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB752410290' => ['Prince', 'Ramblewood', 'Theatre', 'Arch', 'Addison', 'Arnold', 'Sunnyslope', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB688984049' => ['Prince', 'Ramblewood', 'Theatre', 'Arch', 'Central', 'Beacon', 'Sunnyslope', 'Canal', 'Tailwater', 'Thatcher'],
            'MLB780697998' => ['Prince', 'Ramblewood', 'Theatre', 'Arch', 'Central', 'Beacon', 'Addison', 'Arnold', 'Tailwater', 'Thatcher'],
        ];

        foreach($products as $sku => $stores) {

            $product = Product::where('sku','like',$sku)->first();

            foreach($stores as $code) {
                $store = Store::where('code','LIKE',$code)->first();
                $product->stores()->save($store);
            }
        }
    }
}
