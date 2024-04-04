<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('avatar');
            $table->text('address')->nullable();
            $table->string('is_admin')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
        User::create(['name' => 'admin','email' => 'admin@email.com','password' => bcrypt(1234567890),'email_verified_at'=>'2022-01-02 17:04:58','avatar' => 'avatar.jpg','address'=>'hello','is_admin'=> "1",'created_at' => now(),]);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
