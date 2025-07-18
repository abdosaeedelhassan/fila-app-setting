<?php

namespace AsayHome\FilaAppSetting\Facades;

use Illuminate\Support\Facades\Facade;

class Skeleton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AsayHome\FilaAppSetting\FilaAppSetting::class;
    }
}
