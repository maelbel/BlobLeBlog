<x-app-layout>
    <x-slot name="header">
        <div class="row">
        <h2 class="col-6 d-flex justify-center p-6 font-semibold text-xl text-gray-800 leading-tight border-end">
            {{ __('Pour vous') }}
        </h2>
        <h2 class="col-6 d-flex justify-center p-6 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vos abonnements') }}
        </h2>
        </div>
    </x-slot>
    @if(isset($articles) && $articles)
    @forelse ($articles as $article)
        <div class="bg-white overflow-hidden border-bottom">
            <div class="px-6 text-gray-900">
                <!-- <div class="">{{ $article->id }}</div> -->
                <h3 class="h3 pt-6">{{ $article->title }}</h3>
                <p class="">{{ $article->content }}</p>
                <div class="options d-flex justify-content-around py-3">
                    <a href="#">J'aime</a>
                    <a href="#">Republier</a>
                    <a href="#">Commenter</a>
                    <a href="#">Signaler</a>
                </div>
                <div class="comment"></div>
            </div>
        </div>
    @empty
        <div class="p-4">Aucun article disponible</div>
    @endforelse
    @else
        <div class="p-4">Aucun article...</div>
    @endif
</x-app-layout>
