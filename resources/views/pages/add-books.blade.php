@extends('main')
@section('content')
    <section class="pt-4">
        <div class="container">
            <h2 class="mb-4">Prideti nauja knyga</h2>
          <form action="/store" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <input type="text" name="book" class="form-control" placeholder="Knygos pavadinimas">
            </div>
            <div class="form-group mb-4">
                <input type="text" name="vat" class="form-control" placeholder="PVM kodas">
            </div>
            <div class="form-group mb-4">
                <input type="text" name="address" class="form-control" placeholder="Adresas">
            </div>
            <div class="form-group mb-4">
                <input type="text" name="description" id="" cols="30" rows="10" placeholder="Knygos aprasymas" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-4">Saugoti</button>
        </div>
    </section>
    @endsection