<?php

use Illuminate\Database\Seeder;

class CateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
            DB::table('categorys')->insert([
               ["cate_name"=>"Giày xăng đan",
               "cate_thumbnail"=>json_encode(["xd1.png","xd2.png"]),
               "cate_slug"=>"Giày xăng đan",
               "cate_parent"=>0,
               'created_at' => new DateTime,
                 'updated_at' => new DateTime,
            ],
            ["cate_name"=>"Giày búp bê",
               "cate_thumbnail"=>json_encode(["bb1.png","bb2.png"]),
               "cate_slug"=>"Giày búp bê",
               "cate_parent"=>0,
               'created_at' => new DateTime,
                 'updated_at' => new DateTime,
            ],
            ["cate_name"=>"Giày cao gót",
               "cate_thumbnail"=>json_encode(["cg1.png","cg2.png"]),
               "cate_slug"=>"Giày cao gót",
               "cate_parent"=>0,
               'created_at' => new DateTime,
                 'updated_at' => new DateTime,
            ],
            ["cate_name"=>"Giày Sneaker",
               "cate_thumbnail"=>json_encode(["sne1.png","sne2.png"]),
               "cate_slug"=>"Giày Sneaker",
               "cate_parent"=>0,
               'created_at' => new DateTime,
                 'updated_at' => new DateTime,
            ],
            ["cate_name"=>"Túi xách",
            "cate_thumbnail"=>json_encode(["tx1.png","tx2.png"]),
            "cate_slug"=>"Túi xách",
            "cate_parent"=>0,
            'created_at' => new DateTime,
              'updated_at' => new DateTime,
         ],
         ["cate_name"=>"Dép guốc",
         "cate_thumbnail"=>json_encode(["dg1.png","dg2.png"]),
         "cate_slug"=>"Dép guốc",
         "cate_parent"=>0,
         'created_at' => new DateTime,
           'updated_at' => new DateTime,
      ],
            ]);
        
    }
}
