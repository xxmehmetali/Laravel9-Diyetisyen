
<div class="paymentContainer">
    <form method="post" action="{{ route('user.paymentProcess') }}">
        @csrf
        <input type="hidden" name="patient_id" value="{{ $essentialInfo->patient_id }}">
        <input type="hidden" name="dietitian_id" value="{{ $essentialInfo->dietitian_id }}">
        <input type="hidden" name="treatment_id" value="{{ $essentialInfo->treatment_id }}">
        <input type="hidden" name="price" value="{{ $essentialInfo->price }}">
        <input type="hidden" name="frequency" value="{{ $essentialInfo->frequency }}">
        <input type="hidden" name="duration" value="{{ $essentialInfo->duration }}">

        <div class="mb-3">
            <label class="form-label">Payment Type</label>
            <select class="form-control" name="paymentType">
                <option>Mastercard</option>
                <option>Visa</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Credit Card Number (16 digits)</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">CCV (3 digits)</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Expiration Date</label>
            <input type="date" class="form-control">
        </div>
        <input type="submit" value="Buy" class="btn btn-success" style="width: 20%">
    </form>

</div>
