@extends('layouts.app')

@section('content')
    <main>
        <div class="page-heading">
            <div>
                <p class="eyebrow">New record</p>
                <h1>Add a student.</h1>
                <p class="subtitle">Capture the essentials now. You can always update the record later.</p>
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
            <h2>Student details</h2>
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="form-grid">
                    <div class="field field-full">
                        <label for="student_number">Student number</label>
                        <input id="student_number" type="text" name="student_number" value="{{ old('student_number') }}" required autofocus>
                    </div>
                    <div class="field">
                        <label for="first_name">First name</label>
                        <input id="first_name" type="text" name="first_name" value="{{ old('first_name') }}" required>
                    </div>
                    <div class="field">
                        <label for="last_name">Last name</label>
                        <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required>
                    </div>
                    <div class="field field-full">
                        <label for="course">Course</label>
                        <input id="course" type="text" name="course" value="{{ old('course') }}" required>
                    </div>
                </div>
                <div class="form-actions">
                    <button class="button button-primary" type="submit">Save student</button>
                    <a class="text-link" href="{{ route('students.index') }}">Cancel</a>
                </div>
            </form>
        </section>
    </main>
@endsection
