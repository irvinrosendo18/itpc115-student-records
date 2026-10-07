@extends('layouts.app')

@section('content')
    <main>
        <div class="page-heading">
            <div>
                <p class="eyebrow">Campus directory</p>
                <h1>Keep every student in view.</h1>
                <p class="subtitle">A clear, calm place to manage your student community and keep records ready when you need them.</p>
            </div>
            <a class="button button-primary" href="{{ route('students.create') }}">+ Add student</a>
        </div>

        <div class="stat-row">
            <div class="stat">
                <strong>{{ $students->count() }}</strong>
                <span>Total students</span>
            </div>
            <div class="stat">
                <strong>{{ $students->unique('course')->count() }}</strong>
                <span>Courses represented</span>
            </div>
        </div>

        @if(session('success'))
            <div class="alert" role="status">{{ session('success') }}</div>
        @endif

        <section class="table-card" aria-labelledby="directory-heading">
            <div class="table-wrap">
                <table class="records-table">
                    <thead>
                        <tr>
                            <th id="directory-heading">Student</th>
                            <th>Student number</th>
                            <th>Course</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($students as $student)
                            <tr>
                                <td class="student-name">{{ $student->first_name }} {{ $student->last_name }}</td>
                                <td class="student-number">{{ $student->student_number }}</td>
                                <td><span class="course-tag">{{ $student->course }}</span></td>
                                <td>
                                    <div class="action-group">
                                        <a class="text-link" href="{{ route('students.show', $student) }}">View</a>
                                        <a class="text-link" href="{{ route('students.edit', $student) }}">Edit</a>
                                        <form action="{{ route('students.destroy', $student) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="button button-danger" type="submit" onclick="return confirm('Delete this student record?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    <div class="empty-state">
                                        <strong>Your directory is ready for its first student.</strong>
                                        <span>Add a record to see it appear here.</span>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    </main>
@endsection
