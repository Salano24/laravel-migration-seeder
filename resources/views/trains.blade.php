@extends('layouts.app')


@section('content')
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Lara-RealEstate</h1>
        <p class="col-md-8 fs-4">Come find our amazing trains offer</p>
        <button class="btn btn-primary btn-lg" type="button">Find out more</button>
    </div>
</div>

<div class="container py-5">
    <div class="row row-cols-1 row-cols-sm-3 g-4">

    @forelse($trains as $train)
        <div class="col">
            <div class="card">
                <div class="card-header">{{$train->id}}</div>
                <div class="card-body">
                    <h3>Azienda: {{$train->azienda}}</h3>
                    <h4>Partenza: {{$train->stazione_partenza}} | ora: {{$train->ora_partenza}} </h4>
                    <h4>Arrivo: {{$train->stazione_arrivo}} | ora: {{$train->ora_arrivo}} </h4>
                    <h5>Numero carrozze: {{$train->numero_carrozze}} </h5>


                </div>
            </div>
        </div>

        @empty

       

        <div class="col-12">
            <p>Sorry No trains yet!</p>
        </div>
       
        @endif

    </div>
</div>
@endsection