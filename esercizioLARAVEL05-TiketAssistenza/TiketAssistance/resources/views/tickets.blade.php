<x-main-layout>

    <div class="container mt-5">
        <h1>{{$title}}</h1>

        <div class="mt-4">
            @foreach ($tickets as $ticket)

            <div class="mb-3">

                <x-card 
                    :title="$ticket['title']"
                    :email="$ticket['user_email']"
                    :status="$ticket['status']"
                    :created-at="$ticket['created_at']"
                    />

            </div>
                
            @endforeach
        </div>
    </div>

</x-main-layout>