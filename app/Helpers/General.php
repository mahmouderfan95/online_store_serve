<?php
use Illuminate\Support\Facades\Config;
function getLanguges(){
    \App\Models\language::active()->Selection()->get();
}
function getDefaultLang(){
    return config::get('app.locale');
}

