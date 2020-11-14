@extends('layouts.app_auth')

@section('content')

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="emailaddress">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" required placeholder="Enter your email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">{{ __('password') }}</label>
                                <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror"  required name="password" autocomplete="current-password" placeholder="Enter your password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 ">
                                    <button type="submit" style="background-color: #2c91fb" class="btn text-white px-4 float-right waves-effect waves-light">
                                        {{ __('Login') }}
                                    </button>

                                </div>
                            </div>



                        </form>
@endsection
