<form action="{{ route('medicines.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Tên thuốc" required>
    <input type="text" name="brand" placeholder="Thương hiệu">
    <input type="text" name="dosage" placeholder="Liều lượng" required>
    <input type="text" name="form" placeholder="Dạng thuốc" required>
    <input type="number" name="price" placeholder="Giá thuốc" required>
    <input type="number" name="stock" placeholder="Số lượng" required>
    <button type="submit">Thêm Thuốc</button>
</form>
