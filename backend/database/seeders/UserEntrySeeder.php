<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\UserEntry;

class UserEntrySeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
       /*
        DB::table('user_entry')->insert([
            'title' => "ダミータイトル",
            'body' => "ダミー本文です",
        ]); */

        UserEntry::create([
            "title" => "UserEntryクラスで作成したtitle",
            "body" => "UserEntryクラスで作成したbody"
        ]);
    }
}
