<x-layout-catalogue>

    <div class="container-fluid">

        <h1 class="my-5 mx-3">{{config('app.name')}}</h1>

        <div class="row">

            @foreach ($articles as $articleId => $article)
                <x-card 
                    :title="$article['name']"
                    :category="$article['category']"
                    :brand="$article['brand']"
                    :price="$article['price']"
                    :route="route('catalogue.article', $articleId)"
                />
            @endforeach

        </div>


        <a href="{{route('index')}}" class="mx-3"><button class="btn btn-secondary">indietro</button></a>

    </div>


</x-layout-catalogue>