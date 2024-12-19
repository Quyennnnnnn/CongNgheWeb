<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome-free-6.7.2-web/css/all.min.css')}}">
</head>
<body>
   <div class="container">
    <div class="row p-3">
        <h4 class="text-uppercase text-decoration-underline text-center fw-bold text-success">Thêm vấn đề mới</h4>
        <form class="bg-info border border-2 border-success rounded-3" method="POST" action="{{route('issues.store')}}">
            @csrf
            <div class="input-group mt-3">
                <span class="input-group-text fw-bold bg-light">ID</span>
                <input required name = 'id' type="" class="form-control" placeholder="">
            </div>
            <div class="input-group mt-3">
            <span class="input-group-text fw-bold bg-light">computer_id</span>
            <input required name="computer_id" type="number" class="form-control" placeholder="">
            </div>

            <div class="input-group mt-3">
                <span class="input-group-text fw-bold bg-light">reported_by</span>
                <input required name = 'reported_by' type="" class="form-control" placeholder="">
            </div>
            <div class="input-group mt-3">
                <span class="input-group-text fw-bold bg-light">reported_date</span>
                <input required name = 'reported_date' type="date" class="form-control" placeholder="">
            </div>
            
            
            <div class="input-group mt-3">
                <span class="input-group-text fw-bold bg-light">description</span>
                <input required name = 'description' type="" class="form-control" placeholder="">
            </div>
            <div class="input-group mt-2">
                <span class="input-group-text fw-bold bg-light">urgency</span>
                <select class="form-select" name='urgency'>              
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                </select>
            </div>
            <div class="input-group mt-2">
                <span class="input-group-text fw-bold bg-light">status</span>
                <select class="form-select" name='status'>              
                        <option value="Open">Open</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Resolved">Resolved</option>
                </select>
            </div>
            
            
                  
                
            
        
            <button type="submit" class="btn btn-primary my-3 ">Thêm</button>
        </form>
    </div>
   </div>

    <script src="{{asset('assets/fontawesome/js/all.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap-5.3.2/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/jquery-3.7.1.min.js')}}"></script>
</body>
</html>
