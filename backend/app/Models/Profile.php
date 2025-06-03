<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'bio', 'website', 'github', 'linkedin'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Ejemplo de función futura
    public function getGithubProjects()
    {
        // Aquí iría la lógica para consumir la API de GitHub
    }
}
