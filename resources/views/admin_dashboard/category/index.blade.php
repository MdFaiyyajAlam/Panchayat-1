@extends('layouts.admin.app')

@section('main')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            {{-- categories list --}}
            <div class="col-12">
                <x-bootstrap.card>
                    <x-slot name="title">
                        <div>Categories</div>
                    </x-slot>
                    <x-slot name="controls">
                        <div class="table-controls"></div>
                    </x-slot>
                    <x-slot name="content">
                        <hr>
                        <div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th class="text-center">Id</th>
										<th>Name</th>
										<th class="text-center">Menu Order</th>
										<th class="text-center">Color</th>
										<th class="d-print-none text-center">Option</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td class="text-center">{{$category->id}}</td>
                                            <td>{{ucwords($category->name)}}</td>
                                            <td class="text-center">{{ucwords($category->navigation->menu_order)}}</td>
                                            <td class="text-center">{{ucwords($category->color)}}</td>
                                            <td class="dropdown d-print-none text-center">
                                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Select an option
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="{{route('admin.category.edit', $category->id)}}">
                                                            <i class='bx bxs-edit bx-xs me-2'></i>
                                                            Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" onclick="deleteConfirm(event)" class="dropdown-item" >
                                                            <form action="{{route('admin.category.delete', [$category->id])}}" method="get" class="d-none"></form>
                                                            <i class='bx bxs-trash bx-xs me-2'></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
							</table>
						</div>
                    </x-slot>
                </x-bootstrap.card>
            </div>
        </div>
    
    </div>
</div>
<!--end page wrapper -->
@endsection

@push('js')
    <script>

        $(document).ready(function() {
			var table = $('#example').DataTable( {
				lengthChange: true,
				buttons: [{"extend":'excel', 'className':'btn btn-sm', 'text':'<i class="bx bx-spreadsheet pb-1"></i> Excel'}, {'extend':'pdf', 'text':'<i class="bx bxl-adobe pb-1"></i> Pdf', 'className':'btn btn-sm'}, {'extend':'print', 'text':'<i class="bx bx-printer pb-1"></i> Print', 'className':'btn btn-sm'}]
			} );
		 
			table.buttons().container()
			.appendTo( '.table-controls' );
		});
                
    </script>
@endpush