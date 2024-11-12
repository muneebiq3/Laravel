document.addEventListener("DOMContentLoaded", () => {
    displayData();

    document.getElementById("crudForm").addEventListener("submit", (e) => {
        e.preventDefault();

        const id = document.getElementById("index").value;
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const phone = document.getElementById("phone").value;
        const address = document.getElementById("address").value;

        const data = { name, email, phone, address };

        if (id === "") {
            addUser(data);
        } else {
            updateUser(id, data);
        }

        document.getElementById("crudForm").reset();
    });
});

// Function to fetch and display all users
function displayData() {
    fetch("fetch_users.php")
        .then(response => response.json())
        .then(users => {
            const dataList = document.getElementById("dataList");
            dataList.innerHTML = "";
            users.forEach(user => {
                const card = `
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">${user.name}</h5>
                                <p class="card-text">Email: ${user.email}</p>
                                <p class="card-text">Phone: ${user.phone}</p>
                                <p class="card-text">Address: ${user.address}</p>
                                <button class="btn btn-outline-secondary btn-sm" onclick="editData(${user.id}, '${user.name}', '${user.email}', '${user.phone}', '${user.address}')">Edit</button>
                                <button class="btn btn-secondary btn-sm" onclick="deleteUser(${user.id})">Delete</button>
                            </div>
                        </div>
                    </div>`;
                dataList.insertAdjacentHTML("beforeend", card);
            });
        });
}

// Function to add a new user
function addUser(data) {
    fetch("add_user.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(() => displayData());
}

// Function to edit user data
function editData(id, name, email, phone, address) {
    document.getElementById("index").value = id;
    document.getElementById("name").value = name;
    document.getElementById("email").value = email;
    document.getElementById("phone").value = phone;
    document.getElementById("address").value = address;
}

// Function to update a user
function updateUser(id, data) {
    data.id = id;
    fetch("update_user.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(() => displayData());
}

// Function to delete a user
function deleteUser(id) {
    fetch("delete_user.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ id })
    })
    .then(response => response.json())
    .then(() => displayData());
}