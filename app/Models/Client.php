<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'contact_name',
        'contact_email',
        'contact_phone_number',
        'company_name',
        'company_address',
        'company_phone_number',
    ];


    //Relation 1:N (one client has many projects)
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    //Relation 1:N 
    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
