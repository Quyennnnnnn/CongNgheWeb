<form action="{{ route('medicines.update', $medicine->medicine_id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $medicine->name }}" required>
    <input type="text" name="brand" value="{{ $medicine->brand }}">
    <input type="text" name="dosage" value="{{ $medicine->dosage }}" required>
    <input type="text" name="form" value="{{ $medicine->form }}" required>
    <input type="number" name="price" value="{{ $medicine->price }}" required>
    <input type="number" name="stock" value="{{ $medicine->stock }}" required>
    <button type="submit">Cập Nhật Thuốc</button>
</form>
