<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

    <h1>Edit Student</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Student Number:</label><br>
        <input type="text"
               name="student_number"
               value="{{ old('student_number', $student->student_number) }}"
               required>
        <br><br>

        <label>First Name:</label><br>
        <input type="text"
               name="first_name"
               value="{{ old('first_name', $student->first_name) }}"
               required>
        <br><br>

        <label>Last Name:</label><br>
        <input type="text"
               name="last_name"
               value="{{ old('last_name', $student->last_name) }}"
               required>
        <br><br>

        <label>Course:</label><br>
        <input type="text"
               name="course"
               value="{{ old('course', $student->course) }}"
               required>
        <br><br>

        <button type="submit">Update Student</button>
    </form>

    <br>

    <a href="{{ route('students.index') }}">
        Back to Student Records
    </a>

</body>
</html>