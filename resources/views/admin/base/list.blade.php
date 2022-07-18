@extends('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <a href="{{ route($routes['create']) }}" class="btn btn-secondary">New</a>
        {{-- <a href="{{ route($routes['sort']) }}" class="btn btn-primary">Sort</a> --}}

        <hr>

        {{-- @include('admin.layouts.elements.flush-message') --}}

        <table id="listTable" class="table table-bordered">
            <thead>
                <th>Name</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </thead>
            <tbody>
            <?php foreach($items as $item): ?>
            <tr>
                <td>{{ $item->name }}</td>
                <td>
                    {{-- <a href="{{ route('admin.side_menu_items.index', ['parentId' => $item->uuid]) }}" class="btn btn-outline-secondary btn-sm">Items</a> --}}
                </td>
                <td>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="{{ route($routes['edit'], ['id' => $item->id]) }}" class="btn btn-secondary btn-sm">Edit</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" class="btn btn-danger btn-sm btn-destroy" data-target-id="{{ $item->uuid }}">Delete</a>
                        </li>
                    </ul>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <form id="deleteForm" action="" method="post">
            @csrf
            @method('DELETE')
        </form>

        <script>
        document.addEventListener('DOMContentLoaded', function(){
            var deleteButtons = document.querySelectorAll('#listTable .btn-destroy');
            var route = '{{ rtrim(route($routes['index']), '/') }}';
            var form = document.querySelector('#deleteForm');

            for(var i=0; i < deleteButtons.length; i++){
                (function(button) {
                    button.addEventListener('click', function (e) {
                        e.preventDefault();
                        if(window.confirm('削除を実行します。よろしいですか？')) {
                            var targetId = button.getAttribute('data-target-id');
                            form.setAttribute('action', route + '/' + targetId);
                            form.submit();
                            document.querySelector('#loadingOverlay').classList.add('show');
                        }
                    });
                })(deleteButtons[i]);
            }
        });
        </script>
    </div>
</div>
@endsection