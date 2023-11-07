<div>

    <div class="p-3">
        <div class="row justify-content-center">
            <div class="col-6">
                <input wire:model.live="search" type="text" class="form-control" placeholder="Cerca Articoli">
            </div>
        </div>    

        <div class="row mt-5">

    
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

            
            
        </div>
            

    </div>

</div>
