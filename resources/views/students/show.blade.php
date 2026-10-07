@extends('layouts.app')

@section('content')
    <main>
        <div class="page-heading">
            <div>
                <p class="eyebrow">Student profile</p>
                <h1>{{ $student->first_name }} {{ $student->last_name }}</h1>
                <p class="subtitle">A quick view of this student's current record.</p>
            </div>
            <a class="link-button" href="{{ route('students.index') }}">Back to directory</a>
        </div>

        <section class="detail-card">
            <h2>Record details</h2>
            <div class="detail-list">
                <div class="detail-item">
                    <small>Student number</small>
                    <strong>{{ $student->student_number }}</strong>
                </div>
                <div class="detail-item">
                    <small>Course</small>
                    <strong>{{ $student->course }}</strong>
                </div>
                <div class="detail-item">
                    <small>First name</small>
                    <strong>{{ $student->first_name }}</strong>
                </div>
                <div class="detail-item">
                    <small>Last name</small>
                    <strong>{{ $student->last_name }}</strong>
                </div>
            </div>
            <div class="form-actions">
                <a class="button button-primary" href="{{ route('students.edit', $student) }}">Edit record</a>
                <a class="text-link" href="{{ route('students.index') }}">Return to directory</a>
            </div>
        </section>
    </main>
@endsection
