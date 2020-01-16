@extends("layouts.layout")
@section('title'){{'Create Bird'}}@endsection
@section('main')
    <form method="post" action="{{ route('birds.store') }}">
        {{ csrf_field() }}
        <input type="hidden" name="is-female" value="false">
        <div class="field">
            <div class="control">
                <input type="text" name="tracker_id" placeholder="tracker id" required
                       class="input {{ $errors->has('tracker_id') ? 'is-danger' : '' }}"
                       value="{{ old('tracker_id') }}">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <input type="text" name="name" placeholder="Name" required
                       class="input {{ $errors->has('name') ? 'is-danger' : '' }}" value="{{ old('name') }}">
            </div>
        </div>
        <div class="field">
            <label for="is-female">Female</label>
            <input type="checkbox" name="is-female">
        </div>
        <div class="field">
            <button type="submit">Create Bird</button>
        </div>

        <div class="notification is-danger">
            <ul>
                @foreach ($errors->all() as $message)
                    <li>
                        {{$message}}
                    </li>
                @endforeach
            </ul>
        </div>

    </form>

@endsection

