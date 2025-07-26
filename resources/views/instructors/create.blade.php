<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#private_class" data-toggle="tab">Private
                                    Class</a></li>
                            <li class="nav-item"><a class="nav-link" href="#instructor_class"
                                    data-toggle="tab">Instructor Class</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <!-- Private Class -->
                            <div class="tab-pane active" id="private_class">
                                <form action="/instructors/store" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="file-dnd">
                                                <label for="photo">Upload Photo</label>
                                                <input type="file" id="photo" name="photo">
                                                <div class="before-upload">
                                                    <div>
                                                        <i class="fa fa-image"></i>
                                                        <h4>Drag & Drop Image File or Browse</h4>
                                                        <p>Supports: JPEG, PNG, GIF, TIFF</p>
                                                    </div>
                                                </div>
                                                <div class="after-upload">
                                                    <div class="clear-btn">&times;</div>
                                                    <img src="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input required type="text" class="form-control" id="name"
                                                    name="name" placeholder="Enter name">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email Address</label>
                                                <input required type="email" class="form-control" id="email"
                                                    name="email" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input required type="text" class="form-control" id="phone"
                                                    name="phone" placeholder="Enter phone">
                                            </div>
                                            <div class="form-group">
                                                <label for="service">Select Service</label>
                                                <select id="service" class="form-control" name="service_id[]" multiple
                                                    size="5">
                                                    @foreach ($services as $index => $service)
                                                        <option value="{{ $service->id }}"
                                                            {{ $index === 0 ? 'selected' : '' }}>{{ $service->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="hidden" class="form-control" id="description" name="description">
                                        <trix-editor input="description"></trix-editor>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                            
                            <!-- Instructor Class -->
                            <div class="tab-pane" id="instructor_class">
                                <form action="/instructors/store" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="file-dnd">
                                                <label for="photo">Upload Photo</label>
                                                <input type="file" id="photo" name="photo">
                                                <div class="before-upload">
                                                    <div>
                                                        <i class="fa fa-image"></i>
                                                        <h4>Drag & Drop Image File or Browse</h4>
                                                        <p>Supports: JPEG, PNG, GIF, TIFF</p>
                                                    </div>
                                                </div>
                                                <div class="after-upload">
                                                    <div class="clear-btn">&times;</div>
                                                    <img src="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input required type="text" class="form-control" id="name"
                                                    name="name" placeholder="Enter name">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email Address</label>
                                                <input required type="email" class="form-control" id="email"
                                                    name="email" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input required type="text" class="form-control" id="phone"
                                                    name="phone" placeholder="Enter phone">
                                            </div>
                                            <div class="form-group">
                                                <label for="service">Select Service</label>
                                                <select id="service" class="form-control" name="service_id[]" multiple
                                                    size="5">
                                                    @foreach ($services as $index => $service)
                                                        <option value="{{ $service->id }}"
                                                            {{ $index === 0 ? 'selected' : '' }}>{{ $service->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="hidden" class="form-control" id="description" name="description">
                                        <trix-editor input="description"></trix-editor>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
