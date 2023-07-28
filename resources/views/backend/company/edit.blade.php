<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Alter Company</h5>
                <a href="{{ route('company.index') }}" class="btn btn-primary btn-sm">Go back</a>
            </div>

            <div class="card-body">
                <form action="{{ route('company.update', $company->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Company Name *</label>
                        <input id="name" class="form-control" type="text" name="name"
                            value="{{ $company->name }}">
                    </div>

                    <div class="form-group">
                        <label for="address">Address *</label>
                        <input id="address" class="form-control" type="text" name="address"
                            value="{{ $company->address }}">
                    </div>

                    <div class="form-group">
                        <label for="contact">Contact *</label>
                        <input id="contact" class="form-control" type="text" name="contact"
                            value="{{ $company->contact }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input id="email" class="form-control" type="text" name="email"
                            value="{{ $company->email }}">
                    </div>

                    <div class="form-group">
                        <label for="logo">Upload Logo (Optional)</label>
                        <input id="logo" class="form-control-file" type="file" name="logo">
                        <div class="my-2">
                            <img src="{{ asset($company->logo) }}" class="img-thumbnail" width="120"
                                alt="{{ $company->name }}">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Record</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
