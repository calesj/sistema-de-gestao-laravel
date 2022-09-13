{{ $slot }}
<form action={{ route('site.contato') }} method="post">
    @csrf
    <input name="nome" type="text" placeholder="Nome" value="{{ old('nome') }}" class="{{ $classe }}">
    <br>
    <input name="telefone" type="text" placeholder="Telefone" value="{{ old('telefone') }}" class="{{ $classe }}">
    <br>
    <input name="email" type="text" placeholder="E-mail" value="{{ old('email') }}" class="{{ $classe }}">
    <br>
    <select name="motivo_contato" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1"{{ old('motivo_contato') == 1 ? 'selected' : '' }}>Dúvida</option>
        <option value="2"{{ old('motivo_contato') == 2 ? 'selected' : '' }}>Elogio</option>
        <option value="3"{{ old('motivo_contato') == 3 ? 'selected' : '' }}>Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{ $classe }}">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui a sua mensagem '}}</textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
<div style="position:absolute; top:0px; left:0px; width: 100%; background: red;">
<pre>
    {{ print_r($errors) }}
</pre>
</div>
