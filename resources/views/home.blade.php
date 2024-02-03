<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Ftth availability athens</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .modal-body{
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .modal-body p{
                margin-bottom: 0;
            }

            .modal-body ion-icon{
                font-size: 24px;
                width: 50px;
            }

            *{
                box-sizing: content-box;
            }
        </style>
    </head>
    <body class="antialiased">

        <div class="container mt-8">

            @if(session()->has('Success'))
            <div class="alert alert-primary" role="alert">
                {{session()->get('Success')}}
              </div>
            @endif

            <div class="mb-4" style="display:flex;flex-wrap:wrap">
            @foreach($postalCodes as $postalCode)
                    <form action="{{route('home')}}">
                        <input type="hidden" name="postal_code" value="{{$postalCode->code}}">
                        <button style="margin-left:4px;margin-right:4px"
                            type="submit"
                            class="btn {{Request::get('postal_code') == $postalCode->code ? 'btn-success' : 'btn-light'}}">
                            {{$postalCode->code}}
                            ({{$postalCode->ftth_count}})
                        </button>
                    </form>
            @endforeach
            </div>

            @if(Request::get('postal_code'))
                <iframe
                width="100%"
                height="450"
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/search?key={{config('google_maps.api_key')}}&q=Athens+{{Request::get('postal_code')}}" allowfullscreen>
            </iframe>
            @endif


            <form action="/home">

                <div class="input-group mb-3">
                    <input value="{{Request::get('postal_code')}}" name="postal_code" class="form-control" type="search" placeholder="Πληκτρολόγησε τ.κ.">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                  </div>
            </form>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            ΟΔΟΣ
                        </th>
                        <th>
                            ΟΔΟΣ (COSMOTE)
                        </th>
                        <th>
                            ΑΡΙΘΜΟΣ
                        </th>
                        <th>
                            Cosmote 200mbps
                        </th>
                        <th>
                            200mpbs Ftth
                        </th>
                        <th>
                            Check cosmote
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($numbers as $number)
                    <tr>
                        <td>
                            {{$number->id}}
                        </td>
                        <td>
                            {{$number->street->name}}
                        </td>
                        <td>
                            {{$number->street->cosmote_street_name}}
                        </td>
                        <td>
                            {{$number->number}}
                        </td>
                        <td>
                            @if($number->comsote_200 == true)
                                <ion-icon style="color:rgb(125, 255, 125)" name="checkmark-circle"></ion-icon>
                            @elseif($number->comsote_200  === 0)
                                <ion-icon style="color:rgb(146, 17, 17)" name="close-circle-outline"></ion-icon>
                            @endif
                        </td>
                        <td>
                            @if($number->cosmote_200_ftth == true)
                                <ion-icon style="color:rgb(125, 255, 125)" name="checkmark-circle"></ion-icon>
                            @elseif($number->cosmote_200_ftth  === 0)
                                <ion-icon style="color:rgb(146, 17, 17)" name="close-circle-outline"></ion-icon>
                            @endif
                        </td>
                        <td>
                            @if($number->street->cosmote_street_name)
                                <button data-route="{{route('cosmote.check-availability')}}" data-number-id="{{$number->id}}" class="cosmote-availability-check btn btn-light">
                                    check
                                </button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            </script>

        <script>
            $(function(){
                $(document).on('click touchend','.cosmote-availability-check',function(){
                    $.ajax({
                        type: 'POST',
                        url: $(this).data('route'),
                        data: {number : $(this).attr('data-number-id')},
                        success(response){

                            $('.modal .modal-title').html(response.status)

                            if(response.status === 'success'){
                                if(response.fiber){
                                    $('.modal .modal-body').html(`
                                        <ion-icon style="color:rgb(125, 255, 125)" name="checkmark-circle"></ion-icon>
                                        <p>Has fiber connection</p>
                                    `);
                                }else{
                                    $('.modal .modal-body').html(`
                                        <p>No fiber connection</p>
                                    `);
                                }
                            }else{
                                $('.modal .modal-body').html(response.message);
                            }

                            $('.modal').modal('show')
                        }
                    });
                });
            });
        </script>
    </body>
</html>
