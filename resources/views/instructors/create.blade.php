<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Complete All Forms Below</h3>
                    </div>
                    <form action="/instructors/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
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
                                        <input required type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input required type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input required type="text" class="form-control" id="phone" name="phone"
                                            placeholder="Enter phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="service">Select Service</label>
                                        <select id="service" class="form-control" name="service_id">
                                            @foreach ($services as $service)
                                                <option value="{{ $service->id }}">{{ $service->name }}</option>
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
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
