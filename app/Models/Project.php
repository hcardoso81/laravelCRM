<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'deadline',
        'status',
        'user_id',
        'client_id',
    ];

    //Relation 1:N inversa (one project belong to one user)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    //Relation 1:N inversa
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class)->withDefault();
    }

    //Relation 1:N 
    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
