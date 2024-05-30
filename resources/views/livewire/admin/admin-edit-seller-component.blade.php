<div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold mb-4 py-3"><span class="text-muted fw-light">Form/</span> Edit Sellers</h4>
            <a class="btn btn-primary" href="{{ route('admin.sellers') }}" style="margin-bottom: 10px;">Sellers</a>

            <!-- Basic Layout & Basic with Icons -->
            <div class="row">
                <!-- Basic Layout -->
                <div class="col-lg-6">
                    <div class="card mb-4">
                        {{-- <div class="card-header d-flex align-items-center justify-content-between">
                 <h5 class="mb-0">Basic Layout</h5>
                 <small class="text-muted float-end">Default label</small>
               </div> --}}
                        <div class="card-body">
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                            @endif
                            @if (Session::has('failure'))
                                <div class="alert alert-danger" role="alert">{{ Session::get('failure') }}</div>
                            @endif
                            <form wire:submit.prevent="updateSeller">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="name">Publish</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="published" wire:model="published">
                                            <option value=1>Yes</option>
                                            <option value=0>No</option>
                                        </select>
                                        @error('published')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="slug">Suspend</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="suspended" wire:model="suspended">
                                            <option value=1>Yes</option>
                                            <option value=0>No</option>
                                        </select>
                                        @error('suspended')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-sm-10">
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->

</div>
