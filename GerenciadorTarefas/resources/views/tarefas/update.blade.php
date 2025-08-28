<form method="POST" action="{{ route('tarefas.update', $tarefa) }}">
    @csrf
    @method('PUT') {{-- ou PATCH --}}
    
    <input type="text" name="titulo" value="{{ $tarefa->titulo }}" required>
    <input type="text" name="descricao" value="{{ $tarefa->descricao }}">
    
    <select name="prioridade">
        <option value="1" {{ $tarefa->prioridade == 1 ? 'selected' : '' }}>Baixa</option>
        <option value="2" {{ $tarefa->prioridade == 2 ? 'selected' : '' }}>Média</option>
        <option value="3" {{ $tarefa->prioridade == 3 ? 'selected' : '' }}>Alta</option>
    </select>

    <button type="submit">Salvar</button>
</form>
