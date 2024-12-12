@props(['cards'])


<x-headline title="What Our Clients Says About us" paragraph=""  style='text-center'/>
  
<div id='slick' class='container w-full  space-y-3 min-h-[694px]  m-auto'>
   
        

            @foreach ($cards as $card )

            <x-card :name="$card['name']"  :comment="$card['comment']" :photo="$card['photo']"/>
            @endforeach
        
   
   
</div>