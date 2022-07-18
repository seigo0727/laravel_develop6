@extends('admin.layouts.app')

@section('content')
    <a class="btn btn-secondary" href="{{ route($routes['index']) }}">Back</a>

    <hr>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ $formAction }}">
                @csrf
                <?php if(!empty($formMethod)): ?>
                @method($formMethod)
                <?php endif; ?>
                @foreach($forms as $form)
                @php
                $items = $form['items'];
                @endphp
                    @component($form['template'], [
                        'name' => $items['name'],
                        'label' => $items['label'],
                        'old' => old($items['name'], $formData[$items['name']] ?? null),
                        'required' => $items['required'],
                        'placeholder' => isset($items['placeholder']) ? $items['placeholder'] : null,
                        'choices' => isset($items['choices']) ? $items['choices'] : [],                        
                    ])
                    @endcomponent
                @endforeach

                <hr>

                <button type="submit" class="btn btn-primary">
                    Register
                </button>
            </form>

        </div>
    </div>
@endsection