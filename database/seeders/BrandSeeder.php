<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            [
                'brand_name' => 'HoshHosh',
                'top5_flag' => 1,
                'description' => 'HoshHosh was founded in 2023 exclusively only for Binus - Mid Term Exam 2022/2023 Even Semester purposes. Although it\'s an imaginary brand, hopefully, this shop will be remembered as the part of scoring!'
            ],
            [
                'brand_name' => 'Maximal',
                'top5_flag' => 1,
                'description' => 'Maximal was founded in 2023 exclusively only for Binus - Mid Term Exam 2022/2023 Even Semester purposes. Although it\'s an imaginary brand, hopefully, this shop will be remembered as the part of scoring!'
            ],
            [
                'brand_name' => 'Pulu',
                'top5_flag' => 1,
                'description' => 'Pulu was founded in 2023 exclusively only for Binus - Mid Term Exam 2022/2023 Even Semester purposes. Although it\'s an imaginary brand, hopefully, this shop will be remembered as the part of scoring!'
            ],
            [
                'brand_name' => 'Adadah',
                'top5_flag' => 1,
                'description' => 'Adadah was founded in 2023 exclusively only for Binus - Mid Term Exam 2022/2023 Even Semester purposes. Although it\'s an imaginary brand, hopefully, this shop will be remembered as the part of scoring!'
            ],
            [
                'brand_name' => 'Hawee',
                'top5_flag' => 1,
                'description' => 'Hawee was founded in 2023 exclusively only for Binus - Mid Term Exam 2022/2023 Even Semester purposes. Although it\'s an imaginary brand, hopefully, this shop will be remembered as the part of scoring!'
            ],
            [
                'brand_name' => 'Laravel',
                'top5_flag' => 0,
                'description' => 'Laravel was founded in 2023 exclusively only for Binus - Mid Term Exam 2022/2023 Even Semester purposes. Although it\'s an imaginary brand, hopefully, this shop will be remembered as the part of scoring!'
            ],
            [
                'brand_name' => 'New Jeans',
                'top5_flag' => 0,
                'description' => 'New Jeans was founded in 2023 exclusively only for Binus - Mid Term Exam 2022/2023 Even Semester purposes. Although it\'s an imaginary brand, hopefully, this shop will be remembered as the part of scoring!'
            ],
            [
                'brand_name' => 'Minimal',
                'top5_flag' => 0,
                'description' => 'Minimal was founded in 2023 exclusively only for Binus - Mid Term Exam 2022/2023 Even Semester purposes. Although it\'s an imaginary brand, hopefully, this shop will be remembered as the part of scoring!'
            ]
        ];
        foreach ($brands as $brand) {
            DB::table('brands')->insert($brand);
        }
    }
}
