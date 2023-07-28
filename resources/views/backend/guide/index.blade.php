<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Guides</h5>
                <a href="{{ route('guide.create') }}" class="btn btn-primary btn-sm">Add Guide</a>

            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($guides as $guide)
                        <div class="col-md-4">
                            <div class="border">
                                <div class="card-body text-center">
                                    <div style="width: 100%;height:200px">
                                        <img src="{{ asset($guide->photo) }}" class="img-fluid"
                                            alt="{{ $guide->title }}" style="width: 100%;height:200px;object-fit:cover">
                                    </div>
                                </div>

                                <div class="card-footer">

                                    <h5 class="text-center">{{ $guide->name }}</h5>
                                    @if ($guide->status == 'available')
                                        <div class="text-center font-bold">Status: <span
                                                class="text-warning">{{ $guide->status }}</span>
                                        </div>
                                    @elseif ($guide->status == 'booked')
                                        <div class="text-center font-bold ">Status: <span
                                                class="text-success">{{ $guide->status }}</span>
                                        </div>
                                    @else
                                        <div class="text-center">Status: <span
                                                class="text-danger">{{ $guide->status }}</span></div>
                                    @endif
                                    <a href="{{ route('guide.edit', $guide->id) }}">Edit</a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
