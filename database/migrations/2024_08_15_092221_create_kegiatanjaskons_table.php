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
        Schema::create('kegiatanjaskons', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('laporankegiatan_id');
            $table->foreignId('user_id');            
            $table->foreignId('pengawasanlokasi_id');            
            $table->text('judul_kegiatan');
            $table->text('alamat_kegiatan');
            $table->string('berita1'); 
            $table->string('berita2');
            $table->string('berita3');
            $table->string('berita4');
            $table->string('berita5');
            $table->string('berita6');
            $table->string('berita7');
            $table->string('berita8');
            $table->string('berita9');
            $table->string('berita10');
            $table->string('berita11');
            $table->string('berita12');
            $table->string('berita13');
            $table->string('berita14');
            $table->string('berita15');
            $table->string('berita16');
            $table->string('berita17');
            $table->string('berita18');
            $table->string('berita19');
            $table->string('berita20');
            $table->string('berita21');
            $table->string('berita22');
            $table->string('berita23');
            $table->string('berita24');
            $table->string('berita25');
            $table->string('berita26');
            $table->string('berita27');
            $table->string('berita28');
            $table->string('berita29');
            $table->string('berita30');
            $table->string('berita31');
            $table->string('berita32');
            $table->string('berita33');
            $table->string('berita34');
            $table->string('berita35');
            $table->string('berita36');
            $table->string('berita37');
            $table->string('berita38');
            $table->string('berita39');
            $table->string('berita40');
            $table->string('berita41');
            $table->string('berita42');
            $table->string('berita43');
            $table->string('berita44');
            $table->string('berita45');
            $table->string('berita46');
            $table->string('berita47');
            $table->string('berita48');
            $table->date('tanggal'); 
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatanjaskons');
    }
};
