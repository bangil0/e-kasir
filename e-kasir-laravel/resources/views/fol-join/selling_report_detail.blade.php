@extends('fol-layout/main')

@section('title', 'Detail Laporan Penjualan')

@section('user')
{{ auth()->user()->name }}
@endsection

@section('content')
<div class="container">
    <h3>Detail Laporan Penjualan</h3>
    <div class="card">
        <div class="card-body">
            <div class="container">
                <table class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width: 10px;">#</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Kuantitas</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detail_transaksi as $dtrs)
                        <tr>
                            <td style="width: 10px;"> {{ $loop->iteration }} </td>
                            <td>{{$dtrs->nama_barang}}</td>
                            <td>{{$dtrs->harga}}</td>
                            <td>{{$dtrs->jumlah}}</td>
                            <td>{{$dtrs->subtotal}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" class="font-weight-bold">Total</td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td class="hidden-xs"><strong>Rp.<span class="cart-total">{{ $total }}</span></strong>,-
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection