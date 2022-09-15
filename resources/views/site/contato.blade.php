@extends('site.layouts.basico')

<!-- Enviando a palavra 'Home' como parâmetro titulo para o 'basico.blade.php'-->
@section('titulo', $titulo)

<!-- Enviando o conteudo inteiro abaixo como parâmetro 'conteudo' para o 'basico.blade.php'-->
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">

                <!-- tratando o form_contato como component, imprimindo ele aqui embaixo
                 e enviando os parametro 'classe', 'motivo_contato' com seus devidos valores para ele -->
                @component('site.layouts._components.form_contato', ['classe' => 'borda-preta', 'motivo_contatos' => $motivo_contatos])
                <p>A nossa equipe analisará a sua mensagem e retornaremos o mais brevemente possível</p>
                <p>Nosso tempo médio de resposta é de 48 horas</p>
                @endcomponent
            </div>
        </div>
    </div>
    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection
