<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#modalAddBlog">Add Article</button>
                    </div>
                    <div class="card-body">
                        <table id="tableBlog" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Author</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                <tr>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ Str::limit(strip_tags($blog->content), 80) }}</td>
                                    <td>{{ $blog->author }}</td>
                                    <td class="text-center">
                                        <button id="editBlog" type="button" class="btn btn-primary"
                                            data-id="{{ $blog->id }}"
                                            data-title="{{ $blog->title }}"
                                            data-content="{{ $blog->content }}">
                                            <i class="fa-solid fas fa-pen"></i>
                                        </button>
                                        <a id="deleteBlog" class="btn btn-danger"
                                            data-url="{{ route('blogs.delete', ['id' => $blog->id]) }}">
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

    <div class="modal fade" id="modalAddBlog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Article</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/blogs/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="file-dnd" data-form="blogPhoto">
                            <label for="photo">Upload Photo</label>
                            <input type="file" id="blogPhoto" name="photo">
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
                        <div class="form-group">
                            <label for="blogTitle">Title</label>
                            <input required type="text" class="form-control" id="blogTitle" name="title"
                                placeholder="Enter article title">
                        </div>
                        <div class="form-group">
                            <label for="select_author">Select Author</label>
                            <select id="select_author" class="form-control" name="author">
                                <option selected value="Admin Fitnessign">Admin Fitnessign</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="blogContent">Content</label>
                            <input type="hidden" class="form-control" id="blog_content" name="content">
                            <trix-editor input="blog_content"></trix-editor>
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
</x-layout>