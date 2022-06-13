<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserProfile extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "user_profiles";

    /**
     * Get the user that owns the profile.
     */
    public function profile()
    {
        return $this->belongsTo(User::class);
    }
}
