@extends('layouts.app')

@section('template_title')
    Activitat
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Activitat') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('activitats.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Title</th>
										<th>Descripcio</th>
										<th>Programacion Id</th>
										<th>Uf Id</th>
										<th>Ra Ids</th>
										<th>Criteri Ids</th>
										<th>Contingut Ids</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($activitats as $activitat)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $activitat->title }}</td>
											<td>{{ $activitat->descripcio }}</td>
											<td>{{ $activitat->programacion_id }}</td>
											<td>{{ $activitat->uf_id }}</td>
											<td>{{ $activitat->ra_ids }}</td>
											<td>{{ $activitat->criteri_ids }}</td>
											<td>{{ $activitat->contingut_ids }}</td>

                                            <td>
                                                <form action="{{ route('activitats.destroy',$activitat->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('activitats.show',$activitat->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('activitats.edit',$activitat->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $activitats->links() !!}
            </div>
        </div>
    </div>
@endsection
