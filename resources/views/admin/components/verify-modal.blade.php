<!-- Delete Modal-->
<div class="modal fade" id="verifyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Verify the client</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <p id="verifyWarningText"></p>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>

          <a class="btn btn-primary" data-toggle="modal" data-target="#verifyModal" href="Javascript:void(0)" onclick="event.preventDefault();
                             document.getElementById('verify-form').submit();">Yes</a>
        
            <form id="verify-form" action=""  method="GET" style="display: none;">
              <input type="hidden" name="verified_id" id="verified_id" value="" >
              <input type="hidden" name="type" id="type" value="" >
                @method('GET')
            </form>

        </div>
      </div>
    </div>
  </div>