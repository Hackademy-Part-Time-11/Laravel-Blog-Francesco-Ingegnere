<x-layout-main>

    <div class="card">
        <div class="card-header text-white bg-black">
            <h1 class="mt-5">Registrazione avvenuta con successo</h1>
        </div>
        <div class="card-body">
            <p class="lead">Ti abbiamo inviato una mail contenente un link per confermare la tua email</p>
        
            <div class="mt-5">
                <p class="lead">
                    se non hai ricevuto l'email clicca qui per un nuovo invio
                </p>
                    
                <form action="/email/verification-notification" method="POST">
                    @csrf
                    <button class="btn btn-black">Invia email di verifica</button>
                </form>
            </div>
        </div>
    </div>


</x-layout-main>