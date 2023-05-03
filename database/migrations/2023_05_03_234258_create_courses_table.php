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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->foreignId("categories_id")->constrained()->onDelete("cascade");
            $table->string("instructor");
            $table->string("duration");
            $table->blob("description");
            $table->string("sort_description");
            $table->string("lang");
            $table->string("mode");
            $table->boolean("status");
            $table->float("fees");
            $table->float("discount_fees");
            $table->string("cover");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
