<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\Admin;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //role
        $role = Role::create([
            'name' => 'superAdmin',
            'guard_name' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //permission admin table for admin
        Permission::create(['name'=>'Index Admin','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Create Admin','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Update Admin','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Delete Admin','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Show Admin','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);

        //permission author table for admin
        Permission::create(['name'=>'Show Author','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Delete Author','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Create Author','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Update Author','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Index Author','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);

        //permission author table for author
        Permission::create(['name'=>'Show Author','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Delete Author','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Create Author','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Update Author','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Index Author','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);

        //permission country table for admin
        Permission::create(['name'=>'Show Country','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Delete Country','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Create Country','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Update Country','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Index Country','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);

        //permission country table for author
        Permission::create(['name'=>'Show Country','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Delete Country','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Create Country','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Update Country','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Index Country','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);

        //permission city table for admin
        Permission::create(['name'=>'Show City','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Delete City','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Create City','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Update City','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Index City','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);

        //permission city table for author
        Permission::create(['name'=>'Show City','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Delete City','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Create City','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Update City','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Index City','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);

        //permission category table for admin
        Permission::create(['name'=>'Show Category','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Delete Category','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Create Category','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Update Category','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Index Category','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);

        //permission category table for author
        Permission::create(['name'=>'Show Category','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Delete Category','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Create Category','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Update Category','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Index Category','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);

        //permission articles table for admin
        Permission::create(['name'=>'Show Article','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Delete Article','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Create Article','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Update Article','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Index Article','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);

        //permission Article table for author
        Permission::create(['name'=>'Show Article','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Delete Article','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Create Article','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Update Article','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Index Article','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);

        //permission role table for admin
        Permission::create(['name'=>'Index Role','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Create Role','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);

        //permission role table for author
        Permission::create(['name'=>'Index Role','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Create Role','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);

        //permission permission table for admin
        Permission::create(['name'=>'Index Permission','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Create Permission','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);

        //permission permission table for author
        Permission::create(['name'=>'Index Permission','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Create Permission','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);

        //permission slider table for admin
        Permission::create(['name'=>'Show Slider','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Delete Slider','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Create Slider','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Update Slider','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Index Slider','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);

        //permission Slider table for author
        Permission::create(['name'=>'Show Slider','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Delete Slider','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Create Slider','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Update Slider','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Index Slider','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);

        //permission contact table for admin
        Permission::create(['name'=>'Show Contact','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Delete Contact','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Create Contact','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Update Contact','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Index Contact','guard_name'=>'admin','created_at'=>now(),'updated_at'=>now()]);

        //permission Contact table for author
        Permission::create(['name'=>'Show Contact','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Delete Contact','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Create Contact','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Update Contact','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);
        Permission::create(['name'=>'Index Contact','guard_name'=>'author','created_at'=>now(),'updated_at'=>now()]);

        // ✅ بعد ما تنشئ كل البرمشنات، أعطها للرول
        $role->givePermissionTo(Permission::where('guard_name', 'admin')->get());

        // ✅ إسناد الرول لأول أدمن (غيرها حسب ID أو ايميل)
        $admin = Admin::first();
        if ($admin) {
            $admin->assignRole($role);
        }

        // ✅ تنظيف الكاش بعد التغييرات
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
    }
}
