<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa vấn đề</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome-free-6.7.2-web/css/all.min.css')}}">
</head>
<body>
   <div class="container">
    <div class="row p-3">
        <h4 class="text-uppercase text-decoration-underline text-center fw-bold text-success">Sửa vấn đề</h4>
        <form class="bg-info border border-2 border-success rounded-3" method="POST" action="{{route('issues.update', ['issue' => $issue->id, 'pageIndex' => $pageIndex])}}">
            @csrf
            @method('PUT')

            <div class="input-group mt-3">
                <span class="input-group-text fw-bold bg-light">ID</span>
                <input value="{{ $issue->id }}" name="id" type="text" class="form-control" placeholder="ID" readonly>
            </div>

            <div class="input-group mt-3">
                <span class="input-group-text fw-bold bg-light">Computer ID</span>
                <input value="{{ $issue->computer_id }}" name="computer_id" type="number" class="form-control" placeholder="Computer ID">
            </div>

            <div class="input-group mt-3">
                <span class="input-group-text fw-bold bg-light">Reported By</span>
                <input value="{{ $issue->reported_by }}" name="reported_by" type="text" class="form-control" placeholder="Reported By">
            </div>

            <div class="input-group mt-3">
                <span class="input-group-text fw-bold bg-light">Reported Date</span>
                <input value="{{ $issue->reported_date }}" name="reported_date" type="date" class="form-control" placeholder="Reported Date">
            </div>

            <div class="input-group mt-3">
                <span class="input-group-text fw-bold bg-light">Description</span>
                <textarea name="description" class="form-control" placeholder="Description">{{ $issue->description }}</textarea>
            </div>

            <div class="input-group mt-3">
                <span class="input-group-text fw-bold bg-light">Urgency</span>
                <select class="form-select" name="urgency">
                    <option value="Low" {{ $issue->urgency == 'Low' ? 'selected' : '' }}>Low</option>
                    <option value="Medium" {{ $issue->urgency == 'Medium' ? 'selected' : '' }}>Medium</option>
                    <option value="High" {{ $issue->urgency == 'High' ? 'selected' : '' }}>High</option>
                </select>
            </div>

            <div class="input-group mt-3">
                <span class="input-group-text fw-bold bg-light">Status</span>
                <select class="form-select" name="status">
                    <option value="Open" {{ $issue->status == 'Open' ? 'selected' : '' }}>Open</option>
                    <option value="In Progress" {{ $issue->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="Resolved" {{ $issue->status == 'Resolved' ? 'selected' : '' }}>Resolved</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary my-3">Cập nhật</button>
        </form>
    </div>
   </div>

    <script src="{{asset('assets/fontawesome/js/all.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap-5.3.2/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/jquery-3.7.1.min.js')}}"></script>
</body>
</html>
