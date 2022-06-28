<x-page-section id="digitalDolar">
    <x-slot name="page">{{__('Digital Dollar')}}</x-slot>
    <x-slot name="title">{{__('USDC Coin')}} </x-slot>
    <x-page-card-image-r>
            <x-slot name="text">
                USDC is a borderless dollar that is exchanged in the same way we share any other digital content today. It is a reserve-backed asset pegged 1:1 to the value of the US Dollar and moves at the speed of the internet. No matter how the USDC moves through the economy the underlying dollars never leave a FDIC-insured US Bank account. At Alfred we use USDC to help you reduce friction, costs, and intermediaries in the process of sending money to Latin America.
            </x-slot>
            <x-slot name="image">
                <img src="images/coin.png" class="img-section" alt="">
            </x-slot>
            <x-slot name="btn">
                <button class="btn btn-primary mt-4">{{__("Learn More")}} </button>  
            </x-slot>
    </x-page-card-image-r>         
</x-page-section>