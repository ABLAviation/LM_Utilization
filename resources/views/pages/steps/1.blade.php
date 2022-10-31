<div class="step step1">
    <h3>{{ $title }} <span class="fs-5">({{ "$step/$stepsLimit" }})</span></h3>
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
                            <button type="button" class="btn btn-alt-info btn-abl-primary search" disabled>Search</button>
                            <button type="button" class="btn btn-alt-secondary btn-abl-secondary cancel">Cancel</button>
                        </div>
                    </div>
                </div>
                <div class="details form-section pd-2">
                    <h3>Details</h3>
                    <div class="details-row step-1 row"><p class="mb-0">Choose an operator + msn to view the details</p></div>
                </div>
            </form>
        </div>
    </div>
</div>