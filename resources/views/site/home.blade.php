@extends('site.layout')
@section('title', 'Homepage')

@section('content')

  <div class="container py-4">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="alert alert-info">Lorem ipsum dolor sit amet.</h1>
        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, non?</h4>

        <p class="p3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur, neque ipsa eius assumenda minus obcaecati quo hic ratione fugit? Minima cumque quidem atque eius. Facere minima soluta facilis pariatur numquam.</p>

        @guest          
          <a href="{{ route('login') }}" class="btn btn-outline-info"> Login </a>
          <a href="{{ route('register') }}" class="btn btn-info"> Registrar </a>
        @endguest

        @auth
          <a href="{{ route('login') }}" class="btn btn-info"> Dashboard </a>
        @endauth
      </div>
    </div>
  </div>

@endsection

