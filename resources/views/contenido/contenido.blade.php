@extends('principal')
    @section('contenido')
        <template v-if="menu==0">
            <example-tickets></example-tickets>
        </template>

        <template v-if="menu==1">
            <example-usuarios></example-usuarios>
        </template>

        <template v-if="menu==2">
            <example-clientes></example-clientes>
        </template>

    @endsection