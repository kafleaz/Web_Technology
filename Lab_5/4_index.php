<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form  method="post" action="5_insert.php" onsubmit="return validateForm()">
        <table sc>
            <tr>
                <td><label for="fname">First Name:</label></td>
                <td><input type="text" id="fname" name="firstname" required></td>
            </tr>

            <tr>
                <td><label for="lname">Last Name:</label></td>
                <td><input type="text" id="lname" name="lastname" required></td>
            </tr>

            <tr>
                <td><label>Gender:</label></td>
                <td>
                    <input type="radio" id="female" value="0" name="gender" required> Female
                    <input type="radio" id="male" value="1" name="gender"> Male
                </td>
            </tr>

            <tr>
                <td><label for="semester">Semester:</label></td>
                <td>
                    <select name="semester" id="semester">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><label for="symbol">Symbol No:</label></td>
                <td><input type="text" id="symbol" name="symbol" required></td>
            </tr>

            <tr>
                <td><label for="batch">Batch:</label></td>
                <td>
                    <select name="batch" id="batch">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit">
                    <input type="reset">
                </td>
            </tr>
        </table>
    </form>
    <script>
    function validateForm() {
        // Get values from the form
        const firstname = document.getElementById('fname').value;
        const lastname = document.getElementById('lname').value;
        const gender = document.querySelector('input[name="gender"]:checked');
        const selectedSemester = document.getElementById('semester').value;
        const symbolnumber = document.getElementById('symbol').value;
        const selectedBatch = document.getElementById('batch').value;

        // Detailed validation
        if (firstname === "") {
            alert("Please enter your First Name");
            return false;
        }
        if (lastname === "") {
            alert("Please enter your Last Name");
            return false;
        }
        if (!gender) {
            alert("Please select your Gender");
            return false;
        }
        if (selectedSemester === "") {
            alert("Please select your Class");
            return false;
        }
        if (symbolnumber === "") {
            alert("Please enter your Roll Number");
            return false;
        }
        if (selectedBatch === "") {
            alert("Please select your Batch");
            return false;
        }

        return true;
    }
    </script>
    <a href="5_list.php"><h3>See database</h3></a>
</body>
</html>
