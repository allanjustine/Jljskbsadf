<div>
    <!-- Modal Delete Music-->
    <div wire:ignore.self  class="modal fade" id="deleteMusic" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="
               background-image:url('images/m.jpg');">
                <div class="modal-header">
                    <h5 class="text-white">Are you sure you want to remove this in playlist?</h5>
                </div>
                <div class="modal-body text-white">
                    This music will be deleted.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" wire:click="deleteMusic()">Yes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
