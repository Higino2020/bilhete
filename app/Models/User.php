<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'tipo'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public static function cadastrar(Request $request){
        $nomes = explode(' ',$request->name);
        $tamanho = sizeof($nomes);
        $user = new User();
        $user->name = $request->name;
        if($tamanho == 1){
            $user->email = $nomes[0]."@macon.ao";
        }else{
            $user->email = $nomes[$tamanho-1].$nomes[0]."@macon.ao";
        }
        $user->tipo = "Funcionario";
        $user->password = bcrypt($nomes[0]."macon2024");
        $user->save();
        return $user;
    }
}
