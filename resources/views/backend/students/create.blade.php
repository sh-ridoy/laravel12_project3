@extends('backend.master')

@push('styles')
@endpush


@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">Management</p>
                        <h1 class="h3 mb-1">Add User</h1>
                        <p class="text-muted mb-0">Create a new user account with role and team assignments.</p>
                    </div>
                </div>
                <div class="heading-actions"><a class="btn btn-outline-secondary btn-sm" href="{{ url('/students') }}"><i
                            class="bi bi-arrow-left" aria-hidden="true"></i> Back to Users</a></div>
            </div>

            <section class="row g-3">
                <div class="col-12 col-xl-12">
                    <form class="panel needs-validation" novalidate>
                        <div class="panel-header">
                            <div>
                                <h2 class="h5 mb-1 section-title"><i class="bi bi-person-plus"
                                        aria-hidden="true"></i><span>User Information</span></h2>
                                <p class="text-muted mb-0">Create a user account with validated fields.</p>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6"><label class="form-label" for="firstName">First name</label><input
                                    class="form-control" id="firstName" name ="firstname" type="text" required>
                                <div class="invalid-feedback">First name is required.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label d-block">Gender</label>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male"
                                        value="Male" required>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="Female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="other"
                                        value="Other">
                                    <label class="form-check-label" for="other">Other</label>
                                </div>

                                <div class="invalid-feedback d-block">
                                    Please select a gender.
                                </div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="email">Email</label><input
                                    class="form-control" id="email" name="email"type="email" required>
                                <div class="invalid-feedback">Enter a valid email.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="phone">Phone</label><input
                                    class="form-control" id="phone" type="tel" required>
                                <div class="invalid-feedback">Phone number is required.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="role">District</label><select
                                    class="form-select" id="role" required>
                                    <option value="">Choose a district</option>
                                    <option>Dhaka</option>
                                    <option>Barisal</option>
                                    <option>Dhanmoni</option>
                                    <option>Patuakhali</option>
                                </select>
                                <div class="invalid-feedback">Choose a role.</div>
                            </div>
                       <div class="col-md-6">
                                    <label class="form-label fw-semibold d-block">
                                        Subjects
                                    </label>

                                    <div class="col">

                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="subject[]"
                                                    id="webDevelopment" value="Web Development">
                                                <label class="form-check-label" for="webDevelopment">
                                                    Web Development
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="subject[]"
                                                    id="graphicsDesign" value="Graphics Design">
                                                <label class="form-check-label" for="graphicsDesign">
                                                    Graphics Design
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-6 mt-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="subject[]"
                                                    id="digitalMarketing" value="Digital Marketing">
                                                <label class="form-check-label" for="digitalMarketing">
                                                    Digital Marketing
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-6 mt-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="subject[]"
                                                    id="officeApplication" value="Office Application">
                                                <label class="form-check-label" for="officeApplication">
                                                    Office Application
                                                </label>
                                            </div>
                                        </div>

                           
                        </div>
                        
                        <div class="d-flex flex-wrap justify-content-end gap-2 mt-4"><a class="btn btn-outline-secondary"
                                href="users.html">Cancel</a><button class="btn btn-primary" type="submit"><i
                                    class="bi bi-person-check" aria-hidden="true"></i> Create User</button></div>
                    </form>
                </div>

            </section>
        </div>
    </main>
@endsection
@push('scripts')
@endpush
