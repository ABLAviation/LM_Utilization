<div class="step step2">
    <h3>{{ $title }} <span class="fs-5">({{ "$step/$stepsLimit" }})</span></h3>
    <div class="row">
        <div class="col-lg-12 _offset-lg-2 space-y-5">
            <div class="details form-section">
                <div class="details-row step-4 row">
                </div>
            </div>
            <div class="review-section form-section content">
                <!-- Discussion -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Review</h3>
                    </div>
                    <div class="block-content bg-body-light">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mb-3 users">
                                <label for="data-entry" class="mb-1 d-block">Data Entry</label>
                                <select class="form-select users_list data-entry"
                                        id="data-entry" name="data-entry" width="100%">
                                    <option value="">Data Entry</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-3 users">
                                <label for="reviewer-1" class="mb-1">Reviewer 1</label>
                                <select class="form-select users_list reviewer-1"
                                        id="reviewer-1" name="reviewer-1" width="100%">
                                    <option value="">Reviewer 1</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-3 users">
                                <label for="reviewer-2" class="mb-1">Reviewer 2</label>
                                <select class="form-select users_list reviewer-2"
                                        id="reviewer-2" name="reviewer-2" width="100%">
                                    <option value="">Reviewer 2</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-3 date-of-approval">
                                <label class="form-label" for="date-of-approval">Date of Approval</label>
                                <input type="text" class="js-flatpickr form-control flatpickr-input"
                                       id="date-of-approval" name="date-of-approval" placeholder="Y-m-d" readonly="readonly">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-actions mt-0">
                <button type="submit" class="btn btn-abl-primary update">Submit</button>
            </div>
        </div>
    </div>
</div>