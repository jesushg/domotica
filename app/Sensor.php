<?php

namespace App;

class Sensor extends Circuit
{
    public static $types = ['ldr', 'motion', 'temperature', 'sound', 'door', 'window'];
}
