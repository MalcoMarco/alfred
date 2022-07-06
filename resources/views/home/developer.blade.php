<x-page-section id="developer">
    <x-slot name="page">{{__('Developer Tools')}}</x-slot>
    <x-slot name="title">{{__('Powerful and Easy-to-use APIs ')}} </x-slot>
    <x-page-card-image-r>
        <x-slot name="text">
            We’ve spent countless hours building a plug and play API here at Alfred so your team can collaborate and begin to send money quicker and cheaper than ever before. No need to stitch together disparate systems or spend months integrating functionality.
        </x-slot>
        <x-slot name="image">
            <img src="images/powerful.png" class="img-section" alt="">
        </x-slot>
        <x-slot name="btn">
            <button class="btn btn-primary mt-4">{{__("Request documentation")}} ></button> 
        </x-slot>
    </x-page-card-image-r>
</x-page-section>