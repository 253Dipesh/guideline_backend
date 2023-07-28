<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Slides</h5>
                @if (empty($about))
                    <a href="{{ route('about.create') }}" class="btn btn-primary btn-sm">Add About us</a>
                @endif

            </div>
            <div class="card-body">
                @if (empty($about))
                    <p class="lead">No Record found</p>
                @else
                    <div>
                        <div class="card-header">
                            <h5>{{ $about->title }}</h5>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset("$about->image") }}" alt="" class="img-fluid">
                            {!! $about->description !!}

                            <a href="{{ route('about.edit', $about->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
