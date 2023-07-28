<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Alter Guide</h5>
                <a href="{{ route('guide.index') }}" class="btn btn-primary btn-sm">Go back</a>
            </div>

            <div class="card-body">
                <form action="{{ route('guide.update', $guide->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Name of Guide *</label>
                        <input id="name" class="form-control" type="text" name="name"
                            value="{{ $guide->name }}">
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender *</label>
                        <select id="gender" class="form-control" name="gender">
                            <option value="male" {{ 'male' == $guide->gender ? 'selected' : '' }}</option> }}>Male
                            </option>
                            <option value="female" {{ 'female' == $guide->gender ? 'selected' : '' }}>Female</option>
                            <option value="other" {{ 'other' == $guide->gender ? 'selected' : '' }}>Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="age">Age</label>
                        <input id="age" class="form-control" type="number" name="age"
                            value="{{ $guide->age }}">
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile *</label>
                        <input id="mobile" class="form-control" type="number" name="mobile"
                            value="{{ $guide->mobile }}">
                    </div>

                    <div class="form-group">
                        <label for="email">email *</label>
                        <input id="email" class="form-control" type="email" name="email"
                            value="{{ $guide->email }}">
                    </div>


                    <div class="form-group">
                        <label for="photo">Upload Image *</label>
                        <input id="photo" class="form-control-file" type="file" name="photo">

                        <div class="my-2">
                            <img src="{{ asset($guide->photo) }}" width="120" class="img-thumbnail"
                                alt="{{ $guide->name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status">Choose Status</label>
                        <select id="status" class="form-control" name="status">
                            <option value="available">Available</option>
                            <option value="booked">Booked</option>
                            <option value="unavailable">Unavailable</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Record</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
