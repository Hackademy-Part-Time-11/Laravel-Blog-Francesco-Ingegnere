<x-layout-main>

    <x-slot:title>Contatti</x-slot>

        <h1>Contatti</h1>

        <div class="mt-5">

            <x-success />

            <x-errors />

            <form action="{{ route('contacts.send') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="InputName" class="form-label">Nome Utente</label>
                    <input type="text" class="form-control" id="InputName" aria-describedby="nameHelp" name="inputName">
                </div>
                <div class="mb-3">
                    <label for="InputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" name="inputEmail">
                </div>
                <div class="mb-3">
                    <label for="InputMessage" class="form-label">Messaggio</label>
                    <textarea name="inputMessage" id="InputMessage" class="d-block w-100 form-control" rows="6"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Invia Messaggio</button>
            </form>

        </div>

</x-layout-main>