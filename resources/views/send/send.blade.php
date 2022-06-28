<x-app-layout>
    <section class="section ">
        <div class="row">
            <div class="col-lg-6">
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
                        <label for="options">{{__("Payment Options")}} </label>
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
                        <label for="delivery">{{__("Delivery Options")}} </label>
                        <div class="form-shadow">
                            <select id="delivery" class="form-select">
                                <option selected>{{__("Bank account")}} </option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div></div>
                    </div>

                    <div class="mb-4">
                        <div class="form-shadow"><input class="form-control" type="text" placeholder="{{__('Amount to send')}}" ></div>
                    </div>

                    <div class="mb-3 text-center">
                        <button class="btn btn-primary">{{__("Calculate")}} </button>
                    </div>

                    
                </form>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <div class="map ">
                    {{-- <img src="images/Map.png" class=""  alt=""> --}}
                </div>
            </div>
        </div>

    </section>
</x-app-layout>