<x-main-layout>

    <div class="container mt-5">

        <div>
            <a href="{{route('tickets')}}">indietro</a>
        </div>

        <h1>{{$ticket['title']}}</h1>

        <div class="card">
            <div class="card-body">
                <h4>{{$ticket['title']}}</h4>
                <div class="mb-2">
                    Ticket creato da: {{$ticket['user_email']}}
                </div>
                <div class="my-3">
                    {{$ticket['description']}}
                </div>
                <div>
                    @if ($ticket['status'] == 'aperto')
                        <span class="bg-success text-white rounded py-1 px-3">{{$ticket['status']}}</span>
                    @elseif ($ticket['status'] == 'in lavorazione')
                        <span class="bg-warning text-white rounded py-1 px-3">{{$ticket['status']}}</span>
                    @elseif ($ticket['status'] == 'chiuso')
                        <span class="bg-danger text-white rounded py-1 px-3">{{$ticket['status']}}</span>
                    @endif
                    
                </div>
            </div>
            <div class="card-footer">
                {{$ticket['created_at']}}
            </div>
        </div>

        <x-success />
        
        <form action="{{route('tickets.send-mail')}}" method="POST">
            @csrf

            <input type="hidden" name="ticket_id" value="{{$ticketId}}">

            <div class="d-flex flex-column mt-5">
                <label for="message" class="mb-2">Rispondi</label>
                <textarea name="message" id="message" rows="6" class="from-control"></textarea>
            </div>
            <button type="submit" class="mt-2 btn btn-primary">Invia Risposta</button>

        </form>

    </div>

</x-main-layout>