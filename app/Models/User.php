<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'restaurant_id',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
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
    public function hasRole($role)
    {
        return $this->role === $role;
    }

    public function restaurant()
{
    return $this->hasOne(Restaurant::class, 'admin_id');

}
public function restaurants()
{
    return $this->belongsTo(Restaurant::class);
}


public function plats()
{
    // Récupérer le restaurant associé à l'utilisateur
    $restaurant = $this->restaurants;

    // Si le restaurant est null, retourner une collection vide
    if ($restaurant) {
        return $restaurant->plats;
    }

    return collect(); // Retourner une collection vide si le restaurant est null
}



public function commandes()
{
    return $this->hasMany(Commande::class, 'client_id');
}
public function clientReservations()
{
    return $this->hasMany(Reservation::class, 'client_id');
}

public function restaurantReservations()
{
    return $this->hasManyThrough(Reservation::class, Restaurant::class, 'admin_id', 'restaurant_id', 'id', 'id');
}

public function reservations()
{
    return $this->hasMany(Reservation::class, 'client_id');
}




    public function redirectTo()
    {
        if ($this->role === 'superadmin') {
            return '/superadmin/index';
        } elseif ($this->role === 'admin') {
            return '/admin/index';
        } else {
            // Redirection par défaut pour les utilisateurs sans rôle défini
            return '/dashboard';
        }
    }
}
