<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <p id="deleteWarningText"></p>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
          {{-- <a class="btn btn-primary" href="login.html">delete</a> --}}

          <a class="btn btn-primary" data-toggle="modal" data-target="#deleteModal" href="Javascript:void(0)" onclick="event.preventDefault();
                             document.getElementById('delete-form').submit();">Yes</a>
        
            <form id="delete-form" action="" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>

        </div>
      </div>
    </div>
  </div>