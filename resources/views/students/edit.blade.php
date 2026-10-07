@extends('layouts.app')

@section('content')
    <main>
        <div class="page-heading">
            <div>
                <p class="eyebrow">Update record</p>
                <h1>Refine the details.</h1>
                <p class="subtitle">Make a quick correction or keep this student record up to date.</p>
            </div>
            <a class="link-button" href="{{ route('students.index') }}">Back to directory</a>
        </div>

        @if ($errors->any())
            <div class="alert alert-error" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <section class="form-card">
            <h2>{{ $student->first_name }} {{ $student->last_name }}</h2>
            <form action="{{ route('students.update', $student) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-grid">
                    <div class="field field-full">
                        <label for="student_number">Student number</label>
                        <input id="student_number" type="text" name="student_number" value="{{ old('student_number', $student->student_number) }}" required autofocus>
                    </div>
                    <div class="field">
                        <label for="first_name">First name</label>
                        <input id="first_name" type="text" name="first_name" value="{{ old('first_name', $student->first_name) }}" required>
                    </div>
                    <div class="field">
                        <label for="last_name">Last name</label>
                        <input id="last_name" type="text" name="last_name" value="{{ old('last_name', $student->last_name) }}" required>
                    </div>
                    <div class="field field-full">
                        <label for="course">Course</label>
                        <input id="course" type="text" name="course" value="{{ old('course', $student->course) }}" required>
                    </div>
                </div>
                <div class="form-actions">
                    <button class="button button-primary" type="submit">Update student</button>
                    <a class="text-link" href="{{ route('students.index') }}">Cancel</a>
                </div>
            </form>
        </section>
    </main>
@endsection
