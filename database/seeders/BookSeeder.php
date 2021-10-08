<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book1=Book::create([
            'category_id' => Category::where('name','ريادة الأعمال')->first()->id,
            'publisher_id' => Publisher::where('name','أكاديمية حسوب')->first()->id,
            'title' => 'التوظيف عن بعد',
            'description' => 'يمكن التواصل من أي مكان عن بعد',
            'number_of_copies' => '300',
            'number_of_pages' => '288',
            'price' => '17',
            'isbn' => '10000000',
            'cover_image' => 'images/covers/1.png',
        ]);
        $book1->authors()->attach(Author::where('name','فاطمة حبشية')->first());

        $book2=Book::create([
            'category_id' => Category::where('name','التصميم')->first()->id,
            'publisher_id' => Publisher::where('name','أكاديمية حسوب')->first()->id,
            'title' => 'مدخل إلى تجربة المستخدم',
            'description' => 'هذا مخل جديد',
            'number_of_copies' => '300',
            'number_of_pages' => '288',
            'price' => '22',
            'isbn' => '10000001',
            'cover_image' => 'images/covers/2.png',
        ]);
        $book2->authors()->attach(Author::where('name','محمد عرابي')->first());
        
        $book3=Book::create([
            'category_id' => Category::where('name','العمل الحر')->first()->id,
            'publisher_id' => Publisher::where('name','أكاديمية حسوب')->first()->id,
            'title' => 'دليلك المختصر لبيع المنتجات الرقمية',
            'description' => 'دليل',
            'number_of_copies' => '300',
            'number_of_pages' => '288',
            'price' => '18',
            'isbn' => '10000002',
            'cover_image' => 'images/covers/3.png',
        ]);
        $book3->authors()->attach(Author::where('name','محمدالزاير')->first());

        $book4=Book::create([
            'category_id' => Category::where('name','العمل الحر')->first()->id,
            'publisher_id' => Publisher::where('name','أكاديمية حسوب')->first()->id,
            'title' => 'دليلك المختصر لبدء العمل عبر الإنترنت',
            'description' => 'دليلك الجديد',
            'number_of_copies' => '300',
            'number_of_pages' => '288',
            'price' => '12',
            'isbn' => '10000003',
            'cover_image' => 'images/covers/4.png',
        ]);
        $book4->authors()->attach(Author::where('name','عمر النواري')->first());

        $book5=Book::create([
            'category_id' => Category::where('name','التسويق و المبيعات')->first()->id,
            'publisher_id' => Publisher::where('name','أكاديمية حسوب')->first()->id,
            'title' => 'الدليل المختصر لمنحات الهبوط',
            'description' => 'دليل مختصر',
            'number_of_copies' => '300',
            'number_of_pages' => '288',
            'price' => '24',
            'isbn' => '10000004',
            'cover_image' => 'images/covers/5.png',
        ]);
        $book5->authors()->attach(Author::where('name','ماجد عطوي')->first());
        
        $book6=Book::create([
            'category_id' => Category::where('name','التسويق و المبيعات')->first()->id,
            'publisher_id' => Publisher::where('name','أكاديمية حسوب')->first()->id,
            'title' => 'الدليل المختصر للعمل كمسوق بالعمولة',
            'description' => 'دليل مختصر',
            'number_of_copies' => '300',
            'number_of_pages' => '288',
            'price' => '20',
            'isbn' => '10000005',
            'cover_image' => 'images/covers/6.png',
        ]);
        $book6->authors()->attach(Author::where('name','رياض سامر')->first());
    }
}
