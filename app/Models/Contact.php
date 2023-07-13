<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Builders\ModelBuilder;
use App\Traits\BelongsToUser;
use App\Traits\MultitenantableForUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory;
    use SoftDeletes;
    use BelongsToUser;
    use MultitenantableForUser;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'perma_province',
        'perma_district',
        'perma_municipality',
        'perma_ward_number',
        'perma_tol',
        'temp_province',
        'temp_district',
        'temp_municipality',
        'temp_ward_number',
        'temp_tol',
        'phone_number',
        'father_name',
        'father_country_id',
        'mother_name',
        'mother_country_id',
        'grandfather_name',
        'grandfather_country_id',
        'spouse_name',
        'spouse_country_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function permaProvince(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function tempProvince(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function permaDistrict(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }

    public function tempDistrict(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }

    public function permaMunicipality(): BelongsTo
    {
        return $this->belongsTo(Municipality::class);
    }

    public function tempMunicipality(): BelongsTo
    {
        return $this->belongsTo(Municipality::class);
    }

    public function fatherCountry(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'father_country_id');
    }

    public function motherCountry(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'mother_country_id');
    }

    public function grandfatherCountry(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'grandfather_country_id');
    }

    public function spouseCountry(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'spouse_country_id');
    }

    public function newEloquentBuilder($query): ModelBuilder
    {
        return new ModelBuilder(
            $query,
        );
    }
}
