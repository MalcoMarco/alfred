<x-page-with-map>
    <h2 class="title-send">{{__("Send money")}} <img src="images/icons/sendMoney.png" alt=""> </h2>
    <h1>{{__("quickly and easily")}} </h1>
    <form action="#" class="form">
        <div class="mb-3">
            <label for="sendfrom" class="form-label">{{__("Send from")}} </label>
            <div class="form-shadow">
                <select id="sendfrom" class="form-select">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
            </div>
            </div>
        <div class="mb-3">
            <label for="sendto" class="form-label">{{__("Send to")}} </label>
            <div class="form-shadow">
                <select id="sendto" class="form-select">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="options" class="form-label">{{__("Payment Options")}} </label>
            <div class="d-flex justify-content-between flex-wrap">

                <div class="check-shadow">
                    <label class="" for="bankacount">
                        <img src="images/icons/Icon_bank.png" class="me-2">
                        {{__("Bank Account")}}
                    </label>
                    <input class="" type="radio" name="exampleRadios" id="bankacount" value="option1" checked>
                </div>
                <div class="check-shadow">
                    <label class="" for="stellar">
                        <img src="images/icons/usd-coin.png" class="me-2">
                        {{__("Stellar USDC")}}
                    </label>
                    <input class="" type="radio" name="exampleRadios" id="stellar" value="option1" checked>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="delivery" class="form-label">{{__("Delivery Options")}} </label>
                <div class="input-group form-shadow">
                    <label class="input-group-text w-auto"><img src="images/icons/Icon_bank.png" class="me-2"></label>
                    <select id="delivery" class="form-select">
                        <option selected>{{__("Bank account")}} </option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                    </select>
                </div>
        </div>

        <label class="form-label">{{__('Amount to send')}}</label>
        <div class="mb-4 position-relative">
            <div class="input-group form-shadow">
                <label class="input-group-text w-auto"><img src="images/icons/$.png" class="me-2"></label>
                <input class="form-control" type="text" placeholder="{{__('Amount to send')}}" >
            </div>
            <div class="fee">
                <div class="fee-container">
                    <div class="fee-amount"><span>$ 0.00</span></div>
                    <div class="fee-text">Fee</div>
                </div>
            </div>
        </div>
        <label class="form-label">{{__('The recipient receives')}}</label>
        <div class="mb-4 position-relative">
            <div class="input-group form-shadow">
                <label class="input-group-text w-auto">USD</label>
                <input class="form-control" type="text" placeholder="{{__('The recipient receives')}}" >
            </div>
            <div class="fee">
                <div class="fee-container bg-dark">
                    <div class="fee-amount text-white"><span>$ 0.00</span></div>
                    <div class="fee-text">Rate</div>
                </div>
            </div>
        </div>

        <div class="mb-3 text-center">
            <button class="btn btn-primary">{{__("Calculate")}} </button>
        </div>        
        <div class="mb-3 text-center">
            <button class="btn btn-light">{{__("GET STARTED")}} </button>
        </div>        
    </form>

</x-page-with-map>