// Function to approve a job listing
function approveJobListing() {
    alert("Job listing approved successfully.");
    // Call your backend API to approve the job listing here
}

// Function to reject a job listing
function rejectJobListing() {
    alert("Job listing rejected successfully.");
    // Call your backend API to reject the job listing here
}

// Function to remove a job listing
function removeJobListing() {
    alert("Job listing removed successfully.");
    // Call your backend API to remove the job listing here
}

document.addEventListener('DOMContentLoaded', () => {
    // Event listeners for each form submission
    const addUserForm = document.getElementById("addUserForm");
    const editUserForm = document.getElementById("editUserForm");
    const deleteUserForm = document.getElementById("deleteUserForm");

    if (addUserForm) {
        addUserForm.addEventListener("submit", function(event) {
            event.preventDefault();
            alert("User added successfully.");
            // Here, you would send a request to the server to add the user
        });
    }

    if (editUserForm) {
        editUserForm.addEventListener("submit", function(event) {
            event.preventDefault();
            alert("User details updated successfully.");
            // Here, you would send a request to the server to edit the user
        });
    }

    if (deleteUserForm) {
        deleteUserForm.addEventListener("submit", function(event) {
            event.preventDefault();
            alert("User deleted successfully.");
            // Here, you would send a request to the server to delete the user
        });
    }
});
