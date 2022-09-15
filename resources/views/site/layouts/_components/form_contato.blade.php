{{ $slot }}
<form action={{ route('site.contato') }} method="post">
    @csrf
    <input name="nome" type="text" placeholder="Nome" value="{{ old('nome') }}" class="{{ $classe }}">
    @if($errors->has('nome'))
        {{ $errors->first('nome') }}
    @endif
    <br>
    <input name="telefone" type="text" placeholder="Telefone" value="{{ old('telefone') }}" class="{{ $classe }}">
    @if($errors->has('telefone'))
        {{ $errors->first('telefone') }}
    @endif
    <br>
    <input name="email" type="text" placeholder="E-mail" value="{{ old('email') }}" class="{{ $classe }}">
    @if($errors->has('email'))
        {{ $errors->first('email') }}
    @endif
    <br>
    <select name="motivo_contatos_id" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach($motivo_contatos as $key => $motivo_contato)
            <option value="{{$motivo_contato->id}}" {{ old('motivo_contato_id') == $motivo_contato->id ? 'selected' : '' }}>{{$motivo_contato->motivo_contato}}</option>
        @endforeach
    </select>
    @if($errors->has('motivo_contatos_id'))
        {{ $errors->first('motivo_contatos_id') }}
    @endif
    <br>
    <textarea name="mensagem" class="{{ $classe }}">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui a sua mensagem '}}</textarea>
    @if($errors->has('mensagem'))
        {{ $errors->first('mensagem') }}
    @endif
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
@if($errors->any())
    <div style="position:absolute; top:0px; left:0px; width: 100%; background: red;">
    <pre>
        @foreach($errors->all() as $error)
        {{ print_r($error) }}
        @endforeach
    </pre>
    </div>
@endif
