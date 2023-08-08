<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'deadline',
        'task_status',
        'user_id',
        'client_id',
        'project_id',
    ];

    //Relation 1:N inversa
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    //Relation 1:N inversa
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class)->withDefault();
    }

    //Relation 1:N inversa
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class)->withDefault();
    }
}
