<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.7.2-web/css/all.min.css') }}">
</head>
<body>
    <h2 class="text-center text-success my-4 text-uppercase text-decoration-underline">Vấn đề</h2>

    <div class="container">
        <a href="{{ route('issues.create') }}">
            <button class="btn btn-success mb-3"><i class="fa-regular fa-square-plus"></i> Thêm vấn đề</button>
        </a>
        <div class="row">
            <table class="table table-primary table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Mã Vấn đề</th>
                        <th scope="col">Mã Máy tính</th>
                        <th scope="col">Người Báo cáo</th>
                        <th scope="col">Ngày Báo cáo</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Mức độ</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col" class="text-center" colspan="3">Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($issues as $issue)
                        <tr>
                            <th scope="row">{{ $issue->id }}</th>
                            <td>{{ $issue->computer_id }}</td>
                            <td>{{ $issue->reported_by ?? 'N/A' }}</td>
                            <td>{{ $issue->reported_date }}</td>
                            <td>{{ $issue->description }}</td>
                            <td>{{ $issue->urgency }}</td>
                            <td>{{ $issue->status }}</td>
                            <td><a class="btn btn-success" href="{{ route('issues.show', $issue->id) }}"><i class="fa-regular fa-eye"></i></a></td>
                            <td><a class="btn btn-danger" href="{{ route('issues.edit', $issue->id) }}"><i class="fa-regular fa-pen-to-square"></i></a></td>
                            <td>
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#deleteIssue{{ $issue->id }}">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="deleteIssue{{ $issue->id }}" tabindex="-1" aria-labelledby="deleteIssueLabel{{ $issue->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteIssueLabel{{ $issue->id }}">Xác nhận xóa</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Bạn có chắc chắn muốn xóa vấn đề: {{ $issue->description }}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                                <form action="{{ route('issues.destroy', $issue->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- paginating -->
    @if($numberOfPage > 1)
    <div class="d-flex justify-content-center align-items-center my-2">
        <a class="btn btn-success" href="{{ route('issues.index', ['pageIndex' => $pageIndex - 1]) }}">Trước</a>  
        @for($i = 1; $i <= $numberOfPage; $i++)
            @if($pageIndex == $i)
                <a class="btn btn-primary ms-2" href="{{ route('issues.index', ['pageIndex' => $i]) }}">{{ $i }}</a> 
            @else
                @if($i == 1 || $i == $numberOfPage || ($i <= $pageIndex + 4 && $i >= $pageIndex - 4))
                    <a class="btn btn-success ms-2" href="{{ route('issues.index', ['pageIndex' => $i]) }}">{{ $i }}</a>
                @elseif($i == $pageIndex - 5 || $i == $pageIndex + 5)
                    <a class="btn btn-success ms-2" href="{{ route('issues.index', ['pageIndex' => $i]) }}">...</a>
                @endif
            @endif
        @endfor
        <a class="btn btn-success ms-2" href="{{ route('issues.index', ['pageIndex' => $pageIndex + 1]) }}">Sau</a>
    </div>
    @endif

    <!-- modal inform -->
    <div id="myDialog" style="display: none;" class="px-5 py-3 rounded-3">
        <h4 class="text-primary fw-bold fs-4">Thông báo</h4>
        <p class="text-success">{{ session('mes') }}</p>
        <button id="confirmButton" class="float-end rounded-2">Đồng ý</button>
    </div>

    <style>
        #myDialog {
            position: fixed;
            width: 500px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #ffffff;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        #confirmButton {
            padding: 10px 20px;
            background: #007bff;
            color: #ffffff;
            border: none;
            cursor: pointer;
        }
    </style>
    
    @if(session('mes'))
    <script>
        var dialog = document.getElementById("myDialog");
        var confirmButton = document.getElementById("confirmButton");

        dialog.style.display = "block";
        confirmButton.addEventListener("click", function() {
            dialog.style.display = "none";
        });
    </script>
    @endif

    <script src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/bootstrap-5.3.2/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
