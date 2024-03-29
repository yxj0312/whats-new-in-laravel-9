<?php

use App\Enums\PostState;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            // $table->id();
            // $table->foreignIdFor(User::class)->constrained()->onDelete('cascade');
            // $table->string('title');
            // $table->text('body')->fulltext();
            // // $table->enum('state', PostState::class);
            // // $table->enum('state', ['draft', 'archived','published', 'hold']);
            // $table->string('state')->default('draft');
            // $table->timestamps();

            $table->id();
            $table->foreignId('author_id')->constrained('users');
            $table->string('title');
            $table->string('slug');
            $table->longText('body');
            $table->dateTime('published_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
