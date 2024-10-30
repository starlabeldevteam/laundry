<div>
    <div class="modal fade " id="check-financial-year" tabindex="-1" role="dialog" aria-labelledby="payment"
        aria-hidden="true" wire:ignore.self data-bs-backdrop="static" data-bs-keyboard="false" >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title fw-600" id="payment">
                        {{ $lang->data['error'] ?? 'Error' }}</h6>
                
                </div>
                <form>
                    <div class="modal-body">
                        <div class="row g-2 align-items-center">
                            <h6>{{ $lang->data['financial_year_not_created'] ?? 'Financial year not created' }}</h6>
                            <p>{{ $lang->data['financial_year_line_1'] ?? 'It looks like you have not yet created a financial year or has not set it as active.' }}</p>
                            <li>{{ $lang->data['financial_year_line_2'] ?? 'Create a financial year from the tools section' }}</li>
                            <li>{{ $lang->data['financial_year_line_3'] ?? 'Set the created financial year in master settings' }}</li>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{route('admin.financial_year_settings')}}" class="btn btn-primary"
                           >{{ $lang->data['add_financial_year'] ?? 'Add financial year' }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('js')
    @if ($no_financial_year)
        <script>
            var myModal = new bootstrap.Modal(document.getElementById('check-financial-year'))
            myModal.show()
        </script>
    @endif
@endpush
