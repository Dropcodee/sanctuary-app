<div class="modal fade" id="createExcos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Exco</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </a>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('store-exco') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exco_name" class="col-form-label">Exco's Name</label>
                        <input id="exco_name" type="text" class="form-control" name="exco_name"
                            :value="old('exco_name')" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="dept">Select Department:</label>
                        <select class="form-control" id="dept_college" name="dept_college" required>
                            @if ($departments->count() > 0)
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">{{ ucfirst($department->name) }}
                                        ({{ strtoupper($department->college) }})</option>
                                @endforeach
                            @else
                                <option value="">Create Departments to select</option>
                            @endif

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exco_mail" class="col-form-label">Exco's Email</label>
                        <input id="exco_mail" type="text" class="form-control" name="exco_mail"
                            :value="old('exco_mail')">
                    </div>
                    <div class="form-group">
                        <label for="exco_position" class="col-form-label">Exco's Position</label>
                        <input id="exco_position" type="text" class="form-control" name="exco_position"
                            :value="old('exco_position')">
                    </div>
                    <div class="form-group">
                        <label for="exco_instagram" class="col-form-label">Exco's Instagram Link</label>
                        <input id="exco_instagram" type="text" class="form-control" name="exco_instagram"
                            :value="old('exco_instagram')">
                    </div>
                    <div class="form-group">
                        <label for="exco_twitter" class="col-form-label">Exco's Twitter Link</label>
                        <input id="exco_twitter" type="text" class="form-control" name="exco_twitter"
                            :value="old('exco_twitter')">
                    </div>
                    <div class="form-group">
                        <label for="dept">Select Position:</label>
                        <p class="text-muted">This field helps decide which exco comes out first on the about page</p>
                        <select class="form-control" id="exco_leadership" name="exco_leadership" required>
                            <option value="" selected>Choose default position</option>
                            <option value="exco">Exco</option>
                            <option value="head">Unit Head</option>
                            <option value="assist_head">Unit Assistant Head</option>
                        </select>
                    </div>
                    <div class="modal-footer mt-5">
                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-primary">Submit & Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
