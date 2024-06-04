<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function showItems()
    {
        $items = [
            ['name' => 'Item1', 'image' => 'shop-item-graduation.jpeg'],
            ['name' => 'Item2', 'image' => 'shop-item-balloons.jpeg'],
            ['name' => 'Item3', 'image' => 'shop-item-balloons1.jpeg'],
            ['name' => 'Item4', 'image' => 'shop-item-flowers.jpeg'],
            ['name' => 'Item5', 'image' => 'shop-item-flowers1.jpeg'],
            ['name' => 'Item6', 'image' => 'shop-item-birthday.jpeg'],
            ['name' => 'Item7', 'image' => 'shop-item-birthday1.jpeg'],
            ['name' => 'Item8', 'image' => 'shop-item-sparkling3.jpeg'],
            ['name' => 'Item9', 'image' => 'shop-item-sparkling2.jpeg'],
            ['name' => 'Item10', 'image' => 'shop-item-christmas.jpeg'],
        ];
        return view('dashboard', compact('items'));
    }

    public function index(Request $request)
    {
        $products = [
            ['name' => 'Izlaidums', 'id' => '101', 'image' => 'shop-item-graduation.jpeg', 'price' => '50-70', 'size' => '2m ⌀', 'count' => '-', 'color' => 'Melns, zelts', 'filter' => 'graduation'],
            ['name' => 'Puķu Zona', 'id' => '201', 'image' => 'shop-item-flowers.jpeg', 'price' => '150', 'size' => '200x240cm', 'count' => '-', 'color' => 'Roza', 'filter' => 'graduation, flowers, birthday, wedding'],
            ['name' => 'Puķu Zona', 'id' => '202', 'image' => 'shop-item-flowers1.jpeg', 'price' => '150', 'size' => '200x240cm', 'count' => '-', 'color' => 'Spilgti roza', 'filter' => 'graduation, flowers, birthday, wedding'],
            ['name' => 'Puķu Zona', 'id' => '203', 'image' => 'shop-item-flowers2.jpeg', 'price' => '150', 'size' => '200x240cm', 'count' => '-', 'color' => 'Balts', 'filter' => 'graduation, flowers, birthday, wedding'],
            ['name' => 'Mirdzoša zona', 'id' => '301', 'image' => 'shop-item-sparkling.jpeg', 'price' => '120-180', 'size' => '210x240(300)cm', 'count' => '-', 'color' => 'Roza', 'filter' => 'graduation, sparkling, birthday, balloons'],
            ['name' => 'Mirdzoša zona', 'id' => '302', 'image' => 'shop-item-sparkling1.jpeg', 'price' => '120-180', 'size' => '210x240(300)cm', 'count' => '-', 'color' => 'Melns, zelts', 'filter' => 'graduation, sparkling, birthday, ballosns'],
            ['name' => 'Mirdzoša zona', 'id' => '303', 'image' => 'shop-item-sparkling2.jpeg', 'price' => '120-180', 'size' => '210x240(300)cm', 'count' => '-', 'color' => 'Melns', 'filter' => 'graduation, sparkling, birthday, balloons'],
            ['name' => 'Mirdzoša zona', 'id' => '304', 'image' => 'shop-item-sparkling3.jpeg', 'price' => '120-180', 'size' => '210x240(300)cm', 'count' => '-', 'color' => 'Zelts', 'filter' => 'graduation, sparkling, birthday, balloons'],
            ['name' => 'Baloni', 'id' => '401', 'image' => 'shop-item-balloons.jpeg', 'price' => '70-100', 'size' => '-', 'count' => '120', 'color' => 'Balts, zils, peleks', 'filter' => 'sparkling, balloons, birthday'],
            ['name' => 'Baloni', 'id' => '402', 'image' => 'shop-item-balloons1.jpeg', 'price' => '70-100', 'size' => '-', 'count' => '92', 'color' => 'Melns, zelts', 'filter' => 'sparkling, balloons, birthday'],
            ['name' => 'Baloni', 'id' => '403', 'image' => 'shop-item-balloons2.jpeg', 'price' => '70-100', 'size' => '-', 'count' => '120', 'color' => 'Zils, balts', 'filter' => 'sparkling, balloons, birthday'],
            ['name' => 'Baloni', 'id' => '404', 'image' => 'shop-item-balloons3.jpeg', 'price' => '70-100', 'size' => '-', 'count' => '159', 'color' => 'Balts, zelts', 'filter' => 'sparkling, balloons, birthday'],
            ['name' => 'Baloni', 'id' => '405', 'image' => 'shop-item-balloons4.jpeg', 'price' => '70-100', 'size' => '-', 'count' => '120', 'color' => 'Zils, balts', 'filter' => 'sparkling, balloons, birthday'],
            ['name' => 'Dzimšanas diena', 'id' => '501', 'image' => 'shop-item-birthday.jpeg', 'price' => '50-70', 'size' => '2m ⌀', 'count' => '-', 'color' => 'Balts, zils, dzeltens', 'filter' => 'flowers, birthday, balloons, sparkling'],
            ['name' => 'Dzimšanas diena', 'id' => '502', 'image' => 'shop-item-birthday1.jpeg', 'price' => '50-70', 'size' => '2m ⌀', 'count' => '-', 'color' => 'Melns, bronza', 'filter' => 'flowers, birthday, balloons, sparkling'],
            ['name' => 'Ziemassvētki', 'id' => '601', 'image' => 'shop-item-christmas.jpeg', 'price' => '70', 'size' => '200x300cm', 'count' => '-', 'color' => 'Roza, zaļš, balts', 'filter' => 'christmas'],
            ['name' => 'Ziemassvētki', 'id' => '602', 'image' => 'shop-item-christmas1.jpeg', 'price' => '70', 'size' => '200x300cm', 'count' => '-', 'color' => 'Brūns, zils, sarkans, zaļš', 'filter' => 'christmas'],
            ['name' => 'Ziemassvētki', 'id' => '603', 'image' => 'shop-item-christmas2.jpeg', 'price' => '70', 'size' => '200x300cm', 'count' => '-', 'color' => 'Melns, bronza', 'filter' => 'christmas'],
            ['name' => 'Ziemassvētki', 'id' => '604', 'image' => 'shop-item-christmas3.jpeg', 'price' => '70', 'size' => '200x300cm', 'count' => '-', 'color' => 'Melns, bronza', 'filter' => 'christmas'],
            ['name' => 'Ziemassvētki', 'id' => '605', 'image' => 'shop-item-christmas4.jpeg', 'price' => '70', 'size' => '200x300cm', 'count' => '-', 'color' => 'Melns, bronza', 'filter' => 'christmas'],
            ['name' => 'Ziemassvētki', 'id' => '606', 'image' => 'shop-item-christmas5.jpeg', 'price' => '70', 'size' => '200x300cm', 'count' => '-', 'color' => 'Melns, bronza', 'filter' => 'christmas'],
            ['name' => 'Ziemassvētki', 'id' => '607', 'image' => 'shop-item-christmas6.jpeg', 'price' => '70', 'size' => '200x300cm', 'count' => '-', 'color' => 'Melns, bronza', 'filter' => 'christmas'],
            ['name' => 'Ziemassvētki', 'id' => '608', 'image' => 'shop-item-christmas7.jpeg', 'price' => '70', 'size' => '200x300cm', 'count' => '-', 'color' => 'Melns, bronza', 'filter' => 'christmas'],
            ['name' => 'Ziemassvētki', 'id' => '609', 'image' => 'shop-item-christmas8.jpeg', 'price' => '70', 'size' => '200x300cm', 'count' => '-', 'color' => 'Melns, bronza', 'filter' => 'christmas'],
            ['name' => 'Ziemassvētki', 'id' => '610', 'image' => 'shop-item-christmas9.jpeg', 'price' => '70', 'size' => '200x300cm', 'count' => '-', 'color' => 'Melns, bronza', 'filter' => 'christmas'],
            ['name' => 'Ziemassvētki', 'id' => '611', 'image' => 'shop-item-christmas10.jpeg', 'price' => '70', 'size' => '200x300cm', 'count' => '-', 'color' => 'Melns, bronza', 'filter' => 'christmas'],
            ['name' => 'Kāzas', 'id' => '701', 'image' => 'shop-item-wedding.jpeg', 'price' => '150', 'size' => '200x200cm', 'count' => '-', 'color' => 'Balts + puķes', 'filter' => 'wedding, flowers'],
            ['name' => 'Kāzas', 'id' => '702', 'image' => 'shop-item-wedding1.jpeg', 'price' => '150', 'size' => '200x200cm', 'count' => '-', 'color' => 'Balts + puķes', 'filter' => 'wedding, flowers'],
            ['name' => 'Gender Party', 'id' => '801', 'image' => 'shop-item-gender.jpeg', 'price' => '50-70', 'size' => '250x180cm', 'count' => '-', 'color' => '', 'filter' => 'kids'],
        ];

        $filter = $request->input('filter');

        if ($filter) {
            $products = array_filter($products, function ($product) use ($filter) {
                return in_array($filter, explode(', ', $product['filter']));
            });
        }

        return view('shop', ['products' => $products, 'filter' => $filter]);
    }

    // public function filter(Request $request)
    // {
    //     $filter = $request->input('filter', null); // Получить фильтр из запроса

    //     // Базовый запрос для получения всех продуктов
    //     $query = Product::query();

    //     // Если установлен фильтр, добавить условие к запросу
    //     if ($filter) {
    //         $query->where('category', $filter);
    //     }

    //     // Получить продукты из базы данных
    //     $products = $query->get();

    //     return view('products.index', compact('products', 'filter'));
    // }
}

