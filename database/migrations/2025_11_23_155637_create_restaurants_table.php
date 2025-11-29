<?php

use App\Enums\FoodType;
use App\Models\Menu;
use App\Models\User;
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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('food_type', FoodType::cases())->default(FoodType::IRANIAN);
            $table->string('address')->nullable();
            $table->boolean('external_environment')->default(false);
            $table->boolean('internal_environment')->default(true);
            $table->integer('points')->default(0);
            $table->string('image')->nullable();
            $table->string('phone')->nullable();
            $table->foreignIdFor(Menu::class)->nullable();
            $table->foreignIdFor(User::class)->nullable();
            $table->string('services')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
