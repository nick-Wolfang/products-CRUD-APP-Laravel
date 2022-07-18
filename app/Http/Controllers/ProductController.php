<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        return 'home';
    }
    public function getLogin()
    {
        return 'getLogin';
    }
    public function index()
    {
        $produits = [
            [
                'id'=>1,
                'name'=>'Tecno',
                'price'=> 80000,
                'provider' => 'Chinese',
                'model' => 'Tecno Povoir 2'
            ],
            [
                'id'=>2,
                'name'=>'Samsung',
                'price'=> 200000,
                'provider' => 'Korean',
                'model' => 'Tecno Povoir 2'
            ],
            [
                'id' => 3,
                'name' => 'Iphone',
                'price' => 500000,
                'provider' => 'American',
                'model' => 'Tecno Povoir 2'
            ]
            ];
        return view('products.index', 
            ['products' => $produits, 
             'user' => 'Nick'
            ]);
    }
    public function create()
    {
       return view('products.create');
    }
    public function save()
    {
        $newProd = [
            'id' => 0,
            'name' => 'Unknown',
            'price' => 0,
            'provider' => 'Unknown',
            'model' => 'Unknown'
        ];
        $produits = [
            [
                'id'=>1,
                'name'=>'Tecno',
                'price'=> 80000,
                'provider' => 'Chinese',
                'model' => 'Tecno Povoir 2'
            ],
            [
                'id'=>2,
                'name'=>'Samsung',
                'price'=> 200000,
                'provider' => 'Korean',
                'model' => 'Tecno Povoir 2'
            ],
            [
                'id' => 3,
                'name' => 'Iphone',
                'price' => 500000,
                'provider' => 'American',
                'model' => 'Tecno Povoir 2'
            ]
            ];
            $newProd['id'] = $_POST['id'];
            $newProd['name'] = $_POST['nom'];
            $newProd['price'] = $_POST['prix'];
            $newProd['provider'] = $_POST['fournisseur'];
            $newProd['model'] = $_POST['Modele'];

            $produits[] = $newProd;

        return view('products.index', ['products' => $produits, 
                'user' => 'Nick']);
    }
    public function details($id)
    {
        $produits = [
            [
                'id'=>1,
                'name'=>'Tecno',
                'price'=> 80000,
                'provider' => 'Chinese',
                'model' => 'Tecno Povoir 2'
            ],
            [
                'id'=>2,
                'name'=>'Samsung',
                'price'=> 200000,
                'provider' => 'Korean',
                'model' => 'Tecno Povoir 2'
            ],
            [
                'id' => 3,
                'name' => 'Iphone',
                'price' => 500000,
                'provider' => 'American',
                'model' => 'Tecno Povoir 2'
            ]
            ];
            $product = collect($produits)->where('id', $id)->first();


            return view('products.details', [
                'product' => $product
            ]);
    }
    public function update($id)
    {
        $produits = [
            [
                'id' => 1,
                'name' => 'Tecno',
                'price' => 80000,
                'provider' => 'Chinese',
                'model' => 'Tecno Povoir 2'
            ],
            [
                'id' => 2,
                'name' => 'Samsung',
                'price' => 200000,
                'provider' => 'Korean',
                'model' => 'S20'
            ],
            [
                'id' => 3,
                'name' => 'Iphone',
                'price' => 500000,
                'provider' => 'American',
                'model' => '12 pro'
            ]
            ];
            $nbreProduits = count($produits);
            $i = 0;
            while($i < $nbreProduits) {
                if($produits[$i]['id'] == $id) {
                    $produits[$i]['name'] = $_POST['nom'];
                    $produits[$i]['price'] = $_POST['prix'];
                    $produits[$i]['provider'] = $_POST['fournisseur'];
                    $produits[$i]['model'] = $_POST['Modele'];
                    break;
                }
                $i += 1;
            }
        return view('products.index', ['products' => $produits,
            'user' => 'Nick']);
    }
    public function edit($id)
    {
        $produits = [
            [
                'id'=>1,
                'name'=>'Tecno',
                'price'=> 80000,
                'provider' => 'Chinese',
                'model' => 'Tecno Povoir 2'
            ],
            [
                'id'=>2,
                'name'=>'Samsung',
                'price'=> 200000,
                'provider' => 'Korean',
                'model' => 'S20'
            ],
            [
                'id' => 3,
                'name' => 'Iphone',
                'price' => 500000,
                'provider' => 'American',
                'model' => '12 pro'
            ]
            ];
            $product = collect($produits)->where('id', $id)->first();
        return view('products.edit', ['product' => $product]);
    }
    public function destroy($id)
    {
        $produits = [
            [
                'id'=>1,
                'name'=>'Tecno',
                'price'=> 80000,
                'provider' => 'Chinese',
                'model' => 'Tecno Povoir 2'
            ],
            [
                'id'=>2,
                'name'=>'Samsung',
                'price'=> 200000,
                'provider' => 'Korean',
                'model' => 'S20'
            ],
            [
                'id' => 3,
                'name' => 'Iphone',
                'price' => 500000,
                'provider' => 'American',
                'model' => '12 pro'
            ]
            ];
        $nbreProduits = count($produits);
            $i = 0;
            dd($nbreProduits);
            while($i < $nbreProduits) {
                if($produits[$i]['id'] == $id) {
                    unset($produits[$i]);
                    break;
                }
                else {
                    $i += 1;
                }

            }
        return view('products.index', ['products' => $produits,
                'user' => 'Nick']);
    }
    public function removedElementPage()
    {
        return view('products.removedElement');
    }
}
