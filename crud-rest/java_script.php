<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD with JavaScript</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        form {
            margin-bottom: 20px;
        }
        form input {
            margin-right: 10px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>CRUD Application with JavaScript</h1>

    <form id="userForm">
        <input type="text" id="name" placeholder="Name" required />
        <input type="email" id="email" placeholder="Email" required />
        <input type="number" id="age" placeholder="Age" required />
        <button type="submit">Add User</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="userTable">
            <!-- User rows will be dynamically inserted here -->
        </tbody>
    </table>

    <script src="app.js"></script>
</body>
</html>
