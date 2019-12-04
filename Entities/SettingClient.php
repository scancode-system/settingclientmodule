<?php

namespace Modules\SettingClient\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Portal\Entities\EventSetting;

class SettingClient extends Model
{
    protected $fillable = ['id', 'client_start', 'corporate_name', 'cpf_cnpj', 'buyer', 'email', 'phone'];


      public function event_setting()
    {
        return $this->morphOne(EventSetting::class, 'configurable');
    }
}
