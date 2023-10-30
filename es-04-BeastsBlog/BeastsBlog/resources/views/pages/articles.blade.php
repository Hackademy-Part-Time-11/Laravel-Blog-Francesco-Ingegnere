<x-layout-main>

    <x-slot:title>Articoli</x-slot>

        <h1 class="text-center my-5">Articoli</h1>
    
        <div class="row">
    
            @if ($articles)
    
                @foreach ($articles as $article)
                    <div class="col-lg-4 col-md-6 col-12 g-3 px-2 d-flex align-items-stretch mb-5">
                        <x-article-card 
                            :title="$article->title" 
                            :categories="$article->categories" 
                            :description="$article->description" 
                            :route="route('article', $article->id)"
                            :image="$article->image ? Storage::url($article->image) : null"
                        />
                    </div>
                @endforeach
            
            @else
                    
                <h3>Non ci sono articoli da visualizzare</h3>
                
            @endif
            
            
        </div>
        
</x-layout-main>
        
