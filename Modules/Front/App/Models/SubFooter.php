<?php

namespace Modules\Front\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Front\Database\factories\SubFooterFactory;

class SubFooter extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'model', 'link', 'titel_footer_id'];

    public function title_footer()
    {
        return $this->belongsTo(TitelFooter::class, 'titel_footer_id', 'id');
    }
}
