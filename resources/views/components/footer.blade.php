

@props([
    'lists'
    ])




<div class='flex flex-col gap-10  w-full min-h-[551px] bg-semiBlack mt-[250px] pt-[57px] pl-[150px] pr-[147px] '>
      <div class='flex flex-col md:flex-row gap-y-8 justify-between items-center w-full  '>
        <h1 class='text-slate font-semibold font-manrope text-xl md:text-4xl'> Ready to Take your next step?</h1>
        @php
            $name='start free trial'
        @endphp
        <x-button :name="$name"/>
      </div>


      <hr class='w-full text-slate text-center mx-auto border-[1px] pr-[147px]'/>


      <div class='w-full grid xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-[54px]  text-slate'>
      @foreach($lists as $list)
    
            <div>

            <p class='text-nowrap font-manrope font-normal text-slate text-[1.15rem] leading-[24.6px] capitalize'>{{$list['title']}}</p>
            <ul class='leading-8 list-disc cursor-pointer space-y-2 pl-6 capitalize  '>
                   @foreach ($list["sublist"] as $key=>$value)
                   <li class='text-base font-manrope font-normal'>{{$value}}</li> 
                   @endforeach
                             
                 
             
                
                </ul>
            </div>


        @endforeach
  

      </div>

    