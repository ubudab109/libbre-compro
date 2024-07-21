<?php

namespace Database\Seeders;

use App\Models\CompanySetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::beginTransaction();
        try {
            $datas = [
                [
                    'slug' => 'compro_file',
                    'name' => 'Company Profile File',
                    'input_type' => 'file',
                ],
            ];
            foreach($datas as $data) {
                CompanySetting::updateOrCreate([
                    'slug' => $data['slug']
                ], $data);
            }
            DB::commit();
        } catch (\Exception $err) {
            DB::rollBack();
            dd($err->getMessage());
        }
    }
}
