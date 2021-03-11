@extends('layouts.main')

@section('title', 'Web Room')

@section('content')

<h1>Imoveis web</h1>

  <div id="search-container" class="col-md-12">
     <h1>Busque um imóvel</h1>
     <form action="">
         <input type="text" id="search" name="search" class="form-control" placeholder="Procure um imóvel..">
     </form>
  </div>
  <div id="imoveis-container" class="col-md-12">
      <h2>Próximos Eventos</h2>
      <p>Veja os eventos dos proximos dias</p>
      <div id="cards-container" class="row">
      @foreach($imoveis as $imovel)
        <div class="card-col-md-3">
            <img src="/img/banner.jpg" alt="{{$imovel->titulo}}">
            <div class="card-body">
            <p class="card-date">10/09/2021</p>
            <h5 class="card-title">{{$imovel->titulo}}</h5>
            <p class="card-participantes">x participantes</p>
            <a href="#" class="btn btn-primary">Saber mais</a>
        </div>
  </div>
@endforeach
</div>
@endsection

