<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Sale Setting
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                       <form class="form-horizontal" wire:submit.prevent='updateSlate'>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Status</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model='status'>
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>
                            </div>

                            {{-- <div class="form-group">
                                <label class="col-md-4 control-label">Sale Date</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="YYYY/MM/DD H:M:S" id="sale_date" name="sale_date" wire:model="sale_date">
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <label class="col-md-4 control-label">Sale Date</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="YYYY/MM/DD H:M:S" id="sale_date" name="sale_date" wire:model="sale_date">
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @push('scripts')
<script>
    $(function () {
        $('#sale_date').datetimepicker({
            format: 'Y-MM-DD h:m:s'
        })
        .on('dp.change', function (event) {
            // var date = event.date.format('YYYY-MM-DD HH:mm:ss');
            var data = $('#sale_date').val();
            @this.set('sale_date', data);
        });
    });
</script>
@endpush --}}



@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js" integrity="sha512-LH7GyBl92jx+coPzXjKtGfeOzJcvUB31r+ThKjv1TJ7yTpeMKPjKAMUN9zc/Q+47BJZJtQa1G83K1dD0v0oY3w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(function () {
            $('#sale_date').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss'
            }).on('change.datetimepicker', function (event) {
                var data = $('#sale_date').val();
                @this.set('sale_date', data);
            });
        });
    </script>
@endpush