<div class="step step1">
    <h3>Lease Management - General</h3>
    <div class="row">
        <div class="col-lg-12 _offset-lg-2 space-y-5">
            <form id="form">
                <div class="filter form-section">
                    <h3>Filter</h3>
                    <div class="row">
                        <div class="col-md-6 col-12 operators mb-3">
                            <label for="operator" class="mb-1">Operators</label>
                            <select class="form-select operators_list"
                                    id="operator" name="operator" width="100%">
                                <option value="">Operator</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12 msn mb-3">
                            <label for="msn" class="mb-1">MSN</label>
                            <select class="form-select msn_list" disabled
                                    id="msn" name="msn" width="100%">
                                <option value="">MSN</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn btn-alt-info btn-abl-primary search">Search</button>
                            <button type="button" class="btn btn-alt-secondary btn-abl-secondary cancel">Cancel</button>
                        </div>
                    </div>
                </div>
                <div class="review-section form-section disabled">
                    <h3>Review</h3>
                    <div class="row">
                        <div class="col-md-6 col-12 users mb-2">
                            <label for="data-entry" class="mb-1">Data Entry</label>
                            <select class="form-select users_list data-entry"
                                    id="data-entry" name="data-entry" width="100%">
                                <option value="">Data Entry</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12 users mb-2">
                            <label for="reviewer-1" class="mb-1">Reviewer 1</label>
                            <select class="form-select users_list reviewer-1"
                                    id="reviewer-1" name="reviewer-1" width="100%">
                                <option value="">Reviewer 1</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12 users mb-2">
                            <label for="reviewer-2" class="mb-1">Reviewer 2</label>
                            <select class="form-select users_list reviewer-2"
                                    id="reviewer-2" name="reviewer-2" width="100%">
                                <option value="">Reviewer 2</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12 date-of-approval mb-2">
                            <label class="form-label" for="date-of-approval">Date of Approval</label>
                            <input type="text" class="js-flatpickr form-control flatpickr-input"
                                   id="date-of-approval" name="date-of-approval" placeholder="Y-m-d" readonly="readonly">
                        </div>
                    </div>
                </div>
                <div class="details form-section">
                    <h3>Details</h3>
                    <div class="details-row row"><p class="mb-0">Choose an operator + msn to view the details</p></div>
                </div>
            </form>
        </div>
    </div>
</div>