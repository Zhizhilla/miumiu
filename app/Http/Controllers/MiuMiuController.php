<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiuMiuController extends Controller
{
    public function campaign()
    {
        return view('miumiu.campaign');
    }

    public function show($id)
    {
        // Data Produk Dinamis Sesuai ID (Ditambahkan ID #5: handbag.jpg)
        $products = [
            1 => [
                'id' => 1,
                'name' => 'Leather Top-Handle Bag',
                'price' => '$ 2,900',
                'category' => 'handbags',
                'image' => 'bag.jpg',
                'description' => 'Crafted with signature nappa leather featuring the iconic embossed Miu Miu logo. Designed for sophisticated daily elegance.'
            ],
            2 => [
                'id' => 2,
                'name' => 'Patent Leather Slingback Pumps',
                'price' => '$ 1,250',
                'category' => 'shoes',
                'image' => 'high heels.jpg',
                'description' => 'Sophisticated Patent Leather Slingback Pumps featuring elegant straps and iconic Miu Miu craftsmanship.'
            ],
            3 => [
                'id' => 3,
                'name' => 'Embroidered Cotton Dress',
                'price' => '$ 3,400',
                'category' => 'dresses',
                'image' => 'dress.jpg',
                'description' => 'Delicate embroidery combined with tailored precision. Expressive designs tailored for contemporary elegance.'
            ],
            4 => [
                'id' => 4,
                'name' => 'Classic Leather Loafers',
                'price' => '$ 1,180',
                'category' => 'shoes',
                'image' => 'shoes.jpg',
                'description' => 'Reinterpreting classic silhouettes with modern proportions, fine leather craftsmanship, and uninhibited attitude.'
            ],
            5 => [
                'id' => 5,
                'name' => 'Leather Bowling Handbag',
                'price' => '$ 3,100',
                'category' => 'handbags',
                'image' => 'handbag.jpg',
                'description' => 'Iconic vintage-inspired silhouette in rich brown leather, accented with polished gold hardware and gold embossed Miu Miu lettering.'
            ],
        ];

        // Ambil produk berdasarkan ID, kalau tidak ada default ke ID 1
        $product = $products[$id] ?? $products[1];

        return view('miumiu.detail', compact('product'));
    }

    public function index() { return view('admin.index'); }
    public function create() {}
    public function store(Request $request) {}
    public function edit($id) {}
    public function update(Request $request, $id) {}
    public function destroy($id) {}
}