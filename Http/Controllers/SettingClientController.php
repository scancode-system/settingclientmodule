<?php

namespace Modules\SettingClient\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\SettingClient\Entities\SettingClient;

class SettingClientController extends Controller
{

    public function update(Request $request, SettingClient $setting_client)
    {
        $setting_client->update($request->all());
        return back()->with('success', 'Configuração de cliente alterado.');
    }

}