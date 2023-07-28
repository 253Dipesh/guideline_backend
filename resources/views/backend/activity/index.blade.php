<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Activities</h5>
                <a href="{{ route('activity.create') }}" class="btn btn-primary btn-sm">Add Activity</a>

            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($activities as $activity)
                        <div class="col-md-4">
                            <div class="border">
                                <div class="card-body text-center">
                                    <div style="width: 100%;height:200px">
                                        <img src="{{ asset($activity->image) }}" class="img-fluid"
                                            alt="{{ $activity->title }}"
                                            style="width: 100%;height:200px;object-fit:cover">
                                    </div>
                                </div>

                                <div class="card-footer">

                                    <h5 class="text-center">{{ $activity->title }}
                                        @if ($activity->discount > 0)
                                            <span class="text-danger">(-{{ $activity->discount }} %)</span>
                                        @endif
                                    </h5>
                                    <a href="{{ route('activity.edit', $activity->id) }}">Edit</a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
