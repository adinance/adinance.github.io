const apiUrl = "http://localhost/adinance.github.io/crud-rest/api.php"; // Change to your API URL

// Fetch and display all users
async function fetchUsers() {
    const response = await fetch(apiUrl);
    const users = await response.json();

    const userTable = document.getElementById("userTable");
    userTable.innerHTML = ""; // Clear the table

    users.forEach((user) => {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${user.name}</td>
            <td>${user.email}</td>
            <td>${user.age}</td>
            <td>
                <button onclick="deleteUser(${user.id})">Delete</button>
                <button onclick="editUser(${user.id}, '${user.name}', '${user.email}', ${user.age})">Edit</button>
            </td>
        `;
        userTable.appendChild(row);
    });
}

// Add a new user
document.getElementById("userForm").addEventListener("submit", async (event) => {
    event.preventDefault();

    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const age = document.getElementById("age").value;

    await fetch(apiUrl, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({ name, email, age }),
    });

    document.getElementById("userForm").reset();
    fetchUsers(); // Refresh the user list
});

// Delete a user
async function deleteUser(id) {
    await fetch(`${apiUrl}?id=${id}`, {
        method: "DELETE",
    });

    fetchUsers(); // Refresh the user list
}

// Edit a user
async function editUser(id, currentName, currentEmail, currentAge) {
    const name = prompt("Enter new name:", currentName);
    const email = prompt("Enter new email:", currentEmail);
    const age = prompt("Enter new age:", currentAge);

    if (name && email && age) {
        await fetch(`${apiUrl}?id=${id}`, {
            method: "PUT",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ name, email, age }),
        });

        fetchUsers(); // Refresh the user list
    }
}

// Initial fetch of users
fetchUsers();
