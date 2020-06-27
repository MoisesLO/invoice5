@extends('layouts.base')
@section('body')

  <div class="flex flex-col justify-center min-h-screen bg-indigo-100">
    <h4 class="mx-auto text-3xl text-gray-700 mb-3">Registro de usuario</h4>

    <div class="mx-auto max-w-sm w-full rounded-lg shadow px-10 py-8 bg-white">
      <form action="{{url('/post-registration')}}" method="POST">
        {{ csrf_field() }}

        {{-- Nombre --}}
        <div class="flex flex-col">
          <label class="text-base text-gray-600">Nombre</label>
          <input type="text" name="name"
                 class="mt-1 w-full px-3 py-2 text-base text-gray-600 rounded-lg border focus:outline-none focus:shadow-outline"
                 placeholder="Full name" autofocus>
          @if ($errors->has('name'))
            <span class="text-red-500 text-sm">{{ $errors->first('name') }}</span>
          @endif
        </div>

        {{-- Email --}}
        <div class="mt-3 flex flex-col">
          <label class="text-base text-gray-600">Email address</label>
          <input type="email" name="email" class="mt-1 w-full px-3 py-2 text-base text-gray-600 rounded-lg border focus:outline-none focus:shadow-outline" placeholder="Email address">
          @if ($errors->has('email'))
            <span class="text-red-500 text-sm">{{ $errors->first('email') }}</span>
          @endif
        </div>

        <div class="mt-3 flex flex-col">
          <label class="text-base text-gray-600">Password</label>
          <input type="password" name="password" id="inputPassword" class="mt-1 w-full px-3 py-2 text-base text-gray-600 rounded-lg border focus:outline-none focus:shadow-outline" placeholder="Password">

          @if ($errors->has('password'))
            <span class="text-red-500 text-sm">{{ $errors->first('password') }}</span>
          @endif
        </div>

        <button class="mt-4 block w-full bg-indigo-500 text-white px-3 py-2 rounded-lg" type="submit">
          Sign Up
        </button>
        <div class="pt-3 text-gray-500 text-sm">
          If you have an account?
          <a class="text-sm text-indigo-500 font-bold" href="{{url('login')}}">Sign In</a></div>
      </form>
    </div>


  </div>

@endsection