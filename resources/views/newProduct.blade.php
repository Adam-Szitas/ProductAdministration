@include('navbar')

<div class="container box">
    <form action="{{ url('/main/add/insertProduct') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">{{ __('lang.product_name') }}</label>
            <input type="text" placeholder="{{ __('lang.product_name') }}" name="name">
        </div>
        <div class="form-group">
            <label for="note">{{ __('lang.note') }}</label>
            <input type="text" placeholder="{{ __('lang.note') }}" name="note">
        </div>
        <div class="form-group">
            <input type="submit" name="newproduct" class="btn btn-primary" value="{{ __('lang.insert_product') }}">
        </div>

    </form>
</div>
