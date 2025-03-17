<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <!-- Card de Login -->
    <div class="w-full max-w-md p-8 space-y-6 bg-white shadow-lg rounded-xl">
        
        <!-- Título -->
        <h2 class="text-2xl font-bold text-center text-gray-800">Bem-vindo!</h2>
        
        <!-- Formulário -->
        <form action="{{ route('login.store') }}" method="POST" class="space-y-4">
            @csrf
            
            <!-- E-mail -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail"
                    class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring focus:ring-blue-300"
                    value="{{ old('email') }}" required>
                @error('email')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Senha -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                <input type="password" id="password" name="password" placeholder="Digite sua senha"
                    class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring focus:ring-blue-300" 
                    required>
                @error('password')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Link de Esqueceu a Senha -->
            <div class="flex items-center justify-between">
                <a href="#" class="text-sm text-blue-500 hover:underline">Esqueceu a senha?</a>
            </div>

            <!-- Botão de Login -->
            <button type="submit" class="w-full px-4 py-2 font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                Entrar
            </button>

            <!-- Botão de Voltar para a Home -->
            <a href="/" class="w-full px-4 py-2 font-semibold text-blue-600 bg-gray-100 rounded-lg hover:bg-gray-200 text-center mt-4 block">
                Voltar para a Home
            </a>
        </form>

        <!-- Link de Cadastro -->
        <p class="text-sm text-center text-gray-600">
            Ainda não tem uma conta? <a href="#" class="text-blue-500 hover:underline">Cadastre-se</a>
        </p>
    </div>

</body>
</html>
