<?php

include 'dbconfig.php';

try {
    // Define the ID of the teacher to be deleted
    $teacher_id = 1; // Change this to the ID of the teacher you want to delete

    // Prepare an SQL statement for deletion from the Teachers table
    $stmt = $conn->prepare("DELETE FROM Teachers WHERE teacher_id = ?");

    // Execute the prepared statement with the teacher ID
    $stmt->execute([$teacher_id]);

    // Check if any rows were affected (deleted)
    if ($stmt->rowCount() > 0) {
        echo "Teacher deleted successfully.";
    } else {
        echo "No teacher found with that ID.";
    }
} catch (PDOException $e) {
    // Handle any database errors
    echo "Failed to delete teacher. Please try again later.";
    error_log($e->getMessage()); // Log the error for debugging
}
?>
