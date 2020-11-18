<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <div style="border: solid 5px;margin-left: 300px;margin-right: 300px; margin-top: 50px; padding: 50px;">
        <form action='/welcome'>
            <h1>Buat Account Baru!</h1>
            <h3>Sign Up Form</h3>
            <label>First name :</label><br />
            <input type="text" name="first_name"/><br /><br />
            <label>Last name :</label><br />
            <input type="text" name="last_name"/><br /><br />
            <label>Gender:</label><br />
            <input type="radio" name="Gender" value="Male" />Male<br />
            <input type="radio" name="Gender" value="Female" />Female<br />
            <input type="radio" name="Gender" value="Other" />Other<br /><br />
            <label>Nationality:</label><br />
            <SELECT name="Nationality">
                <OPTION value="Indonesia" selected>Indonesia
                <OPTION value="Singapura">Singapura
                <OPTION value="Malaysia">Malaysia
            </SELECT><br /><br />
            <label>Language Spoken:</label><br />
            <input type="checkbox" name="Spoken" value="BahasaIndonesia" />Bahasa Indonesia<br />
            <input type="checkbox" name="Spoken" value="English" />English<br />
            <input type="checkbox" name="Spoken" value="Other" />Other<br /><br />
            <label>Bio:</label><br />
            <textarea name="" id="" cols="30" rows="10"> </textarea><br/>
            <button>Sign Up</button>
        </form>

       


    </div>
</body>

</html>