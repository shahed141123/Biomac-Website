<div class="row">
    <div class="col-xl-12">
        <h1>Advanced Setting</h1>
    </div>
    <div class="col-xl-12">
        <div class="row mt-10 px-5 align-items-center w-75 rounded-3">
            <div class="col-xl-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="user_verification"
                        id="user_verification"
                        {{ old('user_verification', optional($setting)->user_verification) == '1' ? 'checked' : 0 }} />
                    <x-metronic.label class="form-check-label" for="user_verification">
                        User Verification Checking
                    </x-metronic.label>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="api_verification"
                        id="api_verification"
                        {{ old('api_verification', optional($setting)->api_verification) == '1' ? 'checked' : 0 }} />
                    <x-metronic.label class="form-check-label" for="api_verification">
                        API Verification Checking
                    </x-metronic.label>
                </div>
            </div>
            <div class="col-xl-4 mt-5">
                <div class="mb-10">
                    <x-metronic.label class="form-label">Minimum Order Amount(Min: 0)</x-metronic.label>
                    <x-metronic.input type="number" name="minimum_order_amount" id="minimum_order_amount"
                        min="0" class="form-control mb-2" placeholder="User Minimum Order Amount"
                        :value="old('minimum_order_amount', optional($setting)->minimum_order_amount)">
                        </x-metronic.file-input>
                </div>
            </div>
            <div class="col-xl-12 mt-5">
                <div class="mb-10">
                    <x-metronic.label class="form-label">Allowed IPs</x-metronic.label>
                    <input class="form-control" name="allowed_ip" id="allowed_ip"
                        value="{{ old('allowed_ip', optional($setting)->allowed_ip) }}" />
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // The DOM elements you wish to replace with Tagify
        var input = document.querySelector("#allowed_ip");

        // Initialize Tagify components on the above inputs
        new Tagify(input);
    });
</script>
