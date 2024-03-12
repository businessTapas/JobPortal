<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_title',
        'job_designation',
        'experience_from',
        'experience_to',
        'salary_from',
        'salary_to',
        'shift_type',
        'status',
        'company_logo_image',
        'company_name',
        'location_address',
        'job_posted_date',
    ];

    
}
