<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TODO LIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

    </style>
</head>
<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-6 offset-md-3 my-3">
                <h1 class="my-3 text-center">Todo List</h1>
                <div class="row mt-3">
                    <div class="col-md-8">
                        <input type="text" id="task_title" class="form-control" placeholder="Enter your task">
                    </div>
                    <div class="col-md-4">
                        <input type="button" id="submit_button" class="btn btn-info" value="Add Task">
                    </div>
                </div>
            </div>
        </div>
    </div>


    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $("#submit_button").click(function (e) { 
            
            var title = $("#task_title").val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '{{ route("save_task") }}',
                type: 'POST',
                data: {
                    title: title
                },
                success: function(response) {
                    console.log(response);
                }

            });
            
        });
        
    </script>
</body>
</html>