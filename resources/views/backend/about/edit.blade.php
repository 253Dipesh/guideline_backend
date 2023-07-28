<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Alter About us</h5>
                <a href="{{ route('about.index') }}" class="btn btn-primary btn-sm">Go back</a>
            </div>

            <div class="card-body">
                <form action="{{ route('about.update', $about->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title">Title *</label>
                        <input id="title" class="form-control" type="text" name="title"
                            value="{{ $about->title }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description *</label>
                        <textarea id="description" class="form-control summernote" name="description" rows="3">{{ $about->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="logo">Upload Image *</label>
                        <input id="logo" class="form-control-file" type="file" name="image">
                        <div class="py-2">
                            <img src="{{ asset($about->image) }}" width="120" alt="{{ $about->name }}"
                                class="img-thumbnail">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Record</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
