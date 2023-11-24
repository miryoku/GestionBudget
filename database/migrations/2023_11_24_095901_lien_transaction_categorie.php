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
        Schema::create("budgets",function(Blueprint $table){
            $table->id();
            $table->string("nom");
        });

        Schema::create('transaction_categorie_budget',function(Blueprint $table){
            $table->foreignIdFor(\App\Models\Budgets::Class)->constrained()->cascadeOndelete();
            $table->foreignIdFor(\App\Models\Categories::Class)->constrained()->cascadeOndelete();
            $table->foreignIdFor(\App\Models\Transactions::Class)->constrained()->cascadeOndelete();
            $table->primary(['budgets_id','categories_id','transactions_id']);//ceci permet de dire que la cle primaire sera les 2 cle etranger
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_categorie_budget');
        Schema::dropIfExists('budgets');

    }
};
