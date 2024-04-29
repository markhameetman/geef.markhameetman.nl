<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gift extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function getUrlAttribute()
    {
        if (strpos($this->attributes['url'], 'bol.com') === true) {
            $partner_id = '1015523';
            return 'https://partner.bol.com/click/click?p=2&t=url&s=' . $partner_id . '&f=TXL&url=' . urlencode($this->attributes['url']) . '&name=bureau.partners';
        } elseif (strpos($this->attributes['url'], 'coolblue') === true) {
            $partner_id = '1100l7NC9';
            return 'https://prf.hn/click/camref:' . $partner_id . '/pubref:share.bureau.partners/destination:' . urlencode($this->attributes['url']);
        } else {
            return $this->attributes['url'];
        }
    }
}
