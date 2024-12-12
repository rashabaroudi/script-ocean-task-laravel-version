
<html>
    <head>
    @vite('resources/css/app.css')

        <title>{{ $title ?? 'laravel app' }}</title>
       <!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>


        <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js"
      defer
    ></script>

    
   
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
                "title"=>"Quick start",
                "sublist"=>array(
                    "home","extensions"
                )
            ),
            "list2"=>array(
                "title"=>"Quick start1",
                "sublist"=>array(
                    "home","extensions"
                )
            ),
          )
                
                

                
        @endphp
    <x-footer :lists="$lists"/>
    

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    </body>
</html