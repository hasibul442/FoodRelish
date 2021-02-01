@extends('layouts.master')
@section('content')
<div class="card">
    <div class="card-body" style="background-color: #fff; color:#000">
        <h2 class="card-title text-center" style="font-weight: 700; padding-top: 3rem">Invoice/Bill</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 style="font-weight: bold">FOODRELISH.COM</h3>
                    <p> Office: House # 18, Road #10, Block-A <br>
                        Ward-01, East Vatara, Gulshan, Dhaka-1212<br>
                        Mobile : 01873 703 203, 01980 700 200 <br>
                        Phone : 9002884, www.foodrelishbd.com <br>
                    </p>
                </div>
                <div class="col-sm-6 text-right">
                    <p style="font-weight: bold;">Invoice No #2068</p>
                    <p style="font-weight: bold;">Date: <span style="font-weight: normal">9/12/2020</span></p>

                </div>
            </div>

            <hr style="border-top: 2px solid rgb(247, 0, 0);">
            <div class="row">

                <div class="col-sm-8">
                    <p style="font-weight: 700; font-size:20px;text-decoration: underline;">Bill To</p>
                    <p style="font-weight: bold; font-size:16px">Vendor Number:&nbsp;&nbsp;<span
                            style="font-weight: normal">0100000013</span></p>
                    <p style="font-weight: bold; font-size:16px">Company Name:&nbsp;&nbsp;<span
                            style="font-weight: normal">Agora
                            Limitd</span></p>
                    <p style="font-weight: bold; font-size:16px">Location:&nbsp;&nbsp;<span
                            style="font-weight: normal">Mogbazar</span></p>
                    <p style="font-weight: bold; font-size:16px">Delivery Site Address:&nbsp;&nbsp;<span
                            style="font-weight: normal">8, S. S. Salina Parvin Road (Old-69), Dhaka-1217,
                            Bangladesh</span>
                    </p>

                </div>
                <div class="col-sm-4 text-right">
                    <p class="card-title text-center" style="font-weight: 700; font-size:20px;">Payment Details</p>
                    <p style="font-weight: bold; font-size:16px">VAT:&nbsp;&nbsp;<span
                            style="font-weight: normal">12321</span></p>
                    <p style="font-weight: bold; font-size:16px">VAT ID:&nbsp;&nbsp;<span
                            style="font-weight: normal">1212</span></p>
                    <p style="font-weight: bold; font-size:16px">Payment Type:&nbsp;&nbsp;<span
                            style="font-weight: normal">Root</span></p>
                    <p style="font-weight: bold; font-size:16px">Name:&nbsp;&nbsp;<span
                            style="font-weight: normal">AAAAAAA BBBBBB</span></p>

                </div>
            </div>

            <hr style="border-top: 2px solid rgb(255, 0, 0);">
            <div class="table-responsive" style="padding-bottom: 2rem">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">EAN No</th>
                            <th scope="col">Name of items</th>
                            <th scope="col">Qty.</th>
                            <th scope="col">Unity Price<br>(TK)</th>
                            <th scope="col">Unity Amount<br>(TK)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td>15654</td>
                            <td>RELISH NICE SALTED BISCUIT 440GM</td>
                            <td>6</td>
                            <td>146</td>
                            <td>856.00</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>15654</td>
                            <td>RELISH NICE SALTED BISCUIT 440GM</td>
                            <td>6</td>
                            <td>146</td>
                            <td>856.00</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>15654</td>
                            <td>RELISH NICE SALTED BISCUIT 440GM</td>
                            <td>6</td>
                            <td>146</td>
                            <td>856.00</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>15654</td>
                            <td>RELISH NICE SALTED BISCUIT 440GM</td>
                            <td>6</td>
                            <td>146</td>
                            <td>856.00</td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                <div class="py-3 px-5 text-right">
                    <div class="mb-2">Grand Total</div>
                    <div class="h2 font-weight-light">234,234</div>
                </div>

                <div class="py-3 px-5 text-right">
                    <div class="mb-2">Discount</div>
                    <div class="h2 font-weight-light">10%</div>
                </div>

                <div class="py-3 px-5 text-right">
                    <div class="mb-2">Sub - Total amount</div>
                    <div class="h2 font-weight-light">32,432</div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
