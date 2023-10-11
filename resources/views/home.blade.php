@if (Auth::user()->rol=="Administrador")
    @include('Administrador/perfil')
@else
    @include('Clientes/homeC')
@endif


