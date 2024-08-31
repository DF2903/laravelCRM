@extends('layouts.main.guest')
@section('content')
    <form
        method="POST"
        action="/login"
        class="max-w-sm min-w-[80vw] p-5 rounded-lg bg-gray-200 sm:min-w-[25vw]"
    >
        @csrf
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-800">Your email</label>
            <input 
                type="email" 
                name="email" 
                @if (old('email'))
                    value={{ old('email') }}
                @endif 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@domen.com" 
                required 
            />
        </div>
        <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-800">Your password</label>
            <input 
                type="password" 
                name="password"
                @if (old('password'))
                    value={{ old('password') }}
                @endif
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required 
            />
        </div>
        <div class="flex items-start mb-5">
            <div class="flex items-center h-5">
                <input 
                    name="remember"
                    type="checkbox" 
                    @if (old('remember'))
                        checked
                    @endif
                    value="1" 
                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300"
                />
            </div>
            <label for="remember" class="ms-2 text-sm font-medium text-gray-800">Remember me</label>
            <button 
                type="submit" 
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center ml-auto"
            >
                Submit
            </button>
        </div>
        @if ($errors->has('invalidCredentials'))
            <div class="text-red-500">{{ $errors->first('invalidCredentials') }}</div>
        @endif
    </form>


@endsection
