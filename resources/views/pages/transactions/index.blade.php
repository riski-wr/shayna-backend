@extends('layouts.default')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                     <div class="card-body">
                         <div class="box-title">
                             Daftar Barang
                         </div>
                     </div>
                     <div class="card-body--">
                          <div class="table-stats order-table ov-h">
                              <table class="table">
                                  <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Nomor</th>
                                        <th>Price</th>
                                        <th>Total Transaksi</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @forelse ($items as $item)
                                        <tr> 
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->emial }}</td>
                                            <td>{{ $item->number }}</td>
                                            <td>${{ $item->transaction_total }}</td>
                                            <td>
                                                @if ($item->transaction_status == "PENDING")
                                                    <span class="badge badge-info">
                                                @elseif($item->transaction_status == "SUCCESS")
                                                    <span class="badge badge-success"></span>
                                                @elseif($item->transaction_status == "FAILED")
                                                    <span class="badge badge-info">
                                                @else
                                                    <span>
                                                @endif
                                                    {{ $item->transaction_status }}
                                                </span>
                                            </td>
                                            <td>
                                                @if ($item->transaction_status == "PENDING")
                                                    <a href="{{ route('transactions.status', $item->id) }}?status=SUCCESS" class="btn btn-success btn-sm">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                    <a href="{{ route('transactions.status', $item->id) }}?status=FAILED" class="btn btn-warning btn-sm">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                @endif
                                                <a href="#mymodal"
                                                    data-remote="{{ route('transactions.show', $item->id) }}"
                                                    data-toggle="modal"
                                                    data-target="#mymodal"
                                                    data-title="Detail Transaksi {{ $item->id }}" 
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <i class="fa fa-eye"></i>

                                                </a>
                                                <a href="{{ route('transactions.edit', $item->id) }}" class="btn btn-info btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form action="{{ route('transactions.destroy', $item->id) }}" method="POST" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                </form>
                                            </td>
                                        </tr>  
                                      @empty
                                        <tr>
                                            <td colspan="6" class="text-center p-5">
                                                Data Tidak Tersedia
                                            </td>
                                        </tr>
                                          
                                      @endforelse
                                      
                                  </tbody>
                              </table>
                          </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
@endsection