<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
</head>
<body>


    
    <script>
        $(function(){
            var numbers = @json($numbers);

            const baseUrl = 'https://www.cosmote.gr/eshop/global/gadgets/populateAddressDetailsV3.jsp';
            numbers.forEach(number => {

                let streetName = number.street.cosmote_street_name.toUpperCase();
                $.ajax({
                    type: 'GET',
                    url: `${baseUrl}?streetName=${streetName}&stateId=52&municipalityId=706&_=1640807210566`,
                    success(response){
                        console.log(response);
                    }
                });

            });
        })

    </script>
</body>
</html>