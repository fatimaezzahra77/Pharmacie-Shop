@extends('layout')
   
@section('content')
<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['prix'] * $details['quantity'] @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ asset('hygiene_roche') }}/{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['nom'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['prix'] }}</td>
                    <td>
                        <form action="{{ route('update_cart', $id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="_method" value="PATCH">
                            <input type="number" name="quantity" value="{{ $details['quantity'] }}" min="1" onchange="updateCart(event)">
                        </form>
                    </td>

                    <td data-th="Subtotal" class="text-center subtotal">$ {{ $details['prix'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <form action="{{ route('remove_from_cart', $id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger remove-item">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                <button class="btn btn-success"><i class="fa fa-money"></i> Checkout</button>
            </td>
        </tr>
    </tfoot>
</table>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Submit the form when quantity value changes
            $('input[name="quantity"]').on('input', function(event) {
                event.preventDefault(); // prevent default behavior of form submission
                $(this).closest('form').submit();
            });

            // Remove item from cart
            $(document).ready(function() {
    // Submit the form when quantity value changes
    $('input[name="quantity"]').on('input', function(event) {
        event.preventDefault(); // prevent default behavior of form submission
        $(this).closest('form').submit();
    });

    // Remove item from cart
    $(".remove-item").click(function (event) {
        event.preventDefault(); // prevent default behavior of link click
        var ele = $(this);
        var id = ele.parents("tr").attr("data-id");
        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '/remove_from_cart/' + id,
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    // Remove row from table
                    ele.parents("tr").remove();

                    // Update total price
                    var total = 0;
                    $(".subtotal").each(function() {
                        total += parseFloat($(this).text().replace(/\$/, ''));
                    });
                    $('tfoot td:eq(0)').html('<strong>Total $'+total.toFixed(2)+'</strong>');
                }
            });
        }
    });
});
</script>
@endsection

