@extends('backend.master')

@push('styles')
@endpush

@section('content')
<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">

        <div class="page-heading">
            <div class="page-heading-copy">
                <span class="page-icon">
                    <i class="bi bi-people" aria-hidden="true"></i>
                </span>
                <div>
                    <p class="eyebrow mb-1">Student Management</p>
                    <h1 class="h3 mb-1">Student List</h1>
                    <p class="text-muted mb-0">
                        View, edit and manage all students.
                    </p>
                </div>
            </div>
        </div>

        <section class="panel">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="h5 mb-0">
                    <i class="bi bi-table"></i>
                    Student Table
                </h2>

                <a href="{{ route('student.create') }}" class="btn btn-primary">
                    Add New Student
                </a>
            </div>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Subject</th>
                            <th>Created At</th>
                            <th width="220">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($students as $student)

                        <tr>
                            <td>{{ $student->id }}</td>

                            <td>
                                {{ $student->name }}
                            </td>

                            <td>
                                <span class="badge bg-info">
                                    {{ $student->gender }}
                                </span>
                            </td>

                            <td>
                                {{ $student->subject }}
                            </td>

                            <td>
                                {{ $student->created_at }}
                            </td>

                            <td>

                                <a href="{{ url('/student/show/'.$student->id) }}"
                                    class="btn btn-success btn-sm">
                                    View
                                </a>

                                <a href="{{ url('/student/edit/'.$student->id) }}"
                                    class="btn btn-primary btn-sm">
                                    Edit
                                </a>

                                <a href="{{ url('/student/delete/'.$student->id) }}"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this student?')">
                                    Delete
                                </a>

                            </td>
                        </tr>

                        @empty

                        <tr>
                            <td colspan="6" class="text-center text-danger">
                                No Student Found
                            </td>
                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </section>

    </div>
</main>
@endsection

@push('scripts')
@endpush