<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Alter Slide</h5>
                <a href="{{ route('slide.index') }}" class="btn btn-primary btn-sm">Go back</a>
            </div>

            <div class="card-body">
                <form action="{{ route('slide.update', $slide->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title">Title *</label>
                        <input id="title" class="form-control" type="text" name="title"
                            value="{{ $slide->title }}">
                    </div>

                    <div class="form-group">
                        <label for="logo">Upload Image *</label>
                        <input id="logo" class="form-control-file" type="file" name="image">

                        <div class="my-2">
                            <img src="{{ asset($slide->image) }}" width="120" class="img-thumbnail"
                                alt="{{ $slide->title }}">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Record</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
