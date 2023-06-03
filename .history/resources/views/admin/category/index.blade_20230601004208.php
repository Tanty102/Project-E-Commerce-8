


@extends("admin.layout.master")

@section("title", "Thể loại")

@section("body")


    <!-- Main -->
    <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                                </div>
                                <div>
                                    Loại
                                    <div class="page-title-subheading">
                                        Xem, tạo, cập nhật, xóa và quản lý.
                                    </div>
                                </div>
                            </div>

                            <div class="page-title-actions">
                                <a href="./admin/category/create" class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-plus fa-w-20"></i>
                                    </span>
                                    Tạo
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">

                                <div class="card-header">

                                    <form>
                                        <div class="input-group">
                                            <input type="search" name="search" id="search" value="{{ request('search') }}"
                                                placeholder="Tìm kiếm mọi thứ" class="form-control">
                                            <span class="input-group-append">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-search"></i>&nbsp;
                                                    Tìm kiếm
                                                </button>
                                            </span>
                                        </div>
                                    </form>

                                    <div class="btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm btn-group">
                                            <button class="btn btn-focus">Tuần này</button>
                                            <button class="active btn btn-focus">Bất cứ lúc nào</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th>Tên</th>
                                                <th class="text-center">Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <div class="container" style="padding: 30px 0;">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        All Category
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <a href="{{route('admin.addcategory')}}" class="btn btn-success pull-right">Add New</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel-body">
                                                                @if (Session::has('message'))
                                                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                                                @endif
                                                                <table class="table table-striped">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th>Category Name</th>
                                                                        <th>Slug</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($categories as $category)
                                                                            <tr>
                                                                                <td>{{ $category->id }}</td>
                                                                                <td>{{ $category->name }}</td>
                                                                                <td>{{ $category->slug }}</td>
                                                                                <td>
                                                                                    <a href="{{route('admin.editcategory',['category_slug'=>$category->slug])}}">
                                                                                        <i class="fa fa-edit fa-2x"></i>
                                                                                    </a>
                                                                                    <a href="#" wire:click.prevent='deleteCategory({{$category->id}})'onclick="confirm('Bạn có muốn xoá ?') || event.stopImmediatePropagation()" style="margin-left: 10px;">
                                                                                        <i class="fa fa-times fa-2x text-danger"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                                {{$categories->links()}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </tbody>
                                    </table>
                                </div>

                                <div class="d-block card-footer">
                                    {{-- {{ $productCategories->links() }} --}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
    <!-- End Main -->


@endsection
