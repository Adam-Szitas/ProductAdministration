@include('navbar')
<div class="container box">
    <form action="{{ url('/main/add/insertProduct') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Enter product name</label>
            <input type="text" placeholder="Product name" name="name">
        </div>
        <div class="form-group">
            <label for="note">Enter product note</label>
            <input type="text" placeholder="Product note" name="note">
        </div>
        <div class="form-group">
            <input type="submit" name="newproduct" class="btn btn-primary" value="Insert new product">
        </div>

    </form>
</div>
