<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
</head>
<body>

    <h1>Student Records</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('students.create') }}">Add Student</a>

    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Student Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Course</th>
            <th>Actions</th>
        </tr>

        @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->student_number }}</td>
            <td>{{ $student->first_name }}</td>
            <td>{{ $student->last_name }}</td>
            <td>{{ $student->course }}</td>

            <td>
                <a href="{{ route('students.edit', $student) }}">
                    Edit
                </a>

                <form action="{{ route('students.destroy', $student) }}"
                      method="POST"
                      style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button type="submit">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>