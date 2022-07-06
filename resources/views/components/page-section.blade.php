<section {{ $attributes->merge(['class' => 'section pt-section']) }}>
    <div>
        <h1 class="section-page">{{ $page }}:</h1>
        <h2 class="section-title">{{ $title }}</h2>
        <div class="w-100 mt-2">{{ $slot }}</div>
    </div>
</section>