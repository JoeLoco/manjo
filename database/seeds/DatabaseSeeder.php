<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CategorySeeder::class);
        $this->call(SkillSeeder::class);

        Model::reguard();
    }
}

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Programing language',
            'description' => 'A programming language is a formal constructed language designed to communicate instructions to a machine, particularly a computer'
        ]);

        DB::table('categories')->insert([
            'name' => 'Design patterns',
            'description' => ' a design pattern is a general reusable solution to a commonly occurring problem within a given context in software design'
        ]);
    }
}

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'name' => 'PHP',
            'description' => 'PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language.',
            'category_id' => 1
        ]);

        DB::table('skills')->insert([
            'name' => 'Ruby',
            'description' => 'Ruby is a dynamic, reflective, object-oriented, general-purpose programming language. It was designed and developed in the mid-1990s by Yukihiro "Matz" Matsumoto in Japan.',
            'category_id' => 1
        ]);

        DB::table('skills')->insert([
            'name' => 'Singleton',
            'description' => 'Ensure a class has only one instance, and provide a global point of access to it.',
            'category_id' => 2
        ]);

        DB::table('skills')->insert([
            'name' => 'Facade',
            'description' => 'Provide a unified interface to a set of interfaces in a subsystem. Facade defines a higher-level interface that makes the subsystem easier to use.',
            'category_id' => 2
        ]);
    }
}
