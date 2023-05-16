<div>
    <!-- Modal Update Profile-->
    <div wire:ignore.self class="modal fade" id="updateProfile" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="
                 background-image:url('images/background.png');">
                <div class="modal-header">
                    <h5 class="modal-title text-white text-center" id="exampleModalLongTitle">Update Profile</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="text" class="form-control mt-3" id="title" placeholder="Name"
                            wire:model="name" required>
                        @error('name')
                            <span class="text-danger">*{{ $message }}</span>
                        @enderror
                        <input type="text" class="form-control mt-3" id="title" placeholder="Email"
                            wire:model="email" required>
                        @error('email')
                            <span class="text-danger">*{{ $message }}</span>
                        @enderror
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary text-white" wire:click="update()">Update</button>
                    <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="updatePic" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="
                 background-image:url('images/background.png');">
                <div class="modal-header">
                    <h5 class="modal-title text-white text-center" id="exampleModalLongTitle">Update Profile Picture</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="file" class="form-control" id="image" wire:model="profile_img" required>
                        @error('profile_img')
                            <span class="text-danger">*{{ $message }}/select image first</span>
                        @enderror
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary text-white" wire:click="updatePic()">Update</button>
                    <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
