<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NkTreatmentList extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'nk_treatment_list_id';
    protected $table = 'nk_treatment_lists';
    protected $guarded = ['nk_treatment_list_id'];
    public function customer()
    {
        return $this->belongsTo(CustomerList::class, 'customer_list_id', 'customer_list_id');
    }    
}
