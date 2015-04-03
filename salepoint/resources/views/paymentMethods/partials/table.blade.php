<table class="table table-striped table-hover">
    <tr>
        {!!Form::label(trans('paymentMethods.TypeMethods'))   !!}
    </tr>
    @foreach ($payment as $payment)
        <tr onclick="window.document.location='{{ route('paymentMethods.show', $payment->id) }}';">
            <td>
                {{ $payment-> typePayment}}
            </td>
        </tr>
    @endforeach
</table>