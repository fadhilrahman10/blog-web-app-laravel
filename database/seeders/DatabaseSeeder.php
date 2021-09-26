<?php

namespace Database\Seeders;

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
        User::create([
            'name' => 'Fadhil Rahman',
            'username' => 'fadhilrahman',
            'email' => 'fadhilrahman@gmail.com',
            'password' => bcrypt('password'),
        ]);

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


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam fugit veritatis odit! Asperiores voluptatem dolorum nemo quidem, ipsam praesentium, modi libero atque, suscipit ducimus vero.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci nobis illum, quidem explicabo placeat iusto culpa quibusdam. In harum eum, eveniet reprehenderit dolorem quo. Velit sed quisquam deserunt, facere nulla amet consequatur expedita tempora laboriosam perferendis reprehenderit pariatur, aliquid voluptatem quo ipsam et saepe molestiae optio sit? Beatae atque ut enim ex, illo nostrum culpa! Nisi iure facilis in hic labore, magnam quibusdam facere nihil fugit, doloremque quasi unde deserunt? Voluptas quisquam pariatur unde tenetur natus molestiae, praesentium autem magni mollitia, voluptatem nulla ducimus, dolorum quaerat in reprehenderit? Itaque, dicta repellendus iste eligendi nam doloribus pariatur molestiae facere earum accusantium omnis quisquam eaque in possimus porro perspiciatis delectus. Exercitationem, nemo nesciunt? Beatae error placeat optio quisquam reiciendis ducimus ea at repudiandae, ratione, non recusandae soluta porro et, adipisci doloremque animi laboriosam reprehenderit provident? Saepe, asperiores quas consectetur atque quam, accusantium vero ducimus commodi odit cumque veniam architecto omnis! Sunt eaque eligendi libero fugit, earum autem, doloremque sequi magni aliquid quos commodi eveniet! Fugit saepe sunt, laudantium et quo odit dolore animi aspernatur, facilis repellat eius dolorem quam a blanditiis soluta voluptatibus molestiae aut. Officiis, voluptatum. Velit voluptatem odit dolorem quam pariatur, eligendi amet libero sint ex fugit, tempore nostrum veniam!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ducimus eveniet aperiam provident corporis doloribus, nostrum beatae ad consequuntur officiis laborum deleniti reiciendis! Ratione eum non reiciendis cumque tempore mollitia assumenda provident impedit neque, culpa porro consequuntur animi sapiente iure alias voluptate magnam! Voluptatum expedita labore rem fuga neque officia eligendi cupiditate, deleniti amet, culpa quisquam blanditiis iste. Quas ullam rem facere aperiam alias, maiores dolorem! Consequuntur eius consequatur at dolorem maxime blanditiis fugit dicta, nesciunt eligendi tenetur quibusdam commodi!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ratione deserunt, culpa omnis ipsum ducimus, laborum vel quaerat soluta reiciendis quibusdam numquam labore sapiente. Nemo, repellendus! Vero numquam in consequuntur quas consectetur eius nam sapiente? Quae, mollitia! Est, ea, corporis totam nemo nobis blanditiis similique veritatis sapiente deserunt culpa eius corrupti omnis? Nihil voluptatum nam beatae, provident ex vitae dolorum nostrum nobis, sint dolorem incidunt quam minus unde minima eveniet nesciunt distinctio. Rem delectus officiis reiciendis obcaecati repellat vel voluptatum, excepturi rerum quis et numquam! Labore molestias doloremque et hic? Molestiae harum dolor quisquam doloremque laborum, tempore distinctio qui facilis amet, delectus pariatur officiis illo fugiat provident obcaecati nihil aperiam mollitia nesciunt officia rem. Dignissimos cum eius aliquam inventore aliquid.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam fugit veritatis odit! Asperiores voluptatem dolorum nemo quidem, ipsam praesentium, modi libero atque, suscipit ducimus vero.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci nobis illum, quidem explicabo placeat iusto culpa quibusdam. In harum eum, eveniet reprehenderit dolorem quo. Velit sed quisquam deserunt, facere nulla amet consequatur expedita tempora laboriosam perferendis reprehenderit pariatur, aliquid voluptatem quo ipsam et saepe molestiae optio sit? Beatae atque ut enim ex, illo nostrum culpa! Nisi iure facilis in hic labore, magnam quibusdam facere nihil fugit, doloremque quasi unde deserunt? Voluptas quisquam pariatur unde tenetur natus molestiae, praesentium autem magni mollitia, voluptatem nulla ducimus, dolorum quaerat in reprehenderit? Itaque, dicta repellendus iste eligendi nam doloribus pariatur molestiae facere earum accusantium omnis quisquam eaque in possimus porro perspiciatis delectus. Exercitationem, nemo nesciunt? Beatae error placeat optio quisquam reiciendis ducimus ea at repudiandae, ratione, non recusandae soluta porro et, adipisci doloremque animi laboriosam reprehenderit provident? Saepe, asperiores quas consectetur atque quam, accusantium vero ducimus commodi odit cumque veniam architecto omnis! Sunt eaque eligendi libero fugit, earum autem, doloremque sequi magni aliquid quos commodi eveniet! Fugit saepe sunt, laudantium et quo odit dolore animi aspernatur, facilis repellat eius dolorem quam a blanditiis soluta voluptatibus molestiae aut. Officiis, voluptatum. Velit voluptatem odit dolorem quam pariatur, eligendi amet libero sint ex fugit, tempore nostrum veniam!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ducimus eveniet aperiam provident corporis doloribus, nostrum beatae ad consequuntur officiis laborum deleniti reiciendis! Ratione eum non reiciendis cumque tempore mollitia assumenda provident impedit neque, culpa porro consequuntur animi sapiente iure alias voluptate magnam! Voluptatum expedita labore rem fuga neque officia eligendi cupiditate, deleniti amet, culpa quisquam blanditiis iste. Quas ullam rem facere aperiam alias, maiores dolorem! Consequuntur eius consequatur at dolorem maxime blanditiis fugit dicta, nesciunt eligendi tenetur quibusdam commodi!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ratione deserunt, culpa omnis ipsum ducimus, laborum vel quaerat soluta reiciendis quibusdam numquam labore sapiente. Nemo, repellendus! Vero numquam in consequuntur quas consectetur eius nam sapiente? Quae, mollitia! Est, ea, corporis totam nemo nobis blanditiis similique veritatis sapiente deserunt culpa eius corrupti omnis? Nihil voluptatum nam beatae, provident ex vitae dolorum nostrum nobis, sint dolorem incidunt quam minus unde minima eveniet nesciunt distinctio. Rem delectus officiis reiciendis obcaecati repellat vel voluptatum, excepturi rerum quis et numquam! Labore molestias doloremque et hic? Molestiae harum dolor quisquam doloremque laborum, tempore distinctio qui facilis amet, delectus pariatur officiis illo fugiat provident obcaecati nihil aperiam mollitia nesciunt officia rem. Dignissimos cum eius aliquam inventore aliquid.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam fugit veritatis odit! Asperiores voluptatem dolorum nemo quidem, ipsam praesentium, modi libero atque, suscipit ducimus vero.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci nobis illum, quidem explicabo placeat iusto culpa quibusdam. In harum eum, eveniet reprehenderit dolorem quo. Velit sed quisquam deserunt, facere nulla amet consequatur expedita tempora laboriosam perferendis reprehenderit pariatur, aliquid voluptatem quo ipsam et saepe molestiae optio sit? Beatae atque ut enim ex, illo nostrum culpa! Nisi iure facilis in hic labore, magnam quibusdam facere nihil fugit, doloremque quasi unde deserunt? Voluptas quisquam pariatur unde tenetur natus molestiae, praesentium autem magni mollitia, voluptatem nulla ducimus, dolorum quaerat in reprehenderit? Itaque, dicta repellendus iste eligendi nam doloribus pariatur molestiae facere earum accusantium omnis quisquam eaque in possimus porro perspiciatis delectus. Exercitationem, nemo nesciunt? Beatae error placeat optio quisquam reiciendis ducimus ea at repudiandae, ratione, non recusandae soluta porro et, adipisci doloremque animi laboriosam reprehenderit provident? Saepe, asperiores quas consectetur atque quam, accusantium vero ducimus commodi odit cumque veniam architecto omnis! Sunt eaque eligendi libero fugit, earum autem, doloremque sequi magni aliquid quos commodi eveniet! Fugit saepe sunt, laudantium et quo odit dolore animi aspernatur, facilis repellat eius dolorem quam a blanditiis soluta voluptatibus molestiae aut. Officiis, voluptatum. Velit voluptatem odit dolorem quam pariatur, eligendi amet libero sint ex fugit, tempore nostrum veniam!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ducimus eveniet aperiam provident corporis doloribus, nostrum beatae ad consequuntur officiis laborum deleniti reiciendis! Ratione eum non reiciendis cumque tempore mollitia assumenda provident impedit neque, culpa porro consequuntur animi sapiente iure alias voluptate magnam! Voluptatum expedita labore rem fuga neque officia eligendi cupiditate, deleniti amet, culpa quisquam blanditiis iste. Quas ullam rem facere aperiam alias, maiores dolorem! Consequuntur eius consequatur at dolorem maxime blanditiis fugit dicta, nesciunt eligendi tenetur quibusdam commodi!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ratione deserunt, culpa omnis ipsum ducimus, laborum vel quaerat soluta reiciendis quibusdam numquam labore sapiente. Nemo, repellendus! Vero numquam in consequuntur quas consectetur eius nam sapiente? Quae, mollitia! Est, ea, corporis totam nemo nobis blanditiis similique veritatis sapiente deserunt culpa eius corrupti omnis? Nihil voluptatum nam beatae, provident ex vitae dolorum nostrum nobis, sint dolorem incidunt quam minus unde minima eveniet nesciunt distinctio. Rem delectus officiis reiciendis obcaecati repellat vel voluptatum, excepturi rerum quis et numquam! Labore molestias doloremque et hic? Molestiae harum dolor quisquam doloremque laborum, tempore distinctio qui facilis amet, delectus pariatur officiis illo fugiat provident obcaecati nihil aperiam mollitia nesciunt officia rem. Dignissimos cum eius aliquam inventore aliquid.</p>'
        // ]);

    }
}
