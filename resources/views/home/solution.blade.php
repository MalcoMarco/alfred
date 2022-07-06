<x-page-section id="solutions">
    <x-slot name="page">{{__('How alfred works for you')}}</x-slot>
    <x-slot name="title">{{__('Solutions')}} </x-slot>
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-md-6">
                    <x-page-cards>
                        <x-slot name="image"><img src="images/icons/business.png" alt=""> </x-slot>
                        <x-slot name="title">{{__('Businesses')}} </x-slot>
                        <p class="text-p">
                            {{__("No more slow and expensive transfers for your business. Skip the hassle of working with traditional banks and leverage low fees, international payroll and digital dollar accounts today")}}.
                        </p>
                    </x-page-cards>
                </div>
                <div class="col-md-6">
                    <x-page-cards>
                        <x-slot name="image"><img src="images/icons/person.png" alt=""> </x-slot>
                        <x-slot name="title">{{__('Peer to Peer')}} </x-slot>
                        <p class="text-p">
                            {{__("Avoid intermediaries and send money peer to peer at no cost! You can receive directly to a local phone number and cash out, no bank account needed!")}}
                        </p>
                    </x-page-cards>
                </div>
                <div class="col-md-6">
                    <x-page-cards>
                        <x-slot name="image"><img src="images/icons/business.png" alt=""> </x-slot>
                        <x-slot name="title">{{__('Store wealth in Dollars')}} </x-slot>
                        <p class="text-p">
                            {{__("Store your funds in USDC and combat your local inflation. USDC is a reserved back currency pegged 1:1 to the value of the US Dollar and is backed 100% by our friends at Circle. Scroll down to learn more")}}.
                        </p>
                    </x-page-cards>
                </div>
            </div>
        </div>
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <div><img src="images/solutions.png" class="img-fluid" alt=""></div>
        </div>
    </div>        
</x-page-section>