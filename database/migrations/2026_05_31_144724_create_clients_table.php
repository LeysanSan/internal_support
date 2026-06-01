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
    Schema::create('clients', function (Blueprint $table) {

        $table->id();

        $table->foreignId('company_id')
              ->constrained()
              ->cascadeOnUpdate();

        $table->string('full_name');

        $table->string('phone')->nullable();

        $table->string('email')->nullable();

        $table->string('preferred_channel')->nullable();

        $table->string('branch')->nullable();

        $table->enum('connection_type', [
            'ethernet',
            'wifi',
            'vpn'
        ])->nullable();

        $table->boolean('has_ip_phone')->default(false);

        $table->boolean('pc_under_phone')->default(false);

        $table->string('mac_address')->nullable();

        $table->string('ip_address')->nullable();

        $table->string('switch_name')->nullable();

        $table->string('switch_port')->nullable();

        $table->text('network_services')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
