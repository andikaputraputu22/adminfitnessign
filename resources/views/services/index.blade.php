<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#modalAddService">Add Service</button>
                    </div>
                    <div class="card-body">
                        <table id="tableService" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ Str::limit($service->name, 30) }}</td>
                                        <td>{{ Str::limit($service->description, 100) }}</td>
                                        <td class="text-center">
                                            <button id="editService" type="button" class="btn btn-primary"
                                                data-id="{{ $service->id }}"
                                                data-name="{{ $service->name }}"
                                                data-description="{{ $service->description }}">
                                                <i class="fa-solid fas fa-pen"></i>
                                            </button>
                                            <a id="deleteService" class="btn btn-danger"
                                                data-url="{{ route('services.delete', ['id' => $service->id]) }}">
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

    <div class="modal fade" id="modalAddService">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Service</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/services/store" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="serviceName">Name</label>
                            <input required type="text" class="form-control" id="serviceName" name="name"
                                placeholder="Enter service name">
                        </div>
                        <div class="form-group">
                            <label for="serviceDescription">Description</label>
                            <textarea required id="serviceDescription" class="form-control" rows="3" placeholder="Enter service description" name="description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="modalEditService">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Service</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formEditService" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="editServiceName">Name</label>
                            <input required type="text" class="form-control" id="editServiceName" name="name"
                                placeholder="Enter service name">
                        </div>
                        <div class="form-group">
                            <label for="editServiceDescription">Description</label>
                            <textarea required id="editServiceDescription" class="form-control" rows="3" placeholder="Enter service description" name="description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</x-layout>
