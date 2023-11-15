<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Account') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
    
                    <form action="{{ route('articles.store') }}" method="POST">
                        @csrf
    
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-600">Titre de l'article</label>
                            <input type="text" name="title" id="title" class="form-input mt-1 p-2 block w-full" required>
                        </div>
    
                        <div class="mb-4">
                            <label for="content" class="block text-sm font-medium text-gray-600">Contenu de l'article</label>
                            <textarea name="content" id="content" class="form-input mt-1 p-2 block w-full" rows="4" required></textarea>
                        </div>
    
                        <div class="containerSubmit">
                            <button type="submit" id="buttonSubmit">
                                Ajouter l'article
                            </button>
                        </div>
                    </form>
    
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

<style>
    .containerSubmit{
        text-align: center;
    }
    #buttonSubmit{
        background-color: rgb(0, 149, 255);
        padding: 2%;
        color: #fff;
        border-radius: 15px;
        transition: all 0.3s;
    }
    #buttonSubmit:hover{
        background-color: rgb(28, 118, 182);
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
</style>
