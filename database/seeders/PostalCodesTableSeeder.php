<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostalCodesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('postal_codes')->delete();
        
        \DB::table('postal_codes')->insert(array (
            0 => 
            array (
                'id' => 9,
                'code' => '10443',
                'ftth_count' => 0,
                'name' => 'ΣΕΠΟΛΙΑ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            1 => 
            array (
                'id' => 10,
                'code' => '10444',
                'ftth_count' => 0,
                'name' => 'ΚΟΛΩΝΟΣ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            2 => 
            array (
                'id' => 11,
                'code' => '10445',
                'ftth_count' => 0,
                'name' => 'ΤΡΕΙΣ ΓΕΦΥΡΕΣ ΑΘΗΝΑ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            3 => 
            array (
                'id' => 12,
                'code' => '10446',
                'ftth_count' => 0,
                'name' => 'ΠΛΑΤΕΙΑ ΑΜΕΡΙΚΗΣ ΚΥΨΕΛΗ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            4 => 
            array (
                'id' => 13,
                'code' => '10671',
                'ftth_count' => 0,
                'name' => 'ΠΛΑΤΕΙΑ ΚΑΝΙΓΓΟΣ ΣΥΝΤΑΓΜΑ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            5 => 
            array (
                'id' => 14,
                'code' => '10672',
                'ftth_count' => 0,
                'name' => 'ΠΛΑΤΕΙΑ ΚΑΝΙΓΓΟΣ ΣΥΝΤΑΓΜΑ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            6 => 
            array (
                'id' => 15,
                'code' => '10673',
                'ftth_count' => 0,
                'name' => 'ΚΟΛΩΝΑΚΙ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            7 => 
            array (
                'id' => 16,
                'code' => '10674',
                'ftth_count' => 0,
                'name' => 'ΕΘΝΙΚΟΣ ΚΗΠΟΣ ΖΑΠΠΕΙ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            8 => 
            array (
                'id' => 17,
                'code' => '10675',
                'ftth_count' => 0,
                'name' => 'ΚΟΛΩΝΑΚΙ ΕΥΑΓΓΕΛΙΣΜΟ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            9 => 
            array (
                'id' => 18,
                'code' => '10676',
                'ftth_count' => 0,
                'name' => 'ΕΥΑΓΓΕΛΙΣΜΟΣ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            10 => 
            array (
                'id' => 19,
                'code' => '10677',
                'ftth_count' => 0,
                'name' => 'ΠΛΑΤΕΙΑ ΚΑΝΙΓΓΟΣ ΣΥΝΤΑΓΜΑ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            11 => 
            array (
                'id' => 20,
                'code' => '10678',
                'ftth_count' => 0,
                'name' => 'ΠΛΑΤΕΙΑ ΚΑΝΙΓΓΟΣ ΣΥΝΤΑΓΜΑ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            12 => 
            array (
                'id' => 21,
                'code' => '10679',
                'ftth_count' => 0,
                'name' => 'ΠΛΑΤΕΙΑ ΚΑΝΙΓΓΟΣ ΣΥΝΤΑΓΜΑ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            13 => 
            array (
                'id' => 22,
                'code' => '10680',
                'ftth_count' => 0,
                'name' => 'ΕΞΑΡΧΕΙΑ ΑΘΗΝΑ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            14 => 
            array (
                'id' => 23,
                'code' => '10681',
                'ftth_count' => 0,
                'name' => 'ΕΞΑΡΧΕΙΑ ΑΘΗΝΑ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            15 => 
            array (
                'id' => 24,
                'code' => '10682',
                'ftth_count' => 0,
                'name' => 'ΙΟΥΛΙΑΝΟΥ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            16 => 
            array (
                'id' => 25,
                'code' => '10683',
                'ftth_count' => 0,
                'name' => 'ΘΕΜΟΣΤΟΚΛΕΟΥΣ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            17 => 
            array (
                'id' => 26,
                'code' => '11141',
                'ftth_count' => 0,
                'name' => 'ΚΥΠΡΙΑΔΟΥ ΑΘΗΝΑ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            18 => 
            array (
                'id' => 27,
                'code' => '11142',
                'ftth_count' => 0,
                'name' => 'ΛΑΜΠΡΙΝΗ ΑΘΗΝΑ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            19 => 
            array (
                'id' => 28,
                'code' => '11143',
                'ftth_count' => 0,
                'name' => 'ΡΙΖΟΥΠΟΛΗ ΑΘΗΝΑ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            20 => 
            array (
                'id' => 29,
                'code' => '11144',
                'ftth_count' => 0,
                'name' => 'ΚΑΤΩ ΠΑΤΗΣΙΑ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            21 => 
            array (
                'id' => 30,
                'code' => '11145',
                'ftth_count' => 0,
                'name' => 'ΤΡΕΙΣ ΓΕΦΥΡΕΣ ΑΘΗΝΑ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            22 => 
            array (
                'id' => 31,
                'code' => '11146',
                'ftth_count' => 0,
                'name' => 'ΓΑΛΑΤΣΙ ΛΑΜΠΡΙΝΗ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            23 => 
            array (
                'id' => 32,
                'code' => '11251',
                'ftth_count' => 0,
                'name' => 'ΠΛΑΤΕΙΑ ΑΜΕΡΙΚΗΣ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            24 => 
            array (
                'id' => 33,
                'code' => '11252',
                'ftth_count' => 0,
                'name' => 'ΠΛΑΤΕΙΑ ΑΤΤΙΚΗΣ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:53',
            ),
            25 => 
            array (
                'id' => 34,
                'code' => '11253',
                'ftth_count' => 0,
                'name' => 'ΚΑΤΩ ΠΑΤΗΣΙΑ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            26 => 
            array (
                'id' => 35,
                'code' => '11254',
                'ftth_count' => 0,
                'name' => 'ΚΑΤΩ ΠΑΤΗΣΙΑ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            27 => 
            array (
                'id' => 36,
                'code' => '11255',
                'ftth_count' => 0,
                'name' => 'ΠΛΑΤΕΙΑ ΚΟΛΙΑΤΣΟΥ ΚΥΨΕΛΗ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            28 => 
            array (
                'id' => 37,
                'code' => '11256',
                'ftth_count' => 0,
                'name' => 'ΠΛΑΤΕΙΑ ΚΟΛΙΑΤΣΟΥ ΚΥΨΕΛΗ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            29 => 
            array (
                'id' => 38,
                'code' => '11257',
                'ftth_count' => 0,
                'name' => 'ΠΛΑΤΕΙΑ ΑΜΕΡΙΚΗΣ ΚΥΨΕΛΗ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            30 => 
            array (
                'id' => 39,
                'code' => '11361',
                'ftth_count' => 0,
                'name' => 'ΠΛΑΤΕΙΑ ΑΜΕΡΙΚΗΣ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            31 => 
            array (
                'id' => 40,
                'code' => '11364',
                'ftth_count' => 0,
                'name' => 'ΑΜΠΕΛΟΚΗΠΟΙ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            32 => 
            array (
                'id' => 41,
                'code' => '11471',
                'ftth_count' => 0,
                'name' => 'ΝΕΑΠΟΛΗ ΑΘΗΝΑΣ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            33 => 
            array (
                'id' => 42,
                'code' => '11472',
                'ftth_count' => 0,
                'name' => 'ΝΕΑΠΟΛΗ ΑΘΗΝΑΣ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            34 => 
            array (
                'id' => 43,
                'code' => '11473',
                'ftth_count' => 0,
                'name' => 'ΝΕΑΠΟΛΗ ΑΘΗΝΑΣ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            35 => 
            array (
                'id' => 44,
                'code' => '11474',
                'ftth_count' => 0,
                'name' => 'ΓΚΥΖΗ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            36 => 
            array (
                'id' => 45,
                'code' => '11475',
                'ftth_count' => 0,
                'name' => 'ΓΚΥΖΗ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            37 => 
            array (
                'id' => 46,
                'code' => '11476',
                'ftth_count' => 0,
                'name' => 'ΓΚΥΖΗ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            38 => 
            array (
                'id' => 47,
                'code' => '11521',
                'ftth_count' => 0,
                'name' => 'ΕΥΑΓΓΕΛΙΣΜΟΣ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            39 => 
            array (
                'id' => 48,
                'code' => '11522',
                'ftth_count' => 0,
                'name' => 'ΑΜΠΕΛΟΚΗΠΟΙ ΓΚΥΖΗ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            40 => 
            array (
                'id' => 49,
                'code' => '11523',
                'ftth_count' => 0,
                'name' => 'ΑΜΠΕΛΟΚΗΠΟΙ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            41 => 
            array (
                'id' => 50,
                'code' => '11524',
                'ftth_count' => 0,
                'name' => 'ΑΜΠΕΛΟΚΗΠΟΙ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            42 => 
            array (
                'id' => 51,
                'code' => '11526',
                'ftth_count' => 0,
                'name' => 'ΕΡΥΘΡΟΣ ΣΤΑΥΡΟΣ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            43 => 
            array (
                'id' => 52,
                'code' => '11527',
                'ftth_count' => 0,
                'name' => 'ΜΙΧΑΛΑΚΟΠΟΥΛΟΥ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            44 => 
            array (
                'id' => 53,
                'code' => '11528',
                'ftth_count' => 0,
                'name' => 'ΜΙΧΑΛΑΚΟΠΟΥΛΟΥ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            45 => 
            array (
                'id' => 54,
                'code' => '11632',
                'ftth_count' => 0,
                'name' => 'ΓΟΥΒΑ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            46 => 
            array (
                'id' => 55,
                'code' => '11633',
                'ftth_count' => 0,
                'name' => 'ΠΑΓΚΡΑΤΙ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            47 => 
            array (
                'id' => 56,
                'code' => '11634',
                'ftth_count' => 0,
                'name' => 'ΠΑΓΚΡΑΤΙ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            48 => 
            array (
                'id' => 57,
                'code' => '11635',
                'ftth_count' => 0,
                'name' => 'ΣΤΑΔΙΟΑΘΗΝΑ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            49 => 
            array (
                'id' => 58,
                'code' => '11851',
                'ftth_count' => 0,
                'name' => 'ΘΗΣΕΙΟ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            50 => 
            array (
                'id' => 59,
                'code' => '11852',
                'ftth_count' => 0,
                'name' => 'ΠΕΤΡΑΛΩΝΑ ΑΝΩ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            51 => 
            array (
                'id' => 60,
                'code' => '11853',
                'ftth_count' => 0,
                'name' => 'ΠΕΤΡΑΛΩΝΑ ΚΑΤΩ',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:54',
            ),
            52 => 
            array (
                'id' => 61,
                'code' => '11854',
                'ftth_count' => 0,
                'name' => '',
                'created_at' => '2024-02-01 15:41:25',
                'updated_at' => '2024-02-01 15:41:25',
            ),
            53 => 
            array (
                'id' => 62,
                'code' => '11855',
                'ftth_count' => 0,
                'name' => '',
                'created_at' => '2024-02-01 15:41:26',
                'updated_at' => '2024-02-01 15:41:26',
            ),
            54 => 
            array (
                'id' => 63,
                'code' => '12351',
                'ftth_count' => 0,
                'name' => '',
                'created_at' => '2024-02-01 15:41:26',
                'updated_at' => '2024-02-01 15:41:26',
            ),
            55 => 
            array (
                'id' => 64,
                'code' => '12461',
                'ftth_count' => 0,
                'name' => 'ΧΑΙΔΑΡΙ',
                'created_at' => '2024-02-01 15:41:26',
                'updated_at' => '2024-02-01 15:41:54',
            ),
        ));
        
        
    }
}