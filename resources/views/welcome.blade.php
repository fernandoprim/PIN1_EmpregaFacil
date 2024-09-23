<x-layout>
    <div class="space-y-10">
        <section>
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
        </section>
    </div>
</x-layout>

