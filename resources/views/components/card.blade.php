@props([
    'name','comment','photo'
    ])







<div class='hover:scale-90 duration-200 w-full min-h-[443px] p-4 flex flex-col justify-center items-center border shadow-2xl gap-4 bg-[#F9F9FF]'>
        
        
        <h1 class='font-manrope  text-[#69A5A4] font-bold text-[12.5rem] leading-[273px]'>"</h1>
        <p class='font-manrope font-normal text-[1rem] text-[#3C4A4A] leading-5 text-center'>{{$comment}}</p>
        <hr class='border-solid w-[40%] border-[3px] border-[#69A5A4] text-center m-auto'/>
        <div class='flex flex-col justify-center gap-4'>
        <img src='{{$photo}}' width={93} height={93} class='rounded-full'/>
        <h3 class='font-manrope font-normal text[1rem] text-[#3C4A4A] text-center'>{{$name}}</h3>
        </div>
        
    </div>