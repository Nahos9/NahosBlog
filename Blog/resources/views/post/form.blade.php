@extends('layouts.app')

@section('content')
@include('partials.navbar')
<div class="container bg-blue-200 shadow-md  w-80 ">
<h1>Créer un nouveau post</h1>
<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-2">
        <label for="title"></label>
        <input type="text" placeholder="Titre du post" class=" border-2 focus:from-blue-500 px-16 py-2 rounded-md">
    </div>
    
    <divclass="mb-2">
        <label for="content"></label>
        <textarea name="content" id="" cols="30" rows="10" class=" border-2 focus:from-blue-500 px-10 py-2 rounded-md">

        </textarea>
    </div>
    
    <divclass="mb-2">
        <label for="image"></label>
        <input type="file" placeholder="Choisir une image"class=" border-2 focus:from-blue-500 px-4 py-2 rounded-md">
    </div>

    <button type="submit" class=" rounded-full border-2 bg-green-700 px-8 py-2 text-md text-white block mt-2">Créer</button>
</form>
</div>
@include('partials.footer')
@endsection