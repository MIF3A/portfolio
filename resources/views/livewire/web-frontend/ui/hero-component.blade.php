{{-- resources/views/livewire/web-frontend/ui/hero-component.blade.php --}}

@if($hero)
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="background: url('assets/img/{{ $hero->image }}') top center;">
        <div class="hero-container" data-aos="fade-in">
            <h1>{{ $hero->title }}</h1>
            <p>I'm <span class="typed" data-typed-items="{{ $hero->skill }}"></span></p>
        </div>
    </section>
@else
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="background: url('assets/img/hero-bg.jpg') top center;">
        <div class="hero-container" data-aos="fade-in">
            <h1>Uray Naufal</h1>
            <p>I'm <span class="typed" data-typed-items="Laravel Developer"></span></p>
        </div>
    </section>
@endif
