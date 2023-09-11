@extends('admin.layout.master')
@section('title', 'Product List')
@section('content')

    <div class="content-start transition">
        <div class="container-fluid dashboard">
            <div class="content-header">
                <h1>Customers</h1>
                <p></p>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">


                        <table id="customer-list" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Avatar</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>



                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{ asset($user->image) }}</td>
                                        <td>{{ $user->f_name }}</td>
                                        <td>{{ $user->l_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->status }}
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch
                                                    checkbox input</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-icon btn-sm btn-ghost rounded-circle" href="#!"
                                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i data-feather="more-vertical" class="icon-xs"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item d-flex align-items-center"
                                                            href={{ route('admin.users.details', encrypt($user->user_id)) }}>Info</a>
                                                    </li>
                                                    <li><a class="dropdown-item d-flex align-items-center"
                                                            href={{ route('admin.users.edit', encrypt($user->user_id)) }}>Edit</a>
                                                    </li>
                                                    {{-- <li><a class="dropdown-item d-flex align-items-center"
                                                            href="{{ route('admin.products.delete', encrypt($product->product_id)) }}">Delete
                                                        </a> --}}

                                                    <form method="POST"
                                                        action="{{ route('admin.users.delete', encrypt($user->user_id)) }}">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="submit"
                                                            class="dropdown-item d-flex align-items-center confirm-delete">Delete</button>
                                                    </form>


                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>

        </div>

    </div>
    </div>


@endsection
