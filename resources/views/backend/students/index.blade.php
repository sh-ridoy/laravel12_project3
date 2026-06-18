@extends('backend.master')

@push('styles')
@endpush

@section('content')

<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">

```
    <div class="page-heading">
        <div class="page-heading-copy">
            <span class="page-icon">
                <i class="bi bi-people"></i>
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

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert">
                </button>
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-3">

            <h2 class="h5 mb-0">
                <i class="bi bi-table"></i>
                Student Table
            </h2>

            <a href="{{ route('student.create') }}"
               class="btn btn-primary">
                <i class="bi bi-plus-circle"></i>
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
                        <th>Email</th>
                        <th>Phone</th>
                        <th>District</th>
                        <th>Subject</th>
                        <th>Created At</th>
                        <th width="250">Action</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($students as $student)

                    <tr>

                        <td>{{ $student->id }}</td>

                        <td>{{ $student->name }}</td>

                        <td>
                            <span class="badge bg-info">
                                {{ ucfirst($student->gender) }}
                            </span>
                        </td>

                        <td>{{ $student->email }}</td>

                        <td>{{ $student->phone }}</td>

                        <td>{{ $student->district }}</td>

                        <td>{{ $student->subject }}</td>

                        <td>
                            {{ $student->created_at?->format('d M Y') }}
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

                            <form action="{{ route('student.destroy',$student->id) }}"
                                  method="POST"
                                  class="d-inline">

                                @csrf
                          

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this student?')">
                                    Delete
                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="9"
                            class="text-center text-danger">
                            No Student Found
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </section>

</div>
```

</main>
@endsection

@push('scripts')
@endpush
