<?php
namespace App\Models;

use Illuminate\Database\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Autores;


class Livros extends Model{
    public $timestamps = false;

    public function autor()
    {
        return $this->hasOne(autores::class,'id','id_autores');
    }
}

?>
