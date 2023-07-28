<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Company Setup</h5>
                @if (empty($company))
                    <a href="{{ route('company.create') }}" class="btn btn-primary btn-sm">Create Company</a>
                @endif

            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="border border-1">SN</th>
                            <th class="border border-1">Logo</th>
                            <th class="border border-1">Company</th>
                            <th class="border border-1">Address</th>
                            <th class="border border-1">Contact</th>
                            <th class="border border-1">Email</th>
                            <th class="border border-1">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if (empty($company))
                            <h5>No Record found!</h5>
                        @else
                            <tr>
                                <td class="border border-1">1</td>
                                <td class="border border-1"><img src="{{ asset($company->logo) }}" width="80"
                                        alt=""></td>
                                <td class="border border-1">{{ $company->name }}</td>
                                <td class="border border-1">{{ $company->address }}</td>
                                <td class="border border-1">{{ $company->contact }}</td>
                                <td class="border border-1">{{ $company->email }}</td>
                                <td class="border border-1">
                                    <a href="{{ route('company.edit', $company->id) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</x-app-layout>
