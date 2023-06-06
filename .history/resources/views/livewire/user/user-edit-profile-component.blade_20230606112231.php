<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @lang("message.Update Profile")
                </div>
                <div class="panel-body">
                    <form action="">
                        <div class="col-md-4">
                            @if ($user->profile->image)
                                <img src="{{asset('assets/images/profile')}}/{{$user->profile->image}}" width="100%">
                            @else
                                <img src="{{asset('assets/images/profile/default.jpg')}}" width="100%">
                            @endif
                            <input type="file" class="form-control" wire:model='newimage'>
                        </div>
                        <div class="col-md-8">
                            <p><b>Name: </b><input type="file" class="form-control" wire:model='name'></p>
                            <p><b>Email: </b>{{$user->email}}</p>
                            <p><b>Phone: </b><input type="file" class="form-control" wire:model='mobile'></p>
                            <hr>
                            <p><b>Line1: </b><input type="file" class="form-control" wire:model='line1'></p>
                            <p><b>Line2: </b><input type="file" class="form-control" wire:model='line2'></p>
                            <p><b>City: </b><input type="file" class="form-control" wire:model='city'></p>
                            <p><b>Province: </b><input type="file" class="form-control" wire:model='province'></p>
                            <p><b>Country: </b><input type="file" class="form-control" wire:model='country'></p>
                            <p><b>Zip Code: </b><input type="file" class="form-control" wire:model='zipcode'></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
