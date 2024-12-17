@props([
    'title', 'paragraph','style'])




<div class='flex flex-col justify-center max-w-fit p-2 gap-y-[24px] '  >
        <div class="flex flex-col gap-y-[24px] {{ $style }} "    x-intersect="$el.classList.add('scale-up-center')">
            <h1 class=' text-4xl  md:text-[3.15rem]  font-bold leading-[68px] font-manrope text-semiBlack '  >{{ $title }}</h1>
            <p class='max-w-screen-sm text-base text-semiBlack font-manrope font-[500] '>{{ $paragraph }}</p>
        </div>
      
      
    </div>