@extends('master')

@section('content')

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg p-4">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Bem-vindo!</h2>
                        
                        @if(session()->has('success'))
                            <span class="text-success">{{ session()->get('success') }}</span>
                        @endif

                        @if (auth()->check())
                            <p class="text-center text-success">Você já está logado. {{ auth()->user()->fistname}} | <a href="{{ route('login.destroy')}}">Sair</a></p>
                        @else
                            <form action="{{ route('login.store') }}" method="POST">
                                @csrf
                                
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Digite seu e-mail" value="leleo@gmail.com">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label>Senha</label>
                                    <input type="password" name="password"  class="form-control" placeholder="Digite sua senha" value="12345678">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-link p-0 text-primary">Esqueceu a senha?</button>
                                </div>
                                
                                <button type="submit" class="btn btn-primary w-100 mt-3">Entrar</button>
                            </form>
                            
                            <a href="{{ route('home') }}" class="btn btn-secondary w-100 mt-3">Voltar para a Home</a>
                            
                            <div class="text-center mt-3">
                                <button type="button" class="btn btn-link p-0 text-primary">Cadastre-se</button>
                            </div>
                        @endif
                        
                        @error('error')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
