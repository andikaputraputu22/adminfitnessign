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
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ Str::limit($service->name, 30) }}</td>
                                        <td>{{ $service->category->name ?? 'No category' }}</td>
                                        <td>{{ Str::limit($service->description, 70) }}</td>
                                        <td>{{ formatRupiah($service->price) }}</td>
                                        <td class="text-center">
                                            <button id="editService" type="button" class="btn btn-primary"
                                                data-id="{{ $service->id }}"
                                                data-category="{{ $service->category_id }}"
                                                data-name="{{ $service->name }}"
                                                data-min_person="{{ $service->min_person }}"
                                                data-max_person="{{ $service->max_person }}"
                                                data-price="{{ $service->price }}"
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
                            <label for="serviceCategory">Select Category</label>
                            <select id="serviceCategory" class="form-control" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="serviceName">Name</label>
                            <input required type="text" class="form-control" id="serviceName" name="name"
                                placeholder="Enter service name">
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="serviceMinPerson">Min Person</label>
                                    <input required type="number" min="1" class="form-control" id="serviceMinPerson" name="min_person"
                                        placeholder="Enter min participant">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="serviceMaxPerson">Max Person</label>
                                    <input required type="number" min="1" class="form-control" id="serviceMaxPerson" name="max_person"
                                        placeholder="Enter max participant">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="servicePrice">Price</label>
                                    <input required type="number" min="1" class="form-control" id="servicePrice" name="price"
                                        placeholder="Enter price">
                                </div>
                            </div>
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
                            <label for="editServiceCategory">Select Category</label>
                            <select id="editServiceCategory" class="form-control" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="editServiceName">Name</label>
                            <input required type="text" class="form-control" id="editServiceName" name="name"
                                placeholder="Enter service name">
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="editServiceMinPerson">Min Person</label>
                                    <input required type="number" min="1" class="form-control" id="editServiceMinPerson" name="min_person"
                                        placeholder="Enter min participant">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="editServiceMaxPerson">Max Person</label>
                                    <input required type="number" min="1" class="form-control" id="editServiceMaxPerson" name="max_person"
                                        placeholder="Enter max participant">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="editServicePrice">Price</label>
                                    <input required type="number" min="1" class="form-control" id="editServicePrice" name="price"
                                        placeholder="Enter price">
                                </div>
                            </div>
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
