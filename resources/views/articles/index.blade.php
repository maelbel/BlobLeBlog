<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
    
                    <h2 class="text-2xl font-semibold mb-4">Liste des Articles</h2>
    
                    <a href="{{ route('articles.create') }}" class="bg-green-500 text-white font-semibold px-4 py-2 rounded mb-4 inline-block">
                        Créer un nouvel article
                    </a>
    
                    <table class="min-w-full border border-gray-300">
                        <thead>
                            <tr>
                                <th class="border bg-gray-100 p-2">#</th>
                                <th class="border bg-gray-100 p-2">Titre</th>
                                <th class="border bg-gray-100 p-2">Contenu</th>
                                <th class="border bg-gray-100 p-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($articles as $article)
                                <tr>
                                    <td class="border p-2">{{ $article->id }}</td>
                                    <td class="border p-2">{{ $article->title }}</td>
                                    <td class="border p-2">{{ $article->content }}</td>
                                    <td class="border p-2">
    
                                        <a href="{{ route('articles.show', $article->id) }}" class="text-blue-500 mr-2">Voir</a>
                                        <a href="{{ route('articles.edit', $article->id) }}" class="text-yellow-500 mr-2">Éditer</a>
                                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article?')">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center p-4">Aucun article trouvé.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
