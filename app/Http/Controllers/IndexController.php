<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


 

class IndexController extends Controller
{


  public function index(){



    
  }    
  public  $categories=['Phones','Watches','Sport Wear','Other'];

  public  function Store (){

      $products = array(
        (object) [
          'id' => 1,
          'name' => 'iphone 1',
          'price' => 10000
        ],
        (object) [
            'id' => 2,
            'name' => 'iphone 2',
            'price' => 10000
          ],
          (object) [
            'id' => 3,
            'name' => 'iphone 3',
            'price' => 10000
          ],
           (object) [
            'id' => 4,
            'name' => 'iphone 4',
            'price' => 10000
          ],
          (object) [
            'id' => 5,
            'name' => 'Watch 1',
            'price' => 5000
          ], (object) [
            'id' => 6,
            'name' => 'Watch 2',
            'price' => 5000
          ], (object) [
            'id' => 7,
            'name' => 'Watch 3',
            'price' => 5000
          ], (object) [
            'id' => 8,
            'name' => 'Watch 4',
            'price' => 5000
          ], (object) [
            'id' => 9,
            'name' => 'Wear 1',
            'price' => 200
          ], (object) [
            'id' => 10,
            'name' => 'Wear 2',
            'price' => 200
          ], (object) [
            'id' => 11,
            'name' => 'Wear 3',
            'price' => 200
          ], (object) [
            'id' => 12,
            'name' => 'Wear 4',
            'price' => 200
          ]
      );
          return view ('index',['products'=>$products],['categories'=>$this->categories]);
          

    }

 public function prod_details($id){
    $products = array(
        (object) [
          'id' => 1,
          'name' => 'iphone 1',
          'price' => 10000
        ],
        (object) [
            'id' => 2,
            'name' => 'iphone 2',
            'price' => 10000
          ],
          (object) [
            'id' => 3,
            'name' => 'iphone 3',
            'price' => 10000
          ],
           (object) [
            'id' => 4,
            'name' => 'iphone 4',
            'price' => 10000
          ],
          (object) [
            'id' => 5,
            'name' => 'Watch 1',
            'price' => 5000
          ], (object) [
            'id' => 6,
            'name' => 'Watch 2',
            'price' => 5000
          ], (object) [
            'id' => 7,
            'name' => 'Watch 3',
            'price' => 5000
          ], (object) [
            'id' => 8,
            'name' => 'Watch 4',
            'price' => 5000
          ], (object) [
            'id' => 9,
            'name' => 'Wear 1',
            'price' => 200
          ], (object) [
            'id' => 10,
            'name' => 'Wear 2',
            'price' => 200
          ], (object) [
            'id' => 11,
            'name' => 'Wear 3',
            'price' => 200
          ], (object) [
            'id' => 12,
            'name' => 'Wear 4',
            'price' => 200
          ]
      );

    foreach ($products as $obj ) {
        if ($obj->id==$id) {
            $product = $obj;
        }
      

    }
    return view('ProductDetails',['product'=>$product]);
 }
  

 public   function Phones(){
    $products = array(
        (object) [
          'id' => 1,
          'name' => 'iphone 1',
          'price' => 10000
        ],
        (object) [
            'id' => 2,
            'name' => 'iphone 2',
            'price' => 10000
          ],
          (object) [
            'id' => 3,
            'name' => 'iphone 3',
            'price' => 10000
          ],
           (object) [
            'id' => 4,
            'name' => 'iphone 4',
            'price' => 10000
          ],
          (object) [
            'id' => 5,
            'name' => 'Watch 1',
            'price' => 5000
          ], (object) [
            'id' => 6,
            'name' => 'Watch 2',
            'price' => 5000
          ], (object) [
            'id' => 7,
            'name' => 'Watch 3',
            'price' => 5000
          ], (object) [
            'id' => 8,
            'name' => 'Watch 4',
            'price' => 5000
          ], (object) [
            'id' => 9,
            'name' => 'Wear 1',
            'price' => 200
          ], (object) [
            'id' => 10,
            'name' => 'Wear 2',
            'price' => 200
          ], (object) [
            'id' => 11,
            'name' => 'Wear 3',
            'price' => 200
          ], (object) [
            'id' => 12,
            'name' => 'Wear 4',
            'price' => 200
          ]
      );
        $phones= array_slice($products, 0, 4) ;
        
        return view('ProductList',['products'=>$phones],['categories'=>$this->categories]);
     }


     public  function Watches(){
        $products = array(
            (object) [
              'id' => 1,
              'name' => 'iphone 1',
              'price' => 10000
            ],
            (object) [
                'id' => 2,
                'name' => 'iphone 2',
                'price' => 10000
              ],
              (object) [
                'id' => 3,
                'name' => 'iphone 3',
                'price' => 10000
              ],
               (object) [
                'id' => 4,
                'name' => 'iphone 4',
                'price' => 10000
              ],
              (object) [
                'id' => 5,
                'name' => 'Watch 1',
                'price' => 5000
              ], (object) [
                'id' => 6,
                'name' => 'Watch 2',
                'price' => 5000
              ], (object) [
                'id' => 7,
                'name' => 'Watch 3',
                'price' => 5000
              ], (object) [
                'id' => 8,
                'name' => 'Watch 4',
                'price' => 5000
              ], (object) [
                'id' => 9,
                'name' => 'Wear 1',
                'price' => 200
              ], (object) [
                'id' => 10,
                'name' => 'Wear 2',
                'price' => 200
              ], (object) [
                'id' => 11,
                'name' => 'Wear 3',
                'price' => 200
              ], (object) [
                'id' => 12,
                'name' => 'Wear 4',
                'price' => 200
              ]
          );
            $watches= array_slice($products, 4, 4) ;
            return view('ProductList',['products'=>$watches],['categories'=>$this->categories]);
         }

         public    function SportWear(){
            $products = array(
                (object) [
                  'id' => 1,
                  'name' => 'iphone 1',
                  'price' => 10000
                ],
                (object) [
                    'id' => 2,
                    'name' => 'iphone 2',
                    'price' => 10000
                  ],
                  (object) [
                    'id' => 3,
                    'name' => 'iphone 3',
                    'price' => 10000
                  ],
                   (object) [
                    'id' => 4,
                    'name' => 'iphone 4',
                    'price' => 10000
                  ],
                  (object) [
                    'id' => 5,
                    'name' => 'Watch 1',
                    'price' => 5000
                  ], (object) [
                    'id' => 6,
                    'name' => 'Watch 2',
                    'price' => 5000
                  ], (object) [
                    'id' => 7,
                    'name' => 'Watch 3',
                    'price' => 5000
                  ], (object) [
                    'id' => 8,
                    'name' => 'Watch 4',
                    'price' => 5000
                  ], (object) [
                    'id' => 9,
                    'name' => 'Wear 1',
                    'price' => 200
                  ], (object) [
                    'id' => 10,
                    'name' => 'Wear 2',
                    'price' => 200
                  ], (object) [
                    'id' => 11,
                    'name' => 'Wear 3',
                    'price' => 200
                  ], (object) [
                    'id' => 12,
                    'name' => 'Wear 4',
                    'price' => 200
                  ]
              );
                $SportWear= array_slice($products, 8, 12) ;
                return view('ProductList',['products'=>$SportWear],['categories'=>$this->categories]);
      
             }


}
