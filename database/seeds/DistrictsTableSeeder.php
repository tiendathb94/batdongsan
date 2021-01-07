<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('districts')->delete();

        \DB::table('districts')->insert(array(
            0 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 1,
                    'name' => 'Quận Ba Đình',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            1 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 2,
                    'name' => 'Quận Hoàn Kiếm',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            2 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 3,
                    'name' => 'Quận Tây Hồ',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            3 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 4,
                    'name' => 'Quận Long Biên',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            4 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 5,
                    'name' => 'Quận Cầu Giấy',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            5 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 6,
                    'name' => 'Quận Đống Đa',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            6 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 7,
                    'name' => 'Quận Hai Bà Trưng',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            7 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 8,
                    'name' => 'Quận Hoàng Mai',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            8 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 9,
                    'name' => 'Quận Thanh Xuân',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            9 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 16,
                    'name' => 'Huyện Sóc Sơn',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            10 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 17,
                    'name' => 'Huyện Đông Anh',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            11 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 18,
                    'name' => 'Huyện Gia Lâm',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            12 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 19,
                    'name' => 'Quận Nam Từ Liêm',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            13 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 20,
                    'name' => 'Huyện Thanh Trì',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            14 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 21,
                    'name' => 'Quận Bắc Từ Liêm',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            15 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 24,
                    'name' => 'Thành phố Hà Giang',
                    'province_id' => 2,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            16 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 26,
                    'name' => 'Huyện Đồng Văn',
                    'province_id' => 2,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            17 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 27,
                    'name' => 'Huyện Mèo Vạc',
                    'province_id' => 2,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            18 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 28,
                    'name' => 'Huyện Yên Minh',
                    'province_id' => 2,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            19 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 29,
                    'name' => 'Huyện Quản Bạ',
                    'province_id' => 2,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            20 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 30,
                    'name' => 'Huyện Vị Xuyên',
                    'province_id' => 2,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            21 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 31,
                    'name' => 'Huyện Bắc Mê',
                    'province_id' => 2,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            22 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 32,
                    'name' => 'Huyện Hoàng Su Phì',
                    'province_id' => 2,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            23 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 33,
                    'name' => 'Huyện Xín Mần',
                    'province_id' => 2,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            24 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 34,
                    'name' => 'Huyện Bắc Quang',
                    'province_id' => 2,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            25 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 35,
                    'name' => 'Huyện Quang Bình',
                    'province_id' => 2,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            26 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 40,
                    'name' => 'Thành phố Cao Bằng',
                    'province_id' => 4,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            27 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 42,
                    'name' => 'Huyện Bảo Lâm',
                    'province_id' => 4,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            28 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 43,
                    'name' => 'Huyện Bảo Lạc',
                    'province_id' => 4,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            29 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 44,
                    'name' => 'Huyện Thông Nông',
                    'province_id' => 4,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            30 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 45,
                    'name' => 'Huyện Hà Quảng',
                    'province_id' => 4,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            31 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 46,
                    'name' => 'Huyện Trà Lĩnh',
                    'province_id' => 4,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            32 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 47,
                    'name' => 'Huyện Trùng Khánh',
                    'province_id' => 4,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            33 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 48,
                    'name' => 'Huyện Hạ Lang',
                    'province_id' => 4,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            34 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 49,
                    'name' => 'Huyện Quảng Uyên',
                    'province_id' => 4,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            35 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 50,
                    'name' => 'Huyện Phục Hòa',
                    'province_id' => 4,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            36 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 51,
                    'name' => 'Huyện Hòa An',
                    'province_id' => 4,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            37 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 52,
                    'name' => 'Huyện Nguyên Bình',
                    'province_id' => 4,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            38 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 53,
                    'name' => 'Huyện Thạch An',
                    'province_id' => 4,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            39 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 58,
                    'name' => 'Thành Phố Bắc Kạn',
                    'province_id' => 6,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            40 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 60,
                    'name' => 'Huyện Pác Nặm',
                    'province_id' => 6,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            41 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 61,
                    'name' => 'Huyện Ba Bể',
                    'province_id' => 6,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            42 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 62,
                    'name' => 'Huyện Ngân Sơn',
                    'province_id' => 6,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            43 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 63,
                    'name' => 'Huyện Bạch Thông',
                    'province_id' => 6,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            44 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 64,
                    'name' => 'Huyện Chợ Đồn',
                    'province_id' => 6,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            45 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 65,
                    'name' => 'Huyện Chợ Mới',
                    'province_id' => 6,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            46 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 66,
                    'name' => 'Huyện Na Rì',
                    'province_id' => 6,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            47 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 70,
                    'name' => 'Thành phố Tuyên Quang',
                    'province_id' => 8,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            48 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 71,
                    'name' => 'Huyện Lâm Bình',
                    'province_id' => 8,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            49 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 72,
                    'name' => 'Huyện Na Hang',
                    'province_id' => 8,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            50 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 73,
                    'name' => 'Huyện Chiêm Hóa',
                    'province_id' => 8,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            51 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 74,
                    'name' => 'Huyện Hàm Yên',
                    'province_id' => 8,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            52 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 75,
                    'name' => 'Huyện Yên Sơn',
                    'province_id' => 8,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            53 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 76,
                    'name' => 'Huyện Sơn Dương',
                    'province_id' => 8,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            54 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 80,
                    'name' => 'Thành phố Lào Cai',
                    'province_id' => 10,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            55 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 82,
                    'name' => 'Huyện Bát Xát',
                    'province_id' => 10,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            56 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 83,
                    'name' => 'Huyện Mường Khương',
                    'province_id' => 10,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            57 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 84,
                    'name' => 'Huyện Si Ma Cai',
                    'province_id' => 10,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            58 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 85,
                    'name' => 'Huyện Bắc Hà',
                    'province_id' => 10,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            59 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 86,
                    'name' => 'Huyện Bảo Thắng',
                    'province_id' => 10,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            60 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 87,
                    'name' => 'Huyện Bảo Yên',
                    'province_id' => 10,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            61 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 88,
                    'name' => 'Huyện Sa Pa',
                    'province_id' => 10,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            62 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 89,
                    'name' => 'Huyện Văn Bàn',
                    'province_id' => 10,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            63 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 94,
                    'name' => 'Thành phố Điện Biên Phủ',
                    'province_id' => 11,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            64 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 95,
                    'name' => 'Thị Xã Mường Lay',
                    'province_id' => 11,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            65 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 96,
                    'name' => 'Huyện Mường Nhé',
                    'province_id' => 11,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            66 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 97,
                    'name' => 'Huyện Mường Chà',
                    'province_id' => 11,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            67 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 98,
                    'name' => 'Huyện Tủa Chùa',
                    'province_id' => 11,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            68 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 99,
                    'name' => 'Huyện Tuần Giáo',
                    'province_id' => 11,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            69 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 100,
                    'name' => 'Huyện Điện Biên',
                    'province_id' => 11,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            70 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 101,
                    'name' => 'Huyện Điện Biên Đông',
                    'province_id' => 11,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            71 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 102,
                    'name' => 'Huyện Mường Ảng',
                    'province_id' => 11,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            72 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 103,
                    'name' => 'Huyện Nậm Pồ',
                    'province_id' => 11,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            73 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 105,
                    'name' => 'Thành phố Lai Châu',
                    'province_id' => 12,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            74 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 106,
                    'name' => 'Huyện Tam Đường',
                    'province_id' => 12,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            75 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 107,
                    'name' => 'Huyện Mường Tè',
                    'province_id' => 12,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            76 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 108,
                    'name' => 'Huyện Sìn Hồ',
                    'province_id' => 12,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            77 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 109,
                    'name' => 'Huyện Phong Thổ',
                    'province_id' => 12,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            78 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 110,
                    'name' => 'Huyện Than Uyên',
                    'province_id' => 12,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            79 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 111,
                    'name' => 'Huyện Tân Uyên',
                    'province_id' => 12,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            80 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 112,
                    'name' => 'Huyện Nậm Nhùn',
                    'province_id' => 12,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            81 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 116,
                    'name' => 'Thành phố Sơn La',
                    'province_id' => 14,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            82 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 118,
                    'name' => 'Huyện Quỳnh Nhai',
                    'province_id' => 14,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            83 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 119,
                    'name' => 'Huyện Thuận Châu',
                    'province_id' => 14,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            84 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 120,
                    'name' => 'Huyện Mường La',
                    'province_id' => 14,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            85 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 121,
                    'name' => 'Huyện Bắc Yên',
                    'province_id' => 14,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            86 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 122,
                    'name' => 'Huyện Phù Yên',
                    'province_id' => 14,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            87 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 123,
                    'name' => 'Huyện Mộc Châu',
                    'province_id' => 14,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            88 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 124,
                    'name' => 'Huyện Yên Châu',
                    'province_id' => 14,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            89 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 125,
                    'name' => 'Huyện Mai Sơn',
                    'province_id' => 14,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            90 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 126,
                    'name' => 'Huyện Sông Mã',
                    'province_id' => 14,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            91 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 127,
                    'name' => 'Huyện Sốp Cộp',
                    'province_id' => 14,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            92 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 128,
                    'name' => 'Huyện Vân Hồ',
                    'province_id' => 14,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            93 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 132,
                    'name' => 'Thành phố Yên Bái',
                    'province_id' => 15,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            94 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 133,
                    'name' => 'Thị xã Nghĩa Lộ',
                    'province_id' => 15,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            95 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 135,
                    'name' => 'Huyện Lục Yên',
                    'province_id' => 15,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            96 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 136,
                    'name' => 'Huyện Văn Yên',
                    'province_id' => 15,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            97 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 137,
                    'name' => 'Huyện Mù Căng Chải',
                    'province_id' => 15,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            98 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 138,
                    'name' => 'Huyện Trấn Yên',
                    'province_id' => 15,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            99 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 139,
                    'name' => 'Huyện Trạm Tấu',
                    'province_id' => 15,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            100 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 140,
                    'name' => 'Huyện Văn Chấn',
                    'province_id' => 15,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            101 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 141,
                    'name' => 'Huyện Yên Bình',
                    'province_id' => 15,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            102 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 148,
                    'name' => 'Thành phố Hòa Bình',
                    'province_id' => 17,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            103 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 150,
                    'name' => 'Huyện Đà Bắc',
                    'province_id' => 17,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            104 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 151,
                    'name' => 'Huyện Kỳ Sơn',
                    'province_id' => 17,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            105 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 152,
                    'name' => 'Huyện Lương Sơn',
                    'province_id' => 17,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            106 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 153,
                    'name' => 'Huyện Kim Bôi',
                    'province_id' => 17,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            107 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 154,
                    'name' => 'Huyện Cao Phong',
                    'province_id' => 17,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            108 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 155,
                    'name' => 'Huyện Tân Lạc',
                    'province_id' => 17,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            109 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 156,
                    'name' => 'Huyện Mai Châu',
                    'province_id' => 17,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            110 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 157,
                    'name' => 'Huyện Lạc Sơn',
                    'province_id' => 17,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            111 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 158,
                    'name' => 'Huyện Yên Thủy',
                    'province_id' => 17,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            112 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 159,
                    'name' => 'Huyện Lạc Thủy',
                    'province_id' => 17,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            113 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 164,
                    'name' => 'Thành phố Thái Nguyên',
                    'province_id' => 19,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            114 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 165,
                    'name' => 'Thành phố Sông Công',
                    'province_id' => 19,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            115 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 167,
                    'name' => 'Huyện Định Hóa',
                    'province_id' => 19,
                    'updated_at' => '2020-03-23 14:35:36',
                ),
            116 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 168,
                    'name' => 'Huyện Phú Lương',
                    'province_id' => 19,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            117 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 169,
                    'name' => 'Huyện Đồng Hỷ',
                    'province_id' => 19,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            118 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 170,
                    'name' => 'Huyện Võ Nhai',
                    'province_id' => 19,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            119 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 171,
                    'name' => 'Huyện Đại Từ',
                    'province_id' => 19,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            120 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 172,
                    'name' => 'Thị xã Phổ Yên',
                    'province_id' => 19,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            121 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 173,
                    'name' => 'Huyện Phú Bình',
                    'province_id' => 19,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            122 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 178,
                    'name' => 'Thành phố Lạng Sơn',
                    'province_id' => 20,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            123 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 180,
                    'name' => 'Huyện Tràng Định',
                    'province_id' => 20,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            124 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 181,
                    'name' => 'Huyện Bình Gia',
                    'province_id' => 20,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            125 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 182,
                    'name' => 'Huyện Văn Lãng',
                    'province_id' => 20,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            126 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 183,
                    'name' => 'Huyện Cao Lộc',
                    'province_id' => 20,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            127 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 184,
                    'name' => 'Huyện Văn Quan',
                    'province_id' => 20,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            128 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 185,
                    'name' => 'Huyện Bắc Sơn',
                    'province_id' => 20,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            129 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 186,
                    'name' => 'Huyện Hữu Lũng',
                    'province_id' => 20,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            130 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 187,
                    'name' => 'Huyện Chi Lăng',
                    'province_id' => 20,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            131 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 188,
                    'name' => 'Huyện Lộc Bình',
                    'province_id' => 20,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            132 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 189,
                    'name' => 'Huyện Đình Lập',
                    'province_id' => 20,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            133 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 193,
                    'name' => 'Thành phố Hạ Long',
                    'province_id' => 22,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            134 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 194,
                    'name' => 'Thành phố Móng Cái',
                    'province_id' => 22,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            135 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 195,
                    'name' => 'Thành phố Cẩm Phả',
                    'province_id' => 22,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            136 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 196,
                    'name' => 'Thành phố Uông Bí',
                    'province_id' => 22,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            137 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 198,
                    'name' => 'Huyện Bình Liêu',
                    'province_id' => 22,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            138 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 199,
                    'name' => 'Huyện Tiên Yên',
                    'province_id' => 22,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            139 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 200,
                    'name' => 'Huyện Đầm Hà',
                    'province_id' => 22,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            140 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 201,
                    'name' => 'Huyện Hải Hà',
                    'province_id' => 22,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            141 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 202,
                    'name' => 'Huyện Ba Chẽ',
                    'province_id' => 22,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            142 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 203,
                    'name' => 'Huyện Vân Đồn',
                    'province_id' => 22,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            143 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 204,
                    'name' => 'Huyện Hoành Bồ',
                    'province_id' => 22,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            144 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 205,
                    'name' => 'Thị xã Đông Triều',
                    'province_id' => 22,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            145 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 206,
                    'name' => 'Thị xã Quảng Yên',
                    'province_id' => 22,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            146 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 207,
                    'name' => 'Huyện Cô Tô',
                    'province_id' => 22,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            147 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 213,
                    'name' => 'Thành phố Bắc Giang',
                    'province_id' => 24,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            148 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 215,
                    'name' => 'Huyện Yên Thế',
                    'province_id' => 24,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            149 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 216,
                    'name' => 'Huyện Tân Yên',
                    'province_id' => 24,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            150 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 217,
                    'name' => 'Huyện Lạng Giang',
                    'province_id' => 24,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            151 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 218,
                    'name' => 'Huyện Lục Nam',
                    'province_id' => 24,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            152 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 219,
                    'name' => 'Huyện Lục Ngạn',
                    'province_id' => 24,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            153 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 220,
                    'name' => 'Huyện Sơn Động',
                    'province_id' => 24,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            154 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 221,
                    'name' => 'Huyện Yên Dũng',
                    'province_id' => 24,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            155 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 222,
                    'name' => 'Huyện Việt Yên',
                    'province_id' => 24,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            156 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 223,
                    'name' => 'Huyện Hiệp Hòa',
                    'province_id' => 24,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            157 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 227,
                    'name' => 'Thành phố Việt Trì',
                    'province_id' => 25,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            158 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 228,
                    'name' => 'Thị xã Phú Thọ',
                    'province_id' => 25,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            159 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 230,
                    'name' => 'Huyện Đoan Hùng',
                    'province_id' => 25,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            160 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 231,
                    'name' => 'Huyện Hạ Hòa',
                    'province_id' => 25,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            161 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 232,
                    'name' => 'Huyện Thanh Ba',
                    'province_id' => 25,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            162 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 233,
                    'name' => 'Huyện Phù Ninh',
                    'province_id' => 25,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            163 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 234,
                    'name' => 'Huyện Yên Lập',
                    'province_id' => 25,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            164 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 235,
                    'name' => 'Huyện Cẩm Khê',
                    'province_id' => 25,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            165 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 236,
                    'name' => 'Huyện Tam Nông',
                    'province_id' => 25,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            166 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 237,
                    'name' => 'Huyện Lâm Thao',
                    'province_id' => 25,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            167 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 238,
                    'name' => 'Huyện Thanh Sơn',
                    'province_id' => 25,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            168 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 239,
                    'name' => 'Huyện Thanh Thuỷ',
                    'province_id' => 25,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            169 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 240,
                    'name' => 'Huyện Tân Sơn',
                    'province_id' => 25,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            170 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 243,
                    'name' => 'Thành phố Vĩnh Yên',
                    'province_id' => 26,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            171 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 244,
                    'name' => 'Thị xã Phúc Yên',
                    'province_id' => 26,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            172 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 246,
                    'name' => 'Huyện Lập Thạch',
                    'province_id' => 26,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            173 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 247,
                    'name' => 'Huyện Tam Dương',
                    'province_id' => 26,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            174 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 248,
                    'name' => 'Huyện Tam Đảo',
                    'province_id' => 26,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            175 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 249,
                    'name' => 'Huyện Bình Xuyên',
                    'province_id' => 26,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            176 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 250,
                    'name' => 'Huyện Mê Linh',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            177 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 251,
                    'name' => 'Huyện Yên Lạc',
                    'province_id' => 26,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            178 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 252,
                    'name' => 'Huyện Vĩnh Tường',
                    'province_id' => 26,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            179 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 253,
                    'name' => 'Huyện Sông Lô',
                    'province_id' => 26,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            180 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 256,
                    'name' => 'Thành phố Bắc Ninh',
                    'province_id' => 27,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            181 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 258,
                    'name' => 'Huyện Yên Phong',
                    'province_id' => 27,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            182 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 259,
                    'name' => 'Huyện Quế Võ',
                    'province_id' => 27,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            183 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 260,
                    'name' => 'Huyện Tiên Du',
                    'province_id' => 27,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            184 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 261,
                    'name' => 'Thị xã Từ Sơn',
                    'province_id' => 27,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            185 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 262,
                    'name' => 'Huyện Thuận Thành',
                    'province_id' => 27,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            186 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 263,
                    'name' => 'Huyện Gia Bình',
                    'province_id' => 27,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            187 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 264,
                    'name' => 'Huyện Lương Tài',
                    'province_id' => 27,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            188 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 268,
                    'name' => 'Quận Hà Đông',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            189 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 269,
                    'name' => 'Thị xã Sơn Tây',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            190 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 271,
                    'name' => 'Huyện Ba Vì',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            191 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 272,
                    'name' => 'Huyện Phúc Thọ',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            192 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 273,
                    'name' => 'Huyện Đan Phượng',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            193 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 274,
                    'name' => 'Huyện Hoài Đức',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            194 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 275,
                    'name' => 'Huyện Quốc Oai',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            195 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 276,
                    'name' => 'Huyện Thạch Thất',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            196 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 277,
                    'name' => 'Huyện Chương Mỹ',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            197 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 278,
                    'name' => 'Huyện Thanh Oai',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            198 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 279,
                    'name' => 'Huyện Thường Tín',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            199 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 280,
                    'name' => 'Huyện Phú Xuyên',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            200 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 281,
                    'name' => 'Huyện Ứng Hòa',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            201 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 282,
                    'name' => 'Huyện Mỹ Đức',
                    'province_id' => 1,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            202 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 288,
                    'name' => 'Thành phố Hải Dương',
                    'province_id' => 30,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            203 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 290,
                    'name' => 'Thị xã Chí Linh',
                    'province_id' => 30,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            204 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 291,
                    'name' => 'Huyện Nam Sách',
                    'province_id' => 30,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            205 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 292,
                    'name' => 'Huyện Kinh Môn',
                    'province_id' => 30,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            206 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 293,
                    'name' => 'Huyện Kim Thành',
                    'province_id' => 30,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            207 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 294,
                    'name' => 'Huyện Thanh Hà',
                    'province_id' => 30,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            208 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 295,
                    'name' => 'Huyện Cẩm Giàng',
                    'province_id' => 30,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            209 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 296,
                    'name' => 'Huyện Bình Giang',
                    'province_id' => 30,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            210 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 297,
                    'name' => 'Huyện Gia Lộc',
                    'province_id' => 30,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            211 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 298,
                    'name' => 'Huyện Tứ Kỳ',
                    'province_id' => 30,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            212 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 299,
                    'name' => 'Huyện Ninh Giang',
                    'province_id' => 30,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            213 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 300,
                    'name' => 'Huyện Thanh Miện',
                    'province_id' => 30,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            214 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 303,
                    'name' => 'Quận Hồng Bàng',
                    'province_id' => 31,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            215 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 304,
                    'name' => 'Quận Ngô Quyền',
                    'province_id' => 31,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            216 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 305,
                    'name' => 'Quận Lê Chân',
                    'province_id' => 31,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            217 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 306,
                    'name' => 'Quận Hải An',
                    'province_id' => 31,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            218 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 307,
                    'name' => 'Quận Kiến An',
                    'province_id' => 31,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            219 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 308,
                    'name' => 'Quận Đồ Sơn',
                    'province_id' => 31,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            220 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 309,
                    'name' => 'Quận Dương Kinh',
                    'province_id' => 31,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            221 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 311,
                    'name' => 'Huyện Thủy Nguyên',
                    'province_id' => 31,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            222 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 312,
                    'name' => 'Huyện An Dương',
                    'province_id' => 31,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            223 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 313,
                    'name' => 'Huyện An Lão',
                    'province_id' => 31,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            224 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 314,
                    'name' => 'Huyện Kiến Thuỵ',
                    'province_id' => 31,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            225 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 315,
                    'name' => 'Huyện Tiên Lãng',
                    'province_id' => 31,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            226 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 316,
                    'name' => 'Huyện Vĩnh Bảo',
                    'province_id' => 31,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            227 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 317,
                    'name' => 'Huyện Cát Hải',
                    'province_id' => 31,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            228 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 318,
                    'name' => 'Huyện Bạch Long Vĩ',
                    'province_id' => 31,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            229 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 323,
                    'name' => 'Thành phố Hưng Yên',
                    'province_id' => 33,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            230 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 325,
                    'name' => 'Huyện Văn Lâm',
                    'province_id' => 33,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            231 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 326,
                    'name' => 'Huyện Văn Giang',
                    'province_id' => 33,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            232 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 327,
                    'name' => 'Huyện Yên Mỹ',
                    'province_id' => 33,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            233 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 328,
                    'name' => 'Huyện Mỹ Hào',
                    'province_id' => 33,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            234 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 329,
                    'name' => 'Huyện Ân Thi',
                    'province_id' => 33,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            235 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 330,
                    'name' => 'Huyện Khoái Châu',
                    'province_id' => 33,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            236 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 331,
                    'name' => 'Huyện Kim Động',
                    'province_id' => 33,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            237 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 332,
                    'name' => 'Huyện Tiên Lữ',
                    'province_id' => 33,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            238 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 333,
                    'name' => 'Huyện Phù Cừ',
                    'province_id' => 33,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            239 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 336,
                    'name' => 'Thành phố Thái Bình',
                    'province_id' => 34,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            240 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 338,
                    'name' => 'Huyện Quỳnh Phụ',
                    'province_id' => 34,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            241 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 339,
                    'name' => 'Huyện Hưng Hà',
                    'province_id' => 34,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            242 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 340,
                    'name' => 'Huyện Đông Hưng',
                    'province_id' => 34,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            243 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 341,
                    'name' => 'Huyện Thái Thụy',
                    'province_id' => 34,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            244 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 342,
                    'name' => 'Huyện Tiền Hải',
                    'province_id' => 34,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            245 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 343,
                    'name' => 'Huyện Kiến Xương',
                    'province_id' => 34,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            246 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 344,
                    'name' => 'Huyện Vũ Thư',
                    'province_id' => 34,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            247 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 347,
                    'name' => 'Thành phố Phủ Lý',
                    'province_id' => 35,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            248 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 349,
                    'name' => 'Huyện Duy Tiên',
                    'province_id' => 35,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            249 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 350,
                    'name' => 'Huyện Kim Bảng',
                    'province_id' => 35,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            250 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 351,
                    'name' => 'Huyện Thanh Liêm',
                    'province_id' => 35,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            251 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 352,
                    'name' => 'Huyện Bình Lục',
                    'province_id' => 35,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            252 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 353,
                    'name' => 'Huyện Lý Nhân',
                    'province_id' => 35,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            253 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 356,
                    'name' => 'Thành phố Nam Định',
                    'province_id' => 36,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            254 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 358,
                    'name' => 'Huyện Mỹ Lộc',
                    'province_id' => 36,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            255 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 359,
                    'name' => 'Huyện Vụ Bản',
                    'province_id' => 36,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            256 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 360,
                    'name' => 'Huyện Ý Yên',
                    'province_id' => 36,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            257 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 361,
                    'name' => 'Huyện Nghĩa Hưng',
                    'province_id' => 36,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            258 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 362,
                    'name' => 'Huyện Nam Trực',
                    'province_id' => 36,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            259 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 363,
                    'name' => 'Huyện Trực Ninh',
                    'province_id' => 36,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            260 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 364,
                    'name' => 'Huyện Xuân Trường',
                    'province_id' => 36,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            261 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 365,
                    'name' => 'Huyện Giao Thủy',
                    'province_id' => 36,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            262 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 366,
                    'name' => 'Huyện Hải Hậu',
                    'province_id' => 36,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            263 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 369,
                    'name' => 'Thành phố Ninh Bình',
                    'province_id' => 37,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            264 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 370,
                    'name' => 'Thành phố Tam Điệp',
                    'province_id' => 37,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            265 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 372,
                    'name' => 'Huyện Nho Quan',
                    'province_id' => 37,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            266 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 373,
                    'name' => 'Huyện Gia Viễn',
                    'province_id' => 37,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            267 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 374,
                    'name' => 'Huyện Hoa Lư',
                    'province_id' => 37,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            268 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 375,
                    'name' => 'Huyện Yên Khánh',
                    'province_id' => 37,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            269 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 376,
                    'name' => 'Huyện Kim Sơn',
                    'province_id' => 37,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            270 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 377,
                    'name' => 'Huyện Yên Mô',
                    'province_id' => 37,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            271 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 380,
                    'name' => 'Thành phố Thanh Hóa',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            272 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 381,
                    'name' => 'Thị xã Bỉm Sơn',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            273 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 382,
                    'name' => 'Thành phố Sầm Sơn',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            274 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 384,
                    'name' => 'Huyện Mường Lát',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            275 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 385,
                    'name' => 'Huyện Quan Hóa',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            276 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 386,
                    'name' => 'Huyện Bá Thước',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            277 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 387,
                    'name' => 'Huyện Quan Sơn',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            278 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 388,
                    'name' => 'Huyện Lang Chánh',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            279 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 389,
                    'name' => 'Huyện Ngọc Lặc',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            280 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 390,
                    'name' => 'Huyện Cẩm Thủy',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            281 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 391,
                    'name' => 'Huyện Thạch Thành',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            282 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 392,
                    'name' => 'Huyện Hà Trung',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            283 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 393,
                    'name' => 'Huyện Vĩnh Lộc',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            284 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 394,
                    'name' => 'Huyện Yên Định',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            285 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 395,
                    'name' => 'Huyện Thọ Xuân',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            286 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 396,
                    'name' => 'Huyện Thường Xuân',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            287 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 397,
                    'name' => 'Huyện Triệu Sơn',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            288 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 398,
                    'name' => 'Huyện Thiệu Hóa',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            289 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 399,
                    'name' => 'Huyện Hoằng Hóa',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            290 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 400,
                    'name' => 'Huyện Hậu Lộc',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            291 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 401,
                    'name' => 'Huyện Nga Sơn',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            292 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 402,
                    'name' => 'Huyện Như Xuân',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            293 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 403,
                    'name' => 'Huyện Như Thanh',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            294 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 404,
                    'name' => 'Huyện Nông Cống',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            295 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 405,
                    'name' => 'Huyện Đông Sơn',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            296 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 406,
                    'name' => 'Huyện Quảng Xương',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            297 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 407,
                    'name' => 'Huyện Tĩnh Gia',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            1000 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 1000,
                    'name' => 'Thị xã Nghi Sơn',
                    'province_id' => 38,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            298 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 412,
                    'name' => 'Thành phố Vinh',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            299 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 413,
                    'name' => 'Thị xã Cửa Lò',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            300 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 414,
                    'name' => 'Thị xã Thái Hòa',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            301 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 415,
                    'name' => 'Huyện Quế Phong',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            302 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 416,
                    'name' => 'Huyện Quỳ Châu',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            303 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 417,
                    'name' => 'Huyện Kỳ Sơn',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            304 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 418,
                    'name' => 'Huyện Tương Dương',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            305 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 419,
                    'name' => 'Huyện Nghĩa Đàn',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            306 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 420,
                    'name' => 'Huyện Quỳ Hợp',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            307 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 421,
                    'name' => 'Huyện Quỳnh Lưu',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            308 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 422,
                    'name' => 'Huyện Con Cuông',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            309 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 423,
                    'name' => 'Huyện Tân Kỳ',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            310 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 424,
                    'name' => 'Huyện Anh Sơn',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            311 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 425,
                    'name' => 'Huyện Diễn Châu',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            312 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 426,
                    'name' => 'Huyện Yên Thành',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            313 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 427,
                    'name' => 'Huyện Đô Lương',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            314 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 428,
                    'name' => 'Huyện Thanh Chương',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            315 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 429,
                    'name' => 'Huyện Nghi Lộc',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            316 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 430,
                    'name' => 'Huyện Nam Đàn',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            317 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 431,
                    'name' => 'Huyện Hưng Nguyên',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            318 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 432,
                    'name' => 'Thị xã Hoàng Mai',
                    'province_id' => 40,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            319 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 436,
                    'name' => 'Thành phố Hà Tĩnh',
                    'province_id' => 42,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            320 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 437,
                    'name' => 'Thị xã Hồng Lĩnh',
                    'province_id' => 42,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            321 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 439,
                    'name' => 'Huyện Hương Sơn',
                    'province_id' => 42,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            322 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 440,
                    'name' => 'Huyện Đức Thọ',
                    'province_id' => 42,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            323 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 441,
                    'name' => 'Huyện Vũ Quang',
                    'province_id' => 42,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            324 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 442,
                    'name' => 'Huyện Nghi Xuân',
                    'province_id' => 42,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            325 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 443,
                    'name' => 'Huyện Can Lộc',
                    'province_id' => 42,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            326 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 444,
                    'name' => 'Huyện Hương Khê',
                    'province_id' => 42,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            327 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 445,
                    'name' => 'Huyện Thạch Hà',
                    'province_id' => 42,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            328 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 446,
                    'name' => 'Huyện Cẩm Xuyên',
                    'province_id' => 42,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            329 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 447,
                    'name' => 'Huyện Kỳ Anh',
                    'province_id' => 42,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            330 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 448,
                    'name' => 'Huyện Lộc Hà',
                    'province_id' => 42,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            331 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 449,
                    'name' => 'Thị xã Kỳ Anh',
                    'province_id' => 42,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            332 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 450,
                    'name' => 'Thành Phố Đồng Hới',
                    'province_id' => 44,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            333 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 452,
                    'name' => 'Huyện Minh Hóa',
                    'province_id' => 44,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            334 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 453,
                    'name' => 'Huyện Tuyên Hóa',
                    'province_id' => 44,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            335 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 454,
                    'name' => 'Huyện Quảng Trạch',
                    'province_id' => 44,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            336 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 455,
                    'name' => 'Huyện Bố Trạch',
                    'province_id' => 44,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            337 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 456,
                    'name' => 'Huyện Quảng Ninh',
                    'province_id' => 44,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            338 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 457,
                    'name' => 'Huyện Lệ Thủy',
                    'province_id' => 44,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            339 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 458,
                    'name' => 'Thị xã Ba Đồn',
                    'province_id' => 44,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            340 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 461,
                    'name' => 'Thành phố Đông Hà',
                    'province_id' => 45,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            341 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 462,
                    'name' => 'Thị xã Quảng Trị',
                    'province_id' => 45,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            342 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 464,
                    'name' => 'Huyện Vĩnh Linh',
                    'province_id' => 45,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            343 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 465,
                    'name' => 'Huyện Hướng Hóa',
                    'province_id' => 45,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            344 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 466,
                    'name' => 'Huyện Gio Linh',
                    'province_id' => 45,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            345 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 467,
                    'name' => 'Huyện Đakrông',
                    'province_id' => 45,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            346 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 468,
                    'name' => 'Huyện Cam Lộ',
                    'province_id' => 45,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            347 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 469,
                    'name' => 'Huyện Triệu Phong',
                    'province_id' => 45,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            348 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 470,
                    'name' => 'Huyện Hải Lăng',
                    'province_id' => 45,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            349 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 474,
                    'name' => 'Thành phố Huế',
                    'province_id' => 46,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            350 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 476,
                    'name' => 'Huyện Phong Điền',
                    'province_id' => 46,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            351 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 477,
                    'name' => 'Huyện Quảng Điền',
                    'province_id' => 46,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            352 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 478,
                    'name' => 'Huyện Phú Vang',
                    'province_id' => 46,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            353 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 479,
                    'name' => 'Thị xã Hương Thủy',
                    'province_id' => 46,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            354 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 480,
                    'name' => 'Thị xã Hương Trà',
                    'province_id' => 46,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            355 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 481,
                    'name' => 'Huyện A Lưới',
                    'province_id' => 46,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            356 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 482,
                    'name' => 'Huyện Phú Lộc',
                    'province_id' => 46,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            357 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 483,
                    'name' => 'Huyện Nam Đông',
                    'province_id' => 46,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            358 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 490,
                    'name' => 'Quận Liên Chiểu',
                    'province_id' => 48,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            359 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 491,
                    'name' => 'Quận Thanh Khê',
                    'province_id' => 48,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            360 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 492,
                    'name' => 'Quận Hải Châu',
                    'province_id' => 48,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            361 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 493,
                    'name' => 'Quận Sơn Trà',
                    'province_id' => 48,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            362 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 494,
                    'name' => 'Quận Ngũ Hành Sơn',
                    'province_id' => 48,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            363 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 495,
                    'name' => 'Quận Cẩm Lệ',
                    'province_id' => 48,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            364 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 497,
                    'name' => 'Huyện Hòa Vang',
                    'province_id' => 48,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            365 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 502,
                    'name' => 'Thành phố Tam Kỳ',
                    'province_id' => 49,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            366 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 503,
                    'name' => 'Thành phố Hội An',
                    'province_id' => 49,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            367 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 504,
                    'name' => 'Huyện Tây Giang',
                    'province_id' => 49,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            368 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 505,
                    'name' => 'Huyện Đông Giang',
                    'province_id' => 49,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            369 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 506,
                    'name' => 'Huyện Đại Lộc',
                    'province_id' => 49,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            370 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 507,
                    'name' => 'Thị xã Điện Bàn',
                    'province_id' => 49,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            371 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 508,
                    'name' => 'Huyện Duy Xuyên',
                    'province_id' => 49,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            372 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 509,
                    'name' => 'Huyện Quế Sơn',
                    'province_id' => 49,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            373 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 510,
                    'name' => 'Huyện Nam Giang',
                    'province_id' => 49,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            374 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 511,
                    'name' => 'Huyện Phước Sơn',
                    'province_id' => 49,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            375 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 512,
                    'name' => 'Huyện Hiệp Đức',
                    'province_id' => 49,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            376 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 513,
                    'name' => 'Huyện Thăng Bình',
                    'province_id' => 49,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            377 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 514,
                    'name' => 'Huyện Tiên Phước',
                    'province_id' => 49,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            378 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 515,
                    'name' => 'Huyện Bắc Trà My',
                    'province_id' => 49,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            379 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 516,
                    'name' => 'Huyện Nam Trà My',
                    'province_id' => 49,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            380 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 517,
                    'name' => 'Huyện Núi Thành',
                    'province_id' => 49,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            381 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 518,
                    'name' => 'Huyện Phú Ninh',
                    'province_id' => 49,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            382 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 519,
                    'name' => 'Huyện Nông Sơn',
                    'province_id' => 49,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            383 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 522,
                    'name' => 'Thành phố Quảng Ngãi',
                    'province_id' => 51,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            384 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 524,
                    'name' => 'Huyện Bình Sơn',
                    'province_id' => 51,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            385 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 525,
                    'name' => 'Huyện Trà Bồng',
                    'province_id' => 51,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            386 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 526,
                    'name' => 'Huyện Tây Trà',
                    'province_id' => 51,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            387 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 527,
                    'name' => 'Huyện Sơn Tịnh',
                    'province_id' => 51,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            388 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 528,
                    'name' => 'Huyện Tư Nghĩa',
                    'province_id' => 51,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            389 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 529,
                    'name' => 'Huyện Sơn Hà',
                    'province_id' => 51,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            390 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 530,
                    'name' => 'Huyện Sơn Tây',
                    'province_id' => 51,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            391 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 531,
                    'name' => 'Huyện Minh Long',
                    'province_id' => 51,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            392 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 532,
                    'name' => 'Huyện Nghĩa Hành',
                    'province_id' => 51,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            393 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 533,
                    'name' => 'Huyện Mộ Đức',
                    'province_id' => 51,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            394 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 534,
                    'name' => 'Huyện Đức Phổ',
                    'province_id' => 51,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            395 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 535,
                    'name' => 'Huyện Ba Tơ',
                    'province_id' => 51,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            396 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 536,
                    'name' => 'Huyện Lý Sơn',
                    'province_id' => 51,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            397 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 540,
                    'name' => 'Thành phố Quy Nhơn',
                    'province_id' => 52,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            398 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 542,
                    'name' => 'Huyện An Lão',
                    'province_id' => 52,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            399 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 543,
                    'name' => 'Huyện Hoài Nhơn',
                    'province_id' => 52,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            400 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 544,
                    'name' => 'Huyện Hoài Ân',
                    'province_id' => 52,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            401 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 545,
                    'name' => 'Huyện Phù Mỹ',
                    'province_id' => 52,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            402 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 546,
                    'name' => 'Huyện Vĩnh Thạnh',
                    'province_id' => 52,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            403 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 547,
                    'name' => 'Huyện Tây Sơn',
                    'province_id' => 52,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            404 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 548,
                    'name' => 'Huyện Phù Cát',
                    'province_id' => 52,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            405 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 549,
                    'name' => 'Thị xã An Nhơn',
                    'province_id' => 52,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            406 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 550,
                    'name' => 'Huyện Tuy Phước',
                    'province_id' => 52,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            407 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 551,
                    'name' => 'Huyện Vân Canh',
                    'province_id' => 52,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            408 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 555,
                    'name' => 'Thành phố Tuy Hòa',
                    'province_id' => 54,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            409 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 557,
                    'name' => 'Thị xã Sông Cầu',
                    'province_id' => 54,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            410 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 558,
                    'name' => 'Huyện Đồng Xuân',
                    'province_id' => 54,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            411 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 559,
                    'name' => 'Huyện Tuy An',
                    'province_id' => 54,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            412 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 560,
                    'name' => 'Huyện Sơn Hòa',
                    'province_id' => 54,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            413 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 561,
                    'name' => 'Huyện Sông Hinh',
                    'province_id' => 54,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            414 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 562,
                    'name' => 'Huyện Tây Hòa',
                    'province_id' => 54,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            415 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 563,
                    'name' => 'Huyện Phú Hòa',
                    'province_id' => 54,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            416 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 564,
                    'name' => 'Huyện Đông Hòa',
                    'province_id' => 54,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            417 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 568,
                    'name' => 'Thành phố Nha Trang',
                    'province_id' => 56,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            418 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 569,
                    'name' => 'Thành phố Cam Ranh',
                    'province_id' => 56,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            419 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 570,
                    'name' => 'Huyện Cam Lâm',
                    'province_id' => 56,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            420 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 571,
                    'name' => 'Huyện Vạn Ninh',
                    'province_id' => 56,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            421 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 572,
                    'name' => 'Thị xã Ninh Hòa',
                    'province_id' => 56,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            422 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 573,
                    'name' => 'Huyện Khánh Vĩnh',
                    'province_id' => 56,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            423 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 574,
                    'name' => 'Huyện Diên Khánh',
                    'province_id' => 56,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            424 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 575,
                    'name' => 'Huyện Khánh Sơn',
                    'province_id' => 56,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            425 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 576,
                    'name' => 'Huyện Trường Sa',
                    'province_id' => 56,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            426 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 582,
                    'name' => 'Thành phố Phan Rang-Tháp Chàm',
                    'province_id' => 58,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            427 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 584,
                    'name' => 'Huyện Bác Ái',
                    'province_id' => 58,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            428 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 585,
                    'name' => 'Huyện Ninh Sơn',
                    'province_id' => 58,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            429 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 586,
                    'name' => 'Huyện Ninh Hải',
                    'province_id' => 58,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            430 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 587,
                    'name' => 'Huyện Ninh Phước',
                    'province_id' => 58,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            431 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 588,
                    'name' => 'Huyện Thuận Bắc',
                    'province_id' => 58,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            432 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 589,
                    'name' => 'Huyện Thuận Nam',
                    'province_id' => 58,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            433 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 593,
                    'name' => 'Thành phố Phan Thiết',
                    'province_id' => 60,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            434 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 594,
                    'name' => 'Thị xã La Gi',
                    'province_id' => 60,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            435 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 595,
                    'name' => 'Huyện Tuy Phong',
                    'province_id' => 60,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            436 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 596,
                    'name' => 'Huyện Bắc Bình',
                    'province_id' => 60,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            437 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 597,
                    'name' => 'Huyện Hàm Thuận Bắc',
                    'province_id' => 60,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            438 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 598,
                    'name' => 'Huyện Hàm Thuận Nam',
                    'province_id' => 60,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            439 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 599,
                    'name' => 'Huyện Tánh Linh',
                    'province_id' => 60,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            440 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 600,
                    'name' => 'Huyện Đức Linh',
                    'province_id' => 60,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            441 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 601,
                    'name' => 'Huyện Hàm Tân',
                    'province_id' => 60,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            442 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 602,
                    'name' => 'Huyện Phú Quí',
                    'province_id' => 60,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            443 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 608,
                    'name' => 'Thành phố Kon Tum',
                    'province_id' => 62,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            444 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 610,
                    'name' => 'Huyện Đắk Glei',
                    'province_id' => 62,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            445 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 611,
                    'name' => 'Huyện Ngọc Hồi',
                    'province_id' => 62,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            446 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 612,
                    'name' => 'Huyện Đắk Tô',
                    'province_id' => 62,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            447 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 613,
                    'name' => 'Huyện Kon Plông',
                    'province_id' => 62,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            448 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 614,
                    'name' => 'Huyện Kon Rẫy',
                    'province_id' => 62,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            449 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 615,
                    'name' => 'Huyện Đắk Hà',
                    'province_id' => 62,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            450 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 616,
                    'name' => 'Huyện Sa Thầy',
                    'province_id' => 62,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            451 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 617,
                    'name' => 'Huyện Tu Mơ Rông',
                    'province_id' => 62,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            452 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 618,
                    'name' => 'Huyện Ia H\' Drai',
                    'province_id' => 62,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            453 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 622,
                    'name' => 'Thành phố Pleiku',
                    'province_id' => 64,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            454 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 623,
                    'name' => 'Thị xã An Khê',
                    'province_id' => 64,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            455 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 624,
                    'name' => 'Thị xã Ayun Pa',
                    'province_id' => 64,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            456 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 625,
                    'name' => 'Huyện KBang',
                    'province_id' => 64,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            457 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 626,
                    'name' => 'Huyện Đăk Đoa',
                    'province_id' => 64,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            458 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 627,
                    'name' => 'Huyện Chư Păh',
                    'province_id' => 64,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            459 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 628,
                    'name' => 'Huyện Ia Grai',
                    'province_id' => 64,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            460 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 629,
                    'name' => 'Huyện Mang Yang',
                    'province_id' => 64,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            461 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 630,
                    'name' => 'Huyện Kông Chro',
                    'province_id' => 64,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            462 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 631,
                    'name' => 'Huyện Đức Cơ',
                    'province_id' => 64,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            463 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 632,
                    'name' => 'Huyện Chư Prông',
                    'province_id' => 64,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            464 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 633,
                    'name' => 'Huyện Chư Sê',
                    'province_id' => 64,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            465 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 634,
                    'name' => 'Huyện Đăk Pơ',
                    'province_id' => 64,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            466 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 635,
                    'name' => 'Huyện Ia Pa',
                    'province_id' => 64,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            467 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 637,
                    'name' => 'Huyện Krông Pa',
                    'province_id' => 64,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            468 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 638,
                    'name' => 'Huyện Phú Thiện',
                    'province_id' => 64,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            469 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 639,
                    'name' => 'Huyện Chư Pưh',
                    'province_id' => 64,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            470 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 643,
                    'name' => 'Thành phố Buôn Ma Thuột',
                    'province_id' => 66,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            471 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 644,
                    'name' => 'Thị Xã Buôn Hồ',
                    'province_id' => 66,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            472 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 645,
                    'name' => 'Huyện Ea H\'leo',
                    'province_id' => 66,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            473 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 646,
                    'name' => 'Huyện Ea Súp',
                    'province_id' => 66,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            474 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 647,
                    'name' => 'Huyện Buôn Đôn',
                    'province_id' => 66,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            475 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 648,
                    'name' => 'Huyện Cư M\'gar',
                    'province_id' => 66,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            476 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 649,
                    'name' => 'Huyện Krông Búk',
                    'province_id' => 66,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            477 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 650,
                    'name' => 'Huyện Krông Năng',
                    'province_id' => 66,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            478 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 651,
                    'name' => 'Huyện Ea Kar',
                    'province_id' => 66,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            479 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 652,
                    'name' => 'Huyện M\'Đrắk',
                    'province_id' => 66,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            480 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 653,
                    'name' => 'Huyện Krông Bông',
                    'province_id' => 66,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            481 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 654,
                    'name' => 'Huyện Krông Pắc',
                    'province_id' => 66,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            482 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 655,
                    'name' => 'Huyện Krông A Na',
                    'province_id' => 66,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            483 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 656,
                    'name' => 'Huyện Lắk',
                    'province_id' => 66,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            484 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 657,
                    'name' => 'Huyện Cư Kuin',
                    'province_id' => 66,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            485 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 660,
                    'name' => 'Thị xã Gia Nghĩa',
                    'province_id' => 67,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            486 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 661,
                    'name' => 'Huyện Đăk Glong',
                    'province_id' => 67,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            487 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 662,
                    'name' => 'Huyện Cư Jút',
                    'province_id' => 67,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            488 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 663,
                    'name' => 'Huyện Đắk Mil',
                    'province_id' => 67,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            489 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 664,
                    'name' => 'Huyện Krông Nô',
                    'province_id' => 67,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            490 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 665,
                    'name' => 'Huyện Đắk Song',
                    'province_id' => 67,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            491 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 666,
                    'name' => 'Huyện Đắk R\'Lấp',
                    'province_id' => 67,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            492 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 667,
                    'name' => 'Huyện Tuy Đức',
                    'province_id' => 67,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            493 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 672,
                    'name' => 'Thành phố Đà Lạt',
                    'province_id' => 68,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            494 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 673,
                    'name' => 'Thành phố Bảo Lộc',
                    'province_id' => 68,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            495 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 674,
                    'name' => 'Huyện Đam Rông',
                    'province_id' => 68,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            496 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 675,
                    'name' => 'Huyện Lạc Dương',
                    'province_id' => 68,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            497 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 676,
                    'name' => 'Huyện Lâm Hà',
                    'province_id' => 68,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            498 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 677,
                    'name' => 'Huyện Đơn Dương',
                    'province_id' => 68,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            499 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 678,
                    'name' => 'Huyện Đức Trọng',
                    'province_id' => 68,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
        ));
        \DB::table('districts')->insert(array(
            0 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 679,
                    'name' => 'Huyện Di Linh',
                    'province_id' => 68,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            1 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 680,
                    'name' => 'Huyện Bảo Lâm',
                    'province_id' => 68,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            2 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 681,
                    'name' => 'Huyện Đạ Huoai',
                    'province_id' => 68,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            3 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 682,
                    'name' => 'Huyện Đạ Tẻh',
                    'province_id' => 68,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            4 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 683,
                    'name' => 'Huyện Cát Tiên',
                    'province_id' => 68,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            5 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 688,
                    'name' => 'Thị xã Phước Long',
                    'province_id' => 70,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            6 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 689,
                    'name' => 'Thị xã Đồng Xoài',
                    'province_id' => 70,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            7 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 690,
                    'name' => 'Thị xã Bình Long',
                    'province_id' => 70,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            8 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 691,
                    'name' => 'Huyện Bù Gia Mập',
                    'province_id' => 70,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            9 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 692,
                    'name' => 'Huyện Lộc Ninh',
                    'province_id' => 70,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            10 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 693,
                    'name' => 'Huyện Bù Đốp',
                    'province_id' => 70,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            11 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 694,
                    'name' => 'Huyện Hớn Quản',
                    'province_id' => 70,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            12 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 695,
                    'name' => 'Huyện Đồng Phú',
                    'province_id' => 70,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            13 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 696,
                    'name' => 'Huyện Bù Đăng',
                    'province_id' => 70,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            14 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 697,
                    'name' => 'Huyện Chơn Thành',
                    'province_id' => 70,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            15 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 698,
                    'name' => 'Huyện Phú Riềng',
                    'province_id' => 70,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            16 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 703,
                    'name' => 'Thành phố Tây Ninh',
                    'province_id' => 72,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            17 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 705,
                    'name' => 'Huyện Tân Biên',
                    'province_id' => 72,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            18 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 706,
                    'name' => 'Huyện Tân Châu',
                    'province_id' => 72,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            19 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 707,
                    'name' => 'Huyện Dương Minh Châu',
                    'province_id' => 72,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            20 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 708,
                    'name' => 'Huyện Châu Thành',
                    'province_id' => 72,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            21 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 709,
                    'name' => 'Huyện Hòa Thành',
                    'province_id' => 72,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            22 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 710,
                    'name' => 'Huyện Gò Dầu',
                    'province_id' => 72,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            23 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 711,
                    'name' => 'Huyện Bến Cầu',
                    'province_id' => 72,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            24 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 712,
                    'name' => 'Huyện Trảng Bàng',
                    'province_id' => 72,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            25 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 718,
                    'name' => 'Thành phố Thủ Dầu Một',
                    'province_id' => 74,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            26 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 719,
                    'name' => 'Huyện Bàu Bàng',
                    'province_id' => 74,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            27 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 720,
                    'name' => 'Huyện Dầu Tiếng',
                    'province_id' => 74,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            28 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 721,
                    'name' => 'Thị xã Bến Cát',
                    'province_id' => 74,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            29 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 722,
                    'name' => 'Huyện Phú Giáo',
                    'province_id' => 74,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            30 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 723,
                    'name' => 'Thị xã Tân Uyên',
                    'province_id' => 74,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            31 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 724,
                    'name' => 'Thị xã Dĩ An',
                    'province_id' => 74,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            32 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 725,
                    'name' => 'Thị xã Thuận An',
                    'province_id' => 74,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            33 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 726,
                    'name' => 'Huyện Bắc Tân Uyên',
                    'province_id' => 74,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            34 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 731,
                    'name' => 'Thành phố Biên Hòa',
                    'province_id' => 75,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            35 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 732,
                    'name' => 'Thị xã Long Khánh',
                    'province_id' => 75,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            36 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 734,
                    'name' => 'Huyện Tân Phú',
                    'province_id' => 75,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            37 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 735,
                    'name' => 'Huyện Vĩnh Cửu',
                    'province_id' => 75,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            38 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 736,
                    'name' => 'Huyện Định Quán',
                    'province_id' => 75,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            39 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 737,
                    'name' => 'Huyện Trảng Bom',
                    'province_id' => 75,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            40 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 738,
                    'name' => 'Huyện Thống Nhất',
                    'province_id' => 75,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            41 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 739,
                    'name' => 'Huyện Cẩm Mỹ',
                    'province_id' => 75,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            42 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 740,
                    'name' => 'Huyện Long Thành',
                    'province_id' => 75,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            43 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 741,
                    'name' => 'Huyện Xuân Lộc',
                    'province_id' => 75,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            44 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 742,
                    'name' => 'Huyện Nhơn Trạch',
                    'province_id' => 75,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            45 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 747,
                    'name' => 'Thành phố Vũng Tàu',
                    'province_id' => 77,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            46 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 748,
                    'name' => 'Thành phố Bà Rịa',
                    'province_id' => 77,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            47 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 750,
                    'name' => 'Huyện Châu Đức',
                    'province_id' => 77,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            48 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 751,
                    'name' => 'Huyện Xuyên Mộc',
                    'province_id' => 77,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            49 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 752,
                    'name' => 'Huyện Long Điền',
                    'province_id' => 77,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            50 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 753,
                    'name' => 'Huyện Đất Đỏ',
                    'province_id' => 77,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            51 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 754,
                    'name' => 'Huyện Tân Thành',
                    'province_id' => 77,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            52 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 755,
                    'name' => 'Huyện Côn Đảo',
                    'province_id' => 77,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            53 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 760,
                    'name' => 'Quận 1',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            54 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 761,
                    'name' => 'Quận 12',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            55 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 762,
                    'name' => 'Quận Thủ Đức',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            56 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 763,
                    'name' => 'Quận 9',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            57 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 764,
                    'name' => 'Quận Gò Vấp',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            58 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 765,
                    'name' => 'Quận Bình Thạnh',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            59 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 766,
                    'name' => 'Quận Tân Bình',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            60 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 767,
                    'name' => 'Quận Tân Phú',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            61 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 768,
                    'name' => 'Quận Phú Nhuận',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            62 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 769,
                    'name' => 'Quận 2',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            63 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 770,
                    'name' => 'Quận 3',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            64 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 771,
                    'name' => 'Quận 10',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            65 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 772,
                    'name' => 'Quận 11',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            66 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 773,
                    'name' => 'Quận 4',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            67 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 774,
                    'name' => 'Quận 5',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            68 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 775,
                    'name' => 'Quận 6',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            69 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 776,
                    'name' => 'Quận 8',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            70 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 777,
                    'name' => 'Quận Bình Tân',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            71 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 778,
                    'name' => 'Quận 7',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            72 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 783,
                    'name' => 'Huyện Củ Chi',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            73 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 784,
                    'name' => 'Huyện Hóc Môn',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            74 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 785,
                    'name' => 'Huyện Bình Chánh',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            75 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 786,
                    'name' => 'Huyện Nhà Bè',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            76 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 787,
                    'name' => 'Huyện Cần Giờ',
                    'province_id' => 79,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            77 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 794,
                    'name' => 'Thành phố Tân An',
                    'province_id' => 80,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            78 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 795,
                    'name' => 'Thị xã Kiến Tường',
                    'province_id' => 80,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            79 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 796,
                    'name' => 'Huyện Tân Hưng',
                    'province_id' => 80,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            80 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 797,
                    'name' => 'Huyện Vĩnh Hưng',
                    'province_id' => 80,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            81 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 798,
                    'name' => 'Huyện Mộc Hóa',
                    'province_id' => 80,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            82 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 799,
                    'name' => 'Huyện Tân Thạnh',
                    'province_id' => 80,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            83 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 800,
                    'name' => 'Huyện Thạnh Hóa',
                    'province_id' => 80,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            84 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 801,
                    'name' => 'Huyện Đức Huệ',
                    'province_id' => 80,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            85 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 802,
                    'name' => 'Huyện Đức Hòa',
                    'province_id' => 80,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            86 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 803,
                    'name' => 'Huyện Bến Lức',
                    'province_id' => 80,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            87 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 804,
                    'name' => 'Huyện Thủ Thừa',
                    'province_id' => 80,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            88 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 805,
                    'name' => 'Huyện Tân Trụ',
                    'province_id' => 80,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            89 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 806,
                    'name' => 'Huyện Cần Đước',
                    'province_id' => 80,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            90 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 807,
                    'name' => 'Huyện Cần Giuộc',
                    'province_id' => 80,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            91 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 808,
                    'name' => 'Huyện Châu Thành',
                    'province_id' => 80,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            92 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 815,
                    'name' => 'Thành phố Mỹ Tho',
                    'province_id' => 82,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            93 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 816,
                    'name' => 'Thị xã Gò Công',
                    'province_id' => 82,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            94 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 817,
                    'name' => 'Thị xã Cai Lậy',
                    'province_id' => 82,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            95 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 818,
                    'name' => 'Huyện Tân Phước',
                    'province_id' => 82,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            96 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 819,
                    'name' => 'Huyện Cái Bè',
                    'province_id' => 82,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            97 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 820,
                    'name' => 'Huyện Cai Lậy',
                    'province_id' => 82,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            98 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 821,
                    'name' => 'Huyện Châu Thành',
                    'province_id' => 82,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            99 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 822,
                    'name' => 'Huyện Chợ Gạo',
                    'province_id' => 82,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            100 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 823,
                    'name' => 'Huyện Gò Công Tây',
                    'province_id' => 82,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            101 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 824,
                    'name' => 'Huyện Gò Công Đông',
                    'province_id' => 82,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            102 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 825,
                    'name' => 'Huyện Tân Phú Đông',
                    'province_id' => 82,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            103 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 829,
                    'name' => 'Thành phố Bến Tre',
                    'province_id' => 83,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            104 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 831,
                    'name' => 'Huyện Châu Thành',
                    'province_id' => 83,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            105 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 832,
                    'name' => 'Huyện Chợ Lách',
                    'province_id' => 83,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            106 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 833,
                    'name' => 'Huyện Mỏ Cày Nam',
                    'province_id' => 83,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            107 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 834,
                    'name' => 'Huyện Giồng Trôm',
                    'province_id' => 83,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            108 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 835,
                    'name' => 'Huyện Bình Đại',
                    'province_id' => 83,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            109 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 836,
                    'name' => 'Huyện Ba Tri',
                    'province_id' => 83,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            110 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 837,
                    'name' => 'Huyện Thạnh Phú',
                    'province_id' => 83,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            111 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 838,
                    'name' => 'Huyện Mỏ Cày Bắc',
                    'province_id' => 83,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            112 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 842,
                    'name' => 'Thành phố Trà Vinh',
                    'province_id' => 84,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            113 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 844,
                    'name' => 'Huyện Càng Long',
                    'province_id' => 84,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            114 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 845,
                    'name' => 'Huyện Cầu Kè',
                    'province_id' => 84,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            115 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 846,
                    'name' => 'Huyện Tiểu Cần',
                    'province_id' => 84,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            116 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 847,
                    'name' => 'Huyện Châu Thành',
                    'province_id' => 84,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            117 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 848,
                    'name' => 'Huyện Cầu Ngang',
                    'province_id' => 84,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            118 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 849,
                    'name' => 'Huyện Trà Cú',
                    'province_id' => 84,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            119 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 850,
                    'name' => 'Huyện Duyên Hải',
                    'province_id' => 84,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            120 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 851,
                    'name' => 'Thị xã Duyên Hải',
                    'province_id' => 84,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            121 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 855,
                    'name' => 'Thành phố Vĩnh Long',
                    'province_id' => 86,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            122 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 857,
                    'name' => 'Huyện Long Hồ',
                    'province_id' => 86,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            123 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 858,
                    'name' => 'Huyện Mang Thít',
                    'province_id' => 86,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            124 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 859,
                    'name' => 'Huyện Vũng Liêm',
                    'province_id' => 86,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            125 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 860,
                    'name' => 'Huyện Tam Bình',
                    'province_id' => 86,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            126 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 861,
                    'name' => 'Thị xã Bình Minh',
                    'province_id' => 86,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            127 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 862,
                    'name' => 'Huyện Trà Ôn',
                    'province_id' => 86,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            128 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 863,
                    'name' => 'Huyện Bình Tân',
                    'province_id' => 86,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            129 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 866,
                    'name' => 'Thành phố Cao Lãnh',
                    'province_id' => 87,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            130 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 867,
                    'name' => 'Thành phố Sa Đéc',
                    'province_id' => 87,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            131 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 868,
                    'name' => 'Thị xã Hồng Ngự',
                    'province_id' => 87,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            132 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 869,
                    'name' => 'Huyện Tân Hồng',
                    'province_id' => 87,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            133 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 870,
                    'name' => 'Huyện Hồng Ngự',
                    'province_id' => 87,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            134 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 871,
                    'name' => 'Huyện Tam Nông',
                    'province_id' => 87,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            135 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 872,
                    'name' => 'Huyện Tháp Mười',
                    'province_id' => 87,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            136 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 873,
                    'name' => 'Huyện Cao Lãnh',
                    'province_id' => 87,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            137 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 874,
                    'name' => 'Huyện Thanh Bình',
                    'province_id' => 87,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            138 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 875,
                    'name' => 'Huyện Lấp Vò',
                    'province_id' => 87,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            139 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 876,
                    'name' => 'Huyện Lai Vung',
                    'province_id' => 87,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            140 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 877,
                    'name' => 'Huyện Châu Thành',
                    'province_id' => 87,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            141 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 883,
                    'name' => 'Thành phố Long Xuyên',
                    'province_id' => 89,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            142 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 884,
                    'name' => 'Thành phố Châu Đốc',
                    'province_id' => 89,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            143 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 886,
                    'name' => 'Huyện An Phú',
                    'province_id' => 89,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            144 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 887,
                    'name' => 'Thị xã Tân Châu',
                    'province_id' => 89,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            145 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 888,
                    'name' => 'Huyện Phú Tân',
                    'province_id' => 89,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            146 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 889,
                    'name' => 'Huyện Châu Phú',
                    'province_id' => 89,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            147 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 890,
                    'name' => 'Huyện Tịnh Biên',
                    'province_id' => 89,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            148 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 891,
                    'name' => 'Huyện Tri Tôn',
                    'province_id' => 89,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            149 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 892,
                    'name' => 'Huyện Châu Thành',
                    'province_id' => 89,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            150 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 893,
                    'name' => 'Huyện Chợ Mới',
                    'province_id' => 89,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            151 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 894,
                    'name' => 'Huyện Thoại Sơn',
                    'province_id' => 89,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            152 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 899,
                    'name' => 'Thành phố Rạch Giá',
                    'province_id' => 91,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            153 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 900,
                    'name' => 'Thị xã Hà Tiên',
                    'province_id' => 91,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            154 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 902,
                    'name' => 'Huyện Kiên Lương',
                    'province_id' => 91,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            155 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 903,
                    'name' => 'Huyện Hòn Đất',
                    'province_id' => 91,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            156 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 904,
                    'name' => 'Huyện Tân Hiệp',
                    'province_id' => 91,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            157 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 905,
                    'name' => 'Huyện Châu Thành',
                    'province_id' => 91,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            158 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 906,
                    'name' => 'Huyện Giồng Riềng',
                    'province_id' => 91,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            159 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 907,
                    'name' => 'Huyện Gò Quao',
                    'province_id' => 91,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            160 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 908,
                    'name' => 'Huyện An Biên',
                    'province_id' => 91,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            161 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 909,
                    'name' => 'Huyện An Minh',
                    'province_id' => 91,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            162 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 910,
                    'name' => 'Huyện Vĩnh Thuận',
                    'province_id' => 91,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            163 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 911,
                    'name' => 'Huyện Phú Quốc',
                    'province_id' => 91,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            164 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 912,
                    'name' => 'Huyện Kiên Hải',
                    'province_id' => 91,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            165 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 913,
                    'name' => 'Huyện U Minh Thượng',
                    'province_id' => 91,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            166 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 914,
                    'name' => 'Huyện Giang Thành',
                    'province_id' => 91,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            167 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 916,
                    'name' => 'Quận Ninh Kiều',
                    'province_id' => 92,
                    'updated_at' => '2020-03-23 14:35:37',
                ),
            168 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 917,
                    'name' => 'Quận Ô Môn',
                    'province_id' => 92,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            169 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 918,
                    'name' => 'Quận Bình Thuỷ',
                    'province_id' => 92,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            170 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 919,
                    'name' => 'Quận Cái Răng',
                    'province_id' => 92,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            171 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 923,
                    'name' => 'Quận Thốt Nốt',
                    'province_id' => 92,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            172 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 924,
                    'name' => 'Huyện Vĩnh Thạnh',
                    'province_id' => 92,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            173 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 925,
                    'name' => 'Huyện Cờ Đỏ',
                    'province_id' => 92,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            174 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 926,
                    'name' => 'Huyện Phong Điền',
                    'province_id' => 92,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            175 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 927,
                    'name' => 'Huyện Thới Lai',
                    'province_id' => 92,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            176 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 930,
                    'name' => 'Thành phố Vị Thanh',
                    'province_id' => 93,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            177 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 931,
                    'name' => 'Thị xã Ngã Bảy',
                    'province_id' => 93,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            178 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 932,
                    'name' => 'Huyện Châu Thành A',
                    'province_id' => 93,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            179 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 933,
                    'name' => 'Huyện Châu Thành',
                    'province_id' => 93,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            180 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 934,
                    'name' => 'Huyện Phụng Hiệp',
                    'province_id' => 93,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            181 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 935,
                    'name' => 'Huyện Vị Thủy',
                    'province_id' => 93,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            182 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 936,
                    'name' => 'Huyện Long Mỹ',
                    'province_id' => 93,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            183 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 937,
                    'name' => 'Thị xã Long Mỹ',
                    'province_id' => 93,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            184 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 941,
                    'name' => 'Thành phố Sóc Trăng',
                    'province_id' => 94,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            185 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 942,
                    'name' => 'Huyện Châu Thành',
                    'province_id' => 94,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            186 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 943,
                    'name' => 'Huyện Kế Sách',
                    'province_id' => 94,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            187 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 944,
                    'name' => 'Huyện Mỹ Tú',
                    'province_id' => 94,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            188 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 945,
                    'name' => 'Huyện Cù Lao Dung',
                    'province_id' => 94,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            189 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 946,
                    'name' => 'Huyện Long Phú',
                    'province_id' => 94,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            190 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 947,
                    'name' => 'Huyện Mỹ Xuyên',
                    'province_id' => 94,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            191 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 948,
                    'name' => 'Thị xã Ngã Năm',
                    'province_id' => 94,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            192 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 949,
                    'name' => 'Huyện Thạnh Trị',
                    'province_id' => 94,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            193 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 950,
                    'name' => 'Thị xã Vĩnh Châu',
                    'province_id' => 94,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            194 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 951,
                    'name' => 'Huyện Trần Đề',
                    'province_id' => 94,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            195 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 954,
                    'name' => 'Thành phố Bạc Liêu',
                    'province_id' => 95,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            196 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 956,
                    'name' => 'Huyện Hồng Dân',
                    'province_id' => 95,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            197 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 957,
                    'name' => 'Huyện Phước Long',
                    'province_id' => 95,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            198 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 958,
                    'name' => 'Huyện Vĩnh Lợi',
                    'province_id' => 95,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            199 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 959,
                    'name' => 'Thị xã Giá Rai',
                    'province_id' => 95,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            200 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 960,
                    'name' => 'Huyện Đông Hải',
                    'province_id' => 95,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            201 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 961,
                    'name' => 'Huyện Hòa Bình',
                    'province_id' => 95,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            202 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 964,
                    'name' => 'Thành phố Cà Mau',
                    'province_id' => 96,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            203 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 966,
                    'name' => 'Huyện U Minh',
                    'province_id' => 96,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            204 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 967,
                    'name' => 'Huyện Thới Bình',
                    'province_id' => 96,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            205 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 968,
                    'name' => 'Huyện Trần Văn Thời',
                    'province_id' => 96,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            206 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 969,
                    'name' => 'Huyện Cái Nước',
                    'province_id' => 96,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            207 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 970,
                    'name' => 'Huyện Đầm Dơi',
                    'province_id' => 96,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            208 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 971,
                    'name' => 'Huyện Năm Căn',
                    'province_id' => 96,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            209 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 972,
                    'name' => 'Huyện Phú Tân',
                    'province_id' => 96,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
            210 =>
                array(
                    'created_at' => '2020-03-23 14:35:38',
                    'id' => 973,
                    'name' => 'Huyện Ngọc Hiển',
                    'province_id' => 96,
                    'updated_at' => '2020-03-23 14:35:38',
                ),
        ));
    }
}
