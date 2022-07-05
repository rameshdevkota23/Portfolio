<x-layout>
    <x-slot name='title'>Home</x-slot>
    <x-slot name='content'>
       <div class="mt-5">
        <div class="text-center">
            <img src="{{asset('img/rms.jpg')}}" alt="" class="img-thumbnail" width="250px" height="150px">
    
        </div>
        <div class="mt-5 text-white mx=5 text-justify"></div>
        <h1 class="fw-bold st-font">Hello</h1>
        <div class="px-4" style="line-height: 2rem;">
        <p>
            Myself Ramesh Devkota
Currently I am studying CSIT in  Kathmandu college of Technology.  
I am a type of extrovert one. I love enjoying more in social work.
 I love interacting with new people, sharing new ideas, policies with them. 
 In future too i would like to make my own business as a successful entrepreneur.
  Mostly, i love solo travelling, overjoyed at writing, fan at photography .
  I also love to enjoy n learn new skills n experience at various new places. 
  In free time too i love trying n exploring new things through drawing.
   Final one i had one principle that i believe that 'idea without action cannt propel you forward'. Thank you
        </p>
    </div>
    <div class="textcenter">
        <a href="{{route('contact')}}" class="btn btn-outline-warning mx-5 my-3">
        Hire Me</a>
        <a href="{{route('contact')}}
        " class="btn btn-outline-info">Contact</a>
    </div>
       </div>
    </x-slot>
</x-layout>