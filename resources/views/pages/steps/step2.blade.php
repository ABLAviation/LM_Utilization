<div class="step step2">
    <h3>Step 2</h3>
    <div class="row">
        <div class="col-lg-12 _offset-lg-2 space-y-5">
            <form id="form">
                <div class="details form-section">
                    <h3>Details</h3>
                    <div class="details-row row">
                    </div>
                </div>
                <div class="btn-actions mt-0">
                    <a class="btn btn-alt-primary" href="/step/step1">Previous</a>
                    <button type="submit" class="btn btn-abl-primary update">Submit</button>
                    <a class="btn btn-alt-primary" href="/step/step3">Next</a>
                </div>
            </form>
        </div>
    </div>
    <div class="hidden-params d-none">
        <input type="hidden" id="columns_names" value="{{ json_encode($column_names) }}">
    </div>
</div>