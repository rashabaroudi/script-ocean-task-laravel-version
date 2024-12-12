@props([
    'links'
    ])




<nav
      class="flex items-center justify-between flex-wrap p-6 fixed w-full z-10 top-0 h-[95px]"
      x-data="{ isOpen: false ,isActive:false}"
      @keydown.escape="isOpen = false,isActive=false"
      :class="{ 'shadow-lg bg-slate' : isOpen , 'bg-transparent' : !isOpen}"
    >

 
      <!--Logo etc-->
  
      <h1 class='font-semibold text-[1.75rem] leading-[2.39rem] font-manrope capitalize '>logo</h1>

<!--   
      Toggle button (hidden on large screens) -->
      <button
        @click="isOpen = !isOpen"
        type="button"
        class="block lg:hidden px-2 text-semiBlack focus:outline-none"
        :class="{ 'transition transform-180': isOpen }"
      >
        <svg
          class="h-6 w-6 fill-current"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
        >
          <path
            x-show="isOpen"
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
          />
          <path
            x-show="!isOpen"
            fill-rule="evenodd"
            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
          />
        </svg>
      </button>
    <!-- {/* navbar menu */} -->
    <div className='menu'>
      <!-- Menu-->
      <div
        class="hidden md:flex flex-row justify-center items-center gap-16 "
        :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"
        @click.away="isOpen = false"
        x-show.transition="true"
      >
        <ul
          class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center"
        >
        @foreach($links as $key => $value)
        <li  value="{{ $key }}" class="mr-3 capitalize font-manrope font-semibold text-sm lg:text-base pt-4 pb-4 pl-5 pr-5"
           @click="isActive = true"
          :class="{'border bg-black text-white rounded-2xl pt-4 pr-5 pb-4 pl-5 border-transparent ' :isActive,'bg-transparent':!isActive}"
          >
            <a
              class="inline-block "
              href="#"
              @click="isOpen = false"
              >{{  $value }}
            </a>
          </li> 
        @endforeach 
            </ul>
            <div class='flex flex-row justify-center items-center gap-4 '>
                <p class='font-semibold text-lg font-manrope capitalize text-semiBlack'>sign up</p>
                @php
                    $name='log in'
                @endphp
                <x-button :name="$name"/>
             </div>
      </div>
    </nav>
