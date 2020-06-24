@extends('layouts.base')
@section('body')

  {{-- Centra vertical --}}
  <div class="flex flex-col justify-center min-h-screen bg-indigo-100">

    {{-- Box --}}
    <div class="max-w-sm w-full mx-auto rounded-lg shadow px-10 py-8 bg-white">
      <form action="{{url('/post-login')}}" method="post">

        {{-- Inputs Css --}}
        <div class="flex flex-col">
          {{ csrf_field() }}
          <label class="text-base text-gray-600">Email</label>

          <div class="mt-1">
            <input type="email" name="email"
                   class="w-full px-3 py-2 text-base text-gray-600 rounded-lg border focus:outline-none focus:shadow-outline"
                   placeholder="Email address">
            @if ($errors->has('email'))
              <span class="error">{{ $errors->first('email') }}</span>
            @endif
          </div>

          <label class="mt-3 text-base text-gray-600">Password</label>
          <div class="mt-1">
            <input type="password" name="password"
                   class="w-full px-3 py-2 text-base text-gray-600 rounded-lg border focus:outline-none focus:shadow-outline"
                   placeholder="Email address">
            @if ($errors->has('password'))
              <span class="error">{{ $errors->first('password') }}</span>
            @endif
          </div>


          <button type="submit" class="mt-3 block bg-indigo-500 text-white px-3 py-2 rounded-lg">
            Entrar al sistema
          </button>

          <div class="text-center">If you have an account?
            <a class="small" href="{{url('registration')}}">Sign Up</a>
          </div>
        </div>
      </form>
    </div>

  </div>
@endsection

