<?php

use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks=0");

        Model::unguard();

        DB::table('categories')->truncate();

        Category::create([
            'name' => 'Sự kiện',
            'desc' => 'Sự kiện'
        ]);

        $orientation = Category::create([
            'name' => 'Hướng nghiệp',
            'desc' => 'Hướng nghiệp'
        ]);

        Category::create([
            'name' => 'Khám phá bản thân',
            'parent_id' => $orientation->id,
            'desc' => 'Khám phá bản thân'
        ]);

        Category::create([
            'name' => 'Học bổng',
            'parent_id' => $orientation->id,
            'desc' => 'Học bổng'
        ]);

        Category::create([
            'name' => 'Thực tập trong nước',
            'parent_id' => $orientation->id,
            'desc' => 'Thực tập trong nước'
        ]);

        Category::create([
            'name' => 'Thực tập ngoài nước',
            'parent_id' => $orientation->id,
            'desc' => 'Thực tập ngoài nước'
        ]);

        $news = Category::create([
            'name' => 'Tin tức',
            'desc' => 'Tin tức'
        ]);

        Category::create([
            'name' => 'Tin mới nhất',
            'parent_id' => $news->id,
            'desc' => 'Tin mới nhất'
        ]);

        Category::create([
            'name' => 'Hoạt động CLB',
            'parent_id' => $news->id,
            'desc' => 'Hoạt động CLB'
        ]);

        Category::create([
            'name' => 'Tuyển thành viên',
            'parent_id' => $news->id,
            'desc' => 'Tuyển thành viên'
        ]);

        Category::create([
            'name' => 'Nghề nghiệp',
            'parent_id' => $news->id,
            'desc' => 'Nghề nghiệp'
        ]);

        Model::reguard();

        DB::statement("SET foreign_key_checks=1");

    }
}
