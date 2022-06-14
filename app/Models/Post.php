<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'content'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "posts";

    /**
     * Get the user that owns the profile.
     */
    public function post()
    {
        return $this->belongsTo(User::class);
    }
}
