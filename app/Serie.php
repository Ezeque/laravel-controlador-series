<?php

namespace app;

use Illuminate\Database\Eloquent\Model;
use App\Models\Temporada;

class Serie extends Model{

    protected $table = 'series';
    public $timestamps = false;
    protected $fillable = ['nome', 'descricao'];

    public function temporadas(){
        return $this->hasMany(Temporada::class);
    }
}
