@props([
    'image',
    'title',
    'subtitle',
    'description',
])
<div class="slide-item">
    <div class="container-bg-hero absolute inset-0">
        <img src="{{$image}}" alt="Hero Slider 1"/>
    </div>
    <div class="container-content-hero flex flex-col justify-center items-center text-center text-white z-10 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 gap-8">
        <span class="text-lg"> {{$title}} </span>
        <h2 class="md:text-7xl text-4xl"> {{$subtitle}} </h2>
        <h2 class="md:text-7xl text-4xl font-bold"> {{$description}} </h2>
        <div class="container-btn-hero flex items-center justify-center gap-8">
            <x-shared.button variant="secondary" >
                GET STARTED 
           </x-shared.button> 
           <x-shared.button>
                LEARN MORE
           </x-shared.button>                          
        </div>
    </div>
</div>