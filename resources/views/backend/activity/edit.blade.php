<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Alter Activity</h5>
                <a href="{{ route('activity.index') }}" class="btn btn-primary btn-sm">Go back</a>
            </div>

            <div class="card-body">
                <form action="{{ route('activity.update', $activity->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title">Title *</label>
                        <input id="title" class="form-control" type="text" name="title"
                            value="{{ $activity->title }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description *</label>
                        <textarea id="description" class="form-control summernote" name="description" rows="3">{{ $activity->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="price">Actual Price *</label>
                        <input id="price" class="form-control" type="number" name="price"
                            value="{{ $activity->price }}" oninput="calculate()">
                    </div>

                    <div class="form-group">
                        <label for="discount">Discount (%) (Optional)</label>
                        <input id="discount" class="form-control" type="number" name="discount"
                            value="{{ $activity->discount }}" oninput="calculate()">
                    </div>

                    <div class="form-group">
                        <label for="selling_price">Selling Price *</label>
                        <input id="selling_price" class="form-control" type="number" name="selling_price"
                            value="{{ $activity->selling_price }}">
                    </div>

                    <div class="form-group">
                        <label for="logo">Upload Image *</label>
                        <input id="logo" class="form-control-file" type="file" name="image">
                        <div class="py-2">
                            <img src="{{ asset($activity->image) }}" width="120" alt="{{ $activity->title }}"
                                class="img-thumbnail">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Record</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
