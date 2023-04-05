<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO LIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
* {
	box-sizing: border-box;
}

body {
	background-color: #f5f5f5;
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
}

.container {
	background-color: #fff;
	margin: 50px auto;
	max-width: 600px;
	padding: 20px;
	text-align: center;
}

h1 {
	color: #4CAF50;
	margin-bottom: 30px;
}

form {
	margin-bottom: 20px;
}

label {
	display: block;
	font-size: 18px;
	margin-bottom: 10px;
}

input[type="text"] {
	border: none;
	border-radius: 4px;
	box-shadow: 0 2px 5px rgba(0,0,0,0.1);
	font-size: 16px;
	margin-bottom: 10px;
	padding: 10px;
	width: 100%;
}

.add-btn {
	background-color: #4CAF50;
	border: none;
	border-radius: 4px;
	color: #fff;
	cursor: pointer;
	font-size: 16px;
	padding: 10px;
	transition: background-color 0.2s;
}

.add-btn:hover {
	background-color: #2E8B57;
}

.task-list {
	list-style-type: none;
	margin: 0;
	padding: 0;
}

.task-list li {
	align-items: center;
	display: flex;
	justify-content: space-between;
	margin-bottom: 10px;
}

.task-list li input[type="checkbox"] {
	margin-right: 10px;
}

.delete-btn {
	background-color: #f44336;
	border: none;
	border-radius: 4px;
	color: #fff;
	cursor: pointer;
	font-size: 14px;
	padding: 5px 10px;
	transition: background-color 0.2s;
}

.delete-btn:hover {
	background-color: #D32F2F;
}

    </style>
</head>
<body>

	<div class="container">
		<h1>To-Do List</h1>
		<form>
			<label for="task">Add a Task:</label>
			<input type="text" id="task" name="task" placeholder="Enter a task...">
			<button type="submit" class="add-btn">Add</button>
		</form>
		<ul class="task-list">
			<li>
				<input type="checkbox" id="task-1">
				<label for="task-1">Buy groceries</label>
				<button class="delete-btn">Delete</button>
			</li>
			<li>
				<input type="checkbox" id="task-2">
				<label for="task-2">Clean the house</label>
				<button class="delete-btn">Delete</button>
			</li>
			<li>
				<input type="checkbox" id="task-3">
				<label for="task-3">Do laundry</label>
				<button class="delete-btn">Delete</button>
			</li>
		</ul>
	</div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>