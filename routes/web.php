<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\PostalCode;
use App\Models\Street;
use App\Models\StreetNumber;
use Symfony\Component\DomCrawler\Crawler;
/**
 * 
 * SELECT postal_codes.code,postal_codes.name, count(street_numbers.id) as number_count FROM postal_codes,streets,street_numbers where postal_codes.id = streets.postal_code_id and streets.id = street_numbers.street_id group by postal_codes.code,postal_codes.name order by number_count desc; 
 */

use NominatimLaravel\Content\Nominatim;


use Goutte\Client;

Route::post('cosmote-ftth-check',function(){

    $number = StreetNumber::with('street.postalCode')->find(Request::get('number'));

    libxml_use_internal_errors(true);

    $baseUri = 'https://www.cosmote.gr/eshop/global/gadgets/populateAddressDetailsV3.jsp';
    $availabilityUri = 'https://www.cosmote.gr/selfcare/jsp/ajax/avdslavailabilityAjaxV2.jsp';

    $streetName = mb_strtoupper($number->street->cosmote_street_name);

    $client = new \GuzzleHttp\Client();


    $response = $client->request('GET', $baseUri."?streetName=$streetName&stateId=52&municipalityId=706&_=1640807210566");
    $html = $response->getBody()->getContents();
    $doc = new \DOMDocument;
    $doc->loadHTML($html);
    $crawler = new Crawler;
    $crawler->addHTMLContent($html, 'UTF-8');

    
    $areas = [];
    $crawler->filter('li > a')->each(function ($node,$index) use(&$areas){
        if($index > 0){
            $areas[] = $node->text();
        }
    });

    if(!sizeof($areas)){
        return response()->json([
            'status' => 'error',
            'html' => 'No areas found'
        ]);
    }

    $responseHtml = '';
    foreach(collect($areas) as $area){

        $response = $client->request('POST', 'https://www.cosmote.gr/selfcare/jsp/ajax/avdslavailabilityAjaxV2.jsp', [
            'headers' => [
                "Content-Type" => "application/x-www-form-urlencoded; charset=UTF-8",
            ],
            'form_params' => [
                'mTelno' => '',
                'mAddress' => $streetName,
                'mState'   => 'Ν. ΑΤΤΙΚΗΣ',
                'mPrefecture' => 'Δ. ΑΘΗΝΑΙΩΝ',
                'mNumber' => '2',
                'mArea' => $area,
                'searchcriteria' => 'address',
                'ct' => 'res'
            ]
        ]);

        $html = $response->getBody()->getContents();
        $responseHtml.= '<h2>Results for Area: '. $area . '</h2>';
        $responseHtml.= $html;
    }


    return response()->json([
        'status' => 'ok',
        'html' => $responseHtml,
    ]);
});

Route::get('/test4',function(){
    libxml_use_internal_errors(true);
    $numbers = StreetNumber::with('street.postalCode')
    ->whereHas('street',function($q){
        $q->where('cosmote_street_name','!=','');
    })
    ->whereHas('street.postalCode',function($q){
        $q->whereBetween('code',[10431,17234]);
    })->get();

    
    $number = $numbers->first();

    $streetName = mb_strtoupper($number->street->cosmote_street_name);


    $baseUri = 'https://www.cosmote.gr/eshop/global/gadgets/populateAddressDetailsV3.jsp';
    $availabilityUri = 'https://www.cosmote.gr/selfcare/jsp/ajax/avdslavailabilityAjaxV2.jsp';

    // $client = new \GuzzleHttp\Client(['base_uri' => 'https://www.cosmote.gr/eshop/global/gadgets/populateAddressDetailsV3.jsp']);
    // $res = $client->request('GET', "?streetName=$streetName&stateId=52&municipalityId=706&_=1640807210566");
    $client = new Client();
    $crawler = $client->request('GET', $baseUri."?streetName=$streetName&stateId=52&municipalityId=706&_=1640807210566");
    
    $areas = [];
    $crawler->filter('li > a')->each(function ($node,$index) use(&$areas){
        if($index > 0){
            $areas[] = $node->text();
        }
    });





    $client = new \GuzzleHttp\Client();
    $response = $client->request('POST', 'https://www.cosmote.gr/selfcare/jsp/ajax/avdslavailabilityAjaxV2.jsp', [
        'headers' => [
            "Content-Type" => "application/x-www-form-urlencoded; charset=UTF-8",
        ],
        'form_params' => [
            'mTelno' => '',
            'mAddress' => 'ΚΑΠΕΤΑΝ ΛΑΧΑΝΑ (ΟΔΌΣ)',
            'mState'   => 'Ν. ΑΤΤΙΚΗΣ',
            'mPrefecture' => 'Δ. ΑΘΗΝΑΙΩΝ',
            'mNumber' => '2',
            'mArea' => 'ΑΘΗΝΑ-ΔΑΓΚΛΗ',
            'searchcriteria' => 'address',
            'ct' => 'res'
        ]
    ]);

    $html = $response->getBody()->getContents();

    $doc = new DOMDocument;
    $doc->loadHTML($html);
    $crawler = new Crawler;
    $crawler->addHTMLContent($html, 'UTF-8');

    $results = [];
    $crawler->filter('tr')->each(function ($node,$index) use(&$results){
        $results[] = $node->text();
    });


    $results = collect($results);

    $cosmote200mpbs = $results->filter(function($value){
        return mb_stripos($value,'Έως 200 Mbps Διαθέσιμο στην περιοχή σου! Δες τα πακέτα') !== false;
    })->count();

    $ftth = $results->filter(function($value){
        return mb_stripos($value,'Έως 200 Mbps Διαθέσιμο στην περιοχή σου μέσω υποδομής Fiber To The Home') !== false;
    })->count();

    if($cosmote200mpbs){
        dump('200mpbs');
    }
    if($ftth){
        dump('ftth');
    }

    dd('here');

});


