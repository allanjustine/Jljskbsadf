<div>
    <!-- Modal Update Music-->
    <div wire:ignore.self class="modal fade" id="updateMusic" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="
                 background-image:url('images/m.jpg');">
                <div class="modal-header">
                    <h5 class="modal-title text-white text-center" id="exampleModalLongTitle">Update Music</h5>
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
                        <div class="form-group mb-3 text-white">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" placeholder="Description" rows="3" wire:model="description"
                                required></textarea>
                            @error('description')
                                <span class="text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <div class="col-md-5 text-white">
                            <label for="location">Location:</label>
                            <select class="form-control" id="location" wire:model="location" required>
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
                                <option value="Collombia">Colombia</option>
                                <option value="Philippines">Philippines</option>
                            </select>
                            @error('location')
                                <span class="text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 text-white">
                            <label for="genre">Genre:</label>
                            <select class="form-control" id="genre" wire:model="genre" required>
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
                                id="price" placeholder="Album Price" wire:model="price" required>
                            <div class="input-group-append">
                                <span class="input-group-text">₱ {{ number_format($price, 2) }}</span>
                            </div>
                            @error('price')
                                <span class="text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3 text-white">
                            <label for="rating">Rating: {{ $rating }}</label>
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
                    <button type="button" class="btn btn-primary text-white" wire:click="update()">Update</button>
                    <button class="btn btn-outline-dark text-white" wire:click="resetInputs()">Reset Inputs</button>
                    <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
