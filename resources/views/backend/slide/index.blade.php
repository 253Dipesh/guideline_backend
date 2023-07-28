<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Slides</h5>
                <a href="{{ route('slide.create') }}" class="btn btn-primary btn-sm">Add Slide</a>

            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="border border-1">SN</th>
                            <th class="border border-1">Image</th>
                            <th class="border border-1 w-75">Title</th>
                            <th class="border border-1">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($slides as $index => $slide)
                            <tr>
                                <td class="border border-1">{{ ++$index }}</td>
                                <td class="border border-1"><img src="{{ asset($slide->image) }}" class="img-thumbnail"
                                        width="120" alt=""></td>
                                <td class="border border-1">{{ $slide->title }}</td>

                                <td class="border border-1">
                                    <a href="{{ route('slide.edit', $slide->id) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</x-app-layout>
