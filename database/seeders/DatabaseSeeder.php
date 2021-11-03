<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        
        // User::create([
        //     'name'=>'Albert',
        //     'email'=>'tan.albert53@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);

        // User::create([
        //     'name'=>'Budi',
        //     'email'=>'tan.budi@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming',
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal',
        ]);

        Category::create([
            'name'=>'Web design',
            'slug'=>'web-design',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title'=>'Judul pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut autem nec',
        //     'body'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut autem necessitatibus ab aspernatur accusantium optio. Vero facere explicabo dolores autem, nobis exercitationem provident vel enim harum perspiciatis ab ad! Tempora voluptatibus, in, iste reiciendis voluptatem aperiam iure debitis esse at ad ipsam neque delectus veritatis sint a voluptas rem sed quaerat fuga? Similique, suscipit est! Iusto nulla maxime, fugit fugiat doloribus quo nemo veniam sapiente. Odit, cupiditate minima culpa dolorem labore unde consequuntur laboriosam illum reiciendis et dignissimos iure assumenda temporibus. Ut inventore aperiam ratione aspernatur voluptatibus consequatur, dignissimos atque nostrum nam rem deleniti voluptates, exercitationem ipsa tempore mollitia quaerat!',
        //     'category_id'=>1,
        //     'user_id'=>1

        // ]);

        // Post::create([
        //     'title'=>'Judul kedua',
        //     'slug'=>'judul-kedua',
        //     'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut autem nec',
        //     'body'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut autem necessitatibus ab aspernatur accusantium optio. Vero facere explicabo dolores autem, nobis exercitationem provident vel enim harum perspiciatis ab ad! Tempora voluptatibus, in, iste reiciendis voluptatem aperiam iure debitis esse at ad ipsam neque delectus veritatis sint a voluptas rem sed quaerat fuga? Similique, suscipit est! Iusto nulla maxime, fugit fugiat doloribus quo nemo veniam sapiente. Odit, cupiditate minima culpa dolorem labore unde consequuntur laboriosam illum reiciendis et dignissimos iure assumenda temporibus. Ut inventore aperiam ratione aspernatur voluptatibus consequatur, dignissimos atque nostrum nam rem deleniti voluptates, exercitationem ipsa tempore mollitia quaerat!',
        //     'category_id'=>1,
        //     'user_id'=>1

        // ]);

        // Post::create([
        //     'title'=>'Judul ketiga',
        //     'slug'=>'judul-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut autem nec',
        //     'body'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut autem necessitatibus ab aspernatur accusantium optio. Vero facere explicabo dolores autem, nobis exercitationem provident vel enim harum perspiciatis ab ad! Tempora voluptatibus, in, iste reiciendis voluptatem aperiam iure debitis esse at ad ipsam neque delectus veritatis sint a voluptas rem sed quaerat fuga? Similique, suscipit est! Iusto nulla maxime, fugit fugiat doloribus quo nemo veniam sapiente. Odit, cupiditate minima culpa dolorem labore unde consequuntur laboriosam illum reiciendis et dignissimos iure assumenda temporibus. Ut inventore aperiam ratione aspernatur voluptatibus consequatur, dignissimos atque nostrum nam rem deleniti voluptates, exercitationem ipsa tempore mollitia quaerat!',
        //     'category_id'=>2,
        //     'user_id'=>1

        // ]);
       
        // Post::create([
        //     'title'=>'Judul keempat',
        //     'slug'=>'judul-keempat',
        //     'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut autem nec',
        //     'body'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut autem necessitatibus ab aspernatur accusantium optio. Vero facere explicabo dolores autem, nobis exercitationem provident vel enim harum perspiciatis ab ad! Tempora voluptatibus, in, iste reiciendis voluptatem aperiam iure debitis esse at ad ipsam neque delectus veritatis sint a voluptas rem sed quaerat fuga? Similique, suscipit est! Iusto nulla maxime, fugit fugiat doloribus quo nemo veniam sapiente. Odit, cupiditate minima culpa dolorem labore unde consequuntur laboriosam illum reiciendis et dignissimos iure assumenda temporibus. Ut inventore aperiam ratione aspernatur voluptatibus consequatur, dignissimos atque nostrum nam rem deleniti voluptates, exercitationem ipsa tempore mollitia quaerat!',
        //     'category_id'=>2,
        //     'user_id'=>2

        // ]);

    }
}
