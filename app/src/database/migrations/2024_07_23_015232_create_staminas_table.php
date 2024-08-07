<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        public function up(): void
        {
            Schema::create('staminas', function (Blueprint $table) {
                $table->id();
                $table->integer('user_id');
                $table->integer('stamina_num');
                $table->timestamps();

                $table->index('user_id');


            });
        }

        public function down(): void
        {
            Schema::dropIfExists('staminas');
        }
    };
