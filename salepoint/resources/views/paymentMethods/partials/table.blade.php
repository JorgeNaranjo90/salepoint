<table class="table table-striped table-hover">
    <tr>
        {!!Form::label(trans('paymentMethods.typeMethods'))   !!}
    </tr>
    @foreach ($payment as $payment)
        <tr onclick="window.document.location='{{ route('paymentMethods.show', $payment->id) }}';">
            <td>
                {{ $payment-> name}}
            </td>
        </tr>
    @endforeach
</table>