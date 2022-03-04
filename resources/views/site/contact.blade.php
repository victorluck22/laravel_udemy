@extends('site.layouts.main')

@section('tittle', $tittle)
@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.layouts._components.form_contact', ['class' => 'borda-preta'])
                    <p>Our Team will read your message ASAP and return soon</p>
                    <p>The time to answer is 48 Hours</p>
                @endcomponent
            </div>
        </div>
    </div>

@endsection
