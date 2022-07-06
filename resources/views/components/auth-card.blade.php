<div class="row justify-content-center align-items-center h-100vh">
    <div class="col-md-2 card">
        <div class="card-body">
            <div class="text-center">
                {{ $logo }}
            </div>
        
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
