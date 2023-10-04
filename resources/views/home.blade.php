@if (Auth::user()->rol=="Administrador")
    @include('Administrador/homeA')
@else
    @include('Clientes/homeC')
@endif


