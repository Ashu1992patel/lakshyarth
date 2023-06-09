<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    @include('themes.theme1.common.loader')
    {{-- <img class="animation__wobble" src="{{ session()->has('settings')?session('settings')->logo : 'logo.png' }}" alt="Logo" width="200"> --}}
    {{-- <img class="animation__wobble" src="{{ url('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60"
        width="60"> --}}
</div>
