@extends('layouts.main')

@section('container')
<section id="contact" class="pb-32 pt-36 bg-slate-100 dark:bg-slate-800">
    <div class="container">
        <main>
            <h1 class="mb-3 text-5xl font-semibold text-center text-orange">Registration Form</h1>
            <form action="/register" method="post">
                @csrf
            <div class="w-full mx-auto lg:w-2/3">
                <div class="w-full px-4 mb-8">
                <label for="name" class="text-base font-bold text-orange">Name</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <input type="text" name="name" class="w-full p-3 rounded-md bg-slate-200 text-dark focus:outline-none focus:ring-1 focus:border-orange @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
            </div>
            <div class="w-full px-4 mb-8">
                <label for="username" class="text-base font-bold text-orange">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <input type="text" name="username" class="w-full p-3 rounded-md bg-slate-200 text-dark focus:outline-none focus:ring-1 focus:border-orange @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
            </div>
              <div class="w-full px-4 mb-8">
                  <label for="email" class="text-base font-bold text-orange">Email address</label>
                  @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                <input type="email" name="email" class="w-full p-3 rounded-md bg-slate-200 text-dark focus:outline-none focus:ring-1 focus:border-orange @error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
              </div>
              <div class="w-full px-4 mb-8">
                  <label for="password" class="text-base font-bold text-orange">Password</label>
                  @error('password')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                <input type="password" name="password" class="w-full p-3 rounded-md bg-slate-200 text-dark focus:outline-none focus:ring-1 focus:border-orange @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
              </div>
              <button class="w-full px-8 py-3 text-base font-semibold text-white transition duration-500 rounded-full bg-orange hover:opacity-80 hover:shadow-lg " type="submit">Register</button>
            </div>
            </form>
            <small class="block mt-4 text-xs font-medium text-center text-slate-500 md:text-md">Already registered? <a href="/login" class="text-blue-500">Login</a></small>
          </main>
        </div>
    </section>
@endsection