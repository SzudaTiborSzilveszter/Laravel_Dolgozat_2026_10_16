<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained();
            $table->string('name');
            $table->string('description');
            $table->integer('price');
            $table->timestamps();
        });

        Product::create([
            'type_id' => 1,
            'name' => 'Wireless headphones',
            'description' => 'Bluetooth over-ear headphones',
            'price' => 89,
        ]);

        Product::create([
            'type_id' => 2,
            'name' => 'Laravel guide',
            'description' => 'A practical web development book',
            'price' => 35,
        ]);

        Product::create([
            'type_id' => 3,
            'name' => 'Coffee maker',
            'description' => 'Compact filter coffee maker',
            'price' => 59,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
