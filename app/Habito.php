<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habito extends Model
{
    //permitindo inserção de dados em massa
    protected $fillable = ['nome', 'descricao', 'tp_habito', 'data_inicio_controle', 'objetivo'];

    public function historicos(){
        return $this->hasMany('App\Historico');
    }
}
