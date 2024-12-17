<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>landing page</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
      <!-- Add the slick-theme.css if you want default styling -->
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

        
        </head>
    <body class="bg-slate px-3 md:mx-auto flex flex-col justify-center items-center gap-[80px] ">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

     
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js"
      defer
    ></script>
       
    
   
    <!-- Alpine Plugins -->
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
 
 <!-- Alpine Core -->
 <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
       
    
    <div class="mx-auto flex flex-col justify-center items-center gap-[80px] " x-data>
    
        <x-layout>

        <x-slot:title>
            my Landing page
        </x-slot>     

       
        @php
    $cardsData=array(
        "card1"=>array(
            "id"=>1,
            "name"=>"Jane",
            "comment"=>"I was amazed by how intuitive the platform is. Even with no prior experience, I was able to design a beautiful website in no time!",
            "photo"=>"/assets/images/Jahne.png"
        ),
        "card2"=>array(
            "id"=>2,
            "name"=>"John",
            "comment"=>"I was amazed by how intuitive the platform is. Even with no prior experience, I was able to design a beautiful website in no time!",
            "photo"=>"/assets/images/John.png"
        ),
        "card3"=>array(
            "id"=>3,
            "name"=>"mila",
            "comment"=>"I was amazed by how intuitive the platform is. Even with no prior experience, I was able to design a beautiful website in no time!",
            "photo"=>"/assets/images/John.png"
        ),
   
    )
@endphp
    <x-hero />
    <x-headline title='Discover The Power of Ai' paragraph='Create stunning, professional designs effortlessly using our AI-driven tools. Let the AI handle the heavy lifting, so you can focus on your vision' style='text-center'/>
    <x-with-ease-section/>
    <x-portfolio-section/>
    <x-creative-section/>
    <x-blogging-section/>

   <x-carousel :cards=$cardsData/> 

</x-layout>
</div>

<script type="text/javascript">

$('#slick').slick({
 dots: true,
 arrows:true,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>

    </body>
</html>