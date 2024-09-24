<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emprega Fácil</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white font-hanken-grotesk">

    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/25">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources\images\LogoEmpregaFacil.png') }}" alt="" style="width: 50px">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="">Vagas</a>
                <a href="">Carreiras</a>
                <a href="">Salários</a>
                <a href="">Empresas</a>
            </div>

            <div>
                <a href="">Divulgue uma vaga</a>
            </div>
        </nav>

        <main class="mt-5 max-w-[960px] mx-auto">
            {{$slot}}
        </main>
    </div>
</body>
</html>
