<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //User::create([
        //    'name' => 'Nasifa Ahda',
        //    'email' => 'syifaaaa330@gmail.com',
        //    'password' => bcrypt('12345')
        //]);

        //User::create([
        //    'name' => 'Rafi Sanjaya',
        //    'email' => 'sanjayae@gmail.com',
        //    'password' => bcrypt('12345')
        //]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        //Post::create([
        //    'title' => 'Judul Pertama',
        //    'slug' => 'judul-pertama',
        //    'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab error autem, ullam doloremque facilis sint iste minus distinctio officiis!',
        //    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab error autem, ullam doloremque facilis sint iste minus distinctio officiis! Omnis mollitia dolor, hic laudantium minus sed sunt autem dicta perferendis error delectus quam sapiente ad, eligendi fugit, aperiam impedit! Quos ad perspiciatis quae, rem non tempora consequuntur maxime. Porro eos voluptatem optio, explicabo culpa voluptatum laborum debitis nobis. Ducimus sint laudantium, pariatur saepe quos laborum ipsam deleniti voluptatem. Ad expedita nostrum ipsa excepturi consequuntur, ea laudantium impedit praesentium quas unde distinctio illo numquam labore. Voluptas nemo impedit explicabo aut alias aperiam? Qui molestiae non architecto modi ex ullam porro repellat!',
        //    'category_id' => 1,
        //    'user_id' => 1
        //]);

        //Post::create([
        //    'title' => 'Judul Ke Dua',
        //    'slug' => 'judul-ke-dua',
        //    'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab error autem, ullam doloremque facilis sint iste minus distinctio officiis!',
        //    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab error autem, ullam doloremque facilis sint iste minus distinctio officiis! Omnis mollitia dolor, hic laudantium minus sed sunt autem dicta perferendis error delectus quam sapiente ad, eligendi fugit, aperiam impedit! Quos ad perspiciatis quae, rem non tempora consequuntur maxime. Porro eos voluptatem optio, explicabo culpa voluptatum laborum debitis nobis. Ducimus sint laudantium, pariatur saepe quos laborum ipsam deleniti voluptatem. Ad expedita nostrum ipsa excepturi consequuntur, ea laudantium impedit praesentium quas unde distinctio illo numquam labore. Voluptas nemo impedit explicabo aut alias aperiam? Qui molestiae non architecto modi ex ullam porro repellat!',
        //    'category_id' => 1,
        //    'user_id' => 1
        //]);

        //Post::create([
        //    'title' => 'Judul Ke Tiga',
        //    'slug' => 'judul-ke-tiga',
        //    'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab error autem, ullam doloremque facilis sint iste minus distinctio officiis!',
        //    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab error autem, ullam doloremque facilis sint iste minus distinctio officiis! Omnis mollitia dolor, hic laudantium minus sed sunt autem dicta perferendis error delectus quam sapiente ad, eligendi fugit, aperiam impedit! Quos ad perspiciatis quae, rem non tempora consequuntur maxime. Porro eos voluptatem optio, explicabo culpa voluptatum laborum debitis nobis. Ducimus sint laudantium, pariatur saepe quos laborum ipsam deleniti voluptatem. Ad expedita nostrum ipsa excepturi consequuntur, ea laudantium impedit praesentium quas unde distinctio illo numquam labore. Voluptas nemo impedit explicabo aut alias aperiam? Qui molestiae non architecto modi ex ullam porro repellat!',
        //    'category_id' => 2,
        //    'user_id' => 1
        //]);

        //Post::create([
        //    'title' => 'Judul Ke Empat',
        //    'slug' => 'judul-ke-empat',
        //    'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab error autem, ullam doloremque facilis sint iste minus distinctio officiis!',
        //    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab error autem, ullam doloremque facilis sint iste minus distinctio officiis! Omnis mollitia dolor, hic laudantium minus sed sunt autem dicta perferendis error delectus quam sapiente ad, eligendi fugit, aperiam impedit! Quos ad perspiciatis quae, rem non tempora consequuntur maxime. Porro eos voluptatem optio, explicabo culpa voluptatum laborum debitis nobis. Ducimus sint laudantium, pariatur saepe quos laborum ipsam deleniti voluptatem. Ad expedita nostrum ipsa excepturi consequuntur, ea laudantium impedit praesentium quas unde distinctio illo numquam labore. Voluptas nemo impedit explicabo aut alias aperiam? Qui molestiae non architecto modi ex ullam porro repellat!',
        //    'category_id' => 2,
        //    'user_id' => 2
        //]);

    }
}
