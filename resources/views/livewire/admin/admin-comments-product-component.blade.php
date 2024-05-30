<div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold mb-4 py-3"><span class="text-muted fw-light">Table /</span> Products</h4>

            {{-- <a style="margin-bottom: 10px;" class="btn btn-primary" href="{{ route('admin.product.add') }}">Add Product</a> --}}
            <!-- Bordered Table -->
            <div class="card">
                <h5 class="card-header">Bordered Table</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table-bordered table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Comment</th>
                                    <th>Block</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($comments) > 0)
                                    @foreach ($comments as $comment)
                                        <tr>
                                            <td>{{ $comment->id }}</td>
                                            <td>{{ $comment->comment }}</td>
                                            @if ($comment->blocked === 1)
                                                <td>yes</td>
                                            @else
                                                <td>no</td>
                                            @endif
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle hide-arrow p-0"
                                                        data-bs-toggle="dropdown" type="button">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            onclick="deleteConfirmation({{ $comment->id }})"
                                                            style="cursor: pointer"><i class="bx bx-trash me-1"></i>
                                                            Delete</a>
                                                        <a class="dropdown-item"
                                                            onclick="blockConfirmation({{ $comment->id }})"
                                                            style="cursor: pointer"><i class="fa-solid fa-xmark"></i>
                                                            Block</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>No comments</tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr>
            <span style="padding-top: 20px">
                {!! $comments->withQueryString()->links('pagination::bootstrap-5') !!}
            </span>
            <!--/ Bordered Table -->

            <hr class="my-5" />


        </div>
        <!-- / Content -->

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->

</div>

<div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                <div class="col-md-12 text-center">
                    <h4 class="pb-3">Do you want to delete this record?</h4>
                    <button class="btn btn-secondary delete-cancel-btn" data-bs-target="#deleteConfirmation"
                        data-bs-toggle="modal" type="button">Cancel</button>
                    <button class="btn btn-danger" onclick="deleteComment()" type="button">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="blockConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                <div class="col-md-12 text-center">
                    <h4 class="pb-3">Do you want to block this record?</h4>
                    <button class="btn btn-secondary block-cancel-btn" data-bs-target="#blockConfirmation"
                        data-bs-toggle="modal" type="button">Cancel</button>
                    <button class="btn btn-danger" onclick="blockComment()" type="button">block</button>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function deleteConfirmation(id) {
        @this.set('comment_id', id);
        $('#deleteConfirmation').modal('show');
    }

    function deleteComment() {
        @this.call('deleteComment');
        $('#deleteConfirmation').modal('hide');

    }

    function blockConfirmation(id) {
        @this.set('comment_id', id);
        $('#blockConfirmation').modal('show');
    }

    function blockComment() {
        @this.call('blockComment');
        $('#blockConfirmation').modal('hide');
    }

    document.querySelector('.delete-cancel-btn').addEventListener('click', () => {
        $('#deleteConfirmation').modal('hide');

    });
    document.querySelector('.block-cancel-btn').addEventListener('click', () => {
        $('#deleteConfirmation').modal('hide');

    });
</script>
