<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Teams;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $country = [
            [
              "label"=> "Argentina",
              "value"=> "Argentina",
              "code"=> "AR",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/AR.svg",
            ],
            [
              "label"=> "Australia",
              "value"=> "Australia",
              "code"=> "AU",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/AU.svg",
            ],
            [
              "label"=> "Belgium",
              "value"=> "Belgium",
              "code"=> "BE",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/BE.svg",
            ],
            [
              "label"=> "Brazil",
              "value"=> "Brazil",
              "code"=> "BR",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/BR.svg",
            ],
            [
              "label"=> "Canada",
              "value"=> "Canada",
              "code"=> "CA",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/CA.svg",
            ],
            [
              "label"=> "Switzerland",
              "value"=> "Switzerland",
              "code"=> "CH",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/CH.svg",
            ],
            [
              "label"=> "Cameroon",
              "value"=> "Cameroon",
              "code"=> "CM",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/CM.svg",
            ],
            [
              "label"=> "Costa Rica",
              "value"=> "Costa Rica",
              "code"=> "CR",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/CR.svg",
            ],
            [
              "label"=> "Germany",
              "value"=> "Germany",
              "code"=> "DE",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/DE.svg",
            ],
            [
              "label"=> "Denmark",
              "value"=> "Denmark",
              "code"=> "DK",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/DK.svg",
            ],
            [
              "label"=> "Ecuador",
              "value"=> "Ecuador",
              "code"=> "EC",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/EC.svg",
            ],
            [
              "label"=> "Spain",
              "value"=> "Spain",
              "code"=> "ES",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/ES.svg",
            ],
            [
              "label"=> "France",
              "value"=> "France",
              "code"=> "FR",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/FR.svg",
            ],
            [
              "label"=> "Ghana",
              "value"=> "Ghana",
              "code"=> "GH",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/GH.svg",
            ],
            [
              "label"=> "Croatia",
              "value"=> "Croatia",
              "code"=> "HR",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/HR.svg",
            ],
            [
              "label"=> "Iran",
              "value"=> "Iran",
              "code"=> "IR",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/IR.svg",
            ],
            [
              "label"=> "Japan",
              "value"=> "Japan",
              "code"=> "JP",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/JP.svg",
            ],
            [
              "label"=> "South Korea",
              "value"=> "South Korea",
              "code"=> "KR",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/KR.svg",
            ],
            [
              "label"=> "Morocco",
              "value"=> "Morocco",
              "code"=> "MA",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/MA.svg",
            ],
            [
              "label"=> "Mexico",
              "value"=> "Mexico",
              "code"=> "MX",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/MX.svg",
            ],
            [
              "label"=> "Netherlands",
              "value"=> "Netherlands",
              "code"=> "NL",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/NL.svg",
            ],
            [
              "label"=> "Poland",
              "value"=> "Poland",
              "code"=> "PL",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/PL.svg",
            ],
            [
              "label"=> "Portugal",
              "value"=> "Portugal",
              "code"=> "PT",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/PT.svg",
            ],
            [
              "label"=> "Qatar",
              "value"=> "Qatar",
              "code"=> "QA",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/QA.svg",
            ],
            [
              "label"=> "Saudi Arabia",
              "value"=> "Saudi Arabia",
              "code"=> "SA",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/SA.svg",
            ],
            [
              "label"=> "Senegal",
              "value"=> "Senegal",
              "code"=> "SN",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/SN.svg",
            ],
            [
              "label"=> "Serbia",
              "value"=> "Serbia",
              "code"=> "RS",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/RS.svg",
            ],
            [
              "label"=> "Tunisia",
              "value"=> "Tunisia",
              "code"=> "TN",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/TN.svg",
            ],
            [
              "label"=> "Uruguay",
              "value"=> "Uruguay",
              "code"=> "UY",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/UY.svg",
            ],
            [
              "label"=> "United States",
              "value"=> "United States",
              "code"=> "US",
              "flag"=> "http://purecatamphetamine.github.io/country-flag-icons/3x2/US.svg",
            ],
            [
              "label"=> "England",
              "value"=> "England",
              "code"=> "UK",
              "flag"=> "https://upload.wikimedia.org/wikipedia/en/thumb/b/be/Flag_of_England.svg/383px-Flag_of_England.svg.png",
            ],
            [
              "label"=> "Wales",
              "value"=> "Wales",
              "code"=> "UK",
              "flag"=> "https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Flag_of_Wales.svg/383px-Flag_of_Wales.svg.png",
            ],
          ];
        
      foreach($country as $team){
        Teams::create($team);
      }
    }
}
