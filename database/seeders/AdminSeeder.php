<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin; // تأكد أن نموذج الـ Admin موجود
use App\Models\User; // إذا كنت تستخدم جدول users

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // إنشاء الإدمن
        $admin = Admin::create([

            'email' => 'ashour@mghaben.com',
            'password' => Hash::make('12345678'),

        ]);

        // إذا كنت تريد ربطه في جدول users أو جدول polymorphic
        User::create([
            'first_name' => 'Ashour',
            'last_name' => 'Ghaben',
            'mobile' => '0591234567',
            'address' => 'Gaza',
            'image' => null,
            'date' => now(),
            'gender' => 'male',
            'status' => 'active',
            'city_id' => 1,
            'actor_type' => Admin::class,
            'actor_id' => $admin->id,
        ]);
         $admin->assignRole('superAdmin');
    }
}

