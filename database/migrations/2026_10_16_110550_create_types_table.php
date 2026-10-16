<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Type;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        Type::create([
            'name' => 'Electronics',
            'description' => 'Electronic products',
        ]);

        Type::create([
            'name' => 'Books',
            'description' => 'Printed and digital books',
        ]);

        Type::create([
            'name' => 'Home',
            'description' => 'Home and kitchen products',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types');
    }
};
