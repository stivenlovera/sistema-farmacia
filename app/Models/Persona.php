<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'persona';
    protected $primaryKey = 'personaId';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'CI',
        'nombre',
        'apellido',
        'fechaNac',
        'dirrecion',
        'telefono',
        'celular',
        'estado',
        'correoPersonal'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'personaId');
    }
    public function rol()
    {
        $personal = DB::table('rol')->select('rol.rolId')
        ->where('rol.personaId', json_decode(auth()->user()->personaId))
        ->get();
        foreach ($personal as $value) {
            switch ($value) {
                case 'Administrador':
                   return 'Administrador';
                    break;
                case 'Personal':
                    return 'Personal';
                    break;
                case 'Invitado':
                    return 'Invitado';
                    break;
                default:
                    break;
            }
        }
    }
}
