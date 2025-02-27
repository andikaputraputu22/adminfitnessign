<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/instructors/create" class="btn btn-primary">Add Instructor</a>
                    </div>
                    <div class="card-body">
                        <table id="tableInstructor" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Description</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($instructors as $instructor)
                                    <tr>
                                        <td>{{ $instructor->name }}</td>
                                        <td>{{ $instructor->email }}</td>
                                        <td>{{ $instructor->phone }}</td>
                                        <td>{{ Str::limit(strip_tags($instructor->description), 80) }}</td>
                                        <td class="text-center">
                                            <button id="editInstructor" type="button" class="btn btn-primary">
                                                <i class="fa-solid fas fa-pen"></i>
                                            </button>
                                            <a id="deleteInstructor" class="btn btn-danger"
                                                data-url="{{ route('instructors.delete', ['id' => $instructor->id]) }}">
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