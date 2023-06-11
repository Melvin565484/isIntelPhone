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
        Schema::create('quejas_reclamos', function (Blueprint $table) {
            $table->id();
        $table->string('nombre');
        $table->string('correo');
        $table->text('mensaje');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quejas_reclamos');
    }
};



document.addEventListener('DOMContentLoaded', function() {
   
    var form = document.getElementById('quejas-reclamos-form');
  
   
    form.addEventListener('submit', function(event) {
      event.preventDefault();
  
      
      var formData = new FormData(form);
  
     
      axios.post('/quejas-reclamos', formData)
        .then(function(response) {
         
          alert('Queja o reclamo enviado correctamente');
  
         
        })
        .catch(function(error) {
         
          alert('Se produjo un error al enviar la queja o reclamo');
        });
    });
  });
  
