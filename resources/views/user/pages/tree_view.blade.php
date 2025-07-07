@extends('user.main')

@section('content')
<div class="container-fluid mt-4">
    <h2 class="fw-bold mb-4 text-white" style="font-size:2rem;">Tree View</h2>

    <div class="row justify-content-center mb-3">
        <div class="col-lg-8">
            <div class="bg-primary text-white rounded p-3 mb-2 d-flex justify-content-between">
                <div><strong>ID:</strong> {{ $user->username ?? 'N/A' }}</div>
                <div><strong>Name:</strong> {{ $user->full_name ?? 'N/A' }}</div>
            </div>
            <table class="table table-bordered text-white" style="background: rgba(0,0,0,0.2);">
                <thead>
                    <tr>
                        <th></th>
                        <th class="text-center">Left</th>
                        <th class="text-center">Right</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Members</td>
                        <td class="text-center">{{ $left_members ?? 0 }}</td>
                        <td class="text-center">{{ $right_members ?? 0 }}</td>
                    </tr>
                    <tr>
                        <td>Amount</td>
                        <td class="text-center">{{ $left_amount ?? 0 }}</td>
                        <td class="text-center">{{ $right_amount ?? 0 }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-lg-4">
            <form class="d-flex justify-content-end" method="get" action="{{ route('tree_view') }}">
                <input type="text" name="member_id" class="form-control me-2" placeholder="Member ID" style="max-width:200px;">
                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>

    {{-- Tree --}}
    <div class="d-flex justify-content-center">
        <div class="tree-view-container">
            <div class="tree-view">
                {{-- Root --}}
                <div class="tree-node root">
                    <div class="user-icon user-main"><i class="fas fa-user-circle"></i></div>
                    <div class="user-id">{{ $user->username ?? 'N/A' }}</div>
                    <div class="user-name">{{ $user->full_name ?? 'N/A' }}</div>
                </div>

                <div class="tree-branches">
                    {{-- LEFT BRANCH --}}
                    <div class="tree-branch">
                        @if($left_user)
                            <div class="tree-node child">
                                <div class="user-icon user-left"><i class="fas fa-user-circle"></i></div>
                                <div class="user-id">{{ $left_user->username }}</div>
                                <div class="user-name">{{ $left_user->full_name }}</div>
                            </div>

                            <div class="tree-branch">
                                @if($left_left_user)
                                    <div class="tree-node child">
                                        <div class="user-icon user-left"><i class="fas fa-user-circle"></i></div>
                                        <div class="user-id">{{ $left_left_user->username }}</div>
                                        <div class="user-name">{{ $left_left_user->full_name }}</div>
                                    </div>
                                @else
                                    <div class="tree-node child empty">
                                        <div class="user-icon"><i class="fas fa-user-plus"></i></div>
                                        <div class="user-id">N/A</div>
                                    </div>
                                @endif

                                {{-- Empty node right of left --}}
                                <div class="tree-node child empty">
                                    <div class="user-icon"><i class="fas fa-user-plus"></i></div>
                                    <div class="user-id">N/A</div>
                                </div>
                            </div>
                        @else
                            <div class="tree-node child empty">
                                <div class="user-icon"><i class="fas fa-user-plus"></i></div>
                                <div class="user-id">N/A</div>
                            </div>
                        @endif
                    </div>

                    {{-- RIGHT BRANCH --}}
                    <div class="tree-branch">
                        @if($right_user)
                            <div class="tree-node child">
                                <div class="user-icon user-right"><i class="fas fa-user-circle"></i></div>
                                <div class="user-id">{{ $right_user->username }}</div>
                                <div class="user-name">{{ $right_user->full_name }}</div>
                            </div>

                            <div class="tree-branch">
                                {{-- Empty node left of right --}}
                                <div class="tree-node child empty">
                                    <div class="user-icon"><i class="fas fa-user-plus"></i></div>
                                    <div class="user-id">N/A</div>
                                </div>

                                @if($right_right_user)
                                    <div class="tree-node child">
                                        <div class="user-icon user-right"><i class="fas fa-user-circle"></i></div>
                                        <div class="user-id">{{ $right_right_user->username }}</div>
                                        <div class="user-name">{{ $right_right_user->full_name }}</div>
                                    </div>
                                @else
                                    <div class="tree-node child empty">
                                        <div class="user-icon"><i class="fas fa-user-plus"></i></div>
                                        <div class="user-id">N/A</div>
                                    </div>
                                @endif
                            </div>
                        @else
                            <div class="tree-node child empty">
                                <div class="user-icon"><i class="fas fa-user-plus"></i></div>
                                <div class="user-id">N/A</div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- CSS --}}
<style>
.tree-view-container { min-width: 900px; overflow-x: auto; }
.tree-view { display: flex; flex-direction: column; align-items: center; }
.tree-node { display: flex; flex-direction: column; align-items: center; margin: 10px; }
.user-icon { font-size: 2.5rem; margin-bottom: 5px; }
.user-main { color: #4caf50; }
.user-left, .user-right { color: #e53935; }
.tree-branches { display: flex; justify-content: center; width: 100%; }
.tree-branch { display: flex; flex-direction: column; align-items: center; margin: 0 40px; }
.child { margin-top: 30px; }
.empty .user-icon { color: #bdbdbd; }
.user-id, .user-name { font-size: 1rem; color: #fff; }
</style>
@endsection
