<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Add Guide</h5>
                <a href="{{ route('guide.index') }}" class="btn btn-primary btn-sm">Go back</a>
            </div>

            <div class="card-body">
                <form action="{{ route('guide.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name of Guide *</label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender *</label>
                        <select id="gender" class="form-control" name="gender">
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="age">Age</label>
                        <input id="age" class="form-control" type="number" name="age">
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile *</label>
                        <input id="mobile" class="form-control" type="number" name="mobile">
                    </div>

                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input id="email" class="form-control" type="email" name="email">
                    </div>


                    <div class="form-group">
                        <label for="photo">Upload Image *</label>
                        <input id="photo" class="form-control-file" type="file" name="photo">
                    </div>

                    <button type="submit" class="btn btn-primary">Save Record</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
