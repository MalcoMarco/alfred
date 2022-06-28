<div {{ $attributes->merge(['class' => 'mycard']) }}>
    <div class="card-body">
        <h3 class="card-tile">
            {{$image}}
            <span>{{$title}} </span>
        </h3>
            <div class="mt-4">{{$slot}}</div>
        
    </div>
</div>