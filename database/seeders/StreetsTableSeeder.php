<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StreetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('streets')->delete();
        
        \DB::table('streets')->insert(array (
            0 => 
            array (
                'id' => 144,
                'postal_code_id' => 9,
                'name' => 'ΑΓΙΑΣ ΣΟΦΙΑΣ',
            'cosmote_street_name' => 'ΑΓΙΑΣ ΣΟΦΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            1 => 
            array (
                'id' => 145,
                'postal_code_id' => 9,
                'name' => 'ΑΓΙΟΥ ΜΕΛΕΤΙΟΥ',
            'cosmote_street_name' => 'ΑΓΙΟΥ ΜΕΛΕΤΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            2 => 
            array (
                'id' => 146,
                'postal_code_id' => 9,
                'name' => 'ΑΓΧΙΑΛΟΥ',
            'cosmote_street_name' => 'ΑΓΧΙΑΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            3 => 
            array (
                'id' => 147,
                'postal_code_id' => 9,
                'name' => 'ΑΘΑΜΑΝΙΑΣ',
            'cosmote_street_name' => 'ΑΘΑΜΑΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            4 => 
            array (
                'id' => 148,
                'postal_code_id' => 9,
                'name' => 'ΑΚΤΙΟΥ',
            'cosmote_street_name' => 'ΑΚΤΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            5 => 
            array (
                'id' => 149,
                'postal_code_id' => 9,
                'name' => 'ΑΛΚΙΝΟΟΥ',
            'cosmote_street_name' => 'ΑΛΚΙΝΟΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            6 => 
            array (
                'id' => 150,
                'postal_code_id' => 9,
                'name' => 'ΑΜΒΡΑΚΙΑΣ',
            'cosmote_street_name' => 'ΑΜΒΡΑΚΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            7 => 
            array (
                'id' => 151,
                'postal_code_id' => 9,
                'name' => 'ΑΜΦΙΑΡΑΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-01 15:58:02',
            ),
            8 => 
            array (
                'id' => 152,
                'postal_code_id' => 9,
                'name' => 'ΑΝΤΩΝΙΟΥ ΧΡΗΣΤΟΜΑΝΟΥ',
            'cosmote_street_name' => 'ΑΝΤΩΝΙΟΥ ΧΡΗΣΤΟΜΑΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            9 => 
            array (
                'id' => 153,
                'postal_code_id' => 9,
                'name' => 'ΑΡΑΧΘΟΥ',
            'cosmote_street_name' => 'ΑΡΑΧΘΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            10 => 
            array (
                'id' => 154,
                'postal_code_id' => 9,
                'name' => 'ΑΥΛΩΝΟΣ',
            'cosmote_street_name' => 'ΑΥΛΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            11 => 
            array (
                'id' => 155,
                'postal_code_id' => 9,
                'name' => 'ΒΟΛΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-01 15:58:02',
            ),
            12 => 
            array (
                'id' => 156,
                'postal_code_id' => 9,
                'name' => 'ΒΟΡΕΙΟΥ ΗΠΕΙΡΟΥ',
            'cosmote_street_name' => 'ΒΟΡΕΙΟΥ ΗΠΕΙΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            13 => 
            array (
                'id' => 157,
                'postal_code_id' => 9,
                'name' => 'ΒΟΣΠΟΡΟΥ',
            'cosmote_street_name' => 'ΒΟΣΠΟΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            14 => 
            array (
                'id' => 158,
                'postal_code_id' => 9,
                'name' => 'ΓΑΡΔΙΚΙΟΥ',
            'cosmote_street_name' => 'ΓΑΡΔΙΚΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            15 => 
            array (
                'id' => 159,
                'postal_code_id' => 9,
                'name' => 'ΓΕΡΑΚΙΟΥ',
            'cosmote_street_name' => 'ΓΕΡΑΚΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            16 => 
            array (
                'id' => 160,
                'postal_code_id' => 9,
                'name' => 'ΔΗΜΗΤΡΙΟΥ ΠΑΝΟΥΡΓΙΑ',
            'cosmote_street_name' => 'ΔΗΜΗΤΡΙΟΥ ΠΑΝΟΥΡΓΙΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            17 => 
            array (
                'id' => 161,
                'postal_code_id' => 9,
                'name' => 'ΔΟΡΔΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-01 15:58:02',
            ),
            18 => 
            array (
                'id' => 162,
                'postal_code_id' => 9,
                'name' => 'ΔΡΑΜΑΣ',
            'cosmote_street_name' => 'ΔΡΑΜΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            19 => 
            array (
                'id' => 163,
                'postal_code_id' => 9,
                'name' => 'ΔΥΡΟΥ',
            'cosmote_street_name' => 'ΔΥΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            20 => 
            array (
                'id' => 164,
                'postal_code_id' => 9,
                'name' => 'ΔΥΡΡΑΧΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-01 15:58:02',
            ),
            21 => 
            array (
                'id' => 165,
                'postal_code_id' => 9,
                'name' => 'ΔΩΔΩΝΗΣ',
            'cosmote_street_name' => 'ΔΩΔΩΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            22 => 
            array (
                'id' => 166,
                'postal_code_id' => 9,
                'name' => 'ΕΛΛΗΣΠΟΝΤΟΥ',
            'cosmote_street_name' => 'ΕΛΛΗΣΠΟΝΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            23 => 
            array (
                'id' => 167,
                'postal_code_id' => 9,
                'name' => 'ΕΥΡΙΠΟΥ',
            'cosmote_street_name' => 'ΕΥΡΙΠΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            24 => 
            array (
                'id' => 168,
                'postal_code_id' => 9,
                'name' => 'ΖΙΤΣΗΣ',
            'cosmote_street_name' => 'ΖΙΤΣΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            25 => 
            array (
                'id' => 169,
                'postal_code_id' => 9,
                'name' => 'ΖΥΓΟΜΑΛΑ',
            'cosmote_street_name' => 'ΖΥΓΟΜΑΛΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            26 => 
            array (
                'id' => 170,
                'postal_code_id' => 9,
                'name' => 'ΙΣΜΗΝΗΣ',
            'cosmote_street_name' => 'ΙΣΜΗΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            27 => 
            array (
                'id' => 171,
                'postal_code_id' => 9,
            'name' => 'ΙΩΑΝΝΙΝΩΝ (ΠΡΧ ΚΟΛΩΝΟΣ - ΣΕΠΟΛΙΑ)',
            'cosmote_street_name' => 'ΙΩΑΝΝΙΝΩΝ (ΠΡΧ ΚΟΛΩΝΟΣ - ΣΕΠΟΛΙΑ) (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            28 => 
            array (
                'id' => 172,
                'postal_code_id' => 9,
                'name' => 'ΚΑΡΠΕΝΗΣΙΟΥ',
            'cosmote_street_name' => 'ΚΑΡΠΕΝΗΣΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            29 => 
            array (
                'id' => 173,
                'postal_code_id' => 9,
                'name' => 'ΚΙΣΣΑΜΟΥ',
            'cosmote_street_name' => 'ΚΙΣΣΑΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            30 => 
            array (
                'id' => 174,
                'postal_code_id' => 9,
                'name' => 'ΚΡΕΟΝΤΟΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-01 15:58:02',
            ),
            31 => 
            array (
                'id' => 175,
                'postal_code_id' => 9,
                'name' => 'ΛΕΩΦΟΡΟΣ ΚΩΝΣΤΑΝΤΙΝΟΥΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΚΩΝΣΤΑΝΤΙΝΟΥΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            32 => 
            array (
                'id' => 176,
                'postal_code_id' => 9,
                'name' => 'ΜΕΤΡΩΝ',
            'cosmote_street_name' => 'ΜΕΤΡΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            33 => 
            array (
                'id' => 177,
                'postal_code_id' => 9,
                'name' => 'ΝΕΜΕΑΣ',
            'cosmote_street_name' => 'ΝΕΜΕΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            34 => 
            array (
                'id' => 178,
                'postal_code_id' => 9,
                'name' => 'ΝΙΚΟΛΑΟΥ ΣΜΠΑΡΟΥΝΗ ΤΡΙΚΟΡΦΟΥ',
            'cosmote_street_name' => 'ΝΙΚΟΛΑΟΥ ΣΜΠΑΡΟΥΝΗ ΤΡΙΚΟΡΦΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            35 => 
            array (
                'id' => 179,
                'postal_code_id' => 9,
                'name' => 'ΞΑΝΘΙΠΠΗΣ',
            'cosmote_street_name' => 'ΞΑΝΘΙΠΠΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            36 => 
            array (
                'id' => 180,
                'postal_code_id' => 9,
                'name' => 'ΠΑΓΑΣΩΝ',
            'cosmote_street_name' => 'ΠΑΓΑΣΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            37 => 
            array (
                'id' => 181,
                'postal_code_id' => 9,
                'name' => 'ΠΡΕΒΕΖΗΣ',
            'cosmote_street_name' => 'ΠΡΕΒΕΖΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            38 => 
            array (
                'id' => 182,
                'postal_code_id' => 9,
                'name' => 'ΠΡΩΤΟΜΑΧΟΥ',
            'cosmote_street_name' => 'ΠΡΩΤΟΜΑΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            39 => 
            array (
                'id' => 183,
                'postal_code_id' => 9,
                'name' => 'ΡΟΔΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-01 15:58:02',
            ),
            40 => 
            array (
                'id' => 184,
                'postal_code_id' => 9,
                'name' => 'ΣΑΜΟΥΗΛ ΧΑΟΥ',
            'cosmote_street_name' => 'ΣΑΜΟΥΗΛ ΧΑΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            41 => 
            array (
                'id' => 185,
                'postal_code_id' => 9,
                'name' => 'ΣΕΠΟΛΙΩΝ',
            'cosmote_street_name' => 'ΣΕΠΟΛΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            42 => 
            array (
                'id' => 186,
                'postal_code_id' => 9,
                'name' => 'ΣΗΛΥΒΡΙΑΣ',
            'cosmote_street_name' => 'ΣΗΛΥΒΡΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            43 => 
            array (
                'id' => 187,
                'postal_code_id' => 9,
                'name' => 'ΣΤΕΝΗΜΑΧΟΥ',
            'cosmote_street_name' => 'ΣΤΕΝΗΜΑΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            44 => 
            array (
                'id' => 188,
                'postal_code_id' => 9,
                'name' => 'ΣΩΖΟΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΣΩΖΟΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            45 => 
            array (
                'id' => 189,
                'postal_code_id' => 9,
                'name' => 'ΤΙΦΥΟΣ',
            'cosmote_street_name' => 'ΤΙΦΥΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            46 => 
            array (
                'id' => 190,
                'postal_code_id' => 9,
                'name' => 'ΤΜΩΛΟΥ',
            'cosmote_street_name' => 'ΤΜΩΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            47 => 
            array (
                'id' => 191,
                'postal_code_id' => 9,
                'name' => 'ΦΙΛΙΠΠΟΥΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΦΙΛΙΠΠΟΥΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            48 => 
            array (
                'id' => 192,
                'postal_code_id' => 9,
                'name' => 'ΦΟΙΝΙΚΗΣ',
            'cosmote_street_name' => 'ΦΟΙΝΙΚΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            49 => 
            array (
                'id' => 193,
                'postal_code_id' => 9,
                'name' => 'ΧΕΙΜΑΡΡΑΣ',
            'cosmote_street_name' => 'ΧΕΙΜΑΡΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            50 => 
            array (
                'id' => 194,
                'postal_code_id' => 10,
                'name' => 'ΑΓΙΑΣ ΣΟΦΙΑΣ',
            'cosmote_street_name' => 'ΑΓΙΑΣ ΣΟΦΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            51 => 
            array (
                'id' => 195,
                'postal_code_id' => 10,
                'name' => 'ΑΓΙΟΥ ΑΙΜΙΛΙΑΝΟΥ',
            'cosmote_street_name' => 'ΑΓΙΟΥ ΑΙΜΙΛΙΑΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            52 => 
            array (
                'id' => 196,
                'postal_code_id' => 10,
                'name' => 'ΑΔΡΙΑΝΟΥΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΑΔΡΙΑΝΟΥΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            53 => 
            array (
                'id' => 197,
                'postal_code_id' => 10,
                'name' => 'ΑΘΑΜΑΝΙΑΣ',
            'cosmote_street_name' => 'ΑΘΑΜΑΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            54 => 
            array (
                'id' => 198,
                'postal_code_id' => 10,
                'name' => 'ΑΙΓΕΙΡΑΣ',
            'cosmote_street_name' => 'ΑΙΓΕΙΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            55 => 
            array (
                'id' => 199,
                'postal_code_id' => 10,
                'name' => 'ΑΙΓΙΑΛΕΙΑΣ',
            'cosmote_street_name' => 'ΑΙΓΙΑΛΕΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            56 => 
            array (
                'id' => 200,
                'postal_code_id' => 10,
                'name' => 'ΑΙΤΩΛΙΚΟΥ',
            'cosmote_street_name' => 'ΑΙΤΩΛΙΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            57 => 
            array (
                'id' => 201,
                'postal_code_id' => 10,
                'name' => 'ΑΛΕΞΑΝΔΡΕΙΑΣ',
            'cosmote_street_name' => 'ΑΛΕΞΑΝΔΡΕΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            58 => 
            array (
                'id' => 202,
                'postal_code_id' => 10,
                'name' => 'ΑΛΚΗΣΤΙΔΟΣ',
            'cosmote_street_name' => 'ΑΛΚΗΣΤΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            59 => 
            array (
                'id' => 203,
                'postal_code_id' => 10,
                'name' => 'ΑΝΩΜΕΡΑΣ',
            'cosmote_street_name' => 'ΑΝΩΜΕΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            60 => 
            array (
                'id' => 204,
                'postal_code_id' => 10,
                'name' => 'ΑΠΟΣΤΟΛΟΥ ΙΩΑΝΝΟΥ',
            'cosmote_street_name' => 'ΑΠΟΣΤΟΛΟΥ ΙΩΑΝΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            61 => 
            array (
                'id' => 205,
                'postal_code_id' => 10,
                'name' => 'ΑΡΓΟΥΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-01 15:58:02',
            ),
            62 => 
            array (
                'id' => 206,
                'postal_code_id' => 10,
                'name' => 'ΑΣΚΡΑΣ',
            'cosmote_street_name' => 'ΑΣΚΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            63 => 
            array (
                'id' => 207,
                'postal_code_id' => 10,
                'name' => 'ΒΙΖΥΗΣ',
            'cosmote_street_name' => 'ΒΙΖΥΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            64 => 
            array (
                'id' => 208,
                'postal_code_id' => 10,
                'name' => 'ΒΟΝΙΤΣΗΣ',
            'cosmote_street_name' => 'ΒΟΝΙΤΣΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            65 => 
            array (
                'id' => 209,
                'postal_code_id' => 10,
                'name' => 'ΒΟΡΕΙΟΥ ΗΠΕΙΡΟΥ',
            'cosmote_street_name' => 'ΒΟΡΕΙΟΥ ΗΠΕΙΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            66 => 
            array (
                'id' => 210,
                'postal_code_id' => 10,
                'name' => 'ΒΟΣΠΟΡΟΥ',
            'cosmote_street_name' => 'ΒΟΣΠΟΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            67 => 
            array (
                'id' => 211,
                'postal_code_id' => 10,
                'name' => 'ΒΟΥΘΡΩΤΟΥ',
            'cosmote_street_name' => 'ΒΟΥΘΡΩΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            68 => 
            array (
                'id' => 212,
                'postal_code_id' => 10,
                'name' => 'ΒΡΑΧΩΡΙΟΥ',
            'cosmote_street_name' => 'ΒΡΑΧΩΡΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            69 => 
            array (
                'id' => 213,
                'postal_code_id' => 10,
                'name' => 'ΓΕΡΑΙΣΤΟΥ',
            'cosmote_street_name' => 'ΓΕΡΑΙΣΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            70 => 
            array (
                'id' => 214,
                'postal_code_id' => 10,
                'name' => 'ΔΙΔΥΜΟΤΕΙΧΟΥ',
            'cosmote_street_name' => 'ΔΙΔΥΜΟΤΕΙΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            71 => 
            array (
                'id' => 215,
                'postal_code_id' => 10,
                'name' => 'ΔΙΣΤΟΜΟΥ',
            'cosmote_street_name' => 'ΔΙΣΤΟΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            72 => 
            array (
                'id' => 216,
                'postal_code_id' => 10,
                'name' => 'ΔΡΑΜΑΣ',
            'cosmote_street_name' => 'ΔΡΑΜΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            73 => 
            array (
                'id' => 217,
                'postal_code_id' => 10,
                'name' => 'ΔΩΔΩΝΗΣ',
            'cosmote_street_name' => 'ΔΩΔΩΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            74 => 
            array (
                'id' => 218,
                'postal_code_id' => 10,
                'name' => 'ΕΛΛΗΣΠΟΝΤΟΥ',
            'cosmote_street_name' => 'ΕΛΛΗΣΠΟΝΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            75 => 
            array (
                'id' => 219,
                'postal_code_id' => 10,
                'name' => 'ΕΠΙΔΑΥΡΟΥ',
            'cosmote_street_name' => 'ΕΠΙΔΑΥΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:39',
            ),
            76 => 
            array (
                'id' => 220,
                'postal_code_id' => 10,
                'name' => 'ΕΠΙΚΕΛΕΥΣΤΗ ΑΠΟΣΤΟΛΟΥ ΑΣΠΡΟΓΕΡΑΚΑ',
            'cosmote_street_name' => 'ΕΠΙΚΕΛΕΥΣΤΗ ΑΠΟΣΤΟΛΟΥ ΑΣΠΡΟΓΕΡΑΚΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            77 => 
            array (
                'id' => 221,
                'postal_code_id' => 10,
                'name' => 'ΕΡΜΟΥΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΕΡΜΟΥΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            78 => 
            array (
                'id' => 222,
                'postal_code_id' => 10,
                'name' => 'ΕΡΥΜΑΝΘΟΥ',
            'cosmote_street_name' => 'ΕΡΥΜΑΝΘΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            79 => 
            array (
                'id' => 223,
                'postal_code_id' => 10,
                'name' => 'ΕΥΑΛΚΙΔΟΥ',
            'cosmote_street_name' => 'ΕΥΑΛΚΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            80 => 
            array (
                'id' => 224,
                'postal_code_id' => 10,
                'name' => 'ΕΥΡΙΠΟΥ',
            'cosmote_street_name' => 'ΕΥΡΙΠΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            81 => 
            array (
                'id' => 225,
                'postal_code_id' => 10,
                'name' => 'ΗΛΕΚΤΡΑΣ',
            'cosmote_street_name' => 'ΗΛΕΚΤΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            82 => 
            array (
                'id' => 226,
                'postal_code_id' => 10,
                'name' => 'ΘΕΡΑΠΕΙΩΝ',
            'cosmote_street_name' => 'ΘΕΡΑΠΕΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            83 => 
            array (
                'id' => 227,
                'postal_code_id' => 10,
                'name' => 'ΘΕΣΠΡΩΤΙΑΣ',
            'cosmote_street_name' => 'ΘΕΣΠΡΩΤΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            84 => 
            array (
                'id' => 228,
                'postal_code_id' => 10,
                'name' => 'ΙΝΟΥΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-01 15:58:02',
            ),
            85 => 
            array (
                'id' => 229,
                'postal_code_id' => 10,
                'name' => 'ΙΟΚΑΣΤΗΣ',
            'cosmote_street_name' => 'ΙΟΚΑΣΤΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            86 => 
            array (
                'id' => 230,
                'postal_code_id' => 10,
                'name' => 'ΙΣΜΗΝΗΣ',
            'cosmote_street_name' => 'ΙΣΜΗΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            87 => 
            array (
                'id' => 231,
                'postal_code_id' => 10,
            'name' => 'ΙΩΑΝΝΙΝΩΝ (ΠΡΧ ΚΟΛΩΝΟΣ - ΣΕΠΟΛΙΑ)',
            'cosmote_street_name' => 'ΙΩΑΝΝΙΝΩΝ (ΠΡΧ ΚΟΛΩΝΟΣ - ΣΕΠΟΛΙΑ) (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            88 => 
            array (
                'id' => 232,
                'postal_code_id' => 10,
                'name' => 'ΚΑΘΗΜΕΙΑΣ',
            'cosmote_street_name' => 'ΚΑΘΗΜΕΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            89 => 
            array (
                'id' => 233,
                'postal_code_id' => 10,
                'name' => 'ΚΑΛΑΒΡΥΤΩΝ',
            'cosmote_street_name' => 'ΚΑΛΑΒΡΥΤΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            90 => 
            array (
                'id' => 234,
                'postal_code_id' => 10,
                'name' => 'ΚΑΛΛΙΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΚΑΛΛΙΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            91 => 
            array (
                'id' => 235,
                'postal_code_id' => 10,
                'name' => 'ΚΑΠΑΝΕΩΣ',
            'cosmote_street_name' => 'ΚΑΠΑΝΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            92 => 
            array (
                'id' => 236,
                'postal_code_id' => 10,
                'name' => 'ΚΑΠΠΑΔΟΚΙΑΣ',
            'cosmote_street_name' => 'ΚΑΠΠΑΔΟΚΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            93 => 
            array (
                'id' => 237,
                'postal_code_id' => 10,
                'name' => 'ΚΛΥΤΙΑΣ',
            'cosmote_street_name' => 'ΚΛΥΤΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            94 => 
            array (
                'id' => 238,
                'postal_code_id' => 10,
                'name' => 'ΚΩΣΤΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-01 15:58:02',
            ),
            95 => 
            array (
                'id' => 239,
                'postal_code_id' => 10,
                'name' => 'ΛΑΟΔΑΜΑΝΤΟΣ',
            'cosmote_street_name' => 'ΛΑΟΔΑΜΑΝΤΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            96 => 
            array (
                'id' => 240,
                'postal_code_id' => 10,
                'name' => 'ΛΑΡΥΜΝΗΣ',
            'cosmote_street_name' => 'ΛΑΡΥΜΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            97 => 
            array (
                'id' => 241,
                'postal_code_id' => 10,
                'name' => 'ΛΕΒΙΔΙΟΥ',
            'cosmote_street_name' => 'ΛΕΒΙΔΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            98 => 
            array (
                'id' => 242,
                'postal_code_id' => 10,
                'name' => 'ΛΕΝΟΡΜΑΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-01 15:58:02',
            ),
            99 => 
            array (
                'id' => 243,
                'postal_code_id' => 10,
                'name' => 'ΛΕΩΦΟΡΟΣ ΚΩΝΣΤΑΝΤΙΝΟΥΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΚΩΝΣΤΑΝΤΙΝΟΥΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            100 => 
            array (
                'id' => 244,
                'postal_code_id' => 10,
                'name' => 'ΜΑΔΥΤΟΥ',
            'cosmote_street_name' => 'ΜΑΔΥΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            101 => 
            array (
                'id' => 245,
                'postal_code_id' => 10,
                'name' => 'ΜΑΡΩΝΕΙΑΣ',
            'cosmote_street_name' => 'ΜΑΡΩΝΕΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            102 => 
            array (
                'id' => 246,
                'postal_code_id' => 10,
                'name' => 'ΜΕΓΙΣΤΗΣ ΛΑΥΡΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-01 15:58:02',
            ),
            103 => 
            array (
                'id' => 247,
                'postal_code_id' => 10,
                'name' => 'ΜΟΝΗΣ ΑΡΚΑΔΙΟΥ',
            'cosmote_street_name' => 'ΜΟΝΗΣ ΑΡΚΑΔΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            104 => 
            array (
                'id' => 248,
                'postal_code_id' => 10,
                'name' => 'ΜΥΛΛΕΡ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-01 15:58:02',
            ),
            105 => 
            array (
                'id' => 249,
                'postal_code_id' => 10,
                'name' => 'ΜΥΛΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-01 15:58:02',
            ),
            106 => 
            array (
                'id' => 250,
                'postal_code_id' => 10,
                'name' => 'ΝΑΠΟΛΕΟΝΤΟΣ ΛΑΜΠΕΛΕΤ',
            'cosmote_street_name' => 'ΝΑΠΟΛΕΟΝΤΟΣ ΛΑΜΠΕΛΕΤ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            107 => 
            array (
                'id' => 251,
                'postal_code_id' => 10,
                'name' => 'ΞΑΝΘΙΠΠΗΣ',
            'cosmote_street_name' => 'ΞΑΝΘΙΠΠΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            108 => 
            array (
                'id' => 252,
                'postal_code_id' => 10,
                'name' => 'ΠΑΡΟΔΟΣ ΜΕΓΙΣΤΗΣ ΛΑΥΡΑΣ',
            'cosmote_street_name' => 'ΠΑΡΟΔΟΣ ΜΕΓΙΣΤΗΣ ΛΑΥΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            109 => 
            array (
                'id' => 253,
                'postal_code_id' => 10,
                'name' => 'ΠΑΤΡΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-01 15:58:02',
            ),
            110 => 
            array (
                'id' => 254,
                'postal_code_id' => 10,
                'name' => 'ΠΕΤΡΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-01 15:58:02',
            ),
            111 => 
            array (
                'id' => 255,
                'postal_code_id' => 10,
                'name' => 'ΠΛΑΤΕΙΑ Γ. ΠΑΝΤΑΖΟΠΟΥΛΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-01 15:58:02',
            ),
            112 => 
            array (
                'id' => 256,
                'postal_code_id' => 10,
                'name' => 'ΠΡΕΒΕΖΗΣ',
            'cosmote_street_name' => 'ΠΡΕΒΕΖΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            113 => 
            array (
                'id' => 257,
                'postal_code_id' => 10,
                'name' => 'ΠΡΟΠΟΝΤΙΔΟΣ',
            'cosmote_street_name' => 'ΠΡΟΠΟΝΤΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            114 => 
            array (
                'id' => 258,
                'postal_code_id' => 10,
                'name' => 'ΠΥΡΓΟΥ',
            'cosmote_street_name' => 'ΠΥΡΓΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            115 => 
            array (
                'id' => 259,
                'postal_code_id' => 10,
                'name' => 'ΡΑΙΔΕΣΤΟΥ',
            'cosmote_street_name' => 'ΡΑΙΔΕΣΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            116 => 
            array (
                'id' => 260,
                'postal_code_id' => 10,
                'name' => 'ΣΕΠΟΛΙΩΝ',
            'cosmote_street_name' => 'ΣΕΠΟΛΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            117 => 
            array (
                'id' => 261,
                'postal_code_id' => 10,
                'name' => 'ΣΚΑΜΑΝΔΡΟΥ',
            'cosmote_street_name' => 'ΣΚΑΜΑΝΔΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            118 => 
            array (
                'id' => 262,
                'postal_code_id' => 10,
                'name' => 'ΣΥΡΡΑΚΟΥ',
            'cosmote_street_name' => 'ΣΥΡΡΑΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            119 => 
            array (
                'id' => 263,
                'postal_code_id' => 10,
                'name' => 'ΤΕΜΠΩΝ',
            'cosmote_street_name' => 'ΤΕΜΠΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            120 => 
            array (
                'id' => 264,
                'postal_code_id' => 10,
                'name' => 'ΤΙΦΥΟΣ',
            'cosmote_street_name' => 'ΤΙΦΥΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            121 => 
            array (
                'id' => 265,
                'postal_code_id' => 10,
                'name' => 'ΤΡΙΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΤΡΙΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            122 => 
            array (
                'id' => 266,
                'postal_code_id' => 10,
                'name' => 'ΥΨΩΜΑΘΕΙΩΝ',
            'cosmote_street_name' => 'ΥΨΩΜΑΘΕΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            123 => 
            array (
                'id' => 267,
                'postal_code_id' => 10,
                'name' => 'ΦΙΛΙΑΤΡΩΝ',
            'cosmote_street_name' => 'ΦΙΛΙΑΤΡΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            124 => 
            array (
                'id' => 268,
                'postal_code_id' => 10,
                'name' => 'ΧΑΡΑΚΟΣ',
            'cosmote_street_name' => 'ΧΑΡΑΚΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            125 => 
            array (
                'id' => 269,
                'postal_code_id' => 10,
                'name' => 'ΧΑΡΩΝΔΟΥ',
            'cosmote_street_name' => 'ΧΑΡΩΝΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            126 => 
            array (
                'id' => 270,
                'postal_code_id' => 10,
                'name' => 'ΧΕΙΜΑΡΡΑΣ',
            'cosmote_street_name' => 'ΧΕΙΜΑΡΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            127 => 
            array (
                'id' => 271,
                'postal_code_id' => 11,
                'name' => 'ΑΓΙΟΥ ΔΗΜΗΤΡΙΟΥ ΟΠΛΩΝ',
            'cosmote_street_name' => 'ΑΓΙΟΥ ΔΗΜΗΤΡΙΟΥ ΟΠΛΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            128 => 
            array (
                'id' => 272,
                'postal_code_id' => 11,
                'name' => 'ΑΛΕΞΑΝΔΡΟΥ ΠΑΠΑΝΑΣΤΑΣΙΟΥ',
            'cosmote_street_name' => 'ΑΛΕΞΑΝΔΡΟΥ ΠΑΠΑΝΑΣΤΑΣΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            129 => 
            array (
                'id' => 273,
                'postal_code_id' => 11,
                'name' => 'ΑΠΟΣΤΟΛΟΠΟΥΛΟΥ',
            'cosmote_street_name' => 'ΑΠΟΣΤΟΛΟΠΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            130 => 
            array (
                'id' => 274,
                'postal_code_id' => 11,
                'name' => 'ΑΡ. ΟΙΚΟΝΟΜΟΥ',
            'cosmote_street_name' => 'ΑΡ. ΟΙΚΟΝΟΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            131 => 
            array (
                'id' => 275,
                'postal_code_id' => 11,
                'name' => 'ΑΡΙΣΤΟΤΕΛΟΥΣ ΚΟΥΡΤΙΔΗ',
            'cosmote_street_name' => 'ΑΡΙΣΤΟΤΕΛΟΥΣ ΚΟΥΡΤΙΔΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            132 => 
            array (
                'id' => 276,
                'postal_code_id' => 11,
                'name' => 'ΑΡΚΟΛΕΩΝ',
            'cosmote_street_name' => 'ΑΡΚΟΛΕΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            133 => 
            array (
                'id' => 277,
                'postal_code_id' => 11,
                'name' => 'ΒΑΡΔΟΥΛΑΚΗ',
            'cosmote_street_name' => 'ΒΑΡΔΟΥΛΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            134 => 
            array (
                'id' => 278,
                'postal_code_id' => 11,
                'name' => 'ΓΕΡΑΚΗ',
            'cosmote_street_name' => 'ΓΕΡΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            135 => 
            array (
                'id' => 279,
                'postal_code_id' => 11,
                'name' => 'ΓΕΩΡΓΙΑΔΟΥ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΑΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            136 => 
            array (
                'id' => 280,
                'postal_code_id' => 11,
                'name' => 'ΓΙΑΝΝΑΡΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-01 15:58:02',
            ),
            137 => 
            array (
                'id' => 281,
                'postal_code_id' => 11,
                'name' => 'ΔΑΙΜΟΝΟΓΙΑΝΝΗ',
            'cosmote_street_name' => 'ΔΑΙΜΟΝΟΓΙΑΝΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            138 => 
            array (
                'id' => 282,
                'postal_code_id' => 11,
                'name' => 'ΔΕΛΗΓΙΑΝΝΑΚΗ',
            'cosmote_street_name' => 'ΔΕΛΗΓΙΑΝΝΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            139 => 
            array (
                'id' => 283,
                'postal_code_id' => 11,
                'name' => 'ΖΕΡΒΟΥΔΑΚΗ',
            'cosmote_street_name' => 'ΖΕΡΒΟΥΔΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            140 => 
            array (
                'id' => 284,
                'postal_code_id' => 11,
                'name' => 'ΖΟΡΜΠΑ',
            'cosmote_street_name' => 'ΖΟΡΜΠΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            141 => 
            array (
                'id' => 285,
                'postal_code_id' => 11,
                'name' => 'ΖΥΜΠΡΑΚΑΚΗ',
            'cosmote_street_name' => 'ΖΥΜΠΡΑΚΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            142 => 
            array (
                'id' => 286,
                'postal_code_id' => 11,
                'name' => 'ΙΩΑΝΝΟΥ ΔΗΜΑΚΟΠΟΥΛΟΥ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΔΗΜΑΚΟΠΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            143 => 
            array (
                'id' => 287,
                'postal_code_id' => 11,
                'name' => 'Κ. ΑΓΚΩΝΙΤΟΥ',
            'cosmote_street_name' => 'Κ. ΑΓΚΩΝΙΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            144 => 
            array (
                'id' => 288,
                'postal_code_id' => 11,
                'name' => 'ΚΑΠΕΤΑΝ ΛΑΧΑΝΑ',
            'cosmote_street_name' => 'ΚΑΠΕΤΑΝ ΛΑΧΑΝΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            145 => 
            array (
                'id' => 289,
                'postal_code_id' => 11,
                'name' => 'ΚΑΠΙΔΑΚΗ',
            'cosmote_street_name' => 'ΚΑΠΙΔΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            146 => 
            array (
                'id' => 290,
                'postal_code_id' => 11,
                'name' => 'ΚΡΙΤΟΒΟΥΛΙΔΟΥ',
            'cosmote_street_name' => 'ΚΡΙΤΟΒΟΥΛΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            147 => 
            array (
                'id' => 291,
                'postal_code_id' => 11,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΙΔΗ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΙΔΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            148 => 
            array (
                'id' => 292,
                'postal_code_id' => 11,
                'name' => 'Λ. ΠΙΛΑΤΟΥ',
            'cosmote_street_name' => 'Λ. ΠΙΛΑΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            149 => 
            array (
                'id' => 293,
                'postal_code_id' => 11,
                'name' => 'ΛΕΒΙΔΟΥ',
            'cosmote_street_name' => 'ΛΕΒΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            150 => 
            array (
                'id' => 294,
                'postal_code_id' => 11,
                'name' => 'ΛΕΩΦΟΡΟΣ ΙΩΝΙΑΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΙΩΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            151 => 
            array (
                'id' => 295,
                'postal_code_id' => 11,
                'name' => 'ΛΕΩΦΟΡΟΣ ΚΩΝΣΤΑΝΤΙΝΟΥΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΚΩΝΣΤΑΝΤΙΝΟΥΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            152 => 
            array (
                'id' => 296,
                'postal_code_id' => 11,
                'name' => 'ΛΙΟΣΙΩΝ',
            'cosmote_street_name' => 'ΛΙΟΣΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            153 => 
            array (
                'id' => 297,
                'postal_code_id' => 11,
                'name' => 'ΜΑΝΟΥΣΟΓΙΑΝΝΗ',
            'cosmote_street_name' => 'ΜΑΝΟΥΣΟΓΙΑΝΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            154 => 
            array (
                'id' => 298,
                'postal_code_id' => 11,
                'name' => 'ΜΙΧΑΗΛ ΚΟΡΑΚΑ',
            'cosmote_street_name' => 'ΜΙΧΑΗΛ ΚΟΡΑΚΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            155 => 
            array (
                'id' => 299,
                'postal_code_id' => 11,
                'name' => 'ΝΑΥΑΡΧΟΥ ΒΟΤΣΗ',
            'cosmote_street_name' => 'ΝΑΥΑΡΧΟΥ ΒΟΤΣΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            156 => 
            array (
                'id' => 300,
                'postal_code_id' => 11,
                'name' => 'ΟΡΛΑΝΔΟΥ',
            'cosmote_street_name' => 'ΟΡΛΑΝΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            157 => 
            array (
                'id' => 301,
                'postal_code_id' => 11,
                'name' => 'ΠΑΠΑΔΟΠΟΥΛΟΥ-ΒΡΕΤΤΟΥ',
            'cosmote_street_name' => 'ΠΑΠΑΔΟΠΟΥΛΟΥ-ΒΡΕΤΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            158 => 
            array (
                'id' => 302,
                'postal_code_id' => 11,
            'name' => 'ΠΑΡΑΣΚΕΥΟΠΟΥΛΟΥ (ΠΡΧ ΘΥΜΑΡΑΚΙΑ)',
            'cosmote_street_name' => 'ΠΑΡΑΣΚΕΥΟΠΟΥΛΟΥ (ΠΡΧ ΘΥΜΑΡΑΚΙΑ) (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            159 => 
            array (
                'id' => 303,
                'postal_code_id' => 11,
                'name' => 'ΠΕΡΒΑΝΟΓΛΟΥ',
            'cosmote_street_name' => 'ΠΕΡΒΑΝΟΓΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            160 => 
            array (
                'id' => 304,
                'postal_code_id' => 11,
                'name' => 'ΠΟΤΛΗ',
            'cosmote_street_name' => 'ΠΟΤΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            161 => 
            array (
                'id' => 305,
                'postal_code_id' => 11,
                'name' => 'ΡΙΚΑΚΗ',
            'cosmote_street_name' => 'ΡΙΚΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            162 => 
            array (
                'id' => 306,
                'postal_code_id' => 11,
                'name' => 'ΡΟΖΑΚΗ',
            'cosmote_street_name' => 'ΡΟΖΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            163 => 
            array (
                'id' => 307,
                'postal_code_id' => 11,
                'name' => 'ΣΕΡΑΦΗ',
            'cosmote_street_name' => 'ΣΕΡΑΦΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            164 => 
            array (
                'id' => 308,
                'postal_code_id' => 11,
                'name' => 'ΣΗΜΑΝΤΗΡΑ',
            'cosmote_street_name' => 'ΣΗΜΑΝΤΗΡΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            165 => 
            array (
                'id' => 309,
                'postal_code_id' => 11,
                'name' => 'ΣΙΩΚΟΥ',
            'cosmote_street_name' => 'ΣΙΩΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:02',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            166 => 
            array (
                'id' => 310,
                'postal_code_id' => 11,
                'name' => 'ΣΟΥΤΣΟΥ ΣΚΑΡΛΑΤΟΥ',
            'cosmote_street_name' => 'ΣΟΥΤΣΟΥ ΣΚΑΡΛΑΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            167 => 
            array (
                'id' => 311,
                'postal_code_id' => 11,
                'name' => 'ΣΠΗΛΙΑΔΟΥ',
            'cosmote_street_name' => 'ΣΠΗΛΙΑΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:40',
            ),
            168 => 
            array (
                'id' => 312,
                'postal_code_id' => 11,
                'name' => 'ΣΤΕΦΑΝΟΥ ΞΕΝΟΥ',
            'cosmote_street_name' => 'ΣΤΕΦΑΝΟΥ ΞΕΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            169 => 
            array (
                'id' => 313,
                'postal_code_id' => 11,
                'name' => 'ΣΤΡΑΤΗΓΟΥ ΔΑΓΚΛΗ',
            'cosmote_street_name' => 'ΣΤΡΑΤΗΓΟΥ ΔΑΓΚΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            170 => 
            array (
                'id' => 314,
                'postal_code_id' => 11,
                'name' => 'ΣΤΡΑΤΗΓΟΥ ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΑΛΛΑΡΗ',
            'cosmote_street_name' => 'ΣΤΡΑΤΗΓΟΥ ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΑΛΛΑΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            171 => 
            array (
                'id' => 315,
                'postal_code_id' => 11,
                'name' => 'ΣΦΑΚΙΑΝΑΚΗ',
            'cosmote_street_name' => 'ΣΦΑΚΙΑΝΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            172 => 
            array (
                'id' => 316,
                'postal_code_id' => 11,
                'name' => 'ΤΕΡΤΙΠΗ',
            'cosmote_street_name' => 'ΤΕΡΤΙΠΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            173 => 
            array (
                'id' => 317,
                'postal_code_id' => 11,
                'name' => 'ΤΡΟΥΠΑΚΗ',
            'cosmote_street_name' => 'ΤΡΟΥΠΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            174 => 
            array (
                'id' => 318,
                'postal_code_id' => 11,
                'name' => 'ΤΣΟΥΔΕΡΟΥ',
            'cosmote_street_name' => 'ΤΣΟΥΔΕΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            175 => 
            array (
                'id' => 319,
                'postal_code_id' => 11,
                'name' => 'ΤΥΠΑΛΔΟΥ ΚΟΖΑΚΗ',
            'cosmote_street_name' => 'ΤΥΠΑΛΔΟΥ ΚΟΖΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            176 => 
            array (
                'id' => 320,
                'postal_code_id' => 11,
                'name' => 'ΦΛΟΓΑΙΤΗ',
            'cosmote_street_name' => 'ΦΛΟΓΑΙΤΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            177 => 
            array (
                'id' => 321,
                'postal_code_id' => 11,
                'name' => 'ΧΑΙΡΕΤΗ',
            'cosmote_street_name' => 'ΧΑΙΡΕΤΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            178 => 
            array (
                'id' => 322,
                'postal_code_id' => 11,
                'name' => 'ΧΑΛΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            179 => 
            array (
                'id' => 323,
                'postal_code_id' => 11,
                'name' => 'ΧΕΙΜΑΡΡΙΩΤΟΥ',
            'cosmote_street_name' => 'ΧΕΙΜΑΡΡΙΩΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            180 => 
            array (
                'id' => 324,
                'postal_code_id' => 11,
                'name' => 'ΧΟΡΤΑΤΖΗ',
            'cosmote_street_name' => 'ΧΟΡΤΑΤΖΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            181 => 
            array (
                'id' => 325,
                'postal_code_id' => 11,
                'name' => 'ΨΑΡΟΥΔΑΚΗ',
            'cosmote_street_name' => 'ΨΑΡΟΥΔΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            182 => 
            array (
                'id' => 326,
                'postal_code_id' => 12,
                'name' => 'ΑΓΑΘΟΥΠΟΛΕΩΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            183 => 
            array (
                'id' => 327,
                'postal_code_id' => 12,
                'name' => 'ΑΓΙΟΥ ΜΕΛΕΤΙΟΥ',
            'cosmote_street_name' => 'ΑΓΙΟΥ ΜΕΛΕΤΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            184 => 
            array (
                'id' => 328,
                'postal_code_id' => 12,
                'name' => 'ΑΓΡΙΝΙΟΥ',
            'cosmote_street_name' => 'ΑΓΡΙΝΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            185 => 
            array (
                'id' => 329,
                'postal_code_id' => 12,
                'name' => 'ΑΔΜΗΤΟΥ',
            'cosmote_street_name' => 'ΑΔΜΗΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            186 => 
            array (
                'id' => 330,
                'postal_code_id' => 12,
                'name' => 'ΑΙΑΚΟΥ',
            'cosmote_street_name' => 'ΑΙΑΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            187 => 
            array (
                'id' => 331,
                'postal_code_id' => 12,
                'name' => 'ΑΙΓΕΩΣ',
            'cosmote_street_name' => 'ΑΙΓΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            188 => 
            array (
                'id' => 332,
                'postal_code_id' => 12,
                'name' => 'ΑΛΚΑΜΕΝΟΥΣ',
            'cosmote_street_name' => 'ΑΛΚΑΜΕΝΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            189 => 
            array (
                'id' => 333,
                'postal_code_id' => 12,
                'name' => 'ΑΡΙΣΤΟΜΕΝΟΥΣ',
            'cosmote_street_name' => 'ΑΡΙΣΤΟΜΕΝΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            190 => 
            array (
                'id' => 334,
                'postal_code_id' => 12,
                'name' => 'ΑΧΑΡΝΩΝ',
            'cosmote_street_name' => 'ΑΧΑΡΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            191 => 
            array (
                'id' => 335,
                'postal_code_id' => 12,
                'name' => 'Β\' ΠΑΡΟΔΟΣ ΚΟΛΟΦΩΝΟΣ',
            'cosmote_street_name' => 'Β\' ΠΑΡΟΔΟΣ ΚΟΛΟΦΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            192 => 
            array (
                'id' => 336,
                'postal_code_id' => 12,
                'name' => 'ΘΗΡΑΣ',
            'cosmote_street_name' => 'ΘΗΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            193 => 
            array (
                'id' => 337,
                'postal_code_id' => 12,
                'name' => 'ΙΚΟΝΙΟΥ',
            'cosmote_street_name' => 'ΙΚΟΝΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            194 => 
            array (
                'id' => 338,
                'postal_code_id' => 12,
                'name' => 'ΚΟΛΟΦΩΝΟΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            195 => 
            array (
                'id' => 339,
                'postal_code_id' => 12,
                'name' => 'ΚΡΕΣΤΕΝΩΝ',
            'cosmote_street_name' => 'ΚΡΕΣΤΕΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            196 => 
            array (
                'id' => 340,
                'postal_code_id' => 12,
                'name' => 'ΚΥΜΗΣ',
            'cosmote_street_name' => 'ΚΥΜΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            197 => 
            array (
                'id' => 341,
                'postal_code_id' => 12,
                'name' => 'ΛΑΕΡΤΙΟΥ ΔΙΟΓΕΝΟΥΣ',
            'cosmote_street_name' => 'ΛΑΕΡΤΙΟΥ ΔΙΟΓΕΝΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            198 => 
            array (
                'id' => 342,
                'postal_code_id' => 12,
                'name' => 'ΛΑΡΝΑΚΟΣ',
            'cosmote_street_name' => 'ΛΑΡΝΑΚΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            199 => 
            array (
                'id' => 343,
                'postal_code_id' => 12,
                'name' => 'ΛΕΜΕΣΟΥ',
            'cosmote_street_name' => 'ΛΕΜΕΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            200 => 
            array (
                'id' => 344,
                'postal_code_id' => 12,
                'name' => 'ΛΕΩΦΟΡΟΣ ΙΩΝΙΑΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΙΩΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            201 => 
            array (
                'id' => 345,
                'postal_code_id' => 12,
                'name' => 'ΜΙΧΑΗΛ ΒΟΔΑ',
            'cosmote_street_name' => 'ΜΙΧΑΗΛ ΒΟΔΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            202 => 
            array (
                'id' => 346,
                'postal_code_id' => 12,
                'name' => 'ΝΙΟΒΗΣ',
            'cosmote_street_name' => 'ΝΙΟΒΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            203 => 
            array (
                'id' => 347,
                'postal_code_id' => 12,
                'name' => 'ΟΛΥΜΠΙΑΣ',
            'cosmote_street_name' => 'ΟΛΥΜΠΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            204 => 
            array (
                'id' => 348,
                'postal_code_id' => 12,
                'name' => 'ΠΑΜΙΣΟΥ',
            'cosmote_street_name' => 'ΠΑΜΙΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            205 => 
            array (
                'id' => 349,
                'postal_code_id' => 12,
                'name' => 'ΠΑΝΑΘΗΝΑΙΩΝ',
            'cosmote_street_name' => 'ΠΑΝΑΘΗΝΑΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            206 => 
            array (
                'id' => 350,
                'postal_code_id' => 12,
                'name' => 'ΠΑΦΟΥ',
            'cosmote_street_name' => 'ΠΑΦΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            207 => 
            array (
                'id' => 351,
                'postal_code_id' => 12,
                'name' => 'ΠΕΡΓΑΜΟΥ',
            'cosmote_street_name' => 'ΠΕΡΓΑΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            208 => 
            array (
                'id' => 352,
                'postal_code_id' => 12,
                'name' => 'ΠΛΑΤΕΙΑ ΑΓΙΟΥ ΝΙΚΟΛΑΟΥ',
            'cosmote_street_name' => 'ΠΛΑΤΕΙΑ ΑΓΙΟΥ ΝΙΚΟΛΑΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            209 => 
            array (
                'id' => 353,
                'postal_code_id' => 12,
                'name' => 'ΠΥΡΣΟΓΙΑΝΝΗΣ',
            'cosmote_street_name' => 'ΠΥΡΣΟΓΙΑΝΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            210 => 
            array (
                'id' => 354,
                'postal_code_id' => 12,
                'name' => 'ΡΟΔΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            211 => 
            array (
                'id' => 355,
                'postal_code_id' => 12,
                'name' => 'ΣΑΡΔΕΩΝ',
            'cosmote_street_name' => 'ΣΑΡΔΕΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            212 => 
            array (
                'id' => 356,
                'postal_code_id' => 12,
                'name' => 'ΣΕΛΕΥΚΕΙΑΣ',
            'cosmote_street_name' => 'ΣΕΛΕΥΚΕΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            213 => 
            array (
                'id' => 357,
                'postal_code_id' => 12,
                'name' => 'ΣΩΖΟΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΣΩΖΟΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            214 => 
            array (
                'id' => 358,
                'postal_code_id' => 12,
                'name' => 'ΦΟΛΕΓΑΝΔΡΟΥ',
            'cosmote_street_name' => 'ΦΟΛΕΓΑΝΔΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            215 => 
            array (
                'id' => 359,
                'postal_code_id' => 13,
                'name' => 'ΑΚΑΔΗΜΙΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            216 => 
            array (
                'id' => 360,
                'postal_code_id' => 13,
                'name' => 'ΑΛΕΞΑΝΔΡΟΥ ΣΟΥΤΣΟΥ',
            'cosmote_street_name' => 'ΑΛΕΞΑΝΔΡΟΥ ΣΟΥΤΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            217 => 
            array (
                'id' => 361,
                'postal_code_id' => 13,
                'name' => 'ΑΜΕΡΙΚΗΣ',
            'cosmote_street_name' => 'ΣΤΟΑ ΑΜΕΡΙΚΗΣ 9 (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            218 => 
            array (
                'id' => 362,
                'postal_code_id' => 13,
                'name' => 'ΑΡΙΣΤΟΤΕΛΗ ΒΑΛΑΩΡΙΤΟΥ',
            'cosmote_street_name' => 'ΑΡΙΣΤΟΤΕΛΗ ΒΑΛΑΩΡΙΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            219 => 
            array (
                'id' => 363,
                'postal_code_id' => 13,
                'name' => 'ΒΟΥΚΟΥΡΕΣΤΙΟΥ',
            'cosmote_street_name' => 'ΒΟΥΚΟΥΡΕΣΤΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            220 => 
            array (
                'id' => 364,
                'postal_code_id' => 13,
                'name' => 'ΔΗΜΟΚΡΙΤΟΥ',
            'cosmote_street_name' => 'ΔΗΜΟΚΡΙΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            221 => 
            array (
                'id' => 365,
                'postal_code_id' => 13,
                'name' => 'ΚΡΙΕΖΩΤΟΥ',
            'cosmote_street_name' => 'ΚΡΙΕΖΩΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            222 => 
            array (
                'id' => 366,
                'postal_code_id' => 13,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΑΝΑΡΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            223 => 
            array (
                'id' => 367,
                'postal_code_id' => 13,
                'name' => 'ΛΕΩΦΟΡΟΣ ΒΑΣΙΛΙΣΣΗΣ ΣΟΦΙΑΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΒΑΣΙΛΙΣΣΗΣ ΣΟΦΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            224 => 
            array (
                'id' => 368,
                'postal_code_id' => 13,
                'name' => 'ΛΥΚΑΒΗΤΤΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            225 => 
            array (
                'id' => 369,
                'postal_code_id' => 13,
                'name' => 'ΜΕΡΛΙΝ',
            'cosmote_street_name' => 'ΜΕΡΛΙΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            226 => 
            array (
                'id' => 370,
                'postal_code_id' => 13,
                'name' => 'ΠΑΝΕΠΙΣΤΗΜΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            227 => 
            array (
                'id' => 371,
                'postal_code_id' => 13,
                'name' => 'ΠΙΝΔΑΡΟΥ',
            'cosmote_street_name' => 'ΠΙΝΔΑΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            228 => 
            array (
                'id' => 372,
                'postal_code_id' => 13,
                'name' => 'ΣΕΚΕΡΗ',
            'cosmote_street_name' => 'ΣΕΚΕΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            229 => 
            array (
                'id' => 373,
                'postal_code_id' => 13,
                'name' => 'ΣΟΛΩΝΟΣ',
            'cosmote_street_name' => 'ΣΟΛΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            230 => 
            array (
                'id' => 374,
                'postal_code_id' => 14,
                'name' => 'ΑΚΑΔΗΜΙΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            231 => 
            array (
                'id' => 375,
                'postal_code_id' => 14,
                'name' => 'ΑΜΕΡΙΚΗΣ',
            'cosmote_street_name' => 'ΣΤΟΑ ΑΜΕΡΙΚΗΣ 9 (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            232 => 
            array (
                'id' => 376,
                'postal_code_id' => 14,
                'name' => 'ΒΗΣΣΑΡΙΩΝΟΣ',
            'cosmote_street_name' => 'ΒΗΣΣΑΡΙΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            233 => 
            array (
                'id' => 377,
                'postal_code_id' => 14,
                'name' => 'ΓΙΑΝΝΗ ΣΤΑΘΑ',
            'cosmote_street_name' => 'ΓΙΑΝΝΗ ΣΤΑΘΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            234 => 
            array (
                'id' => 378,
                'postal_code_id' => 14,
                'name' => 'ΕΥΕΛΠΙΔΟΣ ΗΛΙΑ ΡΟΓΚΑΚΟΥ',
            'cosmote_street_name' => 'ΕΥΕΛΠΙΔΟΣ ΗΛΙΑ ΡΟΓΚΑΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            235 => 
            array (
                'id' => 379,
                'postal_code_id' => 14,
                'name' => 'ΛΥΚΑΒΗΤΤΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            236 => 
            array (
                'id' => 380,
                'postal_code_id' => 14,
                'name' => 'ΜΑΝΤΖΑΡΟΥ',
            'cosmote_street_name' => 'ΜΑΝΤΖΑΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            237 => 
            array (
                'id' => 381,
                'postal_code_id' => 14,
                'name' => 'ΟΙΤΗΣ',
            'cosmote_street_name' => 'ΟΙΤΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            238 => 
            array (
                'id' => 382,
                'postal_code_id' => 14,
                'name' => 'ΟΜΗΡΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            239 => 
            array (
                'id' => 383,
                'postal_code_id' => 14,
                'name' => 'Π. ΔΗΜΑΚΗ',
            'cosmote_street_name' => 'Π. ΔΗΜΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            240 => 
            array (
                'id' => 384,
                'postal_code_id' => 14,
                'name' => 'ΠΑΝΑΓΙΩΤΗ ΑΝΑΓΝΩΣΤΟΠΟΥΛΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            241 => 
            array (
                'id' => 385,
                'postal_code_id' => 14,
                'name' => 'ΠΑΝΕΠΙΣΤΗΜΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            242 => 
            array (
                'id' => 386,
                'postal_code_id' => 14,
                'name' => 'ΠΛΑΤΕΙΑ ΑΘΑΝΑΣΙΟΥ ΤΣΑΛΔΑΡΗ',
            'cosmote_street_name' => 'ΠΛΑΤΕΙΑ ΑΘΑΝΑΣΙΟΥ ΤΣΑΛΔΑΡΗ (ΟδÏ)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            243 => 
            array (
                'id' => 387,
                'postal_code_id' => 14,
                'name' => 'ΠΛΑΤΕΙΑ ΛΥΚΑΒΗΤΤΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            244 => 
            array (
                'id' => 388,
                'postal_code_id' => 14,
                'name' => 'ΣΙΝΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            245 => 
            array (
                'id' => 389,
                'postal_code_id' => 14,
                'name' => 'ΣΚΟΥΦΑ',
            'cosmote_street_name' => 'ΣΚΟΥΦΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            246 => 
            array (
                'id' => 390,
                'postal_code_id' => 14,
                'name' => 'ΣΟΛΩΝΟΣ',
            'cosmote_street_name' => 'ΣΟΛΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            247 => 
            array (
                'id' => 391,
                'postal_code_id' => 14,
                'name' => 'ΧΕΡΣΩΝΟΣ',
            'cosmote_street_name' => 'ΧΕΡΣΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            248 => 
            array (
                'id' => 392,
                'postal_code_id' => 15,
                'name' => 'ΒΟΥΚΟΥΡΕΣΤΙΟΥ',
            'cosmote_street_name' => 'ΒΟΥΚΟΥΡΕΣΤΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            249 => 
            array (
                'id' => 393,
                'postal_code_id' => 15,
                'name' => 'ΔΗΜΟΚΡΙΤΟΥ',
            'cosmote_street_name' => 'ΔΗΜΟΚΡΙΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            250 => 
            array (
                'id' => 394,
                'postal_code_id' => 15,
                'name' => 'ΕΜΜΑΝΟΥΗΛ ΞΑΝΘΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            251 => 
            array (
                'id' => 395,
                'postal_code_id' => 15,
                'name' => 'ΗΡΑΚΛΕΙΤΟΥ',
            'cosmote_street_name' => 'ΗΡΑΚΛΕΙΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            252 => 
            array (
                'id' => 396,
                'postal_code_id' => 15,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΑΝΑΡΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            253 => 
            array (
                'id' => 397,
                'postal_code_id' => 15,
                'name' => 'ΛΥΚΑΒΗΤΤΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            254 => 
            array (
                'id' => 398,
                'postal_code_id' => 15,
                'name' => 'ΜΗΛΙΩΝΗ',
            'cosmote_street_name' => 'ΜΗΛΙΩΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            255 => 
            array (
                'id' => 399,
                'postal_code_id' => 15,
                'name' => 'ΠΑΝΑΓΙΩΤΗ ΑΝΑΓΝΩΣΤΟΠΟΥΛΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            256 => 
            array (
                'id' => 400,
                'postal_code_id' => 15,
                'name' => 'ΠΙΝΔΑΡΟΥ',
            'cosmote_street_name' => 'ΠΙΝΔΑΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            257 => 
            array (
                'id' => 401,
                'postal_code_id' => 15,
            'name' => 'ΠΛΑΤΕΙΑ ΔΕΞΑΜΕΝΗΣ (ΠΡΧ ΚΟΛΩΝΑΚΙ)',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            258 => 
            array (
                'id' => 402,
                'postal_code_id' => 15,
                'name' => 'ΠΛΑΤΕΙΑ ΦΙΛΙΚΗΣ ΕΤΑΙΡΕΙΑΣ',
            'cosmote_street_name' => 'ΠΛΑΤΕΙΑ ΦΙΛΙΚΗΣ ΕΤΑΙΡΕΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            259 => 
            array (
                'id' => 403,
                'postal_code_id' => 15,
                'name' => 'ΡΩΜΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            260 => 
            array (
                'id' => 404,
                'postal_code_id' => 15,
                'name' => 'ΣΚΟΥΦΑ',
            'cosmote_street_name' => 'ΣΚΟΥΦΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            261 => 
            array (
                'id' => 405,
                'postal_code_id' => 15,
                'name' => 'ΣΟΛΩΝΟΣ',
            'cosmote_street_name' => 'ΣΟΛΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            262 => 
            array (
                'id' => 406,
                'postal_code_id' => 15,
                'name' => 'ΣΤΡΑΤΙΩΤΙΚΟΥ ΣΥΝΔΕΣΜΟΥ',
            'cosmote_street_name' => 'ΣΤΡΑΤΙΩΤΙΚΟΥ ΣΥΝΔΕΣΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            263 => 
            array (
                'id' => 407,
                'postal_code_id' => 15,
                'name' => 'ΤΣΑΚΑΛΩΦ',
            'cosmote_street_name' => 'ΤΣΑΚΑΛΩΦ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            264 => 
            array (
                'id' => 408,
                'postal_code_id' => 15,
                'name' => 'ΦΩΚΥΛΙΔΟΥ',
            'cosmote_street_name' => 'ΦΩΚΥΛΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            265 => 
            array (
                'id' => 409,
                'postal_code_id' => 16,
                'name' => 'ΣΕΚΕΡΗ',
            'cosmote_street_name' => 'ΣΕΚΕΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            266 => 
            array (
                'id' => 410,
                'postal_code_id' => 17,
                'name' => 'ΑΡΙΣΤΙΠΠΟΥ',
            'cosmote_street_name' => 'ΑΡΙΣΤΙΠΠΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:41',
            ),
            267 => 
            array (
                'id' => 411,
                'postal_code_id' => 17,
                'name' => 'ΛΟΥΚΙΑΝΟΥ',
            'cosmote_street_name' => 'ΛΟΥΚΙΑΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            268 => 
            array (
                'id' => 412,
                'postal_code_id' => 17,
                'name' => 'ΠΛΟΥΤΑΡΧΟΥ',
            'cosmote_street_name' => 'ΠΛΟΥΤΑΡΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            269 => 
            array (
                'id' => 413,
                'postal_code_id' => 18,
                'name' => 'ΑΛΩΠΕΚΗΣ',
            'cosmote_street_name' => 'ΑΛΩΠΕΚΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            270 => 
            array (
                'id' => 414,
                'postal_code_id' => 18,
                'name' => 'ΑΝΑΠΗΡΩΝ ΠΟΛΕΜΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            271 => 
            array (
                'id' => 415,
                'postal_code_id' => 18,
                'name' => 'ΑΡΙΣΤΙΠΠΟΥ',
            'cosmote_street_name' => 'ΑΡΙΣΤΙΠΠΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            272 => 
            array (
                'id' => 416,
                'postal_code_id' => 18,
                'name' => 'ΑΡΙΣΤΟΔΗΜΟΥ',
            'cosmote_street_name' => 'ΑΡΙΣΤΟΔΗΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            273 => 
            array (
                'id' => 417,
                'postal_code_id' => 18,
                'name' => 'ΓΡΗΓΟΡΙΟΥ ΜΑΡΑΣΛΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            274 => 
            array (
                'id' => 418,
                'postal_code_id' => 18,
                'name' => 'ΔΕΙΝΟΚΡΑΤΟΥΣ',
            'cosmote_street_name' => 'ΔΕΙΝΟΚΡΑΤΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            275 => 
            array (
                'id' => 419,
                'postal_code_id' => 18,
                'name' => 'ΔΩΡΑΣ ΝΤ ΙΣΤΡΙΑ',
            'cosmote_street_name' => 'ΔΩΡΑΣ ΝΤ ΙΣΤΡΙΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            276 => 
            array (
                'id' => 420,
                'postal_code_id' => 18,
                'name' => 'ΗΡΟΦΙΛΟΥ',
            'cosmote_street_name' => 'ΗΡΟΦΙΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            277 => 
            array (
                'id' => 421,
                'postal_code_id' => 18,
                'name' => 'ΚΑΡΝΕΑΔΟΥ',
            'cosmote_street_name' => 'ΚΑΡΝΕΑΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            278 => 
            array (
                'id' => 422,
                'postal_code_id' => 18,
                'name' => 'ΚΛΕΟΜΕΝΟΥΣ',
            'cosmote_street_name' => 'ΚΛΕΟΜΕΝΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            279 => 
            array (
                'id' => 423,
                'postal_code_id' => 18,
                'name' => 'ΛΕΩΦΟΡΟΣ ΒΑΣΙΛΙΣΣΗΣ ΣΟΦΙΑΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΒΑΣΙΛΙΣΣΗΣ ΣΟΦΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            280 => 
            array (
                'id' => 424,
                'postal_code_id' => 18,
                'name' => 'ΞΕΝΟΚΡΑΤΟΥΣ',
            'cosmote_street_name' => 'ΞΕΝΟΚΡΑΤΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            281 => 
            array (
                'id' => 425,
                'postal_code_id' => 18,
                'name' => 'ΠΑΤΡΙΑΡΧΟΥ ΙΩΑΚΕΙΜ',
            'cosmote_street_name' => 'ΠΑΤΡΙΑΡΧΟΥ ΙΩΑΚΕΙΜ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            282 => 
            array (
                'id' => 426,
                'postal_code_id' => 18,
                'name' => 'ΠΛΟΥΤΑΡΧΟΥ',
            'cosmote_street_name' => 'ΠΛΟΥΤΑΡΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            283 => 
            array (
                'id' => 427,
                'postal_code_id' => 18,
                'name' => 'ΡΟΚΚΟΥ ΧΟΙΔΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            284 => 
            array (
                'id' => 428,
                'postal_code_id' => 18,
                'name' => 'ΣΟΥΗΔΙΑΣ',
            'cosmote_street_name' => 'ΣΟΥΗΔΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            285 => 
            array (
                'id' => 429,
                'postal_code_id' => 18,
                'name' => 'ΣΠΕΥΣΙΠΠΟΥ',
            'cosmote_street_name' => 'ΣΠΕΥΣΙΠΠΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            286 => 
            array (
                'id' => 430,
                'postal_code_id' => 18,
                'name' => 'ΥΨΗΛΑΝΤΟΥ',
            'cosmote_street_name' => 'ΥΨΗΛΑΝΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            287 => 
            array (
                'id' => 431,
                'postal_code_id' => 18,
                'name' => 'ΧΑΡΗΤΟΣ',
            'cosmote_street_name' => 'ΧΑΡΗΤΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            288 => 
            array (
                'id' => 432,
                'postal_code_id' => 19,
                'name' => 'ΑΚΑΔΗΜΙΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            289 => 
            array (
                'id' => 433,
                'postal_code_id' => 19,
                'name' => 'ΓΑΜΒΕΤΑ',
            'cosmote_street_name' => 'ΓΑΜΒΕΤΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            290 => 
            array (
                'id' => 434,
                'postal_code_id' => 19,
                'name' => 'ΘΕΜΙΣΤΟΚΛΕΟΥΣ',
            'cosmote_street_name' => 'ΘΕΜΙΣΤΟΚΛΕΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            291 => 
            array (
                'id' => 435,
                'postal_code_id' => 19,
                'name' => 'ΙΩΑΝΝΟΥ ΚΩΛΕΤΤΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            292 => 
            array (
                'id' => 436,
                'postal_code_id' => 19,
                'name' => 'ΚΑΝΤΑΚΟΥΖΗΝΟΥ',
            'cosmote_street_name' => 'ΚΑΝΤΑΚΟΥΖΗΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            293 => 
            array (
                'id' => 437,
                'postal_code_id' => 19,
                'name' => 'ΚΛΕΙΣΟΒΗΣ',
            'cosmote_street_name' => 'ΚΛΕΙΣΟΒΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            294 => 
            array (
                'id' => 438,
                'postal_code_id' => 19,
                'name' => 'ΠΑΤΟΥΣΑ',
            'cosmote_street_name' => 'ΠΑΤΟΥΣΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            295 => 
            array (
                'id' => 439,
                'postal_code_id' => 19,
                'name' => 'ΣΟΛΩΝΟΣ',
            'cosmote_street_name' => 'ΣΟΛΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            296 => 
            array (
                'id' => 440,
                'postal_code_id' => 19,
                'name' => 'ΤΖΩΡΤΖ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            297 => 
            array (
                'id' => 441,
                'postal_code_id' => 20,
                'name' => 'ΑΚΑΔΗΜΙΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            298 => 
            array (
                'id' => 442,
                'postal_code_id' => 20,
                'name' => 'ΓΑΜΒΕΤΑ',
            'cosmote_street_name' => 'ΓΑΜΒΕΤΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            299 => 
            array (
                'id' => 443,
                'postal_code_id' => 20,
                'name' => 'ΓΕΩΡΓΙΟΥ ΓΕΝΝΑΔΙΟΥ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΓΕΝΝΑΔΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            300 => 
            array (
                'id' => 444,
                'postal_code_id' => 20,
                'name' => 'ΓΡΑΒΙΑΣ',
            'cosmote_street_name' => 'ΓΡΑΒΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            301 => 
            array (
                'id' => 445,
                'postal_code_id' => 20,
                'name' => 'ΕΜΜΑΝΟΥΗΛ ΜΠΕΝΑΚΗ',
            'cosmote_street_name' => 'ΕΜΜΑΝΟΥΗΛ ΜΠΕΝΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            302 => 
            array (
                'id' => 446,
                'postal_code_id' => 20,
                'name' => 'ΖΑΛΟΓΓΟΥ',
            'cosmote_street_name' => 'ΖΑΛΟΓΓΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            303 => 
            array (
                'id' => 447,
                'postal_code_id' => 20,
                'name' => 'ΖΩΟΔΟΧΟΥ ΠΗΓΗΣ',
            'cosmote_street_name' => 'ΖΩΟΔΟΧΟΥ ΠΗΓΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            304 => 
            array (
                'id' => 448,
                'postal_code_id' => 20,
                'name' => 'ΘΕΜΙΣΤΟΚΛΕΟΥΣ',
            'cosmote_street_name' => 'ΘΕΜΙΣΤΟΚΛΕΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            305 => 
            array (
                'id' => 449,
                'postal_code_id' => 20,
                'name' => 'ΚΙΑΦΑΣ',
            'cosmote_street_name' => 'ΚΙΑΦΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            306 => 
            array (
                'id' => 450,
                'postal_code_id' => 20,
                'name' => 'ΜΑΥΡΟΚΟΡΔΑΤΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            307 => 
            array (
                'id' => 451,
                'postal_code_id' => 20,
                'name' => 'ΝΙΚΗΤΑΡΑ',
            'cosmote_street_name' => 'ΝΙΚΗΤΑΡΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            308 => 
            array (
                'id' => 452,
                'postal_code_id' => 20,
                'name' => 'ΠΑΝΕΠΙΣΤΗΜΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            309 => 
            array (
                'id' => 453,
                'postal_code_id' => 20,
                'name' => 'ΣΟΛΩΝΟΣ',
            'cosmote_street_name' => 'ΣΟΛΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            310 => 
            array (
                'id' => 454,
                'postal_code_id' => 20,
                'name' => 'ΣΟΥΛΙΟΥ',
            'cosmote_street_name' => 'ΣΟΥΛΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            311 => 
            array (
                'id' => 455,
                'postal_code_id' => 20,
                'name' => 'ΦΕΙΔΙΟΥ',
            'cosmote_street_name' => 'ΦΕΙΔΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            312 => 
            array (
                'id' => 456,
                'postal_code_id' => 20,
                'name' => 'ΧΑΡΙΛΑΟΥ ΤΡΙΚΟΥΠΗ',
            'cosmote_street_name' => 'ΧΑΡΙΛΑΟΥ ΤΡΙΚΟΥΠΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            313 => 
            array (
                'id' => 457,
                'postal_code_id' => 21,
                'name' => 'ΑΚΑΔΗΜΙΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            314 => 
            array (
                'id' => 458,
                'postal_code_id' => 21,
                'name' => 'ΑΣΚΛΗΠΙΟΥ',
            'cosmote_street_name' => 'ΑΣΚΛΗΠΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            315 => 
            array (
                'id' => 459,
                'postal_code_id' => 21,
                'name' => 'ΙΠΠΟΚΡΑΤΟΥΣ',
            'cosmote_street_name' => 'ΙΠΠΟΚΡΑΤΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            316 => 
            array (
                'id' => 460,
                'postal_code_id' => 21,
                'name' => 'ΜΑΣΣΑΛΙΑΣ',
            'cosmote_street_name' => 'ΜΑΣΣΑΛΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            317 => 
            array (
                'id' => 461,
                'postal_code_id' => 21,
                'name' => 'ΜΑΥΡΟΜΙΧΑΛΗ',
            'cosmote_street_name' => 'ΜΑΥΡΟΜΙΧΑΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            318 => 
            array (
                'id' => 462,
                'postal_code_id' => 21,
                'name' => 'ΠΑΝΕΠΙΣΤΗΜΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            319 => 
            array (
                'id' => 463,
                'postal_code_id' => 21,
                'name' => 'ΣΟΛΩΝΟΣ',
            'cosmote_street_name' => 'ΣΟΛΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            320 => 
            array (
                'id' => 464,
                'postal_code_id' => 21,
                'name' => 'ΧΑΡΙΛΑΟΥ ΤΡΙΚΟΥΠΗ',
            'cosmote_street_name' => 'ΧΑΡΙΛΑΟΥ ΤΡΙΚΟΥΠΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            321 => 
            array (
                'id' => 465,
                'postal_code_id' => 22,
                'name' => 'ΑΡΑΧΩΒΗΣ',
            'cosmote_street_name' => 'ΑΡΑΧΩΒΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            322 => 
            array (
                'id' => 466,
                'postal_code_id' => 22,
                'name' => 'ΑΣΚΛΗΠΙΟΥ',
            'cosmote_street_name' => 'ΑΣΚΛΗΠΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            323 => 
            array (
                'id' => 467,
                'postal_code_id' => 22,
                'name' => 'ΒΑΛΤΕΤΣΙΟΥ',
            'cosmote_street_name' => 'ΒΑΛΤΕΤΣΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            324 => 
            array (
                'id' => 468,
                'postal_code_id' => 22,
                'name' => 'ΓΕΩΡΓΙΟΥ ΠΡΑΣΣΑ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΠΡΑΣΣΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            325 => 
            array (
                'id' => 469,
                'postal_code_id' => 22,
                'name' => 'ΓΡΙΒΑΙΩΝ',
            'cosmote_street_name' => 'ΓΡΙΒΑΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            326 => 
            array (
                'id' => 470,
                'postal_code_id' => 22,
                'name' => 'ΔΕΛΦΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            327 => 
            array (
                'id' => 471,
                'postal_code_id' => 22,
                'name' => 'ΔΙΔΟΤΟΥ',
            'cosmote_street_name' => 'ΔΙΔΟΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            328 => 
            array (
                'id' => 472,
                'postal_code_id' => 22,
                'name' => 'ΙΠΠΟΚΡΑΤΟΥΣ',
            'cosmote_street_name' => 'ΙΠΠΟΚΡΑΤΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            329 => 
            array (
                'id' => 473,
                'postal_code_id' => 22,
                'name' => 'ΚΑΛΛΙΔΡΟΜΙΟΥ',
            'cosmote_street_name' => 'ΚΑΛΛΙΔΡΟΜΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            330 => 
            array (
                'id' => 474,
                'postal_code_id' => 22,
                'name' => 'ΚΑΠΛΑΝΩΝ',
            'cosmote_street_name' => 'ΚΑΠΛΑΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            331 => 
            array (
                'id' => 475,
                'postal_code_id' => 22,
                'name' => 'ΜΑΣΣΑΛΙΑΣ',
            'cosmote_street_name' => 'ΜΑΣΣΑΛΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            332 => 
            array (
                'id' => 476,
                'postal_code_id' => 22,
                'name' => 'ΜΑΥΡΟΜΙΧΑΛΗ',
            'cosmote_street_name' => 'ΜΑΥΡΟΜΙΧΑΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            333 => 
            array (
                'id' => 477,
                'postal_code_id' => 22,
                'name' => 'ΝΑΥΑΡΙΝΟΥ',
            'cosmote_street_name' => 'ΝΑΥΑΡΙΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            334 => 
            array (
                'id' => 478,
                'postal_code_id' => 22,
                'name' => 'ΟΚΤΑΒΙΟΥ ΜΕΡΛΙΕ',
            'cosmote_street_name' => 'ΟΚΤΑΒΙΟΥ ΜΕΡΛΙΕ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            335 => 
            array (
                'id' => 479,
                'postal_code_id' => 22,
                'name' => 'ΣΙΝΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-01 15:58:03',
            ),
            336 => 
            array (
                'id' => 480,
                'postal_code_id' => 22,
                'name' => 'ΣΚΟΥΦΑ',
            'cosmote_street_name' => 'ΣΚΟΥΦΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            337 => 
            array (
                'id' => 481,
                'postal_code_id' => 22,
                'name' => 'ΣΟΛΩΝΟΣ',
            'cosmote_street_name' => 'ΣΟΛΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            338 => 
            array (
                'id' => 482,
                'postal_code_id' => 22,
                'name' => 'ΣΤΑΙΚΟΥ',
            'cosmote_street_name' => 'ΣΤΑΙΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            339 => 
            array (
                'id' => 483,
                'postal_code_id' => 22,
                'name' => 'ΧΑΡΙΛΑΟΥ ΤΡΙΚΟΥΠΗ',
            'cosmote_street_name' => 'ΧΑΡΙΛΑΟΥ ΤΡΙΚΟΥΠΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:03',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            340 => 
            array (
                'id' => 484,
                'postal_code_id' => 23,
                'name' => 'ΑΝΔΡΕΑ ΛΟΝΤΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            341 => 
            array (
                'id' => 485,
                'postal_code_id' => 23,
                'name' => 'ΑΝΔΡΕΑ ΜΕΤΑΞΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            342 => 
            array (
                'id' => 486,
                'postal_code_id' => 23,
                'name' => 'ΑΡΑΧΩΒΗΣ',
            'cosmote_street_name' => 'ΑΡΑΧΩΒΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            343 => 
            array (
                'id' => 487,
                'postal_code_id' => 23,
                'name' => 'ΒΑΛΤΕΤΣΙΟΥ',
            'cosmote_street_name' => 'ΒΑΛΤΕΤΣΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            344 => 
            array (
                'id' => 488,
                'postal_code_id' => 23,
                'name' => 'ΔΕΡΒΕΝΙΩΝ',
            'cosmote_street_name' => 'ΔΕΡΒΕΝΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            345 => 
            array (
                'id' => 489,
                'postal_code_id' => 23,
                'name' => 'ΔΙΔΟΤΟΥ',
            'cosmote_street_name' => 'ΔΙΔΟΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            346 => 
            array (
                'id' => 490,
                'postal_code_id' => 23,
                'name' => 'ΕΜΜΑΝΟΥΗΛ ΜΠΕΝΑΚΗ',
            'cosmote_street_name' => 'ΕΜΜΑΝΟΥΗΛ ΜΠΕΝΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            347 => 
            array (
                'id' => 491,
                'postal_code_id' => 23,
                'name' => 'ΕΡΕΣΟΥ',
            'cosmote_street_name' => 'ΕΡΕΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            348 => 
            array (
                'id' => 492,
                'postal_code_id' => 23,
                'name' => 'ΖΩΟΔΟΧΟΥ ΠΗΓΗΣ',
            'cosmote_street_name' => 'ΖΩΟΔΟΧΟΥ ΠΗΓΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            349 => 
            array (
                'id' => 493,
                'postal_code_id' => 23,
                'name' => 'ΘΕΜΙΣΤΟΚΛΕΟΥΣ',
            'cosmote_street_name' => 'ΘΕΜΙΣΤΟΚΛΕΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            350 => 
            array (
                'id' => 494,
                'postal_code_id' => 23,
                'name' => 'ΙΩΑΝΝΟΥ ΚΩΛΕΤΤΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            351 => 
            array (
                'id' => 495,
                'postal_code_id' => 23,
                'name' => 'ΚΑΛΛΙΔΡΟΜΙΟΥ',
            'cosmote_street_name' => 'ΚΑΛΛΙΔΡΟΜΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            352 => 
            array (
                'id' => 496,
                'postal_code_id' => 23,
                'name' => 'ΜΑΝΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            353 => 
            array (
                'id' => 497,
                'postal_code_id' => 23,
                'name' => 'ΜΕΘΩΝΗΣ',
            'cosmote_street_name' => 'ΜΕΘΩΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            354 => 
            array (
                'id' => 498,
                'postal_code_id' => 23,
                'name' => 'ΜΕΣΟΛΟΓΓΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            355 => 
            array (
                'id' => 499,
                'postal_code_id' => 23,
                'name' => 'ΝΑΥΑΡΙΝΟΥ',
            'cosmote_street_name' => 'ΝΑΥΑΡΙΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            356 => 
            array (
                'id' => 500,
                'postal_code_id' => 23,
                'name' => 'ΣΟΛΩΝΟΣ',
            'cosmote_street_name' => 'ΣΟΛΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            357 => 
            array (
                'id' => 501,
                'postal_code_id' => 23,
                'name' => 'ΣΟΥΛΙΟΥ',
            'cosmote_street_name' => 'ΣΟΥΛΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            358 => 
            array (
                'id' => 502,
                'postal_code_id' => 23,
                'name' => 'ΤΖΑΒΕΛΛΑ',
            'cosmote_street_name' => 'ΤΖΑΒΕΛΛΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            359 => 
            array (
                'id' => 503,
                'postal_code_id' => 23,
                'name' => 'ΧΑΡΙΛΑΟΥ ΤΡΙΚΟΥΠΗ',
            'cosmote_street_name' => 'ΧΑΡΙΛΑΟΥ ΤΡΙΚΟΥΠΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            360 => 
            array (
                'id' => 504,
                'postal_code_id' => 24,
                'name' => 'ΔΙΟΝΥΣΙΟΥ ΣΟΛΩΜΟΥ',
            'cosmote_street_name' => 'ΔΙΟΝΥΣΙΟΥ ΣΟΛΩΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            361 => 
            array (
                'id' => 505,
                'postal_code_id' => 24,
                'name' => 'ΖΑΙΜΗ',
            'cosmote_street_name' => 'ΖΑΙΜΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            362 => 
            array (
                'id' => 506,
                'postal_code_id' => 24,
                'name' => 'ΙΩΑΝΝΟΥ ΚΩΛΕΤΤΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            363 => 
            array (
                'id' => 507,
                'postal_code_id' => 24,
                'name' => 'ΜΠΟΤΑΣΗ',
            'cosmote_street_name' => 'ΜΠΟΤΑΣΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            364 => 
            array (
                'id' => 508,
                'postal_code_id' => 24,
            'name' => 'ΜΠΟΥΜΠΟΥΛΙΝΑΣ (ΠΡΧ ΜΟΥΣΕΙΟ)',
            'cosmote_street_name' => 'ΜΠΟΥΜΠΟΥΛΙΝΑΣ (ΠΡΧ ΜΟΥΣΕΙΟ) (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            365 => 
            array (
                'id' => 509,
                'postal_code_id' => 24,
                'name' => 'ΣΟΥΛΤΑΝΗ',
            'cosmote_street_name' => 'ΣΟΥΛΤΑΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:42',
            ),
            366 => 
            array (
                'id' => 510,
                'postal_code_id' => 24,
                'name' => 'ΣΤΟΥΡΝΑΡΗ',
            'cosmote_street_name' => 'ΣΤΟΥΡΝΑΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            367 => 
            array (
                'id' => 511,
                'postal_code_id' => 24,
                'name' => 'ΤΟΣΙΤΣΑ',
            'cosmote_street_name' => 'ΤΟΣΙΤΣΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            368 => 
            array (
                'id' => 512,
                'postal_code_id' => 25,
                'name' => 'ΔΙΟΝΥΣΙΟΥ ΣΟΛΩΜΟΥ',
            'cosmote_street_name' => 'ΔΙΟΝΥΣΙΟΥ ΣΟΛΩΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            369 => 
            array (
                'id' => 513,
                'postal_code_id' => 25,
                'name' => 'ΕΡΕΣΟΥ',
            'cosmote_street_name' => 'ΕΡΕΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            370 => 
            array (
                'id' => 514,
                'postal_code_id' => 25,
                'name' => 'ΖΑΙΜΗ',
            'cosmote_street_name' => 'ΖΑΙΜΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            371 => 
            array (
                'id' => 515,
                'postal_code_id' => 25,
                'name' => 'ΖΩΣΙΜΑΔΩΝ',
            'cosmote_street_name' => 'ΖΩΣΙΜΑΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            372 => 
            array (
                'id' => 516,
                'postal_code_id' => 25,
                'name' => 'ΘΕΜΙΣΤΟΚΛΕΟΥΣ',
            'cosmote_street_name' => 'ΘΕΜΙΣΤΟΚΛΕΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            373 => 
            array (
                'id' => 517,
                'postal_code_id' => 25,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΟΙΚΟΝΟΜΟΥ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΟΙΚΟΝΟΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            374 => 
            array (
                'id' => 518,
                'postal_code_id' => 25,
                'name' => 'ΝΑΥΑΡΧΟΥ ΝΟΤΑΡΑ',
            'cosmote_street_name' => 'ΝΑΥΑΡΧΟΥ ΝΟΤΑΡΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            375 => 
            array (
                'id' => 519,
                'postal_code_id' => 25,
                'name' => 'ΣΟΥΛΤΑΝΗ',
            'cosmote_street_name' => 'ΣΟΥΛΤΑΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            376 => 
            array (
                'id' => 520,
                'postal_code_id' => 25,
                'name' => 'ΣΠΥΡΙΔΩΝΟΣ ΤΡΙΚΟΥΠΗ',
            'cosmote_street_name' => 'ΣΠΥΡΙΔΩΝΟΣ ΤΡΙΚΟΥΠΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            377 => 
            array (
                'id' => 521,
                'postal_code_id' => 25,
                'name' => 'ΣΤΟΥΡΝΑΡΗ',
            'cosmote_street_name' => 'ΣΤΟΥΡΝΑΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            378 => 
            array (
                'id' => 522,
                'postal_code_id' => 25,
                'name' => 'ΤΟΣΙΤΣΑ',
            'cosmote_street_name' => 'ΤΟΣΙΤΣΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            379 => 
            array (
                'id' => 523,
                'postal_code_id' => 25,
                'name' => 'ΤΣΑΜΑΔΟΥ',
            'cosmote_street_name' => 'ΤΣΑΜΑΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            380 => 
            array (
                'id' => 524,
                'postal_code_id' => 26,
                'name' => 'ΑΓΙΑΣ ΛΑΥΡΑΣ',
            'cosmote_street_name' => 'ΑΓΙΑΣ ΛΑΥΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            381 => 
            array (
                'id' => 525,
                'postal_code_id' => 26,
                'name' => 'ΑΕΤΟΡΡΑΧΗΣ',
            'cosmote_street_name' => 'ΑΕΤΟΡΡΑΧΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            382 => 
            array (
                'id' => 526,
                'postal_code_id' => 26,
                'name' => 'ΑΛΕΞΑΝΔΡΟΥ ΠΑΠΑΔΙΑΜΑΝΤΗ',
            'cosmote_street_name' => 'ΑΛΕΞΑΝΔΡΟΥ ΠΑΠΑΔΙΑΜΑΝΤΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            383 => 
            array (
                'id' => 527,
                'postal_code_id' => 26,
                'name' => 'ΑΝΔΡΕΑ ΚΑΡΚΑΒΙΤΣΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            384 => 
            array (
                'id' => 528,
                'postal_code_id' => 26,
                'name' => 'ΑΡΙΣΤΟΜΕΝΗ ΠΡΟΒΕΛΕΓΓΙΟΥ',
            'cosmote_street_name' => 'ΑΡΙΣΤΟΜΕΝΗ ΠΡΟΒΕΛΕΓΓΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            385 => 
            array (
                'id' => 529,
                'postal_code_id' => 26,
                'name' => 'Β. ΧΑΤΖΗ',
            'cosmote_street_name' => 'Β. ΧΑΤΖΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            386 => 
            array (
                'id' => 530,
                'postal_code_id' => 26,
                'name' => 'ΒΙΚΕΝΤΙΟΥ ΛΑΝΤΣΑ',
            'cosmote_street_name' => 'ΒΙΚΕΝΤΙΟΥ ΛΑΝΤΣΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            387 => 
            array (
                'id' => 531,
                'postal_code_id' => 26,
                'name' => 'ΒΛΑΣΙΟΥ ΓΑΒΡΙΗΛΙΔΟΥ',
            'cosmote_street_name' => 'ΒΛΑΣΙΟΥ ΓΑΒΡΙΗΛΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            388 => 
            array (
                'id' => 532,
                'postal_code_id' => 26,
                'name' => 'ΓΕΡΑΣΙΜΟΥ ΜΑΡΚΟΡΑ',
            'cosmote_street_name' => 'ΓΕΡΑΣΙΜΟΥ ΜΑΡΚΟΡΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            389 => 
            array (
                'id' => 533,
                'postal_code_id' => 26,
                'name' => 'ΓΕΩΡΓΙΟΥ ΒΙΖΥΗΝΟΥ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΒΙΖΥΗΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            390 => 
            array (
                'id' => 534,
                'postal_code_id' => 26,
                'name' => 'ΓΕΩΡΓΙΟΥ ΒΡΟΥΤΟΥ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΒΡΟΥΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            391 => 
            array (
                'id' => 535,
                'postal_code_id' => 26,
                'name' => 'ΓΕΩΡΓΙΟΥ ΔΡΟΣΙΝΗ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΔΡΟΣΙΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            392 => 
            array (
                'id' => 536,
                'postal_code_id' => 26,
                'name' => 'ΓΕΩΡΓΙΟΥ ΚΑΛΟΣΓΟΥΡΟΥ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΚΑΛΟΣΓΟΥΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            393 => 
            array (
                'id' => 537,
                'postal_code_id' => 26,
                'name' => 'ΓΕΩΡΓΙΟΥ ΡΟΙΛΟΥ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΡΟΙΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            394 => 
            array (
                'id' => 538,
                'postal_code_id' => 26,
                'name' => 'ΓΕΩΡΓΙΟΥ ΧΑΤΖΗΔΑΚΗ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΧΑΤΖΗΔΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            395 => 
            array (
                'id' => 539,
                'postal_code_id' => 26,
                'name' => 'ΓΙΑΝΝΗ ΚΑΜΠΥΣΗ',
            'cosmote_street_name' => 'ΓΙΑΝΝΗ ΚΑΜΠΥΣΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            396 => 
            array (
                'id' => 540,
                'postal_code_id' => 26,
                'name' => 'ΓΙΑΝΝΗ ΨΥΧΑΡΗ',
            'cosmote_street_name' => 'ΓΙΑΝΝΗ ΨΥΧΑΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            397 => 
            array (
                'id' => 541,
                'postal_code_id' => 26,
                'name' => 'ΓΙΑΝΝΟΥΛΗ ΧΑΛΕΠΑ',
            'cosmote_street_name' => 'ΓΙΑΝΝΟΥΛΗ ΧΑΛΕΠΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            398 => 
            array (
                'id' => 542,
                'postal_code_id' => 26,
                'name' => 'ΓΡΗΓΟΡΟΒΙΟΥ',
            'cosmote_street_name' => 'ΓΡΗΓΟΡΟΒΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            399 => 
            array (
                'id' => 543,
                'postal_code_id' => 26,
                'name' => 'ΔΗΜΗΤΡΙΟΥ ΝΟΥΜΑ ΤΑΓΚΟΠΟΥΛΟΥ',
            'cosmote_street_name' => 'ΔΗΜΗΤΡΙΟΥ ΝΟΥΜΑ ΤΑΓΚΟΠΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            400 => 
            array (
                'id' => 544,
                'postal_code_id' => 26,
                'name' => 'ΕΔΟΥΑΡΔΟΥ ΣΑΟΥΜΠΕΡΤ',
            'cosmote_street_name' => 'ΕΔΟΥΑΡΔΟΥ ΣΑΟΥΜΠΕΡΤ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            401 => 
            array (
                'id' => 545,
                'postal_code_id' => 26,
                'name' => 'ΕΜΜΑΝΟΥΗΛ ΛΥΚΟΥΔΗ',
            'cosmote_street_name' => 'ΕΜΜΑΝΟΥΗΛ ΛΥΚΟΥΔΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            402 => 
            array (
                'id' => 546,
                'postal_code_id' => 26,
                'name' => 'ΖΑΜΠΕΛΙΟΥ',
            'cosmote_street_name' => 'ΖΑΜΠΕΛΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            403 => 
            array (
                'id' => 547,
                'postal_code_id' => 26,
                'name' => 'ΗΛΙΑ ΤΑΝΤΑΛΙΔΗ',
            'cosmote_street_name' => 'ΗΛΙΑ ΤΑΝΤΑΛΙΔΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            404 => 
            array (
                'id' => 548,
                'postal_code_id' => 26,
                'name' => 'ΘΕΜΗ ΑΝΝΙΝΟΥ',
            'cosmote_street_name' => 'ΘΕΜΗ ΑΝΝΙΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            405 => 
            array (
                'id' => 549,
                'postal_code_id' => 26,
                'name' => 'ΘΕΟΔΩΡΟΥ ΟΡΦΑΝΙΔΟΥ',
            'cosmote_street_name' => 'ΘΕΟΔΩΡΟΥ ΟΡΦΑΝΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            406 => 
            array (
                'id' => 550,
                'postal_code_id' => 26,
                'name' => 'ΙΑΚΩΒΟΥ ΠΟΛΥΛΑ',
            'cosmote_street_name' => 'ΙΑΚΩΒΟΥ ΠΟΛΥΛΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            407 => 
            array (
                'id' => 551,
                'postal_code_id' => 26,
                'name' => 'ΙΑΚΩΒΟΥ ΡΙΖΟΥ ΝΕΡΟΥΛΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            408 => 
            array (
                'id' => 552,
                'postal_code_id' => 26,
                'name' => 'ΙΩΑΝΝΟΥ ΓΡΥΠΑΡΗ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΓΡΥΠΑΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            409 => 
            array (
                'id' => 553,
                'postal_code_id' => 26,
                'name' => 'ΙΩΑΝΝΟΥ ΔΡΟΣΟΠΟΥΛΟΥ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΔΡΟΣΟΠΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            410 => 
            array (
                'id' => 554,
                'postal_code_id' => 26,
                'name' => 'ΙΩΑΝΝΟΥ ΚΟΝΔΥΛΑΚΗ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΚΟΝΔΥΛΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            411 => 
            array (
                'id' => 555,
                'postal_code_id' => 26,
                'name' => 'ΙΩΑΝΝΟΥ ΠΟΛΕΜΗ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΠΟΛΕΜΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            412 => 
            array (
                'id' => 556,
                'postal_code_id' => 26,
                'name' => 'ΙΩΑΝΝΟΥ ΤΣΑΚΑΣΙΑΝΟΥ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΤΣΑΚΑΣΙΑΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            413 => 
            array (
                'id' => 557,
                'postal_code_id' => 26,
                'name' => 'ΚΑΡΑΣΟΥΤΣΑ',
            'cosmote_street_name' => 'ΚΑΡΑΣΟΥΤΣΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            414 => 
            array (
                'id' => 558,
                'postal_code_id' => 26,
                'name' => 'ΚΑΣΤΕΛΛΙΟΥ',
            'cosmote_street_name' => 'ΚΑΣΤΕΛΛΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            415 => 
            array (
                'id' => 559,
                'postal_code_id' => 26,
                'name' => 'ΚΙΘΑΙΡΩΝΟΣ',
            'cosmote_street_name' => 'ΚΙΘΑΙΡΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            416 => 
            array (
                'id' => 560,
                'postal_code_id' => 26,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΘΕΟΤΟΚΗ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΘΕΟΤΟΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            417 => 
            array (
                'id' => 561,
                'postal_code_id' => 26,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΑΡΥΩΤΑΚΗ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΑΡΥΩΤΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            418 => 
            array (
                'id' => 562,
                'postal_code_id' => 26,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΟΝΤΟΥ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΟΝΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            419 => 
            array (
                'id' => 563,
                'postal_code_id' => 26,
                'name' => 'ΚΩΣΤΑ ΚΡΥΣΤΑΛΛΗ',
            'cosmote_street_name' => 'ΚΩΣΤΑ ΚΡΥΣΤΑΛΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            420 => 
            array (
                'id' => 564,
                'postal_code_id' => 26,
                'name' => 'ΚΩΣΤΑ ΠΑΡΟΡΙΤΗ',
            'cosmote_street_name' => 'ΚΩΣΤΑ ΠΑΡΟΡΙΤΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            421 => 
            array (
                'id' => 565,
                'postal_code_id' => 26,
                'name' => 'ΚΩΣΤΗ ΠΑΛΑΜΑ',
            'cosmote_street_name' => 'ΚΩΣΤΗ ΠΑΛΑΜΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            422 => 
            array (
                'id' => 566,
                'postal_code_id' => 26,
                'name' => 'ΛΑΜΠΡΟΥ ΠΟΡΦΥΡΑ',
            'cosmote_street_name' => 'ΛΑΜΠΡΟΥ ΠΟΡΦΥΡΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            423 => 
            array (
                'id' => 567,
                'postal_code_id' => 26,
                'name' => 'ΛΑΣΚΑΡΑΤΟΥ',
            'cosmote_street_name' => 'ΛΑΣΚΑΡΑΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            424 => 
            array (
                'id' => 568,
                'postal_code_id' => 26,
                'name' => 'ΛΕΩΦΟΡΟΣ ΓΑΛΑΤΣΙΟΥ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΓΑΛΑΤΣΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            425 => 
            array (
                'id' => 569,
                'postal_code_id' => 26,
                'name' => 'ΛΕΩΦΟΡΟΣ ΗΡΑΚΛΕΙΟΥ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΗΡΑΚΛΕΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            426 => 
            array (
                'id' => 570,
                'postal_code_id' => 26,
                'name' => 'ΛΟΡΕΝΤΖΟΥ ΜΑΒΙΛΗ',
            'cosmote_street_name' => 'ΛΟΡΕΝΤΖΟΥ ΜΑΒΙΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            427 => 
            array (
                'id' => 571,
                'postal_code_id' => 26,
                'name' => 'ΜΑΝΕΣΗ',
            'cosmote_street_name' => 'ΜΑΝΕΣΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            428 => 
            array (
                'id' => 572,
                'postal_code_id' => 26,
                'name' => 'ΜΑΡΙΑΣ ΠΟΛΥΔΟΥΡΗ',
            'cosmote_street_name' => 'ΜΑΡΙΑΣ ΠΟΛΥΔΟΥΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            429 => 
            array (
                'id' => 573,
                'postal_code_id' => 26,
                'name' => 'ΜΑΡΤΖΩΚΗ',
            'cosmote_street_name' => 'ΜΑΡΤΖΩΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            430 => 
            array (
                'id' => 574,
                'postal_code_id' => 26,
                'name' => 'ΜΗΤΣΑΚΗ',
            'cosmote_street_name' => 'ΜΗΤΣΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            431 => 
            array (
                'id' => 575,
                'postal_code_id' => 26,
                'name' => 'ΜΟΥΣΟΥΡΓΟΥ ΣΠΥΡΙΔΩΝΟΣ ΞΥΝΔΑ',
            'cosmote_street_name' => 'ΜΟΥΣΟΥΡΓΟΥ ΣΠΥΡΙΔΩΝΟΣ ΞΥΝΔΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            432 => 
            array (
                'id' => 576,
                'postal_code_id' => 26,
                'name' => 'ΝΑΞΟΥ',
            'cosmote_street_name' => 'ΝΑΞΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            433 => 
            array (
                'id' => 577,
                'postal_code_id' => 26,
                'name' => 'ΝΙΚΟΛΑΟΥ ΣΑΛΤΕΛΗ',
            'cosmote_street_name' => 'ΝΙΚΟΛΑΟΥ ΣΑΛΤΕΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            434 => 
            array (
                'id' => 578,
                'postal_code_id' => 26,
                'name' => 'ΠΑΝΑΓΙΩΤΗ ΣΥΝΟΔΙΝΟΥ',
            'cosmote_street_name' => 'ΠΑΝΑΓΙΩΤΗ ΣΥΝΟΔΙΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            435 => 
            array (
                'id' => 579,
                'postal_code_id' => 26,
                'name' => 'ΠΑΝΣΕΛΗΝΟΥ',
            'cosmote_street_name' => 'ΠΑΝΣΕΛΗΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            436 => 
            array (
                'id' => 580,
                'postal_code_id' => 26,
                'name' => 'ΠΑΣΣΩΒ',
            'cosmote_street_name' => 'ΠΑΣΣΩΒ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            437 => 
            array (
                'id' => 581,
                'postal_code_id' => 26,
                'name' => 'ΠΑΤΗΣΙΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            438 => 
            array (
                'id' => 582,
                'postal_code_id' => 26,
                'name' => 'ΠΕΡΔΙΚΑΡΗ',
            'cosmote_street_name' => 'ΠΕΡΔΙΚΑΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            439 => 
            array (
                'id' => 583,
                'postal_code_id' => 26,
                'name' => 'ΠΕΡΙΚΛΗ ΓΙΑΝΝΟΠΟΥΛΟΥ',
            'cosmote_street_name' => 'ΠΕΡΙΚΛΗ ΓΙΑΝΝΟΠΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            440 => 
            array (
                'id' => 584,
                'postal_code_id' => 26,
                'name' => 'ΠΕΤΡΟΥ ΡΟΥΜΠΟΥ',
            'cosmote_street_name' => 'ΠΕΤΡΟΥ ΡΟΥΜΠΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            441 => 
            array (
                'id' => 585,
                'postal_code_id' => 26,
                'name' => 'ΠΙΝΔΟΥ',
            'cosmote_street_name' => 'ΠΙΝΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            442 => 
            array (
                'id' => 586,
                'postal_code_id' => 26,
                'name' => 'ΠΛΑΤΕΙΑ ΑΛΕΞΑΝΔΡΟΥ ΠΑΠΑΔΙΑΜΑΝΤΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            443 => 
            array (
                'id' => 587,
                'postal_code_id' => 26,
                'name' => 'ΠΛΑΤΕΙΑ Κ. ΝΙΚΟΛΟΠΟΥΛΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            444 => 
            array (
                'id' => 588,
                'postal_code_id' => 26,
                'name' => 'ΠΛΑΤΕΙΑ ΣΠΥΡΟΥ ΠΑΠΑΛΟΥΚΑ',
            'cosmote_street_name' => 'ΠΛΑΤΕΙΑ ΣΠΥΡΟΥ ΠΑΠΑΛΟΥΚΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            445 => 
            array (
                'id' => 589,
                'postal_code_id' => 26,
                'name' => 'ΠΟΛΥΒΙΟΥ ΔΗΜΗΤΡΑΚΟΠΟΥΛΟΥ',
            'cosmote_street_name' => 'ΠΟΛΥΒΙΟΥ ΔΗΜΗΤΡΑΚΟΠΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            446 => 
            array (
                'id' => 590,
                'postal_code_id' => 26,
                'name' => 'ΡΟΣΤΑΝ',
            'cosmote_street_name' => 'ΡΟΣΤΑΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            447 => 
            array (
                'id' => 591,
                'postal_code_id' => 26,
                'name' => 'ΣΠΥΡΙΔΩΝΟΣ ΠΕΡΕΣΙΑΔΟΥ',
            'cosmote_street_name' => 'ΣΠΥΡΙΔΩΝΟΣ ΠΕΡΕΣΙΑΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            448 => 
            array (
                'id' => 592,
                'postal_code_id' => 26,
                'name' => 'ΣΠΥΡΟΥ ΒΑΣΙΛΕΙΑΔΟΥ',
            'cosmote_street_name' => 'ΣΠΥΡΟΥ ΒΑΣΙΛΕΙΑΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            449 => 
            array (
                'id' => 593,
                'postal_code_id' => 26,
                'name' => 'ΣΠΥΡΟΥ ΛΑΜΠΡΟΥ',
            'cosmote_street_name' => 'ΣΠΥΡΟΥ ΛΑΜΠΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            450 => 
            array (
                'id' => 594,
                'postal_code_id' => 26,
                'name' => 'ΣΠΥΡΟΥ ΜΑΤΣΟΥΚΑ',
            'cosmote_street_name' => 'ΣΠΥΡΟΥ ΜΑΤΣΟΥΚΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            451 => 
            array (
                'id' => 595,
                'postal_code_id' => 26,
                'name' => 'ΣΤΕΦΑΝΟΥ ΓΡΑΝΙΤΣΑ',
            'cosmote_street_name' => 'ΣΤΕΦΑΝΟΥ ΓΡΑΝΙΤΣΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            452 => 
            array (
                'id' => 596,
                'postal_code_id' => 26,
                'name' => 'ΤΑΒΟΥΛΑΡΗ',
            'cosmote_street_name' => 'ΤΑΒΟΥΛΑΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            453 => 
            array (
                'id' => 597,
                'postal_code_id' => 26,
                'name' => 'ΤΑΥΓΕΤΟΥ',
            'cosmote_street_name' => 'ΤΑΥΓΕΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            454 => 
            array (
                'id' => 598,
                'postal_code_id' => 26,
                'name' => 'ΤΕΡΤΣΕΤΗ',
            'cosmote_street_name' => 'ΤΕΡΤΣΕΤΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            455 => 
            array (
                'id' => 599,
                'postal_code_id' => 26,
                'name' => 'ΦΙΛΥΡΑ',
            'cosmote_street_name' => 'ΦΙΛΥΡΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            456 => 
            array (
                'id' => 600,
                'postal_code_id' => 26,
                'name' => 'ΦΥΤΑΛΗ',
            'cosmote_street_name' => 'ΦΥΤΑΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            457 => 
            array (
                'id' => 601,
                'postal_code_id' => 26,
                'name' => 'ΦΩΣΚΟΛΟΥ',
            'cosmote_street_name' => 'ΦΩΣΚΟΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            458 => 
            array (
                'id' => 602,
                'postal_code_id' => 26,
                'name' => 'ΧΟΦΜΑΝ',
            'cosmote_street_name' => 'ΧΟΦΜΑΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            459 => 
            array (
                'id' => 603,
                'postal_code_id' => 26,
                'name' => 'ΩΡΩΠΟΥ',
            'cosmote_street_name' => 'ΩΡΩΠΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            460 => 
            array (
                'id' => 604,
                'postal_code_id' => 27,
                'name' => 'ΑΓ. ΓΕΩΡΓΟΥΛΙΑ',
            'cosmote_street_name' => 'ΑΓ. ΓΕΩΡΓΟΥΛΙΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:43',
            ),
            461 => 
            array (
                'id' => 605,
                'postal_code_id' => 27,
                'name' => 'ΑΛΙΑΡΤΟΥ',
            'cosmote_street_name' => 'ΑΛΙΑΡΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            462 => 
            array (
                'id' => 606,
                'postal_code_id' => 27,
                'name' => 'ΑΜΥΚΛΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            463 => 
            array (
                'id' => 607,
                'postal_code_id' => 27,
                'name' => 'ΓΙΑΝΝΟΥΛΗ ΧΑΛΕΠΑ',
            'cosmote_street_name' => 'ΓΙΑΝΝΟΥΛΗ ΧΑΛΕΠΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            464 => 
            array (
                'id' => 608,
                'postal_code_id' => 27,
                'name' => 'ΘΕΟΔΩΡΟΥ ΟΡΦΑΝΙΔΟΥ',
            'cosmote_street_name' => 'ΘΕΟΔΩΡΟΥ ΟΡΦΑΝΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            465 => 
            array (
                'id' => 609,
                'postal_code_id' => 27,
                'name' => 'ΘΥΑΤΕΙΡΩΝ',
            'cosmote_street_name' => 'ΘΥΑΤΕΙΡΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            466 => 
            array (
                'id' => 610,
                'postal_code_id' => 27,
                'name' => 'ΙΑΛΕΜΟΥ',
            'cosmote_street_name' => 'ΙΑΛΕΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            467 => 
            array (
                'id' => 611,
                'postal_code_id' => 27,
                'name' => 'ΙΩΑΝΝΟΥ ΦΩΚΑ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΦΩΚΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            468 => 
            array (
                'id' => 612,
                'postal_code_id' => 27,
                'name' => 'ΛΕΩΦΟΡΟΣ ΗΡΑΚΛΕΙΟΥ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΗΡΑΚΛΕΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            469 => 
            array (
                'id' => 613,
                'postal_code_id' => 27,
                'name' => 'ΠΑΝΔΟΣΙΑΣ',
            'cosmote_street_name' => 'ΠΑΝΔΟΣΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            470 => 
            array (
                'id' => 614,
                'postal_code_id' => 27,
                'name' => 'ΣΑΒΑΓΗΝΩΝ',
            'cosmote_street_name' => 'ΣΑΒΑΓΗΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            471 => 
            array (
                'id' => 615,
                'postal_code_id' => 27,
                'name' => 'ΣΙΒΟΡΩΝ',
            'cosmote_street_name' => 'ΣΙΒΟΡΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            472 => 
            array (
                'id' => 616,
                'postal_code_id' => 27,
                'name' => 'ΣΥΡΑΚΟΥΣΩΝ',
            'cosmote_street_name' => 'ΣΥΡΑΚΟΥΣΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            473 => 
            array (
                'id' => 617,
                'postal_code_id' => 27,
                'name' => 'ΤΡΑΛΛΕΩΝ',
            'cosmote_street_name' => 'ΤΡΑΛΛΕΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            474 => 
            array (
                'id' => 618,
                'postal_code_id' => 27,
                'name' => 'ΩΡΩΠΟΥ',
            'cosmote_street_name' => 'ΩΡΩΠΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            475 => 
            array (
                'id' => 619,
                'postal_code_id' => 28,
                'name' => 'ΑΜΑΣΙΟΥ',
            'cosmote_street_name' => 'ΑΜΑΣΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            476 => 
            array (
                'id' => 620,
                'postal_code_id' => 28,
                'name' => 'ΑΝΑΒΡΥΤΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            477 => 
            array (
                'id' => 621,
                'postal_code_id' => 28,
                'name' => 'ΑΝΔΡΕΑ ΑΝΔΡΕΑΔΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            478 => 
            array (
                'id' => 622,
                'postal_code_id' => 28,
                'name' => 'ΑΝΘΕΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            479 => 
            array (
                'id' => 623,
                'postal_code_id' => 28,
                'name' => 'ΑΡΙΟΒΑΡΖΑΝΟΥ',
            'cosmote_street_name' => 'ΑΡΙΟΒΑΡΖΑΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            480 => 
            array (
                'id' => 624,
                'postal_code_id' => 28,
                'name' => 'ΑΡΙΣΤΟΤΕΛΟΥΣ ΚΟΥΡΤΙΔΗ',
            'cosmote_street_name' => 'ΑΡΙΣΤΟΤΕΛΟΥΣ ΚΟΥΡΤΙΔΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            481 => 
            array (
                'id' => 625,
                'postal_code_id' => 28,
                'name' => 'ΑΧΑΡΝΩΝ',
            'cosmote_street_name' => 'ΑΧΑΡΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            482 => 
            array (
                'id' => 626,
                'postal_code_id' => 28,
                'name' => 'ΒΟΥΤΥΡΑ',
            'cosmote_street_name' => 'ΒΟΥΤΥΡΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            483 => 
            array (
                'id' => 627,
                'postal_code_id' => 28,
                'name' => 'ΓΕΩΡΓΙΟΥ ΙΑΚΩΒΙΔΟΥ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΙΑΚΩΒΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            484 => 
            array (
                'id' => 628,
                'postal_code_id' => 28,
                'name' => 'ΓΕΩΡΓΙΟΥ ΛΑΜΠΑΚΗ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΛΑΜΠΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            485 => 
            array (
                'id' => 629,
                'postal_code_id' => 28,
                'name' => 'ΓΕΩΡΓΙΟΥ ΜΑΡΙΔΑΚΗ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΜΑΡΙΔΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            486 => 
            array (
                'id' => 630,
                'postal_code_id' => 28,
                'name' => 'ΔΗΜΗΤΡΙΟΥ ΦΙΛΙΟΥ',
            'cosmote_street_name' => 'ΔΗΜΗΤΡΙΟΥ ΦΙΛΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            487 => 
            array (
                'id' => 631,
                'postal_code_id' => 28,
                'name' => 'ΕΝΔΥΜΙΩΝΟΣ',
            'cosmote_street_name' => 'ΕΝΔΥΜΙΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            488 => 
            array (
                'id' => 632,
                'postal_code_id' => 28,
                'name' => 'ΕΠΙΓΕΝΟΥΣ',
            'cosmote_street_name' => 'ΕΠΙΓΕΝΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            489 => 
            array (
                'id' => 633,
                'postal_code_id' => 28,
                'name' => 'ΕΠΙΚΛΕΟΥΣ',
            'cosmote_street_name' => 'ΕΠΙΚΛΕΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            490 => 
            array (
                'id' => 634,
                'postal_code_id' => 28,
                'name' => 'ΕΠΙΝΙΚΟΥ',
            'cosmote_street_name' => 'ΕΠΙΝΙΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            491 => 
            array (
                'id' => 635,
                'postal_code_id' => 28,
                'name' => 'ΕΡΑΤΩΝΟΣ',
            'cosmote_street_name' => 'ΕΡΑΤΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            492 => 
            array (
                'id' => 636,
                'postal_code_id' => 28,
                'name' => 'ΕΡΜΙΠΠΟΥ',
            'cosmote_street_name' => 'ΕΡΜΙΠΠΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            493 => 
            array (
                'id' => 637,
                'postal_code_id' => 28,
                'name' => 'ΖΑΦΕΙΡΟΠΟΥΛΟΥ',
            'cosmote_street_name' => 'ΖΑΦΕΙΡΟΠΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            494 => 
            array (
                'id' => 638,
                'postal_code_id' => 28,
                'name' => 'ΚΗΠΩΝ',
            'cosmote_street_name' => 'ΚΗΠΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            495 => 
            array (
                'id' => 639,
                'postal_code_id' => 28,
                'name' => 'ΚΟΥΚΟΥΛΑΡΗ',
            'cosmote_street_name' => 'ΚΟΥΚΟΥΛΑΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            496 => 
            array (
                'id' => 640,
                'postal_code_id' => 28,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΖΗΣΙΟΥ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΖΗΣΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            497 => 
            array (
                'id' => 641,
                'postal_code_id' => 28,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΑΒΑΦΗ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΑΒΑΦΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            498 => 
            array (
                'id' => 642,
                'postal_code_id' => 28,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΟΚΚΙΝΑΚΗ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΟΚΚΙΝΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            499 => 
            array (
                'id' => 643,
                'postal_code_id' => 28,
                'name' => 'ΛΑΜΠΩΝΟΣ',
            'cosmote_street_name' => 'ΛΑΜΠΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
        ));
        \DB::table('streets')->insert(array (
            0 => 
            array (
                'id' => 644,
                'postal_code_id' => 28,
                'name' => 'ΛΕΩΦΟΡΟΣ ΙΩΝΙΑΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΙΩΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            1 => 
            array (
                'id' => 645,
                'postal_code_id' => 28,
                'name' => 'ΜΑΡΣΥΑ',
            'cosmote_street_name' => 'ΜΑΡΣΥΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            2 => 
            array (
                'id' => 646,
                'postal_code_id' => 28,
                'name' => 'ΜΕΓΑΚΛΕΟΥΣ',
            'cosmote_street_name' => 'ΜΕΓΑΚΛΕΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            3 => 
            array (
                'id' => 647,
                'postal_code_id' => 28,
                'name' => 'ΜΙΛΤΙΑΔΗ ΜΑΛΑΚΑΣΗ',
            'cosmote_street_name' => 'ΜΙΛΤΙΑΔΗ ΜΑΛΑΚΑΣΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            4 => 
            array (
                'id' => 648,
                'postal_code_id' => 28,
                'name' => 'ΞΕΝΟΦΩΝΤΟΣ ΨΑΡΡΑ',
            'cosmote_street_name' => 'ΞΕΝΟΦΩΝΤΟΣ ΨΑΡΡΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            5 => 
            array (
                'id' => 649,
                'postal_code_id' => 28,
                'name' => 'ΠΑΡΟΔΟΣ ΚΗΠΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            6 => 
            array (
                'id' => 650,
                'postal_code_id' => 28,
                'name' => 'ΠΕΤΡΙΔΟΥ',
            'cosmote_street_name' => 'ΠΕΤΡΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            7 => 
            array (
                'id' => 651,
                'postal_code_id' => 28,
                'name' => 'ΠΕΤΡΟΥ ΒΛΑΣΤΟΥ',
            'cosmote_street_name' => 'ΠΕΤΡΟΥ ΒΛΑΣΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            8 => 
            array (
                'id' => 652,
                'postal_code_id' => 28,
                'name' => 'ΠΡΟΜΠΟΝΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            9 => 
            array (
                'id' => 653,
                'postal_code_id' => 28,
                'name' => 'ΣΕΚΟΥΝΔΟΥ',
            'cosmote_street_name' => 'ΣΕΚΟΥΝΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            10 => 
            array (
                'id' => 654,
                'postal_code_id' => 28,
                'name' => 'ΣΗΦΑΚΑ',
            'cosmote_street_name' => 'ΣΗΦΑΚΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            11 => 
            array (
                'id' => 655,
                'postal_code_id' => 28,
                'name' => 'ΣΠΥΡΙΔΩΝΟΣ ΔΕΣΤΟΥΝΗ',
            'cosmote_street_name' => 'ΣΠΥΡΙΔΩΝΟΣ ΔΕΣΤΟΥΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            12 => 
            array (
                'id' => 656,
                'postal_code_id' => 28,
                'name' => 'ΤΕΛΕΣΙΟΥ',
            'cosmote_street_name' => 'ΤΕΛΕΣΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            13 => 
            array (
                'id' => 657,
                'postal_code_id' => 28,
                'name' => 'ΤΗΜΕΝΟΥΣ',
            'cosmote_street_name' => 'ΤΗΜΕΝΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            14 => 
            array (
                'id' => 658,
                'postal_code_id' => 28,
                'name' => 'ΧΡΗΣΤΟΥ ΤΣΟΥΝΤΑ',
            'cosmote_street_name' => 'ΧΡΗΣΤΟΥ ΤΣΟΥΝΤΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            15 => 
            array (
                'id' => 659,
                'postal_code_id' => 29,
                'name' => 'ΑΓΙΑΣ ΠΑΡΑΣΚΕΥΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            16 => 
            array (
                'id' => 660,
                'postal_code_id' => 29,
                'name' => 'ΑΓΙΟΥ ΛΟΥΚΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            17 => 
            array (
                'id' => 661,
                'postal_code_id' => 29,
                'name' => 'ΑΔΩΝΙΔΟΣ ΚΥΡΟΥ',
            'cosmote_street_name' => 'ΑΔΩΝΙΔΟΣ ΚΥΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            18 => 
            array (
                'id' => 662,
                'postal_code_id' => 29,
                'name' => 'ΑΜΠΑΤΙΕΛΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            19 => 
            array (
                'id' => 663,
                'postal_code_id' => 29,
                'name' => 'ΑΡΕΘΑ',
            'cosmote_street_name' => 'ΑΡΕΘΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            20 => 
            array (
                'id' => 664,
                'postal_code_id' => 29,
                'name' => 'ΑΧΑΡΝΩΝ',
            'cosmote_street_name' => 'ΑΧΑΡΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            21 => 
            array (
                'id' => 665,
                'postal_code_id' => 29,
                'name' => 'ΑΧΡΙΔΟΣ',
            'cosmote_street_name' => 'ΑΧΡΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            22 => 
            array (
                'id' => 666,
                'postal_code_id' => 29,
                'name' => 'ΒΑΛΛΙΑΝΩΝ',
            'cosmote_street_name' => 'ΒΑΛΛΙΑΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            23 => 
            array (
                'id' => 667,
                'postal_code_id' => 29,
                'name' => 'ΓΕΩΡΓΙΟΥ ΙΑΚΩΒΙΔΟΥ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΙΑΚΩΒΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            24 => 
            array (
                'id' => 668,
                'postal_code_id' => 29,
                'name' => 'ΓΟΥΛΙΕΛΜΟΥ ΔΑΙΡΠΦΕΛΔ',
            'cosmote_street_name' => 'ΓΟΥΛΙΕΛΜΟΥ ΔΑΙΡΠΦΕΛΔ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            25 => 
            array (
                'id' => 669,
                'postal_code_id' => 29,
                'name' => 'ΓΡΗΓΟΡΙΟΥ ΚΥΔΩΝΙΩΝ',
            'cosmote_street_name' => 'ΓΡΗΓΟΡΙΟΥ ΚΥΔΩΝΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            26 => 
            array (
                'id' => 670,
                'postal_code_id' => 29,
                'name' => 'ΔΕΡΕΧΑΝΗ',
            'cosmote_street_name' => 'ΔΕΡΕΧΑΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            27 => 
            array (
                'id' => 671,
                'postal_code_id' => 29,
                'name' => 'ΔΕΥΚΑΛΙΩΝΟΣ',
            'cosmote_street_name' => 'ΔΕΥΚΑΛΙΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            28 => 
            array (
                'id' => 672,
                'postal_code_id' => 29,
                'name' => 'ΔΗΜΗΤΡΙΟΥ ΡΑΛΛΗ',
            'cosmote_street_name' => 'ΔΗΜΗΤΡΙΟΥ ΡΑΛΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            29 => 
            array (
                'id' => 673,
                'postal_code_id' => 29,
                'name' => 'ΔΟΜΗΝΙΚΟΥ ΘΕΟΤΟΚΟΠΟΥΛΟΥ',
            'cosmote_street_name' => 'ΔΟΜΗΝΙΚΟΥ ΘΕΟΤΟΚΟΠΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            30 => 
            array (
                'id' => 674,
                'postal_code_id' => 29,
                'name' => 'ΕΡΝΕΣΤΟΥ ΤΣΙΛΛΕΡ',
            'cosmote_street_name' => 'ΕΡΝΕΣΤΟΥ ΤΣΙΛΛΕΡ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            31 => 
            array (
                'id' => 675,
                'postal_code_id' => 29,
                'name' => 'ΕΥΓΕΝΙΟΥ ΚΑΡΑΒΙΑ',
            'cosmote_street_name' => 'ΕΥΓΕΝΙΟΥ ΚΑΡΑΒΙΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            32 => 
            array (
                'id' => 676,
                'postal_code_id' => 29,
                'name' => 'ΗΛΙΑ ΖΕΡΒΟΥ',
            'cosmote_street_name' => 'ΗΛΙΑ ΖΕΡΒΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            33 => 
            array (
                'id' => 677,
                'postal_code_id' => 29,
                'name' => 'ΘΕΟΦΙΛΟΥ ΧΑΝΣΕΝ',
            'cosmote_street_name' => 'ΘΕΟΦΙΛΟΥ ΧΑΝΣΕΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            34 => 
            array (
                'id' => 678,
                'postal_code_id' => 29,
                'name' => 'ΙΑΚΩΒΑΤΩΝ',
            'cosmote_street_name' => 'ΙΑΚΩΒΑΤΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            35 => 
            array (
                'id' => 679,
                'postal_code_id' => 29,
                'name' => 'ΙΣΟΚΡΑΤΟΥΣ',
            'cosmote_street_name' => 'ΙΣΟΚΡΑΤΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            36 => 
            array (
                'id' => 680,
                'postal_code_id' => 29,
                'name' => 'ΙΩΑΝΝΟΥ ΚΑΜΠΟΥΡΟΓΛΟΥ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΚΑΜΠΟΥΡΟΓΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            37 => 
            array (
                'id' => 681,
                'postal_code_id' => 29,
                'name' => 'ΙΩΑΝΝΟΥ ΚΟΣΣΟΥ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΚΟΣΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            38 => 
            array (
                'id' => 682,
                'postal_code_id' => 29,
                'name' => 'ΙΩΑΝΝΟΥ ΣΒΟΡΩΝΟΥ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΣΒΟΡΩΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            39 => 
            array (
                'id' => 683,
                'postal_code_id' => 29,
                'name' => 'ΙΩΑΝΝΟΥ ΣΥΚΟΥΤΡΗ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΣΥΚΟΥΤΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            40 => 
            array (
                'id' => 684,
                'postal_code_id' => 29,
                'name' => 'ΙΩΑΝΝΟΥ ΧΑΤΖΗΔΑΚΗ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΧΑΤΖΗΔΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            41 => 
            array (
                'id' => 685,
                'postal_code_id' => 29,
                'name' => 'ΚΙΤΣΟΥ ΜΠΑΛΑΣΚΑ',
            'cosmote_street_name' => 'ΚΙΤΣΟΥ ΜΠΑΛΑΣΚΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            42 => 
            array (
                'id' => 686,
                'postal_code_id' => 29,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΣΑΒΒΑ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΣΑΒΒΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            43 => 
            array (
                'id' => 687,
                'postal_code_id' => 29,
                'name' => 'Λ. ΚΑΥΤΑΝΤΖΟΓΛΟΥ',
            'cosmote_street_name' => 'Λ. ΚΑΥΤΑΝΤΖΟΓΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            44 => 
            array (
                'id' => 688,
                'postal_code_id' => 29,
                'name' => 'ΛΕΩΦΟΡΟΣ ΙΩΝΙΑΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΙΩΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            45 => 
            array (
                'id' => 689,
                'postal_code_id' => 29,
                'name' => 'ΛΟΥΔΟΒΙΚΟΥ ΡΩΣ',
            'cosmote_street_name' => 'ΛΟΥΔΟΒΙΚΟΥ ΡΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            46 => 
            array (
                'id' => 690,
                'postal_code_id' => 29,
                'name' => 'ΜΑΚ ΜΙΛΑΝ',
            'cosmote_street_name' => 'ΜΑΚ ΜΙΛΑΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            47 => 
            array (
                'id' => 691,
                'postal_code_id' => 29,
                'name' => 'ΜΠΑΜΠΗ ΑΝΝΙΝΟΥ',
            'cosmote_street_name' => 'ΜΠΑΜΠΗ ΑΝΝΙΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            48 => 
            array (
                'id' => 692,
                'postal_code_id' => 29,
                'name' => 'ΝΕΙΓΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            49 => 
            array (
                'id' => 693,
                'postal_code_id' => 29,
                'name' => 'ΝΙΚΟΛΑΟΥ ΠΟΛΙΤΗ',
            'cosmote_street_name' => 'ΝΙΚΟΛΑΟΥ ΠΟΛΙΤΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            50 => 
            array (
                'id' => 694,
                'postal_code_id' => 29,
                'name' => 'ΠΑΤΗΣΙΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            51 => 
            array (
                'id' => 695,
                'postal_code_id' => 29,
                'name' => 'ΠΑΤΜΟΥ',
            'cosmote_street_name' => 'ΠΑΤΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            52 => 
            array (
                'id' => 696,
                'postal_code_id' => 29,
                'name' => 'ΠΛΑΤΕΙΑ ΑΓΙΑΣ ΠΑΡΑΣΚΕΥΗΣ',
            'cosmote_street_name' => 'ΠΛΑΤΕΙΑ ΑΓΙΑΣ ΠΑΡΑΣΚΕΥΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            53 => 
            array (
                'id' => 697,
                'postal_code_id' => 29,
                'name' => 'ΠΛΑΤΕΙΑ ΑΓΙΟΥ ΛΟΥΚΑ',
            'cosmote_street_name' => 'ΠΛΑΤΕΙΑ ΑΓΙΟΥ ΛΟΥΚΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            54 => 
            array (
                'id' => 698,
                'postal_code_id' => 29,
                'name' => 'ΣΑΡΑΝΤΑΠΟΡΟΥ',
            'cosmote_street_name' => 'ΣΑΡΑΝΤΑΠΟΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            55 => 
            array (
                'id' => 699,
                'postal_code_id' => 29,
                'name' => 'ΣΚΡΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            56 => 
            array (
                'id' => 700,
                'postal_code_id' => 29,
                'name' => 'ΣΠΥΡΙΔΩΝΟΣ ΣΑΜΑΡΑ',
            'cosmote_street_name' => 'ΣΠΥΡΙΔΩΝΟΣ ΣΑΜΑΡΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:44',
            ),
            57 => 
            array (
                'id' => 701,
                'postal_code_id' => 29,
                'name' => 'ΣΤΕΦΑΝΟΥ ΒΥΖΑΝΤΙΟΥ',
            'cosmote_street_name' => 'ΣΤΕΦΑΝΟΥ ΒΥΖΑΝΤΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            58 => 
            array (
                'id' => 702,
                'postal_code_id' => 29,
                'name' => 'ΣΤΕΦΑΝΟΥ ΚΥΠΑΡΙΣΣΟΥ',
            'cosmote_street_name' => 'ΣΤΕΦΑΝΟΥ ΚΥΠΑΡΙΣΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            59 => 
            array (
                'id' => 703,
                'postal_code_id' => 29,
                'name' => 'Φ. ΠΟΛΙΤΗ',
            'cosmote_street_name' => 'Φ. ΠΟΛΙΤΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            60 => 
            array (
                'id' => 704,
                'postal_code_id' => 29,
                'name' => 'ΧΡΥΣΟΣΤΟΜΟΥ ΣΜΥΡΝΗΣ',
            'cosmote_street_name' => 'ΧΡΥΣΟΣΤΟΜΟΥ ΣΜΥΡΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            61 => 
            array (
                'id' => 705,
                'postal_code_id' => 30,
                'name' => 'ΑΡΓΥΡΟΠΟΥΛΟΥ',
            'cosmote_street_name' => 'ΑΡΓΥΡΟΠΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            62 => 
            array (
                'id' => 706,
                'postal_code_id' => 30,
                'name' => 'ΑΧΑΡΝΩΝ',
            'cosmote_street_name' => 'ΑΧΑΡΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            63 => 
            array (
                'id' => 707,
                'postal_code_id' => 30,
                'name' => 'ΒΟΥΡΔΟΥΜΠΑ',
            'cosmote_street_name' => 'ΒΟΥΡΔΟΥΜΠΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            64 => 
            array (
                'id' => 708,
                'postal_code_id' => 30,
                'name' => 'ΓΕΡΑΣΙΜΟΥ ΛΕΙΒΑΔΑ',
            'cosmote_street_name' => 'ΓΕΡΑΣΙΜΟΥ ΛΕΙΒΑΔΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            65 => 
            array (
                'id' => 709,
                'postal_code_id' => 30,
                'name' => 'ΓΕΩΡΓΙΟΥ ΓΛΑΡΑΚΗ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΓΛΑΡΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            66 => 
            array (
                'id' => 710,
                'postal_code_id' => 30,
                'name' => 'ΔΗΜΗΤΡΙΟΥ ΒΙΚΕΛΑ',
            'cosmote_street_name' => 'ΔΗΜΗΤΡΙΟΥ ΒΙΚΕΛΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            67 => 
            array (
                'id' => 711,
                'postal_code_id' => 30,
                'name' => 'ΕΥΤΑΞΙΟΥ',
            'cosmote_street_name' => 'ΕΥΤΑΞΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            68 => 
            array (
                'id' => 712,
                'postal_code_id' => 30,
                'name' => 'ΖΑΧΑΡΙΑ ΠΑΠΑΝΤΩΝΙΟΥ',
            'cosmote_street_name' => 'ΖΑΧΑΡΙΑ ΠΑΠΑΝΤΩΝΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            69 => 
            array (
                'id' => 713,
                'postal_code_id' => 30,
                'name' => 'ΙΩΑΝΝΟΥ ΔΗΜΑΚΟΠΟΥΛΟΥ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΔΗΜΑΚΟΠΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            70 => 
            array (
                'id' => 714,
                'postal_code_id' => 30,
                'name' => 'ΚΟΥΡΜΟΥΛΗ',
            'cosmote_street_name' => 'ΚΟΥΡΜΟΥΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            71 => 
            array (
                'id' => 715,
                'postal_code_id' => 30,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΑΒΑΦΗ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΑΒΑΦΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            72 => 
            array (
                'id' => 716,
                'postal_code_id' => 30,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΡΑΜΦΟΥ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΡΑΜΦΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            73 => 
            array (
                'id' => 717,
                'postal_code_id' => 30,
                'name' => 'Λ. ΚΑΥΤΑΝΤΖΟΓΛΟΥ',
            'cosmote_street_name' => 'Λ. ΚΑΥΤΑΝΤΖΟΓΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            74 => 
            array (
                'id' => 718,
                'postal_code_id' => 30,
                'name' => 'ΛΕΩΦΟΡΟΣ ΙΩΝΙΑΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΙΩΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            75 => 
            array (
                'id' => 719,
                'postal_code_id' => 30,
                'name' => 'ΜΗΛΙΑΡΑΚΗ',
            'cosmote_street_name' => 'ΜΗΛΙΑΡΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            76 => 
            array (
                'id' => 720,
                'postal_code_id' => 30,
                'name' => 'ΝΙΚΟΛΑΙΔΟΥ',
            'cosmote_street_name' => 'ΝΙΚΟΛΑΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            77 => 
            array (
                'id' => 721,
                'postal_code_id' => 30,
                'name' => 'ΝΙΚΟΛΑΟΥ ΛΑΣΚΑΡΗ',
            'cosmote_street_name' => 'ΝΙΚΟΛΑΟΥ ΛΑΣΚΑΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            78 => 
            array (
                'id' => 722,
                'postal_code_id' => 30,
                'name' => 'ΠΑΥΛΟΥ ΝΙΡΒΑΝΑ',
            'cosmote_street_name' => 'ΠΑΥΛΟΥ ΝΙΡΒΑΝΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            79 => 
            array (
                'id' => 723,
                'postal_code_id' => 30,
                'name' => 'ΠΥΡΛΑ',
            'cosmote_street_name' => 'ΠΥΡΛΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            80 => 
            array (
                'id' => 724,
                'postal_code_id' => 30,
                'name' => 'ΣΗΜΑΝΤΗΡΑ',
            'cosmote_street_name' => 'ΣΗΜΑΝΤΗΡΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            81 => 
            array (
                'id' => 725,
                'postal_code_id' => 30,
                'name' => 'ΣΟΦΙΑΝΟΠΟΥΛΟΥ',
            'cosmote_street_name' => 'ΣΟΦΙΑΝΟΠΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            82 => 
            array (
                'id' => 726,
                'postal_code_id' => 30,
                'name' => 'ΣΤΡΑΤΗΓΟΥ ΔΑΓΚΛΗ',
            'cosmote_street_name' => 'ΣΤΡΑΤΗΓΟΥ ΔΑΓΚΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            83 => 
            array (
                'id' => 727,
                'postal_code_id' => 30,
                'name' => 'ΣΤΡΑΤΗΓΟΥ ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΑΛΛΑΡΗ',
            'cosmote_street_name' => 'ΣΤΡΑΤΗΓΟΥ ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΑΛΛΑΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            84 => 
            array (
                'id' => 728,
                'postal_code_id' => 30,
                'name' => 'ΣΥΜΕΩΝ ΣΑΒΒΙΔΟΥ',
            'cosmote_street_name' => 'ΣΥΜΕΩΝ ΣΑΒΒΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            85 => 
            array (
                'id' => 729,
                'postal_code_id' => 31,
                'name' => 'ΑΓΙΟΥ ΣΠΥΡΙΔΩΝΟΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            86 => 
            array (
                'id' => 730,
                'postal_code_id' => 31,
                'name' => 'ΑΕΤΟΡΡΑΧΗΣ',
            'cosmote_street_name' => 'ΑΕΤΟΡΡΑΧΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            87 => 
            array (
                'id' => 731,
                'postal_code_id' => 31,
                'name' => 'ΑΝΤΑΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            88 => 
            array (
                'id' => 732,
                'postal_code_id' => 31,
                'name' => 'ΑΠΟΛΛΩΝΟΣ',
            'cosmote_street_name' => 'ΑΠΟΛΛΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            89 => 
            array (
                'id' => 733,
                'postal_code_id' => 31,
                'name' => 'ΑΡΓΟΣΤΟΛΙΟΥ',
            'cosmote_street_name' => 'ΑΡΓΟΣΤΟΛΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            90 => 
            array (
                'id' => 734,
                'postal_code_id' => 31,
                'name' => 'ΒΥΤΙΝΗΣ',
            'cosmote_street_name' => 'ΒΥΤΙΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            91 => 
            array (
                'id' => 735,
                'postal_code_id' => 31,
                'name' => 'ΓΙΑΝΝΗ ΨΥΧΑΡΗ',
            'cosmote_street_name' => 'ΓΙΑΝΝΗ ΨΥΧΑΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            92 => 
            array (
                'id' => 736,
                'postal_code_id' => 31,
                'name' => 'ΔΡΙΣΚΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            93 => 
            array (
                'id' => 737,
                'postal_code_id' => 31,
                'name' => 'ΕΚΑΒΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            94 => 
            array (
                'id' => 738,
                'postal_code_id' => 31,
                'name' => 'ΕΛΠΙΔΟΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            95 => 
            array (
                'id' => 739,
                'postal_code_id' => 31,
                'name' => 'ΕΡΑΤΟΥΣ',
            'cosmote_street_name' => 'ΕΡΑΤΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            96 => 
            array (
                'id' => 740,
                'postal_code_id' => 31,
                'name' => 'ΕΡΣΗΣ',
            'cosmote_street_name' => 'ΕΡΣΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            97 => 
            array (
                'id' => 741,
                'postal_code_id' => 31,
                'name' => 'ΕΥΡΥΔΙΚΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            98 => 
            array (
                'id' => 742,
                'postal_code_id' => 31,
                'name' => 'ΗΛΙΑ ΤΑΝΤΑΛΙΔΗ',
            'cosmote_street_name' => 'ΗΛΙΑ ΤΑΝΤΑΛΙΔΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            99 => 
            array (
                'id' => 743,
                'postal_code_id' => 31,
                'name' => 'ΗΝΙΟΧΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            100 => 
            array (
                'id' => 744,
                'postal_code_id' => 31,
                'name' => 'ΗΡΑΚΛΕΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            101 => 
            array (
                'id' => 745,
                'postal_code_id' => 31,
                'name' => 'ΗΧΟΥΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            102 => 
            array (
                'id' => 746,
                'postal_code_id' => 31,
                'name' => 'ΙΩΑΝΝΟΥ ΦΩΚΑ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΦΩΚΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            103 => 
            array (
                'id' => 747,
                'postal_code_id' => 31,
                'name' => 'ΚΑΡΑΣΟΥΤΣΑ',
            'cosmote_street_name' => 'ΚΑΡΑΣΟΥΤΣΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            104 => 
            array (
                'id' => 748,
                'postal_code_id' => 31,
                'name' => 'ΚΑΣΤΕΛΛΙΟΥ',
            'cosmote_street_name' => 'ΚΑΣΤΕΛΛΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            105 => 
            array (
                'id' => 749,
                'postal_code_id' => 31,
                'name' => 'ΚΕΡΚΥΡΑΣ',
            'cosmote_street_name' => 'ΚΕΡΚΥΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            106 => 
            array (
                'id' => 750,
                'postal_code_id' => 31,
                'name' => 'ΚΡΗΤΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            107 => 
            array (
                'id' => 751,
                'postal_code_id' => 31,
                'name' => 'ΚΡΗΤΩΝ ΜΑΚΕΔΟΝΟΜΑΧΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            108 => 
            array (
                'id' => 752,
                'postal_code_id' => 31,
                'name' => 'ΚΥΒΕΛΗΣ',
            'cosmote_street_name' => 'ΚΥΒΕΛΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            109 => 
            array (
                'id' => 753,
                'postal_code_id' => 31,
                'name' => 'ΚΥΚΝΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            110 => 
            array (
                'id' => 754,
                'postal_code_id' => 31,
                'name' => 'ΚΥΜΟΘΟΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            111 => 
            array (
                'id' => 755,
                'postal_code_id' => 31,
                'name' => 'ΛΑΜΠΡΙΝΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            112 => 
            array (
                'id' => 756,
                'postal_code_id' => 31,
                'name' => 'ΛΑΣΙΘΙΟΥ',
            'cosmote_street_name' => 'ΛΑΣΙΘΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            113 => 
            array (
                'id' => 757,
                'postal_code_id' => 31,
                'name' => 'ΛΕΩΝΙΔΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            114 => 
            array (
                'id' => 758,
                'postal_code_id' => 31,
                'name' => 'ΛΕΩΦΟΡΟΣ ΓΑΛΑΤΣΙΟΥ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΓΑΛΑΤΣΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            115 => 
            array (
                'id' => 759,
                'postal_code_id' => 31,
                'name' => 'ΜΕΣΟΛΟΓΓΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            116 => 
            array (
                'id' => 760,
                'postal_code_id' => 31,
                'name' => 'ΜΟΥΔΡΟΥ',
            'cosmote_street_name' => 'ΜΟΥΔΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            117 => 
            array (
                'id' => 761,
                'postal_code_id' => 31,
                'name' => 'ΝΑΡΚΙΣΣΟΥ',
            'cosmote_street_name' => 'ΝΑΡΚΙΣΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            118 => 
            array (
                'id' => 762,
                'postal_code_id' => 31,
                'name' => 'ΝΗΛΕΩΣ',
            'cosmote_street_name' => 'ΝΗΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            119 => 
            array (
                'id' => 763,
                'postal_code_id' => 31,
                'name' => 'ΝΥΜΦΩΝ',
            'cosmote_street_name' => 'ΛΟΦΟΣ ΝΥΜΦΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            120 => 
            array (
                'id' => 764,
                'postal_code_id' => 31,
                'name' => 'ΟΜΦΑΛΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            121 => 
            array (
                'id' => 765,
                'postal_code_id' => 31,
                'name' => 'ΟΡΦΑΝΙΔΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            122 => 
            array (
                'id' => 766,
                'postal_code_id' => 31,
                'name' => 'ΟΡΦΕΩΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            123 => 
            array (
                'id' => 767,
                'postal_code_id' => 31,
                'name' => 'ΠΑΝΟΣ',
            'cosmote_street_name' => 'ΠΑΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            124 => 
            array (
                'id' => 768,
                'postal_code_id' => 31,
                'name' => 'ΠΑΝΣΕΛΗΝΟΥ',
            'cosmote_street_name' => 'ΠΑΝΣΕΛΗΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            125 => 
            array (
                'id' => 769,
                'postal_code_id' => 31,
                'name' => 'ΠΑΠΑΦΛΕΣΣΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            126 => 
            array (
                'id' => 770,
                'postal_code_id' => 31,
                'name' => 'ΠΑΣΣΩΒ',
            'cosmote_street_name' => 'ΠΑΣΣΩΒ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            127 => 
            array (
                'id' => 771,
                'postal_code_id' => 31,
                'name' => 'ΠΕΛΟΠΟΝΝΗΣΟΥ',
            'cosmote_street_name' => 'ΠΕΛΟΠΟΝΝΗΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            128 => 
            array (
                'id' => 772,
                'postal_code_id' => 31,
                'name' => 'ΠΛΥΤΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            129 => 
            array (
                'id' => 773,
                'postal_code_id' => 31,
                'name' => 'ΡΕΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            130 => 
            array (
                'id' => 774,
                'postal_code_id' => 31,
                'name' => 'ΣΟΥΔΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            131 => 
            array (
                'id' => 775,
                'postal_code_id' => 31,
                'name' => 'ΣΤΡΑΤΗΓΟΥ ΤΣΟΝΤΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            132 => 
            array (
                'id' => 776,
                'postal_code_id' => 31,
                'name' => 'ΤΕΩ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            133 => 
            array (
                'id' => 777,
                'postal_code_id' => 31,
                'name' => 'ΤΡΑΛΛΕΩΝ',
            'cosmote_street_name' => 'ΤΡΑΛΛΕΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            134 => 
            array (
                'id' => 778,
                'postal_code_id' => 31,
                'name' => 'ΦΑΥΝΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            135 => 
            array (
                'id' => 779,
                'postal_code_id' => 31,
                'name' => 'ΧΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            136 => 
            array (
                'id' => 780,
                'postal_code_id' => 31,
                'name' => 'ΩΡΩΠΟΥ',
            'cosmote_street_name' => 'ΩΡΩΠΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            137 => 
            array (
                'id' => 781,
                'postal_code_id' => 32,
                'name' => '28ΗΣ ΟΚΤΩΒΡΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:04',
                'updated_at' => '2024-02-01 15:58:04',
            ),
            138 => 
            array (
                'id' => 782,
                'postal_code_id' => 32,
                'name' => '3ΗΣ ΣΕΠΤΕΜΒΡΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            139 => 
            array (
                'id' => 783,
                'postal_code_id' => 32,
                'name' => 'ΑΓΙΟΥ ΜΕΛΕΤΙΟΥ',
            'cosmote_street_name' => 'ΑΓΙΟΥ ΜΕΛΕΤΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            140 => 
            array (
                'id' => 784,
                'postal_code_id' => 32,
                'name' => 'ΑΝΤΙΟΧΕΙΑΣ',
            'cosmote_street_name' => 'ΑΝΤΙΟΧΕΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            141 => 
            array (
                'id' => 785,
                'postal_code_id' => 32,
                'name' => 'ΑΡΙΣΤΟΤΕΛΟΥΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            142 => 
            array (
                'id' => 786,
                'postal_code_id' => 32,
                'name' => 'ΑΧΑΡΝΩΝ',
            'cosmote_street_name' => 'ΑΧΑΡΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            143 => 
            array (
                'id' => 787,
                'postal_code_id' => 32,
                'name' => 'ΕΥΤΥΧΙΑΣ',
            'cosmote_street_name' => 'ΕΥΤΥΧΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            144 => 
            array (
                'id' => 788,
                'postal_code_id' => 32,
                'name' => 'ΙΘΑΚΗΣ',
            'cosmote_street_name' => 'ΙΘΑΚΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            145 => 
            array (
                'id' => 789,
                'postal_code_id' => 32,
                'name' => 'ΚΑΛΥΜΝΟΥ',
            'cosmote_street_name' => 'ΚΑΛΥΜΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            146 => 
            array (
                'id' => 790,
                'postal_code_id' => 32,
                'name' => 'ΚΕΦΑΛΛΗΝΙΑΣ',
            'cosmote_street_name' => 'ΚΕΦΑΛΛΗΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            147 => 
            array (
                'id' => 791,
                'postal_code_id' => 32,
                'name' => 'ΛΗΘΗΣ',
            'cosmote_street_name' => 'ΛΗΘΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            148 => 
            array (
                'id' => 792,
                'postal_code_id' => 32,
                'name' => 'ΝΕΚΤΑΡΙΟΥ',
            'cosmote_street_name' => 'ΝΕΚΤΑΡΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            149 => 
            array (
                'id' => 793,
                'postal_code_id' => 32,
                'name' => 'ΠΑΤΗΣΙΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            150 => 
            array (
                'id' => 794,
                'postal_code_id' => 32,
                'name' => 'ΤΗΝΟΥ',
            'cosmote_street_name' => 'ΤΗΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            151 => 
            array (
                'id' => 795,
                'postal_code_id' => 32,
                'name' => 'ΦΛΩΡΙΝΗΣ',
            'cosmote_street_name' => 'ΦΛΩΡΙΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            152 => 
            array (
                'id' => 796,
                'postal_code_id' => 32,
                'name' => 'ΦΥΛΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            153 => 
            array (
                'id' => 797,
                'postal_code_id' => 33,
                'name' => 'ΑΓΑΘΟΥΠΟΛΕΩΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            154 => 
            array (
                'id' => 798,
                'postal_code_id' => 33,
                'name' => 'ΑΓΙΟΥ ΜΕΛΕΤΙΟΥ',
            'cosmote_street_name' => 'ΑΓΙΟΥ ΜΕΛΕΤΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            155 => 
            array (
                'id' => 799,
                'postal_code_id' => 33,
                'name' => 'ΑΝΑΓΝΩΣΤΗ ΣΤΡΙΦΤΟΜΠΟΛΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            156 => 
            array (
                'id' => 800,
                'postal_code_id' => 33,
                'name' => 'ΑΝΤΩΝΙΟΥ ΚΑΜΠΑΝΗ',
            'cosmote_street_name' => 'ΑΝΤΩΝΙΟΥ ΚΑΜΠΑΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            157 => 
            array (
                'id' => 801,
                'postal_code_id' => 33,
                'name' => 'ΑΧΑΡΝΩΝ',
            'cosmote_street_name' => 'ΑΧΑΡΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            158 => 
            array (
                'id' => 802,
                'postal_code_id' => 33,
                'name' => 'ΕΦΕΣΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            159 => 
            array (
                'id' => 803,
                'postal_code_id' => 33,
                'name' => 'ΘΕΟΦΙΛΟΥ ΚΟΡΥΔΑΛΛΕΩΣ',
            'cosmote_street_name' => 'ΘΕΟΦΙΛΟΥ ΚΟΡΥΔΑΛΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:45',
            ),
            160 => 
            array (
                'id' => 804,
                'postal_code_id' => 33,
                'name' => 'ΘΗΡΑΣ',
            'cosmote_street_name' => 'ΘΗΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            161 => 
            array (
                'id' => 805,
                'postal_code_id' => 33,
                'name' => 'ΙΕΡΟΣΟΛΥΜΩΝ',
            'cosmote_street_name' => 'ΙΕΡΟΣΟΛΥΜΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            162 => 
            array (
                'id' => 806,
                'postal_code_id' => 33,
                'name' => 'ΚΑΡΠΑΘΟΥ',
            'cosmote_street_name' => 'ΚΑΡΠΑΘΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            163 => 
            array (
                'id' => 807,
                'postal_code_id' => 33,
                'name' => 'ΚΙΤΙΟΥ',
            'cosmote_street_name' => 'ΚΙΤΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            164 => 
            array (
                'id' => 808,
                'postal_code_id' => 33,
                'name' => 'ΚΛΑΠΑΔΟΥ',
            'cosmote_street_name' => 'ΚΛΑΠΑΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            165 => 
            array (
                'id' => 809,
                'postal_code_id' => 33,
                'name' => 'ΚΥΠΡΟΥ',
            'cosmote_street_name' => 'ΚΥΠΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            166 => 
            array (
                'id' => 810,
                'postal_code_id' => 33,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΣΤΑΥΡΟΠΟΥΛΟΥ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΣΤΑΥΡΟΠΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            167 => 
            array (
                'id' => 811,
                'postal_code_id' => 33,
                'name' => 'ΛΕΛΑΣ ΚΑΡΑΓΙΑΝΝΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            168 => 
            array (
                'id' => 812,
                'postal_code_id' => 33,
                'name' => 'ΛΕΜΕΣΟΥ',
            'cosmote_street_name' => 'ΛΕΜΕΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            169 => 
            array (
                'id' => 813,
                'postal_code_id' => 33,
                'name' => 'ΛΕΥΚΩΣΙΑΣ',
            'cosmote_street_name' => 'ΛΕΥΚΩΣΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            170 => 
            array (
                'id' => 814,
                'postal_code_id' => 33,
                'name' => 'ΜΗΘΥΜΝΗΣ',
            'cosmote_street_name' => 'ΜΗΘΥΜΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            171 => 
            array (
                'id' => 815,
                'postal_code_id' => 33,
                'name' => 'ΜΟΣΧΟΝΗΣΙΩΝ',
            'cosmote_street_name' => 'ΜΟΣΧΟΝΗΣΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            172 => 
            array (
                'id' => 816,
                'postal_code_id' => 33,
                'name' => 'ΝΙΓΡΙΤΗΣ',
            'cosmote_street_name' => 'ΝΙΓΡΙΤΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            173 => 
            array (
                'id' => 817,
                'postal_code_id' => 33,
                'name' => 'ΝΙΟΒΗΣ',
            'cosmote_street_name' => 'ΝΙΟΒΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            174 => 
            array (
                'id' => 818,
                'postal_code_id' => 33,
                'name' => 'ΞΕΝΑΓΟΡΑ',
            'cosmote_street_name' => 'ΞΕΝΑΓΟΡΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            175 => 
            array (
                'id' => 819,
                'postal_code_id' => 33,
                'name' => 'ΠΑΤΗΣΙΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            176 => 
            array (
                'id' => 820,
                'postal_code_id' => 33,
                'name' => 'ΠΛΑΤΕΙΑ ΑΜΕΡΙΚΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            177 => 
            array (
                'id' => 821,
                'postal_code_id' => 33,
                'name' => 'ΡΟΔΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            178 => 
            array (
                'id' => 822,
                'postal_code_id' => 33,
                'name' => 'ΣΟΡΟΒΙΤΣ',
            'cosmote_street_name' => 'ΣΟΡΟΒΙΤΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            179 => 
            array (
                'id' => 823,
                'postal_code_id' => 33,
                'name' => 'ΣΠΑΡΤΗΣ',
            'cosmote_street_name' => 'ΣΠΑΡΤΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            180 => 
            array (
                'id' => 824,
                'postal_code_id' => 33,
                'name' => 'ΣΠΥΡΙΔΩΝΟΣ ΠΗΛΙΚΑ',
            'cosmote_street_name' => 'ΣΠΥΡΙΔΩΝΟΣ ΠΗΛΙΚΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            181 => 
            array (
                'id' => 825,
                'postal_code_id' => 33,
                'name' => 'ΤΕΛΕΣΤΟΥ',
            'cosmote_street_name' => 'ΤΕΛΕΣΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            182 => 
            array (
                'id' => 826,
                'postal_code_id' => 33,
                'name' => 'ΦΥΛΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            183 => 
            array (
                'id' => 827,
                'postal_code_id' => 34,
                'name' => 'ΑΓΙΑΣ ΠΑΡΑΣΚΕΥΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            184 => 
            array (
                'id' => 828,
                'postal_code_id' => 34,
                'name' => 'ΑΔΩΝΙΔΟΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            185 => 
            array (
                'id' => 829,
                'postal_code_id' => 34,
                'name' => 'ΑΛΕΞΑΝΔΡΟΥ ΚΑΡΑΜΑΝΛΑΚΗ',
            'cosmote_street_name' => 'ΑΛΕΞΑΝΔΡΟΥ ΚΑΡΑΜΑΝΛΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            186 => 
            array (
                'id' => 830,
                'postal_code_id' => 34,
                'name' => 'ΑΝΑΓΝΩΣΤΗ ΣΤΡΙΦΤΟΜΠΟΛΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            187 => 
            array (
                'id' => 831,
                'postal_code_id' => 34,
                'name' => 'ΑΧΑΡΝΩΝ',
            'cosmote_street_name' => 'ΑΧΑΡΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            188 => 
            array (
                'id' => 832,
                'postal_code_id' => 34,
                'name' => 'ΔΑΜΩΝΟΣ',
            'cosmote_street_name' => 'ΔΑΜΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            189 => 
            array (
                'id' => 833,
                'postal_code_id' => 34,
                'name' => 'ΔΗΜΗΤΡΙΟΥ ΣΚΑΛΙΣΤΗΡΗ',
            'cosmote_street_name' => 'ΔΗΜΗΤΡΙΟΥ ΣΚΑΛΙΣΤΗΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            190 => 
            array (
                'id' => 834,
                'postal_code_id' => 34,
                'name' => 'ΕΥΠΑΛΙΝΟΥ',
            'cosmote_street_name' => 'ΕΥΠΑΛΙΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            191 => 
            array (
                'id' => 835,
                'postal_code_id' => 34,
                'name' => 'ΘΕΟΦΡΑΣΤΟΥ ΣΑΚΕΛΛΑΡΙΔΗ',
            'cosmote_street_name' => 'ΘΕΟΦΡΑΣΤΟΥ ΣΑΚΕΛΛΑΡΙΔΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            192 => 
            array (
                'id' => 836,
                'postal_code_id' => 34,
                'name' => 'ΙΒΗΡΩΝ',
            'cosmote_street_name' => 'ΙΒΗΡΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            193 => 
            array (
                'id' => 837,
                'postal_code_id' => 34,
                'name' => 'ΙΩΑΝΝΟΥ ΒΛΑΒΙΑΝΟΥ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΒΛΑΒΙΑΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            194 => 
            array (
                'id' => 838,
                'postal_code_id' => 34,
                'name' => 'ΚΑΣΣΑΒΕΤΗ',
            'cosmote_street_name' => 'ΚΑΣΣΑΒΕΤΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            195 => 
            array (
                'id' => 839,
                'postal_code_id' => 34,
                'name' => 'ΚΝΩΣΟΥ',
            'cosmote_street_name' => 'ΚΝΩΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            196 => 
            array (
                'id' => 840,
                'postal_code_id' => 34,
                'name' => 'ΚΥΠΡΟΥ',
            'cosmote_street_name' => 'ΚΥΠΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            197 => 
            array (
                'id' => 841,
                'postal_code_id' => 34,
                'name' => 'ΛΑΡΝΑΚΟΣ',
            'cosmote_street_name' => 'ΛΑΡΝΑΚΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            198 => 
            array (
                'id' => 842,
                'postal_code_id' => 34,
                'name' => 'ΛΕΥΚΩΣΙΑΣ',
            'cosmote_street_name' => 'ΛΕΥΚΩΣΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            199 => 
            array (
                'id' => 843,
                'postal_code_id' => 34,
                'name' => 'ΜΙΧΑΗΛ ΝΟΜΙΚΟΥ',
            'cosmote_street_name' => 'ΜΙΧΑΗΛ ΝΟΜΙΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            200 => 
            array (
                'id' => 844,
                'postal_code_id' => 34,
                'name' => 'ΝΕΜΕΣΕΩΣ',
            'cosmote_street_name' => 'ΝΕΜΕΣΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            201 => 
            array (
                'id' => 845,
                'postal_code_id' => 34,
                'name' => 'ΝΙΚΟΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΝΙΚΟΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            202 => 
            array (
                'id' => 846,
                'postal_code_id' => 34,
                'name' => 'ΟΛΥΜΠΙΑΣ',
            'cosmote_street_name' => 'ΟΛΥΜΠΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            203 => 
            array (
                'id' => 847,
                'postal_code_id' => 34,
                'name' => 'ΟΥΙΛΙΑΜ ΚΙΝΓΚ',
            'cosmote_street_name' => 'ΟΥΙΛΙΑΜ ΚΙΝΓΚ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            204 => 
            array (
                'id' => 848,
                'postal_code_id' => 34,
                'name' => 'ΠΑΤΗΣΙΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            205 => 
            array (
                'id' => 849,
                'postal_code_id' => 34,
                'name' => 'ΠΑΤΜΟΥ',
            'cosmote_street_name' => 'ΠΑΤΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            206 => 
            array (
                'id' => 850,
                'postal_code_id' => 34,
                'name' => 'ΠΛΑΤΕΙΑ ΚΑΛΛΙΓΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            207 => 
            array (
                'id' => 851,
                'postal_code_id' => 34,
                'name' => 'ΠΟΛΥΜΗΤΟΥ',
            'cosmote_street_name' => 'ΠΟΛΥΜΗΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            208 => 
            array (
                'id' => 852,
                'postal_code_id' => 34,
                'name' => 'ΤΥΧΗΣ',
            'cosmote_street_name' => 'ΤΥΧΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            209 => 
            array (
                'id' => 853,
                'postal_code_id' => 34,
                'name' => 'ΦΙΛΑΔΕΛΦΕΩΣ',
            'cosmote_street_name' => 'ΦΙΛΑΔΕΛΦΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            210 => 
            array (
                'id' => 854,
                'postal_code_id' => 34,
                'name' => 'ΦΙΝΤΙΟΥ',
            'cosmote_street_name' => 'ΦΙΝΤΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            211 => 
            array (
                'id' => 855,
                'postal_code_id' => 34,
                'name' => 'ΦΟΛΕΓΑΝΔΡΟΥ',
            'cosmote_street_name' => 'ΦΟΛΕΓΑΝΔΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            212 => 
            array (
                'id' => 856,
                'postal_code_id' => 34,
                'name' => 'ΦΥΛΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            213 => 
            array (
                'id' => 857,
                'postal_code_id' => 35,
                'name' => 'ΑΓΙΑΣ ΠΑΡΑΣΚΕΥΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            214 => 
            array (
                'id' => 858,
                'postal_code_id' => 35,
                'name' => 'ΑΓΙΟΥ ΛΟΥΚΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            215 => 
            array (
                'id' => 859,
                'postal_code_id' => 35,
                'name' => 'ΑΙΛΙΑΝΟΥ',
            'cosmote_street_name' => 'ΑΙΛΙΑΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            216 => 
            array (
                'id' => 860,
                'postal_code_id' => 35,
                'name' => 'ΑΤΛΑΝΤΟΣ',
            'cosmote_street_name' => 'ΑΤΛΑΝΤΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            217 => 
            array (
                'id' => 861,
                'postal_code_id' => 35,
                'name' => 'ΑΧΑΡΝΩΝ',
            'cosmote_street_name' => 'ΑΧΑΡΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            218 => 
            array (
                'id' => 862,
                'postal_code_id' => 35,
                'name' => 'ΓΟΡΤΥΝΟΣ',
            'cosmote_street_name' => 'ΓΟΡΤΥΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            219 => 
            array (
                'id' => 863,
                'postal_code_id' => 35,
                'name' => 'ΔΕΥΚΑΛΙΩΝΟΣ',
            'cosmote_street_name' => 'ΔΕΥΚΑΛΙΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            220 => 
            array (
                'id' => 864,
                'postal_code_id' => 35,
                'name' => 'ΕΠΙΔΑΜΝΟΥ',
            'cosmote_street_name' => 'ΕΠΙΔΑΜΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            221 => 
            array (
                'id' => 865,
                'postal_code_id' => 35,
                'name' => 'ΕΥΓΕΝΙΟΥ ΚΑΡΑΒΙΑ',
            'cosmote_street_name' => 'ΕΥΓΕΝΙΟΥ ΚΑΡΑΒΙΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            222 => 
            array (
                'id' => 866,
                'postal_code_id' => 35,
                'name' => 'ΚΑΛΛΙΝΙΚΟΥ',
            'cosmote_street_name' => 'ΚΑΛΛΙΝΙΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            223 => 
            array (
                'id' => 867,
                'postal_code_id' => 35,
                'name' => 'ΚΟΡΘΙΟΥ',
            'cosmote_street_name' => 'ΚΟΡΘΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            224 => 
            array (
                'id' => 868,
                'postal_code_id' => 35,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΠΟΛΥΓΕΝΗ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΠΟΛΥΓΕΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            225 => 
            array (
                'id' => 869,
                'postal_code_id' => 35,
                'name' => 'ΝΙΚΟΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΝΙΚΟΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            226 => 
            array (
                'id' => 870,
                'postal_code_id' => 35,
                'name' => 'ΠΑΤΗΣΙΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            227 => 
            array (
                'id' => 871,
                'postal_code_id' => 35,
                'name' => 'ΠΑΤΜΟΥ',
            'cosmote_street_name' => 'ΠΑΤΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            228 => 
            array (
                'id' => 872,
                'postal_code_id' => 35,
                'name' => 'ΠΛΑΤΕΙΑ ΣΤΥΛΙΑΝΟΥ ΚΟΛΙΑΤΣΟΥ',
            'cosmote_street_name' => 'ΠΛΑΤΕΙΑ ΣΤΥΛΙΑΝΟΥ ΚΟΛΙΑΤΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            229 => 
            array (
                'id' => 873,
                'postal_code_id' => 35,
                'name' => 'ΠΡΟΜΗΘΕΩΣ',
            'cosmote_street_name' => 'ΠΡΟΜΗΘΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            230 => 
            array (
                'id' => 874,
                'postal_code_id' => 35,
                'name' => 'ΣΕΡΙΦΟΥ',
            'cosmote_street_name' => 'ΣΕΡΙΦΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            231 => 
            array (
                'id' => 875,
                'postal_code_id' => 35,
                'name' => 'ΣΙΦΝΟΥ',
            'cosmote_street_name' => 'ΣΙΦΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            232 => 
            array (
                'id' => 876,
                'postal_code_id' => 35,
                'name' => 'ΣΚΙΑΘΟΥ',
            'cosmote_street_name' => 'ΣΚΙΑΘΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            233 => 
            array (
                'id' => 877,
                'postal_code_id' => 35,
                'name' => 'ΣΤΡΑΤΗΓΟΥ ΒΙΚΤΩΡΟΣ ΔΟΥΣΜΑΝΗ',
            'cosmote_street_name' => 'ΣΤΡΑΤΗΓΟΥ ΒΙΚΤΩΡΟΣ ΔΟΥΣΜΑΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            234 => 
            array (
                'id' => 878,
                'postal_code_id' => 36,
            'name' => 'ΑΓΙΑΣ ΖΩΝΗΣ (ΠΡΧ ΚΥΨΕΛΗ)',
            'cosmote_street_name' => 'ΑΓΙΑΣ ΖΩΝΗΣ (ΠΡΧ ΚΥΨΕΛΗ) (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            235 => 
            array (
                'id' => 879,
                'postal_code_id' => 36,
                'name' => 'ΑΛΚΙΒΙΑΔΟΥ ΚΡΑΣΣΑ',
            'cosmote_street_name' => 'ΑΛΚΙΒΙΑΔΟΥ ΚΡΑΣΣΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            236 => 
            array (
                'id' => 880,
                'postal_code_id' => 36,
                'name' => 'ΑΝΤΩΝΙΟΥ ΤΡΑΥΛΑΝΤΩΝΗ',
            'cosmote_street_name' => 'ΑΝΤΩΝΙΟΥ ΤΡΑΥΛΑΝΤΩΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            237 => 
            array (
                'id' => 881,
                'postal_code_id' => 36,
                'name' => 'ΑΡΛΙΩΤΗ',
            'cosmote_street_name' => 'ΑΡΛΙΩΤΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            238 => 
            array (
                'id' => 882,
                'postal_code_id' => 36,
                'name' => 'ΒΑΣΙΛΕΙΟΥ ΖΩΤΟΥ',
            'cosmote_street_name' => 'ΒΑΣΙΛΕΙΟΥ ΖΩΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            239 => 
            array (
                'id' => 883,
                'postal_code_id' => 36,
                'name' => 'ΓΕΩΡΓΙΟΥ ΜΙΣΤΡΙΩΤΟΥ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΜΙΣΤΡΙΩΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            240 => 
            array (
                'id' => 884,
                'postal_code_id' => 36,
                'name' => 'ΓΕΩΡΓΙΟΥ ΞΕΝΟΥΔΑΚΗ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΞΕΝΟΥΔΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            241 => 
            array (
                'id' => 885,
                'postal_code_id' => 36,
                'name' => 'ΔΗΜΗΤΡΙΟΥ ΚΟΚΚΟΥ',
            'cosmote_street_name' => 'ΔΗΜΗΤΡΙΟΥ ΚΟΚΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            242 => 
            array (
                'id' => 886,
                'postal_code_id' => 36,
                'name' => 'ΕΛΙΚΩΝΟΣ',
            'cosmote_street_name' => 'ΕΛΙΚΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            243 => 
            array (
                'id' => 887,
                'postal_code_id' => 36,
                'name' => 'ΕΥΑΝΘΙΑΣ ΚΑΙΡΗ',
            'cosmote_street_name' => 'ΕΥΑΝΘΙΑΣ ΚΑΙΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            244 => 
            array (
                'id' => 888,
                'postal_code_id' => 36,
                'name' => 'ΖΑΚΟΜΠ ΣΠΟΝ',
            'cosmote_street_name' => 'ΖΑΚΟΜΠ ΣΠΟΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            245 => 
            array (
                'id' => 889,
                'postal_code_id' => 36,
                'name' => 'ΙΟΥΛΙΟΥ ΓΑΛΒΑΝΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            246 => 
            array (
                'id' => 890,
                'postal_code_id' => 36,
                'name' => 'ΙΠΠΟΛΥΤΟΥ',
            'cosmote_street_name' => 'ΙΠΠΟΛΥΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            247 => 
            array (
                'id' => 891,
                'postal_code_id' => 36,
                'name' => 'ΙΩΑΝΝΟΥ ΔΡΟΣΟΠΟΥΛΟΥ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΔΡΟΣΟΠΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            248 => 
            array (
                'id' => 892,
                'postal_code_id' => 36,
                'name' => 'Κ. ΡΑΙΣΗΣ',
            'cosmote_street_name' => 'Κ. ΡΑΙΣΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            249 => 
            array (
                'id' => 893,
                'postal_code_id' => 36,
                'name' => 'ΚΑΡΑΜΗΤΣΑ',
            'cosmote_street_name' => 'ΚΑΡΑΜΗΤΣΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            250 => 
            array (
                'id' => 894,
                'postal_code_id' => 36,
                'name' => 'ΚΑΡΘΑΙΟΥ',
            'cosmote_street_name' => 'ΚΑΡΘΑΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            251 => 
            array (
                'id' => 895,
                'postal_code_id' => 36,
                'name' => 'ΚΑΣΤΕΛΛΙΟΥ',
            'cosmote_street_name' => 'ΚΑΣΤΕΛΛΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            252 => 
            array (
                'id' => 896,
                'postal_code_id' => 36,
                'name' => 'ΚΕΑΣ',
            'cosmote_street_name' => 'ΚΕΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:46',
            ),
            253 => 
            array (
                'id' => 897,
                'postal_code_id' => 36,
                'name' => 'ΚΙΘΑΙΡΩΝΟΣ',
            'cosmote_street_name' => 'ΚΙΘΑΙΡΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            254 => 
            array (
                'id' => 898,
                'postal_code_id' => 36,
                'name' => 'ΚΛΕΑΝΘΟΥΣ ΤΡΙΑΝΤΑΦΥΛΛΟΥ',
            'cosmote_street_name' => 'ΚΛΕΑΝΘΟΥΣ ΤΡΙΑΝΤΑΦΥΛΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            255 => 
            array (
                'id' => 899,
                'postal_code_id' => 36,
                'name' => 'ΚΥΘΝΟΥ',
            'cosmote_street_name' => 'ΚΥΘΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            256 => 
            array (
                'id' => 900,
                'postal_code_id' => 36,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΟΝΤΟΥ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΟΝΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            257 => 
            array (
                'id' => 901,
                'postal_code_id' => 36,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΣΑΘΑ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΣΑΘΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            258 => 
            array (
                'id' => 902,
                'postal_code_id' => 36,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΣΚΟΚΟΥ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΣΚΟΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            259 => 
            array (
                'id' => 903,
                'postal_code_id' => 36,
                'name' => 'ΜΗΔΕΙΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            260 => 
            array (
                'id' => 904,
                'postal_code_id' => 36,
                'name' => 'ΜΟΥΔΡΟΥ',
            'cosmote_street_name' => 'ΜΟΥΔΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            261 => 
            array (
                'id' => 905,
                'postal_code_id' => 36,
                'name' => 'ΝΑΞΟΥ',
            'cosmote_street_name' => 'ΝΑΞΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            262 => 
            array (
                'id' => 906,
                'postal_code_id' => 36,
                'name' => 'ΠΑΡΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            263 => 
            array (
                'id' => 907,
                'postal_code_id' => 36,
                'name' => 'ΠΑΤΗΣΙΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            264 => 
            array (
                'id' => 908,
                'postal_code_id' => 36,
                'name' => 'ΠΗΛΙΟΥ',
            'cosmote_street_name' => 'ΠΗΛΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            265 => 
            array (
                'id' => 909,
                'postal_code_id' => 36,
                'name' => 'ΠΙΝΔΟΥ',
            'cosmote_street_name' => 'ΠΙΝΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            266 => 
            array (
                'id' => 910,
                'postal_code_id' => 36,
                'name' => 'ΣΚΙΑΘΟΥ',
            'cosmote_street_name' => 'ΣΚΙΑΘΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            267 => 
            array (
                'id' => 911,
                'postal_code_id' => 36,
                'name' => 'ΤΑΥΓΕΤΟΥ',
            'cosmote_street_name' => 'ΤΑΥΓΕΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            268 => 
            array (
                'id' => 912,
                'postal_code_id' => 36,
                'name' => 'ΤΖΩΡΤΖ ΒΕΛΛΕΡ',
            'cosmote_street_name' => 'ΤΖΩΡΤΖ ΒΕΛΛΕΡ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            269 => 
            array (
                'id' => 913,
                'postal_code_id' => 36,
                'name' => 'ΦΡΑΓΚΙΣΤΑΣ',
            'cosmote_street_name' => 'ΦΡΑΓΚΙΣΤΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            270 => 
            array (
                'id' => 914,
                'postal_code_id' => 37,
            'name' => 'ΑΓΙΑΣ ΖΩΝΗΣ (ΠΡΧ ΚΥΨΕΛΗ)',
            'cosmote_street_name' => 'ΑΓΙΑΣ ΖΩΝΗΣ (ΠΡΧ ΚΥΨΕΛΗ) (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            271 => 
            array (
                'id' => 915,
                'postal_code_id' => 37,
                'name' => 'ΑΜΟΡΓΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            272 => 
            array (
                'id' => 916,
                'postal_code_id' => 37,
                'name' => 'ΑΝΑΦΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            273 => 
            array (
                'id' => 917,
                'postal_code_id' => 37,
                'name' => 'ΑΠΕΙΡΑΝΘΟΥ',
            'cosmote_street_name' => 'ΑΠΕΙΡΑΝΘΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            274 => 
            array (
                'id' => 918,
                'postal_code_id' => 37,
                'name' => 'ΑΣΤΥΠΑΛΑΙΑΣ',
            'cosmote_street_name' => 'ΑΣΤΥΠΑΛΑΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            275 => 
            array (
                'id' => 919,
                'postal_code_id' => 37,
                'name' => 'ΔΗΜΗΤΡΙΟΥ ΚΑΛΛΙΦΡΟΝΑ',
            'cosmote_street_name' => 'ΔΗΜΗΤΡΙΟΥ ΚΑΛΛΙΦΡΟΝΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            276 => 
            array (
                'id' => 920,
                'postal_code_id' => 37,
                'name' => 'ΔΟΚΟΥ',
            'cosmote_street_name' => 'ΔΟΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            277 => 
            array (
                'id' => 921,
                'postal_code_id' => 37,
                'name' => 'ΕΠΤΑΝΗΣΟΥ',
            'cosmote_street_name' => 'ΕΠΤΑΝΗΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            278 => 
            array (
                'id' => 922,
                'postal_code_id' => 37,
                'name' => 'ΙΩΑΝΝΟΥ ΔΡΟΣΟΠΟΥΛΟΥ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΔΡΟΣΟΠΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            279 => 
            array (
                'id' => 923,
                'postal_code_id' => 37,
                'name' => 'ΚΥΠΡΟΥ',
            'cosmote_street_name' => 'ΚΥΠΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            280 => 
            array (
                'id' => 924,
                'postal_code_id' => 37,
                'name' => 'ΛΕΣΒΟΥ',
            'cosmote_street_name' => 'ΛΕΣΒΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            281 => 
            array (
                'id' => 925,
                'postal_code_id' => 37,
                'name' => 'ΜΑΝΩΛΗ ΚΑΛΟΜΟΙΡΗ',
            'cosmote_street_name' => 'ΜΑΝΩΛΗ ΚΑΛΟΜΟΙΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            282 => 
            array (
                'id' => 926,
                'postal_code_id' => 37,
                'name' => 'ΜΗΔΕΙΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            283 => 
            array (
                'id' => 927,
                'postal_code_id' => 37,
                'name' => 'ΜΥΤΙΛΗΝΗΣ',
            'cosmote_street_name' => 'ΜΥΤΙΛΗΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            284 => 
            array (
                'id' => 928,
                'postal_code_id' => 37,
                'name' => 'ΝΑΞΟΥ',
            'cosmote_street_name' => 'ΝΑΞΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            285 => 
            array (
                'id' => 929,
                'postal_code_id' => 37,
                'name' => 'ΠΑΡΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            286 => 
            array (
                'id' => 930,
                'postal_code_id' => 37,
                'name' => 'ΠΑΤΗΣΙΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            287 => 
            array (
                'id' => 931,
                'postal_code_id' => 37,
                'name' => 'ΠΟΡΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            288 => 
            array (
                'id' => 932,
                'postal_code_id' => 37,
                'name' => 'ΦΟΛΟΗΣ',
            'cosmote_street_name' => 'ΦΟΛΟΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            289 => 
            array (
                'id' => 933,
                'postal_code_id' => 37,
                'name' => 'ΨΥΤΤΑΛΕΙΑΣ',
            'cosmote_street_name' => 'ΨΥΤΤΑΛΕΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            290 => 
            array (
                'id' => 934,
                'postal_code_id' => 38,
                'name' => 'ΑΓΑΘΟΥΠΟΛΕΩΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            291 => 
            array (
                'id' => 935,
                'postal_code_id' => 38,
                'name' => 'ΕΠΤΑΝΗΣΟΥ',
            'cosmote_street_name' => 'ΕΠΤΑΝΗΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            292 => 
            array (
                'id' => 936,
                'postal_code_id' => 38,
                'name' => 'ΘΑΣΟΥ',
            'cosmote_street_name' => 'ΘΑΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            293 => 
            array (
                'id' => 937,
                'postal_code_id' => 38,
                'name' => 'ΘΗΡΑΣ',
            'cosmote_street_name' => 'ΘΗΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            294 => 
            array (
                'id' => 938,
                'postal_code_id' => 38,
                'name' => 'ΙΜΒΡΟΥ',
            'cosmote_street_name' => 'ΙΜΒΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            295 => 
            array (
                'id' => 939,
                'postal_code_id' => 38,
                'name' => 'ΙΩΑΝΝΟΥ ΔΡΟΣΟΠΟΥΛΟΥ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΔΡΟΣΟΠΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            296 => 
            array (
                'id' => 940,
                'postal_code_id' => 38,
                'name' => 'ΚΕΛΑΙΝΟΥΣ',
            'cosmote_street_name' => 'ΚΕΛΑΙΝΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            297 => 
            array (
                'id' => 941,
                'postal_code_id' => 38,
                'name' => 'ΚΥΠΡΟΥ',
            'cosmote_street_name' => 'ΚΥΠΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            298 => 
            array (
                'id' => 942,
                'postal_code_id' => 38,
                'name' => 'ΛΕΛΑΣ ΚΑΡΑΓΙΑΝΝΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            299 => 
            array (
                'id' => 943,
                'postal_code_id' => 38,
                'name' => 'ΜΗΘΥΜΝΗΣ',
            'cosmote_street_name' => 'ΜΗΘΥΜΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            300 => 
            array (
                'id' => 944,
                'postal_code_id' => 38,
                'name' => 'ΠΑΤΗΣΙΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            301 => 
            array (
                'id' => 945,
                'postal_code_id' => 38,
                'name' => 'ΤΕΝΕΔΟΥ',
            'cosmote_street_name' => 'ΤΕΝΕΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            302 => 
            array (
                'id' => 946,
                'postal_code_id' => 38,
                'name' => 'ΦΩΚΙΩΝΟΣ ΝΕΓΡΗ',
            'cosmote_street_name' => 'ΦΩΚΙΩΝΟΣ ΝΕΓΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            303 => 
            array (
                'id' => 947,
                'postal_code_id' => 39,
            'name' => 'ΑΓΙΑΣ ΖΩΝΗΣ (ΠΡΧ ΚΥΨΕΛΗ)',
            'cosmote_street_name' => 'ΑΓΙΑΣ ΖΩΝΗΣ (ΠΡΧ ΚΥΨΕΛΗ) (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            304 => 
            array (
                'id' => 948,
                'postal_code_id' => 39,
                'name' => 'ΕΚΤΟΡΟΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            305 => 
            array (
                'id' => 949,
                'postal_code_id' => 39,
                'name' => 'ΕΠΤΑΝΗΣΟΥ',
            'cosmote_street_name' => 'ΕΠΤΑΝΗΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            306 => 
            array (
                'id' => 950,
                'postal_code_id' => 39,
                'name' => 'ΕΡΑΣΜΙΑΣ',
            'cosmote_street_name' => 'ΕΡΑΣΜΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            307 => 
            array (
                'id' => 951,
                'postal_code_id' => 39,
                'name' => 'ΙΜΒΡΟΥ',
            'cosmote_street_name' => 'ΙΜΒΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            308 => 
            array (
                'id' => 952,
                'postal_code_id' => 39,
                'name' => 'ΚΡΟΝΟΥ',
            'cosmote_street_name' => 'ΚΡΟΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            309 => 
            array (
                'id' => 953,
                'postal_code_id' => 39,
                'name' => 'ΚΥΠΡΟΥ',
            'cosmote_street_name' => 'ΚΥΠΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            310 => 
            array (
                'id' => 954,
                'postal_code_id' => 39,
                'name' => 'ΛΕΛΑΣ ΚΑΡΑΓΙΑΝΝΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            311 => 
            array (
                'id' => 955,
                'postal_code_id' => 39,
                'name' => 'ΜΕΓΙΣΤΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            312 => 
            array (
                'id' => 956,
                'postal_code_id' => 39,
                'name' => 'ΜΗΘΥΜΝΗΣ',
            'cosmote_street_name' => 'ΜΗΘΥΜΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            313 => 
            array (
                'id' => 957,
                'postal_code_id' => 39,
                'name' => 'ΞΑΝΘΗΣ',
            'cosmote_street_name' => 'ΞΑΝΘΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            314 => 
            array (
                'id' => 958,
                'postal_code_id' => 39,
                'name' => 'ΠΛΑΤΕΙΑ ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΑΝΑΡΗ',
            'cosmote_street_name' => 'ΠΛΑΤΕΙΑ ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΑΝΑΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            315 => 
            array (
                'id' => 959,
                'postal_code_id' => 39,
                'name' => 'ΠΟΛΥΜΝΙΑΣ',
            'cosmote_street_name' => 'ΠΟΛΥΜΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            316 => 
            array (
                'id' => 960,
                'postal_code_id' => 39,
                'name' => 'ΣΑΜΟΘΡΑΚΗΣ',
            'cosmote_street_name' => 'ΣΑΜΟΘΡΑΚΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            317 => 
            array (
                'id' => 961,
                'postal_code_id' => 39,
                'name' => 'ΣΙΚΙΝΟΥ',
            'cosmote_street_name' => 'ΣΙΚΙΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            318 => 
            array (
                'id' => 962,
                'postal_code_id' => 39,
                'name' => 'ΣΠΥΡΙΔΩΝΟΣ ΤΡΙΑΝΤΑΦΥΛΛΟΥ',
            'cosmote_street_name' => 'ΣΠΥΡΙΔΩΝΟΣ ΤΡΙΑΝΤΑΦΥΛΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            319 => 
            array (
                'id' => 963,
                'postal_code_id' => 39,
                'name' => 'ΤΕΝΕΔΟΥ',
            'cosmote_street_name' => 'ΤΕΝΕΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            320 => 
            array (
                'id' => 964,
                'postal_code_id' => 39,
                'name' => 'ΦΩΚΙΩΝΟΣ ΝΕΓΡΗ',
            'cosmote_street_name' => 'ΦΩΚΙΩΝΟΣ ΝΕΓΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            321 => 
            array (
                'id' => 965,
                'postal_code_id' => 40,
            'name' => 'ΑΓΙΑΣ ΖΩΝΗΣ (ΠΡΧ ΚΥΨΕΛΗ)',
            'cosmote_street_name' => 'ΑΓΙΑΣ ΖΩΝΗΣ (ΠΡΧ ΚΥΨΕΛΗ) (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            322 => 
            array (
                'id' => 966,
                'postal_code_id' => 40,
                'name' => 'ΑΝΑΦΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            323 => 
            array (
                'id' => 967,
                'postal_code_id' => 40,
                'name' => 'ΑΝΤΩΝΙΟΥ ΤΡΑΥΛΑΝΤΩΝΗ',
            'cosmote_street_name' => 'ΑΝΤΩΝΙΟΥ ΤΡΑΥΛΑΝΤΩΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            324 => 
            array (
                'id' => 968,
                'postal_code_id' => 40,
                'name' => 'ΑΡΜΟΝΙΑΣ',
            'cosmote_street_name' => 'ΑΡΜΟΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            325 => 
            array (
                'id' => 969,
                'postal_code_id' => 40,
                'name' => 'ΑΣΤΥΠΑΛΑΙΑΣ',
            'cosmote_street_name' => 'ΑΣΤΥΠΑΛΑΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            326 => 
            array (
                'id' => 970,
                'postal_code_id' => 40,
                'name' => 'ΔΑΦΝΙΔΟΣ',
            'cosmote_street_name' => 'ΔΑΦΝΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            327 => 
            array (
                'id' => 971,
                'postal_code_id' => 40,
                'name' => 'ΔΗΜΗΤΡΙΟΥ ΚΑΛΛΙΦΡΟΝΑ',
            'cosmote_street_name' => 'ΔΗΜΗΤΡΙΟΥ ΚΑΛΛΙΦΡΟΝΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            328 => 
            array (
                'id' => 972,
                'postal_code_id' => 40,
                'name' => 'ΕΛΙΚΩΝΟΣ',
            'cosmote_street_name' => 'ΕΛΙΚΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            329 => 
            array (
                'id' => 973,
                'postal_code_id' => 40,
                'name' => 'ΖΑΚΟΜΠ ΣΠΟΝ',
            'cosmote_street_name' => 'ΖΑΚΟΜΠ ΣΠΟΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            330 => 
            array (
                'id' => 974,
                'postal_code_id' => 40,
                'name' => 'ΙΚΑΡΟΥ',
            'cosmote_street_name' => 'ΙΚΑΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            331 => 
            array (
                'id' => 975,
                'postal_code_id' => 40,
                'name' => 'ΚΑΣΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            332 => 
            array (
                'id' => 976,
                'postal_code_id' => 40,
                'name' => 'ΚΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            333 => 
            array (
                'id' => 977,
                'postal_code_id' => 40,
                'name' => 'ΚΡΙΣΣΗΣ',
            'cosmote_street_name' => 'ΚΡΙΣΣΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            334 => 
            array (
                'id' => 978,
                'postal_code_id' => 40,
                'name' => 'ΚΥΘΗΡΩΝ',
            'cosmote_street_name' => 'ΚΥΘΗΡΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            335 => 
            array (
                'id' => 979,
                'postal_code_id' => 40,
                'name' => 'ΚΥΠΡΟΥ',
            'cosmote_street_name' => 'ΚΥΠΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            336 => 
            array (
                'id' => 980,
                'postal_code_id' => 40,
                'name' => 'ΛΕΡΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            337 => 
            array (
                'id' => 981,
                'postal_code_id' => 40,
                'name' => 'ΛΕΣΒΟΥ',
            'cosmote_street_name' => 'ΛΕΣΒΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            338 => 
            array (
                'id' => 982,
                'postal_code_id' => 40,
                'name' => 'ΜΕΓΙΣΤΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            339 => 
            array (
                'id' => 983,
                'postal_code_id' => 40,
                'name' => 'ΜΥΤΙΛΗΝΗΣ',
            'cosmote_street_name' => 'ΜΥΤΙΛΗΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            340 => 
            array (
                'id' => 984,
                'postal_code_id' => 40,
                'name' => 'ΝΗΡΕΩΣ',
            'cosmote_street_name' => 'ΝΗΡΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            341 => 
            array (
                'id' => 985,
                'postal_code_id' => 40,
                'name' => 'ΠΛΑΤΕΙΑ ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΑΝΑΡΗ',
            'cosmote_street_name' => 'ΠΛΑΤΕΙΑ ΚΩΝΣΤΑΝΤΙΝΟΥ ΚΑΝΑΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            342 => 
            array (
                'id' => 986,
                'postal_code_id' => 40,
                'name' => 'ΠΡΩΤΕΩΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            343 => 
            array (
                'id' => 987,
                'postal_code_id' => 40,
                'name' => 'ΠΥΘΙΑΣ',
            'cosmote_street_name' => 'ΠΥΘΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            344 => 
            array (
                'id' => 988,
                'postal_code_id' => 40,
                'name' => 'ΠΥΘΩΝΟΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            345 => 
            array (
                'id' => 989,
                'postal_code_id' => 40,
                'name' => 'ΣΙΚΙΝΟΥ',
            'cosmote_street_name' => 'ΣΙΚΙΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            346 => 
            array (
                'id' => 990,
                'postal_code_id' => 40,
                'name' => 'ΣΤΥΜΦΑΛΙΑΣ',
            'cosmote_street_name' => 'ΣΤΥΜΦΑΛΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            347 => 
            array (
                'id' => 991,
                'postal_code_id' => 40,
                'name' => 'ΤΖΩΡΤΖ ΒΕΛΛΕΡ',
            'cosmote_street_name' => 'ΤΖΩΡΤΖ ΒΕΛΛΕΡ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            348 => 
            array (
                'id' => 992,
                'postal_code_id' => 40,
                'name' => 'ΥΑΚΙΝΘΟΥ',
            'cosmote_street_name' => 'ΥΑΚΙΝΘΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            349 => 
            array (
                'id' => 993,
                'postal_code_id' => 40,
                'name' => 'ΦΑΙΔΡΙΑΔΩΝ',
            'cosmote_street_name' => 'ΦΑΙΔΡΙΑΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            350 => 
            array (
                'id' => 994,
                'postal_code_id' => 40,
                'name' => 'ΩΡΙΩΝΟΣ',
            'cosmote_street_name' => 'ΩΡΙΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:47',
            ),
            351 => 
            array (
                'id' => 995,
                'postal_code_id' => 41,
                'name' => 'ΑΝΔΡΕΑ ΜΩΡΑΙΤΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            352 => 
            array (
                'id' => 996,
                'postal_code_id' => 41,
                'name' => 'ΑΡΓΥΡΟΥΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΑΡΓΥΡΟΥΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            353 => 
            array (
                'id' => 997,
                'postal_code_id' => 41,
                'name' => 'ΑΡΜΑΤΩΛΩΝ ΚΑΙ ΚΛΕΦΤΩΝ',
            'cosmote_street_name' => 'ΑΡΜΑΤΩΛΩΝ ΚΑΙ ΚΛΕΦΤΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            354 => 
            array (
                'id' => 998,
                'postal_code_id' => 41,
                'name' => 'ΒΑΣΙΛΕΙΟΥ ΒΟΥΛΓΑΡΟΚΤΟΝΟΥ',
            'cosmote_street_name' => 'ΒΑΣΙΛΕΙΟΥ ΒΟΥΛΓΑΡΟΚΤΟΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            355 => 
            array (
                'id' => 999,
                'postal_code_id' => 41,
                'name' => 'ΔΑΣΚΑΛΟΓΙΑΝΝΗ',
            'cosmote_street_name' => 'ΔΑΣΚΑΛΟΓΙΑΝΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            356 => 
            array (
                'id' => 1000,
                'postal_code_id' => 41,
                'name' => 'ΔΑΦΝΟΜΗΛΗ',
            'cosmote_street_name' => 'ΔΑΦΝΟΜΗΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            357 => 
            array (
                'id' => 1001,
                'postal_code_id' => 41,
                'name' => 'ΔΟΞΑΠΑΤΡΗ',
            'cosmote_street_name' => 'ΔΟΞΑΠΑΤΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            358 => 
            array (
                'id' => 1002,
                'postal_code_id' => 41,
                'name' => 'ΙΣΑΥΡΩΝ',
            'cosmote_street_name' => 'ΙΣΑΥΡΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            359 => 
            array (
                'id' => 1003,
                'postal_code_id' => 41,
                'name' => 'ΙΩΑΝΝΟΥ ΜΠΟΥΚΟΥΒΑΛΑ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΜΠΟΥΚΟΥΒΑΛΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            360 => 
            array (
                'id' => 1004,
                'postal_code_id' => 41,
                'name' => 'ΙΩΑΝΝΟΥ ΤΣΙΜΙΣΚΗ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΤΣΙΜΙΣΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            361 => 
            array (
                'id' => 1005,
                'postal_code_id' => 41,
                'name' => 'ΚΟΝΙΑΡΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            362 => 
            array (
                'id' => 1006,
                'postal_code_id' => 41,
                'name' => 'ΚΟΣΜΑ ΑΙΤΩΛΟΥ',
            'cosmote_street_name' => 'ΚΟΣΜΑ ΑΙΤΩΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            363 => 
            array (
                'id' => 1007,
                'postal_code_id' => 41,
                'name' => 'ΚΟΥΜΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            364 => 
            array (
                'id' => 1008,
                'postal_code_id' => 41,
                'name' => 'ΛΑΜΠΑΡΔΗ',
            'cosmote_street_name' => 'ΛΑΜΠΑΡΔΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            365 => 
            array (
                'id' => 1009,
                'postal_code_id' => 41,
                'name' => 'ΛΑΜΠΡΟΥ ΚΑΤΣΩΝΗ',
            'cosmote_street_name' => 'ΛΑΜΠΡΟΥ ΚΑΤΣΩΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            366 => 
            array (
                'id' => 1010,
                'postal_code_id' => 41,
                'name' => 'ΛΕΩΦΟΡΟΣ ΑΛΕΞΑΝΔΡΑΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΑΛΕΞΑΝΔΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            367 => 
            array (
                'id' => 1011,
                'postal_code_id' => 41,
                'name' => 'ΛΙΒΙΝΗ',
            'cosmote_street_name' => 'ΛΙΒΙΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            368 => 
            array (
                'id' => 1012,
                'postal_code_id' => 41,
                'name' => 'ΝΑΡΣΗ',
            'cosmote_street_name' => 'ΝΑΡΣΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            369 => 
            array (
                'id' => 1013,
                'postal_code_id' => 41,
                'name' => 'ΝΙΚΟΤΣΑΡΑ',
            'cosmote_street_name' => 'ΝΙΚΟΤΣΑΡΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            370 => 
            array (
                'id' => 1014,
                'postal_code_id' => 41,
                'name' => 'ΠΑΛΙΓΓΕΝΕΣΙΑΣ',
            'cosmote_street_name' => 'ΠΑΛΙΓΓΕΝΕΣΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            371 => 
            array (
                'id' => 1015,
                'postal_code_id' => 41,
                'name' => 'ΠΑΝΑΓΙΩΤΗ ΜΠΕΝΑΚΗ',
            'cosmote_street_name' => 'ΠΑΝΑΓΙΩΤΗ ΜΠΕΝΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            372 => 
            array (
                'id' => 1016,
                'postal_code_id' => 41,
                'name' => 'ΠΑΤΡΙΑΡΧΟΥ ΙΕΡΕΜΙΟΥ',
            'cosmote_street_name' => 'ΠΑΤΡΙΑΡΧΟΥ ΙΕΡΕΜΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            373 => 
            array (
                'id' => 1017,
                'postal_code_id' => 41,
                'name' => 'ΠΑΤΡΙΑΡΧΟΥ ΣΕΡΓΙΟΥ',
            'cosmote_street_name' => 'ΠΑΤΡΙΑΡΧΟΥ ΣΕΡΓΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            374 => 
            array (
                'id' => 1018,
                'postal_code_id' => 41,
                'name' => 'ΠΑΤΡΙΑΡΧΟΥ ΦΩΤΙΟΥ',
            'cosmote_street_name' => 'ΠΑΤΡΙΑΡΧΟΥ ΦΩΤΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            375 => 
            array (
                'id' => 1019,
                'postal_code_id' => 41,
                'name' => 'ΣΑΡΑΝΤΑΠΗΧΟΥ',
            'cosmote_street_name' => 'ΣΑΡΑΝΤΑΠΗΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            376 => 
            array (
                'id' => 1020,
                'postal_code_id' => 41,
                'name' => 'ΣΤΑΘΗ ΓΕΡΟΔΗΜΟΥ',
            'cosmote_street_name' => 'ΣΤΑΘΗ ΓΕΡΟΔΗΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            377 => 
            array (
                'id' => 1021,
                'postal_code_id' => 41,
                'name' => 'ΦΑΝΑΡΙΩΤΩΝ',
            'cosmote_street_name' => 'ΦΑΝΑΡΙΩΤΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            378 => 
            array (
                'id' => 1022,
                'postal_code_id' => 42,
                'name' => 'ΑΡΙΑΝΙΤΟΥ',
            'cosmote_street_name' => 'ΑΡΙΑΝΙΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            379 => 
            array (
                'id' => 1023,
                'postal_code_id' => 42,
                'name' => 'ΑΡΚΑΔΟΣ',
            'cosmote_street_name' => 'ΑΡΚΑΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            380 => 
            array (
                'id' => 1024,
                'postal_code_id' => 42,
                'name' => 'ΒΑΣΙΛΕΙΟΥ ΒΟΥΛΓΑΡΟΚΤΟΝΟΥ',
            'cosmote_street_name' => 'ΒΑΣΙΛΕΙΟΥ ΒΟΥΛΓΑΡΟΚΤΟΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            381 => 
            array (
                'id' => 1025,
                'postal_code_id' => 42,
                'name' => 'ΙΠΠΟΚΡΑΤΟΥΣ',
            'cosmote_street_name' => 'ΙΠΠΟΚΡΑΤΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            382 => 
            array (
                'id' => 1026,
                'postal_code_id' => 42,
                'name' => 'ΙΣΑΥΡΩΝ',
            'cosmote_street_name' => 'ΙΣΑΥΡΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            383 => 
            array (
                'id' => 1027,
                'postal_code_id' => 42,
                'name' => 'ΙΩΑΝΝΟΥ ΤΣΙΜΙΣΚΗ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΤΣΙΜΙΣΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            384 => 
            array (
                'id' => 1028,
                'postal_code_id' => 42,
                'name' => 'ΜΑΥΡΟΜΙΧΑΛΗ',
            'cosmote_street_name' => 'ΜΑΥΡΟΜΙΧΑΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            385 => 
            array (
                'id' => 1029,
                'postal_code_id' => 42,
                'name' => 'ΣΜΟΛΕΝΣΚΥ',
            'cosmote_street_name' => 'ΣΜΟΛΕΝΣΚΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            386 => 
            array (
                'id' => 1030,
                'postal_code_id' => 42,
                'name' => 'ΤΗΛΕΜΑΧΟΥ',
            'cosmote_street_name' => 'ΤΗΛΕΜΑΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            387 => 
            array (
                'id' => 1031,
                'postal_code_id' => 42,
                'name' => 'ΤΡΑΠΕΖΟΥΝΤΙΟΥ',
            'cosmote_street_name' => 'ΤΡΑΠΕΖΟΥΝΤΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            388 => 
            array (
                'id' => 1032,
                'postal_code_id' => 42,
                'name' => 'ΧΑΡΙΛΑΟΥ ΤΡΙΚΟΥΠΗ',
            'cosmote_street_name' => 'ΧΑΡΙΛΑΟΥ ΤΡΙΚΟΥΠΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            389 => 
            array (
                'id' => 1033,
                'postal_code_id' => 43,
                'name' => 'ΑΝΔΡΕΑ ΚΑΛΒΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            390 => 
            array (
                'id' => 1034,
                'postal_code_id' => 43,
                'name' => 'ΑΝΔΡΕΑ ΜΟΥΣΤΟΞΥΔΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-01 15:58:05',
            ),
            391 => 
            array (
                'id' => 1035,
                'postal_code_id' => 43,
                'name' => 'ΑΣΩΠΙΟΥ',
            'cosmote_street_name' => 'ΑΣΩΠΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            392 => 
            array (
                'id' => 1036,
                'postal_code_id' => 43,
                'name' => 'ΑΧΙΛΛΕΑ ΠΑΡΑΣΧΟΥ',
            'cosmote_street_name' => 'ΑΧΙΛΛΕΑ ΠΑΡΑΣΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            393 => 
            array (
                'id' => 1037,
                'postal_code_id' => 43,
                'name' => 'ΒΑΛΤΙΝΩΝ',
            'cosmote_street_name' => 'ΒΑΛΤΙΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            394 => 
            array (
                'id' => 1038,
                'postal_code_id' => 43,
                'name' => 'ΒΑΣΙΛΕΙΟΥ ΒΟΥΛΓΑΡΟΚΤΟΝΟΥ',
            'cosmote_street_name' => 'ΒΑΣΙΛΕΙΟΥ ΒΟΥΛΓΑΡΟΚΤΟΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            395 => 
            array (
                'id' => 1039,
                'postal_code_id' => 43,
                'name' => 'ΕΙΡΗΝΗΣ ΑΘΗΝΑΙΑΣ',
            'cosmote_street_name' => 'ΕΙΡΗΝΗΣ ΑΘΗΝΑΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            396 => 
            array (
                'id' => 1040,
                'postal_code_id' => 43,
                'name' => 'ΕΜΜΑΝΟΥΗΛ ΜΠΕΝΑΚΗ',
            'cosmote_street_name' => 'ΕΜΜΑΝΟΥΗΛ ΜΠΕΝΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            397 => 
            array (
                'id' => 1041,
                'postal_code_id' => 43,
                'name' => 'ΕΜΜΑΝΟΥΗΛ ΧΡΥΣΟΛΩΡΑ',
            'cosmote_street_name' => 'ΕΜΜΑΝΟΥΗΛ ΧΡΥΣΟΛΩΡΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            398 => 
            array (
                'id' => 1042,
                'postal_code_id' => 43,
                'name' => 'ΖΩΟΔΟΧΟΥ ΠΗΓΗΣ',
            'cosmote_street_name' => 'ΖΩΟΔΟΧΟΥ ΠΗΓΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            399 => 
            array (
                'id' => 1043,
                'postal_code_id' => 43,
                'name' => 'ΘΕΡΕΙΑΝΟΥ',
            'cosmote_street_name' => 'ΘΕΡΕΙΑΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            400 => 
            array (
                'id' => 1044,
                'postal_code_id' => 43,
                'name' => 'ΙΕΡΑΠΕΤΡΑΣ',
            'cosmote_street_name' => 'ΙΕΡΑΠΕΤΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            401 => 
            array (
                'id' => 1045,
                'postal_code_id' => 43,
                'name' => 'ΙΣΑΥΡΩΝ',
            'cosmote_street_name' => 'ΙΣΑΥΡΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            402 => 
            array (
                'id' => 1046,
                'postal_code_id' => 43,
                'name' => 'ΙΩΑΝΝΟΥ ΤΣΙΜΙΣΚΗ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΤΣΙΜΙΣΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            403 => 
            array (
                'id' => 1047,
                'postal_code_id' => 43,
                'name' => 'ΙΩΣΗΦ ΜΟΜΦΕΡΑΤΟΥ',
            'cosmote_street_name' => 'ΙΩΣΗΦ ΜΟΜΦΕΡΑΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            404 => 
            array (
                'id' => 1048,
                'postal_code_id' => 43,
                'name' => 'ΚΑΛΛΙΔΡΟΜΙΟΥ',
            'cosmote_street_name' => 'ΚΑΛΛΙΔΡΟΜΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            405 => 
            array (
                'id' => 1049,
                'postal_code_id' => 43,
                'name' => 'ΚΑΛΛΙΣΤΗΣ',
            'cosmote_street_name' => 'ΚΑΛΛΙΣΤΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            406 => 
            array (
                'id' => 1050,
                'postal_code_id' => 43,
                'name' => 'ΚΑΤΣΑΝΤΩΝΗ',
            'cosmote_street_name' => 'ΚΑΤΣΑΝΤΩΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            407 => 
            array (
                'id' => 1051,
                'postal_code_id' => 43,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΛΟΜΒΑΡΔΟΥ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΛΟΜΒΑΡΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            408 => 
            array (
                'id' => 1052,
                'postal_code_id' => 43,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΠΑΠΑΡΡΗΓΟΠΟΥΛΟΥ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΠΑΠΑΡΡΗΓΟΠΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            409 => 
            array (
                'id' => 1053,
                'postal_code_id' => 43,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΣΧΙΝΑ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΣΧΙΝΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            410 => 
            array (
                'id' => 1054,
                'postal_code_id' => 43,
                'name' => 'ΛΕΩΦΟΡΟΣ ΑΛΕΞΑΝΔΡΑΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΑΛΕΞΑΝΔΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            411 => 
            array (
                'id' => 1055,
                'postal_code_id' => 43,
                'name' => 'ΜΑΝΤΖΑΚΟΥ',
            'cosmote_street_name' => 'ΜΑΝΤΖΑΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            412 => 
            array (
                'id' => 1056,
                'postal_code_id' => 43,
                'name' => 'ΜΠΟΥΣΓΟΥ',
            'cosmote_street_name' => 'ΜΠΟΥΣΓΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            413 => 
            array (
                'id' => 1057,
                'postal_code_id' => 43,
                'name' => 'ΠΕΤΡΟΥ ΒΡΑΙΛΑ-ΑΡΜΕΝΗ',
            'cosmote_street_name' => 'ΠΕΤΡΟΥ ΒΡΑΙΛΑ-ΑΡΜΕΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            414 => 
            array (
                'id' => 1058,
                'postal_code_id' => 43,
                'name' => 'ΠΕΤΡΟΥ ΚΑΛΛΙΓΑ',
            'cosmote_street_name' => 'ΠΕΤΡΟΥ ΚΑΛΛΙΓΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            415 => 
            array (
                'id' => 1059,
                'postal_code_id' => 43,
                'name' => 'ΠΕΤΣΟΒΟΥ',
            'cosmote_street_name' => 'ΠΕΤΣΟΒΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            416 => 
            array (
                'id' => 1060,
                'postal_code_id' => 43,
                'name' => 'ΠΟΥΛΧΕΡΙΑΣ',
            'cosmote_street_name' => 'ΠΟΥΛΧΕΡΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            417 => 
            array (
                'id' => 1061,
                'postal_code_id' => 43,
                'name' => 'ΡΑΓΚΑΒΗ',
            'cosmote_street_name' => 'ΡΑΓΚΑΒΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:05',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            418 => 
            array (
                'id' => 1062,
                'postal_code_id' => 43,
                'name' => 'ΣΜΟΛΕΝΣΚΥ',
            'cosmote_street_name' => 'ΣΜΟΛΕΝΣΚΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            419 => 
            array (
                'id' => 1063,
                'postal_code_id' => 43,
                'name' => 'ΦΡΑΝΤΖΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            420 => 
            array (
                'id' => 1064,
                'postal_code_id' => 43,
                'name' => 'ΧΑΡΙΛΑΟΥ ΤΡΙΚΟΥΠΗ',
            'cosmote_street_name' => 'ΧΑΡΙΛΑΟΥ ΤΡΙΚΟΥΠΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            421 => 
            array (
                'id' => 1065,
                'postal_code_id' => 44,
                'name' => 'ΑΓΑΠΗΝΟΡΟΣ',
            'cosmote_street_name' => 'ΑΓΑΠΗΝΟΡΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            422 => 
            array (
                'id' => 1066,
                'postal_code_id' => 44,
                'name' => 'ΑΓΙΟΥ ΣΤΥΛΙΑΝΟΥ',
            'cosmote_street_name' => 'ΑΓΙΟΥ ΣΤΥΛΙΑΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            423 => 
            array (
                'id' => 1067,
                'postal_code_id' => 44,
                'name' => 'ΑΓΙΟΥ ΧΑΡΑΛΑΜΠΟΥΣ',
            'cosmote_street_name' => 'ΑΓΙΟΥ ΧΑΡΑΛΑΜΠΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            424 => 
            array (
                'id' => 1068,
                'postal_code_id' => 44,
                'name' => 'ΑΓΛΑΟΦΩΝΤΟΣ',
            'cosmote_street_name' => 'ΑΓΛΑΟΦΩΝΤΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            425 => 
            array (
                'id' => 1069,
                'postal_code_id' => 44,
                'name' => 'ΑΝΑΣΤΑΣΙΟΥ ΓΕΝΝΑΔΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            426 => 
            array (
                'id' => 1070,
                'postal_code_id' => 44,
                'name' => 'ΑΝΔΡΕΑ ΚΑΛΒΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            427 => 
            array (
                'id' => 1071,
                'postal_code_id' => 44,
                'name' => 'ΑΧΙΛΛΕΑ ΠΑΡΑΣΧΟΥ',
            'cosmote_street_name' => 'ΑΧΙΛΛΕΑ ΠΑΡΑΣΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            428 => 
            array (
                'id' => 1072,
                'postal_code_id' => 44,
                'name' => 'ΒΑΛΤΙΝΩΝ',
            'cosmote_street_name' => 'ΒΑΛΤΙΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            429 => 
            array (
                'id' => 1073,
                'postal_code_id' => 44,
                'name' => 'ΕΝΤΙΣΟΝ',
            'cosmote_street_name' => 'ΕΝΤΙΣΟΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            430 => 
            array (
                'id' => 1074,
                'postal_code_id' => 44,
                'name' => 'ΖΑΡΙΦΗ',
            'cosmote_street_name' => 'ΖΑΡΙΦΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            431 => 
            array (
                'id' => 1075,
                'postal_code_id' => 44,
                'name' => 'ΙΩΑΝΝΟΥ ΒΑΡΒΑΚΗ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΒΑΡΒΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            432 => 
            array (
                'id' => 1076,
                'postal_code_id' => 44,
                'name' => 'ΙΩΑΝΝΟΥ ΣΟΥΤΣΟΥ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΣΟΥΤΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            433 => 
            array (
                'id' => 1077,
                'postal_code_id' => 44,
                'name' => 'ΙΩΣΗΦ ΜΟΜΦΕΡΑΤΟΥ',
            'cosmote_street_name' => 'ΙΩΣΗΦ ΜΟΜΦΕΡΑΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            434 => 
            array (
                'id' => 1078,
                'postal_code_id' => 44,
                'name' => 'ΚΟΝΤΟΓΟΝΗ',
            'cosmote_street_name' => 'ΚΟΝΤΟΓΟΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            435 => 
            array (
                'id' => 1079,
                'postal_code_id' => 44,
                'name' => 'ΚΥΠΡΙΑΝΟΥ',
            'cosmote_street_name' => 'ΚΥΠΡΙΑΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            436 => 
            array (
                'id' => 1080,
                'postal_code_id' => 44,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΛΟΜΒΑΡΔΟΥ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΛΟΜΒΑΡΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            437 => 
            array (
                'id' => 1081,
                'postal_code_id' => 44,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΜΗΤΣΟΠΟΥΛΟΥ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΜΗΤΣΟΠΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            438 => 
            array (
                'id' => 1082,
                'postal_code_id' => 44,
                'name' => 'ΛΕΩΝΙΔΑ ΔΡΟΣΗ',
            'cosmote_street_name' => 'ΛΕΩΝΙΔΑ ΔΡΟΣΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            439 => 
            array (
                'id' => 1083,
                'postal_code_id' => 44,
                'name' => 'ΛΕΩΦΟΡΟΣ ΑΛΕΞΑΝΔΡΑΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΑΛΕΞΑΝΔΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            440 => 
            array (
                'id' => 1084,
                'postal_code_id' => 44,
                'name' => 'ΛΙΑΚΑΤΑΙΩΝ',
            'cosmote_street_name' => 'ΛΙΑΚΑΤΑΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            441 => 
            array (
                'id' => 1085,
                'postal_code_id' => 44,
                'name' => 'ΛΟΚΡΙΔΟΣ',
            'cosmote_street_name' => 'ΛΟΚΡΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            442 => 
            array (
                'id' => 1086,
                'postal_code_id' => 44,
                'name' => 'ΛΟΥΙΖΗΣ ΚΑΛΚΟΥ',
            'cosmote_street_name' => 'ΛΟΥΙΖΗΣ ΚΑΛΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            443 => 
            array (
                'id' => 1087,
                'postal_code_id' => 44,
                'name' => 'ΜΑΝΟΥΣΟΥ ΚΟΥΝΔΟΥΡΟΥ',
            'cosmote_street_name' => 'ΜΑΝΟΥΣΟΥ ΚΟΥΝΔΟΥΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            444 => 
            array (
                'id' => 1088,
                'postal_code_id' => 44,
                'name' => 'ΜΕΓΑΛΟΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΜΕΓΑΛΟΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            445 => 
            array (
                'id' => 1089,
                'postal_code_id' => 44,
                'name' => 'ΜΕΘΑΝΩΝ',
            'cosmote_street_name' => 'ΜΕΘΑΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:48',
            ),
            446 => 
            array (
                'id' => 1090,
                'postal_code_id' => 44,
                'name' => 'ΝΕΔΑΣ',
            'cosmote_street_name' => 'ΝΕΔΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            447 => 
            array (
                'id' => 1091,
                'postal_code_id' => 44,
                'name' => 'ΝΙΚΗΦΟΡΟΥ ΛΥΤΡΑ',
            'cosmote_street_name' => 'ΝΙΚΗΦΟΡΟΥ ΛΥΤΡΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            448 => 
            array (
                'id' => 1092,
                'postal_code_id' => 44,
                'name' => 'ΝΙΚΟΛΑΟΥ ΓΥΖΗ',
            'cosmote_street_name' => 'ΝΙΚΟΛΑΟΥ ΓΥΖΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            449 => 
            array (
                'id' => 1093,
                'postal_code_id' => 44,
                'name' => 'ΝΙΚΟΛΑΟΥ ΔΕΛΛΑΠΟΡΤΑ',
            'cosmote_street_name' => 'ΝΙΚΟΛΑΟΥ ΔΕΛΛΑΠΟΡΤΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            450 => 
            array (
                'id' => 1094,
                'postal_code_id' => 44,
                'name' => 'ΝΟΡΝΤΑΟΥ',
            'cosmote_street_name' => 'ΝΟΡΝΤΑΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            451 => 
            array (
                'id' => 1095,
                'postal_code_id' => 44,
                'name' => 'ΟΙΧΑΛΙΑΣ',
            'cosmote_street_name' => 'ΟΙΧΑΛΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            452 => 
            array (
                'id' => 1096,
                'postal_code_id' => 44,
                'name' => 'ΠΑΠΑΝΔΡΙΑ',
            'cosmote_street_name' => 'ΠΑΠΑΝΔΡΙΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            453 => 
            array (
                'id' => 1097,
                'postal_code_id' => 44,
                'name' => 'ΠΕΤΡΟΥ ΚΑΛΛΙΓΑ',
            'cosmote_street_name' => 'ΠΕΤΡΟΥ ΚΑΛΛΙΓΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            454 => 
            array (
                'id' => 1098,
                'postal_code_id' => 44,
                'name' => 'ΠΛΑΤΕΙΑ ΓΥΖΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            455 => 
            array (
                'id' => 1099,
                'postal_code_id' => 44,
                'name' => 'ΠΟΛΥΖΩΙΔΟΥ',
            'cosmote_street_name' => 'ΠΟΛΥΖΩΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            456 => 
            array (
                'id' => 1100,
                'postal_code_id' => 44,
                'name' => 'ΠΡΙΓΚΙΠΟΝΝΗΣΩΝ',
            'cosmote_street_name' => 'ΠΡΙΓΚΙΠΟΝΝΗΣΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            457 => 
            array (
                'id' => 1101,
                'postal_code_id' => 44,
                'name' => 'ΡΑΓΚΑΒΗ',
            'cosmote_street_name' => 'ΡΑΓΚΑΒΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            458 => 
            array (
                'id' => 1102,
                'postal_code_id' => 44,
                'name' => 'ΣΤΕΦΑΝΟΥ ΚΟΥΜΑΝΟΥΔΗ',
            'cosmote_street_name' => 'ΣΤΕΦΑΝΟΥ ΚΟΥΜΑΝΟΥΔΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            459 => 
            array (
                'id' => 1103,
                'postal_code_id' => 44,
                'name' => 'ΣΥΡΙΑΝΟΥ',
            'cosmote_street_name' => 'ΣΥΡΙΑΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            460 => 
            array (
                'id' => 1104,
                'postal_code_id' => 45,
                'name' => 'ΑΗΔΟΝΩΝ',
            'cosmote_street_name' => 'ΑΗΔΟΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            461 => 
            array (
                'id' => 1105,
                'postal_code_id' => 45,
                'name' => 'ΑΛΕΞΑΝΔΡΟΥ ΠΑΛΛΗ',
            'cosmote_street_name' => 'ΑΛΕΞΑΝΔΡΟΥ ΠΑΛΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            462 => 
            array (
                'id' => 1106,
                'postal_code_id' => 45,
                'name' => 'ΑΜΦΕΙΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            463 => 
            array (
                'id' => 1107,
                'postal_code_id' => 45,
                'name' => 'ΑΝ. ΑΝΑΓΝΩΣΤΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            464 => 
            array (
                'id' => 1108,
                'postal_code_id' => 45,
                'name' => 'ΑΝΑΓΝΩΣΤΑΡΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            465 => 
            array (
                'id' => 1109,
                'postal_code_id' => 45,
                'name' => 'ΑΝΑΝΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            466 => 
            array (
                'id' => 1110,
                'postal_code_id' => 45,
                'name' => 'ΑΝΔΡΕΑ ΚΑΛΒΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            467 => 
            array (
                'id' => 1111,
                'postal_code_id' => 45,
                'name' => 'ΑΝΘΕΜΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            468 => 
            array (
                'id' => 1112,
                'postal_code_id' => 45,
                'name' => 'ΑΞΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            469 => 
            array (
                'id' => 1113,
                'postal_code_id' => 45,
                'name' => 'ΑΧΙΛΛΕΑ ΠΑΡΑΣΧΟΥ',
            'cosmote_street_name' => 'ΑΧΙΛΛΕΑ ΠΑΡΑΣΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            470 => 
            array (
                'id' => 1114,
                'postal_code_id' => 45,
                'name' => 'ΒΑΡΑΤΑΣΗ',
            'cosmote_street_name' => 'ΒΑΡΑΤΑΣΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            471 => 
            array (
                'id' => 1115,
                'postal_code_id' => 45,
                'name' => 'ΒΑΡΔΑ ΠΛΑΤΥΠΟΔΗ',
            'cosmote_street_name' => 'ΒΑΡΔΑ ΠΛΑΤΥΠΟΔΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            472 => 
            array (
                'id' => 1116,
                'postal_code_id' => 45,
                'name' => 'ΒΕΡΓΟΒΙΤΣΗΣ',
            'cosmote_street_name' => 'ΒΕΡΓΟΒΙΤΣΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            473 => 
            array (
                'id' => 1117,
                'postal_code_id' => 45,
                'name' => 'ΓΕΩΡΓΙΟΥ ΚΕΔΡΗΝΟΥ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΚΕΔΡΗΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            474 => 
            array (
                'id' => 1118,
                'postal_code_id' => 45,
                'name' => 'ΔΗΜΗΤΡΙΟΥ ΒΡΑΤΣΑΝΟΥ',
            'cosmote_street_name' => 'ΔΗΜΗΤΡΙΟΥ ΒΡΑΤΣΑΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            475 => 
            array (
                'id' => 1119,
                'postal_code_id' => 45,
                'name' => 'ΔΗΜΗΤΡΙΟΥ ΦΑΛΗΡΕΩΣ',
            'cosmote_street_name' => 'ΔΗΜΗΤΡΙΟΥ ΦΑΛΗΡΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            476 => 
            array (
                'id' => 1120,
                'postal_code_id' => 45,
                'name' => 'ΔΗΜΟΥΛΙΤΣΑ ΠΑΡΓΑΣ',
            'cosmote_street_name' => 'ΔΗΜΟΥΛΙΤΣΑ ΠΑΡΓΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            477 => 
            array (
                'id' => 1121,
                'postal_code_id' => 45,
                'name' => 'ΔΙΟΝΥΣΙΟΥ ΕΦΕΣΟΥ',
            'cosmote_street_name' => 'ΔΙΟΝΥΣΙΟΥ ΕΦΕΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            478 => 
            array (
                'id' => 1122,
                'postal_code_id' => 45,
                'name' => 'ΕΜΜΑΝΟΥΗΛ ΡΟΙΔΗ',
            'cosmote_street_name' => 'ΕΜΜΑΝΟΥΗΛ ΡΟΙΔΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            479 => 
            array (
                'id' => 1123,
                'postal_code_id' => 45,
                'name' => 'ΗΣΑΙΑ ΣΑΛΩΝΩΝ',
            'cosmote_street_name' => 'ΗΣΑΙΑ ΣΑΛΩΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            480 => 
            array (
                'id' => 1124,
                'postal_code_id' => 45,
                'name' => 'ΙΘΩΜΗΣ',
            'cosmote_street_name' => 'ΙΘΩΜΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            481 => 
            array (
                'id' => 1125,
                'postal_code_id' => 45,
                'name' => 'ΙΩΑΝΝΟΥ ΜΠΟΥΚΟΥΒΑΛΑ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΜΠΟΥΚΟΥΒΑΛΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            482 => 
            array (
                'id' => 1126,
                'postal_code_id' => 45,
                'name' => 'ΙΩΣΗΦ ΜΟΜΦΕΡΑΤΟΥ',
            'cosmote_street_name' => 'ΙΩΣΗΦ ΜΟΜΦΕΡΑΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            483 => 
            array (
                'id' => 1127,
                'postal_code_id' => 45,
                'name' => 'ΚΟΝΤΟΓΙΑΝΝΑΙΩΝ',
            'cosmote_street_name' => 'ΚΟΝΤΟΓΙΑΝΝΑΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            484 => 
            array (
                'id' => 1128,
                'postal_code_id' => 45,
                'name' => 'ΚΥΡΙΛΛΟΥ ΛΟΥΚΑΡΕΩΣ',
            'cosmote_street_name' => 'ΚΥΡΙΛΛΟΥ ΛΟΥΚΑΡΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            485 => 
            array (
                'id' => 1129,
                'postal_code_id' => 45,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΛΟΜΒΑΡΔΟΥ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΛΟΜΒΑΡΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            486 => 
            array (
                'id' => 1130,
                'postal_code_id' => 45,
                'name' => 'ΛΕΩΦΟΡΟΣ ΑΛΕΞΑΝΔΡΑΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΑΛΕΞΑΝΔΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            487 => 
            array (
                'id' => 1131,
                'postal_code_id' => 45,
                'name' => 'ΜΠΑΤΑΡΙΑ',
            'cosmote_street_name' => 'ΜΠΑΤΑΡΙΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            488 => 
            array (
                'id' => 1132,
                'postal_code_id' => 45,
                'name' => 'ΜΥΣΤΡΑ',
            'cosmote_street_name' => 'ΜΥΣΤΡΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            489 => 
            array (
                'id' => 1133,
                'postal_code_id' => 45,
                'name' => 'ΝΙΚΟΛΑΟΥ ΓΥΖΗ',
            'cosmote_street_name' => 'ΝΙΚΟΛΑΟΥ ΓΥΖΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            490 => 
            array (
                'id' => 1134,
                'postal_code_id' => 45,
                'name' => 'ΝΙΚΟΛΑΟΥ ΣΟΛΙΩΤΗ',
            'cosmote_street_name' => 'ΝΙΚΟΛΑΟΥ ΣΟΛΙΩΤΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            491 => 
            array (
                'id' => 1135,
                'postal_code_id' => 45,
                'name' => 'ΠΑΝΑΓΙΩΤΑΡΑ',
            'cosmote_street_name' => 'ΠΑΝΑΓΙΩΤΑΡΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            492 => 
            array (
                'id' => 1136,
                'postal_code_id' => 45,
                'name' => 'ΠΑΠΑΘΥΜΙΟΥ',
            'cosmote_street_name' => 'ΠΑΠΑΘΥΜΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            493 => 
            array (
                'id' => 1137,
                'postal_code_id' => 45,
                'name' => 'ΠΑΤΡΙΑΡΧΟΥ ΙΕΡΕΜΙΟΥ',
            'cosmote_street_name' => 'ΠΑΤΡΙΑΡΧΟΥ ΙΕΡΕΜΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            494 => 
            array (
                'id' => 1138,
                'postal_code_id' => 45,
                'name' => 'ΠΛΑΤΕΙΑ ΓΥΖΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            495 => 
            array (
                'id' => 1139,
                'postal_code_id' => 45,
                'name' => 'ΡΑΓΚΑΒΗ',
            'cosmote_street_name' => 'ΡΑΓΚΑΒΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            496 => 
            array (
                'id' => 1140,
                'postal_code_id' => 45,
                'name' => 'ΤΣΟΠΑΝΑΚΟΥ',
            'cosmote_street_name' => 'ΤΣΟΠΑΝΑΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            497 => 
            array (
                'id' => 1141,
                'postal_code_id' => 45,
                'name' => 'ΦΡΟΥΔΑ',
            'cosmote_street_name' => 'ΦΡΟΥΔΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            498 => 
            array (
                'id' => 1142,
                'postal_code_id' => 46,
                'name' => 'ΑΒΡΑΝΤΙΝΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            499 => 
            array (
                'id' => 1143,
                'postal_code_id' => 46,
                'name' => 'ΑΓΑΛΙΑΝΟΥ',
            'cosmote_street_name' => 'ΑΓΑΛΙΑΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
        ));
        \DB::table('streets')->insert(array (
            0 => 
            array (
                'id' => 1144,
                'postal_code_id' => 46,
                'name' => 'ΑΓΑΝΙΠΠΗΣ',
            'cosmote_street_name' => 'ΑΓΑΝΙΠΠΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            1 => 
            array (
                'id' => 1145,
                'postal_code_id' => 46,
                'name' => 'ΑΓΙΟΥ ΣΤΥΛΙΑΝΟΥ',
            'cosmote_street_name' => 'ΑΓΙΟΥ ΣΤΥΛΙΑΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            2 => 
            array (
                'id' => 1146,
                'postal_code_id' => 46,
                'name' => 'ΑΔΕΛΦΩΝ ΧΑΛΗ',
            'cosmote_street_name' => 'ΑΔΕΛΦΩΝ ΧΑΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            3 => 
            array (
                'id' => 1147,
                'postal_code_id' => 46,
                'name' => 'ΑΘΑΝΑΣΙΟΥ ΚΑΡΠΕΝΗΣΙΩΤΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            4 => 
            array (
                'id' => 1148,
                'postal_code_id' => 46,
                'name' => 'ΑΜΦΕΙΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            5 => 
            array (
                'id' => 1149,
                'postal_code_id' => 46,
                'name' => 'ΑΜΦΙΚΛΕΙΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            6 => 
            array (
                'id' => 1150,
                'postal_code_id' => 46,
                'name' => 'ΑΝΔΡΕΑ ΓΕΩΡΓΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            7 => 
            array (
                'id' => 1151,
                'postal_code_id' => 46,
                'name' => 'ΑΝΔΡΕΑ ΚΟΝΔΑΚΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            8 => 
            array (
                'id' => 1152,
                'postal_code_id' => 46,
                'name' => 'ΒΑΦΕΙΟΧΩΡΙΟΥ',
            'cosmote_street_name' => 'ΒΑΦΕΙΟΧΩΡΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            9 => 
            array (
                'id' => 1153,
                'postal_code_id' => 46,
                'name' => 'ΒΙΘΥΝΙΑΣ',
            'cosmote_street_name' => 'ΒΙΘΥΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            10 => 
            array (
                'id' => 1154,
                'postal_code_id' => 46,
                'name' => 'ΒΡΙΛΗΣΣΟΥ',
            'cosmote_street_name' => 'ΒΡΙΛΗΣΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            11 => 
            array (
                'id' => 1155,
                'postal_code_id' => 46,
                'name' => 'ΒΩΚΟΥ',
            'cosmote_street_name' => 'ΒΩΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            12 => 
            array (
                'id' => 1156,
                'postal_code_id' => 46,
                'name' => 'ΓΑΛΑΤΑ',
            'cosmote_street_name' => 'ΓΑΛΑΤΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            13 => 
            array (
                'id' => 1157,
                'postal_code_id' => 46,
                'name' => 'ΓΕΩΡΓΙΟΥ ΚΑΣΤΡΙΩΤΟΥ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΚΑΣΤΡΙΩΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            14 => 
            array (
                'id' => 1158,
                'postal_code_id' => 46,
                'name' => 'ΓΙΑΝΝΑΚΟΥ ΑΒΑΡΙΚΙΩΤΗ',
            'cosmote_street_name' => 'ΓΙΑΝΝΑΚΟΥ ΑΒΑΡΙΚΙΩΤΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            15 => 
            array (
                'id' => 1159,
                'postal_code_id' => 46,
                'name' => 'ΓΚΟΜΠΙΝΩ',
            'cosmote_street_name' => 'ΓΚΟΜΠΙΝΩ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            16 => 
            array (
                'id' => 1160,
                'postal_code_id' => 46,
                'name' => 'ΓΟΥΔΑ',
            'cosmote_street_name' => 'ΓΟΥΔΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            17 => 
            array (
                'id' => 1161,
                'postal_code_id' => 46,
                'name' => 'ΓΟΥΖΕΛΗ',
            'cosmote_street_name' => 'ΓΟΥΖΕΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            18 => 
            array (
                'id' => 1162,
                'postal_code_id' => 46,
                'name' => 'ΓΟΥΖΙΟΥ ΖΟΥΚΑ',
            'cosmote_street_name' => 'ΓΟΥΖΙΟΥ ΖΟΥΚΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            19 => 
            array (
                'id' => 1163,
                'postal_code_id' => 46,
                'name' => 'ΔΕΒΙΑΖΗ',
            'cosmote_street_name' => 'ΔΕΒΙΑΖΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            20 => 
            array (
                'id' => 1164,
                'postal_code_id' => 46,
                'name' => 'ΔΙΣΤΟΜΙΤΟΥ',
            'cosmote_street_name' => 'ΔΙΣΤΟΜΙΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            21 => 
            array (
                'id' => 1165,
                'postal_code_id' => 46,
                'name' => 'ΔΟΥΜΠΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            22 => 
            array (
                'id' => 1166,
                'postal_code_id' => 46,
                'name' => 'ΔΡΙΝΟΥ',
            'cosmote_street_name' => 'ΔΡΙΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            23 => 
            array (
                'id' => 1167,
                'postal_code_id' => 46,
                'name' => 'ΕΠΤΑΠΥΡΓΙΟΥ',
            'cosmote_street_name' => 'ΕΠΤΑΠΥΡΓΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            24 => 
            array (
                'id' => 1168,
                'postal_code_id' => 46,
                'name' => 'ΕΡΜΑΝΝΟΥ ΛΟΥΝΤΖΗ',
            'cosmote_street_name' => 'ΕΡΜΑΝΝΟΥ ΛΟΥΝΤΖΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            25 => 
            array (
                'id' => 1169,
                'postal_code_id' => 46,
                'name' => 'ΖΗΝΟΠΟΥΛΟΥ',
            'cosmote_street_name' => 'ΖΗΝΟΠΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            26 => 
            array (
                'id' => 1170,
                'postal_code_id' => 46,
                'name' => 'ΗΡΑΚΛΗ ΓΙΑΤΑΓΑΝΑ',
            'cosmote_street_name' => 'ΗΡΑΚΛΗ ΓΙΑΤΑΓΑΝΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            27 => 
            array (
                'id' => 1171,
                'postal_code_id' => 46,
                'name' => 'ΙΩΑΝΝΟΥ ΝΙΚΟΛΑΟΥ',
            'cosmote_street_name' => 'ΙΩΑΝΝΟΥ ΝΙΚΟΛΑΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            28 => 
            array (
                'id' => 1172,
                'postal_code_id' => 46,
                'name' => 'ΙΩΝΙΔΩΝ',
            'cosmote_street_name' => 'ΙΩΝΙΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            29 => 
            array (
                'id' => 1173,
                'postal_code_id' => 46,
                'name' => 'Κ. ΠΑΤΑΡΑΚΗ',
            'cosmote_street_name' => 'Κ. ΠΑΤΑΡΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            30 => 
            array (
                'id' => 1174,
                'postal_code_id' => 46,
                'name' => 'ΚΑΡΑΠΑΝΑΓΙΩΤΟΥ',
            'cosmote_street_name' => 'ΚΑΡΑΠΑΝΑΓΙΩΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            31 => 
            array (
                'id' => 1175,
                'postal_code_id' => 46,
                'name' => 'ΚΟΛΟΚΑΣΗ',
            'cosmote_street_name' => 'ΚΟΛΟΚΑΣΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            32 => 
            array (
                'id' => 1176,
                'postal_code_id' => 46,
                'name' => 'ΚΟΥΓΚΙΟΥ',
            'cosmote_street_name' => 'ΚΟΥΓΚΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            33 => 
            array (
                'id' => 1177,
                'postal_code_id' => 46,
                'name' => 'ΚΡΟΥΑΖΕ',
            'cosmote_street_name' => 'ΚΡΟΥΑΖΕ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            34 => 
            array (
                'id' => 1178,
                'postal_code_id' => 46,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΔΡΑΓΩΝΑ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΔΡΑΓΩΝΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            35 => 
            array (
                'id' => 1179,
                'postal_code_id' => 46,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΛΩΡΗ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΛΩΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            36 => 
            array (
                'id' => 1180,
                'postal_code_id' => 46,
                'name' => 'ΛΑΤΡΗ',
            'cosmote_street_name' => 'ΛΑΤΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            37 => 
            array (
                'id' => 1181,
                'postal_code_id' => 46,
                'name' => 'ΛΕΩΦΟΡΟΣ ΚΩΝΣΤΑΝΤΙΝΟΥ ΤΣΑΛΔΑΡΗ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΚΩΝΣΤΑΝΤΙΝΟΥ ΤΣΑΛΔΑΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            38 => 
            array (
                'id' => 1182,
                'postal_code_id' => 46,
                'name' => 'ΛΙΝΔΟΥ',
            'cosmote_street_name' => 'ΛΙΝΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            39 => 
            array (
                'id' => 1183,
                'postal_code_id' => 46,
                'name' => 'ΛΙΟΠΕΣΗ',
            'cosmote_street_name' => 'ΛΙΟΠΕΣΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            40 => 
            array (
                'id' => 1184,
                'postal_code_id' => 46,
                'name' => 'ΛΥΚΑΙΟΥ',
            'cosmote_street_name' => 'ΛΥΚΑΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            41 => 
            array (
                'id' => 1185,
                'postal_code_id' => 46,
                'name' => 'ΜΑΙΩΤΙΔΟΣ',
            'cosmote_street_name' => 'ΜΑΙΩΤΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            42 => 
            array (
                'id' => 1186,
                'postal_code_id' => 46,
                'name' => 'ΜΑΛΑΞΟΥ',
            'cosmote_street_name' => 'ΜΑΛΑΞΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:49',
            ),
            43 => 
            array (
                'id' => 1187,
                'postal_code_id' => 46,
                'name' => 'ΜΑΝΟΥ ΜΠΛΕΣΣΑ',
            'cosmote_street_name' => 'ΜΑΝΟΥ ΜΠΛΕΣΣΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            44 => 
            array (
                'id' => 1188,
                'postal_code_id' => 46,
                'name' => 'ΜΑΡΙΟΥΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΜΑΡΙΟΥΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            45 => 
            array (
                'id' => 1189,
                'postal_code_id' => 46,
                'name' => 'ΜΑΡΚΟΥ ΔΡΑΚΟΥ',
            'cosmote_street_name' => 'ΜΑΡΚΟΥ ΔΡΑΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            46 => 
            array (
                'id' => 1190,
                'postal_code_id' => 46,
                'name' => 'ΜΑΡΜΑΡΑ',
            'cosmote_street_name' => 'ΜΑΡΜΑΡΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            47 => 
            array (
                'id' => 1191,
                'postal_code_id' => 46,
                'name' => 'ΜΕΓΑΛΟΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΜΕΓΑΛΟΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            48 => 
            array (
                'id' => 1192,
                'postal_code_id' => 46,
                'name' => 'ΜΗΤΡΟΠΕΤΡΟΒΑ',
            'cosmote_street_name' => 'ΜΗΤΡΟΠΕΤΡΟΒΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            49 => 
            array (
                'id' => 1193,
                'postal_code_id' => 46,
                'name' => 'ΜΙΣΤΡΑΛ',
            'cosmote_street_name' => 'ΜΙΣΤΡΑΛ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            50 => 
            array (
                'id' => 1194,
                'postal_code_id' => 46,
                'name' => 'ΜΙΧΑΗΛ ΓΕΩΡΓΑΛΛΑ',
            'cosmote_street_name' => 'ΜΙΧΑΗΛ ΓΕΩΡΓΑΛΛΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            51 => 
            array (
                'id' => 1195,
                'postal_code_id' => 46,
                'name' => 'ΜΙΧΑΗΛ ΠΑΡΙΔΗ',
            'cosmote_street_name' => 'ΜΙΧΑΗΛ ΠΑΡΙΔΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            52 => 
            array (
                'id' => 1196,
                'postal_code_id' => 46,
                'name' => 'ΜΠΑΤΑΡΙΑ',
            'cosmote_street_name' => 'ΜΠΑΤΑΡΙΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            53 => 
            array (
                'id' => 1197,
                'postal_code_id' => 46,
                'name' => 'ΜΠΟΥΑΙΩΝ',
            'cosmote_street_name' => 'ΜΠΟΥΑΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            54 => 
            array (
                'id' => 1198,
                'postal_code_id' => 46,
                'name' => 'ΜΠΟΥΖΙΚΗ',
            'cosmote_street_name' => 'ΜΠΟΥΖΙΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            55 => 
            array (
                'id' => 1199,
                'postal_code_id' => 46,
                'name' => 'ΜΠΟΧΑΛΗ',
            'cosmote_street_name' => 'ΜΠΟΧΑΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            56 => 
            array (
                'id' => 1200,
                'postal_code_id' => 46,
                'name' => 'ΝΙΚΗΤΑ ΝΗΦΑΚΟΥ',
            'cosmote_street_name' => 'ΝΙΚΗΤΑ ΝΗΦΑΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            57 => 
            array (
                'id' => 1201,
                'postal_code_id' => 46,
                'name' => 'ΝΙΚΟΛΑΟΥ ΓΕΩΡΓΙΟΥ',
            'cosmote_street_name' => 'ΝΙΚΟΛΑΟΥ ΓΕΩΡΓΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            58 => 
            array (
                'id' => 1202,
                'postal_code_id' => 46,
                'name' => 'ΝΙΚΟΛΑΟΥ ΚΕΦΑΛΑ',
            'cosmote_street_name' => 'ΝΙΚΟΛΑΟΥ ΚΕΦΑΛΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            59 => 
            array (
                'id' => 1203,
                'postal_code_id' => 46,
                'name' => 'ΟΙΧΑΛΙΑΣ',
            'cosmote_street_name' => 'ΟΙΧΑΛΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            60 => 
            array (
                'id' => 1204,
                'postal_code_id' => 46,
                'name' => 'ΟΞΥΡΡΥΓΧΟΥ',
            'cosmote_street_name' => 'ΟΞΥΡΡΥΓΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            61 => 
            array (
                'id' => 1205,
                'postal_code_id' => 46,
                'name' => 'ΟΡΕΙΒΑΣΙΟΥ',
            'cosmote_street_name' => 'ΟΡΕΙΒΑΣΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            62 => 
            array (
                'id' => 1206,
                'postal_code_id' => 46,
                'name' => 'ΠΑΛΟΥΜΠΙΩΤΗ',
            'cosmote_street_name' => 'ΠΑΛΟΥΜΠΙΩΤΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            63 => 
            array (
                'id' => 1207,
                'postal_code_id' => 46,
                'name' => 'ΠΑΠΑΡΣΕΝΗ',
            'cosmote_street_name' => 'ΠΑΠΑΡΣΕΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            64 => 
            array (
                'id' => 1208,
                'postal_code_id' => 46,
                'name' => 'ΠΑΠΑΣΤΡΑΤΟΥ',
            'cosmote_street_name' => 'ΠΑΠΑΣΤΡΑΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            65 => 
            array (
                'id' => 1209,
                'postal_code_id' => 46,
                'name' => 'ΠΑΠΑΧΡΙΣΤΟΦΟΡΟΥ',
            'cosmote_street_name' => 'ΠΑΠΑΧΡΙΣΤΟΦΟΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            66 => 
            array (
                'id' => 1210,
                'postal_code_id' => 46,
                'name' => 'ΠΑΥΛΟΥ ΚΑΡΟΛΙΔΟΥ',
            'cosmote_street_name' => 'ΠΑΥΛΟΥ ΚΑΡΟΛΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            67 => 
            array (
                'id' => 1211,
                'postal_code_id' => 46,
                'name' => 'ΠΛΑΤΕΙΑ ΚΑΠΕΤΑΝ Π. ΓΥΠΑΡΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            68 => 
            array (
                'id' => 1212,
                'postal_code_id' => 46,
                'name' => 'ΠΡΙΓΚΙΠΟΝΝΗΣΩΝ',
            'cosmote_street_name' => 'ΠΡΙΓΚΙΠΟΝΝΗΣΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            69 => 
            array (
                'id' => 1213,
                'postal_code_id' => 46,
                'name' => 'ΣΠΑΘΑΡΗ',
            'cosmote_street_name' => 'ΣΠΑΘΑΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            70 => 
            array (
                'id' => 1214,
                'postal_code_id' => 46,
                'name' => 'ΤΑΤΑΟΥΛΩΝ',
            'cosmote_street_name' => 'ΤΑΤΑΟΥΛΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            71 => 
            array (
                'id' => 1215,
                'postal_code_id' => 46,
                'name' => 'ΤΑΥΡΙΔΟΣ',
            'cosmote_street_name' => 'ΤΑΥΡΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            72 => 
            array (
                'id' => 1216,
                'postal_code_id' => 46,
                'name' => 'ΤΕΛΛΟΥ ΑΓΑΠΗΝΟΥ',
            'cosmote_street_name' => 'ΤΕΛΛΟΥ ΑΓΑΠΗΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            73 => 
            array (
                'id' => 1217,
                'postal_code_id' => 46,
                'name' => 'ΦΙΛΙΠΠΟΥ ΠΛΥΤΑ',
            'cosmote_street_name' => 'ΦΙΛΙΠΠΟΥ ΠΛΥΤΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            74 => 
            array (
                'id' => 1218,
                'postal_code_id' => 46,
                'name' => 'ΦΙΛΟΚΤΗΤΟΥ ΟΙΚΟΝΟΜΙΔΟΥ',
            'cosmote_street_name' => 'ΦΙΛΟΚΤΗΤΟΥ ΟΙΚΟΝΟΜΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            75 => 
            array (
                'id' => 1219,
                'postal_code_id' => 46,
                'name' => 'ΦΩΤΙΟΥ ΑΓΓΕΛΙΔΗ',
            'cosmote_street_name' => 'ΦΩΤΙΟΥ ΑΓΓΕΛΙΔΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            76 => 
            array (
                'id' => 1220,
                'postal_code_id' => 46,
                'name' => 'ΧΙΩΤΗ',
            'cosmote_street_name' => 'ΧΙΩΤΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            77 => 
            array (
                'id' => 1221,
                'postal_code_id' => 46,
                'name' => 'ΧΡΥΣΟΥΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΧΡΥΣΟΥΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            78 => 
            array (
                'id' => 1222,
                'postal_code_id' => 47,
                'name' => 'ΑΓΗΣΙΛΑΟΥ ΠΑΠΑΔΗΜΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            79 => 
            array (
                'id' => 1223,
                'postal_code_id' => 47,
                'name' => 'ΑΝΑΠΗΡΩΝ ΠΟΛΕΜΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            80 => 
            array (
                'id' => 1224,
                'postal_code_id' => 47,
                'name' => 'ΑΡΓΥΡΙΟΥ ΠΑΠΑΓΙΑΝΝΗ',
            'cosmote_street_name' => 'ΑΡΓΥΡΙΟΥ ΠΑΠΑΓΙΑΝΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            81 => 
            array (
                'id' => 1225,
                'postal_code_id' => 47,
                'name' => 'ΒΛΑΔΙΜΗΡΟΥ ΜΠΕΝΣΗ',
            'cosmote_street_name' => 'ΒΛΑΔΙΜΗΡΟΥ ΜΠΕΝΣΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            82 => 
            array (
                'id' => 1226,
                'postal_code_id' => 47,
                'name' => 'ΒΛΑΣΙΟΥ ΚΑΡΑΧΡΗΣΤΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            83 => 
            array (
                'id' => 1227,
                'postal_code_id' => 47,
                'name' => 'ΔΕΙΝΟΚΡΑΤΟΥΣ',
            'cosmote_street_name' => 'ΔΕΙΝΟΚΡΑΤΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            84 => 
            array (
                'id' => 1228,
                'postal_code_id' => 47,
                'name' => 'ΔΗΜΟΧΑΡΟΥΣ',
            'cosmote_street_name' => 'ΔΗΜΟΧΑΡΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            85 => 
            array (
                'id' => 1229,
                'postal_code_id' => 47,
                'name' => 'ΕΛΕΝΑΣ ΒΕΝΙΖΕΛΟΥ',
            'cosmote_street_name' => 'ΕΛΕΝΑΣ ΒΕΝΙΖΕΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            86 => 
            array (
                'id' => 1230,
                'postal_code_id' => 47,
                'name' => 'ΕΥΖΩΝΩΝ',
            'cosmote_street_name' => 'ΕΥΖΩΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            87 => 
            array (
                'id' => 1231,
                'postal_code_id' => 47,
                'name' => 'ΙΩΑΝΝΟΥ ΓΕΝΝΑΔΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            88 => 
            array (
                'id' => 1232,
                'postal_code_id' => 47,
                'name' => 'ΚΟΝΙΑΡΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            89 => 
            array (
                'id' => 1233,
                'postal_code_id' => 47,
                'name' => 'ΚΟΤΥΑΙΟΥ',
            'cosmote_street_name' => 'ΚΟΤΥΑΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            90 => 
            array (
                'id' => 1234,
                'postal_code_id' => 47,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΙΑΤΡΙΔΟΥ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΙΑΤΡΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            91 => 
            array (
                'id' => 1235,
                'postal_code_id' => 47,
                'name' => 'ΛΑΧΗΤΟΣ',
            'cosmote_street_name' => 'ΛΑΧΗΤΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            92 => 
            array (
                'id' => 1236,
                'postal_code_id' => 47,
                'name' => 'ΛΕΩΦΟΡΟΣ ΒΑΣΙΛΙΣΣΗΣ ΣΟΦΙΑΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΒΑΣΙΛΙΣΣΗΣ ΣΟΦΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            93 => 
            array (
                'id' => 1237,
                'postal_code_id' => 47,
                'name' => 'ΜΕΛΙΝΑΣ ΜΕΡΚΟΥΡΗ',
            'cosmote_street_name' => 'ΜΕΛΙΝΑΣ ΜΕΡΚΟΥΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            94 => 
            array (
                'id' => 1238,
                'postal_code_id' => 47,
                'name' => 'ΜΙΧΑΗΛ ΜΕΛΑ',
            'cosmote_street_name' => 'ΜΙΧΑΗΛ ΜΕΛΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            95 => 
            array (
                'id' => 1239,
                'postal_code_id' => 47,
                'name' => 'ΜΟΝΗΣ ΠΕΤΡΑΚΗ',
            'cosmote_street_name' => 'ΜΟΝΗΣ ΠΕΤΡΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            96 => 
            array (
                'id' => 1240,
                'postal_code_id' => 47,
                'name' => 'Π. ΚΥΡΙΑΚΟΥ',
            'cosmote_street_name' => 'Π. ΚΥΡΙΑΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            97 => 
            array (
                'id' => 1241,
                'postal_code_id' => 47,
                'name' => 'ΠΕΤΡΟΥ ΚΟΚΚΑΛΗ',
            'cosmote_street_name' => 'ΠΕΤΡΟΥ ΚΟΚΚΑΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            98 => 
            array (
                'id' => 1242,
                'postal_code_id' => 47,
                'name' => 'ΣΟΥΗΔΙΑΣ',
            'cosmote_street_name' => 'ΣΟΥΗΔΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            99 => 
            array (
                'id' => 1243,
                'postal_code_id' => 47,
                'name' => 'ΣΥΗΝΗΣ',
            'cosmote_street_name' => 'ΣΥΗΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            100 => 
            array (
                'id' => 1244,
                'postal_code_id' => 47,
                'name' => 'ΤΙΜ. ΦΙΛΗΜΟΝΟΣ',
            'cosmote_street_name' => 'ΤΙΜ. ΦΙΛΗΜΟΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            101 => 
            array (
                'id' => 1245,
                'postal_code_id' => 47,
                'name' => 'ΩΡΟΛΟΓΑ',
            'cosmote_street_name' => 'ΩΡΟΛΟΓΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            102 => 
            array (
                'id' => 1246,
                'postal_code_id' => 48,
                'name' => 'ΑΛΑΣΤΟΡΟΣ',
            'cosmote_street_name' => 'ΑΛΑΣΤΟΡΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            103 => 
            array (
                'id' => 1247,
                'postal_code_id' => 48,
                'name' => 'ΑΛΦΕΙΟΥ',
            'cosmote_street_name' => 'ΑΛΦΕΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            104 => 
            array (
                'id' => 1248,
                'postal_code_id' => 48,
                'name' => 'ΑΜΠΕΛΑΚΙΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            105 => 
            array (
                'id' => 1249,
                'postal_code_id' => 48,
                'name' => 'ΑΜΥΚΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            106 => 
            array (
                'id' => 1250,
                'postal_code_id' => 48,
                'name' => 'ΑΜΦΕΙΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            107 => 
            array (
                'id' => 1251,
                'postal_code_id' => 48,
                'name' => 'ΑΝΔΡΕΑ ΚΑΛΒΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            108 => 
            array (
                'id' => 1252,
                'postal_code_id' => 48,
                'name' => 'ΑΝΔΡΕΑ ΣΦΑΕΛΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            109 => 
            array (
                'id' => 1253,
                'postal_code_id' => 48,
                'name' => 'ΑΝΗΦΟΡΙΤΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            110 => 
            array (
                'id' => 1254,
                'postal_code_id' => 48,
                'name' => 'ΑΡΑΚΛΩΒΟΥ',
            'cosmote_street_name' => 'ΑΡΑΚΛΩΒΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            111 => 
            array (
                'id' => 1255,
                'postal_code_id' => 48,
                'name' => 'ΑΡΑΧΝΑΙΟΥ',
            'cosmote_street_name' => 'ΑΡΑΧΝΑΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            112 => 
            array (
                'id' => 1256,
                'postal_code_id' => 48,
                'name' => 'ΑΡΕΤΑΙΟΥ',
            'cosmote_street_name' => 'ΑΡΕΤΑΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            113 => 
            array (
                'id' => 1257,
                'postal_code_id' => 48,
                'name' => 'ΑΡΟΑΝΙΩΝ',
            'cosmote_street_name' => 'ΑΡΟΑΝΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            114 => 
            array (
                'id' => 1258,
                'postal_code_id' => 48,
                'name' => 'ΒΑΘΕΩΣ',
            'cosmote_street_name' => 'ΒΑΘΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            115 => 
            array (
                'id' => 1259,
                'postal_code_id' => 48,
                'name' => 'ΒΑΡΔΟΥΝΙΩΤΗ',
            'cosmote_street_name' => 'ΒΑΡΔΟΥΝΙΩΤΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            116 => 
            array (
                'id' => 1260,
                'postal_code_id' => 48,
                'name' => 'ΒΑΣΙΛΑΔΙΟΥ',
            'cosmote_street_name' => 'ΒΑΣΙΛΑΔΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            117 => 
            array (
                'id' => 1261,
                'postal_code_id' => 48,
                'name' => 'ΒΕΡΝΑΡΔΑΚΗ',
            'cosmote_street_name' => 'ΒΕΡΝΑΡΔΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            118 => 
            array (
                'id' => 1262,
                'postal_code_id' => 48,
                'name' => 'ΓΕΡΑΝΕΙΩΝ',
            'cosmote_street_name' => 'ΓΕΡΑΝΕΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            119 => 
            array (
                'id' => 1263,
                'postal_code_id' => 48,
                'name' => 'ΓΕΩΡΓΙΟΥ ΚΕΔΡΗΝΟΥ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΚΕΔΡΗΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            120 => 
            array (
                'id' => 1264,
                'postal_code_id' => 48,
                'name' => 'ΓΕΩΡΓΙΟΥ ΚΙΤΣΟΥ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΚΙΤΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            121 => 
            array (
                'id' => 1265,
                'postal_code_id' => 48,
                'name' => 'ΓΕΩΡΓΙΟΥ ΣΑΡΑΚΙΩΤΗ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΣΑΡΑΚΙΩΤΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            122 => 
            array (
                'id' => 1266,
                'postal_code_id' => 48,
                'name' => 'ΓΟΥΖΙΟΥ ΖΟΥΚΑ',
            'cosmote_street_name' => 'ΓΟΥΖΙΟΥ ΖΟΥΚΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            123 => 
            array (
                'id' => 1267,
                'postal_code_id' => 48,
                'name' => 'Δ. ΑΥΓΕΡΙΝΟΥ',
            'cosmote_street_name' => 'Δ. ΑΥΓΕΡΙΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            124 => 
            array (
                'id' => 1268,
                'postal_code_id' => 48,
                'name' => 'ΔΕΓΛΕΡΗ',
            'cosmote_street_name' => 'ΔΕΓΛΕΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            125 => 
            array (
                'id' => 1269,
                'postal_code_id' => 48,
                'name' => 'ΔΗΜΗΤΣΑΝΑΣ',
            'cosmote_street_name' => 'ΔΗΜΗΤΣΑΝΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            126 => 
            array (
                'id' => 1270,
                'postal_code_id' => 48,
                'name' => 'ΔΗΜΟΥ ΣΚΑΛΤΣΑ',
            'cosmote_street_name' => 'ΔΗΜΟΥ ΣΚΑΛΤΣΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            127 => 
            array (
                'id' => 1271,
                'postal_code_id' => 48,
                'name' => 'ΔΗΜΟΥ ΤΣΕΛΙΟΥ',
            'cosmote_street_name' => 'ΔΗΜΟΥ ΤΣΕΛΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            128 => 
            array (
                'id' => 1272,
                'postal_code_id' => 48,
                'name' => 'ΕΛΛΗΣ ΛΑΜΠΕΤΗ',
            'cosmote_street_name' => 'ΕΛΛΗΣ ΛΑΜΠΕΤΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            129 => 
            array (
                'id' => 1273,
                'postal_code_id' => 48,
                'name' => 'ΕΥΠΑΤΟΡΙΑΣ',
            'cosmote_street_name' => 'ΕΥΠΑΤΟΡΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            130 => 
            array (
                'id' => 1274,
                'postal_code_id' => 48,
                'name' => 'ΖΑΒΙΡΑ',
            'cosmote_street_name' => 'ΖΑΒΙΡΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            131 => 
            array (
                'id' => 1275,
                'postal_code_id' => 48,
                'name' => 'ΗΡΑΚΛΗ ΓΙΑΤΑΓΑΝΑ',
            'cosmote_street_name' => 'ΗΡΑΚΛΗ ΓΙΑΤΑΓΑΝΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            132 => 
            array (
                'id' => 1276,
                'postal_code_id' => 48,
                'name' => 'ΙΚΑΡΙΑΣ',
            'cosmote_street_name' => 'ΙΚΑΡΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            133 => 
            array (
                'id' => 1277,
                'postal_code_id' => 48,
                'name' => 'ΚΟΛΧΙΔΟΣ',
            'cosmote_street_name' => 'ΚΟΛΧΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            134 => 
            array (
                'id' => 1278,
                'postal_code_id' => 48,
                'name' => 'ΚΟΥΡΜΑ',
            'cosmote_street_name' => 'ΚΟΥΡΜΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            135 => 
            array (
                'id' => 1279,
                'postal_code_id' => 48,
                'name' => 'ΚΟΥΤΣΙΚΑΡΗ',
            'cosmote_street_name' => 'ΚΟΥΤΣΙΚΑΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            136 => 
            array (
                'id' => 1280,
                'postal_code_id' => 48,
                'name' => 'ΚΥΡΙΛΛΟΥ ΛΟΥΚΑΡΕΩΣ',
            'cosmote_street_name' => 'ΚΥΡΙΛΛΟΥ ΛΟΥΚΑΡΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            137 => 
            array (
                'id' => 1281,
                'postal_code_id' => 48,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΛΩΡΗ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΛΩΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            138 => 
            array (
                'id' => 1282,
                'postal_code_id' => 48,
                'name' => 'ΛΕΩΦΟΡΟΣ ΑΛΕΞΑΝΔΡΑΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΑΛΕΞΑΝΔΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            139 => 
            array (
                'id' => 1283,
                'postal_code_id' => 48,
                'name' => 'ΜΑΚΡΥΝΙΤΣΑΣ',
            'cosmote_street_name' => 'ΜΑΚΡΥΝΙΤΣΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:50',
            ),
            140 => 
            array (
                'id' => 1284,
                'postal_code_id' => 48,
                'name' => 'ΜΕΓΑΛΟΥ ΣΠΗΛΑΙΟΥ',
            'cosmote_street_name' => 'ΜΕΓΑΛΟΥ ΣΠΗΛΑΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            141 => 
            array (
                'id' => 1285,
                'postal_code_id' => 48,
                'name' => 'ΜΕΝΕΜΕΝΗΣ',
            'cosmote_street_name' => 'ΜΕΝΕΜΕΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            142 => 
            array (
                'id' => 1286,
                'postal_code_id' => 48,
                'name' => 'ΜΕΣΗΜΒΡΙΑΣ',
            'cosmote_street_name' => 'ΜΕΣΗΜΒΡΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            143 => 
            array (
                'id' => 1287,
                'postal_code_id' => 48,
                'name' => 'ΜΗΛΕΩΝ',
            'cosmote_street_name' => 'ΜΗΛΕΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            144 => 
            array (
                'id' => 1288,
                'postal_code_id' => 48,
                'name' => 'ΜΟΣΧΟΒΙΤΟΥ',
            'cosmote_street_name' => 'ΜΟΣΧΟΒΙΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            145 => 
            array (
                'id' => 1289,
                'postal_code_id' => 48,
                'name' => 'ΜΠΑΤΑΡΙΑ',
            'cosmote_street_name' => 'ΜΠΑΤΑΡΙΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            146 => 
            array (
                'id' => 1290,
                'postal_code_id' => 48,
                'name' => 'ΜΠΟΥΑΙΩΝ',
            'cosmote_street_name' => 'ΜΠΟΥΑΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            147 => 
            array (
                'id' => 1291,
                'postal_code_id' => 48,
                'name' => 'ΝΙΚΟΛΑΟΥ ΣΟΛΙΩΤΗ',
            'cosmote_street_name' => 'ΝΙΚΟΛΑΟΥ ΣΟΛΙΩΤΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            148 => 
            array (
                'id' => 1292,
                'postal_code_id' => 48,
                'name' => 'ΝΩΝΑΚΡΙΔΟΣ',
            'cosmote_street_name' => 'ΝΩΝΑΚΡΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            149 => 
            array (
                'id' => 1293,
                'postal_code_id' => 48,
                'name' => 'ΟΧΗΣ',
            'cosmote_street_name' => 'ΟΧΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            150 => 
            array (
                'id' => 1294,
                'postal_code_id' => 48,
                'name' => 'ΠΑΝΟΡΜΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            151 => 
            array (
                'id' => 1295,
                'postal_code_id' => 48,
                'name' => 'ΠΑΠΑΖΩΛΗ',
            'cosmote_street_name' => 'ΠΑΠΑΖΩΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            152 => 
            array (
                'id' => 1296,
                'postal_code_id' => 48,
                'name' => 'ΠΑΠΑΡΣΕΝΗ',
            'cosmote_street_name' => 'ΠΑΠΑΡΣΕΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            153 => 
            array (
                'id' => 1297,
                'postal_code_id' => 48,
                'name' => 'ΠΑΡΟΔΟΣ ΠΑΝΟΡΜΟΥ',
            'cosmote_street_name' => 'ΠΑΡΟΔΟΣ ΠΑΝΟΡΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            154 => 
            array (
                'id' => 1298,
                'postal_code_id' => 48,
                'name' => 'ΠΕΡΑΜΟΥ',
            'cosmote_street_name' => 'ΠΕΡΑΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            155 => 
            array (
                'id' => 1299,
                'postal_code_id' => 48,
                'name' => 'ΠΡΙΗΝΗΣ',
            'cosmote_street_name' => 'ΠΡΙΗΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            156 => 
            array (
                'id' => 1300,
                'postal_code_id' => 48,
                'name' => 'ΠΡΟΥΣΟΥ',
            'cosmote_street_name' => 'ΠΡΟΥΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            157 => 
            array (
                'id' => 1301,
                'postal_code_id' => 48,
                'name' => 'ΠΩΓΩΝΙΑΝΗΣ',
            'cosmote_street_name' => 'ΠΩΓΩΝΙΑΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            158 => 
            array (
                'id' => 1302,
                'postal_code_id' => 48,
                'name' => 'ΣΑΜΨΟΥΝΤΟΣ',
            'cosmote_street_name' => 'ΣΑΜΨΟΥΝΤΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            159 => 
            array (
                'id' => 1303,
                'postal_code_id' => 48,
                'name' => 'ΣΙΘΩΝΙΑΣ',
            'cosmote_street_name' => 'ΣΙΘΩΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            160 => 
            array (
                'id' => 1304,
                'postal_code_id' => 48,
                'name' => 'ΣΙΜΟΠΟΥΛΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            161 => 
            array (
                'id' => 1305,
                'postal_code_id' => 48,
                'name' => 'ΣΠΥΡΙΔΟΓΙΑΝΝΗ',
            'cosmote_street_name' => 'ΣΠΥΡΙΔΟΓΙΑΝΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            162 => 
            array (
                'id' => 1306,
                'postal_code_id' => 48,
                'name' => 'ΣΤΑΓΕΙΡΩΝ',
            'cosmote_street_name' => 'ΣΤΑΓΕΙΡΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            163 => 
            array (
                'id' => 1307,
                'postal_code_id' => 48,
                'name' => 'ΣΤΥΛΙΑΝΟΥ ΛΑΙΟΥ',
            'cosmote_street_name' => 'ΣΤΥΛΙΑΝΟΥ ΛΑΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            164 => 
            array (
                'id' => 1308,
                'postal_code_id' => 48,
                'name' => 'ΤΥΑΝΩΝ',
            'cosmote_street_name' => 'ΤΥΑΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            165 => 
            array (
                'id' => 1309,
                'postal_code_id' => 48,
                'name' => 'ΦΘΙΩΤΙΔΟΣ',
            'cosmote_street_name' => 'ΦΘΙΩΤΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            166 => 
            array (
                'id' => 1310,
                'postal_code_id' => 48,
                'name' => 'ΦΙΛΙΠΠΟΥ ΠΛΥΤΑ',
            'cosmote_street_name' => 'ΦΙΛΙΠΠΟΥ ΠΛΥΤΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            167 => 
            array (
                'id' => 1311,
                'postal_code_id' => 48,
                'name' => 'ΧΟΡΜΟΠΟΥΛΟΥ',
            'cosmote_street_name' => 'ΧΟΡΜΟΠΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            168 => 
            array (
                'id' => 1312,
                'postal_code_id' => 48,
                'name' => 'ΩΡΙΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            169 => 
            array (
                'id' => 1313,
                'postal_code_id' => 49,
                'name' => 'ΑΙΤΩΛΙΑΣ',
            'cosmote_street_name' => 'ΑΙΤΩΛΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            170 => 
            array (
                'id' => 1314,
                'postal_code_id' => 49,
                'name' => 'ΑΛΕΞΑΝΔΡΟΥ ΠΑΥΛΗ',
            'cosmote_street_name' => 'ΑΛΕΞΑΝΔΡΟΥ ΠΑΥΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            171 => 
            array (
                'id' => 1315,
                'postal_code_id' => 49,
                'name' => 'ΑΛΙΣΤΡΑΤΗΣ',
            'cosmote_street_name' => 'ΑΛΙΣΤΡΑΤΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            172 => 
            array (
                'id' => 1316,
                'postal_code_id' => 49,
                'name' => 'ΑΜΑΛΙΑΔΟΣ',
            'cosmote_street_name' => 'ΑΜΑΛΙΑΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            173 => 
            array (
                'id' => 1317,
                'postal_code_id' => 49,
                'name' => 'ΑΡΓΟΛΙΔΟΣ',
            'cosmote_street_name' => 'ΑΡΓΟΛΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            174 => 
            array (
                'id' => 1318,
                'postal_code_id' => 49,
                'name' => 'ΑΡΤΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            175 => 
            array (
                'id' => 1319,
                'postal_code_id' => 49,
                'name' => 'ΑΧΑΙΑΣ',
            'cosmote_street_name' => 'ΑΧΑΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            176 => 
            array (
                'id' => 1320,
                'postal_code_id' => 49,
                'name' => 'ΒΑΤΟΠΕΔΙΟΥ',
            'cosmote_street_name' => 'ΒΑΤΟΠΕΔΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            177 => 
            array (
                'id' => 1321,
                'postal_code_id' => 49,
                'name' => 'ΒΕΛΕΣΤΙΝΟΥ',
            'cosmote_street_name' => 'ΒΕΛΕΣΤΙΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            178 => 
            array (
                'id' => 1322,
                'postal_code_id' => 49,
                'name' => 'ΒΥΤΙΝΗΣ',
            'cosmote_street_name' => 'ΒΥΤΙΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            179 => 
            array (
                'id' => 1323,
                'postal_code_id' => 49,
                'name' => 'ΓΕΡΜΑΝΟΥ ΚΑΡΑΒΑΓΓΕΛΗ',
            'cosmote_street_name' => 'ΓΕΡΜΑΝΟΥ ΚΑΡΑΒΑΓΓΕΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            180 => 
            array (
                'id' => 1324,
                'postal_code_id' => 49,
                'name' => 'ΓΥΘΕΙΟΥ',
            'cosmote_street_name' => 'ΓΥΘΕΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            181 => 
            array (
                'id' => 1325,
                'postal_code_id' => 49,
                'name' => 'ΔΟΥΚΙΣΣΗΣ ΠΛΑΚΕΝΤΙΑΣ',
            'cosmote_street_name' => 'ΔΟΥΚΙΣΣΗΣ ΠΛΑΚΕΝΤΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            182 => 
            array (
                'id' => 1326,
                'postal_code_id' => 49,
                'name' => 'ΕΣΛΙΝ',
            'cosmote_street_name' => 'ΕΣΛΙΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            183 => 
            array (
                'id' => 1327,
                'postal_code_id' => 49,
                'name' => 'ΗΛΙΑ ΚΟΡΜΑ',
            'cosmote_street_name' => 'ΗΛΙΑ ΚΟΡΜΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            184 => 
            array (
                'id' => 1328,
                'postal_code_id' => 49,
                'name' => 'ΘΕΟΦΑΝΟΥΣ',
            'cosmote_street_name' => 'ΘΕΟΦΑΝΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            185 => 
            array (
                'id' => 1329,
                'postal_code_id' => 49,
                'name' => 'ΙΤΕΑΣ',
            'cosmote_street_name' => 'ΙΤΕΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            186 => 
            array (
                'id' => 1330,
                'postal_code_id' => 49,
                'name' => 'ΚΑΠΕΤΑΝ ΠΕΤΡΟΥΤΣΟΥ',
            'cosmote_street_name' => 'ΚΑΠΕΤΑΝ ΠΕΤΡΟΥΤΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            187 => 
            array (
                'id' => 1331,
                'postal_code_id' => 49,
                'name' => 'ΚΑΡΥΣΤΟΥ',
            'cosmote_street_name' => 'ΚΑΡΥΣΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            188 => 
            array (
                'id' => 1332,
                'postal_code_id' => 49,
                'name' => 'ΚΙΡΡΑΣ',
            'cosmote_street_name' => 'ΚΙΡΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            189 => 
            array (
                'id' => 1333,
                'postal_code_id' => 49,
                'name' => 'ΛΑΚΕΔΑΙΜΟΝΟΣ',
            'cosmote_street_name' => 'ΛΑΚΕΔΑΙΜΟΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            190 => 
            array (
                'id' => 1334,
                'postal_code_id' => 49,
                'name' => 'ΛΑΚΩΝΙΑΣ',
            'cosmote_street_name' => 'ΛΑΚΩΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            191 => 
            array (
                'id' => 1335,
                'postal_code_id' => 49,
                'name' => 'ΛΑΜΙΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            192 => 
            array (
                'id' => 1336,
                'postal_code_id' => 49,
                'name' => 'ΛΑΡΙΣΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            193 => 
            array (
                'id' => 1337,
                'postal_code_id' => 49,
                'name' => 'ΛΕΩΦΟΡΟΣ ΑΛΕΞΑΝΔΡΑΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΑΛΕΞΑΝΔΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            194 => 
            array (
                'id' => 1338,
                'postal_code_id' => 49,
                'name' => 'ΛΕΩΦΟΡΟΣ ΚΗΦΙΣΙΑΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΚΗΦΙΣΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            195 => 
            array (
                'id' => 1339,
                'postal_code_id' => 49,
                'name' => 'ΛΟΥΔΙΑ',
            'cosmote_street_name' => 'ΛΟΥΔΙΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            196 => 
            array (
                'id' => 1340,
                'postal_code_id' => 49,
                'name' => 'ΛΟΥΙΖΗΣ ΡΙΑΝΚΟΥΡ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            197 => 
            array (
                'id' => 1341,
                'postal_code_id' => 49,
                'name' => 'ΜΙΚΡΟΜΑΝΗΣ',
            'cosmote_street_name' => 'ΜΙΚΡΟΜΑΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            198 => 
            array (
                'id' => 1342,
                'postal_code_id' => 49,
                'name' => 'ΜΠΙΖΑΝΙΟΥ',
            'cosmote_street_name' => 'ΜΠΙΖΑΝΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            199 => 
            array (
                'id' => 1343,
                'postal_code_id' => 49,
                'name' => 'ΟΡΕΩΝ',
            'cosmote_street_name' => 'ΟΡΕΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            200 => 
            array (
                'id' => 1344,
                'postal_code_id' => 49,
                'name' => 'ΠΑΝΟΡΜΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            201 => 
            array (
                'id' => 1345,
                'postal_code_id' => 49,
                'name' => 'ΠΑΡΟΔΟΣ ΠΟΥΛΙΟΥ',
            'cosmote_street_name' => 'ΠΑΡΟΔΟΣ ΠΟΥΛΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            202 => 
            array (
                'id' => 1346,
                'postal_code_id' => 49,
            'name' => 'ΠΛΑΤΕΙΑ ΑΓΙΟΥ ΔΗΜΗΤΡΙΟΥ (ΠΡΧ ΠΑΝΟΡΜΟΥ)',
            'cosmote_street_name' => 'ΠΛΑΤΕΙΑ ΑΓΙΟΥ ΔΗΜΗΤΡΙΟΥ (ΠΡΧ ΠΑΝΟΡΜΟΥ) (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            203 => 
            array (
                'id' => 1347,
                'postal_code_id' => 49,
                'name' => 'ΠΟΡΤΑΡΙΑΣ',
            'cosmote_street_name' => 'ΠΟΡΤΑΡΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            204 => 
            array (
                'id' => 1348,
                'postal_code_id' => 49,
                'name' => 'ΠΟΥΛΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            205 => 
            array (
                'id' => 1349,
                'postal_code_id' => 49,
                'name' => 'ΤΣΑΓΚΑΡΑΔΑΣ',
            'cosmote_street_name' => 'ΤΣΑΓΚΑΡΑΔΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            206 => 
            array (
                'id' => 1350,
                'postal_code_id' => 49,
                'name' => 'ΦΘΙΩΤΙΔΟΣ',
            'cosmote_street_name' => 'ΦΘΙΩΤΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            207 => 
            array (
                'id' => 1351,
                'postal_code_id' => 49,
                'name' => 'ΧΑΙΔΑΡΙΟΥ',
            'cosmote_street_name' => 'ΧΑΙΔΑΡΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            208 => 
            array (
                'id' => 1352,
                'postal_code_id' => 50,
                'name' => 'ΑΛΕΞΑΝΔΡΟΥ ΠΑΥΛΗ',
            'cosmote_street_name' => 'ΑΛΕΞΑΝΔΡΟΥ ΠΑΥΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            209 => 
            array (
                'id' => 1353,
                'postal_code_id' => 50,
                'name' => 'ΑΧΑΙΑΣ',
            'cosmote_street_name' => 'ΑΧΑΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            210 => 
            array (
                'id' => 1354,
                'postal_code_id' => 50,
                'name' => 'ΒΑΣΙΛΕΙΟΥ ΛΑΚΩΝΟΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            211 => 
            array (
                'id' => 1355,
                'postal_code_id' => 50,
                'name' => 'ΒΑΣΙΛΗ ΛΟΓΟΘΕΤΙΔΗ',
            'cosmote_street_name' => 'ΒΑΣΙΛΗ ΛΟΓΟΘΕΤΙΔΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            212 => 
            array (
                'id' => 1356,
                'postal_code_id' => 50,
                'name' => 'ΓΕΩΡΓΙΟΥ ΒΟΥΡΗ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΒΟΥΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            213 => 
            array (
                'id' => 1357,
                'postal_code_id' => 50,
                'name' => 'ΓΕΩΡΓΙΟΥ ΚΟΝΟΠΙΣΟΠΟΥΛΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            214 => 
            array (
                'id' => 1358,
                'postal_code_id' => 50,
                'name' => 'ΔΟΥΚΙΣΣΗΣ ΠΛΑΚΕΝΤΙΑΣ',
            'cosmote_street_name' => 'ΔΟΥΚΙΣΣΗΣ ΠΛΑΚΕΝΤΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            215 => 
            array (
                'id' => 1359,
                'postal_code_id' => 50,
                'name' => 'ΕΙΡΗΝΗΣ ΛΑΣΚΑΡΙΔΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            216 => 
            array (
                'id' => 1360,
                'postal_code_id' => 50,
                'name' => 'ΕΥΡΥΤΑΝΙΑΣ',
            'cosmote_street_name' => 'ΕΥΡΥΤΑΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            217 => 
            array (
                'id' => 1361,
                'postal_code_id' => 50,
                'name' => 'ΕΥΣΤΑΘΙΟΥ ΛΑΜΨΑ',
            'cosmote_street_name' => 'ΕΥΣΤΑΘΙΟΥ ΛΑΜΨΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            218 => 
            array (
                'id' => 1362,
                'postal_code_id' => 50,
                'name' => 'ΖΩΧΙΟΥ',
            'cosmote_street_name' => 'ΟΔΥΣΣΕΑ ΖΩΧΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            219 => 
            array (
                'id' => 1363,
                'postal_code_id' => 50,
                'name' => 'ΙΩΑΝΝΗ ΛΑΖΑΡΙΜΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            220 => 
            array (
                'id' => 1364,
                'postal_code_id' => 50,
                'name' => 'ΙΩΑΝΝΟΥ ΠΑΓΚΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            221 => 
            array (
                'id' => 1365,
                'postal_code_id' => 50,
                'name' => 'ΙΩΑΝΝΟΥ ΣΕΧΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            222 => 
            array (
                'id' => 1366,
                'postal_code_id' => 50,
                'name' => 'ΙΩΣΗΠΟΥ ΜΟΙΣΙΟΔΑΚΟΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            223 => 
            array (
                'id' => 1367,
                'postal_code_id' => 50,
                'name' => 'ΚΑΛΑΥΡΙΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            224 => 
            array (
                'id' => 1368,
                'postal_code_id' => 50,
                'name' => 'ΚΑΡΥΣΤΟΥ',
            'cosmote_street_name' => 'ΚΑΡΥΣΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            225 => 
            array (
                'id' => 1369,
                'postal_code_id' => 50,
                'name' => 'ΛΑΚΡΑΤΟΥΣ',
            'cosmote_street_name' => 'ΛΑΚΡΑΤΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            226 => 
            array (
                'id' => 1370,
                'postal_code_id' => 50,
                'name' => 'ΛΑΡΙΣΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            227 => 
            array (
                'id' => 1371,
                'postal_code_id' => 50,
                'name' => 'ΛΕΩΦΟΡΟΣ ΚΗΦΙΣΙΑΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΚΗΦΙΣΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            228 => 
            array (
                'id' => 1372,
                'postal_code_id' => 50,
                'name' => 'ΛΟΥΙΖΗΣ ΡΙΑΝΚΟΥΡ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            229 => 
            array (
                'id' => 1373,
                'postal_code_id' => 50,
                'name' => 'ΛΟΥΚΑ ΜΠΕΛΛΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            230 => 
            array (
                'id' => 1374,
                'postal_code_id' => 50,
                'name' => 'ΜΑΙΑΝΔΡΟΥΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΜΑΙΑΝΔΡΟΥΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            231 => 
            array (
                'id' => 1375,
                'postal_code_id' => 50,
                'name' => 'ΜΑΡΙΝΟΥ ΓΕΡΟΥΛΑΝΟΥ',
            'cosmote_street_name' => 'ΜΑΡΙΝΟΥ ΓΕΡΟΥΛΑΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            232 => 
            array (
                'id' => 1376,
                'postal_code_id' => 50,
                'name' => 'ΜΙΧΑΗΛ ΧΑΤΖΗΚΩΝΣΤΑΝΤΗ',
            'cosmote_street_name' => 'ΜΙΧΑΗΛ ΧΑΤΖΗΚΩΝΣΤΑΝΤΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            233 => 
            array (
                'id' => 1377,
                'postal_code_id' => 50,
                'name' => 'ΝΙΚΟΛΑΟΥ ΓΕΝΝΗΜΑΤΑ',
            'cosmote_street_name' => 'ΝΙΚΟΛΑΟΥ ΓΕΝΝΗΜΑΤΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            234 => 
            array (
                'id' => 1378,
                'postal_code_id' => 50,
                'name' => 'ΠΑΝΟΡΜΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-01 15:58:06',
            ),
            235 => 
            array (
                'id' => 1379,
                'postal_code_id' => 50,
                'name' => 'ΣΠΥΡΟΥ ΒΙΚΑΤΟΥ',
            'cosmote_street_name' => 'ΣΠΥΡΟΥ ΒΙΚΑΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            236 => 
            array (
                'id' => 1380,
                'postal_code_id' => 50,
                'name' => 'ΣΥΝΟΙΚΙΣΜΟΣ ΓΗΡΟΚΟΜΕΙΟΥ',
            'cosmote_street_name' => 'ΣΥΝΟΙΚΙΣΜΟΣ ΓΗΡΟΚΟΜΕΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            237 => 
            array (
                'id' => 1381,
                'postal_code_id' => 50,
                'name' => 'ΤΡΙΦΥΛΙΑΣ',
            'cosmote_street_name' => 'ΤΡΙΦΥΛΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            238 => 
            array (
                'id' => 1382,
                'postal_code_id' => 51,
                'name' => 'ΑΙΤΩΛΙΑΣ',
            'cosmote_street_name' => 'ΑΙΤΩΛΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:06',
                'updated_at' => '2024-02-02 14:20:51',
            ),
            239 => 
            array (
                'id' => 1383,
                'postal_code_id' => 51,
                'name' => 'ΑΚΑΡΝΑΝΙΑΣ',
            'cosmote_street_name' => 'ΑΚΑΡΝΑΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            240 => 
            array (
                'id' => 1384,
                'postal_code_id' => 51,
                'name' => 'ΑΡΚΑΔΙΑΣ',
            'cosmote_street_name' => 'ΑΡΚΑΔΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            241 => 
            array (
                'id' => 1385,
                'postal_code_id' => 51,
                'name' => 'ΑΣΤΡΑΠΟΓΙΑΝΝΟΥ',
            'cosmote_street_name' => 'ΑΣΤΡΑΠΟΓΙΑΝΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            242 => 
            array (
                'id' => 1386,
                'postal_code_id' => 51,
                'name' => 'ΒΑΛΤΟΥ',
            'cosmote_street_name' => 'ΒΑΛΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            243 => 
            array (
                'id' => 1387,
                'postal_code_id' => 51,
                'name' => 'ΒΟΙΩΤΙΑΣ',
            'cosmote_street_name' => 'ΒΟΙΩΤΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            244 => 
            array (
                'id' => 1388,
                'postal_code_id' => 51,
                'name' => 'ΔΑΣΙΟΥ',
            'cosmote_street_name' => 'ΔΑΣΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            245 => 
            array (
                'id' => 1389,
                'postal_code_id' => 51,
                'name' => 'ΔΑΣΚΑΛΑΚΗ',
            'cosmote_street_name' => 'ΔΑΣΚΑΛΑΚΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            246 => 
            array (
                'id' => 1390,
                'postal_code_id' => 51,
                'name' => 'ΔΗΜΗΤΡΙΟΥ ΚΑΖΑΝΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            247 => 
            array (
                'id' => 1391,
                'postal_code_id' => 51,
                'name' => 'ΔΗΜΟΣΘΕΝΟΥΣ ΡΟΥΣΣΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            248 => 
            array (
                'id' => 1392,
                'postal_code_id' => 51,
                'name' => 'ΕΡΥΘΡΟΥ ΣΤΑΥΡΟΥ',
            'cosmote_street_name' => 'ΕΡΥΘΡΟΥ ΣΤΑΥΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            249 => 
            array (
                'id' => 1393,
                'postal_code_id' => 51,
                'name' => 'ΕΣΤΙΑΣ',
            'cosmote_street_name' => 'ΕΣΤΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            250 => 
            array (
                'id' => 1394,
                'postal_code_id' => 51,
                'name' => 'ΗΛΙΑ ΜΟΣΧΟΥ',
            'cosmote_street_name' => 'ΗΛΙΑ ΜΟΣΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            251 => 
            array (
                'id' => 1395,
                'postal_code_id' => 51,
                'name' => 'ΗΛΙΔΟΣ',
            'cosmote_street_name' => 'ΗΛΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            252 => 
            array (
                'id' => 1396,
                'postal_code_id' => 51,
                'name' => 'ΘΕΟΔΩΡΟΥ ΠΕΖΟΠΟΥΛΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            253 => 
            array (
                'id' => 1397,
                'postal_code_id' => 51,
                'name' => 'ΘΩΜΑ ΝΙΚΗΤΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            254 => 
            array (
                'id' => 1398,
                'postal_code_id' => 51,
                'name' => 'ΙΩΑΝΝΟΥ ΑΘΑΝΑΣΑΚΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            255 => 
            array (
                'id' => 1399,
                'postal_code_id' => 51,
                'name' => 'ΚΑΛΑΜΩΝ',
            'cosmote_street_name' => 'ΚΑΛΑΜΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            256 => 
            array (
                'id' => 1400,
                'postal_code_id' => 51,
                'name' => 'ΚΑΝΔΑΝΟΥ',
            'cosmote_street_name' => 'ΚΑΝΔΑΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            257 => 
            array (
                'id' => 1401,
                'postal_code_id' => 51,
                'name' => 'ΚΟΜΟΤΗΝΗΣ',
            'cosmote_street_name' => 'ΚΟΜΟΤΗΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            258 => 
            array (
                'id' => 1402,
                'postal_code_id' => 51,
                'name' => 'ΚΟΡΙΝΘΙΑΣ',
            'cosmote_street_name' => 'ΚΟΡΙΝΘΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            259 => 
            array (
                'id' => 1403,
                'postal_code_id' => 51,
                'name' => 'ΚΡΙΜΑΙΑΣ',
            'cosmote_street_name' => 'ΚΡΙΜΑΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            260 => 
            array (
                'id' => 1404,
                'postal_code_id' => 51,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΒΟΛΑΝΑΚΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            261 => 
            array (
                'id' => 1405,
                'postal_code_id' => 51,
                'name' => 'ΛΕΩΦΟΡΟΣ ΒΑΣΙΛΙΣΣΗΣ ΣΟΦΙΑΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΒΑΣΙΛΙΣΣΗΣ ΣΟΦΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            262 => 
            array (
                'id' => 1406,
                'postal_code_id' => 51,
                'name' => 'ΛΕΩΦΟΡΟΣ ΚΗΦΙΣΙΑΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΚΗΦΙΣΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            263 => 
            array (
                'id' => 1407,
                'postal_code_id' => 51,
                'name' => 'ΛΕΩΦΟΡΟΣ ΜΕΣΟΓΕΙΩΝ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΜΕΣΟΓΕΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            264 => 
            array (
                'id' => 1408,
                'postal_code_id' => 51,
                'name' => 'ΜΑΘΙΟΥ ΜΑΚΚΑ',
            'cosmote_street_name' => 'ΜΑΘΙΟΥ ΜΑΚΚΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            265 => 
            array (
                'id' => 1409,
                'postal_code_id' => 51,
                'name' => 'ΜΑΡΙΝΟΥ ΚΟΡΓΙΑΛΕΝΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            266 => 
            array (
                'id' => 1410,
                'postal_code_id' => 51,
                'name' => 'ΜΕΣΣΗΝΙΑΣ',
            'cosmote_street_name' => 'ΜΕΣΣΗΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            267 => 
            array (
                'id' => 1411,
                'postal_code_id' => 51,
                'name' => 'ΜΟΝΗΣ ΚΥΚΚΟΥ',
            'cosmote_street_name' => 'ΜΟΝΗΣ ΚΥΚΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            268 => 
            array (
                'id' => 1412,
                'postal_code_id' => 51,
                'name' => 'ΜΥΛΟΠΟΤΑΜΟΥ',
            'cosmote_street_name' => 'ΜΥΛΟΠΟΤΑΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            269 => 
            array (
                'id' => 1413,
                'postal_code_id' => 51,
                'name' => 'ΝΙΚΟΛΑΟΥ ΤΣΟΤΑΚΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            270 => 
            array (
                'id' => 1414,
                'postal_code_id' => 51,
            'name' => 'ΞΗΡΟΜΕΡΟΥ (ΠΡΧ ΕΡΥΘΡΟΣ ΣΤΑΥΡΟΣ)',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            271 => 
            array (
                'id' => 1415,
                'postal_code_id' => 51,
                'name' => 'ΣΕΒΑΣΤΟΥΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΣΕΒΑΣΤΟΥΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            272 => 
            array (
                'id' => 1416,
                'postal_code_id' => 51,
                'name' => 'ΣΟΦΙΑΣ ΣΛΗΜΑΝ',
            'cosmote_street_name' => 'ΣΟΦΙΑΣ ΣΛΗΜΑΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            273 => 
            array (
                'id' => 1417,
                'postal_code_id' => 51,
                'name' => 'ΣΥΝΤΑΓΜΑΤΑΡΧΟΥ ΚΩΝΣΤΑΝΤΙΝΟΥ ΔΑΒΑΚΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            274 => 
            array (
                'id' => 1418,
                'postal_code_id' => 51,
                'name' => 'ΤΡΙΚΑΛΩΝ',
            'cosmote_street_name' => 'ΤΡΙΚΑΛΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            275 => 
            array (
                'id' => 1419,
                'postal_code_id' => 51,
                'name' => 'ΥΠΑΤΗΣ',
            'cosmote_street_name' => 'ΥΠΑΤΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            276 => 
            array (
                'id' => 1420,
                'postal_code_id' => 51,
                'name' => 'ΦΕΙΔΙΠΠΙΔΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            277 => 
            array (
                'id' => 1421,
                'postal_code_id' => 51,
                'name' => 'ΦΩΚΙΔΟΣ',
            'cosmote_street_name' => 'ΦΩΚΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            278 => 
            array (
                'id' => 1422,
                'postal_code_id' => 52,
                'name' => 'ΑΓΓΕΛΟΥ ΠΥΡΡΗ',
            'cosmote_street_name' => 'ΑΓΓΕΛΟΥ ΠΥΡΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            279 => 
            array (
                'id' => 1423,
                'postal_code_id' => 52,
                'name' => 'ΑΓΙΟΥ ΘΩΜΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            280 => 
            array (
                'id' => 1424,
                'postal_code_id' => 52,
                'name' => 'ΑΕΡΟΠΟΡΟΥ ΠΑΠΑΝΑΣΤΑΣΙΟΥ',
            'cosmote_street_name' => 'ΑΕΡΟΠΟΡΟΥ ΠΑΠΑΝΑΣΤΑΣΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            281 => 
            array (
                'id' => 1425,
                'postal_code_id' => 52,
                'name' => 'ΑΙΓΙΟΥ',
            'cosmote_street_name' => 'ΑΙΓΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            282 => 
            array (
                'id' => 1426,
                'postal_code_id' => 52,
                'name' => 'ΑΛΕΞΑΝΔΡΟΥΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΑΛΕΞΑΝΔΡΟΥΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            283 => 
            array (
                'id' => 1427,
                'postal_code_id' => 52,
                'name' => 'ΑΝΔΡΕΑ ΜΙΧΑΛΑΚΟΠΟΥΛΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            284 => 
            array (
                'id' => 1428,
                'postal_code_id' => 52,
                'name' => 'ΑΡΙΣΤΟΤΕΛΗ ΖΑΧΟΥ',
            'cosmote_street_name' => 'ΑΡΙΣΤΟΤΕΛΗ ΖΑΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            285 => 
            array (
                'id' => 1429,
                'postal_code_id' => 52,
                'name' => 'ΑΡΚΑΔΙΑΣ',
            'cosmote_street_name' => 'ΑΡΚΑΔΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            286 => 
            array (
                'id' => 1430,
                'postal_code_id' => 52,
                'name' => 'ΑΥΛΙΔΟΣ',
            'cosmote_street_name' => 'ΑΥΛΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            287 => 
            array (
                'id' => 1431,
                'postal_code_id' => 52,
                'name' => 'ΒΕΡΒΑΙΝΩΝ',
            'cosmote_street_name' => 'ΒΕΡΒΑΙΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            288 => 
            array (
                'id' => 1432,
                'postal_code_id' => 52,
                'name' => 'ΒΙΓΛΑΣ',
            'cosmote_street_name' => 'ΒΙΓΛΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            289 => 
            array (
                'id' => 1433,
                'postal_code_id' => 52,
                'name' => 'ΔΗΛΟΥ',
            'cosmote_street_name' => 'ΔΗΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            290 => 
            array (
                'id' => 1434,
                'postal_code_id' => 52,
                'name' => 'ΔΗΜΗΤΡΙΟΥ ΓΟΥΛΙΑΜΟΥ',
            'cosmote_street_name' => 'ΔΗΜΗΤΡΙΟΥ ΓΟΥΛΙΑΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            291 => 
            array (
                'id' => 1435,
                'postal_code_id' => 52,
                'name' => 'ΔΙΟΝΥΣΙΟΥ ΠΥΡΡΟΥ',
            'cosmote_street_name' => 'ΔΙΟΝΥΣΙΟΥ ΠΥΡΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            292 => 
            array (
                'id' => 1436,
                'postal_code_id' => 52,
                'name' => 'ΕΒΡΟΥ',
            'cosmote_street_name' => 'ΕΒΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            293 => 
            array (
                'id' => 1437,
                'postal_code_id' => 52,
                'name' => 'ΕΥΗΝΟΥ',
            'cosmote_street_name' => 'ΕΥΗΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            294 => 
            array (
                'id' => 1438,
                'postal_code_id' => 52,
                'name' => 'ΕΥΡΩΤΑ',
            'cosmote_street_name' => 'ΕΥΡΩΤΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            295 => 
            array (
                'id' => 1439,
                'postal_code_id' => 52,
                'name' => 'ΖΑΓΟΡΑΣ',
            'cosmote_street_name' => 'ΖΑΓΟΡΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            296 => 
            array (
                'id' => 1440,
                'postal_code_id' => 52,
                'name' => 'ΖΙΧΝΗΣ',
            'cosmote_street_name' => 'ΖΙΧΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            297 => 
            array (
                'id' => 1441,
                'postal_code_id' => 52,
                'name' => 'ΗΛΙΔΟΣ',
            'cosmote_street_name' => 'ΗΛΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            298 => 
            array (
                'id' => 1442,
                'postal_code_id' => 52,
                'name' => 'ΘΗΒΩΝ',
            'cosmote_street_name' => 'ΘΗΒΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            299 => 
            array (
                'id' => 1443,
                'postal_code_id' => 52,
                'name' => 'ΙΜΙΩΝ',
            'cosmote_street_name' => 'ΙΜΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            300 => 
            array (
                'id' => 1444,
                'postal_code_id' => 52,
                'name' => 'ΙΩΑΝΝΟΥ ΠΑΠΑΔΙΑΜΑΝΤΟΠΟΥΛΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            301 => 
            array (
                'id' => 1445,
                'postal_code_id' => 52,
                'name' => 'ΚΑΙΣΑΡΕΙΑΣ',
            'cosmote_street_name' => 'ΚΑΙΣΑΡΕΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            302 => 
            array (
                'id' => 1446,
                'postal_code_id' => 52,
                'name' => 'ΚΑΡΥΟΦΥΛΛΗ',
            'cosmote_street_name' => 'ΚΑΡΥΟΦΥΛΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            303 => 
            array (
                'id' => 1447,
                'postal_code_id' => 52,
                'name' => 'ΚΟΡΙΝΘΙΑΣ',
            'cosmote_street_name' => 'ΚΟΡΙΝΘΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            304 => 
            array (
                'id' => 1448,
                'postal_code_id' => 52,
                'name' => 'ΚΟΡΩΠΙΟΥ',
            'cosmote_street_name' => 'ΚΟΡΩΠΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            305 => 
            array (
                'id' => 1449,
                'postal_code_id' => 52,
                'name' => 'ΛΕΒΑΔΕΙΑΣ',
            'cosmote_street_name' => 'ΛΕΒΑΔΕΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            306 => 
            array (
                'id' => 1450,
                'postal_code_id' => 52,
                'name' => 'ΛΕΥΚΤΡΩΝ',
            'cosmote_street_name' => 'ΛΕΥΚΤΡΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            307 => 
            array (
                'id' => 1451,
                'postal_code_id' => 52,
                'name' => 'ΛΕΩΦΟΡΟΣ ΒΑΣΙΛΙΣΣΗΣ ΣΟΦΙΑΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΒΑΣΙΛΙΣΣΗΣ ΣΟΦΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            308 => 
            array (
                'id' => 1452,
                'postal_code_id' => 52,
                'name' => 'ΛΕΩΦΟΡΟΣ ΜΕΣΟΓΕΙΩΝ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΜΕΣΟΓΕΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            309 => 
            array (
                'id' => 1453,
                'postal_code_id' => 52,
                'name' => 'ΛΕΩΦΟΡΟΣ ΠΑΝΑΓΙΩΤΗ ΚΑΝΕΛΛΟΠΟΥΛΟΥ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΠΑΝΑΓΙΩΤΗ ΚΑΝΕΛΛΟΠΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            310 => 
            array (
                'id' => 1454,
                'postal_code_id' => 52,
                'name' => 'ΛΙΘΑΚΙΑΣ',
            'cosmote_street_name' => 'ΛΙΘΑΚΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            311 => 
            array (
                'id' => 1455,
                'postal_code_id' => 52,
            'name' => 'ΛΥΔΙΑΣ (ΠΡΧ ΑΜΠΕΛΟΚΗΠΟΙ)',
            'cosmote_street_name' => 'ΛΥΔΙΑΣ (ΠΡΧ ΑΜΠΕΛΟΚΗΠΟΙ) (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            312 => 
            array (
                'id' => 1456,
                'postal_code_id' => 52,
                'name' => 'ΛΥΚΑΟΝΙΑΣ',
            'cosmote_street_name' => 'ΛΥΚΑΟΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            313 => 
            array (
                'id' => 1457,
                'postal_code_id' => 52,
                'name' => 'ΛΥΚΙΑΣ',
            'cosmote_street_name' => 'ΛΥΚΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            314 => 
            array (
                'id' => 1458,
                'postal_code_id' => 52,
                'name' => 'ΜΕΣΣΗΝΙΑΣ',
            'cosmote_street_name' => 'ΜΕΣΣΗΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            315 => 
            array (
                'id' => 1459,
                'postal_code_id' => 52,
                'name' => 'ΜΙΚΡΑΣ ΑΣΙΑΣ',
            'cosmote_street_name' => 'ΜΙΚΡΑΣ ΑΣΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            316 => 
            array (
                'id' => 1460,
                'postal_code_id' => 52,
                'name' => 'ΝΕΣΤΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            317 => 
            array (
                'id' => 1461,
                'postal_code_id' => 52,
                'name' => 'ΞΕΝΙΑΣ',
            'cosmote_street_name' => 'ΞΕΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            318 => 
            array (
                'id' => 1462,
                'postal_code_id' => 52,
                'name' => 'ΟΔΕΜΗΣΙΟΥ',
            'cosmote_street_name' => 'ΟΔΕΜΗΣΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:52',
            ),
            319 => 
            array (
                'id' => 1463,
                'postal_code_id' => 52,
                'name' => 'ΠΑΡΓΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            320 => 
            array (
                'id' => 1464,
                'postal_code_id' => 52,
                'name' => 'ΠΛΑΤΕΙΑ ΠΑΙΔΩΝ',
            'cosmote_street_name' => 'ΠΛΑΤΕΙΑ ΠΑΙΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            321 => 
            array (
                'id' => 1465,
                'postal_code_id' => 52,
                'name' => 'ΠΟΛΥΓΥΡΟΥ',
            'cosmote_street_name' => 'ΠΟΛΥΓΥΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            322 => 
            array (
                'id' => 1466,
                'postal_code_id' => 52,
                'name' => 'ΠΟΝΤΟΗΡΑΚΛΕΙΑΣ',
            'cosmote_street_name' => 'ΠΟΝΤΟΗΡΑΚΛΕΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            323 => 
            array (
                'id' => 1467,
                'postal_code_id' => 52,
                'name' => 'ΠΟΝΤΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            324 => 
            array (
                'id' => 1468,
                'postal_code_id' => 52,
                'name' => 'ΡΑΨΑΝΗΣ',
            'cosmote_street_name' => 'ΡΑΨΑΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            325 => 
            array (
                'id' => 1469,
                'postal_code_id' => 52,
                'name' => 'ΣΑΛΩΝΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            326 => 
            array (
                'id' => 1470,
                'postal_code_id' => 52,
                'name' => 'ΣΕΛΙΝΟΥΝΤΟΣ',
            'cosmote_street_name' => 'ΣΕΛΙΝΟΥΝΤΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            327 => 
            array (
                'id' => 1471,
                'postal_code_id' => 52,
                'name' => 'ΣΙΝΩΠΗΣ',
            'cosmote_street_name' => 'ΣΙΝΩΠΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            328 => 
            array (
                'id' => 1472,
                'postal_code_id' => 52,
                'name' => 'ΣΟΥΦΛΙΟΥ',
            'cosmote_street_name' => 'ΣΟΥΦΛΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            329 => 
            array (
                'id' => 1473,
                'postal_code_id' => 52,
                'name' => 'ΣΩΡΑΝΟΥ ΕΦΕΣΙΟΥ',
            'cosmote_street_name' => 'ΣΩΡΑΝΟΥ ΕΦΕΣΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            330 => 
            array (
                'id' => 1474,
                'postal_code_id' => 52,
                'name' => 'ΤΕΤΡΑΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΤΕΤΡΑΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            331 => 
            array (
                'id' => 1475,
                'postal_code_id' => 52,
                'name' => 'ΤΡΑΠΕΖΟΥΝΤΟΣ',
            'cosmote_street_name' => 'ΤΡΑΠΕΖΟΥΝΤΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            332 => 
            array (
                'id' => 1476,
                'postal_code_id' => 52,
                'name' => 'ΤΡΙΚΑΛΩΝ',
            'cosmote_street_name' => 'ΤΡΙΚΑΛΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            333 => 
            array (
                'id' => 1477,
                'postal_code_id' => 52,
                'name' => 'ΦΑΡΑΝΤΑΤΩΝ',
            'cosmote_street_name' => 'ΦΑΡΑΝΤΑΤΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            334 => 
            array (
                'id' => 1478,
                'postal_code_id' => 52,
                'name' => 'ΦΕΙΔΙΠΠΙΔΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            335 => 
            array (
                'id' => 1479,
                'postal_code_id' => 52,
                'name' => 'ΦΩΚΙΔΟΣ',
            'cosmote_street_name' => 'ΦΩΚΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            336 => 
            array (
                'id' => 1480,
                'postal_code_id' => 52,
                'name' => 'ΧΑΛΚΗΔΟΝΟΣ',
            'cosmote_street_name' => 'ΧΑΛΚΗΔΟΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            337 => 
            array (
                'id' => 1481,
                'postal_code_id' => 53,
                'name' => 'ΑΛΚΑΙΟΥ',
            'cosmote_street_name' => 'ΑΛΚΑΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            338 => 
            array (
                'id' => 1482,
                'postal_code_id' => 53,
                'name' => 'ΑΛΚΜΑΝΟΣ',
            'cosmote_street_name' => 'ΑΛΚΜΑΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            339 => 
            array (
                'id' => 1483,
                'postal_code_id' => 53,
                'name' => 'ΑΛΜΩΠΙΑΣ',
            'cosmote_street_name' => 'ΑΛΜΩΠΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            340 => 
            array (
                'id' => 1484,
                'postal_code_id' => 53,
                'name' => 'ΑΛΥΟΣ',
            'cosmote_street_name' => 'ΑΛΥΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            341 => 
            array (
                'id' => 1485,
                'postal_code_id' => 53,
                'name' => 'ΑΝΔΡΕΑ ΜΙΧΑΛΑΚΟΠΟΥΛΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            342 => 
            array (
                'id' => 1486,
                'postal_code_id' => 53,
                'name' => 'ΑΝΤΙΜΑΧΟΥ',
            'cosmote_street_name' => 'ΑΝΤΙΜΑΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            343 => 
            array (
                'id' => 1487,
                'postal_code_id' => 53,
                'name' => 'ΑΝΤΙΦΙΛΟΥ',
            'cosmote_street_name' => 'ΑΝΤΙΦΙΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            344 => 
            array (
                'id' => 1488,
                'postal_code_id' => 53,
                'name' => 'ΑΡΝΗΣ',
            'cosmote_street_name' => 'ΑΡΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            345 => 
            array (
                'id' => 1489,
                'postal_code_id' => 53,
                'name' => 'ΒΑΚΧΥΛΙΔΟΥ',
            'cosmote_street_name' => 'ΒΑΚΧΥΛΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            346 => 
            array (
                'id' => 1490,
                'postal_code_id' => 53,
                'name' => 'ΒΑΣΙΛΕΩΣ ΑΛΕΞΑΝΔΡΟΥ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΒΑΣΙΛΕΩΣ ΑΛΕΞΑΝΔΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            347 => 
            array (
                'id' => 1491,
                'postal_code_id' => 53,
                'name' => 'ΒΡΑΣΙΔΑ',
            'cosmote_street_name' => 'ΒΡΑΣΙΔΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            348 => 
            array (
                'id' => 1492,
                'postal_code_id' => 53,
                'name' => 'ΓΕΩΡΓΙΟΥ ΣΙΣΙΝΗ',
            'cosmote_street_name' => 'ΓΕΩΡΓΙΟΥ ΣΙΣΙΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            349 => 
            array (
                'id' => 1493,
                'postal_code_id' => 53,
                'name' => 'ΓΡΙΒΟΓΙΩΡΓΟΥ',
            'cosmote_street_name' => 'ΓΡΙΒΟΓΙΩΡΓΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            350 => 
            array (
                'id' => 1494,
                'postal_code_id' => 53,
                'name' => 'ΔΗΜΗΤΡΙΟΥ ΔΗΜΗΤΡΕΣΣΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            351 => 
            array (
                'id' => 1495,
                'postal_code_id' => 53,
                'name' => 'ΔΙΟΝΥΣΙΟΥ ΑΙΓΙΝΗΤΟΥ',
            'cosmote_street_name' => 'ΔΙΟΝΥΣΙΟΥ ΑΙΓΙΝΗΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            352 => 
            array (
                'id' => 1496,
                'postal_code_id' => 53,
                'name' => 'ΔΙΟΧΑΡΟΥΣ',
            'cosmote_street_name' => 'ΔΙΟΧΑΡΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            353 => 
            array (
                'id' => 1497,
                'postal_code_id' => 53,
                'name' => 'ΕΒΡΟΥ',
            'cosmote_street_name' => 'ΕΒΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            354 => 
            array (
                'id' => 1498,
                'postal_code_id' => 53,
                'name' => 'ΗΛΙΑ ΠΟΤΑΜΙΑΝΟΥ',
            'cosmote_street_name' => 'ΗΛΙΑ ΠΟΤΑΜΙΑΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            355 => 
            array (
                'id' => 1499,
                'postal_code_id' => 53,
                'name' => 'ΗΡΙΔΑΝΟΥ',
            'cosmote_street_name' => 'ΗΡΙΔΑΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            356 => 
            array (
                'id' => 1500,
                'postal_code_id' => 53,
                'name' => 'ΘΕΤΙΔΟΣ',
            'cosmote_street_name' => 'ΘΕΤΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            357 => 
            array (
                'id' => 1501,
                'postal_code_id' => 53,
                'name' => 'ΙΛΙΣΙΩΝ',
            'cosmote_street_name' => 'ΙΛΙΣΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            358 => 
            array (
                'id' => 1502,
                'postal_code_id' => 53,
                'name' => 'ΙΩΑΝΝΟΥ ΠΑΠΑΔΙΑΜΑΝΤΟΠΟΥΛΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            359 => 
            array (
                'id' => 1503,
                'postal_code_id' => 53,
                'name' => 'ΙΩΝΟΣ ΔΡΑΓΟΥΜΗ',
            'cosmote_street_name' => 'ΙΩΝΟΣ ΔΡΑΓΟΥΜΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            360 => 
            array (
                'id' => 1504,
                'postal_code_id' => 53,
                'name' => 'ΚΑΡΤΑΛΗ',
            'cosmote_street_name' => 'ΚΑΡΤΑΛΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            361 => 
            array (
                'id' => 1505,
                'postal_code_id' => 53,
                'name' => 'ΚΕΡΑΣΟΥΝΤΟΣ',
            'cosmote_street_name' => 'ΚΕΡΑΣΟΥΝΤΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            362 => 
            array (
                'id' => 1506,
                'postal_code_id' => 53,
                'name' => 'ΚΡΟΥΣΟΒΟΥ',
            'cosmote_street_name' => 'ΚΡΟΥΣΟΒΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            363 => 
            array (
                'id' => 1507,
                'postal_code_id' => 53,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΒΕΝΤΗΡΗ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΒΕΝΤΗΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            364 => 
            array (
                'id' => 1508,
                'postal_code_id' => 53,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΛΟΥΡΟΥ',
            'cosmote_street_name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥ ΛΟΥΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            365 => 
            array (
                'id' => 1509,
                'postal_code_id' => 53,
                'name' => 'ΛΑΜΨΑΚΟΥ',
            'cosmote_street_name' => 'ΛΑΜΨΑΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            366 => 
            array (
                'id' => 1510,
                'postal_code_id' => 53,
                'name' => 'ΛΑΟΔΙΚΕΙΑΣ',
            'cosmote_street_name' => 'ΛΑΟΔΙΚΕΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            367 => 
            array (
                'id' => 1511,
                'postal_code_id' => 53,
                'name' => 'ΛΕΩΦΟΡΟΣ ΒΑΣΙΛΙΣΣΗΣ ΣΟΦΙΑΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΒΑΣΙΛΙΣΣΗΣ ΣΟΦΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            368 => 
            array (
                'id' => 1512,
                'postal_code_id' => 53,
                'name' => 'ΜΑΙΑΝΔΡΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            369 => 
            array (
                'id' => 1513,
                'postal_code_id' => 53,
                'name' => 'ΜΕΡΜΠΑΚΑ',
            'cosmote_street_name' => 'ΜΕΡΜΠΑΚΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            370 => 
            array (
                'id' => 1514,
                'postal_code_id' => 53,
                'name' => 'ΝΥΜΦΑΙΟΥ',
            'cosmote_street_name' => 'ΝΥΜΦΑΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            371 => 
            array (
                'id' => 1515,
                'postal_code_id' => 53,
                'name' => 'ΞΕΝΙΑΣ',
            'cosmote_street_name' => 'ΞΕΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            372 => 
            array (
                'id' => 1516,
                'postal_code_id' => 53,
                'name' => 'ΟΡΜΙΝΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            373 => 
            array (
                'id' => 1517,
                'postal_code_id' => 53,
                'name' => 'ΠΟΝΤΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            374 => 
            array (
                'id' => 1518,
                'postal_code_id' => 53,
                'name' => 'ΣΕΒΑΣΤΕΙΑΣ',
            'cosmote_street_name' => 'ΣΕΒΑΣΤΕΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            375 => 
            array (
                'id' => 1519,
                'postal_code_id' => 53,
                'name' => 'ΣΕΜΕΛΗΣ',
            'cosmote_street_name' => 'ΣΕΜΕΛΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            376 => 
            array (
                'id' => 1520,
                'postal_code_id' => 53,
                'name' => 'ΣΕΜΙΤΕΛΟΥ',
            'cosmote_street_name' => 'ΣΕΜΙΤΕΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            377 => 
            array (
                'id' => 1521,
                'postal_code_id' => 53,
                'name' => 'ΧΑΤΖΗΓΙΑΝΝΗ ΜΕΞΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            378 => 
            array (
                'id' => 1522,
                'postal_code_id' => 54,
                'name' => 'ΑΓΡΑΙΩΝ',
            'cosmote_street_name' => 'ΑΓΡΑΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            379 => 
            array (
                'id' => 1523,
                'postal_code_id' => 54,
                'name' => 'ΑΡΧΕΡΜΟΥ',
            'cosmote_street_name' => 'ΑΡΧΕΡΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            380 => 
            array (
                'id' => 1524,
                'postal_code_id' => 54,
                'name' => 'ΔΙΚΑΙΑΡΧΟΥ',
            'cosmote_street_name' => 'ΔΙΚΑΙΑΡΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            381 => 
            array (
                'id' => 1525,
                'postal_code_id' => 54,
                'name' => 'ΣΩΣΙΚΛΕΟΥΣ',
            'cosmote_street_name' => 'ΣΩΣΙΚΛΕΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            382 => 
            array (
                'id' => 1526,
                'postal_code_id' => 54,
                'name' => 'ΩΡΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            383 => 
            array (
                'id' => 1527,
                'postal_code_id' => 55,
                'name' => 'ΑΓΙΟΥ ΦΑΝΟΥΡΙΟΥ',
            'cosmote_street_name' => 'ΑΓΙΟΥ ΦΑΝΟΥΡΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            384 => 
            array (
                'id' => 1528,
                'postal_code_id' => 55,
                'name' => 'ΑΡΗΤΗΣ',
            'cosmote_street_name' => 'ΑΡΗΤΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            385 => 
            array (
                'id' => 1529,
                'postal_code_id' => 55,
                'name' => 'ΑΡΤΟΤΙΝΗΣ',
            'cosmote_street_name' => 'ΑΡΤΟΤΙΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            386 => 
            array (
                'id' => 1530,
                'postal_code_id' => 55,
                'name' => 'ΒΑΣΙΛΕΙΟΥ ΛΑΣΚΟΥ',
            'cosmote_street_name' => 'ΒΑΣΙΛΕΙΟΥ ΛΑΣΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            387 => 
            array (
                'id' => 1531,
                'postal_code_id' => 55,
                'name' => 'ΙΛΙΑΔΟΣ',
            'cosmote_street_name' => 'ΙΛΙΑΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            388 => 
            array (
                'id' => 1532,
                'postal_code_id' => 55,
                'name' => 'ΙΦΙΚΡΑΤΟΥΣ',
            'cosmote_street_name' => 'ΙΦΙΚΡΑΤΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            389 => 
            array (
                'id' => 1533,
                'postal_code_id' => 55,
                'name' => 'ΚΟΝΩΝΟΣ',
            'cosmote_street_name' => 'ΚΟΝΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            390 => 
            array (
                'id' => 1534,
                'postal_code_id' => 55,
                'name' => 'ΛΑΕΡΤΟΥ',
            'cosmote_street_name' => 'ΛΑΕΡΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            391 => 
            array (
                'id' => 1535,
                'postal_code_id' => 55,
                'name' => 'ΝΙΚΟΥ ΝΙΚΗΦΟΡΙΔΗ',
            'cosmote_street_name' => 'ΝΙΚΟΥ ΝΙΚΗΦΟΡΙΔΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            392 => 
            array (
                'id' => 1536,
                'postal_code_id' => 55,
                'name' => 'ΟΛΥΜΠΙΑΔΟΣ',
            'cosmote_street_name' => 'ΟΛΥΜΠΙΑΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            393 => 
            array (
                'id' => 1537,
                'postal_code_id' => 55,
                'name' => 'ΠΥΡΡΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            394 => 
            array (
                'id' => 1538,
                'postal_code_id' => 55,
                'name' => 'ΣΤΕΝΤΟΡΟΣ',
            'cosmote_street_name' => 'ΣΤΕΝΤΟΡΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            395 => 
            array (
                'id' => 1539,
                'postal_code_id' => 55,
                'name' => 'ΤΕΛΑΜΩΝΟΣ',
            'cosmote_street_name' => 'ΤΕΛΑΜΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            396 => 
            array (
                'id' => 1540,
                'postal_code_id' => 55,
                'name' => 'ΤΙΜΟΘΕΟΥ',
            'cosmote_street_name' => 'ΤΙΜΟΘΕΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            397 => 
            array (
                'id' => 1541,
                'postal_code_id' => 55,
                'name' => 'ΦΟΡΜΙΩΝΟΣ',
            'cosmote_street_name' => 'ΦΟΡΜΙΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            398 => 
            array (
                'id' => 1542,
                'postal_code_id' => 55,
                'name' => 'ΦΡΥΝΗΣ',
            'cosmote_street_name' => 'ΦΡΥΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            399 => 
            array (
                'id' => 1543,
                'postal_code_id' => 55,
                'name' => 'ΧΡΕΜΩΝΙΔΟΥ',
            'cosmote_street_name' => 'ΧΡΕΜΩΝΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            400 => 
            array (
                'id' => 1544,
                'postal_code_id' => 56,
                'name' => 'ΑΙΓΥΠΤΟΥ',
            'cosmote_street_name' => 'ΑΙΓΥΠΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            401 => 
            array (
                'id' => 1545,
                'postal_code_id' => 56,
                'name' => 'ΑΛΚΙΜΑΧΟΥ',
            'cosmote_street_name' => 'ΑΛΚΙΜΑΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            402 => 
            array (
                'id' => 1546,
                'postal_code_id' => 56,
                'name' => 'ΑΜΑΣΕΙΑΣ',
            'cosmote_street_name' => 'ΑΜΑΣΕΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            403 => 
            array (
                'id' => 1547,
                'postal_code_id' => 56,
                'name' => 'ΑΝΤΗΝΟΡΟΣ',
            'cosmote_street_name' => 'ΑΝΤΗΝΟΡΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            404 => 
            array (
                'id' => 1548,
                'postal_code_id' => 56,
                'name' => 'ΑΡΙΣΤΑΡΧΟΥ',
            'cosmote_street_name' => 'ΑΡΙΣΤΑΡΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            405 => 
            array (
                'id' => 1549,
                'postal_code_id' => 56,
                'name' => 'ΑΣΤΥΔΑΜΑΝΤΟΣ',
            'cosmote_street_name' => 'ΑΣΤΥΔΑΜΑΝΤΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            406 => 
            array (
                'id' => 1550,
                'postal_code_id' => 56,
                'name' => 'ΒΑΣΙΛΕΩΣ ΑΛΕΞΑΝΔΡΟΥ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΒΑΣΙΛΕΩΣ ΑΛΕΞΑΝΔΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            407 => 
            array (
                'id' => 1551,
                'postal_code_id' => 56,
                'name' => 'ΔΟΥΡΙΔΟΣ',
            'cosmote_street_name' => 'ΔΟΥΡΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            408 => 
            array (
                'id' => 1552,
                'postal_code_id' => 56,
                'name' => 'ΕΡΓΟΤΙΜΟΥ',
            'cosmote_street_name' => 'ΕΡΓΟΤΙΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            409 => 
            array (
                'id' => 1553,
                'postal_code_id' => 56,
                'name' => 'ΕΡΙΦΥΛΗΣ',
            'cosmote_street_name' => 'ΕΡΙΦΥΛΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            410 => 
            array (
                'id' => 1554,
                'postal_code_id' => 56,
                'name' => 'ΕΥΤΥΧΙΔΟΥ',
            'cosmote_street_name' => 'ΕΥΤΥΧΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            411 => 
            array (
                'id' => 1555,
                'postal_code_id' => 56,
                'name' => 'ΕΥΦΡΟΝΙΟΥ',
            'cosmote_street_name' => 'ΕΥΦΡΟΝΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:53',
            ),
            412 => 
            array (
                'id' => 1556,
                'postal_code_id' => 56,
                'name' => 'ΖΗΝΟΔΟΤΟΥ',
            'cosmote_street_name' => 'ΖΗΝΟΔΟΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            413 => 
            array (
                'id' => 1557,
                'postal_code_id' => 56,
                'name' => 'ΘΕΑΓΕΝΟΥΣ',
            'cosmote_street_name' => 'ΘΕΑΓΕΝΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            414 => 
            array (
                'id' => 1558,
                'postal_code_id' => 56,
                'name' => 'ΘΗΡΩΝΟΣ',
            'cosmote_street_name' => 'ΘΗΡΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            415 => 
            array (
                'id' => 1559,
                'postal_code_id' => 56,
                'name' => 'ΙΕΡΩΝΟΣ',
            'cosmote_street_name' => 'ΙΕΡΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            416 => 
            array (
                'id' => 1560,
                'postal_code_id' => 56,
                'name' => 'ΙΟΦΩΝΤΟΣ',
            'cosmote_street_name' => 'ΙΟΦΩΝΤΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            417 => 
            array (
                'id' => 1561,
                'postal_code_id' => 56,
                'name' => 'ΙΦΙΚΡΑΤΟΥΣ',
            'cosmote_street_name' => 'ΙΦΙΚΡΑΤΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            418 => 
            array (
                'id' => 1562,
                'postal_code_id' => 56,
                'name' => 'ΚΟΝΩΝΟΣ',
            'cosmote_street_name' => 'ΚΟΝΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            419 => 
            array (
                'id' => 1563,
                'postal_code_id' => 56,
                'name' => 'ΚΡΙΤΩΝΟΣ',
            'cosmote_street_name' => 'ΚΡΙΤΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            420 => 
            array (
                'id' => 1564,
                'postal_code_id' => 56,
                'name' => 'ΛΕΩΦΟΡΟΣ ΒΑΣΙΛΕΩΣ ΓΕΩΡΓΙΟΥ Β\'',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΒΑΣΙΛΕΩΣ ΓΕΩΡΓΙΟΥ Β\' (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            421 => 
            array (
                'id' => 1565,
                'postal_code_id' => 56,
                'name' => 'ΜΟΝΗΣ ΣΕΚΟΥ',
            'cosmote_street_name' => 'ΜΟΝΗΣ ΣΕΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            422 => 
            array (
                'id' => 1566,
                'postal_code_id' => 56,
                'name' => 'ΝΑΙΑΔΩΝ',
            'cosmote_street_name' => 'ΝΑΙΑΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            423 => 
            array (
                'id' => 1567,
                'postal_code_id' => 56,
                'name' => 'ΝΗΡΗΙΔΩΝ',
            'cosmote_street_name' => 'ΝΗΡΗΙΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            424 => 
            array (
                'id' => 1568,
                'postal_code_id' => 56,
                'name' => 'ΠΛΑΤΕΙΑ ΜΕΣΟΛΟΓΓΙΟΥ',
            'cosmote_street_name' => 'ΠΛΑΤΕΙΑ ΜΕΣΟΛΟΓΓΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            425 => 
            array (
                'id' => 1569,
                'postal_code_id' => 56,
                'name' => 'ΠΡΑΤΙΝΟΥ',
            'cosmote_street_name' => 'ΠΡΑΤΙΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            426 => 
            array (
                'id' => 1570,
                'postal_code_id' => 56,
                'name' => 'ΡΙΖΑΡΗ',
            'cosmote_street_name' => 'ΡΙΖΑΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            427 => 
            array (
                'id' => 1571,
                'postal_code_id' => 56,
                'name' => 'ΣΠΥΡΟΥ ΜΕΡΚΟΥΡΗ',
            'cosmote_street_name' => 'ΣΠΥΡΟΥ ΜΕΡΚΟΥΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            428 => 
            array (
                'id' => 1572,
                'postal_code_id' => 56,
                'name' => 'ΣΤΡΑΒΩΝΟΣ',
            'cosmote_street_name' => 'ΣΤΡΑΒΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            429 => 
            array (
                'id' => 1573,
                'postal_code_id' => 56,
                'name' => 'ΤΙΜΑΡΧΟΥ',
            'cosmote_street_name' => 'ΤΙΜΑΡΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            430 => 
            array (
                'id' => 1574,
                'postal_code_id' => 56,
                'name' => 'ΥΜΗΤΤΟΥ',
            'cosmote_street_name' => 'ΥΜΗΤΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            431 => 
            array (
                'id' => 1575,
                'postal_code_id' => 56,
                'name' => 'ΦΟΡΜΙΩΝΟΣ',
            'cosmote_street_name' => 'ΦΟΡΜΙΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            432 => 
            array (
                'id' => 1576,
                'postal_code_id' => 57,
                'name' => 'ΑΓΙΟΥ ΣΠΥΡΙΔΩΝΟΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            433 => 
            array (
                'id' => 1577,
                'postal_code_id' => 57,
                'name' => 'ΑΜΥΝΤΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            434 => 
            array (
                'id' => 1578,
                'postal_code_id' => 57,
                'name' => 'ΑΡΚΤΙΝΟΥ',
            'cosmote_street_name' => 'ΑΡΚΤΙΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            435 => 
            array (
                'id' => 1579,
                'postal_code_id' => 57,
                'name' => 'ΑΡΡΙΑΝΟΥ',
            'cosmote_street_name' => 'ΑΡΡΙΑΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            436 => 
            array (
                'id' => 1580,
                'postal_code_id' => 57,
                'name' => 'ΑΡΧΕΛΑΟΥ',
            'cosmote_street_name' => 'ΑΡΧΕΛΑΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            437 => 
            array (
                'id' => 1581,
                'postal_code_id' => 57,
                'name' => 'ΔΙΟΣΚΟΥΡΙΔΟΥ',
            'cosmote_street_name' => 'ΔΙΟΣΚΟΥΡΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            438 => 
            array (
                'id' => 1582,
                'postal_code_id' => 57,
                'name' => 'ΕΛΛΑΝΙΚΟΥ',
            'cosmote_street_name' => 'ΕΛΛΑΝΙΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            439 => 
            array (
                'id' => 1583,
                'postal_code_id' => 57,
                'name' => 'ΕΡΜΙΟΝΗΣ',
            'cosmote_street_name' => 'ΕΡΜΙΟΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            440 => 
            array (
                'id' => 1584,
                'postal_code_id' => 57,
                'name' => 'ΖΑΛΕΥΚΟΥ',
            'cosmote_street_name' => 'ΖΑΛΕΥΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            441 => 
            array (
                'id' => 1585,
                'postal_code_id' => 57,
                'name' => 'ΗΡΩΝΔΑ',
            'cosmote_street_name' => 'ΗΡΩΝΔΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            442 => 
            array (
                'id' => 1586,
                'postal_code_id' => 57,
                'name' => 'ΘΕΟΠΟΜΠΟΥ',
            'cosmote_street_name' => 'ΘΕΟΠΟΜΠΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            443 => 
            array (
                'id' => 1587,
                'postal_code_id' => 57,
                'name' => 'ΙΠΠΟΜΕΔΟΝΤΟΣ',
            'cosmote_street_name' => 'ΙΠΠΟΜΕΔΟΝΤΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            444 => 
            array (
                'id' => 1588,
                'postal_code_id' => 57,
                'name' => 'ΙΩΑΝΝΟΥ ΦΩΚΙΑΝΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            445 => 
            array (
                'id' => 1589,
                'postal_code_id' => 57,
                'name' => 'ΚΑΛΛΙΜΑΧΟΥ',
            'cosmote_street_name' => 'ΚΑΛΛΙΜΑΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            446 => 
            array (
                'id' => 1590,
                'postal_code_id' => 57,
                'name' => 'ΚΤΗΣΙΟΥ',
            'cosmote_street_name' => 'ΚΤΗΣΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            447 => 
            array (
                'id' => 1591,
                'postal_code_id' => 57,
                'name' => 'ΛΕΩΦΟΡΟΣ ΒΑΣΙΛΕΩΣ ΓΕΩΡΓΙΟΥ Β\'',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΒΑΣΙΛΕΩΣ ΓΕΩΡΓΙΟΥ Β\' (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            448 => 
            array (
                'id' => 1592,
                'postal_code_id' => 57,
                'name' => 'ΛΕΩΦΟΡΟΣ ΒΑΣΙΛΕΩΣ ΚΩΝΣΤΑΝΤΙΝΟΥ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΒΑΣΙΛΕΩΣ ΚΩΝΣΤΑΝΤΙΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            449 => 
            array (
                'id' => 1593,
                'postal_code_id' => 57,
                'name' => 'ΝΙΚΑΝΔΡΟΥ',
            'cosmote_street_name' => 'ΝΙΚΑΝΔΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            450 => 
            array (
                'id' => 1594,
                'postal_code_id' => 57,
                'name' => 'ΝΙΚΟΣΘΕΝΟΥΣ',
            'cosmote_street_name' => 'ΝΙΚΟΣΘΕΝΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            451 => 
            array (
                'id' => 1595,
                'postal_code_id' => 57,
                'name' => 'ΞΕΝΟΚΛΕΟΥΣ',
            'cosmote_street_name' => 'ΞΕΝΟΚΛΕΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            452 => 
            array (
                'id' => 1596,
                'postal_code_id' => 57,
                'name' => 'ΠΑΥΣΑΝΙΟΥ',
            'cosmote_street_name' => 'ΠΑΥΣΑΝΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            453 => 
            array (
                'id' => 1597,
                'postal_code_id' => 57,
                'name' => 'ΠΛΑΤΕΙΑ ΠΡΟΣΚΟΠΩΝ',
            'cosmote_street_name' => 'ΠΛΑΤΕΙΑ ΠΡΟΣΚΟΠΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            454 => 
            array (
                'id' => 1598,
                'postal_code_id' => 57,
                'name' => 'ΠΟΛΕΜΟΚΡΑΤΟΥΣ',
            'cosmote_street_name' => 'ΠΟΛΕΜΟΚΡΑΤΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            455 => 
            array (
                'id' => 1599,
                'postal_code_id' => 57,
                'name' => 'ΠΟΛΕΜΩΝΟΣ',
            'cosmote_street_name' => 'ΠΟΛΕΜΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            456 => 
            array (
                'id' => 1600,
                'postal_code_id' => 57,
            'name' => 'ΠΤΟΛΕΜΑΙΩΝ (ΠΡΧ ΠΑΓΚΡΑΤΙ)',
            'cosmote_street_name' => 'ΠΤΟΛΕΜΑΙΩΝ (ΠΡΧ ΠΑΓΚΡΑΤΙ) (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            457 => 
            array (
                'id' => 1601,
                'postal_code_id' => 57,
                'name' => 'ΡΙΖΑΡΗ',
            'cosmote_street_name' => 'ΡΙΖΑΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            458 => 
            array (
                'id' => 1602,
                'postal_code_id' => 57,
                'name' => 'ΣΠΥΡΟΥ ΜΕΡΚΟΥΡΗ',
            'cosmote_street_name' => 'ΣΠΥΡΟΥ ΜΕΡΚΟΥΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            459 => 
            array (
                'id' => 1603,
                'postal_code_id' => 57,
                'name' => 'ΣΤΑΣΙΝΟΥ',
            'cosmote_street_name' => 'ΣΤΑΣΙΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            460 => 
            array (
                'id' => 1604,
                'postal_code_id' => 57,
                'name' => 'ΤΕΛΕΣΙΛΛΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            461 => 
            array (
                'id' => 1605,
                'postal_code_id' => 57,
                'name' => 'ΦΑΙΔΡΟΥ',
            'cosmote_street_name' => 'ΦΑΙΔΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            462 => 
            array (
                'id' => 1606,
                'postal_code_id' => 57,
                'name' => 'ΦΙΛΟΧΟΡΟΥ',
            'cosmote_street_name' => 'ΦΙΛΟΧΟΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            463 => 
            array (
                'id' => 1607,
                'postal_code_id' => 57,
                'name' => 'ΧΕΙΡΩΝΟΣ',
            'cosmote_street_name' => 'ΧΕΙΡΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            464 => 
            array (
                'id' => 1608,
                'postal_code_id' => 58,
                'name' => 'ΑΠΟΛΛΩΝΙΟΥ',
            'cosmote_street_name' => 'ΑΠΟΛΛΩΝΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            465 => 
            array (
                'id' => 1609,
                'postal_code_id' => 58,
                'name' => 'ΑΠΟΣΤΟΛΟΥ ΠΑΥΛΟΥ',
            'cosmote_street_name' => 'ΑΠΟΣΤΟΛΟΥ ΠΑΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            466 => 
            array (
                'id' => 1610,
                'postal_code_id' => 58,
                'name' => 'ΔΗΜΗΤΡΙΟΥ ΑΙΓΙΝΗΤΟΥ',
            'cosmote_street_name' => 'ΔΗΜΗΤΡΙΟΥ ΑΙΓΙΝΗΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            467 => 
            array (
                'id' => 1611,
                'postal_code_id' => 58,
                'name' => 'ΔΗΜΟΦΩΝΤΟΣ',
            'cosmote_street_name' => 'ΔΗΜΟΦΩΝΤΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            468 => 
            array (
                'id' => 1612,
                'postal_code_id' => 58,
                'name' => 'ΕΠΑΚΡΕΩΝ',
            'cosmote_street_name' => 'ΕΠΑΚΡΕΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            469 => 
            array (
                'id' => 1613,
                'postal_code_id' => 58,
                'name' => 'ΘΕΣΣΑΛΟΝΙΚΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            470 => 
            array (
                'id' => 1614,
                'postal_code_id' => 58,
                'name' => 'ΙΟΥΛΙΟΥ ΣΜΙΘ',
            'cosmote_street_name' => 'ΙΟΥΛΙΟΥ ΣΜΙΘ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            471 => 
            array (
                'id' => 1615,
                'postal_code_id' => 58,
                'name' => 'ΙΩΝΩΝ',
            'cosmote_street_name' => 'ΙΩΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            472 => 
            array (
                'id' => 1616,
                'postal_code_id' => 58,
                'name' => 'ΚΑΛΛΙΣΘΕΝΟΥΣ',
            'cosmote_street_name' => 'ΚΑΛΛΙΣΘΕΝΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            473 => 
            array (
                'id' => 1617,
                'postal_code_id' => 58,
                'name' => 'ΚΥΔΑΝΤΙΔΩΝ',
            'cosmote_street_name' => 'ΚΥΔΑΝΤΙΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            474 => 
            array (
                'id' => 1618,
                'postal_code_id' => 58,
                'name' => 'ΟΤΡΥΝΕΩΝ',
            'cosmote_street_name' => 'ΟΤΡΥΝΕΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            475 => 
            array (
                'id' => 1619,
                'postal_code_id' => 58,
                'name' => 'ΠΑΛΛΗΝΑΙΩΝ',
            'cosmote_street_name' => 'ΠΑΛΛΗΝΑΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            476 => 
            array (
                'id' => 1620,
                'postal_code_id' => 58,
                'name' => 'ΠΝΥΚΟΣ',
            'cosmote_street_name' => 'ΠΝΥΚΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            477 => 
            array (
                'id' => 1621,
                'postal_code_id' => 58,
                'name' => 'ΤΙΜΩΝΟΣ',
            'cosmote_street_name' => 'ΤΙΜΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            478 => 
            array (
                'id' => 1622,
                'postal_code_id' => 58,
                'name' => 'ΤΡΙΤΩΝΟΣ',
            'cosmote_street_name' => 'ΤΡΙΤΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            479 => 
            array (
                'id' => 1623,
                'postal_code_id' => 58,
                'name' => 'ΤΡΙΩΝ ΙΕΡΑΡΧΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            480 => 
            array (
                'id' => 1624,
                'postal_code_id' => 58,
                'name' => 'ΤΡΩΩΝ',
            'cosmote_street_name' => 'ΤΡΩΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            481 => 
            array (
                'id' => 1625,
                'postal_code_id' => 58,
                'name' => 'ΥΠΕΡΙΩΝΟΣ',
            'cosmote_street_name' => 'ΥΠΕΡΙΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            482 => 
            array (
                'id' => 1626,
                'postal_code_id' => 58,
                'name' => 'ΦΙΓΑΛΕΙΑΣ',
            'cosmote_street_name' => 'ΦΙΓΑΛΕΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            483 => 
            array (
                'id' => 1627,
                'postal_code_id' => 58,
                'name' => 'ΦΙΛΟΣΤΡΑΤΟΥ',
            'cosmote_street_name' => 'ΦΙΛΟΣΤΡΑΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            484 => 
            array (
                'id' => 1628,
                'postal_code_id' => 58,
                'name' => 'ΦΙΛΩΤΑ',
            'cosmote_street_name' => 'ΦΙΛΩΤΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            485 => 
            array (
                'id' => 1629,
                'postal_code_id' => 59,
                'name' => 'ΑΓΑΜΕΜΝΟΝΟΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            486 => 
            array (
                'id' => 1630,
                'postal_code_id' => 59,
                'name' => 'ΑΔΡΑΣΤΟΥ',
            'cosmote_street_name' => 'ΑΔΡΑΣΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            487 => 
            array (
                'id' => 1631,
                'postal_code_id' => 59,
                'name' => 'ΑΕΡΟΠΗΣ',
            'cosmote_street_name' => 'ΑΕΡΟΠΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            488 => 
            array (
                'id' => 1632,
                'postal_code_id' => 59,
                'name' => 'ΑΙΟΛΕΩΝ',
            'cosmote_street_name' => 'ΑΙΟΛΕΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            489 => 
            array (
                'id' => 1633,
                'postal_code_id' => 59,
                'name' => 'ΑΛΚΙΝΟΗΣ',
            'cosmote_street_name' => 'ΑΛΚΙΝΟΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            490 => 
            array (
                'id' => 1634,
                'postal_code_id' => 59,
                'name' => 'ΑΝΘΙΟΥ',
            'cosmote_street_name' => 'ΜΕΛΑΝΘΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            491 => 
            array (
                'id' => 1635,
                'postal_code_id' => 59,
                'name' => 'ΑΝΤΑΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            492 => 
            array (
                'id' => 1636,
                'postal_code_id' => 59,
                'name' => 'ΑΡΚΑΔΩΝ',
            'cosmote_street_name' => 'ΑΡΚΑΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            493 => 
            array (
                'id' => 1637,
                'postal_code_id' => 59,
                'name' => 'ΑΤΡΕΩΣ',
            'cosmote_street_name' => 'ΑΤΡΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            494 => 
            array (
                'id' => 1638,
                'postal_code_id' => 59,
                'name' => 'ΑΧΑΙΩΝ',
            'cosmote_street_name' => 'ΑΧΑΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            495 => 
            array (
                'id' => 1639,
                'postal_code_id' => 59,
                'name' => 'ΒΑΣΣΑΝΗ',
            'cosmote_street_name' => 'ΒΑΣΣΑΝΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            496 => 
            array (
                'id' => 1640,
                'postal_code_id' => 59,
                'name' => 'ΔΑΝΑΩΝ',
            'cosmote_street_name' => 'ΔΑΝΑΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            497 => 
            array (
                'id' => 1641,
                'postal_code_id' => 59,
                'name' => 'ΔΕΞΑΜΕΝΗΣ',
            'cosmote_street_name' => 'ΔΕΞΑΜΕΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            498 => 
            array (
                'id' => 1642,
                'postal_code_id' => 59,
                'name' => 'ΔΗΜΟΦΩΝΤΟΣ',
            'cosmote_street_name' => 'ΔΗΜΟΦΩΝΤΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            499 => 
            array (
                'id' => 1643,
                'postal_code_id' => 59,
                'name' => 'ΔΡΥΟΠΩΝ',
            'cosmote_street_name' => 'ΔΡΥΟΠΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
        ));
        \DB::table('streets')->insert(array (
            0 => 
            array (
                'id' => 1644,
                'postal_code_id' => 59,
                'name' => 'ΔΩΡΙΕΩΝ',
            'cosmote_street_name' => 'ΔΩΡΙΕΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            1 => 
            array (
                'id' => 1645,
                'postal_code_id' => 59,
                'name' => 'ΘΕΡΡΙΚΛΕΙΔΩΝ',
            'cosmote_street_name' => 'ΘΕΡΡΙΚΛΕΙΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            2 => 
            array (
                'id' => 1646,
                'postal_code_id' => 59,
                'name' => 'ΘΕΣΣΑΛΟΝΙΚΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            3 => 
            array (
                'id' => 1647,
                'postal_code_id' => 59,
                'name' => 'ΙΟΛΑΟΥ',
            'cosmote_street_name' => 'ΙΟΛΑΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            4 => 
            array (
                'id' => 1648,
                'postal_code_id' => 59,
                'name' => 'ΙΩΝΩΝ',
            'cosmote_street_name' => 'ΙΩΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            5 => 
            array (
                'id' => 1649,
                'postal_code_id' => 59,
                'name' => 'ΚΑΛΛΙΡΡΟΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            6 => 
            array (
                'id' => 1650,
                'postal_code_id' => 59,
                'name' => 'ΚΑΛΛΙΣΘΕΝΟΥΣ',
            'cosmote_street_name' => 'ΚΑΛΛΙΣΘΕΝΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            7 => 
            array (
                'id' => 1651,
                'postal_code_id' => 59,
                'name' => 'ΚΗΦΙΣΟΔΟΤΟΥ',
            'cosmote_street_name' => 'ΚΗΦΙΣΟΔΟΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            8 => 
            array (
                'id' => 1652,
                'postal_code_id' => 59,
                'name' => 'ΚΛΕΙΔΗΜΟΥ',
            'cosmote_street_name' => 'ΚΛΕΙΔΗΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:54',
            ),
            9 => 
            array (
                'id' => 1653,
                'postal_code_id' => 59,
                'name' => 'ΚΟΙΛΗΣ',
            'cosmote_street_name' => 'ΚΟΙΛΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            10 => 
            array (
                'id' => 1654,
                'postal_code_id' => 59,
                'name' => 'ΚΤΗΣΙΦΩΝΤΟΣ',
            'cosmote_street_name' => 'ΚΤΗΣΙΦΩΝΤΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            11 => 
            array (
                'id' => 1655,
                'postal_code_id' => 59,
                'name' => 'ΚΥΚΛΩΠΩΝ',
            'cosmote_street_name' => 'ΚΥΚΛΩΠΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            12 => 
            array (
                'id' => 1656,
                'postal_code_id' => 59,
                'name' => 'ΜΑΡΩΣ ΣΤΑΜΟΥ',
            'cosmote_street_name' => 'ΜΑΡΩΣ ΣΤΑΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            13 => 
            array (
                'id' => 1657,
                'postal_code_id' => 59,
                'name' => 'ΜΕΝΕΛΑΟΥ',
            'cosmote_street_name' => 'ΜΕΝΕΛΑΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            14 => 
            array (
                'id' => 1658,
                'postal_code_id' => 59,
                'name' => 'ΞΕΝΑΡΧΟΥ',
            'cosmote_street_name' => 'ΞΕΝΑΡΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            15 => 
            array (
                'id' => 1659,
                'postal_code_id' => 59,
                'name' => 'ΟΘΡΥΟΣ',
            'cosmote_street_name' => 'ΟΘΡΥΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            16 => 
            array (
                'id' => 1660,
                'postal_code_id' => 59,
                'name' => 'ΠΕΛΑΣΓΩΝ',
            'cosmote_street_name' => 'ΠΕΛΑΣΓΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            17 => 
            array (
                'id' => 1661,
                'postal_code_id' => 59,
                'name' => 'ΠΕΡΣΗ',
            'cosmote_street_name' => 'ΠΕΡΣΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            18 => 
            array (
                'id' => 1662,
                'postal_code_id' => 59,
            'name' => 'ΠΛΑΤΕΙΑ ΔΕΞΑΜΕΝΗΣ (ΠΡΧ ΠΕΤΡΑΛΩΝΑ)',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            19 => 
            array (
                'id' => 1663,
                'postal_code_id' => 59,
                'name' => 'ΣΙΛΑΝΙΩΝΟΣ',
            'cosmote_street_name' => 'ΣΙΛΑΝΙΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            20 => 
            array (
                'id' => 1664,
                'postal_code_id' => 59,
                'name' => 'ΤΑΝΤΑΛΟΥ',
            'cosmote_street_name' => 'ΤΑΝΤΑΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            21 => 
            array (
                'id' => 1665,
                'postal_code_id' => 59,
                'name' => 'ΤΕΛΛΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            22 => 
            array (
                'id' => 1666,
                'postal_code_id' => 59,
                'name' => 'ΤΡΙΩΝ ΙΕΡΑΡΧΩΝ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            23 => 
            array (
                'id' => 1667,
                'postal_code_id' => 59,
                'name' => 'ΤΡΩΩΝ',
            'cosmote_street_name' => 'ΤΡΩΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            24 => 
            array (
                'id' => 1668,
                'postal_code_id' => 59,
                'name' => 'ΨΑΜΑΘΗΣ',
            'cosmote_street_name' => 'ΨΑΜΑΘΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            25 => 
            array (
                'id' => 1669,
                'postal_code_id' => 60,
                'name' => 'ΑΓΑΘΟΔΑΙΜΟΝΟΣ',
            'cosmote_street_name' => 'ΑΓΑΘΟΔΑΙΜΟΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            26 => 
            array (
                'id' => 1670,
                'postal_code_id' => 60,
                'name' => 'ΑΘΗΝΑΙΟΥ',
            'cosmote_street_name' => 'ΑΘΗΝΑΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            27 => 
            array (
                'id' => 1671,
                'postal_code_id' => 60,
                'name' => 'ΑΘΗΝΟΔΩΡΟΥ',
            'cosmote_street_name' => 'ΑΘΗΝΟΔΩΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            28 => 
            array (
                'id' => 1672,
                'postal_code_id' => 60,
                'name' => 'ΑΙΟΛΙΔΟΣ',
            'cosmote_street_name' => 'ΑΙΟΛΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            29 => 
            array (
                'id' => 1673,
                'postal_code_id' => 60,
                'name' => 'ΑΛΚΙΦΡΟΝΟΣ',
            'cosmote_street_name' => 'ΑΛΚΙΦΡΟΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            30 => 
            array (
                'id' => 1674,
                'postal_code_id' => 60,
                'name' => 'ΑΜΦΙΤΡΥΩΝΟΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            31 => 
            array (
                'id' => 1675,
                'postal_code_id' => 60,
                'name' => 'ΑΝΤΙΠΑΤΡΟΥ',
            'cosmote_street_name' => 'ΑΝΤΙΠΑΤΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            32 => 
            array (
                'id' => 1676,
                'postal_code_id' => 60,
                'name' => 'ΑΝΤΙΣΤΡΑΤΟΥ',
            'cosmote_street_name' => 'ΑΝΤΙΣΤΡΑΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            33 => 
            array (
                'id' => 1677,
                'postal_code_id' => 60,
                'name' => 'ΑΡΙΣΤΟΒΟΥΛΟΥ',
            'cosmote_street_name' => 'ΑΡΙΣΤΟΒΟΥΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            34 => 
            array (
                'id' => 1678,
                'postal_code_id' => 60,
                'name' => 'ΔΙΔΟΥΣ',
            'cosmote_street_name' => 'ΔΙΔΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            35 => 
            array (
                'id' => 1679,
                'postal_code_id' => 60,
                'name' => 'ΗΟΥΣ',
            'cosmote_street_name' => 'ΗΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            36 => 
            array (
                'id' => 1680,
                'postal_code_id' => 60,
                'name' => 'ΗΣΙΟΝΗΣ',
            'cosmote_street_name' => 'ΗΣΙΟΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            37 => 
            array (
                'id' => 1681,
                'postal_code_id' => 60,
                'name' => 'ΘΕΣΣΑΛΟΝΙΚΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-01 15:58:07',
            ),
            38 => 
            array (
                'id' => 1682,
                'postal_code_id' => 60,
                'name' => 'ΚΕΙΡΙΑΔΩΝ',
            'cosmote_street_name' => 'ΚΕΙΡΙΑΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            39 => 
            array (
                'id' => 1683,
                'postal_code_id' => 60,
                'name' => 'ΚΥΝΟΥΡΙΑΣ',
            'cosmote_street_name' => 'ΚΥΝΟΥΡΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            40 => 
            array (
                'id' => 1684,
                'postal_code_id' => 60,
                'name' => 'ΛΗΤΟΥΣ',
            'cosmote_street_name' => 'ΛΗΤΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:07',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            41 => 
            array (
                'id' => 1685,
                'postal_code_id' => 60,
                'name' => 'ΝΕΦΕΛΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            42 => 
            array (
                'id' => 1686,
                'postal_code_id' => 60,
                'name' => 'ΟΡΕΣΤΟΥ',
            'cosmote_street_name' => 'ΟΡΕΣΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            43 => 
            array (
                'id' => 1687,
                'postal_code_id' => 60,
                'name' => 'ΠΑΝΔΩΡΟΥ',
            'cosmote_street_name' => 'ΠΑΝΔΩΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            44 => 
            array (
                'id' => 1688,
                'postal_code_id' => 60,
                'name' => 'ΠΕΡΣΕΩΣ',
            'cosmote_street_name' => 'ΠΕΡΣΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            45 => 
            array (
                'id' => 1689,
                'postal_code_id' => 60,
                'name' => 'ΠΡΑΞΙΟΥ',
            'cosmote_street_name' => 'ΠΡΑΞΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            46 => 
            array (
                'id' => 1690,
                'postal_code_id' => 60,
                'name' => 'ΠΤΕΛΕΑΣ',
            'cosmote_street_name' => 'ΠΤΕΛΕΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            47 => 
            array (
                'id' => 1691,
                'postal_code_id' => 60,
                'name' => 'ΠΥΛΑΔΟΥ',
            'cosmote_street_name' => 'ΠΥΛΑΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            48 => 
            array (
                'id' => 1692,
                'postal_code_id' => 60,
                'name' => 'ΡΕΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            49 => 
            array (
                'id' => 1693,
                'postal_code_id' => 60,
                'name' => 'ΧΑΜΟΣΤΕΡΝΑΣ',
            'cosmote_street_name' => 'ΧΑΜΟΣΤΕΡΝΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            50 => 
            array (
                'id' => 1694,
                'postal_code_id' => 61,
                'name' => 'ΑΓΑΘΗΜΕΡΟΥ',
            'cosmote_street_name' => 'ΑΓΑΘΗΜΕΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            51 => 
            array (
                'id' => 1695,
                'postal_code_id' => 61,
                'name' => 'ΑΛΚΜΗΝΗΣ',
            'cosmote_street_name' => 'ΑΛΚΜΗΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            52 => 
            array (
                'id' => 1696,
                'postal_code_id' => 61,
                'name' => 'ΑΛΚΥΟΝΕΩΣ',
            'cosmote_street_name' => 'ΑΛΚΥΟΝΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            53 => 
            array (
                'id' => 1697,
                'postal_code_id' => 61,
                'name' => 'ΑΜΦΙΤΡΥΩΝΟΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            54 => 
            array (
                'id' => 1698,
                'postal_code_id' => 61,
                'name' => 'ΑΡΙΣΤΟΦΩΝΤΟΣ',
            'cosmote_street_name' => 'ΑΡΙΣΤΟΦΩΝΤΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            55 => 
            array (
                'id' => 1699,
                'postal_code_id' => 61,
                'name' => 'ΑΦΙΔΝΑΙΩΝ',
            'cosmote_street_name' => 'ΑΦΙΔΝΑΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            56 => 
            array (
                'id' => 1700,
                'postal_code_id' => 61,
                'name' => 'ΑΧΝΙΑΔΩΝ',
            'cosmote_street_name' => 'ΑΧΝΙΑΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            57 => 
            array (
                'id' => 1701,
                'postal_code_id' => 61,
                'name' => 'ΒΑΣΙΛΕΙΟΥ ΤΖΑΦΕΡΗ',
            'cosmote_street_name' => 'ΒΑΣΙΛΕΙΟΥ ΤΖΑΦΕΡΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            58 => 
            array (
                'id' => 1702,
                'postal_code_id' => 61,
                'name' => 'ΒΙΤΩΝΟΣ',
            'cosmote_street_name' => 'ΒΙΤΩΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            59 => 
            array (
                'id' => 1703,
                'postal_code_id' => 61,
                'name' => 'ΒΟΥΤΑΔΩΝ',
            'cosmote_street_name' => 'ΒΟΥΤΑΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            60 => 
            array (
                'id' => 1704,
                'postal_code_id' => 61,
                'name' => 'ΓΑΡΓΗΤΤΙΩΝ',
            'cosmote_street_name' => 'ΓΑΡΓΗΤΤΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            61 => 
            array (
                'id' => 1705,
                'postal_code_id' => 61,
                'name' => 'ΓΕΦΥΡΕΩΝ',
            'cosmote_street_name' => 'ΓΕΦΥΡΕΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            62 => 
            array (
                'id' => 1706,
                'postal_code_id' => 61,
                'name' => 'ΔΑΜΟΚΛΕΟΥΣ',
            'cosmote_street_name' => 'ΔΑΜΟΚΛΕΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            63 => 
            array (
                'id' => 1707,
                'postal_code_id' => 61,
                'name' => 'ΔΕΚΕΛΕΩΝ',
            'cosmote_street_name' => 'ΔΕΚΕΛΕΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            64 => 
            array (
                'id' => 1708,
                'postal_code_id' => 61,
                'name' => 'ΔΙΩΝΗΣ',
            'cosmote_street_name' => 'ΔΙΩΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            65 => 
            array (
                'id' => 1709,
                'postal_code_id' => 61,
                'name' => 'ΔΥΑΛΕΩΝ',
            'cosmote_street_name' => 'ΔΥΑΛΕΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            66 => 
            array (
                'id' => 1710,
                'postal_code_id' => 61,
                'name' => 'ΕΛΑΣΙΔΩΝ',
            'cosmote_street_name' => 'ΕΛΑΣΙΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            67 => 
            array (
                'id' => 1711,
                'postal_code_id' => 61,
                'name' => 'ΕΡΙΓΟΝΗΣ',
            'cosmote_street_name' => 'ΕΡΙΓΟΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            68 => 
            array (
                'id' => 1712,
                'postal_code_id' => 61,
                'name' => 'ΕΥΑΔΝΗΣ',
            'cosmote_street_name' => 'ΕΥΑΔΝΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            69 => 
            array (
                'id' => 1713,
                'postal_code_id' => 61,
                'name' => 'ΕΥΜΟΛΠΙΔΩΝ',
            'cosmote_street_name' => 'ΕΥΜΟΛΠΙΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            70 => 
            array (
                'id' => 1714,
                'postal_code_id' => 61,
                'name' => 'ΕΥΝΕΙΔΩΝ',
            'cosmote_street_name' => 'ΕΥΝΕΙΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            71 => 
            array (
                'id' => 1715,
                'postal_code_id' => 61,
                'name' => 'ΕΥΠΑΤΡΙΔΩΝ',
            'cosmote_street_name' => 'ΕΥΠΑΤΡΙΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            72 => 
            array (
                'id' => 1716,
                'postal_code_id' => 61,
                'name' => 'ΕΥΡΥΣΘΕΩΣ',
            'cosmote_street_name' => 'ΕΥΡΥΣΘΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            73 => 
            array (
                'id' => 1717,
                'postal_code_id' => 61,
                'name' => 'ΕΧΕΛΙΔΩΝ',
            'cosmote_street_name' => 'ΕΧΕΛΙΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            74 => 
            array (
                'id' => 1718,
                'postal_code_id' => 61,
                'name' => 'ΖΑΓΡΕΩΣ',
            'cosmote_street_name' => 'ΖΑΓΡΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            75 => 
            array (
                'id' => 1719,
                'postal_code_id' => 61,
                'name' => 'ΖΑΚΥΑΔΩΝ',
            'cosmote_street_name' => 'ΖΑΚΥΑΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            76 => 
            array (
                'id' => 1720,
                'postal_code_id' => 61,
                'name' => 'ΗΟΥΣ',
            'cosmote_street_name' => 'ΗΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            77 => 
            array (
                'id' => 1721,
                'postal_code_id' => 61,
                'name' => 'ΗΡΑΚΛΕΙΔΩΝ',
            'cosmote_street_name' => 'ΗΡΑΚΛΕΙΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            78 => 
            array (
                'id' => 1722,
                'postal_code_id' => 61,
                'name' => 'ΗΡΟΦΙΛΗΣ',
            'cosmote_street_name' => 'ΗΡΟΦΙΛΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            79 => 
            array (
                'id' => 1723,
                'postal_code_id' => 61,
                'name' => 'ΘΕΑΝΟΥΣ',
            'cosmote_street_name' => 'ΘΕΑΝΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            80 => 
            array (
                'id' => 1724,
                'postal_code_id' => 61,
                'name' => 'ΘΕΣΣΑΛΟΝΙΚΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            81 => 
            array (
                'id' => 1725,
                'postal_code_id' => 61,
                'name' => 'ΙΑΚΧΟΥ',
            'cosmote_street_name' => 'ΙΑΚΧΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            82 => 
            array (
                'id' => 1726,
                'postal_code_id' => 61,
                'name' => 'ΙΕΡΑ ΟΔΟΣ',
            'cosmote_street_name' => 'ΙΕΡΑ ΟΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            83 => 
            array (
                'id' => 1727,
                'postal_code_id' => 61,
                'name' => 'ΙΕΡΟΦΑΝΤΩΝ',
            'cosmote_street_name' => 'ΙΕΡΟΦΑΝΤΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            84 => 
            array (
                'id' => 1728,
                'postal_code_id' => 61,
                'name' => 'ΙΚΑΡΙΕΩΝ',
            'cosmote_street_name' => 'ΙΚΑΡΙΕΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            85 => 
            array (
                'id' => 1729,
                'postal_code_id' => 61,
                'name' => 'ΙΠΠΟΘΟΝΤΙΔΩΝ',
            'cosmote_street_name' => 'ΙΠΠΟΘΟΝΤΙΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            86 => 
            array (
                'id' => 1730,
                'postal_code_id' => 61,
                'name' => 'ΚΕΙΡΙΑΔΩΝ',
            'cosmote_street_name' => 'ΚΕΙΡΙΑΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            87 => 
            array (
                'id' => 1731,
                'postal_code_id' => 61,
                'name' => 'ΚΛΕΑΝΘΟΥΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            88 => 
            array (
                'id' => 1732,
                'postal_code_id' => 61,
                'name' => 'ΚΛΗΜΕΝΤΟΣ',
            'cosmote_street_name' => 'ΚΛΗΜΕΝΤΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            89 => 
            array (
                'id' => 1733,
                'postal_code_id' => 61,
                'name' => 'ΚΡΕΟΥΣΗΣ',
            'cosmote_street_name' => 'ΚΡΕΟΥΣΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            90 => 
            array (
                'id' => 1734,
                'postal_code_id' => 61,
                'name' => 'ΛΕΩΦΟΡΟΣ ΚΩΝΣΤΑΝΤΙΝΟΥΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΚΩΝΣΤΑΝΤΙΝΟΥΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            91 => 
            array (
                'id' => 1735,
                'postal_code_id' => 61,
                'name' => 'ΜΕΓΑΛΟΥ ΑΛΕΞΑΝΔΡΟΥ',
            'cosmote_street_name' => 'ΜΕΓΑΛΟΥ ΑΛΕΞΑΝΔΡΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            92 => 
            array (
                'id' => 1736,
                'postal_code_id' => 61,
                'name' => 'ΜΕΓΑΛΟΥ ΒΑΣΙΛΕΙΟΥ',
            'cosmote_street_name' => 'ΜΕΓΑΛΟΥ ΒΑΣΙΛΕΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            93 => 
            array (
                'id' => 1737,
                'postal_code_id' => 61,
                'name' => 'ΟΡΦΕΩΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            94 => 
            array (
                'id' => 1738,
                'postal_code_id' => 61,
                'name' => 'ΠΑΝΑΓΙΩΤΗ ΑΝΔΡΟΝΙΚΟΥ',
            'cosmote_street_name' => 'ΠΑΝΑΓΙΩΤΗ ΑΝΔΡΟΝΙΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            95 => 
            array (
                'id' => 1739,
                'postal_code_id' => 61,
                'name' => 'ΠΑΡΑΛΟΥ',
            'cosmote_street_name' => 'ΠΑΡΑΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            96 => 
            array (
                'id' => 1740,
                'postal_code_id' => 61,
                'name' => 'ΠΕΙΡΑΙΩΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            97 => 
            array (
                'id' => 1741,
                'postal_code_id' => 61,
                'name' => 'ΠΕΡΣΕΦΟΝΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            98 => 
            array (
                'id' => 1742,
                'postal_code_id' => 61,
                'name' => 'ΠΙΤΘΕΩΣ',
            'cosmote_street_name' => 'ΠΙΤΘΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            99 => 
            array (
                'id' => 1743,
                'postal_code_id' => 61,
                'name' => 'ΠΟΛΥΦΗΜΟΥ',
            'cosmote_street_name' => 'ΠΟΛΥΦΗΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            100 => 
            array (
                'id' => 1744,
                'postal_code_id' => 61,
                'name' => 'ΣΤΡΑΤΟΝΙΚΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            101 => 
            array (
                'id' => 1745,
                'postal_code_id' => 61,
                'name' => 'ΣΥΜΜΑΧΙΔΩΝ',
            'cosmote_street_name' => 'ΣΥΜΜΑΧΙΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            102 => 
            array (
                'id' => 1746,
                'postal_code_id' => 61,
                'name' => 'ΣΦΗΤΤΙΩΝ',
            'cosmote_street_name' => 'ΣΦΗΤΤΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            103 => 
            array (
                'id' => 1747,
                'postal_code_id' => 61,
                'name' => 'ΣΩΦΡΟΝΙΟΥ',
            'cosmote_street_name' => 'ΣΩΦΡΟΝΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            104 => 
            array (
                'id' => 1748,
                'postal_code_id' => 61,
                'name' => 'ΤΙΘΩΝΟΥ',
            'cosmote_street_name' => 'ΤΙΘΩΝΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            105 => 
            array (
                'id' => 1749,
                'postal_code_id' => 61,
                'name' => 'ΤΡΙΠΤΟΛΕΜΟΥ',
            'cosmote_street_name' => 'ΤΡΙΠΤΟΛΕΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:55',
            ),
            106 => 
            array (
                'id' => 1750,
                'postal_code_id' => 61,
                'name' => 'ΦΡΕΑΡΙΩΝ',
            'cosmote_street_name' => 'ΦΡΕΑΡΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            107 => 
            array (
                'id' => 1751,
                'postal_code_id' => 61,
                'name' => 'ΦΥΛΑΣΙΩΝ',
            'cosmote_street_name' => 'ΦΥΛΑΣΙΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            108 => 
            array (
                'id' => 1752,
                'postal_code_id' => 62,
                'name' => 'ΑΓΓΙΣΤΗΣ',
            'cosmote_street_name' => 'ΑΓΓΙΣΤΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            109 => 
            array (
                'id' => 1753,
                'postal_code_id' => 62,
                'name' => 'ΑΓΙΑΣ ΜΑΡΚΕΛΛΑΣ',
            'cosmote_street_name' => 'ΑΓΙΑΣ ΜΑΡΚΕΛΛΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            110 => 
            array (
                'id' => 1754,
                'postal_code_id' => 62,
                'name' => 'ΑΙΓΑΛΕΩ',
            'cosmote_street_name' => 'ΑΙΓΑΛΕΩ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            111 => 
            array (
                'id' => 1755,
                'postal_code_id' => 62,
                'name' => 'ΑΙΜΟΥ',
            'cosmote_street_name' => 'ΑΙΜΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            112 => 
            array (
                'id' => 1756,
                'postal_code_id' => 62,
                'name' => 'ΒΟΛΙΣΣΟΥ',
            'cosmote_street_name' => 'ΒΟΛΙΣΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            113 => 
            array (
                'id' => 1757,
                'postal_code_id' => 62,
                'name' => 'ΓΡΕΒΕΝΩΝ',
            'cosmote_street_name' => 'ΓΡΕΒΕΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            114 => 
            array (
                'id' => 1758,
                'postal_code_id' => 62,
                'name' => 'ΔΡΥΟΠΙΔΟΣ',
            'cosmote_street_name' => 'ΔΡΥΟΠΙΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            115 => 
            array (
                'id' => 1759,
                'postal_code_id' => 62,
                'name' => 'ΙΕΡΑ ΟΔΟΣ',
            'cosmote_street_name' => 'ΙΕΡΑ ΟΔΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            116 => 
            array (
                'id' => 1760,
                'postal_code_id' => 62,
                'name' => 'ΚΑΤΕΡΙΝΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            117 => 
            array (
                'id' => 1761,
                'postal_code_id' => 62,
                'name' => 'ΛΕΩΦΟΡΟΣ ΚΩΝΣΤΑΝΤΙΝΟΥΠΟΛΕΩΣ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΚΩΝΣΤΑΝΤΙΝΟΥΠΟΛΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            118 => 
            array (
                'id' => 1762,
                'postal_code_id' => 62,
                'name' => 'ΝΕΥΡΟΚΟΠΙΟΥ',
            'cosmote_street_name' => 'ΝΕΥΡΟΚΟΠΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            119 => 
            array (
                'id' => 1763,
                'postal_code_id' => 62,
                'name' => 'ΟΡΦΕΩΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            120 => 
            array (
                'id' => 1764,
                'postal_code_id' => 62,
                'name' => 'ΠΑΓΓΑΙΟΥ',
            'cosmote_street_name' => 'ΠΑΓΓΑΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            121 => 
            array (
                'id' => 1765,
                'postal_code_id' => 62,
                'name' => 'ΠΗΝΕΙΟΥ',
            'cosmote_street_name' => 'ΠΗΝΕΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            122 => 
            array (
                'id' => 1766,
                'postal_code_id' => 62,
                'name' => 'ΠΟΤΙΔΑΙΑΣ',
            'cosmote_street_name' => 'ΠΟΤΙΔΑΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            123 => 
            array (
                'id' => 1767,
                'postal_code_id' => 62,
                'name' => 'ΠΡΕΣΠΑΣ',
            'cosmote_street_name' => 'ΠΡΕΣΠΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            124 => 
            array (
                'id' => 1768,
                'postal_code_id' => 62,
                'name' => 'ΡΟΔΟΠΗΣ',
            'cosmote_street_name' => 'ΡΟΔΟΠΗΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            125 => 
            array (
                'id' => 1769,
                'postal_code_id' => 62,
                'name' => 'ΣΠΥΡΟΥ ΠΑΤΣΗ',
            'cosmote_street_name' => 'ΣΠΥΡΟΥ ΠΑΤΣΗ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            126 => 
            array (
                'id' => 1770,
                'postal_code_id' => 62,
                'name' => 'ΤΡΟΙΖΗΝΟΣ',
            'cosmote_street_name' => 'ΤΡΟΙΖΗΝΟΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            127 => 
            array (
                'id' => 1771,
                'postal_code_id' => 62,
                'name' => 'ΦΑΛΑΙΣΙΑΣ',
            'cosmote_street_name' => 'ΦΑΛΑΙΣΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            128 => 
            array (
                'id' => 1772,
                'postal_code_id' => 62,
                'name' => 'ΧΑΛΚΙΔΙΚΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            129 => 
            array (
                'id' => 1773,
                'postal_code_id' => 63,
                'name' => 'ΑΓΙΟΥ ΓΕΩΡΓΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            130 => 
            array (
                'id' => 1774,
                'postal_code_id' => 63,
                'name' => 'ΑΓΙΟΥ ΜΗΝΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            131 => 
            array (
                'id' => 1775,
                'postal_code_id' => 63,
                'name' => 'ΑΘΑΝΑΣΙΟΥ ΔΙΑΚΟΥ',
            'cosmote_street_name' => 'ΑΘΑΝΑΣΙΟΥ ΔΙΑΚΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            132 => 
            array (
                'id' => 1776,
                'postal_code_id' => 63,
                'name' => 'ΑΘΗΝΑΣ',
            'cosmote_street_name' => 'ΑΘΗΝΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            133 => 
            array (
                'id' => 1777,
                'postal_code_id' => 63,
                'name' => 'ΑΙΟΛΟΥ',
            'cosmote_street_name' => 'ΑΙΟΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            134 => 
            array (
                'id' => 1778,
                'postal_code_id' => 63,
                'name' => 'ΑΝΔΡΕΑ ΔΗΜΗΤΡΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            135 => 
            array (
                'id' => 1779,
                'postal_code_id' => 63,
                'name' => 'ΑΝΔΡΕΑ ΣΥΓΓΡΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            136 => 
            array (
                'id' => 1780,
                'postal_code_id' => 63,
                'name' => 'ΑΡΙΣΤΟΤΕΛΗ ΒΑΛΑΩΡΙΤΟΥ',
            'cosmote_street_name' => 'ΑΡΙΣΤΟΤΕΛΗ ΒΑΛΑΩΡΙΤΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            137 => 
            array (
                'id' => 1781,
                'postal_code_id' => 63,
                'name' => 'ΒΟΥΤΕΝΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            138 => 
            array (
                'id' => 1782,
                'postal_code_id' => 63,
                'name' => 'ΓΟΡΤΥΝΙΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            139 => 
            array (
                'id' => 1783,
                'postal_code_id' => 63,
                'name' => 'ΕΠΤΑΝΗΣΟΥ',
            'cosmote_street_name' => 'ΕΠΤΑΝΗΣΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            140 => 
            array (
                'id' => 1784,
                'postal_code_id' => 63,
                'name' => 'ΚΡΗΤΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            141 => 
            array (
                'id' => 1785,
                'postal_code_id' => 63,
                'name' => 'ΚΥΚΛΑΔΩΝ',
            'cosmote_street_name' => 'ΚΥΚΛΑΔΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            142 => 
            array (
                'id' => 1786,
                'postal_code_id' => 63,
                'name' => 'ΛΕΩΦΟΡΟΣ ΕΛΕΥΘΕΡΙΟΥ ΒΕΝΙΖΕΛΟΥ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΕΛΕΥΘΕΡΙΟΥ ΒΕΝΙΖΕΛΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            143 => 
            array (
                'id' => 1787,
                'postal_code_id' => 63,
                'name' => 'ΜΑΡΙΝΟΥ ΑΝΤΥΠΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            144 => 
            array (
                'id' => 1788,
                'postal_code_id' => 63,
                'name' => 'ΜΙΧΑΗΛ ΚΑΛΑΝΤΖΑΚΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            145 => 
            array (
                'id' => 1789,
                'postal_code_id' => 63,
                'name' => 'ΜΙΧΑΗΛ ΚΑΡΑΟΛΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            146 => 
            array (
                'id' => 1790,
                'postal_code_id' => 63,
                'name' => 'ΠΑΡΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            147 => 
            array (
                'id' => 1791,
                'postal_code_id' => 63,
                'name' => 'ΠΕΡΙΚΛΕΟΥΣ',
            'cosmote_street_name' => 'ΠΕΡΙΚΛΕΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            148 => 
            array (
                'id' => 1792,
                'postal_code_id' => 63,
                'name' => 'ΠΡΟΒΕΛΕΓΓΙΟΥ',
            'cosmote_street_name' => 'ΑΡΙΣΤΟΜΕΝΗ ΠΡΟΒΕΛΕΓΓΙΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            149 => 
            array (
                'id' => 1793,
                'postal_code_id' => 63,
                'name' => 'ΠΥΘΑΓΟΡΑ',
            'cosmote_street_name' => 'ΠΥΘΑΓΟΡΑ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            150 => 
            array (
                'id' => 1794,
                'postal_code_id' => 63,
                'name' => 'ΣΜΥΡΝΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            151 => 
            array (
                'id' => 1795,
                'postal_code_id' => 63,
                'name' => 'ΤΑΣΟΥ ΚΟΛΟΚΥΘΑ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            152 => 
            array (
                'id' => 1796,
                'postal_code_id' => 64,
                'name' => 'ΑΓΙΟΥ ΓΕΩΡΓΙΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            153 => 
            array (
                'id' => 1797,
                'postal_code_id' => 64,
                'name' => 'ΑΙΓΕΩΣ',
            'cosmote_street_name' => 'ΑΙΓΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            154 => 
            array (
                'id' => 1798,
                'postal_code_id' => 64,
                'name' => 'ΑΝΕΞΑΡΤΗΣΙΑΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            155 => 
            array (
                'id' => 1799,
                'postal_code_id' => 64,
                'name' => 'ΑΝΤΩΝΙΟΥ ΦΛΟΥΤΖΗ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            156 => 
            array (
                'id' => 1800,
                'postal_code_id' => 64,
                'name' => 'ΑΡΙΣΤΕΙΔΟΥ',
            'cosmote_street_name' => 'ΑΡΙΣΤΕΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            157 => 
            array (
                'id' => 1801,
                'postal_code_id' => 64,
                'name' => 'ΕΛ ΓΚΡΕΚΟ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            158 => 
            array (
                'id' => 1802,
                'postal_code_id' => 64,
                'name' => 'ΕΡΜΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            159 => 
            array (
                'id' => 1803,
                'postal_code_id' => 64,
                'name' => 'ΗΡΑΚΛΕΟΥΣ',
            'cosmote_street_name' => 'ΗΡΑΚΛΕΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            160 => 
            array (
                'id' => 1804,
                'postal_code_id' => 64,
                'name' => 'ΘΡΑΚΗΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            161 => 
            array (
                'id' => 1805,
                'postal_code_id' => 64,
                'name' => 'ΙΕΡΟΥ ΛΟΧΟΥ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            162 => 
            array (
                'id' => 1806,
                'postal_code_id' => 64,
                'name' => 'ΚΟΡΥΤΣΑΣ',
            'cosmote_street_name' => 'ΚΟΡΥΤΣΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            163 => 
            array (
                'id' => 1807,
                'postal_code_id' => 64,
                'name' => 'ΚΩΝΣΤΑΝΤΙΝΟΥΠΟΛΕΩΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            164 => 
            array (
                'id' => 1808,
                'postal_code_id' => 64,
                'name' => 'ΛΕΩΝΙΔΟΥ',
            'cosmote_street_name' => 'ΛΕΩΝΙΔΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            165 => 
            array (
                'id' => 1809,
                'postal_code_id' => 64,
                'name' => 'ΛΕΩΦΟΡΟΣ ΑΘΗΝΩΝ',
            'cosmote_street_name' => 'ΛΕΩΦΟΡΟΣ ΑΘΗΝΩΝ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            166 => 
            array (
                'id' => 1810,
                'postal_code_id' => 64,
                'name' => 'ΜΑΚΕΔΟΝΙΑΣ',
            'cosmote_street_name' => 'ΜΑΚΕΔΟΝΙΑΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            167 => 
            array (
                'id' => 1811,
                'postal_code_id' => 64,
                'name' => 'ΟΔΥΣΣΕΩΣ',
            'cosmote_street_name' => 'ΟΔΥΣΣΕΩΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            168 => 
            array (
                'id' => 1812,
                'postal_code_id' => 64,
                'name' => 'ΟΛΥΜΠΟΥ',
            'cosmote_street_name' => 'ΟΛΥΜΠΟΥ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
            169 => 
            array (
                'id' => 1813,
                'postal_code_id' => 64,
                'name' => 'ΠΑΡΝΩΝΟΣ',
                'cosmote_street_name' => NULL,
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-01 15:58:08',
            ),
            170 => 
            array (
                'id' => 1814,
                'postal_code_id' => 64,
                'name' => 'ΣΑΠΦΟΥΣ',
            'cosmote_street_name' => 'ΣΑΠΦΟΥΣ (Οδός)',
                'created_at' => '2024-02-01 15:58:08',
                'updated_at' => '2024-02-02 14:20:56',
            ),
        ));
        
        
    }
}