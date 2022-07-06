<x-app-layout>
    <section class="section ">
        <div class="row">
            <div class="col-lg-6">
                {{$slot}}
            </div>
            <x-maps-send></x-maps-send>
        </div>
    </section>
</x-app-layout>