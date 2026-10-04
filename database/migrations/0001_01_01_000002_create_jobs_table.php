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
        /*
        |--------------------------------------------------------------------------
        | Jobs Table
        |--------------------------------------------------------------------------
        */

        Schema::create('jobs', function (Blueprint $table) {
            $table->id();

            $table->string('queue', 100)->index();

            $table->longText('payload');

            $table->unsignedTinyInteger('attempts');

            $table->unsignedInteger('reserved_at')->nullable();

            $table->unsignedInteger('available_at');

            $table->unsignedInteger('created_at');
        });

        /*
        |--------------------------------------------------------------------------
        | Job Batches Table
        |--------------------------------------------------------------------------
        */

        Schema::create('job_batches', function (Blueprint $table) {
            $table->string('id')->primary();

            $table->string('name');

            $table->integer('total_jobs');

            $table->integer('pending_jobs');

            $table->integer('failed_jobs');

            $table->longText('failed_job_ids');

            $table->mediumText('options')->nullable();

            $table->integer('cancelled_at')->nullable();

            $table->integer('created_at');

            $table->integer('finished_at')->nullable();
        });

        /*
        |--------------------------------------------------------------------------
        | Failed Jobs Table
        |--------------------------------------------------------------------------
        */

        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();

            $table->string('uuid', 100)->unique();

            // ছোট length ব্যবহার করা হয়েছে যাতে MySQL index error না দেয়
            $table->string('connection', 100);

            $table->string('queue', 100);

            $table->longText('payload');

            $table->longText('exception');

            $table->timestamp('failed_at')->useCurrent();

            /*
            |--------------------------------------------------------------------------
            | Composite Index
            |--------------------------------------------------------------------------
            |
            | connection + queue + failed_at
            | মোট index size ছোট রাখার জন্য connection/queue = 100
            |
            */

            $table->index(
                ['connection', 'queue', 'failed_at'],
                'failed_jobs_connection_queue_failed_at_index'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');

        Schema::dropIfExists('job_batches');

        Schema::dropIfExists('failed_jobs');
    }
};
