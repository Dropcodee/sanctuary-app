<div class="modal fade" id="createDept" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create New Department</h5>
                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </a>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('store-department') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="dept_name" class="col-form-label">Department Name</label>
                                            <input id="dept_name" type="text" class="form-control" name="dept_name"
                                            :value="old('dept_name')" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="dept_college">Department College</label>
                                            <select class="form-control" id="dept_college" name="dept_college" required>
                                                <option value="ce">CE</option>
                                                <option value="cpas">CPAS</option>
                                                <option value="cbs">CBS</option>
                                                <option value="cas">CAS</option>
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