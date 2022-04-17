<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
<<<<<<< HEAD
        // Table detail
        DB::table('details')->insert([
            [
                'payment_id' =>'1',
                'product_id' =>'1',
                'quantity' =>'2',
            ],
            [
                'payment_id' =>'1',
                'product_id' =>'2',
                'quantity' =>'1',
            ],
            [
                'payment_id' =>'2',
                'product_id' =>'3',
                'quantity' =>'1',
            ]
=======
<<<<<<< HEAD
        // \App\Models\User::factory(10)->create();
        DB::table('products')->insert([
            'manu_id' =>'1',
            'name' =>'Điện thoại iPhone 13 Pro Max 128GB',
            'price'=>'32390000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-1-2.jpg',
            'description'=>'Màn hình: OLED6.7"Super Retina XDR
            Hệ điều hành: iOS 15
=======
        // Table Users
        DB::table('users')->insert([
            'username' =>'user1',
            'password' =>'user1',
            'phone' =>'0987654321',
        ]);

        DB::table('users')->insert([
            'username' =>'user2',
            'password' =>'user2',
            'phone' =>'0123456789',
        ]);

        DB::table('users')->insert([
            'username' =>'user3',
            'password' =>'user3',
            'phone' =>'0987654123',
>>>>>>> 4c7d1aa5cb90f964149f542c10252e1643ebbbec
        ]);

        // Table Payment
        DB::table('payments')->insert([
            [
            'user' =>'user1',
            'create_at' =>'2022-03-05',
            'discount' =>'10',
            ],
            [
                'user' =>'user2',
                'create_at' =>'2022-01-21',
                'discount' =>'5',
            ]
        ]);

        // Table Users
        DB::table('users')->insert([
            [
            'username' =>'user1',
            'password' =>'user1',
            'phone' =>'0987654321',
            ],
            [
                'username' =>'user2',
                'password' =>'user2',
                'phone' =>'0123456789',
            ],
            [
                'username' =>'user3',
                'password' =>'user3',
                'phone' =>'0987654123',
            ],
            [
                'username' =>'user4',
                'password' =>'user4',
                'phone' =>'0123456987',
            ],
            [
                'username' =>'user5',
                'password' =>'user5',
                'phone' =>'0912345678',
            ]
        ]);

        // Table Manufacturers
        DB::table('manufacturers')->insert([
            [
            'manu_name' =>'Apple',
            ],
            [
                'manu_name' =>'Samsung',
            ],
            [
                'manu_name' =>'Oppo',
            ],
            [
                'manu_name' =>'Xiaomi',
            ],
            [
                'manu_name' =>'Realme',
            ]
        ]);

        // Table Products
        DB::table('products')->insert([
<<<<<<< HEAD
            [
                'manu_id' =>'1',
                'product_name' =>'Điện thoại iPhone 13 Pro Max 128GB',
                'price'=>'32390000',
                'image'=>'iphone-13promax.jpg',
                'description'=>'Màn hình: OLED6.7"Super Retina XDR
                Hệ điều hành:iOS 15
                Camera sau: 3 camera 12 MP
                Camera trước: 12 MP
                Chip: Apple A15 Bionic
                RAM: 6 GB
                Bộ nhớ trong: 128 GB
                SIM:1 Nano SIM & 1 eSIMHỗ trợ 5G
                Pin, Sạc: 4352 mAh, 20 W',
                'quantity'=>'5',
                'feature'=>'1',
                'create_at'=>'2022-01-09',
            ],
            [
                'manu_id' =>'1',
                'product_name' =>'Điện thoại iPhone 13 Pro 128GB',
                'price'=>'29990000',
                'image'=>'iphone-13pro.jpg',
                'description'=>'Màn hình: OLED6.1"Super Retina XDR
                Hệ điều hành:iOS 15
                Camera sau: 3 camera 12 MP
                Camera trước: 12 MP
                Chip: Apple A15 Bionic
                RAM: 6 GB
                Bộ nhớ trong: 256 GB
                SIM:1 Nano SIM & 1 eSIMHỗ trợ 5G
                Pin, Sạc: 3095 mAh, 20 W',
                'quantity'=>'5',
                'feature'=>'1',
                'create_at'=>'2021-02-09',
            ],
            [
                'manu_id' =>'1',
                'product_name' =>'Điện thoại iPhone 13 128GB RAM 6GB',
                'price'=>'22790000',
                'image'=>'iphone-13.jpg',
                'description'=>'Màn hình: OLED6.1"Super Retina XDR
                Hệ điều hành:iOS 15
                Camera sau: 3 camera 12 MP
                Camera trước: 12 MP
                Chip: Apple A15 Bionic
                RAM: 6 GB
                Bộ nhớ trong: 128 GB
                SIM:1 Nano SIM & 1 eSIMHỗ trợ 5G
                Pin, Sạc: 3240 mAh, 20 W',
                'quantity'=>'10',
                'feature'=>'1',
                'create_at'=>'2021-03-09',
            ],
            [
                'manu_id' =>'1',
                'product_name' =>'Điện thoại iPhone 12 Pro Max 256GB',
                'price'=>'29990000',
                'image'=>'iphone-12promax.jpg',
                'description'=>'Màn hình: OLED6.7"Super Retina XDR
                Hệ điều hành:iOS 15
                Camera sau: 3 camera 12 MP
                Camera trước: 12 MP
                Chip: Apple A14 Bionic
                RAM: 6 GB
                Bộ nhớ trong: 256 GB
                SIM:1 Nano SIM & 1 eSIMHỗ trợ 5G
                Pin, Sạc: 3687 mAh, 20 W',
                'quantity'=>'15',
                'feature'=>'1',
                'create_at'=>'2020-04-19',
            ],
            [
                'manu_id' =>'1',
                'product_name' =>'Điện thoại iPhone 12 Pro 256GB',
                'price'=>'26290000',
                'image'=>'iphone-12pro.jpg',
                'description'=>'Màn hình: OLED6.1"Super Retina XDR
                Hệ điều hành:iOS 15
                Camera sau: 3 camera 12 MP
                Camera trước: 12 MP
                Chip: Apple A14 Bionic
                RAM: 6 GB
                Bộ nhớ trong: 256 GB
                SIM:1 Nano SIM & 1 eSIMHỗ trợ 5G
                Pin, Sạc: 2815 mAh, 20 W',
                'quantity'=>'20',
                'feature'=>'1',
                'create_at'=>'2020-05-09',
            ],
            [
                'manu_id' =>'2',
                'product_name' =>'Điện thoại Samsung Galaxy S22 Ultra 5G 128GB',
                'price'=>'30990000',
                'image'=>'samsung-galaxys22ultra.jpg',
                'description'=>'Màn hình: Dynamic AMOLED 2X6.8"Quad HD+ (2K+)
                Hệ điều hành: Android 12
                Camera sau: Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP
                Camera trước: 40 MP
                Chip: Snapdragon 8 Gen 1 8 nhân
                RAM: 8 GB
                Bộ nhớ trong: 128 GB
                SIM: 2 Nano SIM hoặc 1 Nano SIM + 1 eSIMHỗ trợ 5G
                Pin, Sạc: 5000 mAh, 45 W',
                'quantity'=>'5',
                'feature'=>'1',
                'create_at'=>'2021-06-09',
            ],
            [
                'manu_id' =>'2',
                'product_name' =>'Điện thoại Samsung Galaxy S21 Ultra 5G 128GB',
                'price'=>'25990000',
                'image'=>'samsung-galaxys21ultra.jpg',
                'description'=>'Màn hình: Dynamic AMOLED 2X6.8"Quad HD+ (2K+)
                Hệ điều hành: Android 11
                Camera sau: Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP
                Camera trước: 40 MP
                Chip: Exynos 2100
                RAM: 12 GB
                Bộ nhớ trong: 128 GB
                SIM: 2 Nano SIM hoặc 1 Nano SIM + 1 eSIMHỗ trợ 5G
                Pin, Sạc: 5000 mAh, 25 W',
                'quantity'=>'10',
                'feature'=>'1',
                'create_at'=>'2021-07-19',
            ],
            [
                'manu_id' =>'2',
                'product_name' =>'Điện thoại Samsung Galaxy Z Flip3 5G 128GB',
                'price'=>'19990000',
                'image'=>'samsung-galaxyzflip3.jpg',
                'description'=>'Màn hình: Dynamic AMOLED 2X6.8"Quad HD+ (2K+)
                Hệ điều hành: Android 11
                Camera sau: 2 camera 12 MP
                Camera trước: 10 MP
                Chip: Snapdragon 888
                RAM: 8 GB
                Bộ nhớ trong: 128 GB
                SIM: 1 Nano SIM & 1 eSIMHỗ trợ 5G
                Pin, Sạc: 3300 mAh, 15 W',
                'quantity'=>'10',
                'feature'=>'1',
                'create_at'=>'2020-01-19',
            ],
            [
                'manu_id' =>'2',
                'product_name' =>'Điện thoại Samsung Galaxy Z Fold3 5G 256GB ',
                'price'=>'36990000',
                'image'=>'samsung-galaxyzfold3.jpg',
                'description'=>'Màn hình: Dynamic AMOLED 2XChính 7.6" & Phụ 6.2"Full HD+
                Hệ điều hành: Android 11
                Camera sau: 3 camera 12 MP
                Camera trước: 10 MP & 4 MP
                Chip: Snapdragon 888
                RAM: 12 GB
                Bộ nhớ trong: 256 GB
                SIM: 2 Nano SIM + 1 eSIMHỗ trợ 5G
                Pin, Sạc: 4400 mAh, 25 W',
                'quantity'=>'5',
                'feature'=>'1',
                'create_at'=>'2021-03-08',
            ],
            [
                'manu_id' =>'2',
                'product_name' =>'Điện thoại Samsung Galaxy S22+ 5G 128GB',
                'price'=>'25990000',
                'image'=>'samsung-galaxys22plus.jpg',
                'description'=>'Màn hình: Dynamic AMOLED 2X6.6"Full HD+
                Hệ điều hành: Android 12
                Camera sau: Chính 50 MP & Phụ 12 MP, 10 MP
                Camera trước: 10 MP
                Chip: Snapdragon 8 Gen 1 8 nhân
                RAM: 8 GB
                Bộ nhớ trong: 128 GB
                SIM: 2 Nano SIM hoặc 1 Nano SIM + 1 eSIMHỗ trợ 5G
                Pin, Sạc: 4500 mAh,45 W',
                'quantity'=>'15',
                'feature'=>'1',
                'create_at'=>'2022-02-01',
            ],
            [
                'manu_id' =>'3',
                'product_name' =>'Điện thoại OPPO Reno7 Z 5G 128GB',
                'price'=>'10490000',
                'image'=>'oppo-reno7.jpg',
                'description'=>'Màn hình: AMOLED6.43"Full HD+
                Hệ điều hành: Android 11
                Camera sau: Chính 64 MP & Phụ 2 MP, 2 MP
                Camera trước: 16 MP
                Chip: Snapdragon 695 5G 8 nhân
                RAM: 8 GB
                Bộ nhớ trong: 128 GB
                SIM: 2 Nano SIM (SIM 2 chung khe thẻ nhớ)Hỗ trợ 5G
                Pin, Sạc: 4500 mAh, 33 W',
                'quantity'=>'15',
                'feature'=>'1',
                'create_at'=>'2021-12-09',
            ],
            [
                'manu_id' =>'3',
                'product_name' =>'Điện thoại OPPO Reno6 5G 128GB',
                'price'=>'11990000',
                'image'=>'oppo-reno6.jpg',
                'description'=>'Màn hình: AMOLED6.43"Full HD+
                Hệ điều hành: Android 11
                Camera sau: Chính 64 MP & Phụ 8 MP, 2 MP
                Camera trước: 32 MP
                Chip: MediaTek Dimensity 900 5G
                RAM: 8 GB
                Bộ nhớ trong: 128 GB
                SIM: 2 Nano SIMHỗ trợ 5G
                Pin, Sạc: 4300 mAh, 65 W',
                'quantity'=>'5',
                'feature'=>'1',
                'create_at'=>'2021-05-10',
            ],
            [
                'manu_id' =>'3',
                'product_name' =>'Điện thoại OPPO Reno5 5G 128 GB',
                'price'=>'8990000',
                'image'=>'oppo-reno5.jpg',
                'description'=>'Màn hình: AMOLED6.43"Full HD+
                Hệ điều hành: Android 11
                Camera sau: Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP
                Camera trước: 32 MP
                Chip: Snapdragon 765G
                RAM: 8 GB
                Bộ nhớ trong: 128 GB
                SIM: 2 Nano SIMHỗ trợ 5G
                Pin, Sạc: 4300 mAh, 65 W',
                'quantity'=>'5',
                'feature'=>'1',
                'create_at'=>'2019-04-09',
            ],
            [
                'manu_id' =>'3',
                'product_name' =>'Điện thoại OPPO A16 32GB RAM 3GB',
                'price'=>'3990000',
                'image'=>'oppo-a16.jpg',
                'description'=>'Màn hình IPS LCD 6.52" HD+
                Hệ điều hành: Android 11
                Camera sau: Chính 13 MP & Phụ 2 MP, 2 MP
                Camera trước: 8 MP
                Chip: MediaTek Helio G35
                RAM: 3 GB
                Bộ nhớ trong: 32 GB
                SIM: 2 Nano SIM Hỗ trợ 4G
                Pin, Sạc: 5000 mAh, 10 W',
                'quantity'=>'5',
                'feature'=>'0',
                'create_at'=>'2021-08-09',
            ],
            [
                'manu_id' =>'3',
                'product_name' =>'Điện thoại OPPO A15s 64GB RAM 4GB',
                'price'=>'4290000',
                'image'=>'oppo-a15s.jpg',
                'description'=>'Màn hình IPS LCD 6.52" HD+
                Hệ điều hành: Android 11
                Camera sau: Chính 13 MP & Phụ 2 MP, 2 MP
                Camera trước: 8 MP
                Chip: MediaTek Helio P35
                RAM: 4 GB
                Bộ nhớ trong: 64 GB
                SIM: 2 Nano SIM Hỗ trợ 4G
                Pin, Sạc: 4230 mAh, 10 W',
                'quantity'=>'10',
                'feature'=>'0',
                'create_at'=>'2020-07-09',
            ],
            [
                'manu_id' =>'4',
                'product_name' =>'Điện thoại Xiaomi Redmi 9A 32GB',
                'price'=>'2490000',
                'image'=>'xiaomi-redmi9a.jpg',
                'description'=>'Màn hình: IPS LCD 6.53" HD+
                Hệ điều hành: Android 10
                Camera sau: 13 MP
                Camera trước: 5 MP
                Chip: MediaTek Helio G25
                RAM: 2 GB
                Bộ nhớ trong: 32 GB
                SIM: 2 Nano SIMHỗ trợ 4G
                Pin, Sạc: 5000 mAh, 10 W',
                'quantity'=>'20',
                'feature'=>'1',
                'create_at'=>'2021-09-09',
            ],
            [
                'manu_id' =>'4',
                'product_name' =>'Điện thoại Xiaomi Redmi 10 128GB',
                'price'=>'4290000',
                'image'=>'xiaomi-redmi10.jpg',
                'description'=>'Màn hình: IPS LCD 6.5" Full HD+
                Hệ điều hành: Android 11
                Camera sau: Chính 50 MP & Phụ 8 MP, 2 MP, 2 MP
                Camera trước: 8 MP
                Chip: MediaTek Helio G88 8 nhân
                RAM: 4 GB
                Bộ nhớ trong: 128 GB
                SIM: 2 Nano SIMHỗ trợ 4G
                Pin, Sạc: 5000 mAh, 18 W',
                'quantity'=>'15',
                'feature'=>'1',
                'create_at'=>'2021-10-09',
            ],
            [
                'manu_id' =>'4',
                'product_name' =>'Điện thoại Xiaomi Mi 11 Lite 128GB',
                'price'=>'7990000',
                'image'=>'xiaomi-mi11.jpg',
                'description'=>'Màn hình: AMOLED 6.55" Full HD+
                Hệ điều hành: Android 11
                Camera sau: Chính 64 MP & Phụ 8 MP, 5 MP
                Camera trước: 16 MP
                Chip: Snapdragon 732G
                RAM: 8 GB
                Bộ nhớ trong: 128 GB
                SIM: 2 Nano SIM Hỗ trợ 4G
                Pin, Sạc: 4250 mAh, 33 W',
                'quantity'=>'10',
                'feature'=>'1',
                'create_at'=>'2022-02-22',
            ],
            [
                'manu_id' =>'4',
                'product_name' =>'Điện thoại Xiaomi Redmi Note 10S',
                'price'=>'6490000',
                'image'=>'xiaomi-redmi10s.jpg',
                'description'=>'Màn hình: AMOLED 6.43" Full HD+
                Hệ điều hành: Android 11
                Camera sau: Chính 64 MP & Phụ 8 MP, 2 MP, 2MP
                Camera trước: 13 MP
                Chip: MediaTek Helio G95
                RAM: 8 GB
                Bộ nhớ trong: 128 GB
                SIM: 2 Nano SIM Hỗ trợ 4G
                Pin, Sạc: 5000 mAh, 33 W',
                'quantity'=>'10',
                'feature'=>'1',
                'create_at'=>'2022-02-22',
            ],
            [
                'manu_id' =>'4',
                'product_name' =>'Điện thoại Xiaomi Redmi Note 10S 6GB',
                'price'=>'5990000',
                'image'=>'xiaomi-redmi10s6gb.jpg',
                'description'=>'Màn hình: AMOLED 6.43" Full HD+
                Hệ điều hành: Android 11
                Camera sau: Chính 64 MP & Phụ 8 MP, 2 MP, 2MP
                Camera trước: 13 MP
                Chip: MediaTek Helio G95
                RAM: 6 GB
                Bộ nhớ trong: 128 GB
                SIM: 2 Nano SIM Hỗ trợ 4G
                Pin, Sạc: 5000 mAh, 33 W',
                'quantity'=>'10',
                'feature'=>'1',
                'create_at'=>'2020-02-24',
            ],
            [
                'manu_id' =>'5',
                'product_name' =>'Điện thoại Xiaomi Realme C35 ',
                'price'=>'3990000',
                'image'=>'realme-c35.jpg',
                'description'=>'Màn hình: IPS LCD 6.6" Full HD+
                Hệ điều hành: Android 11
                Camera sau: Chính 50 MP & Phụ 2 MP, 0.3 MP
                Camera trước: 8 MP
                Chip: Unisoc T616 8 nhân
                RAM: 4 GB
                Bộ nhớ trong: 64 GB
                SIM: 2 Nano SIM Hỗ trợ 4G
                Pin, Sạc: 5000 mAh, 18 W',
                'quantity'=>'5',
                'feature'=>'1',
                'create_at'=>'2021-03-22',
            ],
            [
                'manu_id' =>'5',
                'product_name' =>'Điện thoại Xiaomi Realme 7 Pro ',
                'price'=>'8990000',
                'image'=>'realme-7pro.jpg',
                'description'=>'Màn hình: Super AMOLED 6.4" Full HD+
                Hệ điều hành: Android 11
                Camera sau: Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP
                Camera trước: 32 MP
                Chip: Snapdragon 720G
                RAM: 8 GB
                Bộ nhớ trong: 128 GB
                SIM: 2 Nano SIM Hỗ trợ 4G
                Pin, Sạc: 4500 mAh, 65 W',
                'quantity'=>'8',
                'feature'=>'1',
                'create_at'=>'2021-11-19',
            ],
            [
                'manu_id' =>'5',
                'product_name' =>'Điện thoại Xiaomi Realme C25Y ',
                'price'=>'4690000',
                'image'=>'c27y.jpg',
                'description'=>'Màn hình: IPS LCD 6.5" HD+
                Hệ điều hành: Android 11
                Camera sau: Chính 50 MP & Phụ 2 MP, 2 MP
                Camera trước: 8 MP
                Chip: Unisoc T618 8 nhân
                RAM: 4 GB
                Bộ nhớ trong: 64 GB
                SIM: 2 Nano SIM Hỗ trợ 4G
                Pin, Sạc: 5000 mAh, 18 W',
                'quantity'=>'9',
                'feature'=>'1',
                'create_at'=>'2021-01-01',
            ],
            [
                'manu_id' =>'5',
                'product_name' =>'Điện thoại Realme C25 series ',
                'price'=>'4690000',
                'image'=>'realme-c25.jpg',
                'description'=>'Màn hình: IPS LCD 6.5" HD+
                Hệ điều hành: Android 11
                Camera sau: Chính 48 MP & Phụ 2 MP, 2 MP
                Camera trước: 8 MP
                Chip: MediaTek Helio G70
                RAM: 4 GB
                Bộ nhớ trong: 128 GB
                SIM: 2 Nano SIM Hỗ trợ 4G
                Pin, Sạc: 6000 mAh, 18 W',
                'quantity'=>'10',
                'feature'=>'0',
                'create_at'=>'2022-4-16',
            ],
            [
                'manu_id' =>'5',
                'product_name' =>'Điện thoại Xiaomi Realme
                 C11 ',
                'price'=>'2990000',
                'image'=>'realme-c11.jpg',
                'description'=>'Màn hình IPS LCD, 6.5", HD+
                Hệ điều hành: Android 11
                Camera sau: 8 MP
                Camera trước: 5 MP
                Chip: Spreadtrum SC9863A
                RAM: 2 GB
                Bộ nhớ trong: 32 GB
                SIM: 2 Nano SIM Hỗ trợ 4G
                Pin, Sạc: 5000 mAh, 10 W',
                'quantity'=>'5',
                'feature'=>'1',
                'create_at'=>'2021-11-02',
            ]
        ]);

=======
            'manu_id' =>'1',
            'product_name' =>'Điện thoại iPhone 13 Pro Max 128GB',
            'price'=>'32390000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-1-2.jpg',
            'description'=>'Màn hình: OLED6.7"Super Retina XDR
            Hệ điều hành:iOS 15
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            Camera sau: 3 camera 12 MP
            Camera trước: 12 MP
            Chip: Apple A15 Bionic
            RAM: 6 GB
            Bộ nhớ trong: 128 GB
            SIM:1 Nano SIM & 1 eSIMHỗ trợ 5G
            Pin, Sạc: 4352 mAh, 20 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);

        DB::table('products')->insert([
            'manu_id' =>'1',
<<<<<<< HEAD
            'name' =>'Điện thoại iPhone 13 Pro 128GB',
=======
            'product_name' =>'Điện thoại iPhone 13 Pro 128GB',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'29990000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/230521/iphone-13-pro-xam-1.jpg',
            'description'=>'Màn hình: OLED6.1"Super Retina XDR
            Hệ điều hành:iOS 15
            Camera sau: 3 camera 12 MP
            Camera trước: 12 MP
            Chip: Apple A15 Bionic
            RAM: 6 GB
            Bộ nhớ trong: 256 GB
            SIM:1 Nano SIM & 1 eSIMHỗ trợ 5G
            Pin, Sạc: 3095 mAh, 20 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);

        DB::table('products')->insert([
            'manu_id' =>'1',
<<<<<<< HEAD
            'name' =>'Điện thoại iPhone 13 128GB',
=======
            'product_name' =>'Điện thoại iPhone 13 128GB',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'22790000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/223602/iphone-13-blue-1-200x200.jpg',
            'description'=>'Màn hình: OLED6.1"Super Retina XDR
            Hệ điều hành:iOS 15
            Camera sau: 3 camera 12 MP
            Camera trước: 12 MP
            Chip: Apple A15 Bionic
            RAM: 6 GB
            Bộ nhớ trong: 128 GB
            SIM:1 Nano SIM & 1 eSIMHỗ trợ 5G
            Pin, Sạc: 3240 mAh, 20 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);

        DB::table('products')->insert([
            'manu_id' =>'1',
<<<<<<< HEAD
            'name' =>'Điện thoại iPhone 12 Pro Max 256GB',
=======
            'product_name' =>'Điện thoại iPhone 12 Pro Max 256GB',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'29990000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/228743/iphone-12-pro-max-256gb-1-org.jpg',
            'description'=>'Màn hình: OLED6.7"Super Retina XDR
            Hệ điều hành:iOS 15
            Camera sau: 3 camera 12 MP
            Camera trước: 12 MP
            Chip: Apple A14 Bionic
            RAM: 6 GB
            Bộ nhớ trong: 256 GB
            SIM:1 Nano SIM & 1 eSIMHỗ trợ 5G
            Pin, Sạc: 3687 mAh, 20 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);

        DB::table('products')->insert([
            'manu_id' =>'1',
<<<<<<< HEAD
            'name' =>'Điện thoại iPhone 12 Pro 256GB',
=======
            'product_name' =>'Điện thoại iPhone 12 Pro 256GB',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'26290000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/228738/iphone-12-pro-vang-dong-new-600x600-200x200.jpg',
            'description'=>'Màn hình: OLED6.1"Super Retina XDR
            Hệ điều hành:iOS 15
            Camera sau: 3 camera 12 MP
            Camera trước: 12 MP
            Chip: Apple A14 Bionic
            RAM: 6 GB
            Bộ nhớ trong: 256 GB
            SIM:1 Nano SIM & 1 eSIMHỗ trợ 5G
            Pin, Sạc: 2815 mAh, 20 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);

        DB::table('products')->insert([
            'manu_id' =>'2',
<<<<<<< HEAD
            'name' =>'Điện thoại Samsung Galaxy S22 Ultra 5G 128GB',
=======
            'product_name' =>'Điện thoại Samsung Galaxy S22 Ultra 5G 128GB',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'30990000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/235838/samsung-galaxy-s22-ultra-1-1.jpg',
            'description'=>'Màn hình: Dynamic AMOLED 2X6.8"Quad HD+ (2K+)
            Hệ điều hành: Android 12
            Camera sau: Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP
            Camera trước: 40 MP
            Chip: Snapdragon 8 Gen 1 8 nhân
            RAM: 8 GB
            Bộ nhớ trong: 128 GB
            SIM: 2 Nano SIM hoặc 1 Nano SIM + 1 eSIMHỗ trợ 5G
            Pin, Sạc: 5000 mAh, 45 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);

        DB::table('products')->insert([
            'manu_id' =>'2',
<<<<<<< HEAD
            'name' =>'Điện thoại Samsung Galaxy S21 Ultra 5G 128GB',
=======
            'product_name' =>'Điện thoại Samsung Galaxy S21 Ultra 5G 128GB',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'25990000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/226316/samsung-galaxy-s21-ultra-bac-600x600-1-200x200.jpg',
            'description'=>'Màn hình: Dynamic AMOLED 2X6.8"Quad HD+ (2K+)
            Hệ điều hành: Android 11
            Camera sau: Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP
            Camera trước: 40 MP
            Chip: Exynos 2100
            RAM: 12 GB
            Bộ nhớ trong: 128 GB
            SIM: 2 Nano SIM hoặc 1 Nano SIM + 1 eSIMHỗ trợ 5G
            Pin, Sạc: 5000 mAh, 25 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);

        DB::table('products')->insert([
            'manu_id' =>'2',
<<<<<<< HEAD
            'name' =>'Điện thoại Samsung Galaxy Z Flip3 5G 128GB',
=======
            'product_name' =>'Điện thoại Samsung Galaxy Z Flip3 5G 128GB',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'19990000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/229949/samsung-galaxy-z-flip-3-black-1-200x200.jpg',
            'description'=>'Màn hình: Dynamic AMOLED 2X6.8"Quad HD+ (2K+)
            Hệ điều hành: Android 11
            Camera sau: 2 camera 12 MP
            Camera trước: 10 MP
            Chip: Snapdragon 888
            RAM: 8 GB
            Bộ nhớ trong: 128 GB
            SIM: 1 Nano SIM & 1 eSIMHỗ trợ 5G
            Pin, Sạc: 3300 mAh, 15 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);

        DB::table('products')->insert([
            'manu_id' =>'2',
<<<<<<< HEAD
            'name' =>'Điện thoại Samsung Galaxy Z Fold3 5G 256GB ',
=======
            'product_name' =>'Điện thoại Samsung Galaxy Z Fold3 5G 256GB ',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'36990000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/226935/samsung-galaxy-z-fold-3-green-1-200x200.jpg',
            'description'=>'Màn hình: Dynamic AMOLED 2XChính 7.6" & Phụ 6.2"Full HD+
            Hệ điều hành: Android 11
            Camera sau: 3 camera 12 MP
            Camera trước: 10 MP & 4 MP
            Chip: Snapdragon 888
            RAM: 12 GB
            Bộ nhớ trong: 256 GB
            SIM: 2 Nano SIM + 1 eSIMHỗ trợ 5G
            Pin, Sạc: 4400 mAh, 25 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);

        DB::table('products')->insert([
            'manu_id' =>'2',
<<<<<<< HEAD
            'name' =>'Điện thoại Samsung Galaxy S22+ 5G 128GB',
=======
            'product_name' =>'Điện thoại Samsung Galaxy S22+ 5G 128GB',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'25990000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/242439/Galaxy-S22-Plus-Black-200x200.jpg',
            'description'=>'Màn hình: Dynamic AMOLED 2X6.6"Full HD+
            Hệ điều hành: Android 12
            Camera sau: Chính 50 MP & Phụ 12 MP, 10 MP
            Camera trước: 10 MP
            Chip: Snapdragon 8 Gen 1 8 nhân
            RAM: 8 GB
            Bộ nhớ trong: 128 GB
            SIM: 2 Nano SIM hoặc 1 Nano SIM + 1 eSIMHỗ trợ 5G
            Pin, Sạc: 4500 mAh,45 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);

        DB::table('products')->insert([
            'manu_id' =>'3',
<<<<<<< HEAD
            'name' =>'Điện thoại OPPO Reno7 Z 5G',
=======
            'product_name' =>'Điện thoại OPPO Reno7 Z 5G',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'10490000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/271717/oppo-reno7-z-5g-thumb-2-1-200x200.jpg',
            'description'=>'Màn hình: AMOLED6.43"Full HD+
            Hệ điều hành: Android 11
            Camera sau: Chính 64 MP & Phụ 2 MP, 2 MP
            Camera trước: 16 MP
            Chip: Snapdragon 695 5G 8 nhân
            RAM: 8 GB
            Bộ nhớ trong: 128 GB
            SIM: 2 Nano SIM (SIM 2 chung khe thẻ nhớ)Hỗ trợ 5G
            Pin, Sạc: 4500 mAh, 33 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);

        DB::table('products')->insert([
            'manu_id' =>'3',
<<<<<<< HEAD
            'name' =>'Điện thoại OPPO Reno6 5G',
=======
            'product_name' =>'Điện thoại OPPO Reno6 5G',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'11990000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/236186/oppo-reno6-5g-aurora-200x200.jpg',
            'description'=>'Màn hình: AMOLED6.43"Full HD+
            Hệ điều hành: Android 11
            Camera sau: Chính 64 MP & Phụ 8 MP, 2 MP
            Camera trước: 32 MP
            Chip: MediaTek Dimensity 900 5G
            RAM: 8 GB
            Bộ nhớ trong: 128 GB
            SIM: 2 Nano SIMHỗ trợ 5G
            Pin, Sạc: 4300 mAh, 65 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);

        DB::table('products')->insert([
            'manu_id' =>'3',
<<<<<<< HEAD
            'name' =>'Điện thoại OPPO Reno5 5G',
=======
            'product_name' =>'Điện thoại OPPO Reno5 5G',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'8990000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/233460/oppo-reno5-5g-black-thumb-200x200.jpg',
            'description'=>'Màn hình: AMOLED6.43"Full HD+
            Hệ điều hành: Android 11
            Camera sau: Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP
            Camera trước: 32 MP
            Chip: Snapdragon 765G
            RAM: 8 GB
            Bộ nhớ trong: 128 GB
            SIM: 2 Nano SIMHỗ trợ 5G
            Pin, Sạc: 4300 mAh, 65 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);
<<<<<<< HEAD
        //1
        DB::table('products')->insert([
            'manu_id' =>'4',
            'name' =>'Điện thoại Xiaomi Redmi 9A',
=======

        DB::table('products')->insert([
            'manu_id' =>'3',
            'product_name' =>'Điện thoại OPPO A16',
            'price'=>'3990000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/240631/oppo-a16-silver-8-600x600.jpg',
            'description'=>'Màn hình IPS LCD 6.52" HD+
            Hệ điều hành: Android 11
            Camera sau: Chính 13 MP & Phụ 2 MP, 2 MP
            Camera trước: 8 MP
            Chip: MediaTek Helio G35
            RAM: 3 GB
            Bộ nhớ trong: 32 GB
            SIM: 2 Nano SIM Hỗ trợ 4G
            Pin, Sạc: 5000 mAh, 10 W',
            'quantity'=>'10',
            'feature'=>'0',
            'create_at'=>'2022-04-09',
        ]);
   
        DB::table('products')->insert([
            'manu_id' =>'3',
            'product_name' =>'Điện thoại OPPO A15s',
            'price'=>'4290000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/229948/TimerThumb/oppo-a15s-(10).jpg',
            'description'=>'Màn hình IPS LCD 6.52" HD+
            Hệ điều hành: Android 11
            Camera sau: Chính 13 MP & Phụ 2 MP, 2 MP
            Camera trước: 8 MP
            Chip: MediaTek Helio P35
            RAM: 4 GB
            Bộ nhớ trong: 64 GB
            SIM: 2 Nano SIM Hỗ trợ 4G
            Pin, Sạc: 4230 mAh, 10 W',
            'quantity'=>'10',
            'feature'=>'0',
            'create_at'=>'2022-04-09',
        ]);
  
        DB::table('products')->insert([
            'manu_id' =>'4',
            'product_name' =>'Điện thoại Xiaomi Redmi 9A',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'2490000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/218734/xiaomi-redmi-9a-grey-600x600-1-600x600.jpg',
            'description'=>'Màn hình: IPS LCD 6.53" HD+
            Hệ điều hành: Android 10
            Camera sau: 13 MP
            Camera trước: 5 MP
            Chip: MediaTek Helio G25
            RAM: 2 GB
            Bộ nhớ trong: 32 GB
            SIM: 2 Nano SIMHỗ trợ 4G
            Pin, Sạc: 5000 mAh, 10 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);
<<<<<<< HEAD
        //2
        DB::table('products')->insert([
            'manu_id' =>'4',
            'name' =>'Điện thoại Xiaomi Redmi 10',
=======
     
        DB::table('products')->insert([
            'manu_id' =>'4',
            'product_name' =>'Điện thoại Xiaomi Redmi 10',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'4290000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/249081/redmi-10-gray-600x600.jpg',
            'description'=>'Màn hình: IPS LCD 6.5" Full HD+
            Hệ điều hành: Android 11
            Camera sau: Chính 50 MP & Phụ 8 MP, 2 MP, 2 MP
            Camera trước: 8 MP
            Chip: MediaTek Helio G88 8 nhân
            RAM: 4 GB
            Bộ nhớ trong: 128 GB
            SIM: 2 Nano SIMHỗ trợ 4G
            Pin, Sạc: 5000 mAh, 18 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);
<<<<<<< HEAD
        //3
        DB::table('products')->insert([
            'manu_id' =>'4',
            'name' =>'Điện thoại Xiaomi Mi 11 Lite',
=======
    
        DB::table('products')->insert([
            'manu_id' =>'4',
            'product_name' =>'Điện thoại Xiaomi Mi 11 Lite',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'7990000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/233241/xiaomi-mi-11-lite-4g-blue-600x600.jpg',
            'description'=>'Màn hình: AMOLED 6.55" Full HD+
            Hệ điều hành: Android 11
            Camera sau: Chính 64 MP & Phụ 8 MP, 5 MP
            Camera trước: 16 MP
            Chip: Snapdragon 732G
            RAM: 8 GB
            Bộ nhớ trong: 128 GB
            SIM: 2 Nano SIM Hỗ trợ 4G
            Pin, Sạc: 4250 mAh, 33 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);
<<<<<<< HEAD
        //4
        DB::table('products')->insert([
            'manu_id' =>'4',
            'name' =>'Điện thoại Xiaomi Redmi Note 10S',
=======
    
        DB::table('products')->insert([
            'manu_id' =>'4',
            'product_name' =>'Điện thoại Xiaomi Redmi Note 10S',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'6490000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/235969/TimerThumb/xiaomi-redmi-note-10s-(4).jpg',
            'description'=>'Màn hình: AMOLED 6.43" Full HD+
            Hệ điều hành: Android 11
            Camera sau: Chính 64 MP & Phụ 8 MP, 2 MP, 2MP
            Camera trước: 13 MP
            Chip: MediaTek Helio G95
            RAM: 8 GB
            Bộ nhớ trong: 128 GB
            SIM: 2 Nano SIM Hỗ trợ 4G
            Pin, Sạc: 5000 mAh, 33 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);
<<<<<<< HEAD
        //5
        DB::table('products')->insert([
            'manu_id' =>'4',
            'name' =>'Điện thoại Xiaomi Redmi Note 10S ',
=======
     
        DB::table('products')->insert([
            'manu_id' =>'4',
            'product_name' =>'Điện thoại Xiaomi Redmi Note 10S ',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'5990000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/262534/TimerThumb/xiaomi-redmi-note-10s-6gb-(2).jpg',
            'description'=>'Màn hình: AMOLED 6.43" Full HD+
            Hệ điều hành: Android 11
            Camera sau: Chính 64 MP & Phụ 8 MP, 2 MP, 2MP
            Camera trước: 13 MP
            Chip: MediaTek Helio G95
            RAM: 6 GB
            Bộ nhớ trong: 128 GB
            SIM: 2 Nano SIM Hỗ trợ 4G
            Pin, Sạc: 5000 mAh, 33 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);
<<<<<<< HEAD
        //1
        DB::table('products')->insert([
            'manu_id' =>'5',
            'name' =>'Điện thoại Realme C35 ',
=======
     
        DB::table('products')->insert([
            'manu_id' =>'5',
            'product_name' =>'Điện thoại Realme C35 ',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'3990000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/261888/realme-c35-thumb-new-600x600.jpg',
            'description'=>'Màn hình: IPS LCD 6.6" Full HD+
            Hệ điều hành: Android 11
            Camera sau: Chính 50 MP & Phụ 2 MP, 0.3 MP
            Camera trước: 8 MP
            Chip: Unisoc T616 8 nhân
            RAM: 4 GB
            Bộ nhớ trong: 64 GB
            SIM: 2 Nano SIM Hỗ trợ 4G
            Pin, Sạc: 5000 mAh, 18 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);
<<<<<<< HEAD
        //2
        DB::table('products')->insert([
            'manu_id' =>'5',
            'name' =>'Điện thoại Realme 7 Pro ',
=======
     
        DB::table('products')->insert([
            'manu_id' =>'5',
            'product_name' =>'Điện thoại Realme 7 Pro ',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'8990000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/227689/realme-7-pro-bac-600x600.jpg',
            'description'=>'Màn hình: Super AMOLED 6.4" Full HD+
            Hệ điều hành: Android 11
            Camera sau: Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP
            Camera trước: 32 MP
            Chip: Snapdragon 720G
            RAM: 8 GB
            Bộ nhớ trong: 128 GB
            SIM: 2 Nano SIM Hỗ trợ 4G
            Pin, Sạc: 4500 mAh, 65 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);
<<<<<<< HEAD
        //3
        DB::table('products')->insert([
            'manu_id' =>'5',
            'name' =>'Điện thoại Realme C25Y ',
=======
   
        DB::table('products')->insert([
            'manu_id' =>'5',
            'product_name' =>'Điện thoại Realme C25Y ',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'4690000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/265313/realme-c25y-64gb-xanh-thumb-600x600.jpeg',
            'description'=>'Màn hình: IPS LCD 6.5" HD+
            Hệ điều hành: Android 11
            Camera sau: Chính 50 MP & Phụ 2 MP, 2 MP
            Camera trước: 8 MP
            Chip: Unisoc T618 8 nhân
            RAM: 4 GB
            Bộ nhớ trong: 64 GB
            SIM: 2 Nano SIM Hỗ trợ 4G
            Pin, Sạc: 5000 mAh, 18 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);
<<<<<<< HEAD
        //4
        DB::table('products')->insert([
            'manu_id' =>'5',
            'name' =>'Điện thoại Realme C25 series ',
=======

        DB::table('products')->insert([
            'manu_id' =>'5',
            'product_name' =>'Điện thoại Realme C25 series ',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'4690000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/235996/realme-c25-black-600x600-600x600.jpg',
            'description'=>'Màn hình: IPS LCD 6.5" HD+
            Hệ điều hành: Android 11
            Camera sau: Chính 48 MP & Phụ 2 MP, 2 MP
            Camera trước: 8 MP
            Chip: MediaTek Helio G70
            RAM: 4 GB
            Bộ nhớ trong: 128 GB
            SIM: 2 Nano SIM Hỗ trợ 4G
            Pin, Sạc: 6000 mAh, 18 W',
            'quantity'=>'10',
            'feature'=>'0',
            'create_at'=>'2022-04-09',
        ]);
<<<<<<< HEAD
        //5
        DB::table('products')->insert([
            'manu_id' =>'5',
            'name' =>'Điện thoại Realme C11',
=======
   
        DB::table('products')->insert([
            'manu_id' =>'5',
            'product_name' =>'Điện thoại Realme C11',
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            'price'=>'2990000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/261957/realme-c11-2021-2gb-32gb-xanh-600x600.jpg',
            'description'=>'Màn hình IPS LCD, 6.5", HD+
            Hệ điều hành: Android 11
            Camera sau: 8 MP
            Camera trước: 5 MP
            Chip: Spreadtrum SC9863A
            RAM: 2 GB
            Bộ nhớ trong: 32 GB
            SIM: 2 Nano SIM Hỗ trợ 4G
            Pin, Sạc: 5000 mAh, 10 W',
            'quantity'=>'10',
            'feature'=>'1',
            'create_at'=>'2022-04-09',
        ]);
<<<<<<< HEAD
        //1 
        DB::table('products')->insert([
            'manu_id' =>'3',
            'name' =>'Điện thoại OPPO A16',
            'price'=>'3990000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/240631/oppo-a16-silver-8-600x600.jpg',
            'description'=>'Màn hình IPS LCD 6.52" HD+
            Hệ điều hành: Android 11
            Camera sau: Chính 13 MP & Phụ 2 MP, 2 MP
            Camera trước: 8 MP
            Chip: MediaTek Helio G35
            RAM: 3 GB
            Bộ nhớ trong: 32 GB
            SIM: 2 Nano SIM Hỗ trợ 4G
            Pin, Sạc: 5000 mAh, 10 W',
            'quantity'=>'10',
            'feature'=>'0',
            'create_at'=>'2022-04-09',
        ]);
        //2
        DB::table('products')->insert([
            'manu_id' =>'3',
            'name' =>'Điện thoại OPPO A15s',
            'price'=>'4290000',
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/229948/TimerThumb/oppo-a15s-(10).jpg',
            'description'=>'Màn hình IPS LCD 6.52" HD+
            Hệ điều hành: Android 11
            Camera sau: Chính 13 MP & Phụ 2 MP, 2 MP
            Camera trước: 8 MP
            Chip: MediaTek Helio P35
            RAM: 4 GB
            Bộ nhớ trong: 64 GB
            SIM: 2 Nano SIM Hỗ trợ 4G
            Pin, Sạc: 4230 mAh, 10 W',
            'quantity'=>'10',
            'feature'=>'0',
            'create_at'=>'2022-04-09',
        ]);
=======
        
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
>>>>>>> 4c7d1aa5cb90f964149f542c10252e1643ebbbec
    }
}
