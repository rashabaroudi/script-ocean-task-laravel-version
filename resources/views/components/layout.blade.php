
<html>
    <head>
    @vite('resources/css/app.css')

        <title>{{ $title ?? 'laravel app' }}</title>
       <!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>


   
    </head>
    <body>
    
  
    @php

               $links=array(
                 1=>'home',
                 2=>'extensions',
                 3=>'about'
               );
    @endphp
    <x-navbar :links="$links" />
        {{ $slot }}


        @php

          $lists=array(
            "list1"=>array(
                "title"=>"Quick links",
                "sublist"=>array(
                    'Home',
                'theme',
                'extensions',
                'pricing',
                )
            ),
            "list2"=>array(
                "title"=>"about",
                "sublist"=>array(
                    'careers',
                'investor relations ',
                'our brand',
                'our history',
                'accessibility',
                'press and media',
                )
            ),
            "list3"=>array(
                "title"=>"support and resources",
                "sublist"=>array(
                'FAQ',
                'documentation ',
                'blog',
                'tutorials',
                )
            ),
            "list4"=>array(
                "title"=>"contact information",
                "sublist"=>array(
                'Email:info@example.com',
                'Phone: +1 (123) 456-7890',
                'Address: 123 Main Street,Anytown, USA',
                )
            ),
          )
                
                

                
        @endphp
    <x-footer :lists="$lists"/>
    

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    </body>
</html