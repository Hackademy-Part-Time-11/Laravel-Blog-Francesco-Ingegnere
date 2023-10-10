<x-layout-catalogue>

    <div class="container mt-5">

        <div>
            <a href="{{route('catalogue')}}">indietro</a>
        </div>

        <h1>{{$article['name']}}</h1>

        <div class="card">
            <div class="card-body">
                <div class="mb-2">
                    categoria: {{$article['category']}}
                </div>
                <div class="my-3">
                    {{$article['brand']}}
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta maxime itaque consequatur suscipit vitae tempora quam autem unde quod reprehenderit libero eum sequi soluta, quidem illo, sit deserunt tenetur debitis!</p>
                </div>
            </div>
            <div class="card-footer">
                {{$article['price']}}
            </div>
        </div>

        <x-success />
        
        <form action="{{route('article.send-mail')}}" method="POST" class="mt-5">
            @csrf

            <h4>Richiedi informazioni su questo prodotto</h4>

            <input type="hidden" name="article_id" value="{{$articleId}}">

            <div class="d-flex flex-column mt-5">
                <label for="name" class="my-2">Nome</label>
                <input type="text" name="name" id="name" class="from-control">
                <label for="email" class="my-2">Email</label>
                <input type="email" name="email" id="email" class="from-control">
                <label for="message" class="my-2">Richiedi informazioni</label>
                <textarea name="message" id="message" rows="6" class="from-control"></textarea>
            </div>
            <button type="submit" class="mt-2 btn btn-secondary">Chiedi informazioni</button>

        </form>

    </div>

</x-layout-catalogue>