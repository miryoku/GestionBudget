<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('budgets_user',function(Blueprint $table){
            $table->foreignIdFor(\App\Models\Budgets::Class)->constrained()->cascadeOndelete();
            $table->foreignIdFor(\App\Models\User::Class)->constrained()->cascadeOndelete();
            $table->primary(['budgets_id','user_id']);//ceci permet de dire que la cle primaire sera les 2 cle etranger
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budgets_user');

    }
};
