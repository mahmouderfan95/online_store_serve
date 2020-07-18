<?php
use Illuminate\Support\Facades\Config;
function getLanguges(){
    return \App\Models\language::Selection()->get();
}
function getDefaultLang(){
    return config::get('app.locale');
}

