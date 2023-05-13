<div>
    <!-- Modal Add Music-->
    <div wire:ignore.self class="modal fade" id="addMusic" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-image:url('images/m.jpg');">
                <div class="modal-header">
                    <h5 class="modal-title mx-auto text-white" id="exampleModalLongTitle">Add Music Band</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group mb-3 text-white">
                            <label for="title">Profile Image:</label>
                            <input type="file" class="form-control" id="image" wire:model="image" required>
                            @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" style="width: 120px;" class="mt-1">
                            @endif

                            @error('image')
                                <span class="text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group d-flex justify-content-between">
                        <div class="col-md-5 text-white">
                            <label for="title">Music Title:</label>
                            <input type="text" class="form-control" id="title" placeholder="Music Title"
                                wire:model="title" required>
                            @error('title')
                                <span class="text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 text-white">
                            <label for="author">Music Band:</label>
                            <input type="text" class="form-control" placeholder="Music Band" id="author"
                                wire:model="author" required>
                            @error('author')
                                <span class="text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 text-white">
                        <div class="form-group mb-3">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" placeholder="Description" rows="3" wire:model="description"
                                required></textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                        <div class="form-group d-flex justify-content-between">
                            <div class="col-md-5 text-white">
                            <label for="location">Location:</label>
                            <select class="form-select" id="location" wire:model="location" required>
                                <option selected hidden="true">Choose Location</option>
                                <option disabled>Choose Location</option>
                                <option value="Korea">Korea</option>
                                <option value="New York">New York</option>
                                <option value="Chicago">Chicago</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Japan">Japan</option>
                                <option value="Canada">Canada</option>
                                <option value="San Francisco">San Francisco</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="London">London</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Portland">Portland</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Las Vegas">Las Vegas</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Philippines">Philippines</option>
                            </select>
                            @error('location')
                                <span class="text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                            <div class="col-md-6 text-white">
                            <label for="genre">Genre:</label>
                            <select class="form-select" id="genre" wire:model="genre" required>
                                <option selected hidden="true">Choose Genre</option>
                                <option disabled>Choose Genre</option>
                                <option value="Rock">Rock</option>
                                <option value="Pop">Pop</option>
                                <option value="Hip Hop">Hip Hop</option>
                                <option value="R&B">R&B</option>
                                <option value="Reggae">Reggae</option>
                                <option value="Acoustic">Acoustic</option>
                                <option value="Jazz">Jazz</option>
                                <option value="Blues">Blues</option>
                                <option value="Classical">Classical</option>
                            </select>
                            @error('genre')
                                <span class="text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                        <div class="form-group mb-3 text-white">
                            <label for="price">Album Price:</label>
                            <input type="range" class="form-range" max="10000" min="1" step="1"
                                id="price" placeholder="Price" wire:model="price" required>
                            <div class="input-group-append">
                                <span class="input-group-text">₱ {{ number_format($price, 2) }}</span>
                            </div>
                            @error('price')
                                <span class="text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3 text-white">
                            <label for="rating">Rating(s): {{ $rating }}</label>
                            <input type="range" class="form-range" max="5" min="0" step="1"
                                id="rating" placeholder="Rating" wire:model="rating" required>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    Rating(s):&nbsp;
                                    @for ($i = 0; $i < $rating; $i++)
                                        <i class="fa fa-smile-o" style="color:orange;"></i>
                                    @endfor
                                </span>
                            </div>
                            @error('rating')
                                <span class="text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary text-white" wire:click="addMusic()"><i class="fa fa-save" aria-hidden="true"></i>&nbsp; Save</button>
                    <button class="btn btn-warning text-white" wire:click="resetInputs()"><i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;Reset</button>
                    <button type="button" class="btn btn-secondary text-white" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
