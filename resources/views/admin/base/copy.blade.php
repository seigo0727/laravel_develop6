@extends('admin.layouts.app')

@section('content')
    <a class="btn btn-secondary" href="{{ route($routes['index']) }}">Back</a>

    <hr>

    <div class="card">
        <div class="card-body">
@dd($forms)
            <form method="POST" action="{{ $formAction }}">
                @csrf
                <?php if(!empty($formMethod)): ?>
                @method($formMethod)
                <?php endif; ?>

                @component('admin.form.text', [
                    'name' => 'name',
                    'label' => '表示名',
                    'old' => old('name', $formData['name'] ?? null),
                    'required' => true,
                ])
                @endcomponent

                @component('admin.form.text', [
                    'name' => 'username',
                    'label' => '管理者名',
                    'old' => old('username', $formData['username'] ?? null),
                    'required' => true,
                ])
                @endcomponent

                @component('admin.form.password', [
                    'name' => 'password',
                    'label' => 'パスワード',
                    'old' => old('password', $formData['password'] ?? null),
                    'required' => false,
                ])
                @endcomponent

                @component('admin.form.text', [
                    'name' => 'password_confirmation',
                    'label' => 'パスワード（確認用）',
                    'old' => old('password_confirmation', $formData['password_confirmation'] ?? null),
                ])
                @endcomponent

                @component('admin.form.text', [
                    'name' => 'email',
                    'label' => 'メールアドレス',
                    'old' => old('email', $formData['email'] ?? null),
                ])
                @endcomponent

                @component('admin.form.select', [
                    'name' => 'admin_group_uuid',
                    'label' => 'グループ',
                    'old' => old('admin_group_uuid', $formData['admin_group_uuid'] ?? null),
                    'choices' => $adminGroupsChoices,
                ])
                @endcomponent

                <hr>

                <button type="submit" class="btn btn-primary">
                    Register
                </button>
            </form>

        </div>
    </div>
@endsection