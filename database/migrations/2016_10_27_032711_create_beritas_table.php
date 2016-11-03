    <?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateBeritasTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('beritas', function (Blueprint $table) {
                $table->increments('id_berita',10);
                $table->integer('id_kategori')->unsigned();
                $table->string('judul');
                $table->string('isi_berita');
                $table->timestamps();
              
            });
            Schema::table('beritas', function($table){
                 $table->foreign('id_kategori')->references('id_kategori')->on('kategoris'); 
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('beritas');
        }
    }