Route::get('/test3',function(){

    $handle = fopen(database_path('cosmote_streets_ath.csv'), 'r');

    while (($row = fgetcsv($handle, 0, ",")) !== FALSE) {
        $csv[] = $row;
    }
    fclose($handle);

    $csv = collect($csv)->flatten();

    $streets = Street::with('postalCode')->whereHas('postalCode',function($q){
        $q->whereBetween('code',[10431,17234]);
    })->get();



    $street = $streets->first();

    $nomatch = 0;
    $multimatch = 0;
    foreach($streets as $street){
        $matches = $csv->filter(function($row) use($street){
            return strpos($row, $street->name) !== FALSE;
        });

        if($matches->count() === 1){
            $match = $matches->first();
            $street->cosmote_street_name = trim($match);
            $street->save();
        }
    }


    dd('ok');


    // $numbers = StreetNumber::with('street.postalCode')->whereHas('street.postalCode',function($q){
    //     $q->whereBetween('code',[10431,17234]);
    // })->get();

    


    // $client = new \GuzzleHttp\Client(['base_uri' => 'https://submit.sfbb.gr/EligibilityCheck.aspx']);

    // $number = StreetNumber::find(4878);
    // $postalCode = $number->street->postalCode->code;
    // $streetName = $number->street->name;
    // https://www.cosmote.gr/eshop/global/gadgets/populateAddressDetailsV3.jsp?stateId=52&municipalityId=706&_=1640804713057
    // $streetNumber = $number->number;

    // $res = $client->request('POST', "?zip=->$postalCode&address=$streetName",[
    //     "body"  => "__EVENTTARGET=&__EVENTARGUMENT=&__VIEWSTATE=%2BcVCl489CAUgfC7G6ue5tlQFuWc6DsthtWTva9KJO264lO%2F%2BGrLTniKJMFo8l7Rn3xQpJGgt%2B6TiZFQNp3sMbEzZEYO49xvCZypP6SqjE0OHTrze9yIe%2FSdpjtv%2B176ZwdXYGnsMveK9O4lo1h29p63YoNJsPpMyc3fv%2Fr5PKODSsDW44FUqC68yl%2Fis1w60cXweM7uQibcNEzrYDbtjmeHEvu8AQu6hfjv%2FqlOSOt9tzlUIdsYK7t3hBxmPAujlJylgfI%2FqcPiJ8Ly6xnIjuKZO%2FHOGd%2FfcMTql2FxlF6UnCBuVpZRkJCiHHAcdc5istZPAJ41oOmXA02Vbg7wDBPzOUqWEBFZL37IYVa19E1%2BAP0L%2FU2p3dVEMERnaCn8yHTqBP7FtLbcEu0WMyFK3yPjjptMBQoMoDy9X3DPCWH2nEpjkVAnVbPxXaEUwYYHT32a0xxwYyTMN0Lyr%2FjHoReJFQEjzX6Eoy6eFW6KF6meMK18BYfp5jZi2MQwsiTwcI1LLd5t3LNep17XZAxw2%2FtrDsQCkz9Fz%2FYMTUaKzoyQGYGbkjynXDOt0pSLhRaoNicgddHGBTtU80HKG0kn4AB4zx2o8tbsu3Btvl7%2FmZo1DfZMz21yZWzlLAPymqICCm6ZGfaI5ZhyXi0wKuzYoHdbbJmC0rLRAvcWDTG4V7jFubVoOBq%2B4AD47VtsxT7hK%2FYvccQXj%2BUynSF274McZIFaN72borAFpVuvGMVnMwajGjU%2BGnptVL6KpOf8mP7Y4S8gOewDfPVacpLf%2FIoI1vopDxKiQk7Rnu8YFtXJcMdeyFD833DxYxh875P0xLJghHHXeXjv4DNFjyjV2MplF3cg6e4EMHs%2F7RSioRuiJv%2B1yG9a2jKjBtXFrMeO0OfkTXrl2bCYA8%2FQSepcbbDoWGmkiOd6A0X7fsx%2Bx2Bkx1nqEwzIqRqk2svnO9JSyZcWzZ5l1jEu1oGPNSwYKydFHe8NNWYUSwbZB1rANd85PBLGaEFT5Pmh5hM2zN8hgJt2fmvCyiKkVoBRpw%2BrmXrVA7V%2B8LT%2Fr%2FxC6ZHF6lTbJW15cQDObVKPzjr20JvAo%2FJYlsVacpbAGkYUsRWBjiFe5prGQ1R0AEs6JVxuB4jbT2PpZrPwQl6QoJXOUG%2BqEwMbQqyLh1DTq1e2GbgOFOQtm7wCHlYNfWWfCWpDjgq1DZhzJgNbeL3S7mUeg5fNgz8MiThmMJVOpZTExk2vucpKbYL4imJjTQGGUv3fRURZUWrXiTWzxV3GaASYupmbHrSxHUQpx4kyggrigrjyAZdoR8WIb4hbCOxVEj9Sp3vuE7dBVVX9dSrD8hDU2IL82OA7FwJprTFhKIwKNAPRtTNBn5tUNwMM5fVdUVSi3ph%2F0O%2Fb3bVD0wSMBpm2l87ipuA4C2uvHr2gkd6EyhyJxCB0lV%2BNhsQaCNPPs1SP3GsN9JlD0%2BIt%2B5xCFdMEz7EG1yOZFUmGIxwgzOrWHNjO%2Fyjuo65E7tsjwwcWSlOu2OtDOBm7apATn8NS66hTaa6QsGbWHsZ6%2BX8mQMkJ8xSWlDwyqDxTXmcpPS03FKkDj72wClmU%2B2Tiz1S4b9yYZA0c%2Fk6LfdDIOvXXONh5EEmuCI89rWrvlrojKuGarQ30rbQpgzIBCRluKU0wGVYRxqOdkkrN4bN%2B7D4PH5XtUSIG9Wt%2FW%2B9XEMfRxIwzStHve6AaoP6fE7dDNnTdI34hXS3NFLPGbwjdQc%2BoG5LJ02KTozD1mb7%2F4GH8wleawhJINfwvWFiSptCVmkj0tTdw%2BxJs2ZBTC7%2FOFC9qKCLqdzPWaEqCP7jAxH9woSGAhH1%2F8SgBuz64J5h5Oj1kV6II%2FlNGr7wivO9tWAfO3H6yhDsMdewMU3DA1%2F55FJrFdPY1rUjk28T3BCp6UUf5zKuBiXHG6pwXBKLwAwANfqX3rP6XxNnaMR8xGNwZP%2FgGY02Gi0vHMFBIPWFrHVWDTjlHtcLxD4eB6XoQvKfwlIPGppk%2Fz6%2BILoHjVnnnwXFjmQE7vRJbnQvCjFT8K2KCiZpQs1yAx8YbVtrzI76spvEH6oC8aVXwzTYEP%2F21JisOSWBmRqD1rTwoEyKN4%2BDh2RRanokCTopYGx%2FDOSz1Xj26D8HG6vLfc6dNUgk5%2FZbyVXFVEu5Lj0NgVzt1Qh6Mvbf8KAvZLGbXO%2FCSQ%2B34zBg%2BPK5cquUERR1QLSvKGAH3BKlqhd%2BtBUhEHPWUDzEn%2Bq1yYI4mCvwPNN6zxntT74EmzYOhxG5yhOd0tE62OEgJphLgXOl6dgxaDpAHCt6kmokbZy3LrF9B4YY%2B%2FFL1iRJq7CLhByCDtV8x%2FPveM0%2BnE3GYhBlGPb%2BuwpdXHItcviKv6KvQ%2FTkNahKP2l1oyuRFI3yGneouRH5sHscghAhIYB2oLE0ysna%2B%2Bs1lm6JwNiNjjLZey%2FhcIoYhOtqFsnz0ooTbfPc2oPi7ms6BaqtPnyXzEhwSH0ESKB6F8t2iZuqhkHjM7JSU2MUhDllRHzZWY4FpqIxg7KtdNPPmBg7v92dPoMcjm11VcRB%2Fam6Vao1LxuIftJ%2B6QPo7r3%2FgPCrQ0FzH177hZT%2BOCifKqT4Sys%2FLvVXeLrwBQmhihK4O2LKiNELpyohLSzFuXhryYrFc%2BJT08Qtt2%2Bq9FHnNh5t1mm9PdO93Ww4krNmqZUryFQjCJJEmon8RDC%2BgX6bb9IevROXOw5S%2FOL56q5fXeYwQYspIAg8vovpkUfwxUuDLEXPF%2Bjw0z0LzL9xSLc8jpIYd47znSM8iYc2gqpjO0vk7UcqWJWvBvqxCrvBJShzYQxtGIzQS1Ofek4S438vNjfjgdRy6NqFpyP%2Fmssc%2FdMosD9iAR%2B3V7Z9TWcZNpBMwBcP3mdgryfPeLv8sJgPgyZDmYCgWi49OYT6xeVHnP%2BwS1X02HfQJW%2Bl7y9pfeStTOXmuqk3JDDCLMU77qt9P8g7vwWqSxZoAVQgKGAAVllFkKzQvy%2BEzLuaMZ8VUfCQkyBrzCOcjnC9CBx3shTpCWZxE5JB4UncVV9RoBxXdLeLvVeZpjSlTq%2FxG4RcDtJ40oQMaLx4E%2FcXYCcZO5WNu%2BUsXcDFQ7SH9gAhrD158EULdBvb4B3d5amUVX%2FxiJofyJPJVvI9ketvQUFXjnlYxe0RCxIF5rVKn%2F8aTM4cLGw82UXdBXXGEr4t8N5ahpEIGhB3HjgQeQcFHR4ZD%2FXyiK8lWRc1YR2%2F4wbduKTLtvBXr%2BRVO6HQZoOELoLLqbSE0frYYeaGVKvj42j0OIGfuzKlFwL%2B%2Beq%2Bokslah1O9QCaFCDXaE6UU3Qz%2BGnTGcIYTGtkX8mTeciAfG%2FVyrG%2FvpOgKneB4ggD%2Bp%2FiGWx%2FbcfFD%2B9Jxy5rR9ZWrW6U2Pzs3ZdfpFQvBohJGFtMlwVmHzGiT4CD34c%2BxjTZz8ErhPNhvy4NJ%2FHNYpdaB5Zl1MJSi1nh7TyVkq5IEjI%2Br6Dayk8wxE4UxBGUeizDFVgk98xeNNINgOcgEWxk%2F%2BJaull2VQ4RaK9lLTTpjbx6X%2Bu7Jf0PsIcpjelI39MLUjs%2FnMfCv8AyLdZkJZZSP%2FFnAbsCal%2FIxroP%2F6Zj1SAVEKcw%3D%3D&__VIEWSTATEGENERATOR=730692BE&__EVENTVALIDATION=PHZtXFSysZk7oYZs2mb2DKkE0SFl%2BZramke8RjRKd6TmFh%2FY39%2Fb56ODLwoMkBPkGphqcAZWa9fUxvIUpEZWGBbmzqGH8xJOtbA84V7sUxT4%2Bus8&g-recaptcha-response=03AGdBq25C-jihatcQPAuk6odPz37U9jwMEcYA2WS_CTu6tm5rBxZWgzvW88Ls44zXEfT-zqHfl372YJ97_vXicIWrU_NHM7CQ-PVkVUEZ-V8RYdubFEBSFT_P7LxJLXwwxoo8HTLLCJEpDZKNsDm_nsywWaVTjsobNbgL2Qao_N2oI4_DH2p8vce9zfSAeMWLHw0Nvzax6unj1pN78UqLCXStNyKOOkZ1IKZtKt08UbUy-21iOHE6fRWX3IWb5dINUkJdTaIbu5Ucz6iSx7ruGbG-8VjUdJSlMeZSx427ZOIC1BoWBEobD2Ou9fxjyb9CMpTuXTsiFNkzjkfn8Y3fF8S0jLHSfvqLfApKwwla4P8e5EVINNmtJq3jjIIjDfJ1yyh-BlU-VF6mMtbnmS5S7KTiQyumSz3vuMDT5anXaQ__q5OvKhzGNx7iOyE-NUir9xGxxcri0eQZ&ctl00%24cphMain%24txtStreetNumber=27&ctl00%24cphMain%24txtStreetNumber%24CVS=&ctl00%24cphMain%24btnCheckEligibility=%CE%88%CE%BB%CE%B5%CE%B3%CF%87%CE%BF%CF%82&ctl00_cphMain_ctl02_IE=%5B%5D&DXScript=1_187%2C1_101%2C1_180%2C1_130%2C1_137%2C1_121%2C1_139&DXCss=1_7%2C1_16%2C1_8%2C1_6%2C1_14%2Chttps%3A%2F%2Ffonts.googleapis.com%2Fcss%3Ffamily%3DOpen%2BSans%3A400italic%2C400%7CArimo%3A400%2C700%26subset%3Dgreek%2C%2F_css%2FsiteV2.bundle.min.css%3Fv%3D1.0.2.9%2C%2F_css%2FlandingPageBootstrap.css%3Fv%3D1.0.2.9"
    // ]);

    // $contents = $res->getBody()->getContents();
    // return $contents;

});

