<?php

namespace app;

use Illuminate\Database\Eloquent\Model;
use App\Models\Temporada;

class Serie extends Model{

    protected $table = 'tb_series';
    public $timestamps = false;
    protected $fillable = ['nome'];

    public function temporadas(){
        return $this->hasMany(Temporada::class);
    }
}
