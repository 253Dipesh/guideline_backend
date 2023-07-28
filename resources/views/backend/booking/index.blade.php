<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Booking Details</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="border border-1">SN</th>
                            <th class="border border-1">Name</th>
                            <th class="border border-1">Mobile</th>
                            <th class="border border-1">Email</th>
                            <th class="border border-1">Guide</th>
                            <th class="border border-1">From</th>
                            <th class="border border-1">To</th>
                            <th class="border border-1">Status</th>
                            <th class="border border-1">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($bookings as $index => $booking)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->mobile }}</td>
                                <td>{{ $booking->email }}</td>
                                <td>{{ $booking->guide->name }}</td>
                                <td>{{ $booking->from }}</td>
                                <td>{{ $booking->to }}</td>
                                <td>
                                    @if ($booking->status == 'approved')
                                        <span class="text-success font-bold">{{ $booking->status }}</span>
                                    @endif

                                    @if ($booking->status == 'pending')
                                        <span class="text-warning font-bold">{{ $booking->status }}</span>
                                    @endif

                                    @if ($booking->status == 'rejected')
                                        <span class="text-danger font-bold">{{ $booking->status }}</span>
                                    @endif

                                </td>
                                <td class="d-flex align-items-center">
                                    <form action="{{ route('guide/booking.update', $booking->id) }}" method="post">
                                        @csrf
                                        @method('put')
                                        <input type="text" value="approved" name="status" hidden>

                                        <button class="btn" type="submit"><i
                                                class="fas fa-check-circle text-success"></i></button>
                                    </form>

                                    <form action="{{ route('guide/booking.update', $booking->id) }}" method="post">
                                        @csrf
                                        @method('put')
                                        <input type="text" value="rejected" name="status" hidden>
                                        <button class="btn" type="submit"><i
                                                class="
                                            fas fa-times-circle text-danger"></i></button>
                                    </form>


                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</x-app-layout>
