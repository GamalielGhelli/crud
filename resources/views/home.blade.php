@extends('master')

@section('content')

<head>

</head>

<!-- Container Principal -->
<br>
</br>
<div class="flex items-center justify-center">

    <!-- Card de Home -->
    <div class="w-full max-w-md p-8 space-y-6 bg-white shadow-lg rounded-xl">
        
        <!-- Título da Página -->
        <h2 class="text-2xl font-bold text-center text-gray-800">Bem-vindo à Home</h2>

        <!-- Link de Login -->
        <div class="text-center">
            <a href="{{ route('login.index') }}" class="text-blue-600 hover:underline">Clique aqui para Login</a>
        </div>

        <!-- Formulário de Sair -->
        <form action="{{ route('login.destroy') }}" method="POST" class="space-y-4 mt-6">
            @csrf

            <!-- Botão de Sair -->
            <button type="submit" class="w-full px-4 py-2 font-semibold text-white btn btn-danger rounded-lg hover:bg-red-700">
                Sair
            </button>
        </form>

        <!-- Texto de Rodapé -->
        <p class="text-sm text-center text-gray-600">
            <a href="#" class="text-blue-500 hover:underline">Ajuda</a> | <a href="#" class="text-blue-500 hover:underline">Configurações</a>
        </p>
    </div>

</div>

<footer>
    
</footer>
@endsection

