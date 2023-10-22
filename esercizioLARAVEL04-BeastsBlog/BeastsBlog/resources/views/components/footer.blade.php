<div class="bg-black">
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-7 col-12">
                <h6 class="py-2">Scrivi e pubblica il tuo articolo BESTIALE su BEASTS-BLOG</h6>
            </div>
            
            
            <div class="col-lg-5 col-12 text-lg-end text-center">

                @auth

                <a href="{{route('account.articles.create')}}"><button type="button" class="btn btn-primary px-5" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Scrivi il tuo articolo</button></a>

                @endauth

                <a href="{{route('contacts')}}"><button type="button" class="btn btn-primary px-5" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"><i class="fa-solid fa-square-phone"></i> Contattaci</button></a>
            </div>
        </div>
        
        
    </div>
</div>
<div class="bg-blacks">
    <div class="container py-2">
        <div class="row border-bottom border-black mx-auto">
            <div class="row justify-content-center py-2">
                <div class="col-2 text-center text-white">
                    <i class="fab fa-facebook fa-2x"></i>
                </div>
                <div class="col-2 text-center text-white">
                    <i class="fab fa-instagram fa-2x"></i>
                </div>
                <div class="col-2 text-center text-white">
                    <i class="fab fa-twitter fa-2x"></i>
                </div>
                <div class="col-2 text-center text-white">
                    <i class="fab fa-telegram fa-2x"></i>
                </div>
            </div>
        </div>
        <p class="py-5 mb-0">© Copyright 2012 - 2023 | Beasts Blog by <a href="https://www.linkedin.com/in/francesco-ingegnere-web-developer">Francesco Ingegnere</a> | Laravel</p>
    </div>
</div>