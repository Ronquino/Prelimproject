@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pricings</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('pricings.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')
        @extends('layouts.app')

@section('content')
@extends('layouts.app')

@section('content')
<div class="container">
    <table>
        <tr>
            <h4>KYRIE 7 EP</h4>
            <div class="w3-cursive">
                <img src="/Kyrie 7 Ep.jpeg">
            <p>&#9632; Colour Shown: Yellow Strike</p>
            <p>&#9632; Style: CQ9327-700</p>
            <p> <span>&#8369;</span>1599 </p>
            <tr>
            <h4>Nike Men's Kyrie Flytrap III</h4>
            <div class="w3-cursive">
            <img src="/Kyrie 4 ep.jpeg">
            <p>&#9632; Colour Shown: Bright Crimson</p>
            <p>&#9632; Style: CD0191-103</p>
            <p> <span>&#8369;</span>1899  </p>
            </tr>
            <tr>
            <h4>Kyrie Flytrap 4 EP</h4>
            <div class="w3-cursive">
            <img src="/nike 3.jpeg">
            <p>&#9632; Colour Shown: Black/Metallic Silver/White</p>
            <p>&#9632; Style: CT1973-001</p>
            <p> <span>&#8369;</span>1499 </p>
            </tr>
            
            <style>

                table, th, td{
                    padding:10px;
                    background-color:white;
                    width: 900px;
                    height: 150;
                    text=align:center;
                }
            </style>
        </tr>
        @endsection
    </table>

