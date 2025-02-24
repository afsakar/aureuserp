<?php

namespace Webkul\Account\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Webkul\Security\Models\User;
use Webkul\Support\Models\Company;
use Webkul\Support\Models\Country;

class FiscalPosition extends Model
{
    use HasFactory;

    protected $table = 'accounts_fiscal_positions';

    protected $fillable = [
        'sort',
        'company_id',
        'country_id',
        'country_group_id',
        'creator_id',
        'zip_from',
        'zip_to',
        'foreign_vat',
        'name',
        'notes',
        'is_active',
        'auto_reply',
        'vat_required',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function countryGroup()
    {
        return $this->belongsTo(Country::class, 'country_group_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function fiscalPositionTaxes()
    {
        return $this->hasMany(FiscalPositionTax::class, 'fiscal_position_id');
    }
}
