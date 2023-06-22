<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Appointment</title>
</head>
<body>

<div>

        <h1>Therapy Sessions

        <form action="./create/setAppointment.php" method="POST" class="formi">
            <h3>Create Appointment</h3>
            <label for="name">Patient:</label>
            <input type="text" name="patient">
            <label for="name">Receptionist:</label>
            <input type="text" name="receptionist">
            <label for="name">Doctor:</label>
            <input type="text" name="doctor">
            <label for="name">Date:</label>
            <input type="text" name="date">
            <label for="name">Session Status:</label>
            <input type="text" name="session_status">
            <label for="name">Attended:</label>
            <input type="text" name="attendence">

            <button id="create_appointment_btn" type="submit" class="btn btn-primary">Create Appointment</button>

        </form>

    </div>

    <script type="text/javascript">
        const createAppoint = document.getElementById("create_appointment_btn");

        addEventListener("submit", (e)=>{
            alert('Created')
        })

   </script>
    
</body>
</html>