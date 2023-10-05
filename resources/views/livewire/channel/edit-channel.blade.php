<div>
    {{-- Stop trying to control. --}}
    @if($channel->image)
        <img src="{{asset('images', '/' . $channel->image)}}" alt="">
        @endif
    <form wire:submit.prevent="update">

        <div class="form-group">
            <label for="name" style="margin-top: 15px" >Name</label>
            <input type="text" class="form-control" wire:model="channel.name">
        </div>

        @error('channel.name')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror

        <div class="form-group">
            <label for="slug" style="margin-top: 15px" >Slug</label>
            <input type="text" class="form-control" wire:model="channel.slug">
        </div>

        @error('channel.slug')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror

        <div class="form-group">
            <label for="description" style="margin-top: 15px" >Description</label>
            <textarea cols="30" rows="4" class="form-control" wire:model="channel.description"></textarea>
        </div>

        @error('channel.description')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror

        <div class="form-group">
            <input type="file" wire:model="image">
        </div>

        <div class="form-group">
            @if($image)
                Photo Preview:
            <img src="{{$image->temporaryUrl()}}" class="img-thumbnail"
            @endif
        </div>

        @error('channel.image')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror

        <div class="form-group">
        <button type="submit" class="btn btn-primary" style="margin-top: 15px">Update</button>
        </div>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif

    </form>
</div>
