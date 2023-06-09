<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Intan Supini',
            'username' => 'intans',
            'email' => 'intansupini@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Asahi Hamada',
        //     'email' => 'asahi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Prorgramming',
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

        // Post::create([
        //     'title' => 'First Title',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'first-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet first',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem exercitationem distinctio hic facere suscipit saepe dolores perferendis. Porro eum esse facilis aut? Molestias omnis placeat temporibus, necessitatibus ab doloremque quia reprehenderit obcaecati, itaque voluptas laudantium tempora ad nam adipisci id qui odit soluta cum! Vel deleniti nisi, libero repellat ipsa, fugiat quidem, doloribus ipsam tempore a maxime velit illo? Necessitatibus veritatis libero totam exercitationem excepturi et dolorem corrupti ratione neque obcaecati, inventore beatae non tempora dignissimos quasi mollitia sunt repellat quibusdam magnam voluptatem? Laudantium aliquid eaque magni officiis, voluptatum nesciunt possimus laboriosam ratione ullam suscipit quibusdam aut quo non rerum!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt unde iure tempore, explicabo deserunt repudiandae adipisci natus voluptas voluptatum veniam quidem sint magni vitae earum debitis sed exercitationem labore laudantium quasi quae? Expedita totam sapiente qui voluptates, eum obcaecati porro alias recusandae, veritatis eligendi odit nam? Sunt odit sit nemo explicabo maxime eos odio libero rerum excepturi itaque, exercitationem ea quod fuga amet. Velit dignissimos hic ipsam vel voluptatibus pariatur exercitationem quae laboriosam minus nihil reprehenderit, ducimus veniam dolor voluptas neque. Sint aperiam hic voluptates perferendis eius esse excepturi consequatur porro odio doloremque ipsum voluptas ex velit cumque quod repellat harum sed dolorem optio incidunt, cupiditate omnis rem obcaecati. Officia, fuga voluptatum. Itaque voluptatum nemo, libero excepturi, perspiciatis vel unde omnis minus consectetur temporibus ullam.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Second Title',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'second-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet second',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem exercitationem distinctio hic facere suscipit saepe dolores perferendis. Porro eum esse facilis aut? Molestias omnis placeat temporibus, necessitatibus ab doloremque quia reprehenderit obcaecati, itaque voluptas laudantium tempora ad nam adipisci id qui odit soluta cum! Vel deleniti nisi, libero repellat ipsa, fugiat quidem, doloribus ipsam tempore a maxime velit illo? Necessitatibus veritatis libero totam exercitationem excepturi et dolorem corrupti ratione neque obcaecati, inventore beatae non tempora dignissimos quasi mollitia sunt repellat quibusdam magnam voluptatem? Laudantium aliquid eaque magni officiis, voluptatum nesciunt possimus laboriosam ratione ullam suscipit quibusdam aut quo non rerum!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt unde iure tempore, explicabo deserunt repudiandae adipisci natus voluptas voluptatum veniam quidem sint magni vitae earum debitis sed exercitationem labore laudantium quasi quae? Expedita totam sapiente qui voluptates, eum obcaecati porro alias recusandae, veritatis eligendi odit nam? Sunt odit sit nemo explicabo maxime eos odio libero rerum excepturi itaque, exercitationem ea quod fuga amet. Velit dignissimos hic ipsam vel voluptatibus pariatur exercitationem quae laboriosam minus nihil reprehenderit, ducimus veniam dolor voluptas neque. Sint aperiam hic voluptates perferendis eius esse excepturi consequatur porro odio doloremque ipsum voluptas ex velit cumque quod repellat harum sed dolorem optio incidunt, cupiditate omnis rem obcaecati. Officia, fuga voluptatum. Itaque voluptatum nemo, libero excepturi, perspiciatis vel unde omnis minus consectetur temporibus ullam.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Third Title',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'third-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet third',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem exercitationem distinctio hic facere suscipit saepe dolores perferendis. Porro eum esse facilis aut? Molestias omnis placeat temporibus, necessitatibus ab doloremque quia reprehenderit obcaecati, itaque voluptas laudantium tempora ad nam adipisci id qui odit soluta cum! Vel deleniti nisi, libero repellat ipsa, fugiat quidem, doloribus ipsam tempore a maxime velit illo? Necessitatibus veritatis libero totam exercitationem excepturi et dolorem corrupti ratione neque obcaecati, inventore beatae non tempora dignissimos quasi mollitia sunt repellat quibusdam magnam voluptatem? Laudantium aliquid eaque magni officiis, voluptatum nesciunt possimus laboriosam ratione ullam suscipit quibusdam aut quo non rerum!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt unde iure tempore, explicabo deserunt repudiandae adipisci natus voluptas voluptatum veniam quidem sint magni vitae earum debitis sed exercitationem labore laudantium quasi quae? Expedita totam sapiente qui voluptates, eum obcaecati porro alias recusandae, veritatis eligendi odit nam? Sunt odit sit nemo explicabo maxime eos odio libero rerum excepturi itaque, exercitationem ea quod fuga amet. Velit dignissimos hic ipsam vel voluptatibus pariatur exercitationem quae laboriosam minus nihil reprehenderit, ducimus veniam dolor voluptas neque. Sint aperiam hic voluptates perferendis eius esse excepturi consequatur porro odio doloremque ipsum voluptas ex velit cumque quod repellat harum sed dolorem optio incidunt, cupiditate omnis rem obcaecati. Officia, fuga voluptatum. Itaque voluptatum nemo, libero excepturi, perspiciatis vel unde omnis minus consectetur temporibus ullam.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Fourth Title',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'fourth-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet fourth',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem exercitationem distinctio hic facere suscipit saepe dolores perferendis. Porro eum esse facilis aut? Molestias omnis placeat temporibus, necessitatibus ab doloremque quia reprehenderit obcaecati, itaque voluptas laudantium tempora ad nam adipisci id qui odit soluta cum! Vel deleniti nisi, libero repellat ipsa, fugiat quidem, doloribus ipsam tempore a maxime velit illo? Necessitatibus veritatis libero totam exercitationem excepturi et dolorem corrupti ratione neque obcaecati, inventore beatae non tempora dignissimos quasi mollitia sunt repellat quibusdam magnam voluptatem? Laudantium aliquid eaque magni officiis, voluptatum nesciunt possimus laboriosam ratione ullam suscipit quibusdam aut quo non rerum!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt unde iure tempore, explicabo deserunt repudiandae adipisci natus voluptas voluptatum veniam quidem sint magni vitae earum debitis sed exercitationem labore laudantium quasi quae? Expedita totam sapiente qui voluptates, eum obcaecati porro alias recusandae, veritatis eligendi odit nam? Sunt odit sit nemo explicabo maxime eos odio libero rerum excepturi itaque, exercitationem ea quod fuga amet. Velit dignissimos hic ipsam vel voluptatibus pariatur exercitationem quae laboriosam minus nihil reprehenderit, ducimus veniam dolor voluptas neque. Sint aperiam hic voluptates perferendis eius esse excepturi consequatur porro odio doloremque ipsum voluptas ex velit cumque quod repellat harum sed dolorem optio incidunt, cupiditate omnis rem obcaecati. Officia, fuga voluptatum. Itaque voluptatum nemo, libero excepturi, perspiciatis vel unde omnis minus consectetur temporibus ullam.</p>'
        // ]);
    }
}
