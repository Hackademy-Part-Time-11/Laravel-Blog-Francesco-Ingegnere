<x-layout>

    <x-slot:title>{{ $titleHeader }}</x-slot>

    <div class="card shadow">
        <div class="card-header text-white bg-black">
            <h1 class="text-center">{{ $title }}</h1>
        </div>
        <div class="card-body">

            <x-success />

            <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($order->id)
                    @method('PUT')
                @endif
                <div class="row g-3">


                    <div class="col-12">
                        <label for="car_id">Marca e Modello</label>
                        <select name="car_id" id="car_id" class="form-control">
                            <option value="">--- scegli un'auto ---</option>
                            @foreach ($cars as $car)
                                <option class="text-black" value="{{ $car->id }}" @selected($car->id == old('car_id', $order->car_id))>{{ $car->brand.' '.$car->model }}
                                </option>
                            @endforeach
                        </select>
                        @error('car_id')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="name">Nome e Cognome Utente</label>
                        <input type="text" name="user_name" id="user_name"
                            class="form-control @error('user_name') is-invalid @enderror" maxlength="40"
                            value="{{ old('user_name', $order->user_name) }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label>Accessori</label>
                        @foreach ($accessories as $accessory)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="accessories[]"
                                    value="{{ $accessory->id }}">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ $accessory->name }} <span class="fw-bold">{{ euro($accessory->price) }}</span>
                                </label>
                            </div>
                        @endforeach
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-black">{{ $button }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



</x-layout>
