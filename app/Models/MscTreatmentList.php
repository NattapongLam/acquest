<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MscTreatmentList extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'msc_treatment_list_id';
    protected $table = 'msc_treatment_lists';
    protected $guarded = ['msc_treatment_list_id'];
    public function customer()
    {
        return $this->belongsTo(CustomerList::class, 'customer_list_id', 'customer_list_id');
    }    
}
