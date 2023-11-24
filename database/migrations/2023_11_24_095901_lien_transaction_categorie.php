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
        Schema::create("groupeBudget",function(Blueprint $table){
            $table->id();
            $table->string("nom");
        });


        Schema::create('transaction_categorie',function(Blueprint $table){
            $table->foreignIdFor(\App\Models\Categories::Class)->constrained()->cascadeOndelete();
            $table->foreignIdFor(\App\Models\Transactions::Class)->constrained()->cascadeOndelete();
            $table->foreignIdFor(\App\Models\GroupeBudget::Class)->constrained()->cascadeOndelete();
            $table->primary(['categorie_id','transaction_id',"groupeBudget_id"]);//ceci permet de dire que la cle primaire sera les 3 cle etranger
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groupeBudget');
        Schema::dropIfExists('transaction_categorie');
    }
};
