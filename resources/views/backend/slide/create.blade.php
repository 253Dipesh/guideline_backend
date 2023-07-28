<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Slide Setup</h5>
                <a href="{{ route('slide.index') }}" class="btn btn-primary btn-sm">Go back</a>
            </div>

            <div class="card-body">
                <form action="{{ route('slide.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title *</label>
                        <input id="title" class="form-control" type="text" name="title">
                    </div>

                    <div class="form-group">
                        <label for="logo">Upload Image *</label>
                        <input id="logo" class="form-control-file" type="file" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary">Save Record</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
