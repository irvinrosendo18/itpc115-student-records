<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

    <h1>Add Student</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <label>Student Number:</label><br>
        <input type="text" name="student_number" required>
        <br><br>

        <label>First Name:</label><br>
        <input type="text" name="first_name" required>
        <br><br>

        <label>Last Name:</label><br>
        <input type="text" name="last_name" required>
        <br><br>

        <label>Course:</label><br>
        <input type="text" name="course" required>
        <br><br>

        <button type="submit">Save Student</button>
    </form>

    <br>

    <a href="{{ route('students.index') }}">Back to Student Records</a>

</body>
</html>