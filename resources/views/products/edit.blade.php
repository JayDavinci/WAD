<h1>Edit Produk</h1>
<form method="POST" action="/products/{{ $product->id }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $product->name }}" required><br>
    <input type="text" name="description" value="{{ $product->description }}"><br>
    <input type="number" name="price" value="{{ $product->price }}" required><br>
    <button type="submit">Update</button>
</form>
