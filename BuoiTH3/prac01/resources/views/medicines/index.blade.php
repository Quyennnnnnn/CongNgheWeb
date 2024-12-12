<table>
    <thead>
        <tr>
            <th>Tên Thuốc</th>
            <th>Thương Hiệu</th>
            <th>Liều Lượng</th>
            <th>Dạng Thuốc</th>
            <th>Giá</th>
            <th>Số Lượng</th>
            <th>Hành Động</th>
        </tr>
    </thead>
    <tbody>
        @foreach($medicines as $medicine)
            <tr>
                <td>{{ $medicine->name }}</td>
                <td>{{ $medicine->brand }}</td>
                <td>{{ $medicine->dosage }}</td>
                <td>{{ $medicine->form }}</td>
                <td>{{ $medicine->price }}</td>
                <td>{{ $medicine->stock }}</td>
                <td>
                    <a href="#">Chỉnh Sửa</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
