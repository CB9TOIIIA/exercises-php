<?php

namespace HexletBasics\Functions;

function isLannisterSoldier($color, $shield)
{
    return ($color === 'red' && $shield === null) || ($shield === 'lion');
}

function parentFor($childName, $who = 'mother')
{
    switch ($childName) {
        case 'Daenerys Targaryen':
            $parents = [
                'mother' => 'Rhaella Targaryen',
                'father' => 'Aerys II Targaryen'
            ];
            return $parents[$who];
        case 'Cersei Lannister':
            $parents = [
                'father' => 'Tywin Lannister'
            ];
            return $parents[$who];
        case 'Joffrey Baratheon':
            $parents = [
                'mother' => 'Cersei Lannister'
            ];
            return $parents[$who];

        default:
            throw new \Exception("Wrong child's name '{$childName}");
    }
}

function calculateDistanceByTirion($param)
{
    list($from, $to) = explode('-', $param);
    return calculateDistance($from, $to);
}

function calculateDistance($source, $dest)
{
    $w = 'Winterfell';
    $t = 'The Twins';
    $e = 'The Eyrie';
    $q = 'Qarth';
    $d = 'Vaes Dothrak';

    if ($source === $w && $dest === $t || $source === $t && $dest === $w) {
        return 60;
    } elseif ($source === $t && $dest === $e || $source === $e && $dest === $t) {
        return 20;
    } elseif ($source === $q && $dest === $d || $source === $d && $dest === $q) {
        return 125;
    }

    throw new \Exception("Unknown cities: '{$source}' and {$dest}. Please check names");
}
