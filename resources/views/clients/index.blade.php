<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Data Clients</h3>
                    </div>
                    <div class="card-body">
                        <table id="tableClient" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td>{{ $client->name }}</td>
                                        <td>{{ $client->email }}</td>
                                        <td>{{ $client->phone }}</td>
                                        <td>
                                            @if ($client->email_verified_at != null)
                                                <span class="badge badge-success">Verified</span>
                                            @else
                                                <span class="badge badge-warning">Not Verified</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('clients.detail', $client->id) }}" class="btn btn-primary">
                                                <i class="fa-solid fas fa-eye"></i>
                                            </a>
                                            <a id="deleteClient" class="btn btn-danger"
                                                data-url="{{ route('clients.delete', ['id' => $client->id]) }}">
                                                <i class="fa-solid fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>