<x-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h1 class="font-bold text-3xl">Encontre seu próximo emprego!</h1>

            <form action="">
                <input type="text" placeholder="Desenvolvedor..." class="rounded-xl bg-white/15 px-5 py-2 w-full mt-5 max-w-xl">
            </form>
        </section>

        <section class="pt-5">
            <x-section-heading>Vagas em alta</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>

        <section>
            <x-section-heading>Categorias</x-section-heading>

            <div class="mt-5 space-x-2">
                <x-tag>Categoria</x-tag>
                <x-tag>Categoria</x-tag>
                <x-tag>Categoria</x-tag>
                <x-tag>Categoria</x-tag>
                <x-tag>Categoria</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Vagas Recentes</x-section-heading>
            <div class="mt-6 space-y-5">
                <x-job-card-wide/>
                <x-job-card-wide/>
                <x-job-card-wide/>
            </div>
        </section>
    </div>
</x-layout>

