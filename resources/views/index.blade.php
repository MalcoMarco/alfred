<x-app-layout>
    {{-- HOME --}}
    <section class="section d-flex justify-content-center align-items-center" id="home">
        @include('home.home')
    </section>
    {{-- PARTNERS --}}
    @include('home.partners')

    {{-- WHY-ALFRED --}}
    @include('home.whyAlfred')

    {{-- SOLUTION --}}
    @include('home.solution')

    {{-- DIGITAL DOLAR --}}
    @include('home.digitalDolar')

    {{-- DEVELOPER --}}
    @include('home.developer')

    <div id="contact" class="section pt-5 mt-3">
        {{-- CONTACT --}}
        @include('home.contact')
    
        {{-- FOOTER --}}
        @include('home.footer')
    </div>

</x-app-layout>
