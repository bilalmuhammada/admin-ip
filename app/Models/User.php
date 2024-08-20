<?php

namespace App\Models;

use App\Helpers\SiteHelper;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'age',
        'created_at_formatted',
        'status_formatted',
        'image_url',
        'member_since',
        'number_of_outlets',
        'number_of_deals',
        'pending_deals',
        'cancelled_deals',
        'amount_received',
        'amount_paid',
        'rating_influencer_pro',
        'rating_by_vendor',
        'submitted_files',
        'vendor_user_person_name',
        'country_name',
        'city_name'
    ];

    public function getAgeAttribute()
    {
        return Carbon::parse($this->dob)->age;
    }

    public function getCreatedAtFormattedAttribute()
    {
        return SiteHelper::reformatToDateString($this->created_at);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function nationality()
    {
        return $this->belongsTo(Country::class, 'nationality_id', 'id');
    }

    public function getStatusFormattedAttribute()
    {
        return ucfirst(strtolower($this->status));
    }

    public function attachment()
    {
        return $this->hasOne(Attachment::class, 'object_id')->where('object', 'User');
    }

    public function getImageUrlAttribute()
    {
        if ($this->attachment) {
            return asset('uploads/users') . '/' . $this->attachment->name;
        } else {
            return 'https://via.placeholder.com/30x30';
        }
    }

    public function getMemberSinceAttribute()
    {
        return SiteHelper::reformatReadableDateTime($this->created_at);
    }

    public function subscription()
    {
        return $this->hasOne(Subscription::class)->where('status', '=', 'active');
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function getNumberOfDealsAttribute()
    {
        return 10;
    }

    public function getPendingDealsAttribute()
    {
        return 3;
    }

    public function getCancelledDealsAttribute()
    {
        return 7;
    }

    public function getAmountReceivedAttribute()
    {
        if ($this->subscription)
            return $this->subscription->amount_paid;
        else
            return 0;
    }

    public function getRatingInfluencerProAttribute()
    {
        return '3.5';
    }

    public function getRatingByVendorAttribute()
    {
        return '2.0';
    }


    public function getSubmittedFilesAttribute()
    {
        return '20';
    }

    public function getNumberOfOutletsAttribute()
    {
        return '20';
    }

    public function getAmountPaidAttribute()
    {
        return '$3000';
    }

    public function getVendorUserPersonNameAttribute()
    {
        return 'vendor name';
    }

    public function getCountryNameAttribute()
    {
        if ($this->country)
            return $this->country->name;
        else
            return '';
    }

    public function getCityNameAttribute()
    {
        if ($this->city)
            return $this->city->name;
        else
            return '';
    }

}
