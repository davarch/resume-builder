<?php

declare(strict_types=1);

use App\Models\Profile;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('shares', static function (Blueprint $table) {
            $table->id();

            $table->string('token');

            $table->string('email');
            $table->string('template')->nullable();

            $table->foreignIdFor(Profile::class)
                ->index()
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        if (app()->isLocal()) {
            Schema::dropIfExists('shares');
        }
    }
};
