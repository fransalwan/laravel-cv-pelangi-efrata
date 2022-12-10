@extends('layouts.main')

@section('container')

<section id="contact" class="pb-32 pt-36 bg-slate-100 dark:bg-slate-800">
  <div class="container">

      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      

          <div class="w-full px-4">
            <div class="max-w-md mx-auto mb-16 text-center">
              <h4 class="mb-2 text-5xl font-semibold text-orange">Login</h4>
            </div>
          </div>
            <form action="/login" method="post">
              @csrf
              <div class="w-full mx-auto lg:w-2/3">
                <div class="w-full px-4 mb-8">
                  @if(session()->has('loginError'))
                <div class="dark:text-white dark:bg-red-500" role="alert">
                      {{ session('loginError') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
                <label for="email" class="text-base font-bold text-orange">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
                <input type="email" name="email" class=" w-full p-3 rounded-md bg-slate-200 text-dark focus:outline-none focus:ring-1 focus:border-orange @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
              </div>
              <div class="w-full px-4 mb-8">
                <label for="password" class="text-base font-bold text-orange">Password</label>
                <input type="password" name="password" class="w-full p-3 rounded-md bg-slate-200 text-dark focus:outline-none focus:ring-1 focus:border-orange" id="password" placeholder="Password" required>
              </div>
              <button class="w-full px-8 py-3 text-base font-semibold text-white transition duration-500 rounded-full bg-orange hover:opacity-80 hover:shadow-lg" type="submit">Login</button>
            </div>
            </form>
            {{-- <small class="block mt-4 text-xs font-medium text-center text-slate-500 md:text-md">Not registered? <a href="/register" class="text-blue-500">Register Now!</a></small> --}}
          </main>
        </div>
      </section>
@endsection