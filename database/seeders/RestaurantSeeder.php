<?php

namespace Database\Seeders;

use App\Enums\FoodType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('restaurants')->insert([
            'name' => 'رستوران ارگ نو',
            'food_type' => FoodType::IRANIAN,
            'address' => 'اهواز، کیانپارس، خیابان 5 شرقی',
            'external_environment' => true,
            'internal_environment' => true,
            'points' => 4,
            'image' => 'https://foodmaz.com/wp-content/uploads/2024/10/shahrzad3.jpg',
            'phone' => '06133321001',
            'services' => '<ul><li>پارکینگ</li><li>وای‌فای</li><li>پرداخت آنلاین</li></ul>',
            'created_at' => now(),
        ]);

        DB::table('restaurants')->insert([
            'name' => 'رستوران پاپیون',
            'food_type' => FOODTYPE::FASTFOOD,
            'address' => 'اهواز، زیتون کارمندی، خیابان پنجم',
            'external_environment' => false,
            'internal_environment' => true,
            'points' => 5,
            'image' => 'https://foodmaz.com/wp-content/uploads/2024/10/sogoli5.jpg',
            'phone' => '06133321002',
            'services' => '<ul><li>بیرون‌بر</li><li>سفارش آنلاین</li></ul>',
            'created_at' => now(),
        ]);

        DB::table('restaurants')->insert([
            'name' => 'چلوکباب گلستان',
            'food_type' => FOODTYPE::IRANIAN,
            'address' => 'اهواز، گلستان، فاز 2',
            'external_environment' => true,
            'internal_environment' => true,
            'points' => 3,
            'image' => 'https://www.jabama.com/mag/wp-content/uploads/2018/09/%D9%87%D8%AA%D9%84-%D9%82%D9%86%D8%A7%D8%B1%DB%8C.jpg',
            'phone' => '06133321003',
            'services' => '<ul><li>تحویل درب منزل</li><li>سالن خانوادگی</li></ul>',
            'created_at' => now(),
        ]);

        DB::table('restaurants')->insert([
            'name' => 'فست فود دلوین',
            'food_type' => FOODTYPE::FASTFOOD,
            'address' => 'اهواز، نادری، نبش خیابان 18',
            'external_environment' => false,
            'internal_environment' => true,
            'points' => 4,
            'image' => 'https://www.jabama.com/mag/wp-content/uploads/2022/02/%D8%A7%D8%B3%DA%A9%D8%A7%DB%8C-%D9%84%D8%A7%D9%86%DA%98.jpg',
            'phone' => '06133321004',
            'services' => '<ul><li>تهیه غذا برای مهمانی</li><li>سفارش آنلاین</li></ul>',
            'created_at' => now(),
        ]);

        DB::table('restaurants')->insert([
            'name' => 'رستوران سنتی کارون',
            'food_type' => FOODTYPE::IRANIAN,
            'address' => 'اهواز، کارون، بلوار اصلی',
            'external_environment' => true,
            'internal_environment' => true,
            'points' => 2,
            'image' => 'https://www.jabama.com/mag/wp-content/uploads/2022/02/%D8%AF%D9%84%D9%81%DB%8C%D9%86.jpg',
            'phone' => '06133321005',
            'services' => '<ul><li>موسیقی زنده</li><li>پارکینگ اختصاصی</li></ul>',
            'created_at' => now(),
        ]);

        DB::table('restaurants')->insert([
            'name' => 'رستوران پارسه',
            'food_type' => FOODTYPE::IRANIAN,
            'address' => 'اهواز، کیانپارس، بلوار ساحلی',
            'external_environment' => true,
            'internal_environment' => true,
            'points' => 5,
            'image' => 'https://www.jabama.com/mag/wp-content/uploads/2022/02/%D8%AA%D8%A7%D8%AC-%D9%85%D8%AD%D9%84.jpg',
            'phone' => '06133321006',
            'services' => '<ul><li>اتاق VIP</li><li>رزرو آنلاین</li></ul>',
            'created_at' => now(),
        ]);

        DB::table('restaurants')->insert([
            'name' => 'فست فود تامار',
            'food_type' => FOODTYPE::FASTFOOD,
            'address' => 'اهواز، کوروش، خیابان سپهر',
            'external_environment' => false,
            'internal_environment' => true,
            'points' => 3,
            'image' => 'https://espinashotels.com/wp-content/uploads/2025/04/skylounge_espinas_gallery06.jpg',
            'phone' => '06133321007',
            'services' => '<ul><li>سفارش اینترنتی</li><li>بیرون‌بر</li></ul>',
            'created_at' => now(),
        ]);

        DB::table('restaurants')->insert([
            'name' => 'رستوران نخلستان',
            'food_type' => FOODTYPE::IRANIAN,
            'address' => 'اهواز، باهنر، روبروی پارک نخلستان',
            'external_environment' => true,
            'internal_environment' => true,
            'points' => 4,
            'image' => 'https://espinashotels.com/wp-content/uploads/2025/04/sunset_espinas_gallery03.jpg',
            'phone' => '06133321008',
            'services' => '<ul><li>چایخانه</li><li>سرویس بیرون‌بر</li></ul>',
            'created_at' => now(),
        ]);

        DB::table('restaurants')->insert([
            'name' => 'فست فود آرمن',
            'food_type' => FOODTYPE::FASTFOOD,
            'address' => 'اهواز، لشکرآباد، خیابان اصلی',
            'external_environment' => true,
            'internal_environment' => false,
            'points' => 2,
            'image' => 'https://www.digivilla24.com/blog/wp-content/uploads/2025/01/Picture1-8.jpg',
            'phone' => '06133321009',
            'services' => '<ul><li>غذاهای خیابانی</li><li>تحویل سریع</li></ul>',
            'created_at' => now(),
        ]);

        DB::table('restaurants')->insert([
            'name' => 'رستوران ارغوان',
            'food_type' => FOODTYPE::IRANIAN,
            'address' => 'اهواز، کیان آباد، خیابان 14 غربی',
            'external_environment' => false,
            'internal_environment' => true,
            'points' => 5,
            'image' => 'https://shahrzi.com/wp-content/uploads/2024/09/E36FF185-3F54-4714-B382-A9C92461030C-1.jpeg',
            'phone' => '06133321010',
            'services' => '<ul><li>فضای خانوادگی</li><li>رزرو میز</li></ul>',
            'created_at' => now(),
        ]);

        DB::table('restaurants')->insert([
            'name' => 'پیتزا اوستا',
            'food_type' => FOODTYPE::FASTFOOD,
            'address' => 'اهواز، پردیس، خیابان فروردین',
            'external_environment' => false,
            'internal_environment' => true,
            'points' => 3,
            'image' => 'https://www.dolffastfood.com/home/images/IMG_20171012_224644.jpg',
            'phone' => '06133321011',
            'services' => '<ul><li>پیک رایگان</li><li>سفارش آنلاین</li></ul>',
            'created_at' => now(),
        ]);

        DB::table('restaurants')->insert([
            'name' => 'چلوکباب احسان',
            'food_type' => FOODTYPE::IRANIAN,
            'address' => 'اهواز، زیتون کارمندی، بلوار پاسداران',
            'external_environment' => true,
            'internal_environment' => true,
            'points' => 4,
            'image' => 'https://shahrzi.com/wp-content/uploads/2024/08/senso_restaurant_69601132_386118548977268_4653027897522848439_n-e1723842987597-2.jpg',
            'phone' => '06133321012',
            'services' => '<ul><li>سرویس بهداشتی</li><li>پارکینگ</li></ul>',
            'created_at' => now(),
        ]);

        DB::table('restaurants')->insert([
            'name' => 'فست فود آریو',
            'food_type' => FOODTYPE::FASTFOOD,
            'address' => 'اهواز، کیان آباد، خیابان 3 شرقی',
            'external_environment' => true,
            'internal_environment' => true,
            'points' => 5,
            'image' => 'https://chelohajali.com/wp-content/uploads/2024/02/restaurant.webp',
            'phone' => '06133321013',
            'services' => '<ul><li>سفارش آنلاین</li><li>بیرون‌بر</li></ul>',
            'created_at' => now(),
        ]);

        DB::table('restaurants')->insert([
            'name' => 'رستوران شب‌های کارون',
            'food_type' => FOODTYPE::IRANIAN,
            'address' => 'اهواز، ساحلی شرقی، کنار رودخانه',
            'external_environment' => true,
            'internal_environment' => true,
            'points' => 3,
            'image' => 'https://safarmarket.com/blog/data/uploaded_files/56ac91b5fbdfbf27d2fecf70.jpg',
            'phone' => '06133321014',
            'services' => '<ul><li>موسیقی زنده</li><li>پارکینگ</li></ul>',
            'created_at' => now(),
        ]);

        DB::table('restaurants')->insert([
            'name' => 'پیتزا مدرن',
            'food_type' => FOODTYPE::FASTFOOD,
            'address' => 'اهواز، فلکه ساعت، خیابان نواب',
            'external_environment' => false,
            'internal_environment' => true,
            'points' => 4,
            'image' => 'https://www.hotelghasr.com/Images/ShareImages/rst/%D8%B1%D8%B3%D8%AA%D9%88%D8%B1%D8%A7%D9%86-%D9%82%D8%B5%D8%B1.jpg',
            'phone' => '06133321015',
            'services' => '<ul><li>پیک سریع</li><li>سفارش اینترنتی</li></ul>',
            'created_at' => now(),
        ]);

        DB::table('restaurants')->insert([
            'name' => 'رستوران نکیسا',
            'food_type' => FOODTYPE::IRANIAN,
            'address' => 'اهواز، کیانپارس، خیابان 2 غربی',
            'external_environment' => false,
            'internal_environment' => true,
            'points' => 5,
            'image' => 'https://www.hotelghasr.com/Images/ShareImages/rst/DSC_1878.jpg',
            'phone' => '06133321016',
            'services' => '<ul><li>سالن VIP</li><li>پارکینگ</li></ul>',
            'created_at' => now(),
        ]);

        DB::table('restaurants')->insert([
            'name' => 'برگر لند اهواز',
            'food_type' => FOODTYPE::FASTFOOD,
            'address' => 'اهواز، امانیه، خیابان پهلوان',
            'external_environment' => true,
            'internal_environment' => true,
            'points' => 4,
            'image' => 'https://www.hotelghasr.com/Images/ShareImages/Images/sobhane/2.jpg',
            'phone' => '06133321017',
            'services' => '<ul><li>محیط باز</li><li>پیک رایگان</li></ul>',
            'created_at' => now(),
        ]);

        DB::table('restaurants')->insert([
            'name' => 'چلوکباب رامین',
            'food_type' => FOODTYPE::IRANIAN,
            'address' => 'اهواز، پردیس، جنب مجتمع تجاری',
            'external_environment' => true,
            'internal_environment' => false,
            'points' => 2,
            'image' => 'https://avvalbash.com/wp-content/uploads/2024/07/%D8%B1%D8%B3%D8%AA%D9%88%D8%B1%D8%A7%D9%86%D8%AE%D9%88%D8%A7%D9%86%DA%A9%D8%B1%D9%85.jpg',
            'phone' => '06133321018',
            'services' => '<ul><li>سرویس بیرون‌بر</li><li>سالن مردانه</li></ul>',
            'created_at' => now(),
        ]);

        DB::table('restaurants')->insert([
            'name' => 'فست فود سوپر استار',
            'food_type' => FOODTYPE::FASTFOOD,
            'address' => 'اهواز، کورش، روبروی پارک',
            'external_environment' => false,
            'internal_environment' => true,
            'points' => 3,
            'image' => 'https://foodmaz.com/wp-content/uploads/2024/10/shahrzad3.jpg',
            'phone' => '06133321019',
            'services' => '<ul><li>پیک سریع</li><li>سیستم رزرو آنلاین</li></ul>',
            'created_at' => now(),
        ]);

        DB::table('restaurants')->insert([
            'name' => 'رستوران چاشت',
            'food_type' => FOODTYPE::IRANIAN,
            'address' => 'اهواز، کیانپارس، بلوار پهلوان',
            'external_environment' => true,
            'internal_environment' => true,
            'points' => 5,
            'image' => 'https://foodmaz.com/wp-content/uploads/2024/10/sogoli5.jpg',
            'phone' => '06133321020',
            'services' => '<ul><li>پارکینگ</li><li>وای‌فای</li><li>فضای خانوادگی</li></ul>',
            'created_at' => now(),
        ]);
    }
}
