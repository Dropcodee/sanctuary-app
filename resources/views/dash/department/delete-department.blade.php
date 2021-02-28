<div class="modal fade" id="delete-department-{{ $department->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete {{ $department->name }} Department</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </a>
            </div>
            <div class="modal-body">
                <img src="{{ asset('images/icons/delete.svg') }}" alt="" class="mx-auto w-32 h-32 opacity-50 py-8">
                <p class="text-center text-xl">Are you sure about this ?</p>
                <form method="POST" action="{{ route('delete-department', $department->id) }}">
                    @method('DELETE')
                    @csrf
                    <div class="modal-footer mt-5">
                        <a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-danger">Delete Department</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>