Route::get('/test2',function(){
    $num = StreetNumber::with('street.postalCode')->first();

    $streetName = $num->street->name;
    $postal = $num->street->postalCode->code;

    $query = "$num->number $streetName";

    $url = "http://nominatim.openstreetmap.org/";
    $nominatim = new Nominatim($url);

    $search = $nominatim->newSearch()
    ->country('Greece')
    ->postalCode($postal)
    ->query($query)
    ->addressDetails();

    $result = $nominatim->find($search);

    dd($result);


});

Route::post('ftth/refresh',function(){

    $countBefore = StreetNumber::where('cosmote_200_ftth',1)->count();
    Artisan::call('ftth_count:update');
    $countAfter = StreetNumber::where('cosmote_200_ftth',1)->count();

    session()->flash('Success','Found '.(floatval($countAfter) - floatval($countBefore)). ' new address with ffth!');
    return redirect()->back();
});

// Route::get('/test',function(){
//     $handle = fopen(database_path('sorted.csv'), 'r');

//     while (($row = fgetcsv($handle, 0, ",")) !== FALSE) {
//         $csv[] = $row;
//     }
//     fclose($handle);

//     $codes = collect(array_map(function ($values) use ($csv) {
//         return array_combine($csv[0], $values);
//     }, array_slice($csv, 1)))->where('eligible_code','!=','');



//     foreach($codes as $code){
//         $postalCode = PostalCode::where('code',$code['code'])->first();

//         if($postalCode){
//             $postalCode->name = $code['name'] ?? '';
//             $postalCode->save();
//         }

//     }
// });



Route::get('/', function () {

    $handle = fopen(database_path('sorted.csv'), 'r');

    while (($row = fgetcsv($handle, 0, ",")) !== FALSE) {
        $csv[] = $row;
    }
    fclose($handle);

    $codes = collect(array_map(function ($values) use ($csv) {
        return array_combine($csv[0], $values);
    }, array_slice($csv, 1)))->where('eligible_code','!=','');

    return view('home',compact('codes'));
});


Route::get('/home', function () {


    if(Request::has('postal_code')){
        $postal = Request::get('postal_code');
        $numbers = StreetNumber::with('street.postalCode')->whereHas('street.postalCode',function($q) use ($postal){
            $q->where('code',$postal);
        })->get();
    }else{
        $numbers = [];
    }


    $postalCodes = PostalCode::whereBetween('code',[10443,12461])->orderBy('ftth_count','desc')->get();

    return view('welcome',compact('numbers','postalCodes'));
});



