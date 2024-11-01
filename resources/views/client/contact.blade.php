<x-template.layout title="{{$title}}">
    <x-organisms.navbar cartCount=10 :path="$shop->path"/>
    @if($title=='Contact')
    <div class="py-md-5 py-2">
        <div class="container about-text">
         
        <h1 class="font-primary text-center mt-5">Contact Us</h1>
        <h4 class="font-secondary text-center">{{$shop->desc}}</h4>
        </div>
    
        <div class="img-about-us mt-4">
        <img src="{{ asset('assets/images/about-us-lg.png') }}" alt="" class="img-fluid">
        </div>
    </div>
@else
    <x-molecules.about.hero :shop="$shop"/>
    @endif
    <x-molecules.about.shipping-returns />
    <x-molecules.about.warranty />
    <x-molecules.about.f-a-q />
    <x-organisms.footer :shop="$shop"/>
  </x-template.layout>