<?php

use App\Category;
use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categoryList=[
            'Fashion',
            'Food',
            'Travel',
            'Music',
            'Lifestyle',
            'DIY',
            'Sports',
        ];

        $listOfCategoryID=[];

        foreach($categoryList as $category){
            $categotyObject = new Category();
            $categotyObject->name=$category;
            $categotyObject->save();
            $listOfCategoryID[]=$categotyObject->id;
        }
        for ($i=0;$i <50;$i++){
            $post= new Post();
            $post->author = $faker->words(3, true);
            $post->post_text= $faker->paragraph(6);
            $post->image=$faker->imageUrl(360, 360, 'animals', true, 'cats');
            $post->date=$faker->date();

            $randCategoryKey = array_rand($listOfCategoryID, 1);
            $categoryID = $listOfCategoryID[$randCategoryKey];
            $post->category_id = $categoryID;

            $post->save();
        }
    }
}
