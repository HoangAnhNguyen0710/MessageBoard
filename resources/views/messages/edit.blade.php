@extends ('layouts.app')

@section ('content')

<div class="prose ml-4">
    <h2 class="text-lg"> Message edit page for id: {{ $message->id}} </h2>
</div>


<div class="flex justify-center">
    <form method="POST" action=" {{ route('messages.update', $message->id)}} " class="w-1/2">
        @csrf
        @method ('PUT') 


        <div class="form-control my-4">
            <label for="content" class=" label">
                <span class="label-text"> Message: </span>
            </label>
            <input type="text" name="content" value="{{ $message->content}}" class="input input-bordered w-full">
        </div>

        <button type="submit" class="btn btn-primary btn-outline"> Update </button>
    </form>
</div>

@endsection