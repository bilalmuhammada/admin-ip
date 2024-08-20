<!-- Modal -->
<div class="modal fade" id="editvendor" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Edit Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" id="edit-vendor-form-data">
                    <input type="hidden" class="id" name="id" value="">
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Brand Name</label>
                        <input type="text" class="form-control brand_name" name="brand_name" id="exampleInputUsername1"
                               autocomplete="off" value="Noraiz">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Company Name</label>
                        <input type="text" class="form-control company_name" name="company_name"
                               id="exampleInputUsername1"
                               autocomplete="off" placeholder="Company Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Website</label>
                        <input type="text" class="form-control website" name="website" id="exampleInputUsername1"
                               autocomplete="off" placeholder="Website">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Business Mail</label>
                        <input type="text" class="form-control email" name="email" id="exampleInputUsername1"
                               autocomplete="off" Value="xyz@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">First Name</label>
                        <input type="text" class="form-control first_name" name="first_name" id="exampleInputUsername1"
                               autocomplete="off" Value="xyz@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Last Name</label>
                        <input type="text" class="form-control last_name" name="last_name" id="exampleInputUsername1"
                               autocomplete="off" Value="xyz@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Position</label>
                        <input type="text" class="form-control position" name="position" id="exampleInputUsername1"
                               autocomplete="off" Value="+6885876">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Mobile</label>
                        <input type="text" class="form-control phone" name="mobile" id="exampleInputUsername1"
                               autocomplete="off" Value="+6885876">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Country</label>
                        <select class="js-example-basic-single form-select country_id" data-width="100%"
                                name="country_id">
                            <option value="" disabled>Select Country</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Brand State</label>
                        <select class="js-example-basic-single form-select state_id" data-width="100%"
                                name="state_id">
                            <option value="" disabled>Select State</option>

                        </select>
                    </div> -->
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">City</label>
                        <select class="js-example-basic-single form-select city_id" data-width="100%" id="city_id"
                                name="city_id">
                            <option value="" disabled>Select City</option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Password</label>
                        <input type="text" class="form-control" name="password" id="exampleInputUsername1"
                               autocomplete="off" placeholder="(Leave it empty if you don't want to change)">
                        <i class="fa fa-eye one" id="togglePassword"
                           style="position: absolute;top: 83%;right: 5%;cursor: pointer;color: lightgray;"></i>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Confirm Password</label>
                        <input type="text" class="form-control" name="confirm_password" id="exampleInputUsername1"
                               autocomplete="off" placeholder="Confirm Password">
                        <i class="fa fa-eye one" id="togglePassword"
                           style="position: absolute;top: 90%;right: 5%;cursor: pointer;color: lightgray;"></i>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Brand Type</label>
                        <select class="js-example-basic-single form-select type" data-width="100%" name="type">
                            <option value="">Select Type</option>
                            <option value="BUYER">Buyer</option>
                            <option value="SELLER" selected>Seller</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" class="form-control">Brand
                            Image</label><br/>
                        <img class="wd-80 ht-80 rounded-circle image-show" src="https://via.placeholder.com/80x80"
                             style="margin-bottom:5px;" alt="" class="form-control">
                        <br/>
                        <input type="file" class="form-control" id="" name="image"/>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <textarea id="maxlength-textarea" name="description" placeholder="Description"
                                  class="form-control description" id="defaultconfig-4" maxlength="100"
                                  rows="8"></textarea>
                    </div> -->
                    {{--                    <div class="mb-3">--}}
                    {{--                        <div class="form-check form-switch mb-2">--}}
                    {{--                            <input type="checkbox" class="form-check-input status" id="formSwitch1" name="status">--}}
                    {{--                            <label class="form-check-label" for="formSwitch1">Active</label>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button type="button" data-bs-dismiss="modal" aria-label="btn-close" class="btn btn-danger">Cancel
                    </button>
                </form>
            </div>
            <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
        </div>
    </div>
</div>
