<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if($isPersonalTraining)
                        <div class="card-header">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#personal_training" data-toggle="tab">Personal
                                    Training</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <!-- Personal Training -->
                            <div class="tab-pane active" id="personal_training">
                                <form action="{{ route('instructors.update', $instructor->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="file-dnd" data-form="personal_training">
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
                                                    <img src="{{ $instructor->photo }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input required type="text" class="form-control" id="name"
                                                    name="name" value="{{ old('name', $instructor->name) }}" placeholder="Enter name">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email Address</label>
                                                <input required type="email" class="form-control" id="email"
                                                    name="email" value="{{ old('email', $instructor->email) }}" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input required type="text" class="form-control" id="phone"
                                                    name="phone" value="{{ old('phone', $instructor->phone) }}" placeholder="Enter phone">
                                            </div>
                                            <div class="form-group">
                                                <label for="service_personal">Select Service</label>
                                                <select id="service_personal" class="form-control" name="service_id[]" multiple
                                                    size="5">
                                                    @php
                                                    $selected = old('service_id', $selectedServices ?? []);
                                                    @endphp
                                                    @foreach ($services->where('is_personal_training', true) as $service)
                                                    <option value="{{ $service->id }}"
                                                        {{ in_array($service->id, $selected) ? 'selected' : '' }}>{{ $service->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="price_4_sessions">Price 4 Sessions</label>
                                                <input type="number" class="form-control" id="price_4_sessions"
                                                    name="price_4_sessions" value="{{ old('price_4_sessions', $instructor->price_4_sessions) }}" placeholder="Enter price for 4 sessions" min="0" step="1">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="price_8_sessions">Price 8 Sessions</label>
                                                <input type="number" class="form-control" id="price_8_sessions"
                                                    name="price_8_sessions" value="{{ old('price_8_sessions', $instructor->price_8_sessions) }}" placeholder="Enter price for 8 sessions" min="0" step="1">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="price_16_sessions">Price 16 Sessions</label>
                                                <input type="number" class="form-control" id="price_16_sessions"
                                                    name="price_16_sessions" value="{{ old('price_16_sessions', $instructor->price_16_sessions) }}" placeholder="Enter price for 16 sessions" min="0" step="1">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="price_24_sessions">Price 24 Sessions</label>
                                                <input type="number" class="form-control" id="price_24_sessions"
                                                    name="price_24_sessions" value="{{ old('price_24_sessions', $instructor->price_24_sessions) }}" placeholder="Enter price for 24 sessions" min="0" step="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="certificate">Certificate</label>
                                        <input type="text" class="form-control" id="certificate"
                                            name="certificate" value="{{ old('certificate', $instructor->certificate) }}" placeholder="Enter certificate">
                                    </div>
                                    <div class="form-group">
                                        <label for="specialist">Specialist</label>
                                        <input type="text" class="form-control" id="specialist"
                                            name="specialist" value="{{ old('specialist', $instructor->specialist) }}" placeholder="Enter specialist">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="hidden" class="form-control" id="description" name="description" value="{{ old('description', $instructor->description) }}">
                                        <trix-editor input="description"></trix-editor>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="card-header">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#instructor_class"
                                    data-toggle="tab">Instructor Class</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <!-- Instructor Class -->
                            <div class="tab-pane active" id="instructor_class">
                                <form action="{{ route('instructors.update', $instructor->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="file-dnd" data-form="instructor_class">
                                                <label for="photo">Upload Photo</label>
                                                <input type="file" id="photo_instructor_class" name="photo">
                                                <div class="before-upload">
                                                    <div>
                                                        <i class="fa fa-image"></i>
                                                        <h4>Drag & Drop Image File or Browse</h4>
                                                        <p>Supports: JPEG, PNG, GIF, TIFF</p>
                                                    </div>
                                                </div>
                                                <div class="after-upload">
                                                    <div class="clear-btn">&times;</div>
                                                    <img src="{{ $instructor->photo }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input required type="text" class="form-control" id="name"
                                                    name="name" value="{{ old('name', $instructor->name) }}" placeholder="Enter name">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email Address</label>
                                                <input required type="email" class="form-control" id="email"
                                                    name="email" value="{{ old('email', $instructor->email) }}" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input required type="text" class="form-control" id="phone"
                                                    name="phone" value="{{ old('phone', $instructor->phone) }}" placeholder="Enter phone">
                                            </div>
                                            <div class="form-group">
                                                <label for="service_class">Select Service</label>
                                                <select id="service_class" class="form-control" name="service_id[]" multiple
                                                    size="5">
                                                    @php
                                                    $selected = old('service_id', $selectedServices ?? []);
                                                    @endphp
                                                    @foreach ($services->where('is_personal_training', false) as $service)
                                                    <option value="{{ $service->id }}"
                                                        {{ in_array($service->id, $selected) ? 'selected' : '' }}>{{ $service->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="certificate">Certificate</label>
                                        <input type="text" class="form-control" id="certificate"
                                            name="certificate" value="{{ old('certificate', $instructor->certificate) }}" placeholder="Enter certificate">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="participants_number">Participants Number</label>
                                            <input required type="number" class="form-control" id="participants_number"
                                                name="participants_number" value="{{ old('participants_number', $instructor->participants_number) }}" placeholder="Enter max participants" min="0" step="1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="level_class">Select Level</label>
                                        @php
                                            $selectedLevel = old('level_class', $instructor->level_class ?? '');
                                        @endphp
                                        <select id="level_class" class="form-control" name="level_class">
                                            <option value="" {{ $selectedLevel === '' ? 'selected' : '' }}>-- Select Level --</option>
                                            <option value="Beginner" {{ $selectedLevel === 'Beginner' ? 'selected' : '' }}>Beginner</option>
                                            <option value="Intermediate" {{ $selectedLevel === 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
                                            <option value="Pro" {{ $selectedLevel === 'Pro' ? 'selected' : '' }}>Pro</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="hidden" class="form-control" id="description_instructor_class" name="description" value="{{ old('description', $instructor->description) }}">
                                        <trix-editor input="description_instructor_class"></trix-editor>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layout>