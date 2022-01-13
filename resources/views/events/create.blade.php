@extends('layouts.main')

@section('title','Criar Evento')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie o seu evento</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="image">Imagem do evento:</label>
      <input type="file" name="image" id="image" class="form-control-file">
    </div>
    <div class="form-group">
      <label for="title">Evento:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
    </div>
    <div class="form-group">
      <label for="date">Data do Evento:</label>
      <input type="date" class="form-control" id="date" name="date"">
    </div>
    <div class="form-group">
      <label for="title">Cidade:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
    </div>
    <div class="form-group">
      <label for="title">O evento é privado?</label>
      <select name="isPrivate" id="isPrivate" class="form-select">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
    </div>
    <div class="form-group">
      <label for="title">Adicione itens de infraestrutura</label>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="cadeiras">Cadeiras
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="open food">Open food
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="cerveja gratis">Cerveja Grátis
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="palco">Palco
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="brindes">Brindes
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>
@endsection