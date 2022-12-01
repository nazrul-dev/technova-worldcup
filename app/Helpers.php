
<?php
function isAssoc(array $arr)
{
    if (array() === $arr) return false;
    return array_keys($arr) !== range(0, count($arr) - 1);
}


function getManifestAssets()
{

    $path = public_path() . "/build/manifest.json";
    $json = json_decode(file_get_contents($path), true);
   return [
    'js' => $json['resources/js/app.js']['file'],
    'css' => $json['resources/css/app.css']['file']
   ];
}
