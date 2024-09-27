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
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Categorias</x-section-heading>

            <div class="mt-5 space-x-2">
                @foreach ($tags as $tag)
                    <x-tag :$tag/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Vagas Recentes</x-section-heading>
            <div class="mt-6 space-y-5">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
