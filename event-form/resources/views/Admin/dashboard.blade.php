@extends('admin_app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Dashboard</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboards</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted font-weight-medium">Users</p>
                                            <h4 class="mb-0">{{count($users)}}</h4>
                                        </div>

                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                            <span class="avatar-title">
                                                <i class="bx bx-user font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mini-stats-wid">
                                <div class="card-body">

                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted font-weight-medium">Attendees</p>
                                            <h4 class="mb-0">{{count($attendees)}}</h4>
                                        </div>

                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                        <span class="avatar-title">
                                                            <i class="bx bx-user-circle font-size-24"></i>
                                                        </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Attendees' Details</h4>
                            <div class="table-responsive">
                                <table id="datatable-buttons" class="table table-centered table-nowrap mb-0">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>Surname</th>
                                        <th>First Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Linkedin Link</th>
                                        <th>Company Name</th>
                                        <th>No of staff</th>
                                        <th>Position</th>
                                        <th>Company's Website</th>
                                        <th>Company's Linkedin</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($attendees as $key => $attendee)
                                        <tr>
                                            <td>{{$attendee->surname}}</td>
                                            <td>
                                                {{$attendee->first_name}}
                                            </td>
                                            <td>
                                                {{$attendee->email}}</td>
                                            <td>
                                                {{$attendee->phone_number}}
                                            </td>
                                            <td>
                                                {{$attendee->linkedin_link}}
                                            </td>
                                            <td>
                                                {{$attendee->company_name}}
                                            </td>
                                            <td>
                                                {{$attendee->no_of_staff}}
                                            </td>
                                            <td>
                                                {{$attendee->position}}
                                            </td>
                                            <td>
                                                {{$attendee->company_website}}
                                            </td>
                                            <td>
                                                {{$attendee->company_linkedin}}
                                            </td>
                                            {{--<td>
                                                <a href="{{route('user.view-employee-details', ['token' => $employee->token])}}">
                                                <span data-toggle="tooltip" data-placement="top" title data-original-title="Edit Employee's Details">
                                                    <i class="mdi mdi-eye mdi-24px"></i>
                                                </span>
                                                </a>
                                                --}}{{--
                                                     <a href="{{route('user.activate-user', ['token' => $user->token])}}">
                                                         <span data-toggle="tooltip" data-placement="top" title data-original-title="Activate User">
                                                             <i class="mdi mdi-check-outline mdi-24px"></i>
                                                         </span>
                                                     </a>

                                                 <a href="#edit-user-{{$key}}" data-toggle="modal" >
                                                     <span data-toggle="tooltip" data-placement="top" title data-original-title="Edit User's Role">
                                                         <i class="mdi mdi-account-convert mdi-24px"></i>
                                                     </span>
                                                 </a>--}}{{--
                                                --}}{{--@if($user->role_id == 1)
                                                    <a href="#edit-user-{{$key}}" data-toggle="modal" >
                                                        <span data-toggle="tooltip" data-placement="top" title data-original-title="Edit User's Membership Level">
                                                            <i class="mdi mdi-account-convert mdi-24px"></i>
                                                        </span>
                                                    </a>
                                                @endif
                                                <a href="{{route('admin.view-user-details', ['token' => $user->token])}}">
                                                    <span data-toggle="tooltip" data-placement="top" title data-original-title="View User's Details">
                                                        <i class="mdi mdi-eye-circle mdi-24px"></i>
                                                    </span>
                                                </a>
                                                @if($user->active == 1)
                                                    <a href="{{route('admin.suspend-user', ['token' => $user->token])}}">
                                                        <span data-toggle="tooltip" data-placement="top" title data-original-title="Suspend User">
                                                            <i class="mdi mdi-close-thick mdi-24px"></i>
                                                        </span>
                                                    </a>
                                                @else
                                                    <a href="{{route('admin.activate-user', ['token' => $user->token])}}">
                                                        <span data-toggle="tooltip" data-placement="top" title data-original-title="Activate User">
                                                            <i class="mdi mdi-check-outline mdi-24px"></i>
                                                        </span>
                                                    </a>
                                                @endif--}}{{--
                                                --}}{{--
                                                                                            <button class="btn btn-sm btn-outline-primary waves-effect waves-light" data-toggle="modal" data-target="#edit-store-{{$key}}"> Edit</button>
                                                --}}{{--
                                            </td>--}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
@endsection
