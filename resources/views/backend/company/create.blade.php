<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Company Setup</h5>
                <a href="{{ route('company.index') }}" class="btn btn-primary btn-sm">Go back</a>
            </div>

            <div class="card-body">
                <form action="{{ route('company.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Company Name *</label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>

                    <div class="form-group">
                        <label for="address">Address *</label>
                        <input id="address" class="form-control" type="text" name="address">
                    </div>

                    <div class="form-group">
                        <label for="contact">Contact *</label>
                        <input id="contact" class="form-control" type="text" name="contact">
                    </div>

                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input id="email" class="form-control" type="text" name="email">
                    </div>

                    <div class="form-group">
                        <label for="logo">Upload Logo (Optional)</label>
                        <input id="logo" class="form-control-file" type="file" name="logo">
                    </div>

                    <button type="submit" class="btn btn-primary">Save Record</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
