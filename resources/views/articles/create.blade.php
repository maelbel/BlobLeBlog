<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">

                <h2 class="text-2xl font-semibold mb-4">Créer un nouvel article</h2>

                <!-- Formulaire pour créer un nouvel article -->
                <form action="{{ route('articles.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="created_by" id="created_by" value="{{ $user->id }}"/>

                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-600">Titre de l'article</label>
                        <input type="text" name="title" id="title" class="form-input mt-1 p-2 block w-full" required>
                    </div>

                    <div class="mb-4">
                        <label for="content" class="block text-sm font-medium text-gray-600">Contenu de l'article</label>
                        <textarea name="content" id="content" class="form-input mt-1 p-2 block w-full" rows="4" required></textarea>
                    </div>

                    <div class="flex items-center">
                        <button type="submit" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded">
                            Créer l'article
                        </button>
                        <a href="{{ route('articles.index') }}" class="ml-4 text-gray-600 hover:underline">Annuler</a>
                    </div>
                </form>
                <!-- Fin du formulaire -->

            </div>
        </div>
    </div>
</div>