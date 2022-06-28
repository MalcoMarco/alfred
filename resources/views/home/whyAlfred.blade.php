<x-page-section id="whyAlfred">
    <x-slot name="page">{{__('Why alfred')}}</x-slot>
    <x-slot name="title">{{__('What sets alfred apart')}} </x-slot>
    <div class="row justify-content-center flex-wrap">
        <div class="col-lg-3 mb-2">
            <x-page-cards class="mycard-bg-primary">
                <x-slot name="image"><img src="images/icons/finger.png" alt=""> </x-slot>
                <x-slot name="title">{{__('Compliance Layer')}} </x-slot>
                <p class="text-p">
                    {{__("KYC and AML are facilitated by trusted partners across the industry. Our gateways are made up of customer identification, screening, and transaction monitoring capabilities needed to operate compliant payment operations")}}.
                </p>
            </x-page-cards>
        </div>
        <div class="col-lg-3 mb-2">
            <x-page-cards class="mycard-bg-primary">
                <x-slot name="image"><img src="images/icons/handMoney.png" alt=""> </x-slot>
                <x-slot name="title">{{__('Instant Settlement')}} </x-slot>
                <p class="text-p">
                    {{__("Avoid costly and slow SWIFT transfers and settle instantly between parties. USDC on the network move between sending and receiving parties in seconds")}}.
                </p>
            </x-page-cards>
        </div>
        <div class="col-lg-3 mb-2">
            <x-page-cards class="mycard-bg-primary">
                <x-slot name="image"><img src="images/icons/hands.png" alt=""> </x-slot>
                <x-slot name="title">{{__('Liquid')}} </x-slot>
                <p class="text-p">
                    {{__("Part of a robust local pay-out network, we make cash accessible at your convenience. Withdraw to a local bank account or at one of our local cash locations")}}.
                </p>
            </x-page-cards>
        </div>
        <div class="col-12 d-flex justify-content-center mt-5">
            <button class="btn btn-primary">{{__('Start Saving')}} </button>
        </div>
    </div>
</x-page-section>