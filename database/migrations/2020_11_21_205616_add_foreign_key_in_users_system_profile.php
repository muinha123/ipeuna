<?php

use App\Models\SystemProfile;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyInUsersSystemProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('system_profile_id')
                ->change();

            $table->foreign('system_profile_id', 'users_system_profile_id_foreign')
                ->references('id')
                ->on('system_profiles')
                ->onUpdate('CASCADE');
        });

        SystemProfile::create([
            'profile' => 'Administrador'
        ]);

        SystemProfile::create([
            'profile' => 'Funcionário'
        ]);

        SystemProfile::create([
            'profile' => 'Cliente'
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'system_profile_id' => 1,
            'password' => Hash::make('123mudar')
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_system_profile_id_foreign');
        });
    }
}
