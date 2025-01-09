<?php

namespace Documentation\database\seeders;

use App\Models\{Category, Post};
use App\Models\MenuItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // seed some post
        foreach (range(1, 8) as $i) {
            $post = Post::factory()->create([
                'user_id' => 1,
                'image' => 'img0' . $i . '.jpg',
                'featured' => $i<4 ? true : false ,
            ]);
            $category = Category::factory()->create();

            DB::table('category_post')->insert([
                'post_id' => $post->id,
                'category_id' => $category->id
            ]);

        }
        
        
        
        
        
        
        {
            MenuItem::insert([
                ['name' => 'Pizza', 'description' => 'Cheesy and delicious.', 'price' => 10.99],
                ['name' => 'Burger', 'description' => 'Juicy and tasty.', 'price' => 8.99],
                ['name' => 'Pasta', 'description' => 'Rich and creamy.', 'price' => 12.99],
                ['name' => 'Salad', 'description' => 'Fresh and healthy.', 'price' => 7.99],
            ]);
        }
        
        
        
        
    }
    
    
    
    

}
