<a href="{{$route}}" class="text-decoration-none">

    <div class="card">
        <div class="card-body">
            <h4>{{$title}}</h4>
            <div class="mb-2">
                Ticket creato da: {{$email}}
            </div>
            <div>
                @if ($status == 'aperto')
                    <span class="bg-success text-white rounded py-1 px-3">{{$status}}</span>
                @elseif ($status == 'in lavorazione')
                    <span class="bg-warning text-white rounded py-1 px-3">{{$status}}</span>
                @elseif ($status == 'chiuso')
                    <span class="bg-danger text-white rounded py-1 px-3">{{$status}}</span>
                @endif
                
            </div>
        </div>
        <div class="card-footer">
            {{$createdAt}}
        </div>
    </div>

</a>
