<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Chamado extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'solicitacao', 'prioridade', 'solicitante', 'setor', 'status'];

    public function getCreatedAtAttribute($chamados){
        return Carbon::parse($chamados)->format('d/m/Y | H:i');
    }
}